<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kategori::get();

        return view('admin.kategori.index', [
            'title' => 'Paket Kategori',
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
        return view('admin.kategori.create', [
            'title' => 'Tambah Paket Kategori'
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
            'nama_kategori' => ['required', 'string'],
            'nama_kategori_en' => ['required', 'string'],
        ]);
        Kategori::create($validateData);
        return redirect('/admin/master-paket/kategori')->with('message', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.edit', [
            'title' => 'Ubah Paket Kategori',
            'data' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $rules = [
            'nama_kategori' => ['required', 'string'],
            'nama_kategori_en' => ['required', 'string'],
        ];

        $validateData = $request->validate($rules);
        Kategori::where('id', $kategori->update($validateData));
        return redirect('/admin/master-paket/kategori')->with('message', 'Data Berhasil Disimpan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        Kategori::destroy($kategori->id);
        return redirect('/admin/master-paket/kategori')->with('message', 'Data Berhasil Dihapus');
    }
}
