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
            data.addColumn('number', '{{ $panganspes[0]->name }}');

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
    <div class="container-fluid" style="padding-top: 80px; padding-bottom: 80px">
        <div class="row justify-content-around">
            <div class="col-4" id="display">
                <div class="mx-2 py-4" id="infoPasar">
                    <div class="NamaPasar">
                        <h3><b>{{ $pasar1->name }}</b></h3>
                    </div>
                    <div class="mt-3 AlamatPasar">
                        <h6>
                            {{ $pasar1->alamat }}
                        </h6>
                    </div>
                    <div class="mt-4">
                        <div class="galeri">
                            <div class="row row-cols-2">
                                <div class="col pb-3">
                                    <img src="{{ asset('storage/' . $pasar1->foto1) }}" id="fotoPasar" alt="">
                                </div>
                                <div class="col pb-3">
                                    <img src="{{ asset('storage/' . $pasar1->foto2) }}" id="fotoPasar" alt="">
                                </div>
                                <div class="col pb-3">
                                    <img src="{{ asset('storage/' . $pasar1->foto3) }}" id="fotoPasar" alt="">
                                </div>
                                <div class="col pb-3">
                                    <img src="{{ asset('storage/' . $pasar1->foto4) }}" id="fotoPasar" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-7 mx-2" id="display">
                <div class="py-4">
                        <a href="/hargaPangan/{{ $pasar1->id }}" type="button" class="btn btn-success rounded-pill py-2" style="padding-right: 30px; padding-left: 30px; margin-left: 20px; margin-top: 10px; background-color: #3CD3A6">Grafik Utama</a>
                    </div>
                <div class="py-4" id="chart_div">


                </div>
                <div id="daftarPangan">
                    <div class="container">
                        @if (count($panganspes) > 0 && count($tes) >0)
                            <h2>Harga {{ $panganspes[0]->name }} Hari Ini</h2>
                            <h3>Rp{{ $tes[0]->harga }}</h3>
                            <div class="row row-cols-4">
                                @foreach ($pangan as $item)
                                <div class="col pb-4">
                                    <a href="/hargaPangan1/{{ $item->id }}/{{ $pasar1->id }}" type="button" class="btn btn-success rounded-pill py-2" style="width:9rem; font-size:12px; background-color:#3CD3A6">{{ $item->name }}</a>
                                </div>
                                @endforeach
                            </div>
                        @else
                            <h4>tidak ada komoditas</h4>
                        @endif
                        
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