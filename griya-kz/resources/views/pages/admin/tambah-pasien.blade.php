@extends('layouts.app')
@section('title')
Tambah Data Pasien
@endsection
@section('content')

<div class="container">
    <div class="card rounded-lg col-9 mx-auto">
        <div class="card-body">
            <form method="POST" action="/admin/tambah-pasien">
                @csrf
                <h2>Tambah Data Pasien</h2>
                <div class="form-group">
                    <div class="form-group">
                        <label for="inputName">Nama</label>
                        <input id="inputName" name="name" type="text" class="form-control rounded-pill">
                    </div>
                    <div class="form-group">
                        <label for="inputTanggalLahir">Tanggal Lahir</label>
                        <input id="inputTanggalLahir" name="tanggal_lahir" type="date" class="form-control rounded-pill">
                    </div>

                    <div class="form-group">
                        <label for="inputUsia">Usia</label>
                        <input id="inputUsia" name="usia" type="number" class="form-control rounded-pill">
                    </div>
                    <div class="form-group">
                        <label for="inputKeterangan">Keterangan</label>
                        <select id="inputKeterangan" name="keterangan" class="form-control rounded-pill">
                            <option selected>Pilih...</option>
                            <option value="belumkawin">Belum Kawin</option>
                            <option value="kawin">Kawin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputJenisKelamin">Jenis Kelamin</label>
                    <select id="inputJenisKelamin" name="jenis_kelamin" class="form-control rounded-pill">
                        <option selected>Pilih...</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputNomerHP">Nomer HP</label>
                    <input id="inputNomerHP" name="nomer_hp" type="number" class="form-control rounded-pill">
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input id="inputAlamat" name="alamat" type="text" class="form-control rounded-pill">
                </div>
                <div class="form-group">
                    <label for="inputKategori">Kategori</label>
                    <select id="inputKategori" name="kategori" class="form-control rounded-pill">
                        <option selected>Pilih...</option>
                        <option value="umum">Umum</option>
                        <option value="bpjs">Bpjs</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputKhitan">Khitan</label>
                    <input id="inputKhitan" name="khitan" type="text" class="form-control rounded-pill">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
                    <a href="/admin/data-pasien" class="btn btn-secondary rounded-pill">Close</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection