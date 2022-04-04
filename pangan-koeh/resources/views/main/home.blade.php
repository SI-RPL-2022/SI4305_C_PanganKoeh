@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')
    <div class="beranda">
      <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="frontend\gambar\carousel\1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="frontend\gambar\carousel\2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="frontend\gambar\carousel\3.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </section>

      <section id="daftarPangan">
          <center class="py-3">
            <h1 style="color: #677A68"><b>Rata-rata Harga Pangan</b></h1>
          </center>
          <div id="carouselExampleIndicators" class="carousel slide py-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" id="pangan">
              <div class="carousel-item active">
                <div class="row">
                  <div class="card px-3" style="width: 15rem;">
                    <img src="frontend\gambar\Pangan\minyakgoreng.jpg" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px">
                    <div class="card-body">
                      <h5 class="card-title">Contoh</h5>
                      <p class="card-text">Nanti card ini di-looping</p>
                      <a href="#" class="btn btn-success">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" id="left" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" id="right" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </section>

      <section class="about py-5">
        <center class="py-5">
          <h1 style="color: #677A68"><b>Tentang Kami</b></h1>
        </center>
        <center>
          <svg id="bulet" width="100" height="100" viewBox="0 0 352 344" fill="none" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="175.782" cy="171.75" rx="175.782" ry="171.75" fill="#3CD3A6"/>
          </svg>
          <div class="card text-center py-4 px-3" id="cardAbout">
            <div class="card-body">
              <p class="card-text py-2">Pangan-Koeh memberikan layanan informasi-informasi mengenai komodtitas pangan, berupa perbandingan harga komoditas pangan antar pasar, harga rata-rata komoditas pangan pada setiap pasar, dan harga tertinggi dan terendah dari setiap komoditas pangan.</p>
              <p class="card-text"><b>Kelompok 3</b></p>
              <p class="card-text">SI-43-05</p>
            </div>
          </div>
        </center>
      </section>
    </div>
@endsection