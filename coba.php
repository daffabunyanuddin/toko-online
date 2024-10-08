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
            background: linear-gradient(to right, #e0f7fa, #fffde7);
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
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            background-color: #ffffff;
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
            transform: scale(1.02);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
        }
        .
>