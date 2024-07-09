@extends('layouts.app')
@section('title', 'Edit Data Pendaftaran')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Pendaftaran</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update_pasien', $pasien->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>id</label>
                                    <select name="jenis_pemeriksaan" class="form-control">
                                        <option value="periksa_gigi"
                                            {{ $pasien->jenis_pemeriksaan == 'periksa_gigi' ? 'selected' : '' }}>periksa
                                            gigi
                                        </option>
                                        <option value="periksa_umum"
                                            {{ $pasien->jenis_pemeriksaan == 'periksa_umum' ? 'selected' : '' }}>
                                            periksa umum
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" class="form-control" value="{{ $pasien->name }}">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        value="{{ $pasien->tanggal_lahir }}">
                                </div>
                                <div class="form-group">
                                    <label>Usia</label>
                                    <input type="number" name="usia" class="form-control" value="{{ $pasien->usia }}">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <select name="keterangan" class="form-control">
                                        <option value="belumkawin"
                                            {{ $pasien->keterangan == 'belumkawin' ? 'selected' : '' }}>belumkawin
                                        </option>
                                        <option value="kawin" {{ $pasien->keterangan == 'kawin' ? 'selected' : '' }}>
                                            kawin
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="status" class="form-control">
                                        <option value="laki-laki"
                                            {{ $pasien->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>
                                            laki-laki
                                        </option>
                                        <option value="perempuan"
                                            {{ $pasien->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>
                                            perempuan
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nomer Hp</label>
                                    <input type="text" name="nomer_hp" id="tempat" class="form-control"
                                        value="{{ $pasien->nomer_hp }}">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control"
                                        value="{{ $pasien->alamat }}">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Kategori</label>
                                    <select name="kategori" id="status" class="form-control">
                                        <option value="umum" {{ $pasien->kategori == 'umum' ? 'selected' : '' }}>umum
                                        </option>
                                        <option value="bpjs" {{ $pasien->kategori == 'bpjs' ? 'selected' : '' }}>
                                            bpjs
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
