@extends('layouts.base')

@section('content')
    @include('layouts.navbar')

    <div class="beranda">
        <section>
            <div class="container py-5">
                <div class="title-page pb-5">
                    <center>
                        <h2 style="color: #677A68">BERITA TERKINI</h2>
                    </center>
                </div>
                <div class="body-page">
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
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
@endsection