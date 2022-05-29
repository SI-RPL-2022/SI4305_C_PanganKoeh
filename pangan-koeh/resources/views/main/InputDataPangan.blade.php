@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
    <h3 align="center" style="padding-top: 50px"><b>INPUT DATA PANGAN</b></h3>
    <div class="container" style="padding-top: 60px; padding-bottom: 130px" align="center">
    <div class="card" style="width: 65rem;">
        <div class="card-body" style="padding-top: 10px;">
            <form action="" method="post" enctype="multipart/form-data" >
                <div class="row mb-3">
                    <label for="namapasar" class="col-sm-2 col-form-label">Nama Pasar</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih nama pangan</option>
                            <option value="1">Pasar 1</option>
                            <option value="2">Pasar 2</option>
                            <option value="3">Pasar 3</option>
                            <option value="4">Pasar 4</option>
                            <option value="5">Pasar 5</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="namapangan" class="col-sm-2 col-form-label">Nama Pangan</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih nama pangan</option>
                            <option value="1">Bawang Merah</option>
                            <option value="2">Bawang Putih</option>
                            <option value="3">Cabai Merah</option>
                            <option value="4">Cabai Rawit</option>
                            <option value="5">Daging Ayam</option>
                            <option value="6">Daging Sapi</option>
                            <option value="7">Gula Pasir</option>
                            <option value="8">Minyak Goreng</option>
                            <option value="9">Telur Ayam</option>
                            <option value="10">Beras</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="berat" class="col-sm-2 col-form-label">Satuan Berat</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>pilih satuan berat</option>
                            <option value="1">/kg</option>
                            <option value="2">/g</option>
                            <option value="3">/ons</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan harga pangan">
                    </div>
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