@extends('layouts.app')
@section('title')
Rekam Medis
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
            <li class="breadcrumb-item">Rekam Medis</a></li>
        </ol>
    </nav>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="/admin/tambah-rekam/{id}"><button type="button" class="btn btn-primary mb-4">+ Tambah Data</button></a>
            <a href=""><button type="button" class="btn btn-success mb-4">Print</button></a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <th>Poli</th>
                            <th>Tekanan Darah</th>
                            <th>Suhu Tubuh</th>
                            <th>Gejala</th>
                            <th>Diagnosa</th>
                            <th>Terapi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($pasien as $item)
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button>Priksa</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@push('addon-script')
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endpush