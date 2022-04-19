@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')
    <div class="container-fluid" style="padding-top: 100px" align="center">
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
                    @foreach ($users as $user)
                    @foreach ($volunteers as $volunteer)
                    @if ($user->role == 'WAIT')
                        <tr>
                            <td>{{ ++$x1 }}</td>
                            <td>{{ $volunteer->name }}</td>
                            <td>{{ $volunteer->ttl }}</td>
                            <td>{{ $volunteer->jk }}</td>
                            <td>{{ $volunteer->pekerjaan }}</td>
                            <td><a href="{{ asset('storage/' . $volunteer->gambar) }}" target="blank">foto ktp</a></td>
                            <td align="center">
                            <a href="#" class="btn btn-success">Terima</a>
                            <a href="#" class="btn btn-danger">Tolak</a>
                            </td>
                        </tr>
                    @endif
                    @endforeach
                    @endforeach
                    
                    
                    
                </tbody>
            </div>
    </div>
@endsection