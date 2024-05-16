@extends('layouts.app')
@section('title')
Tambah Data Pasien
@endsection
@section('content')

<div class="container">
    <div class="card rounded-lg col-9 mx-auto">
        <div class="card-body">
            <form method="POST" action="/admin/tambah-rekam">
                @csrf
                <h2>Tambah Data Anamnese</h2>
                <input type="hidden" id="id" name="pasien_id" value="1">
                <input type="hidden" id="id" name="gejala" value="Belum Diperiksa">
                <input type="hidden" id="id" name="diagnosa_id" value="1">
                <input type="hidden" id="id" name="terapi" value="Belum Diperiksa">
                <div class="form-group">
                    <div class="form-group">
                        <label for="inputName">Tanggal Masuk</label>
                        <input id="inputName" name="tanggal_masuk" type="date" class="form-control rounded-pill">
                    </div>
                    <div class="form-group">
                        <label for="inputKeterangan">Poli</label>
                        <select id="inputKeterangan" name="poli_id" class="form-control rounded-pill">
                            <option selected>Pilih...</option>
                            <option value="1">Umum</option>
                            <option value="2">Gigi</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Tekanan Darah</label>
                    <input id="inputAlamat" name="tekanan_darah" type="text" class="form-control rounded-pill">
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Suhu Tubuh</label>
                    <input id="inputAlamat" name="suhu_tubuh" type="text" class="form-control rounded-pill">
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Gejala</label>
                    <input id="inputAlamat" name="gejala" type="text" class="form-control rounded-pill" disabled>
                </div>
                <div class="form-group">
                    <label for="inputKategori">Diagnosa</label>
                    <input id="inputAlamat" name="diagnosa_id" type="text" class="form-control rounded-pill" disabled>
                </div>
                <div class="form-group">
                    <label for="inputKhitan">Terapi</label>
                    <input id="inputKhitan" name="terapi" type="text" class="form-control rounded-pill" disabled>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
                    <a href="/admin/rekam-medis/{id}" class="btn btn-secondary rounded-pill">Close</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection