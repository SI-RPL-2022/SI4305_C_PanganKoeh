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
                <?php echo $grafik;?>
            ]);

            var options = {
                hAxis: {
                title: 'Tanggal'
                },
                vAxis: {
                title: 'Harga'
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
                <div class="py-4">
                        <a href="/hargaPangan/{{ $pasar->id }}" type="button" class="btn btn-primary rounded-pill py-2">Grafik Utama</a>
                    </div>
                <div class="py-4" id="chart_div">


                </div>
                <div id="daftarPangan">
                    <div class="container">
                        <h2>Harga {{ $panganspes->name }} Hari Ini</h2>
                        <h3>Rp{{ $tes[0]->harga }}</h3>
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