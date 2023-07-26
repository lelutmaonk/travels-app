@extends('users.layouts.index')
    
@section('content')
    
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">{{ $data->nama_paket }}</h1>
                <span class="color-text-a">{{ $data->kategori?->nama_kategori }}</span>
              </div>
            </div>
          </div>
        </div>
      </section><!-- End Intro Single -->

    <!-- ======= Agent Single ======= -->
    <section class="agent-single">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="agent-avatar-box">
                    <img src="{{ asset('storage/' . $data->gambar) }}" alt="" class="agent-avatar img-fluid">
                  </div>
                </div>
                <div class="col-md-5 section-md-t3">
                  <div class="agent-info-box">
                    <div class="agent-content mb-3">
                      <p class="content-d color-text-a">
                       {{ $data->deskripsi }}
                      </p>
                      <div class="info-agents color-a">
                        <p>
                          <strong>Harga : </strong>
                          <span class="color-text-a">{{ $data->harga_paket }}</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>   
          </div>
        </div>
      </section><!-- End Agent Single -->

@endsection