<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;


class TransaksiController extends BaseController
{
    protected $cart;

    function __construct()
    {
        helper('number');
        helper('form');
        $this->cart = \Config\Services::cart();
    }

    public function index()
    {
        $data['items'] = $this->cart->contents();
        $data['total'] = $this->cart->total();
        return view('v_keranjang', $data);
    }

    public function cart_add()
    {
        $this->cart->insert(array(
            'id'        => $this->request->getPost('id'),
            'qty'       => 1,
            'price'     => $this->request->getPost('harga'),
            'name'      => $this->request->getPost('nama'),
            'options'   => array('foto' => $this->request->getPost('foto'))
        ));
        session()->setflashdata('success', 'Produk berhasil ditambahkan ke keranjang. (<a href="' . base_url() . 'keranjang">Lihat</a>)');
        return redirect()->to(base_url('/'));
    }

    public function cart_clear()
    {
        $this->cart->destroy();
        session()->setflashdata('success', 'Keranjang Berhasil Dikosongkan');
        return redirect()->to(base_url('keranjang'));
    }

    public function cart_edit()
    {
        $i = 1;
        foreach ($this->cart->contents() as $value) {
            $this->cart->update(array(
                'rowid' => $value['rowid'],
                'qty'   => $this->request->getPost('qty' . $i++)
            ));
        }

        session()->setflashdata('success', 'Keranjang Berhasil Diedit');
        return redirect()->to(base_url('keranjang'));
    }

    public function cart_delete($rowid)
    {
        $this->cart->remove($rowid);
        session()->setflashdata('success', 'Keranjang Berhasil Dihapus');
        return redirect()->to(base_url('keranjang'));
    }

    public function invoice()
    {
    $cartItems = $this->cart->contents();
    $total = $this->cart->total();
    $tanggal = date('d-m-Y H:i');

    // Jika keranjang kosong, redirect balik
    if (empty($cartItems)) {
        session()->setFlashdata('success', 'Keranjang masih kosong, tidak bisa cetak invoice.');
        return redirect()->to(base_url('keranjang'));
    }

    // Siapkan data untuk ditampilkan di invoice
    $data = [
        'items' => $cartItems,
        'total' => $total,
        'tanggal' => $tanggal,
    ];

    // Render view invoice ke HTML
    $html = view('keranjang/invoice', $data);

    // Setup Dompdf
    $options = new Options();
    $options->set('defaultFont', 'Arial');
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Output file ke browser
    $dompdf->stream('invoice.pdf', ['Attachment' => false]);
    }


}
