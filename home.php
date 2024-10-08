<?php 
session_start(); // Ensure you start the session

include "header.php";
?>

<!-- Link to Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Roboto', sans-serif;
        background: linear-gradient(270deg, #ff8c00, #e0e0e0, #ff8c00);
        background-size: 400% 400%;
        animation: gradientAnimation 15s ease infinite;
        color: #333; /* Default text color */
    }

    @keyframes gradientAnimation {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .container {
        background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        margin-top: 50px;
    }

    .card {
        transition: transform 0.3s, box-shadow 0.3s;
        border: none; /* Remove default border */
    }
    
    .card:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    }
    
    .card-img-top {
        border-radius: 10px 10px 0 0; /* Rounded top corners */
    }

    .btn {
        font-weight: bold;
        transition: background-color 0.3s, transform 0.2s;
    }
    
    .btn:hover {
        background-color: #28a745;
        color: white;
        transform: scale(1.1); /* Button grows on hover */
    }

    .lead {
        font-size: 1.5rem;
        color: #444;
        margin-bottom: 20px;
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .card {
            margin-bottom: 20px; /* Add space between rows */
        }
    }

    @media (max-width: 992px) {
        .lead {
            font-size: 1.25rem;
        }
    }

    @media (max-width: 768px) {
        .container {
            padding: 15px; /* Reduce padding on smaller screens */
        }

        .lead {
            font-size: 1.1rem; /* Adjust font size */
        }
    }

    @media (max-width: 576px) {
        .lead {
            font-size: 1rem; /* Further adjust font size */
        }

        .card-img-top {
            max-height: 200px; /* Reduce image height on small screens */
        }
    }
</style>

<div class="container">
    <h2 class="mt-5">Selamat Datang, <?= isset($_SESSION['nama']) ? htmlspecialchars($_SESSION['nama']) : 'Pengunjung' ?>!</h2>
    <p class="lead">Silahkan berbelanja</p>

    <div class="row">
        <?php
        include "koneksi.php";
        
        // Check for connection errors
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM toko_produk";
        $result = mysqli_query($conn, $query);
        
        // Check for query errors
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card shadow-sm border-light">
                    <img src="foto_produk/<?= htmlspecialchars($row['foto_produk']) ?>" class="card-img-top" alt="<?= htmlspecialchars($row['nama_produk']) ?>" style="max-height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row['nama_produk']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($row['deskripsi']) ?></p>
                        <p class="card-text"><strong>Rp <?= number_format($row['harga'], 0, ',', '.') ?></strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="beli_produk.php?id_produk=<?= $row['id_produk'] ?>" class="btn btn-sm btn-outline-success">Beli</a>
                                <a href="tambah_keranjang.php?id=<?= $row['id_produk'] ?>" class="btn btn-sm btn-outline-primary">Tambah ke Keranjang</a>
                            </div>
                            <small class="text-muted">Tersedia</small>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php 
include "footer.php";
?>
