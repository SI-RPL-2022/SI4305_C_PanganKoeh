@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbar')
    <div class="container-fluid" style=" padding-left: 160px; padding-top: 100px">
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
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center">
                        <a href="#" class="btn btn-success">Terima</a>
                        <a href="#" class="btn btn-danger">Tolak</a>
                        </td>
                    </tr>
                </tbody>
            </div>
    </div>
@endsection