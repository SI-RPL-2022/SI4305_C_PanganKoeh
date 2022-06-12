@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')
    <div class="beranda">
    <h3 align="center" style="color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px; padding-top: 50px"><b>APPROVAL VOLUNTEER</b></h3>
    <div class="container-fluid" style="padding-top: 50px; padding-bottom: 400px" align="center">
            <div class="card p-3 mb-5 bg-body rounded" style="width: 60rem;">
                <table class="table">
                <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">TTL</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">KTP</th>
                    <th scope="col">Aksi</th>
                </tr>
                @php
                    $x1=0;
                @endphp
                <tbody>
                    @foreach ($volunteers as $volunteer)
                    @if ($volunteer->role == 'WAIT')
                        <tr>
                            
                            <td>{{ ++$x1 }}</td>
                            <td>{{ $volunteer->name }}</td>
                            <td>{{ $volunteer->ttl }}</td>
                            <td>{{ $volunteer->jk }}</td>
                            <td>{{ $volunteer->pekerjaan }}</td>
                            <td><a href="{{ asset('storage/' . $volunteer->gambar) }}" target="blank">foto ktp</a></td>
                            <td align="center">
                            <div>
                                <form class="col d-inline-block" action="/terima" method="POST">
                                    @csrf
                                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $volunteer->user_id }}" readonly>
                                    <button class="btn btn-success">Terima</button>
                                </form>
                                <form class="col d-inline-block" action="/tolak" method="POST">
                                    @csrf
                                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $volunteer->user_id }}" readonly>
                                    <button class="btn btn-danger">Tolak</button>
                                </form>
                            </div>
                            </td>
                            
                        </tr>
                    @endif
                    @endforeach
                    
                    
                    
                </tbody>
            </div>
    </div>
    </div>
@endsection