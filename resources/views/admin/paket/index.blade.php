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

                    <a href="/admin/master-paket/paket/create" class="btn btn-sm btn-success mb-3">Tambah Paket</a>

                    @if (session('message'))
                          <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                          </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                          <img src="{{ asset('storage\app\images\7Tg1X1P6YxxWovahfce9fTuWWLrd2CHXaql8ZWMx.jpg') }}" alt="">
                          <tr>
                            <th scope="col">Nama Paket</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Gambar</th>
                             <th scope="col">Jadwal</th>
                            <th scope="col">Ketentuan</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                              <td>{{ $d->nama_paket }}</td>
                              <td>{{ $d->kategori?->nama_kategori }}</td>
                              <td>{{ $d->harga_paket }}</td>
                              <td>
                               <center>
                                <img src="{{ asset('storage/' . $d->gambar) }}" alt="" width="50px" height="50px">
                               </center>
                              </td>
                              <td><a href="/admin/master-paket/jadwal/{{ $d->id }}" class="btn btn-sm btn-warning">Jadwal</a></td>
                              <td><a href="/admin/master-paket/ketentuan/{{ $d->id }}" class="btn btn-sm btn-warning">Ketentuan</a></td>
                              <td>
                                  <a href="/admin/master-paket/paket/{{ $d->id }}/edit" class="btn btn-sm btn-primary">Ubah</a>
                                  <a href="/admin/master-paket/paket/{{ $d->id }}" class="btn btn-sm btn-success">Lihat</a>
                                  <form action="/admin/master-paket/paket/{{ $d->id }}" method="POST" class="d-inline">
                                  @method('delete')
                                  @csrf
                                      <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus ?')">Hapus</button>
                                  </form>
  
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection