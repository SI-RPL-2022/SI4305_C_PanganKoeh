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
                    <div align="center" class="col-12 col-md-3 h-100 mx-auto" style="width: 14rem;"> 
                        <div class="card">
                            <img class="card-img-top" src="frontend\gambar\Pangan\1.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size:15px"><b>Minyak Goreng Sanco /liter</b></h5>
                                <a href="#" class="btn"  style="background-color: #3CD3A6; color: white">Rp. 14.500,-</a>
                            </div>
                        </div>
                    </div>

                    <div align="center" class="col-12 col-md-3 h-100 mx-auto" style="width: 14rem;"> 
                        <div class="card">
                            <img class="card-img-top" src="frontend\gambar\Pangan\3.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size:15px"><b>Cabe Hijau Besar /ons</b></h5>
                                <a href="#" class="btn"  style="background-color: #3CD3A6; color: white">Rp. 4.000,-</a>
                            </div>
                        </div>
                    </div>

                    <div align="center" class="col-12 col-md-3 h-100 mx-auto" style="width: 14rem;"> 
                        <div class="card">
                            <img class="card-img-top" src="frontend\gambar\Pangan\4.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size:15px"><b>Daging Ayam Potong /kg</b></h5>
                                <a href="#" class="btn"  style="background-color: #3CD3A6; color: white">Rp. 38.000,-</a>
                            </div>
                            <div class="card-footer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection