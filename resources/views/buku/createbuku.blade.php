@extends('particial.index')

@section('body')
    <h1 class="mb-5">Tambah Buku</h1>
    {{-- @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form action="/buku/create" method="POST">
        @csrf
        <div class="mb-3 col-5">
            <label for="keyword" class="form-label">Kode Buku</label>
            <input type="text" class="form-control" id="keyword" name="keyword" required>
        </div>
        <div class="mb-3 col-5">
            <label for="nama_buku" class="form-label">Nama Buku</label>
            <input type="text" class="form-control" id="nama_buku" name="nama_buku" required>
        </div>
        <div class="mb-3 col-5">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" required>
        </div>
        <div class="mb-3 col-5">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" required>
        </div>
        <div class="mb-3 col-5">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
        </div>
        <div class="mb-3 col-5">
            <label for="tempat_buku" class="form-label">Tempat Buku</label>
            <input type="text" class="form-control" id="tempat_buku" name="tempat_buku" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
