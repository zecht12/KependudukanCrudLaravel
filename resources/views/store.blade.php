<!DOCTYPE html>
<html>
<head>
    <title>store warga</title>
</head>
<body>
    <h1>warga</h1>
    <ul>
        <li>NIK: {{ $kependudukan->nik }}</li>
        <li>Nama: {{ $kependudukan->nama }}</li>
        <li>Alamat: {{ $kependudukan->alamat }}</li>
        <li>Agama: {{ $kependudukan->agama }}</li>
    </ul>
    <a href="/kependudukan">Back to Mahasiswa List</a>
</body>
</html>