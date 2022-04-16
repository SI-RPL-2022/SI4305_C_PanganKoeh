@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
        <div class="container" style="padding-top: 80px; padding-bottom: 80px">
            <div class="row justify-content-around">
                <div class="col-4" id="display">
                    <div class="mx-2 py-4" id="infoPasar">
                        <div class="NamaPasar">
                            <h3><b>Pasar Kiaracondong</b></h3>
                        </div>
                        <div class="mt-3 AlamatPasar">
                            <h6>
                                Ps. Kiaracondong, Kebun Jayanti, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40281
                            </h6>
                        </div>
                        <div class="mt-3">
                            <div class="galeri">
                                <div class="row row-cols-2">
                                    <div class="col pb-3">
                                        <img src="frontend\gambar\pasar\kircon1.jpg" id="fotoPasar" alt="">
                                    </div>
                                    <div class="col pb-3">
                                        <img src="frontend\gambar\pasar\kircon2.jpg" id="fotoPasar" alt="">
                                    </div>
                                    <div class="col pb-3">
                                        <img src="frontend\gambar\pasar\kircon3.jpg" id="fotoPasar" alt="">
                                    </div>
                                    <div class="col pb-3">
                                        <img src="frontend\gambar\pasar\kircon4.jpg" id="fotoPasar" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7 mx-2" id="display">
                    <div class="py-4" id="grafik">
                        <h1><b>Ini untuk grafik</b></h1>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('JavaScript')
    <script>
        
    </script>
@endsection