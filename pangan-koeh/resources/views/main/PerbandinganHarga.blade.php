@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda" align="center">
    <h3 class="pt-5" align="center" style="color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px;"><b>BANDINGKAN HARGA KOMODITAS</b></h1>
        @if (Auth::user()->fresh()->role == 'ADM')
            <a href="/MasterDataKomoditas">Lihat Semua Komoditas ></a>
        @endif
        <div class="container" style="padding-top: 30px; padding-bottom: 130px">
            <form action="/perbandingan" method="POST">
            @csrf
                <div class="row mb-3 justify-content-center">
                    <label for="namaKomoditas" class="col-sm-2 col-form-label" style="text-align: left" >Nama Komoditas</label>
                </div>
                <div class="row mb-5 justify-content-center">
                    <div class="col-sm-4">
                        <select class="form-select" aria-label="Default select example" name="namaKomoditas">
                            @foreach ($pangan as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-1">
                    <div class="col">
                        <div class="row g-0" ><center>
                            <label for="pasar1" class="col-sm-2 col-form-label" style="text-align: left" >Pasar 1</label></center>
                        </div>
                        <div class="row g-0"><center>
                            <div class="col-sm-6">
                                <select class="form-select" aria-label="Default select example" name="pasar1">
                                    @foreach ($pasar as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div></center>
                        </div>
                        <div class="row g-0" style="padding-top: 20px">
                            <div class="card mx-auto" style="width: 12rem">
                                <img src="{{ asset('storage/post-images/Pangan/5.png') }}" id="card-Beranda" class="card-img-top" alt="..." style="width:100%">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-size:15px"><b>Komoditas /kg</b></h5>
                                <a href="#" class="btn"  style="background-color: #3CD3A6; color: white">Rp. Harga,-</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row g-0"><center>
                            <label for="pasar2" class="col-sm-2 col-form-label" style="text-align: left" >Pasar 2</label></center>
                        </div>
                        <div class="row g-0"><center>
                            <div class="col-sm-6">
                                <select class="form-select" aria-label="Default select example" name="pasar2">
                                    @foreach ($pasar as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div></center>
                        </div>
                        <div class="row g-0" style="padding-top: 20px">
                            <div class="card mx-auto" style="width: 12rem">
                                <img src="{{ asset('storage/post-images/Pangan/5.png') }}" id="card-Beranda" class="card-img-top" alt="..." style="width:100%">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-size:15px"><b>Komoditas /kg</b></h5>
                                <a href="#" class="btn"  style="background-color: #3CD3A6; color: white">Rp. Harga,-</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-success">Bandingkan Harga!</button>
                </div>
            </form>
        </div>
    </div>
 @endsection