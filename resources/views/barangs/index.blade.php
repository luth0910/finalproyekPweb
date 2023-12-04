<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    a {
        text-decoration: none;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    a:hover {
        background-color: #45a049;
    }

    table {
        width: 80%;
        border-collapse: collapse;
        margin-top: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    td a {
        text-decoration: none;
        padding: 5px 10px;
        margin-right: 5px;
        color: #333;
        border-radius: 3px;
    }

    td .edit {
        background-color: #F4CE14;
        color: white;
    }

    td .delete {
        background-color: #f44336;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    td .delete:hover {
        background-color: #d32f2f;
    }
    </style>
</head>

<body>
    <h2>Daftar Barang</h2>
    <a href="{{ route('barangs.create') }}">Tambah Barang</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
            <tr>
                <td>{{ $flag++ }}</td>
                <td>{{ $barang->nama }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->harga }}</td>
                <td>
                    <a href="{{ route('barangs.edit', $barang->id) }}" class="edit">Edit</a>
                    <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="delete" type="submit"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>