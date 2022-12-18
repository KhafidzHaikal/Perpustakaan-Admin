@extends('particial.index')

@section('body')
    <h1 class="mb-5">Tambah ruangan</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('tambah_ruangan')}}" method="POST">
        @csrf
        <div class="mb-3 col-5">
            <label for="kode_ruangan" class="form-label">Kode ruangan</label>
            <input type="text" class="form-control" id="kode_ruangan" name="kode_ruangan" required>
        </div>
        <div class="mb-3 col-5">
            <label for="nama_ruangan" class="form-label">Nama ruangan</label>
            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" required>
        </div>
        <div class="mb-3 col-5">
            <label for="tipe" class="form-label">Tipe</label>
            <input type="text" class="form-control" id="tipe" name="tipe" required>
        </div>
        <div class="mb-3 col-5">
            <label for="ketersediaan" class="form-label">Tersedia</label>
            <input type="text" class="form-control" id="ketersediaan" name="ketersediaan" required>
        </div>
        <div class="mb-3 col-5">
            <label for="tempat_ruangan" class="form-label">Tempat ruangan</label>
            <input type="text" class="form-control" id="tempat_ruangan" name="tempat_ruangan" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
