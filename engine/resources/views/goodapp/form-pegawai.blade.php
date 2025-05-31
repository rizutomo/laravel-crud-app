@extends('goodapp.master')

@section('title')
    AdminLTE 3 | Dashboard 2
@endsection

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" novalidate="novalidate" method="POST"  action="{{ route('pegawai.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama" REQUIRED>
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Input NIK" REQUIRED>
                    <label for="exampleInputEmail1">Jenis Pegawai</label>
                    <select class="form-control" id="jenis_pegawai" name="jenis_pegawai" placeholder="Enter Jenis Pegawai" REQUIRED">
                        <option value="" disabled selected hidden>Pilih opsi</option>        
                          @foreach($jnspgws as $all)
                            <option value="{{ $all->id }}">{{ $all->jenis_pegawai }}</option>
                          @endforeach
                    </select>
                    <label for="exampleInputEmail1">Status Pegawai</label>
                    <select class="form-control" id="status_pegawai" name="status_pegawai" placeholder="Input Status Pegawai" REQUIRED">
                        <option value="" disabled selected hidden>Pilih opsi</option>        
                          @foreach($stspgws as $all)
                            <option value="{{ $all->id }}">{{ $all->status_pegawai }}</option>
                          @endforeach
                    </select>
                    <label for="exampleInputEmail1">Unit</label>
                    <input type="text" class="form-control" id="unit" name="unit" placeholder="Input Unit" REQUIRED>
                    <label for="exampleInputEmail1">Sub Unit</label>
                    <input type="text" class="form-control" id="sub_unit" name="sub_unit" placeholder="Input Sub Unit" REQUIRED>
                    <label for="exampleInputEmail1">Pendidikan</label>
                    <select class="form-control" id="pendidikan" name="pendidikan" placeholder="Input Pendidikan" REQUIRED">
                        <option value="" disabled selected hidden>Pilih opsi</option>        
                          @foreach($pddks as $all)
                            <option value="{{ $all->id }}">{{ $all->pendidikan }}</option>
                          @endforeach
                    </select>
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Input Tanggal Lahir" REQUIRED>
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" placeholder="Input Tempat Lahir" REQUIRED>
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <select class="form-control" id="jns_kel" name="jns_kel" placeholder="Input Jenis Pegawai" REQUIRED">
                        <option value="" disabled selected hidden>Pilih opsi</option>        
                          @foreach($jns_kels as $all)
                            <option value="{{ $all->id }}">{{ $all->jns_kel }}</option>
                          @endforeach
                    </select>
                    <label for="exampleInputEmail1">Agama</label>
                    <select class="form-control" id="agama" name="agama" placeholder="Input Agama" REQUIRED">
                        <option value="" disabled selected hidden>Pilih opsi</option>        
                        @foreach($agamas as $all)
                        <option value="{{ $all->id }}">{{ $all->nama_agama }}</option>
                        @endforeach
                    </select>
                    <label for="doc_ktp">KTP Document:</label>
                    <input type="file" class="form-control" id="doc_ktp" name="doc_ktp">
                    
                    

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@push('additional-css')
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
@endpush

@push('additional-js')
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endpush