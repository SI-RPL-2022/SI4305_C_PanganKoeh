@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
      @if (Auth::user()->fresh()->role == 'ADM')
      <div class="tambahArtikel">
        <a href="/Informasi/create">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16" style="color: #677A68">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
          </svg>
        </a>
      </div>
      @endif
        <section>
          <div class="container py-5">
            <div class="title-page pb-5">
              @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
                <center>
                <h3 align="center" style="color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px; padding-top: 50px"><b>BERITA TERKINI</b></h3>
                </center>
            </div>
            <div class="body-page" style="padding-left: 60px">
              <div class="row row-cols-1 row-cols-md-2 g-1">
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="frontend\gambar\Informasi\1.png" style="height: 220px" id="card-informasi" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title" style="font-size: 17px"><b>Kenapa Minyak Goreng Mahal dan Langka? Ini Penyebabnya Menurut Kemendag</b></h5>
                              <p class="card-text" style="font-size: 13px">Kenaikan harga minyak goreng telah terjadi sejak akhir 2021 dan sampai saat ini belum terselesaikan. Dimulai sejak November 2021, harga minyak goreng ...</p>
                              <a href="#" style="font-size: 14px">Learn More<i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="\frontend\gambar\Informasi\2.png" style="height: 220px" id="card-informasi" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title" style="font-size: 17px"><b>Kenaikan Harga Pangan Jauh Sebelum Lebaran, Asosiasi Pedagang: Tak Wajar</b></h5>
                              <p class="card-text" style="font-size: 13px">Sekretaris Jenderal Dewan Pimpinan Pusat Ikatan Pedagang Pasar Indonesia (Ikappi) Reynaldi Sarijowan menilai reli kenaikan harga kebutuhan pokok pada awal tahun ini tidak wajar ...</p>
                              <a href="#" style="font-size: 14px">Learn More<i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="\frontend\gambar\Informasi\3.png" style="height: 220px" id="card-informasi" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title" style="font-size: 17px"><b>Masyarakat Rentan di Pusaran Kenaikan Harga Pangan</b></h5>
                              <p class="card-text" style="font-size: 13px">Di tengah situasi pandemi covid-19 yang tak kunjung usai, daya tahan masyarakat menghadapi tekanan baru kenaikan harga pangan yang terus melambung diperkirakan tidak lagi kenyal. ...</p>
                              <a href="#" style="font-size: 14px">Learn More<i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="\frontend\gambar\Informasi\4.png" style="height: 220px" id="card-informasi" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title" style="font-size: 17px"><b>Harga Minyak Goreng Curah Naik Lagi, Tembus Rp17.100 per Liter</b></h5>
                              <p class="card-text" style="font-size: 13px">Kenaikan indeks harga pangan dunia turut didorong pergerakan harga minyak nabati dan susu. Selain itu, harga sereal dan daging juga mengalami peningkatan yang signifikan. ...</p>
                              <a href="#" style="font-size: 14px">Learn More<i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                @foreach ($informasis as $informasi)
                <div class="col">
                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        @if ($informasi->image)
                          <img src="{{ asset('storage/' . $informasi->image) }}" style="height: 220px; object-fit: cover" id="card-informasi" class="img-fluid rounded-start" alt="{{ $informasi->slug }}">
                        @else
                          <img src="{{ asset('frontend/gambar/logo-navbar.png') }}" style="height: 220px; object-fit: cover" class="img-fluid rounded-start" alt="Pangan-Koeh">
                        @endif
                            
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="font-size: 17px"><b>{{ $informasi->judul }}</b></h5>
                          <p class="card-text" style="font-size: 13px">{{ $informasi->excerpt }} ...</p>
                          <a href="/Informasi/{{ $informasi->slug }}" style="font-size: 14px">Learn More<i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </section>
    </div>
@endsection