<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            height: 100vh;
            margin: 0;
            animation: gradientAnimation 15s ease infinite; /* Menambahkan animasi */
            background: linear-gradient(270deg, #ff7e5f, #feb47b, #ff7e5f);
            background-size: 400% 400%; /* Ukuran latar belakang untuk animasi */
        }
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff; /* Latar belakang putih untuk form */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .container:hover {
            transform: scale(1.02); /* Efek skala saat hover */
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
        }
        h3 {
            text-align: center;
            margin-bottom: 30px;
            color: #00796b; /* Warna teal lebih gelap */
            font-weight: bold;
            animation: fadeIn 1s; /* Animasi fade-in */
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .btn-primary {
            background-color: #00796b; /* Warna teal */
            border: none;
            transition: background-color 0.3s, transform 0.3s; /* Tambahkan transform untuk tombol */
        }
        .btn-primary:hover {
            background-color: #004d40; /* Warna teal lebih gelap saat hover */
            transform: translateY(-2px); /* Sedikit angkat saat hover */
        }
        .form-control:focus {
            border-color: #00796b; /* Warna teal border saat fokus */
            box-shadow: 0 0 5px rgba(0, 121, 107, .5); /* Cahaya teal */
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #666;
        }
        label {
            color: #00796b; /* Warna label teal */
        }
        .form-icon {
            position: absolute;
            margin-left: 10px;
            margin-top: 10px;
            color: #00796b;
        }
        .input-group {
            position: relative;
            margin-bottom: 20px; /* Jarak meningkat */
        }
        .input-group input, .input-group textarea {
            padding-left: 40px; /* Ruang untuk ikon */
        }
        .success-message {
            display: none;
            color: #43a047; /* Hijau */
            margin-top: 15px;
            text-align: center;
        }
        .footer-link {
            text-align: center;
            margin-top: 10px;
            color: #00796b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3><i class="fas fa-user-plus"></i> Tambah Pelanggan</h3>
        <form action="proses_tambah_pelangan.php" method="post" onsubmit="showSuccessMessage(event)">
            <div class="input-group">
                <i class="fas fa-user form-icon"></i>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required>
            </div>
            <div class="input-group">
                <i class="fas fa-address-card form-icon"></i>
                <textarea name="Alamat" class="form-control" id="Alamat" rows="3" placeholder="Alamat" required></textarea>
            </div>
            <div class="input-group">
                <i class="fas fa-phone form-icon"></i>
                <input type="text" name="no_tlp" class="form-control" id="no_tlp" placeholder="No Telepon" required>
            </div>
            <div class="input-group">
                <i class="fas fa-user-lock form-icon"></i>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock form-icon"></i>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary w-100">Tambah Pelanggan</button>
            <div class="success-message" id="successMessage">Registrasi berhasil! Terima kasih.</div>
        </form>
        <div class="footer-link">
            <a href="tampil_pelangan.php" class="btn btn-link">Lihat Pelanggan</a>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Sistem Manajemen Pelanggan. Semua hak dilindungi.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        function showSuccessMessage(event) {
            event.preventDefault(); // Prevent default form submission
            document.getElementById("successMessage").style.display = "block"; // Show success message
            setTimeout(() => {
                event.target.submit(); // Submit the form after showing the message
            }, 2000); // 2 seconds delay
        }
    </script>
</body>
</html>
