@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section ("kepalaJavaScript")
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
        ['Komoditas', 'Harga'],
        ['{{ $pangan[$grafik[0]->id_komoditas-1]->name }}', {{ $grafik[0]->harga }}],
        ['{{ $pangan[$grafik[1]->id_komoditas-1]->name }}', {{ $grafik[1]->harga }}],
        ['{{ $pangan[$grafik[2]->id_komoditas-1]->name }}', {{ $grafik[2]->harga }}],
        ['{{ $pangan[$grafik[3]->id_komoditas-1]->name }}', {{ $grafik[3]->harga }}],
        ['{{ $pangan[$grafik[4]->id_komoditas-1]->name }}', {{ $grafik[4]->harga }}],
        ['{{ $pangan[$grafik[5]->id_komoditas-1]->name }}', {{ $grafik[5]->harga }}],
        ['{{ $pangan[$grafik[6]->id_komoditas-1]->name }}', {{ $grafik[6]->harga }}],
        ['{{ $pangan[$grafik[7]->id_komoditas-1]->name }}', {{ $grafik[7]->harga }}],
        ['{{ $pangan[$grafik[8]->id_komoditas-1]->name }}', {{ $grafik[8]->harga }}],
        ['{{ $pangan[$grafik[9]->id_komoditas-1]->name }}', {{ $grafik[9]->harga }}]
        ]);

        var options = {
        title: 'Chess opening moves',
        width: 725,
        height: 500,
        legend: { position: 'none' },
        chart: { title: 'Harga Pangan di {{ $pasar->name }}',
                subtitle: 'Harga berdasarkan rupiah' },
        bars: 'vertical', // Required for Material Bar Charts.
        axes: {
            y: {
            0   : { side: 'left', label: 'Harga'} // Top x-axis.
            }
        },
        bar: { groupWidth: "90%" }
    };

    var chart = new google.charts.Bar(document.getElementById('top_x_div'));
    chart.draw(data, options);
    };
</script>
@endsection

@section('content')
    @if (Auth::user())
        @include('layouts.navbarlogin')
    @else
        @include('layouts.navbar')
    @endif
    
    {{-- @php
        dd($grafik);
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
                    <div class="py-4" id="top_x_div">
                        
                        
                    </div>
                    <div id="daftarPangan">
                        <div class="container">
                            <div class="row row-cols-4">
                                @foreach ($pangan as $item)
                                    <div class="col pb-4">
                                        <a href="/hargaPangan1/{{ $item->id }}/{{ $pasar->id }}" type="button" class="btn btn-success rounded-pill py-2">{{ $item->name }}</a>
                                    </div>
                                @endforeach
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