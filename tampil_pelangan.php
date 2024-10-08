<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Pelanggan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
            margin: 0;
            animation: gradientAnimation 15s ease infinite; /* Animasi latar belakang */
            background: linear-gradient(270deg, #a0d4f1, #f0e6e9, #a0d4f1);
            background-size: 400% 400%; /* Ukuran latar belakang untuk animasi */
            color: #333;
            font-family: 'Arial', sans-serif;
            overflow: hidden; /* Sembunyikan overflow untuk efek animasi */
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
            animation: fadeIn 0.5s; /* Efek fade-in */
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #00796b; /* Warna teal lebih lembut */
            font-weight: bold;
            text-transform: uppercase;
            animation: slideDown 0.5s; /* Efek slide down */
        }
        @keyframes slideDown {
            from { transform: translateY(-20px); }
            to { transform: translateY(0); }
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f9fbe7; /* Latar belakang hijau lembut untuk tabel */
            border-radius: 10px;
            overflow: hidden;
        }
        th {
            background-color: #81d4fa; /* Biru lembut untuk header */
            color: white;
            text-align: center;
            padding: 15px;
        }
        td {
            padding: 15px;
            text-align: center;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #e1f5fe; /* Light blue untuk baris genap */
        }
        tr:nth-child(odd) {
            background-color: #b2ebf2; /* Cyan lebih terang untuk baris ganjil */
        }
        tr:hover {
            background-color: #80deea; /* Cyan saat hover */
            color: white; /* Teks putih saat hover */
            transform: scale(1.02); /* Sedikit skala saat hover */
            transition: transform 0.2s; /* Transisi halus */
        }
        .btn-success {
            background-color: #4caf50; /* Hijau lembut */
            transition: background-color 0.3s, transform 0.2s; /* Transisi halus */
        }
        .btn-danger {
            background-color: #e53935; /* Merah lembut */
            transition: background-color 0.3s, transform 0.2s; /* Transisi halus */
        }
        .btn-primary {
            background-color: #1e88e5; /* Biru lembut */
            transition: background-color 0.3s, transform 0.2s; /* Transisi halus */
        }
        .btn-success:hover, .btn-danger:hover, .btn-primary:hover {
            transform: scale(1.05); /* Skala saat hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Daftar Pelanggan</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>NO TELEPON</th>
                    <th>USERNAME</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "koneksi.php";
                $qry_pelanggan = mysqli_query($conn, "SELECT * FROM toko_pelanggan");
                $no = 0;
                while($data_pelanggan = mysqli_fetch_array($qry_pelanggan)){
                    $no++; ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_pelanggan['nama']?></td>
                    <td><?=$data_pelanggan['alamat']?></td>
                    <td><?=$data_pelanggan['telp']?></td>
                    <td><?=$data_pelanggan['username']?></td>
                    <td>
                        <a href="ubah_petugas.php?Id=<?=$data_pelanggan['id_pelanggan']?>" class="btn btn-success btn-sm">Ubah</a> 
                        <a href="hapus.php?Id=<?=$data_pelanggan['id_pelanggan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
