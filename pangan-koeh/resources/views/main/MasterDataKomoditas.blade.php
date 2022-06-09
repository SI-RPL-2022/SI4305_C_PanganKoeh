@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
        <h2 align="center" style="padding-top: 50px; color:#677A68">INPUT DATA KOMODITAS</h2>
        <div class="container" style="padding-top: 60px; padding-bottom: 130px" align="center">
            <div class="card" style="width: 65rem;">
                <div class="card-body" style="padding-top: 10px;">
                    <form action="" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row mt-3 mb-3">
                            <label for="namaPasar" class="col-sm-2 col-form-label">Nama Komoditas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="namaPasar" name="namaPasar" placeholder="Masukkan nama pasar">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pasar" class="col-sm-2 col-form-label">Pasar</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="pasar">
                                    <option selected>Pilih Pasar</option>
                                    <option >Pasar Pangalengan</option>
                                    <option >Pasar Baleendah</option>
                                    <option >Pasar Banjaran</option>
                                    <option >Pasar jeung sajabana</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gambarKomoditas" class="col-sm-2 col-form-label">Foto Komoditas</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="gambarKomoditas" name="gambarKomoditas">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success" style="margin-left: 652px; padding-left: 55px; padding-right: 55px; background-color: #3CD3A6">Simpan</button>
                            <button type="button" onclick="history.back()" class="btn btn-secondary" style="margin-left: 10px; padding-left: 60px; padding-right: 60px">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 @endsection