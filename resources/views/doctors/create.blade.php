@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')

<div class="col-md-8 offset-md-2">

    @if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br>
    @endif

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Doctor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">doctor</li>
                    </ol>
                </div>
                <div class="card-body">
                    <form action="{{ route('doctors.store') }}" method="POST">
                    @csrf
                        <div class="form-group mt-2">
                            <label for="code">No. Registrasi</label>
                            <input type="text" class="form-control" name="registration_code">
                        </div>
                        <div class="form-group mt-2">
                            <label for="name">Nama Dokter</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group mt-2">
                            <label for="name">Poli</label>
                            <select class="form-control" name="polyclinic_id">
                                @foreach ($polyclinics as $polyclinic)
                                    <option value="{{ $polyclinic->id }}"> {{ $polyclinic->name }} </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

@include('layouts.footer')
@include('layouts.script')