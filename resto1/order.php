<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'checkout') {
        // Pastikan nama_pelanggan ada dalam POST
        if (isset($_POST['nama_pelanggan'])) {
            $nama_pelanggan = $conn->real_escape_string($_POST['nama_pelanggan']);
        } else {
            echo "Nama pelanggan tidak didefinisikan.";
            exit;
        }

        // Ambil nomor meja dari POST
        $no_meja = isset($_POST['no_meja']) ? $conn->real_escape_string($_POST['no_meja']) : '';

        // Ambil dan decode cart items
        $cartItems = isset($_POST['cartItems']) ? json_decode($_POST['cartItems'], true) : [];

        if (!empty($cartItems)) {
            // Generate kode_pesanan (misalnya menggunakan timestamp)
            $kode_pesanan = 'ORD' . time();

            // Insert data transaksi
            $query_transaksi = "INSERT INTO transaksi (kode_pesanan, nama_pelanggan, no_meja) VALUES ('$kode_pesanan', '$nama_pelanggan', '$no_meja')";
            if (!$conn->query($query_transaksi)) {
                echo "Error: " . $conn->error;
                exit;
            }

            $id_transaksi = $conn->insert_id; // Mendapatkan ID transaksi yang baru dimasukkan

            // Insert item ke dalam tabel transaksi_item
            foreach ($cartItems as $item) {
                $nama = $conn->real_escape_string($item['name']);
                $harga = $conn->real_escape_string($item['price']);

                $query_item = "INSERT INTO transaksi_item (id_transaksi, nama_item, harga) VALUES ('$id_transaksi', '$nama', '$harga')";

                if (!$conn->query($query_item)) {
                    echo "Error: " . $conn->error;
                    exit;
                }
            }

            echo "Pesanan berhasil dikirim dengan kode pesanan: $kode_pesanan";
        } else {
            echo "Keranjang kosong.";
        }
    } else {
        echo "Aksi tidak dikenali.";
    }
} else {
    echo "Request method tidak valid.";
}
?>
