<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; padding: 8px; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">INVOICE PEMBELIAN</h2>
    <p>Tanggal: <?= date('d-m-Y H:i') ?></p>
    <table>
        <thead>
            <tr>
                <th>No</th><th>Nama Produk</th><th>Harga</th><th>Jumlah</th><th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($cartItems as $item): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $item['name'] ?></td>
                    <td>Rp <?= number_format($item['price'], 0, ',', '.') ?></td>
                    <td><?= $item['qty'] ?></td>
                    <td>Rp <?= number_format($item['subtotal'], 0, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p><strong>Total: Rp <?= number_format($total, 0, ',', '.') ?></strong></p>
</body>
</html>
