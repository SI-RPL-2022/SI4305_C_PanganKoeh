@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')
    <div class="beranda">
        <center>
        <h3 align="center" style="color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px; padding-top: 50px"><b>PASAR TERDEKAT</b></h3>
            <div class="daftar-pasar container">
                <form action="/PasarTerdekat" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 offset-md-3">
                            <select class="form-select" aria-label="Default select example" name="id"> 
                                <option>Pilih Kecamatan</option>
                                @foreach ($pasar as $item)
                                <option value="{{ $item->id }}">{{ $item->kecamatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-success">Find</button>
                        </div>
                    </div>
                </form>
            </div>
        </center>
        
        <div class="container ms-auto me-auto" style="padding-top: 30px; padding-bottom: 100px">
            <div class="card ms-auto me-auto" style="width: 65rem;">
                <div class="card-body" style="padding-top: 10px;">
                    @foreach ($pasar as $item)
                    <a href="#" id="card-pasar">
                        <div class="card mb-4" style="max-width: 1000px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="frontend\gambar\pasar\Ciroyom.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title pt-2 pb-3"><b>{{ $item->name }}</b></h5>
                                    <p class="card-text pb-3"><small><b>{{ $item->alamat }}, <span id="kecamatan">Kec. {{ $item->kecamatan }}</span></p>
                                    <p class="card-text" style="color : #00A560"><small><b>Jam buka</b></small></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        
    </div>
    
@endsection