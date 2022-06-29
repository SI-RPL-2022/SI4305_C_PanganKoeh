@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')
    <div class="beranda">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show pt-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    <h3 align="center" style="color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px; padding-top: 50px"><b>DATA KOMODITAS</b></h3>
    
    <div class="container-sm" style="padding-top: 40px; padding-bottom: 400px;">
        <div class="tambahArtikel">
            <a href="/MasterDataKomoditas/create">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16" style="color: #677A68">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
              </svg>
            </a>
          </div>
        <div class="card mt-3 mb-5 mx-auto bg-body rounded" style="width: 60%">
            <table class="table">
                <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Komoditas</th>
                    <th scope="col">gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
                @php
                    $x=0;
                @endphp
                <tbody>
                    @foreach ($komoditas as $komo)
                        <tr class="py-auto">
                            <td style="text-align: center">{{ ++$x }}</td>
                            <td>{{ $komo->name }}</td>
                            <td style="text-align: center"><img src="{{ asset('storage/' . $komo->gambar) }}" height="80px"></td>
                            <td style="text-align: center">
                                <a href="/MasterDataKomoditas/edit/{{ $komo->id }}" type="button" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square">Edit</i></a>
                                <form action="/MasterDataKomoditas/delete/{{ $komo->id }}" method="post" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus komoditas ini?')"><i class="bi bi-trash"></i>Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection