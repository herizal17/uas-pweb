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
                <div class="card-body">
                    <form action="{{ route('polyclinics.update', $polyclinic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="form-group mt-2">
                            <label for="name">Nama Poli</label>
                            <input type="text" class="form-control" name="name" value="{{ $polyclinic->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>

@include('layouts.footer')
@include('layouts.script')