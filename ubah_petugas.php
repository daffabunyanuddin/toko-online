<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ubah Petugas</title>
    <style>
        body {
            background: linear-gradient(to right, #ff7e5f, #feb47b); /* Warm gradient background */
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        .container {
            margin-top: 100px; /* Increased margin for better spacing */
            max-width: 600px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
            background-color: #ffffff;
        }
        h3 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            font-weight: bold;
        }
        .form-label {
            font-weight: bold;
            color: #ff7e5f; /* Color matching the gradient */
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: #ff7e5f; /* Focus border color */
            box-shadow: 0 0 5px rgba(255, 126, 95, 0.5);
        }
        .btn-primary {
            background-color: #ff7e5f; /* Button color matching the gradient */
            border: none;
            border-radius: 10px;
            transition: background-color 0.3s, transform 0.2s;
        }
        .btn-primary:hover {
            background-color: #feb47b; /* Lighter shade on hover */
            transform: scale(1.05); /* Slightly enlarge button on hover */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card p-4">
        <h3>Ubah Petugas</h3>
        <?php 
        include "koneksi.php";
        $qry_get_petugas = mysqli_query($conn, "SELECT * FROM toko_petugas WHERE id_petugas = '".$_GET['id_petugas']."'");
        $dt_petugas = mysqli_fetch_array($qry_get_petugas);
        ?>
        <form action="proses_ubah_petugas.php" method="post">
            <input type="hidden" name="id_petugas" value="<?=$dt_petugas['id_petugas']?>">
            <div class="mb-3">
                <label for="nama_petugas" class="form-label">Nama Petugas:</label>
                <input type="text" name="nama_petugas" value="<?=$dt_petugas['nama_petugas']?>" class="form-control" placeholder="Nama Petugas" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" value="<?=$dt_petugas['username']?>" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password (Kosongkan jika tidak diubah)">
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level:</label>
                <select name="level" class="form-select" id="level" required>
                    <option value="" disabled selected>Pilih Level</option>
                    <option value="CEO" <?= $dt_petugas['level'] == 'CEO' ? 'selected' : '' ?>>CEO</option>
                    <option value="Manager" <?= $dt_petugas['level'] == 'Manager' ? 'selected' : '' ?>>Manager</option>
                    <option value="Admin" <?= $dt_petugas['level'] == 'Admin' ? 'selected' : '' ?>>Admin</option>
                    <option value="Karyawan" <?= $dt_petugas['level'] == 'Karyawan' ? 'selected' : '' ?>>Karyawan</option>
                </select>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary w-100">Ubah Petugas</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
