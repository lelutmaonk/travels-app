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

                    <a href="/admin/master-paket/kategori/create" class="btn btn-sm btn-success mb-3">Tambah Kategori</a>

                    @if (session('message'))
                          <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                          </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Nama Kategori (Inggris)</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $d)
                          <tr>
                            <td>{{ $d->nama_kategori }}</td>
                            <td>{{ $d->nama_kategori_en }}</td>
                            <td>
                                <a href="/admin/master-paket/kategori/{{ $d->id }}/edit" class="btn btn-sm btn-primary">Ubah</a>
                                
                                <form action="/admin/master-paket/kategori/{{ $d->id }}" method="POST" class="d-inline">
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