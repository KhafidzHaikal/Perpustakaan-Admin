<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorebukuRequest;
use App\Http\Requests\UpdatebukuRequest;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('buku.buku', [
            'title' => 'Buku',
            'bukus' => buku::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.createbuku', [
            'title' => 'Tambah Buku'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebukuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'nama_buku' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'keyword' => 'required',
            'tahun_terbit' => 'required',
            'tempat_buku' => 'required'
        ]);

        
        buku::create($validatedata);
        // $request->session()->flash('success', 'Pasien Berhasil Ditambahkan');
        
        return redirect('/buku')->with('toast_success', 'Buku Berhasil Ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(buku $buku)
    {
        return view('buku.editbuku', [
            'title' => 'Edit Buku',
            'buku' => $buku
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebukuRequest  $request
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $buku)
    {
        $rules =[
            'nama_buku' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'keyword' => 'required',
            'tahun_terbit' => 'required',
            'tempat_buku' => 'required'
        ];
        $validatedata = $request->validate($rules);
        $id = $request->id;
        $updatebuku = buku::find($buku);
        $updatebuku->update($request->all());
        return redirect('/buku')->with('toast_success', 'Buku Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(buku $buku)
    {
        buku::destroy($buku->id);
        return redirect('/buku')->with('toast_success', 'Buku Berhasil Dihapus');
    }
}
