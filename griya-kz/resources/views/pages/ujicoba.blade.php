<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Rekam Medis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <form action="{{ url('/tambah-rekam') }}" method="POST">
            @csrf
            <input type="hidden" id="id" name="id" value="{{ $data->id }}">

            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk</label>
                <input type="date" id="tanggal_masuk" class="form-control rounded-pill" name="tanggal_masuk" required>
            </div>

            <div class="form-group">
                <label for="poli">Poli</label>
                <input type="text" id="poli" class="form-control rounded-pill" name="poli" required>
            </div>

            <div class="form-group">
                <label for="tekanan_darah">Tekanan Darah</label>
                <input type="text" id="tekanan_darah" class="form-control rounded-pill" name="tekanan_darah" required>
            </div>

            <div class="form-group">
                <label for="suhu_tubuh">Suhu Tubuh</label>
                <input type="text" id="suhu_tubuh" class="form-control rounded-pill" name="suhu_tubuh" required>
            </div>

            <button type="submit" class="btn btn-primary rounded-pill">Simpan</button>
        </form>
    </div>
</body>

</html>