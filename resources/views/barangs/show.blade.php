<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <style>
    .detail {
        margin-top: 20px;
    }

    p {
        margin-bottom: 10px;
    }

    a {
        text-decoration: none;
        padding: 5px 10px;
        background-color: #4CAF50;
        color: white;
        border-radius: 3px;
    }

    a:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <h2>Detail Barang</h2>
    <div class="detail">
        <p><strong>ID:</strong> {{ $barang->id }}</p>
        <p><strong>Nama