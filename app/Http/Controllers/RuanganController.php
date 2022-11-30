<?php

namespace App\Http\Controllers;

use App\Models\ruangan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreruanganRequest;
use App\Http\Requests\UpdateruanganRequest;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ruangan.ruangan', [
            'title' => 'Ruangan',
            'ruangans' => ruangan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruangan.createruangan', [
            'title' => 'Tambah Ruangan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreruanganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'nama_ruangan' => 'required',
            'kode_ruangan' => 'required',
            'tipe' => 'required',
            'harga' => 'required',
            'ketersediaan' => 'required',
            'tempat_ruangan' => 'required'
        ]);

        ruangan::create($validatedata);
        $request->session()->flash('success', 'Ruangan berhasil ditambahkan');

        return redirect('ruangan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show(ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function edit(ruangan $ruangan)
    {
        return view('ruangan.editruangan', [
            'title' => 'Edit Ruangan',
            'ruangan' => $ruangan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateruanganRequest  $request
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ruangan)
    {
        $rules = [
            'nama_ruangan' => 'required',
            'kode_ruangan' => 'required',
            'tipe' => 'required',
            'harga' => 'required',
            'ketersediaan' => 'required',
            'tempat_ruangan' => 'required'
        ];

        $validatedata = $request->validate($rules);
        $id = $request->id;
        $updateruangan = ruangan::find($ruangan);
        $updateruangan->update($request->all());
        return redirect('ruangan')->with('success', 'Ruangan Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ruangan $ruangan)
    {
        ruangan::destroy($ruangan->id);
        return redirect('ruangan')->with('success', 'Ruangan Berhasil dihapus!!');
    }
}
