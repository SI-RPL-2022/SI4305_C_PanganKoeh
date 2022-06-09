@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
        <h2 align="center" style="padding-top: 50px; color:#677A68">INPUT DATA PASAR</h2>
        <div class="container" style="padding-top: 30px; padding-bottom: 130px" align="center">
            <div class="card" style="width: 65rem;">
                <div class="card-body" style="padding-top: 10px;">
                    <form action="" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row mb-3">
                            <label for="namaPasar" class="col-sm-2 col-form-label">Nama Pasar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="namaPasar" name="namaPasar" placeholder="Masukkan nama pasar">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="kecamatan">
                                    <option selected>Pilih Kecamatan Pasar</option>
                                    <option >Kecamatan Pangalengan</option>
                                    <option >ecamatan Baleendah</option>
                                    <option >Kecamatan Banjaran</option>
                                    <option >Kecamatan Pasar jeung sajabana</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="alamatPasar" class="col-sm-2 col-form-label">Alamat Pasar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamatPasar" name="alamatPasar" placeholder="Masukkan alamat pasar">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jamOperasional" class="col-sm-2 col-form-label">Jam Operasional</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jamOperasional" name="jamOperasional" placeholder="Contoh : 18.00 - 23.00">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gambarPasar" class="col-sm-2 col-form-label">Foto Pasar</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="gambarPasar" name="gambarPasar">
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