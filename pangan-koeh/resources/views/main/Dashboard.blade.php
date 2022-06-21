@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section ("kepalaJavaScript")

{{-- @php
dd($pasar1);
@endphp --}}
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStuff);
    function drawStuff() {

        var data = new google.visualization.arrayToDataTable([
        ['Komoditas', 'Harga'],
        <?php echo $data;?>
        ]);

        var options = {
            title: 'Chess opening moves',
            width: 725,
            height: 500,
            legend: { position: 'none' },
            chart: { title: 'Harga Pangan di {{ $pasar1->name }}',
                    subtitle: 'Harga berdasarkan rupiah' },
            bars: 'horizontal', // Required for Material Bar Charts.
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
                        <a href="/DetailPasar/{{ $pasar1->id }}" type="button" class="btn btn-success rounded-pill py-2" style="padding-right: 100px; padding-left: 100px; margin-top: 40px; margin-left: 250px; background-color: #3CD3A6">Detail Pasar</a>
                    </div>
                    
                    <div class="py-4" id="top_x_div">
                        
                        
                    </div>
                    <div id="daftarPangan">
                        
                        <div class="container">
                            
                            <div class="row row-cols-4">
                                
                                @foreach ($pangan as $item)
                                    <div class="col pb-4">
                                        <a href="/hargaPangan1/{{ $item->id }}/{{ $pasar1->id }}" type="button" class="btn btn-success rounded-pill py-2" style="width:9rem; font-size:12px; background-color:#3CD3A6">{{ $item->name }}</a>
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