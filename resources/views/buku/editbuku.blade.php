@extends('particial.index')

@section('body')
    <h1 class="mb-5">Edit Buku</h1>
    <form action="{{ route('update_buku', $buku->id)}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3 col-5">
            <label for="keyword" class="form-label">Kode Buku</label>
            <input type="text" class="form-control" id="keyword" name="keyword" value="{{ $buku->keyword }}">
        </div>
        <div class="mb-3 col-5">
            <label for="nama_buku" class="form-label">Nama Buku</label>
            <input type="text" class="form-control" id="nama_buku" name="nama_buku" value="{{ $buku->nama_buku }}">
        </div>
        <div class="mb-3 col-5">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $buku->pengarang }}">
        </div>
        <div class="mb-3 col-5">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}">
        </div>
        <div class="mb-3 col-5">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
        </div>
        <div class="mb-3 col-5">
            <label for="tempat_buku" class="form-label">Tempat Buku</label>
            <input type="text" class="form-control" id="tempat_buku" name="tempat_buku" value="{{ $buku->tempat_buku }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
