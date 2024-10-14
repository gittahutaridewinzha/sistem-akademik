<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>data dosen</h1>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Telp</th>
            <th>Prodi</th>
            <th>Alamat</th>
        </tr>
        @foreach ($dosens as $dosen)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $dosen->nik }}</td>
            <td>{{ $dosen->nama }}</td>
            <td>{{ $dosen->email }}</td>
            <td>{{ $dosen->no_telp }}</td>
            <td>{{ $dosen->prodi->nama }}</td>
            <td>{{ $dosen->alamat }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
