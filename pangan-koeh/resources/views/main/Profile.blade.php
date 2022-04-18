@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

<section class="container">
        <form class="shadow-lg p-3 mb-5 bg-white rounded-0 justify-content-center" style="margin-top: 40px; width: 900px; height: 550px; margin-left:8vw">
            <h3 style="text-align: center; padding-top: 30px; color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px;">PROFILE</h1>
            <div class="row">
            <div class="col-12 col-md-6 p-5 mt-2">
                <a href=""><img src="{{ asset('frontend\gambar\profil.png') }}" class="w-75" style="margin-left: 40px"></a>
            </div>
            @if (Auth::user()->fresh()->role == 'USER')
                <div class="col-12 col-md-6 p-5 mt-2">
                    <h5 style="font-weight: bold; font-size:15px">Username: <h5>
                        <p style="font-size:15px; font-weight: normal">{{ Auth::user()->fresh()->name }}</p>
                    <h5 style="font-weight: bold; font-size:15px">Email: <h5>
                        <p style="font-size:15px; font-weight: normal">{{ Auth::user()->fresh()->email }}</p>
                    <h5 style="font-weight: bold; font-size:15px">No.Telpon / HP<h5>
                        <p style="font-size:15px; font-weight: normal">{{ Auth::user()->fresh()->no }}</p>
                    <h5 style="font-weight: bold; font-size:15px">Alamat<h5>
                        <p style="font-size:15px; font-weight: normal">{{ Auth::user()->fresh()->alamat }}</p>
                </div>
                <button type="button" class="btn" id="tombolUbah" data-toggle="modal" data-target="#ubahModal" style="margin-top:10px; width:430px; background-color: #3CD3A6; color: white">Ubah Profile</button>
                
                <a href="/DaftarVolunteer/create" type="button" class="btn" style="margin-top:10px; width:430px; background-color: #677A68; color: white">Daftar Volunteer</a>
                
            @endif
            @if (Auth::user()->fresh()->role == 'WAIT')
                <div class="col-12 col-md-6 p-5 mt-2">
                    <h7><b style="color: rgb(198, 198, 76)">Permohonan pendaftaraan kamu telah kami terima, silakan menunggu konfirmasi Admin</b></h7>
                    <h5 style="font-weight: bold; font-size:15px">Username: <h5>
                        <p style="font-size:15px; font-weight: normal">{{ Auth::user()->fresh()->name }}</p>
                    <h5 style="font-weight: bold; font-size:15px">Email: <h5>
                        <p style="font-size:15px; font-weight: normal">{{ Auth::user()->fresh()->email }}</p>
                    <h5 style="font-weight: bold; font-size:15px">No.Telpon / HP<h5>
                        <p style="font-size:15px; font-weight: normal">{{ Auth::user()->fresh()->no }}</p>
                    <h5 style="font-weight: bold; font-size:15px">Alamat<h5>
                        <p style="font-size:15px; font-weight: normal">{{ Auth::user()->fresh()->alamat }}</p>
                    <button type="button" class="btn" id="tombolUbah" data-toggle="modal" data-target="#ubahModal" style="margin-top:10px; width:430px; background-color: #3CD3A6; color: white">Ubah Profile</button>
      
                </div>
                
                
                
            @endif
            
        </form>

</section>

@endsection