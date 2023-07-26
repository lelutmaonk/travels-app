<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Paket;

class UserHomeController extends Controller
{

    public $kategori;

    public function __construct(
        Kategori $kategori
        )
    {
        // $this->kategori = $kategori->get();
        $this->kategori = $kategori->select('id', 'nama_kategori')->get();
    }

    public function index()
    {
        $paket = Paket::get();

        return view('users.home' , [
            'kategori' =>  $this->kategori,
            'paket' => $paket
        ]);
    }

    public function show(Paket $id)
    {
        $paket = $id;
        $data = Paket::find($paket)->first();

        return view('users.paket-detail', [
            'kategori' =>  $this->kategori,
            'data' => $data
        ]);

        
    }

}
