@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
        <section>
            <h3 class="pt-5" style="text-align: center; color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px;">PROFILE</h1>
            <div class="container py-5 pb-5">
                <form class="shadow-lg bg-white rounded-0 justify-content-center" style="width: 900px; height: 500px; margin-left:8vw">
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
                        <div class="d-grid col-6">
                            <a href="/DaftarVolunteer/{{ Auth::user()->id }}/edit" type="button" class="btn ms-5" style="margin-top:10px; background-color: #3CD3A6; color: white">Ubah Profile</a>
                        </div>
                        <div class="d-grid col-6">
                            <a href="/DaftarVolunteer/create" type="button" class="btn me-5" style="margin-top:10px; background-color: #677A68; color: white">Daftar Volunteer</a>
                        </div>
                        
                    
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
                            <div class="d-grid">
                                <a href="/DaftarVolunteer/{{ Auth::user()->id }}/edit" type="button" class="btn" style="margin-top:10px; background-color: #3CD3A6; color: white">Ubah Profile</a>
                            </div>
                        </div>
                    @endif
                    
                </form>
            </div>
        </section>
    </div>

@endsection