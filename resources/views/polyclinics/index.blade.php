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
                <a href="{{ route('polyclinics.create') }}" class="btn btn-success mt-3">Tambah Data</a>
                <div class="col-sm-12">
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                </div>
                {{-- <div class="card mt-3"> --}}
                
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Poli</th>
                            <th>Jumlah Dokter</th>
                            <th>Aksi</th>
                            <th></th>
                        </tr>
                        @foreach ($polyclinics as $polyclinic)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $polyclinic->name }}</td>
                            <td>
                                <a href="{{ route('polyclinics.show', $polyclinic->id) }}" title="Lihat Data Dokter">
                                    {{ count($polyclinic->doctors) }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('polyclinics.edit', $polyclinic->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('polyclinics.destroy', $polyclinic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>

{{-- @endsection --}}
@include('layouts.footer')
@include('layouts.script')