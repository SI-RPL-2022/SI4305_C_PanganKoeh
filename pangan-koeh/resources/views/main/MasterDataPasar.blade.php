@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h2 align="center" style="color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px; padding-top: 50px"><b>INPUT DATA PASAR</b></h2>
        <div class="container" style="padding-top: 50px; padding-bottom: 150px" align="center">
            <div class="card" style="width: 65rem;">
                <div class="card-body" style="padding-top: 30px;">
                    <form action="/inputpasar" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nama Pasar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama pasar">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Masukkan nama kecamatan">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat Pasar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat pasar">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jam" class="col-sm-2 col-form-label">Jam Operasional</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jam" name="jam" placeholder="Contoh : 18.00 - 23.00">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="foto1" class="col-sm-2 col-form-label">Foto Pasar 1</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="foto1" name="foto1">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="foto2" class="col-sm-2 col-form-label">Foto Pasar 2</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="foto2" name="foto2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="foto3" class="col-sm-2 col-form-label">Foto Pasar 3</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="foto3" name="foto3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="foto4" class="col-sm-2 col-form-label">Foto Pasar 4</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="foto4" name="foto4">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success" style="margin-left: 652px; padding-left: 55px; padding-right: 55px; background-color: #3CD3A6">Simpan</button>
                            <button type="button" onclick="history.back()" class="btn btn-secondary" style="margin-left: 10px; padding-left: 60px; padding-right: 60px">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 @endsection