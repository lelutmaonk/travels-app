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

                    <form method="POST" action="/admin/master-paket/kategori/">
                        @csrf

                        <div class="form-group">
                          <label>Nama Kategori</label>
                          <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" value="{{ old('nama_kategori') }}">
                            @error('nama_kategori')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nama Kategori (Inggris)</label>
                            <input type="text" class="form-control @error('nama_kategori_en') is-invalid @enderror" name="nama_kategori_en" value="{{ old('nama_kategori_en') }}">
                              @error('nama_kategori_en')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                          </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>

                      </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection