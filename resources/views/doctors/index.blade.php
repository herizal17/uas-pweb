@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Doctor</h1>
                    <a href="{{ route('doctors.create') }}" class="btn btn-success mt-3">Tambah Data</a>
                <div class="col-sm-12">
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                </div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">doctor</li>
                    </ol>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>No. Registrasi</th>
                            <th>Nama Dokter</th>
                            <th>Nama Poli</th>
                            <th>Action</th>
                            <th></th>
                        </tr>
                        @foreach ($doctors as $doctor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $doctor->registration_code }}</td>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->polyclinics->name }}</td>
                            <td>
                                <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">
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
        </div>
      </div>
    </div>
  </div>

@include('layouts.footer')
@include('layouts.script')
