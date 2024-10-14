<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Printed PDF</title>
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
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Data Prodi</h1>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            {{-- <th>NIM</th> --}}
            <th>Nama</th>
        </tr>
        @foreach($prodis as $prodi)
        <tr>
            <td>{{ $loop->iteration }}</td>
            {{-- <td>{{ $mahasiswa->nim }}</td> --}}
            <td>{{ $prodi->nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
