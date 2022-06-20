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
                {{-- @php
                    dd($fav);
                @endphp --}}
                <div class="row">
                    @foreach ($pasar as $we)
                        <div>
                            <h3>{{ $we->name }}</h3>
                        </div>
                        @if ($test->count() > 0)
                        @foreach ($test as $item)
                        
                        <div align="center" class="card h-100 mx-auto col-1" style="width: 16rem;">
                            <img src="frontend\gambar\Pangan\3.png" id="card-Beranda" class="card-img-top" alt="..." width="100%" height="120px" style="padding-top: 20px">
                            <div class="card-body">
                            <h5 class="card-title" style="font-size:15px"><b>{{ $pangan[$item->id_komoditas-1]->name }} /ons</b></h5>
                            <div class="btn btn-group" style="width: 12rem;">
                                <button class="btn" style="background-color: #3CD3A6; color: white">Rp. {{ $market1[$item->id_komoditas-1]->harga }},-</button>
                                <a href="" class="btn btn-danger">
                                <i class="fa-regular fa-heart"></i>
                                </a>
                            </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                            <h4>Tidak ada barang favorit</h4>
                        @endif
                    @endforeach
                    
                </div>
            </div>
        </section>
    </div>

@endsection