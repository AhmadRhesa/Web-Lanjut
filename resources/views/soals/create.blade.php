@extends('layouts.app')
@section('content')

<head>
    <title>REZA-03 | Tambah-Soal</title>
</head>

<body>

    <div class="container mt-5">

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <h1 class="text-center mb-5">Tambah Soal</h1>
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action='/simpan-soal' method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="nama_mk" name="nama_mk" autocomplete="off">
                    @error('nama_mk')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="dosen" class="form-label">Nama Dosen</label>
                        <input type="text" class="form-control" id="dosen" name="dosen" autocomplete="off">
                    @error('dosen')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_soal" class="form-label">Jumlah Soal</label>
                        <input type="text" class="form-control" id="jumlah_soal" name="jumlah_soal" autocomplete="off">
                    @error('jumlah_soal')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" autocomplete="off">
                    @error('keterangan')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

@endsection
</html>
