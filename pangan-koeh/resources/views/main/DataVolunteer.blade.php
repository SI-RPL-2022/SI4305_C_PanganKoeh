@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')
    <div class="beranda">
    <h3 align="center" style="color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px; padding-top: 50px"><b>DATA VOLUNTEER</b></h3>
    <div class="container-fluid py-auto" style="padding-top: 50px; padding-bottom: 400px" align="center">
            <div class="card p-3 mb-5 bg-body rounded" style="width: 60rem;">
                <table class="table">
                <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">TTL</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">KTP</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
                @php
                    $x=0;
                @endphp
                <tbody>
                    @foreach ($data as $volunteer)
                    @if ($volunteer->role == 'VLNTR' || $volunteer->role == 'INACTIVE')
                        <tr>
                            <td>{{ ++$x }}</td>
                            <td>{{ $volunteer->name }}</td>
                            <td>{{ $volunteer->ttl }}</td>
                            <td>{{ $volunteer->jk }}</td>
                            <td>{{ $volunteer->pekerjaan }}</td>
                            <td><a href="{{ asset('storage/' . $volunteer->gambar) }}" target="blank">foto ktp</a></td>
                            <td>
                                @if ($volunteer->role == 'VLNTR')
                                    Active
                                @endif
                                @if ($volunteer->role == 'INACTIVE')
                                    Inactive
                                @endif
                            </td>
                            @if ($volunteer->role == 'VLNTR')
                                <td>
                                    <form class="col d-inline-block" action="/inactive" method="POST">
                                        @csrf
                                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $volunteer->user_id }}" readonly>
                                        <button class="btn btn-danger">Inactived</button>
                                    </form>
                                </td>
                            @endif
                            @if ($volunteer->role == 'INACTIVE')
                                <td>
                                    <form class="col d-inline-block" action="/active" method="POST">
                                        @csrf
                                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $volunteer->user_id }}" readonly>
                                        <button class="btn btn-success">Actived</button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endif
                    @endforeach
                    
                </tbody>
            </div>
    </div>
    </div>
    @section('JavaScript')
        {{-- <script>
            $(function(){
                $('.toggle-class').change(function(){
                var user_id = $(this).data('id');
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: '/activeinactive',
                        data: {'user_id':user_id},
                        success: function(data){
                            console.log('Success')
                        }
                    });
                });
            });
        </script> --}}
    @endsection
@endsection