<?php

namespace App\Http\Controllers;

use App\Models\Ketentuan;
use App\Models\Paket;
use Illuminate\Http\Request;

class KetentuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($paket_id)
    {
        $paket = Paket::find($paket_id);

        $ketentuans = Ketentuan::where('pakets_id', $paket_id)->get();

        return view('admin.ketentuan.index', [
            'title' => 'Ketentuan ' . $paket->nama_paket,
            'ketentuans' => $ketentuans,
            'paket' => $paket
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($paket_id)
    {
        $paket = Paket::find($paket_id);
        return view('admin.ketentuan.create', [
            'title' => 'Tambah Ketentuan',
            'paket' => $paket
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
            'pakets_id' => ['required', 'integer'],
            'keterangan' => ['required', 'string'],
            'keterangan_en' => ['required', 'string'],
        ]);

        Ketentuan::create($validateData);
        return redirect('/admin/master-paket/ketentuan/' . $validateData['pakets_id'])->with('message', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ketentuan  $ketentuan
     * @return \Illuminate\Http\Response
     */
    public function show(Ketentuan $ketentuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ketentuan  $ketentuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ketentuan $ketentuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ketentuan  $ketentuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ketentuan $ketentuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ketentuan  $ketentuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ketentuan $ketentuan)
    {
        //
    }
}
