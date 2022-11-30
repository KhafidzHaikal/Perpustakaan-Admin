@extends('particial.index')

@section('body')
    <h1>Buku</h1>
    <a href="/buku/create" class="btn btn-success mb-3">Tambah Buku</a>
    <div class="card shadow mb-4">
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Nama Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Tempat Buku</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Nama Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Tempat Buku</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    @foreach ($bukus as $buku)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $buku->keyword }}</td>
                            <td>{{ $buku->nama_buku }}</td>
                            <td>{{ $buku->pengarang }}</td>
                            <td>{{ $buku->penerbit }}</td>
                            <td>{{ $buku->tahun_terbit }}</td>
                            <td>{{ $buku->tempat_buku }}</td>
                            <td>
                                <a href="{{ route('edit_buku', $buku->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('delete_buku', $buku->id)}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm(Apakah Data akan dihapus?">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
