@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @if (Auth::user())
      @include('layouts.navbarlogin')
    @else
      @include('layouts.navbar')
    @endif
    <div class="beranda">
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session()->has('berhasil'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
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
          <center>
            <h1 style="color: #677A68; margin-bottom: 50px"><b>Rata-rata Harga Pangan</b></h1>
          </center>
<<<<<<< HEAD

          <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
              <div class="col">
                <div class="card h-100 mx-auto" style="width: 16rem;">
                  <img src="frontend\gambar\Pangan\6.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                  <div class="card-body">
                      <h5 class="card-title" style="font-size:15px; text-align:center"><b>Gula Gulaku /kg</b></h5> <!-- Dari database -->
                      <center><div class="btn btn-group" style="width: 12rem;">
                        <button class="btn" style="background-color: #3CD3A6; color: white">Rp. 3.200,-</button> <!-- Dari database -->
                        <a href="" class="btn btn-danger">
                          <i class="fa-regular fa-heart"></i>
                        </a>
                      </div><center>
=======
          <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators" style="margin-bottom: -50px">
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" id="pangan">
              {{-- @php
                  dd($pangan);
              @endphp --}}
              <div class="carousel-item active">
                <div class="row">
                  @foreach ($pasar1 as $item)
                  @if ($item->id_komoditas < 4)
                  <div align="center" class="card h-100 mx-auto" style="width: 16rem;">
                    <img src="frontend\gambar\Pangan\2.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                    <div class="card-body">
                      <h5 class="card-title" style="font-size:15px"><b>{{ $item->name }} /kg</b></h5> <!-- Dari database -->
                      <div class="btn btn-group" style="cursor: default;width: 12rem;">
                        <button type="button" class="btn" style="cursor:default; background-color: #3CD3A6; color: white">Rp. {{ $item->harga }},-</button>
                        @if (Auth::user())
                            {{-- <form action="/GakFavourite" method="POST">
                              @csrf
                              <input type="hidden" name="id_komoditas" id="id_komoditas" value="{{ $item->id_komoditas }}">
                              <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                              <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-heart"></i>
                              </button>
                            </form> --}}
                            <form action="/Favourite" method="POST">
                              @csrf
                              <input type="hidden" name="id_komoditas" id="id_komoditas" value="{{ $item->id_komoditas }}">
                              <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                              <button type="submit" class="btn btn-danger">
                                <i class="fa-regular fa-heart"></i>
                              </button>
                            </form>
                        @else
                            
                        @endif
                      </div>
                    </div>
>>>>>>> afb5ecbc203c3fc0ebd4e9dd42be9addcea36e9a
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>

<<<<<<< HEAD
              <div class="col">
                <div class="card h-100 mx-auto" style="width: 16rem;">
                  <img src="frontend\gambar\Pangan\6.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                  <div class="card-body">
                      <h5 class="card-title" style="font-size:15px; text-align:center"><b>Gula Gulaku /kg</b></h5> <!-- Dari database -->
                      <center><div class="btn btn-group" style="width: 12rem;">
=======
              {{-- <div class="carousel-item">
                <div class="row">
                  <div align="center" class="card h-100 mx-auto" style="width: 16rem;">
                    <img src="frontend\gambar\Pangan\6.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                    <div class="card-body">
                      <h5 class="card-title" style="font-size:15px"><b>Tomat /kg</b></h5> <!-- Dari database -->
                      <div class="btn btn-group" style="width: 12rem;">
                        <button class="btn" style="background-color: #3CD3A6; color: white">Rp. 14.500,-</button> <!-- Dari database -->
                        <a href="" class="btn btn-danger">
                          <i class="fa-regular fa-heart"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div align="center" class="card h-100 mx-auto" style="width: 16rem;">
                    <img src="frontend\gambar\Pangan\7.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                    <div class="card-body">
                      <h5 class="card-title" style="font-size:15px"><b>Gula Gulaku /kg</b></h5> <!-- Dari database -->
                      <div class="btn btn-group" style="width: 12rem;">
                        <button class="btn" style="background-color: #3CD3A6; color: white">Rp. 3.200,-</button> <!-- Dari database -->
                        <a href="" class="btn btn-danger">
                          <i class="fa-regular fa-heart"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div align="center" class="card h-100 mx-auto" style="width: 16rem;">
                    <img src="frontend\gambar\Pangan\8.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                    <div class="card-body">
                      <h5 class="card-title" style="font-size:15px"><b>Daging Sapi /kg</b></h5> <!-- Dari database -->
                      <div class="btn btn-group" style="width: 12rem;">
>>>>>>> afb5ecbc203c3fc0ebd4e9dd42be9addcea36e9a
                        <button class="btn" style="background-color: #3CD3A6; color: white">Rp. 3.200,-</button> <!-- Dari database -->
                        <a href="" class="btn btn-danger">
                          <i class="fa-regular fa-heart"></i>
                        </a>
                      </div><center>
                  </div>
                </div>
              </div>
<<<<<<< HEAD

              <div class="col">
                <div class="card h-100 mx-auto" style="width: 16rem;">
                  <img src="frontend\gambar\Pangan\6.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                  <div class="card-body">
                    <h5 class="card-title" style="font-size:15px; text-align:center"><b>Gula Gulaku /kg</b></h5> <!-- Dari database -->
                    <center><div class="btn btn-group" style="width: 12rem;">
                      <button class="btn" style="background-color: #3CD3A6; color: white">Rp. 3.200,-</button> <!-- Dari database -->
                      <a href="" class="btn btn-danger">
                        <i class="fa-regular fa-heart"></i>
                      </a>
                    </div><center>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card h-100 mx-auto" style="width: 16rem;">
                  <img src="frontend\gambar\Pangan\6.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                  <div class="card-body">
                      <h5 class="card-title" style="font-size:15px; text-align:center"><b>Gula Gulaku /kg</b></h5> <!-- Dari database -->
                      <center><div class="btn btn-group" style="width: 12rem;">
                        <button class="btn" style="background-color: #3CD3A6; color: white">Rp. 3.200,-</button> <!-- Dari database -->
                        <a href="" class="btn btn-danger">
                          <i class="fa-regular fa-heart"></i>
                        </a>
                      </div><center>
                  </div>
              </div>
            </div>

            <div class="col">
                <div class="card h-100 mx-auto" style="width: 16rem;">
                  <img src="frontend\gambar\Pangan\6.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                  <center><div class="card-body">
                      <h5 class="card-title" style="font-size:15px; text-align:center"><b>Gula Gulaku /kg</b></h5> <!-- Dari database -->
                      <div class="btn btn-group" style="width: 12rem;">
                        <button class="btn" style="background-color: #3CD3A6; color: white">Rp. 3.200,-</button> <!-- Dari database -->
                        <a href="" class="btn btn-danger">
                          <i class="fa-regular fa-heart"></i>
                        </a>
                      </div><center>
                  </div>
              </div>
            </div>
          </div>             
=======
            </div>

            <button class="carousel-control-prev" id="left" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" id="right" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> --}}
          </div>
>>>>>>> afb5ecbc203c3fc0ebd4e9dd42be9addcea36e9a
      </section>
      
      <center><hr class="batas shadow-lg" style="width: 80%;"></center>

      <section class="about py-5">
      <a name="about py-5"></a>
        <center class="py-5">
          <h1 style="color: #677A68"><b>Tentang Kami</b></h1>
        </center>
        <center>
          <!-- <svg id="bulet" width="100" height="100" viewBox="0 0 352 344" fill="none" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="175.782" cy="171.75" rx="175.782" ry="171.75" fill="#3CD3A6"/>
          </svg> -->
          <div class="card text-center py-4 px-3 shadow-lg p-3 mb-5 bg-white rounded-0 justify-content-center" id="cardAbout">
            <div class="card-body">
              <p class="card-text py-2" style="text-align: justify;">Pangan-Koeh memberikan layanan informasi-informasi mengenai komodtitas pangan, berupa perbandingan harga komoditas pangan antar pasar, harga rata-rata komoditas pangan pada setiap pasar, dan harga tertinggi dan terendah dari setiap komoditas pangan.</p>
              <p class="card-text"><b>Kelompok 3</b></p>
              <p class="card-text">SI-43-05</p>
            </div>
          </div>
        </center>
      </section>
    </div>
@endsection