@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')
    <div class="beranda" style="padding-bottom: 100px">
    <section>
        <div class="container py-5" style="max-width: 960px;">
            <article>
                <div class="title-page pb-4">
                    <h1 class="pb-1" style="color: #677A68"><b>{{ $isiInformasi->judul }}</b></h1>
                    @if (Auth::user()->fresh()->role == 'ADM')
                        <button type="button" class="btn btn-primary btn-sm" onclick="history.back()"><i class="bi bi-arrow-left"></i> Kembali</button>
                        <a href="/Informasi/edit/{{ $isiInformasi->id }}" type="button" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                        <form action="/Informasi/delete/{{ $isiInformasi->id }}" method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus artikel ini?')"><i class="bi bi-trash"></i> Hapus</button>
                        </form>
                    @endif
                </div>
                <div class="body-page">
                    @if ($isiInformasi->image)
                    <div class="py-2">
                        <center><img src="{{ asset('storage/' . $isiInformasi->image) }}" class="img-fluid py-3" alt="{{ $isiInformasi->slug }}" style="height: 350px; width: 960px; object-fit: contain"></center>
                    </div>
                    @else
                        <center><img src="{{ asset('frontend/gambar/logo-login-register.png') }}" class="img-fluid py-3" alt="Pangan-Koeh"></center>
                    @endif
                    <div class="pt-4">
                        {!! $isiInformasi->body !!}
                    </div>
                </div>
            </article>
        </div>
    </section>
    </div>
@endsection