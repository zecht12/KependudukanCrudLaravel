<!DOCTYPE html>
<html>
<head>
    <title>updated warga</title>
</head>
<body>
    <h1>warga</h1>
    <ul>
        <li>NIK: {{ $updatedkependudukan->nik }}</li>
        <li>Nama: {{ $updatedkependudukan->nama }}</li>
        <li>Alamat: {{ $updatedkependudukan->alamat }}</li>
        <li>Agama: {{ $updatedkependudukan->agama }}</li>
    </ul>
    <a href="/kependudukan">Back to Mahasiswa List</a>
</body>
</html>