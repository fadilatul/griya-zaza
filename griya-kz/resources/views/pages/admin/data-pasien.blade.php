 @extends('layouts.app')
 @section('title')
 Data Pasien
 @endsection

 @section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

     <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
             <li class="breadcrumb-item">Data Pasien</a></li>
         </ol>
     </nav>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-body">
             <button type="button" class="btn btn-primary mb-4">+ Tambah Data</button>
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Nomer</th>
                             <th>Name</th>
                             <th>Tanggal Lahir</th>
                             <th>Usia</th>
                             <th>Keterangan</th>
                             <th>Alamat</th>
                             <th>Nomer HP</th>
                             <th>Kategori</th>
                             <th>Rekam Medik</th>
                             <th>Aksi</th>
                         </tr>
                     </thead>

                     <tbody>
                         <tr>
                             <td>1</td>
                             <td>System Architect</td>
                             <td>23 agustus 2002</td>
                             <td>61</td>
                             <td>brobat</td>
                             <td>Banyuwangi</td>
                             <td>09978675654</td>
                             <td>Umum</td>
                             <td>f</td>
                             <td>b</td>
                         </tr>
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