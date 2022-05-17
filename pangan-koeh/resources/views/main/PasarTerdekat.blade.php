@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')
    <div class="beranda">
        <center>
            <h1 style="padding-top: 60px; padding-bottom: 30px; color: #677A68"><b>PASAR TERDEKAT</b></h1>
            <div class="daftar-pasar col-5">
                <select class="form-select" aria-label="Default select example">
                    <option>Pilih Kecamatan</option>
                    <option value="1">Kecamatan One</option>
                    <option value="2">Kecamatan Two</option>
                    <option value="3">Kecamatan Three</option>
                </select>
            </div>
        </center>
        
        <div class="container ms-auto me-auto" style="padding-top: 30px; padding-bottom: 100px">
            <div class="card ms-auto me-auto" style="width: 65rem;">
                <div class="card-body" style="padding-top: 10px;">
                    <a href="#" id="card-pasar">
                        <div class="card mb-4" style="max-width: 1000px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="frontend\gambar\pasar\Ciroyom.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title pt-2 pb-3"><b>Pasar Ciroyom</b></h5>
                                    <p class="card-text pb-3"><small><b>Jl. Ciroyom Bar., <span id="kecamatan">Kec. Andir</span>, <span id="kota">Kota Bandung</span>, Jawa Barat 40172</b></small></p>
                                    <p class="card-text" style="color : #00A560"><small><b>Jam buka</b></small></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" id="card-pasar">
                        <div class="card mb-4" style="max-width: 1000px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="frontend\gambar\pasar\Ciroyom.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title pt-2 pb-3"><b>Pasar Ciroyom</b></h5>
                                    <p class="card-text pb-3"><small><b>Jl. Ciroyom Bar., <span id="kecamatan">Kec. Andir</span>, <span id="kota">Kota Bandung</span>, Jawa Barat 40172</b></small></p>
                                    <p class="card-text" style="color : #00A560"><small><b>Jam buka</b></small></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" id="card-pasar">
                        <div class="card mb-4" style="max-width: 1000px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="frontend\gambar\pasar\Ciroyom.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title pt-2 pb-3"><b>Pasar Ciroyom</b></h5>
                                    <p class="card-text pb-3"><small><b>Jl. Ciroyom Bar., <span id="kecamatan">Kec. Andir</span>, <span id="kota">Kota Bandung</span>, Jawa Barat 40172</b></small></p>
                                    <p class="card-text" style="color : #00A560"><small><b>Jam buka</b></small></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
    
@endsection