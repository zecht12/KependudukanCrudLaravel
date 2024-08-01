<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form method="POST" action="/kependudukan/{{ $kependudukan->nik }}/update">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="{{ $kependudukan->nama }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" value="{{ $kependudukan->alamat }}">
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" name="tempat_lahir" value="{{ $kependudukan->tempat_lahir }}">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="text" name="tanggal_lahir" value="{{ $kependudukan->tanggal_lahir }}">
        </div>
        <div class="form-group">
            <label for="agama">Agama:</label>
            <input type="text" name="agama" value="{{ $kependudukan->agama }}">
        </div>
        <div class="form-group">
            <label for="pendidikan">Pendidikan:</label>
            <input type="text" name="pendidikan" value="{{ $kependudukan->pendidikan }}">
        </div>
        <input type="hidden" name="updated_at" value="{{ now() }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>