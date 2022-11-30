@extends('particial.index')

@section('body')
<h1 class="mb-5">Edit Ruangan</h1>
<form action="{{ route('update_ruangan', $ruangan->id)}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3 col-5">
        <label for="kode_ruangan" class="form-label">Kode Ruangan</label>
        <input type="text" class="form-control" id="kode_ruangan" name="kode_ruangan" value="{{ $ruangan->kode_ruangan }}">
    </div>
    <div class="mb-3 col-5">
        <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
        <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" value="{{ $ruangan->nama_ruangan }}">
    </div>
    <div class="mb-3 col-5">
        <label for="tipe" class="form-label">Tipe</label>
        <input type="text" class="form-control" id="tipe" name="tipe" value="{{ $ruangan->tipe }}">
    </div>
    <div class="mb-3 col-5">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" value="{{ $ruangan->harga }}">
    </div>
    <div class="mb-3 col-5">
        <label for="ketersediaan" class="form-label">Tersedia</label>
        <input type="text" class="form-control" id="ketersediaan" name="ketersediaan" value="{{ $ruangan->ketersediaan }}">
    </div>
    <div class="mb-3 col-5">
        <label for="tempat_ruangan" class="form-label">Tempat Ruangan</label>
        <input type="text" class="form-control" id="tempat_ruangan" name="tempat_ruangan" value="{{ $ruangan->tempat_ruangan }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection