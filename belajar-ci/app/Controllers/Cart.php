<?php namespace App\Controllers;

use App\Models\ProductModel;
use Dompdf\Dompdf;

class Cart extends BaseController
{
    public function index()
    {
    $session = session();
    $cart = $session->get('cart') ?? [];

    $cartItems = [];
    $total = 0;

    foreach ($cart as $item) {
        $qty = $item['qty'] ?? 1;
        $subtotal = $item['price'] * $qty;
        $total += $subtotal;

        $cartItems[] = [
            'id' => $item['id'],
            'name' => $item['name'],
            'image' => $item['image'],
            'price' => $item['price'],
            'qty' => $qty,
            'subtotal' => $subtotal
        ];
    }

    return view('cart', [
        'cartItems' => $cartItems,
        'total' => $total,
        'title' => 'Keranjang Belanja'
    ]);
    }


   public function add($id)
    {
    $session = session();
    $cart = $session->get('cart') ?? [];
    $product = (new ProductModel())->getProductById($id);

    if ($product) {
        $found = false;

        // Cek apakah produk sudah ada di cart
        foreach ($cart as &$item) {
            if ($item['id'] == $id) {
                if (!isset($item['qty'])) {
                    $item['qty'] = 1;
                } else {
                    $item['qty'] += 1;
                }
                $found = true;
                break;
            }
        }

        // Jika belum ada, tambahkan produk dengan qty 1
        if (!$found) {
            $product['qty'] = 1;
            $cart[] = $product;
        }
    }

    $session->set('cart', $cart);
    return redirect()->to('/cart');
    }



    public function remove($id)
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        foreach ($cart as $index => $item) {
            if ($item['id'] == $id) {
                unset($cart[$index]);
                break;
            }
        }

        $session->set('cart', array_values($cart));
        return redirect()->to('/cart');
    }

    public function clear()
    {
        session()->remove('cart');
        return redirect()->to('/cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function invoice()
    {
    $session = session();
    $cartItems = $session->get('cart') ?? [];

    $total = 0;
    foreach ($cartItems as &$item) {
        $qty = $item['qty'] ?? 1;
        $item['subtotal'] = $item['price'] * $qty;
        $total += $item['subtotal'];
    }

    $data = [
        'cartItems' => $cartItems,
        'total' => $total,
        'title' => 'Invoice Pembelian',
    ];

    $html = view('invoice_template', $data);

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('invoice.pdf', ['Attachment' => false]);
    }
}


