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
             <a href="/admin/tambah-pasien"><button type="button" class="btn btn-primary mb-4">+ Tambah Data</button></a>

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
                         @foreach ($data as $item)
                         <tr>
                             <td>{{$loop->iteration}}</td>
                             <td>{{$item->name}}</td>
                             <td>{{$item->tanggal_lahir}}</td>
                             <td>{{$item->usia}} Th</td>
                             <td>{{$item->keterangan}}</td>
                             <td>{{$item->alamat}}</td>
                             <td>{{$item->nomer_hp}}</td>
                             <td>{{$item->kategori}}</td>
                             <td>f</td>
                             <td>b</td>
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