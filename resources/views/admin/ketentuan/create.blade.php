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

                    <form method="POST" action="/admin/master-paket/ketentuan">
                        @csrf

                        <div class="form-group">
                          <label>Nama Paket</label>
                          <input type="hidden" class="form-control @error('pakets_id') is-invalid @enderror" name="pakets_id" value="{{ $paket->id }}">
                          <input type="text" class="form-control" name="" value="{{ $paket->nama_paket }}" readonly>
                            @error('pakets_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}">
                              @error('keterangan')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                          </div>

                          <div class="form-group">
                            <label>Keterangan (Inggris)</label>
                            <input type="text" class="form-control @error('keterangan_en') is-invalid @enderror" name="keterangan_en" value="{{ old('keterangan_en') }}">
                              @error('keterangan_en')
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