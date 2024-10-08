<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMjXoKq9gk4D1fB8Z8x3q+5zqg1H6Sx0aK25C3" crossorigin="anonymous">
    <title>Tambah Petugas</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            animation: backgroundAnimation 10s ease infinite;
            background: linear-gradient(270deg, #f0f4c3, #e1bee7);
            background-size: 400% 400%;
        }
        @keyframes backgroundAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            background: #ffffff;
            padding: 40px;
            width: 90%;
            max-width: 600px;
            transition: transform 0.3s, box-shadow 0.3s;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.6s forwards;
        }
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .card:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }
        h3 {
            color: #4a4a4a;
            margin-bottom: 30px;
            font-size: 28px;
            text-align: center;
        }
        .input-group {
            margin-bottom: 25px;
        }
        .input-group-text {
            background-color: #c5cae9;
            color: #4a4a4a;
            font-size: 18px;
            border: none;
            border-radius: 25px 0 0 25px;
        }
        .form-control {
            border-radius: 0 25px 25px 0;
            box-shadow: none;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #c5cae9;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(128, 203, 196, 0.5);
            border-color: #80cbc4;
        }
        .form-select {
            border-radius: 25px;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #c5cae9;
        }
        .btn-primary {
            background-color: #80cbc4;
            border: none;
            transition: background-color 0.3s, transform 0.2s;
            border-radius: 25px;
            padding: 15px;
            font-size: 18px;
        }
        .btn-primary:hover {
            background-color: #66bb6a;
            transform: scale(1.05);
        }
        footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card p-4">
        <h3><i class="fas fa-user-plus"></i> Tambah Petugas</h3>
        <form action="proses_tambah_petugas.php" method="post">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" placeholder="Nama Petugas" required aria-label="Nama Petugas">
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-at"></i></span>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required aria-label="Username">
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required aria-label="Password">
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level:</label>
                <select name="level" id="level" class="form-select" required>
                    <option value="" disabled selected>Pilih Level</option>
                    <option value="CEO">CEO</option>
                    <option value="Manager">Manager</option>
                    <option value="Admin">Admin</option>
                    <option value="Karyawan">Karyawan</option>
                </select>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary w-100">Tambah Petugas</button>
        </form>
    </div>
</div>

<footer>
    <small>&copy; 2024 Your Company. All rights reserved.</small>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
