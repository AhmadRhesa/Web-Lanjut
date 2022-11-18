@extends('layouts.app')
@section('content')

<head>
    <title>REZA-03 | Edit-Soal</title>
</head>

<body>
    <div class="container">

        @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
        @endif

        @if ($errors->any())

            <div class="alert alert-danger">
                Data gagal diedit
        </div>
        @endif

        <h1 class="text-center mb-5">EDIT SOAL</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('soal.update', $soals->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="nama_mk" name="nama_mk" value="{{ old('nama_mk',$soals->nama_mk) }}">
                        @error('nama_mk')
                        <div class="alert alert-danger mt-2">Mata kuliah wajib diisi</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="dosen" class="form-label">Nama Dosen</label>
                        <input type="text" class="form-control" id="dosen" name="dosen" value="{{ $soals->dosen }}">
                        @error('DOSEN')
                        <div class="alert alert-danger mt-2">Nama dosen wajib diisi</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_soal" class="form-label">Jumlah Soal</label>
                        <input type="text" class="form-control" id="jumlah_soal" name="jumlah_soal" value="{{ $soals->jumlah_soal }}">
                        @error('jumlah_soal')
                        <div class="alert alert-danger mt-2">Jumlah soal wajib diisi</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $soals->keterangan }}">
                        @error('keterangan')
                        <div class="alert alert-danger mt-2">Keterangan wajib diisi</div>
                        @enderror
                    </div>
                    <a href="{{ route('soal.index') }}" class="btn btn-info">Batal</a>
                    <button type="submit" class="btn btn-primary float-end">Simpan Edit Data</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
@endsection
