<?php

$nama = "";
$harga = 0;
$jumlah = 0;
$diskon = 0;
$bayar = 0;

if (isset($_POST["kirim"])) {

    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];

    $total = $harga * $jumlah;

    if ($total >= 500000) {
        $diskon = 20;
    } elseif ($total >= 250000) {
        $diskon = 10;
    } else {
        $diskon = 0;
    }

    $potongan = $total * $diskon / 100;
    $bayar = $total - $potongan;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran</title>
</head>

<body>

<h2>Pembayaran Barang</h2>

<form method="POST">

    <p>
        Nama Barang:
        <input type="text" name="nama">
    </p>

    <p>
        Harga Satuan:
        <input type="number" name="harga" min="0">
    </p>

    <p>
        Jumlah Pembelian:
        <input type="number" name="jumlah" min="1">
    </p>

    <button type="submit" name="kirim">Kirim</button>

</form>

<p>Nama Barang: <?= $nama ?></p>
<p>Harga Satuan: <?= $harga ?></p>
<p>Jumlah Pembelian: <?= $jumlah ?></p>
<p>Diskon: <?= $diskon ?>%</p>
<p>Total Pembayaran: <?= $bayar ?></p>

</body>
</html>