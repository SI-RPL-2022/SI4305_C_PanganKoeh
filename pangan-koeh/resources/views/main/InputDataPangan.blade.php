@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
    <h3 align="center" style="color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px; padding-top: 50px"><b>INPUT DATA PANGAN</b></h3>
        <div class="container" style="padding-top: 30px; padding-bottom: 130px" align="center">
            <div class="card" style="width: 65rem;">
                <div class="card-body" style="padding-top: 10px;">
                    <form action="/InputDataPangan" method="post" enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name="id_pasar" id="id_pasar" value="{{ $id }}">
                        <div class="row mb-3" style="padding-top: 15px">
                            <label for="namapangan" class="col-sm-2 col-form-label">Nama Pangan</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="namapangan">
                                    <option selected>Pilih nama pangan</option>
                                    @foreach ($pangan as $opt)
                                    <option value="{{ $opt->id }}">{{ $opt->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan harga pangan">
                            </div>
                            <p>harga yang diinput dalam bentuk per kg, minyak dalam liter</p>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan tanggal saat input data">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gambarpasar" class="col-sm-2 col-form-label">Gambar Pasar*</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="gambarpasar" name="gambarpasar">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success" style="margin-left: 652px; padding-left: 55px; padding-right: 55px; background-color: #3CD3A6">Simpan</button>
                            <a href="/Profile" style="margin-left: 10px; padding-left: 60px; padding-right: 60px" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 @endsection