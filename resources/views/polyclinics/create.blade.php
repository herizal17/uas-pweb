{{-- @extends('layouts.main') --}}

{{-- @section('content') --}}
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Poliklinik</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">poliklinik</li>
                    </ol>
                </div><!-- /.col -->
                <form action="{{ route('polyclinics.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Poli</label>
                        <input type="text" class="form-control" name="name">
                    </div>
            
                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>

{{-- @endsection --}}
@include('layouts.footer')
@include('layouts.script')