@extends('layouts.base')

@section('title')
Pangankoeh
@endsection

@section ("kepalaJavaScript")
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Tanggal');
            data.addColumn('number', '{{ $panganspes->name }}');

            data.addRows([
                [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
                [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
                [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
                [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
                [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
                [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
                [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
                [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
                [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
                [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
                [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
                [66, 70], [67, 72], [68, 75], [69, 80]
            ]);

            var options = {
                hAxis: {
                title: 'Time'
                },
                vAxis: {
                title: 'Popularity'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>
@endsection
    

@section('content')
@if (Auth::user())
@include('layouts.navbarlogin')
@else
@include('layouts.navbar')
@endif

// {{-- @php
//         dd($grafik);
//     @endphp --}}
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
                            @foreach ($pangan as $item)
                            <div class="col pb-4">
                                <a href="/hargaPangan1/{{ $item->id }}" type="button" class="btn btn-success rounded-pill py-2">{{ $item->name }}</a>
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