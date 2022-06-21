@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda" style="padding-bottom: 200px">
        <section>
            {{-- @if (session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                {{ session('berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif --}}
            <div class="container py-5">
                <div class="title-page pb-5">
                    <center>
                    <h3 align="center" style="color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px; padding-top: 10px"><b>FAVORIT</b></h3>
                    </center>
                </div>
                {{-- @php
                    dd($fav);
                @endphp --}}
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        @if (count($fav) > 0)
                            @foreach ($fav as $item)
                            <div class="col">
                            <div class="card h-100 mx-auto" style="width: 16rem;">
                                <img src="{{ asset('storage/' . $item->gambar) }}" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size:15px; text-align:center"><b>{{ $item->name }} /kg</b></h5> <!-- Dari database -->
                                    <center><div class="btn btn-group" style="width: 12rem;">
                                    <button class="btn" style="background-color: #3CD3A6; color: white">Rp. {{ $item->ratarata }},-</button> <!-- Dari database -->
                                    <a href="" class="btn btn-danger">
                                        <i class="fa-regular fa-heart"></i>
                                    </a>
                                    </div><center>
                                </div>
                            </div>
                            </div>
                        @endforeach
                        @else
                            <h4>Tidak ada barang favorit!</h4>
                        @endif
                        
                    </div>
                  </div>         
            </div>
        </section>
    </div>

@endsection