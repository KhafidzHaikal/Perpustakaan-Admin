@extends('particial.index')

@section('body')
<h1>Ruangan</h1>
<a href="/ruangan/create" class="btn btn-success mb-3">Tambah Ruangan</a>
<div class="card shadow mb-4">
    <div class="card-body">
        
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode ruangan</th>
                        <th>Nama ruangan</th>
                        <th>Tipe</th>
                        <th>Harga</th>
                        <th>Tersedia</th>
                        <th>Tempat ruangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode ruangan</th>
                        <th>Nama ruangan</th>
                        <th>Tipe</th>
                        <th>Harga</th>
                        <th>Tersedia</th>
                        <th>Tempat ruangan</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                @foreach ($ruangans as $ruangan)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ruangan->kode_ruangan }}</td>
                        <td>{{ $ruangan->nama_ruangan }}</td>
                        <td>{{ $ruangan->tipe }}</td>
                        <td>{{ $ruangan->harga }}</td>
                        <td>{{ $ruangan->ketersediaan }}</td>
                        <td>{{ $ruangan->tempat_ruangan }}</td>
                        <td>
                            <a href="{{ route('edit_ruangan', $ruangan->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('delete_ruangan', $ruangan->id)}}" method="POST" class="d-inline">
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