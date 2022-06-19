@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')
    <section>
        <div class="container py-5" style="max-width: 960px">
            <article>
                <div class="title-page pb-4">
                    <h1 class="pb-1" style="color: #677A68"><b>{{ $isiInformasi->judul }}</b></h1>
                    @if (Auth::user()->fresh()->role == 'ADM')
                        <button type="button" class="btn btn-primary btn-sm" onclick="history.back()"><i class="bi bi-arrow-left"></i> Kembali</button>
                        <a href="#" type="button" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                        <form action="/Informasi/delete/{{ $isiInformasi->id }}" method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus artikel ini?')"><i class="bi bi-trash"></i> Hapus</button>
                        </form>
                    @endif
                </div>
                <div class="body-page">
                    {!! $isiInformasi->body !!}
                </div>
            </article>
        </div>
    </section>
@endsection