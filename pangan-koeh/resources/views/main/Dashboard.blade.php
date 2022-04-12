@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
        <div class="container">
            <div class="row">
                <div class="col-4" id="display">
                    Informasi pasar
                </div>
                <div class="col-8" id="display">
                    Grafik
                </div>
            </div>
        </div>
    </div>  
    
@endsection