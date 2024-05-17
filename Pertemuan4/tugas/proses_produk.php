<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Menerima Data Form
    $produkBaru = [
        "barang" => $_POST['namabarang'],
        "Harga" => $_POST['harga'],
        "Deskripsi" => $_POST['deskripsi'],
        "Stok" => $_POST['stok']
    ];

    // Memuat Daftar Produk yang Sudah Ada
    $produk = [
        ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
        ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
        ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
        ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
        ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30]
    ];

    // Menambahkan Produk Baru
    $produk[] = $produkBaru;
?>  
    <h2 style="text-align:center;">Daftar Produk</h2>
    <table border=1 class="center" style="width:50%;margin:auto;border-collapse:collapse;">
    <tr>
        <th style="padding:10px;solid black;">Barang</th>
        <th style="padding:10px;solid black;">Harga</th>
        <th style="padding:10px;solid black;">Deskripsi</th>
        <th style="padding:10px;solid black;">Stok</th>
    </tr>
        <?php
        // Menampilkan Daftar Produk yang Diperbarui
        foreach ($produk as $item) {
            echo "<tr>";
            echo "<td>{$item['barang']}</td>";
            echo "<td>" . number_format($item['Harga'], 0, ',', '.') . "</td>";
            echo "<td>{$item['Deskripsi']}</td>";
            echo "<td>{$item['Stok']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
<?php
} else {
    header("Location: form_produk.php");
}
?>