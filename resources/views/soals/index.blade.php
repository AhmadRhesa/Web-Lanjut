@extends('layouts.app')
@section('content')
<head>
    <title>REZA-03 | Soal</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href='/tambah-soal' class="btn btn-primary btn-md mb-3 float-right">Tambah Soal</a>

                        <table class="table table-bordered mt-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mata Kuliah</th>
                                    <th>Dosen</th>
                                    <th>Jumlah Soal</th>
                                    <th>Keterangan</th>
                                </tr>

                                @foreach ($soals as $soal => $hasil)
                                <tr>
                                    <th>{{ $soal+1 }}</th>
                                    <th>{{ $hasil->nama_mk }}</th>
                                    <th>{{ $hasil->dosen }}</th>
                                    <th>{{ $hasil->jumlah_soal }}</th>
                                    <th>{{ $hasil->keterangan }}</th>
                                </tr>
                                @endforeach
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
@endsection
