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

                    <form method="POST" action="/admin/master-paket/jadwal-detail">
                        @csrf

                        <div class="form-group">
                          <label>Nama Paket</label>
                          <input type="text" class="form-control @error('jadwals_id') is-invalid @enderror" name="jadwals_id" value="{{ $jadwal->id }}">
                          <input type="text" class="form-control" name="" value="{{ $jadwal->paket?->nama_paket }}" readonly>
                            @error('jadwals_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nama Jadwal</label>
                            <input type="text" class="form-control" name="" value="{{ $jadwal->jadwal_nama }}" readonly>
                          </div>

                          <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Waktu</label>
                                    <input type="text" class="form-control @error('waktu') is-invalid @enderror" name="waktu" value="{{ old('waktu') }}">
                                      @error('waktu')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                  </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Waktu (Inggris)</label>
                                    <input type="text" class="form-control @error('waktu_en') is-invalid @enderror" name="waktu_en" value="{{ old('waktu_en') }}">
                                      @error('waktu_en')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                  </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Aktivitas</label>
                                    <input type="text" class="form-control @error('aktivitas') is-invalid @enderror" name="aktivitas" value="{{ old('aktivitas') }}">
                                      @error('aktivitas')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                  </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Aktivitas (Inggris)</label>
                                    <input type="text" class="form-control @error('aktivitas_en') is-invalid @enderror" name="aktivitas_en" value="{{ old('aktivitas_en') }}">
                                      @error('aktivitas_en')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                  </div>
                            </div>
                          </div>

                          
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>

                      </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection