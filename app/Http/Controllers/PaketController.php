<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Paket::get();

        return view('admin.paket.index', [
            'title' => 'Paket',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $kategori = Kategori::all(['id', 'nama_kategori']);

        return view('admin.paket.create', [
            'title' => 'Tambah Paket',
            'kategori' => $kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_paket' => ['required', 'string'],
            'nama_paket_en' => ['required', 'string'],
            'harga_paket' => ['required', 'string'],
            'harga_paket_en' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
            'deskripsi_en' => ['required', 'string'],
            'gambar' => ['required', 'string'],
            'kategori_id' => ['required', 'string'],
            'gambar' => ['required', 'image', 'file']
        ]);

        $validateData['gambar'] = $request->file('gambar')->store('images');

        Paket::create($validateData);
        return redirect('/admin/master-paket/paket')->with('message', 'Data Berhasil Disimpan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(Paket $paket)
    {
        return view('admin.paket.show', [
            'title' => 'Detaik Paket',
            'paket' => $paket
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paket)
    {
        $kategori = Kategori::all(['id', 'nama_kategori']);

        return view('admin.paket.edit', [
            'title' => 'Tambah Paket',
            'kategori' => $kategori,
            'paket' => $paket
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $paket)
    {
        $rules = [ 'nama_paket' => ['required', 'string'],
        'nama_paket_en' => ['required', 'string'],
        'harga_paket' => ['required', 'string'],
        'harga_paket_en' => ['required', 'string'],
        'deskripsi' => ['required', 'string'],
        'deskripsi_en' => ['required', 'string'],
        'gambar' => ['required', 'string'],
        'kategori_id' => ['required', 'string'],
        'gambar' => ['nullable', 'image', 'file']];

        $validateData = $request->validate($rules);

        if($request->file('gambar'))
        {
            if($request->old_gambar)
            {
                Storage::delete($request->old_gambar);
            }
            $validateData['gambar'] = $request->file('gambar')->store('images');
        }

        Paket::where('id', $paket->update($validateData));
        return redirect('/admin/master-paket/paket')->with('message', 'Data Berhasil Disimpan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        if($paket->gambar)
            Storage::delete($paket->gambar);

        Paket::destroy($paket->id);
        return redirect('/admin/master-paket/paket')->with('message', 'Data Berhasil Dihapus');
    }
}
