<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Kependudukan List</h1>
    <a href="/kependudukan/create">Add Warga Negara</a>
    <table>
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Agama</th>
                <th>Pendidikan</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kependudukans as $kependudukan)
            <td>{{ $kependudukan->nik }}</td>
            <td>{{ $kependudukan->nama }}</td>
            <td>{{ $kependudukan->alamat }}</td>
            <td>{{ $kependudukan->tempat_lahir }}</td>
            <td>{{ $kependudukan->tanggal_lahir }}</td>
            <td>{{ $kependudukan->agama }}</td>
            <td>{{ $kependudukan->pendidikan }}</td>
            <td><a href="/kependudukan/{{ $kependudukan->nik }}/edit">Edit</a></td>
            <td><a href="/kependudukan/{{ $kependudukan->nik }}/delete">Delete</a></td>
            @endforeach
        </tbody>
    </table>
</body>
</html>