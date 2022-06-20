@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
    <h3 align="center" style="color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px; padding-top: 50px"><b>PILIH PASAR</b></h3>
    <div class="container" style="padding-top: 60px; padding-bottom: 130px" align="center">
    <div class="card" style="width: 65rem;">
        <div class="card-body" style="padding-top: 10px;">
            <form action="/PilihPasar" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="row mb-3">
                    <label for="namapasar" class="col-sm-2 col-form-label">Nama Pasar</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="namapasar">
                            <option selected>Pilih nama pasar</option>
                            @foreach ($pasar as $opt)
                            <option value="{{ $opt->id }}">{{ $opt->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" style="margin-left: 652px; padding-left: 55px; padding-right: 55px; background-color: #3CD3A6">Next</button>
                    <a href="/Profile" style="margin-left: 10px; padding-left: 60px; padding-right: 60px" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
 @endsection