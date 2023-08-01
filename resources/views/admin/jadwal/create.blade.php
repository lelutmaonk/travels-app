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

                    <form method="POST" action="/admin/master-paket/jadwal">
                        @csrf

                        <div class="form-group">
                          <label>Nama Paket</label>
                          <input type="text" class="form-control @error('pakets_id') is-invalid @enderror" name="pakets_id" value="{{ $paket->id }}">
                          <input type="text" class="form-control" name="" value="{{ $paket->nama_paket }}" readonly>
                            @error('pakets_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Jadwal</label>
                            <input type="text" class="form-control @error('jadwal_nama') is-invalid @enderror" name="jadwal_nama" value="{{ old('jadwal_nama') }}">
                              @error('jadwal_nama')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                          </div>

                          <div class="form-group">
                            <label>Jadwal (Inggris)</label>
                            <input type="text" class="form-control @error('jadwal_nama_en') is-invalid @enderror" name="jadwal_nama_en" value="{{ old('jadwal_nama_en') }}">
                              @error('jadwal_nama_en')
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