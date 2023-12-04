<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        box-sizing: border-box;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-size: 14px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        box-sizing: border-box;
    }

    button:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <form action="{{ route('barangs.store') }}" method="POST">
        @csrf
        <h2>Tambah Barang</h2>

        <label for="nama">Nama Barang:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="stok">Stok Barang:</label>
        <input type="number" id="stok" name="stok" min="0" required>

        <label for="harga">Harga Barang:</label>
        <input type="number" step="0.01" id="harga" name="harga" min="0" required>

        <button type="submit">Simpan Barang</button>
    </form>
</body>

</html>