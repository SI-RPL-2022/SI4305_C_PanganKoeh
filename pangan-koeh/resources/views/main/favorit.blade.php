@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
        <section>
            <div class="container py-5">
                <div class="title-page pb-5">
                    <center>
                        <h2 style="color: #677A68">FAVORIT</h2>
                    </center>
                </div>
                <div class="row">
                    <div align="center" class="card h-100 mx-auto" style="width: 16rem;">
                        <img src="frontend\gambar\Pangan\3.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                        <div class="card-body">
                        <h5 class="card-title" style="font-size:15px"><b>Cabe Hijau Besar /ons</b></h5>
                        <div class="btn btn-group" style="width: 12rem;">
                            <button class="btn" style="background-color: #3CD3A6; color: white">Rp. 4.000,-</button>
                            <a href="" class="btn btn-danger">
                            <i class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        </div>
                    </div>

                    <div align="center" class="card h-100 mx-auto" style="width: 16rem;">
                        <img src="frontend\gambar\Pangan\7.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                        <div class="card-body">
                        <h5 class="card-title" style="font-size:15px"><b>Gula Gulaku /kg</b></h5>
                        <div class="btn btn-group" style="width: 12rem;">
                            <button class="btn" style="background-color: #3CD3A6; color: white">Rp. 3.200,-</button>
                            <a href="" class="btn btn-danger">
                            <i class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        </div>
                    </div>

                    <div align="center" class="card h-100 mx-auto" style="width: 16rem;">
                        <img src="frontend\gambar\Pangan\10.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size:15px"><b>Paprika /kg</b></h5>
                            <div class="btn btn-group" style="width: 12rem;">
                            <button class="btn" style="background-color: #3CD3A6; color: white">Rp. 3.200,-</button>
                            <a href="" class="btn btn-danger">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection