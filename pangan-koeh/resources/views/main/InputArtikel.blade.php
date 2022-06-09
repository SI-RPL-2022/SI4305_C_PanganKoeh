@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
        <h2 align="center" style="padding-top: 50px; color:#677A68">INPUT ARTIKEL</h2>
        <div class="container" style="padding-top: 30px; padding-bottom: 100px" align="center">
            <div class="card" style="width: 65rem;">
                <div class="card-body" style="padding-top: 10px;">
                    <form action="" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row mt-3 mb-3">
                            <label for="judulArtikel" class="col-sm-2 col-form-label">Judul Artikel</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judulArtikel" name="judulArtikel" placeholder="Masukkan judul artikel">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="isiArtikel" class="col-sm-2 col-form-label">Isi Artikel</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="isiArtikel" name="isiArtikel" placeholder="Masukkan isi artikel" style="height: 120px"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gambarArtikel" class="col-sm-2 col-form-label">Gambar Artikel</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="gambarArtikel" name="gambarArtikel">
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