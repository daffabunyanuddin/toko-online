<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Petugas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            height: 100vh;
            margin: 0;
            animation: gradientAnimation 15s ease infinite; /* Animasi latar belakang */
            background: linear-gradient(270deg, #a0d8ef, #f7d4c3, #a0d8ef);
            background-size: 400% 400%; /* Ukuran latar belakang untuk animasi */
            color: #333333;
            font-family: 'Arial', sans-serif;
        }
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .container {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.9); /* Latar belakang putih dengan transparansi */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #ff5722; /* Warna oranye cerah */
            font-weight: bold;
        }
        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.02); /* Efek zoom saat hover */
        }
        .card-header {
            background-color: #00796b; /* Header teal */
            color: white;
            font-weight: bold;
        }
        .btn-primary, .btn-success, .btn-danger {
            transition: background-color 0.3s, transform 0.2s;
        }
        .btn-primary:hover, .btn-success:hover, .btn-danger:hover {
            transform: scale(1.05); /* Efek skala saat hover */
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9rem;
            color: #666;
        }
        .search-bar {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Daftar Petugas</h3>
        
        <!-- Search Bar -->
        <div class="input-group search-bar">
            <input type="text" class="form-control" placeholder="Cari petugas..." aria-label="Search">
            <button class="btn btn-outline-secondary" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <!-- Card Layout for Petugas -->
        <div class="row">
            <?php 
            include "koneksi.php";
            $qry_petugas = mysqli_query($conn, "SELECT * FROM toko_petugas");
            while($data_petugas = mysqli_fetch_array($qry_petugas)) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <?=$data_petugas['nama_petugas']?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>Username:</strong> <?=$data_petugas['username']?></h5>
                            <p class="card-text"><strong>Level:</strong> <?=$data_petugas['level']?></p>
                            <a href="ubah_petugas.php?Id=<?=$data_petugas['id_petugas']?>" class="btn btn-success">
                                <i class="fas fa-edit"></i> Ubah
                            </a> 
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?=$data_petugas['id_petugas']?>">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Delete Confirmation Modal -->
                <div class="modal fade" id="deleteModal<?=$data_petugas['id_petugas']?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus petugas <strong><?=$data_petugas['nama_petugas']?></strong>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <a href="hapus.php?id_petugas=<?=$data_petugas['id_petugas']?>" class="btn btn-danger">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="text-center">
            <a href="tambah_petugas.php" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i> Tambah Petugas
            </a>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Sistem Manajemen Petugas. Semua hak dilindungi.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
