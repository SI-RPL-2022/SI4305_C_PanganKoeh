@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')
    <h3 align="center" style="padding-top: 50px"><b>DAFTAR VOLUNTEER</b></h3>
    <div class="container" style="padding-top: 60px; padding-left: 50px; padding-bottom: 40px">
    <div class="card" style="width: 65rem;">
        <div class="card-body" style="padding-top: 10px;">
            <form action="/DaftarVolunteer" method="post" >
                <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda">
                </div>
                </div>
                <div class="row mb-3">
                <label for="ttl" class="col-sm-2 col-form-label">TTL</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Masukkan tempat tanggal lahir Anda">
                </div>
                </div>
                <div class="row mb-3">
                <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jk" name="jk" placeholder="Masukkan jenis kelamin Anda">
                </div>
                </div>
                <div class="row mb-3">
                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan pekerjaan Anda">
                </div>
                </div>
                <div class="row mb-3">
                <label for="gambar" class="col-sm-2 col-form-label">Upload KTP</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="gambar" name="gambar">
                </div>
                </div>
                <button type="submit" class="btn btn-success" style="margin-left: 842px; padding-left: 55px; padding-right: 55px; background-color: #3CD3A6">Daftar</button>
            </form>
        </div>
    </div>
    </div>
@endsection