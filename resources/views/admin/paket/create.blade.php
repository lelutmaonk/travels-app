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

                    <form method="POST" action="/admin/master-paket/paket/" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Nama Paket</label>
                                    <input type="text" class="form-control @error('nama_paket') is-invalid @enderror" name="nama_paket" value="{{ old('nama_paket') }}">
                                      @error('nama_paket')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                  </div>

                                  <div class="form-group">
                                    <label>Harga Paket</label>
                                    <input type="text" class="form-control @error('harga_paket') is-invalid @enderror" name="harga_paket" value="{{ old('harga_paket') }}">
                                      @error('harga_paket')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                  </div>

                                  <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}">
                                      @error('deskripsi')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                  </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Nama Paket (Inggris)</label>
                                    <input type="text" class="form-control @error('nama_paket_en') is-invalid @enderror" name="nama_paket_en" value="{{ old('nama_paket_en') }}">
                                      @error('nama_paket_en')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                  </div>
              
                                  <div class="form-group">
                                    <label>Harga Paket (Inggris)</label>
                                    <input type="text" class="form-control @error('harga_paket_en') is-invalid @enderror" name="harga_paket_en" value="{{ old('harga_paket_en') }}">
                                      @error('harga_paket_en')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                  </div>
            
                                  <div class="form-group">
                                    <label>Deskripsi (Inggris)</label>
                                    <input type="text" class="form-control @error('deskripsi_en') is-invalid @enderror" name="deskripsi_en" value="{{ old('deskripsi_en') }}">
                                      @error('deskripsi_en')
                                      <div class="invalid-feedback">
                                          {{ $message }}
                                      </div>
                                      @enderror
                                  </div>

                            </div>
                        </div>

                          <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
                              @error('gambar')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                          </div>


                          <div class="form-group">
                            <label>Kategori Paket</label>
                            <select class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id">
                                <option value="" disabled selected>Pilih Kategori</option>
                                @foreach ($kategori as $k)
                                    <option value="{{ $k->id }}" {{ old('kategori_id') == $k->id ? 'selected' : '' }}>
                                        {{ $k->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kategori_id')
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