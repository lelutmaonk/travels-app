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

                    <a href="/admin/master-paket/jadwal/{{ $jadwal->id }}" class="btn btn-sm btn-danger mb-3">Kembali</a>
                    <a href="/admin/master-paket/jadwal-detail/create/{{ $jadwal->id }}" class="btn btn-sm btn-success mb-3">Tambah Detail Jadwal</a>
                    

                    @if (session('message'))
                          <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                          </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Nama Paket</th>
                            <th scope="col">Nama Jadwal</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Aktivitas</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($jadwalDetail as $detail)
                              <tr>
                                <td>{{ $detail->jadwal?->paket?->nama_paket }}</td>
                                <td>{{ $detail->jadwal?->jadwal_nama }}</td>
                                <td>{{ $detail->waktu }}</td>
                                <td>{{ $detail->aktivitas }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
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