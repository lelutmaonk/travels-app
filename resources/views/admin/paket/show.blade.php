@extends('admin.layouts.index')

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $title }}</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Add the 'img-fluid' class to the <img> tag -->
                            <img src="{{ asset('storage/' . $paket->gambar) }}" alt="" class="img-fluid img-thumbnail">
                        </div>
                        <div class="col-md-8">
                            <b>Nama Paket</b>
                            <p class="text-start">{{ $paket->nama_paket }}</p>
                            <b>Kategori Paket</b>
                            <p class="text-start">{{ $paket->kategori->nama_kategori }}</p>
                            <b>Harga</b>
                            <p class="text-start">{{ $paket->harga_paket }}</p>
                            <b>Deskirpsi</b>
                            <p class="text-start">{{ $paket->deskripsi }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Include</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                   
  
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Ketentuan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                   
  
                </div>
            </div>
        </div>

    </div>
@endsection