<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Paket;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($paket_id)
    {
        $paket = Paket::find($paket_id);

        $jadwals = Jadwal::where('pakets_id', $paket_id)->get();

        return view('admin.jadwal.index', [
            'title' => 'Jadwal ' . $paket->nama_paket,
            'jadwals' => $jadwals,
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
        return view('admin.jadwal.create', [
            'title' => 'Tambah Jadwal',
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
            'jadwal_nama' => ['required', 'string'],
            'jadwal_nama_en' => ['required', 'string'],
        ]);

        Jadwal::create($validateData);
        return redirect('/admin/master-paket/jadwal/' . $validateData['pakets_id'])->with('message', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        //
    }
}
