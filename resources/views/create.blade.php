<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Mahasiswa</title>
</head>
<body>
    <form method="POST" action="/kependudukan/store">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nik">NIK:</label>
            <input type="text" name="nik">
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat">
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" name="tempat_lahir">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="text" name="tanggal_lahir">
        </div>
        <div class="form-group">
            <label for="agama">Agama:</label>
            <input type="text" name="agama">
        </div>
        <div class="form-group">
            <label for="pendidikan">Pendidikan:</label>
            <input type="text" name="pendidikan">
        </div>
        <input type="hidden" name="created_at" value="{{ now() }}">
        <input type="hidden" name="updated_at" value="{{ now() }}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>