<?php
// functions.php
function fetchProducts($pdo)
{
    $products = [];
    $sql = "SELECT id,kode_produk,nama_produk, harga,kategori_produk,deskripsi,gambar_produk FROM katalog";
    $result = $pdo->query($sql);

    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $products[] = $row;
        }
    }
    return $products;
}
