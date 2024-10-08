<?php 
session_start();
if ($_SESSION['status_login'] != true) {
    header('location: login.php');
    exit();
}

// Koneksi ke database
include "koneksi.php";

// Ambil ID pelanggan dari sesi
$id_pelanggan = $_SESSION['id_pelanggan'];

// Ambil data transaksi hanya untuk pelanggan yang sedang login
$query = "SELECT 
                toko_transaksi.id_transaksi, 
                toko_pelanggan.nama AS nama_pelanggan, 
                toko_produk.nama_produk, 
                toko_transaksi.tgl_transaksi, 
                SUM(toko_detail_transaksi.subtotal) AS total 
          FROM 
                toko_transaksi 
          JOIN 
                toko_pelanggan ON toko_transaksi.id_pelanggan = toko_pelanggan.id_pelanggan 
          JOIN 
                toko_detail_transaksi ON toko_transaksi.id_transaksi = toko_detail_transaksi.id_transaksi 
          JOIN 
                toko_produk ON toko_detail_transaksi.id_produk = toko_produk.id_produk
          WHERE 
                toko_transaksi.id_pelanggan = '$id_pelanggan' 
          GROUP BY 
                toko_transaksi.id_transaksi
          ORDER BY 
                toko_transaksi.tgl_transaksi DESC";

$result = mysqli_query($conn, $query);

// Check for query errors
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: linear-gradient(270deg, #ff8c00, #e0e0e0, #ff8c00);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            font-family: 'Arial', sans-serif;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            margin-top: 50px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        h3 {
            margin-bottom: 20px; /* Spacing below the header */
            font-weight: 500; /* Bold font for the header */
        }
        .transaction-card {
            border: 1px solid #e0e0e0; /* Light border */
            border-radius: 8px; /* Rounded corners for cards */
            padding: 20px; /* Padding inside the card */
            margin-bottom: 20px; /* Space between cards */
            transition: transform 0.2s; /* Animation for hover effect */
        }
        .transaction-card:hover {
            transform: scale(1.02); /* Slightly enlarge on hover */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Shadow on hover */
        }
        .total {
            font-weight: bold; /* Bold for total */
            color: #28a745; /* Green color for total */
        }
        .date {
            font-size: 0.9rem; /* Smaller font size for date */
            color: #777; /* Light gray for date */
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>
    <div class="container">
        <h3>Riwayat Transaksi</h3>

        <?php 
        $no = 0;
        while ($row = mysqli_fetch_assoc($result)):
            $no++; ?>
            <div class="transaction-card">
                <h5><?= htmlspecialchars($row['nama_produk']) ?> <span class="date"><?= htmlspecialchars($row['tgl_transaksi']) ?></span></h5>
                <p>Pelanggan: <?= htmlspecialchars($row['nama_pelanggan']) ?></p>
                <p class="total">Total: Rp <?= number_format($row['total'], 0, ',', '.') ?></p>
                <a href="detail_transaksi.php?id=<?= $row['id_transaksi'] ?>" class="btn btn-outline-primary btn-sm">
                    <i class="fas fa-eye"></i> Lihat Detail
                </a>
            </div>
        <?php endwhile; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
