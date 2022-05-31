@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section ("kepalaJavaScript")
@endsection

@section('content')
    @if (Auth::user())
        @include('layouts.navbarlogin')
    @else
        @include('layouts.navbar')
    @endif
{{-- @php
    dd($pangan[0]);
@endphp --}}
        <div class="beranda">
            <div class="container" style="padding-top: 80px; padding-bottom: 80px">
                <div class="row justify-content-around">
                    <div class="col-4" id="display">
                        <div class="mx-2 py-4" id="infoPasar">
                            <div class="NamaPasar">
                                <h3><b>{{ $pasar->name }}</b></h3>
                            </div>
                            <div class="mt-3 AlamatPasar">
                                <h6>
                                    {{ $pasar->alamat }}
                                </h6>
                            </div>
                            <div class="mt-4">
                                <div class="galeri">
                                    <div class="row row-cols-2">
                                        <div class="col pb-3">
                                            <img src="frontend\gambar\pasar\kircon1.jpg" id="fotoPasar" alt="">
                                        </div>
                                        <div class="col pb-3">
                                            <img src="frontend\gambar\pasar\kircon2.jpg" id="fotoPasar" alt="">
                                        </div>
                                        <div class="col pb-3">
                                            <img src="frontend\gambar\pasar\kircon3.jpg" id="fotoPasar" alt="">
                                        </div>
                                        <div class="col pb-3">
                                            <img src="frontend\gambar\pasar\kircon4.jpg" id="fotoPasar" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 mx-2" id="display">
                        <div class="py-4" id="chart_div">
                            
                            
                        </div>
                        <div id="daftarPangan">
                            <div class="container">
                                <div class="row row-cols-4">
                                    <a href="/hargaPangan/{{ $pasar->id }}" type="button" class="badge bg-success border-0">Grafik</a>
                                    <table class="table">
                                        <tr align="center">
                                            <th scope="col" style="color: white">No</th>
                                            <th scope="col" style="color: white">Nama Pangan</th>
                                            <th scope="col" style="color: white">Harga</th>
                                            <th scope="col" style="color: white">Tanggal Terakhir</th>
                                        </tr>
                                        @php
                                            $x=0;
                                        @endphp
                                        <tbody>
                                            @foreach ($result as $item)
                                                <tr>
                                                    <td style="color: white">{{ ++$x }}</td>
                                                    <td style="color: white">{{ $pangan[$item->id_komoditas-1]->name }}</td>
                                                    <td style="color: white">{{ $item->harga }}</td>
                                                    <td style="color: white">{{ $item->tanggal }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
@endsection

@section('JavaScript')
    <script>
        
    </script>
@endsection