@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')
    <section>
        <div class="container py-5">
            <article>
                <div class="title-page pb-5">
                    <center>
                        <h2 style="color: #677A68"><b>{{ $isiInformasi->judul }}</b></h2>
                    </center>
                </div>
                <div class="body-page">
                    {!! $isiInformasi->body !!}
                </div>
            </article>
        </div>
    </section>
@endsection