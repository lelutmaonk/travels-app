<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\JadwalDetail;
use Illuminate\Http\Request;

class JadwalDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($jadwals_id)
    {
        $jadwal = Jadwal::find($jadwals_id);

        $jadwalDetail = JadwalDetail::where('jadwals_id', $jadwals_id)->get();

        return view('admin.jadwal-detail.index', [
            'title' => 'Jadwal Detail ' . $jadwal->jadwal_nama . $jadwal->paket?->nama_paket,
            'jadwal' => $jadwal,
            'jadwalDetail' => $jadwalDetail
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($jadwals_id)
    {
        $jadwal = Jadwal::find($jadwals_id);
        return view('admin.jadwal-detail.create', [
            'title' => 'Tambah Jadwal Detail',
            'jadwal' => $jadwal
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
            'jadwals_id' => ['required', 'integer'],
            'waktu' => ['required', 'string'],
            'waktu_en' => ['required', 'string'],
            'aktivitas' => ['required', 'string'],
            'aktivitas_en' => ['required', 'string'],
        ]);

        JadwalDetail::create($validateData);
        return redirect('/admin/master-paket/jadwal-detail/' . $validateData['jadwals_id'])->with('message', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JadwalDetail  $jadwalDetail
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalDetail $jadwalDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JadwalDetail  $jadwalDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalDetail $jadwalDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalDetail  $jadwalDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalDetail $jadwalDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalDetail  $jadwalDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalDetail $jadwalDetail)
    {
        //
    }
}
