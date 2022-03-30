@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7" id="background-auth">
                <h1>Hello Guys! ini buat yang ijo</h1>
            </div>
            <div class="col-xl-5">
                <div class="form">
                    <div class="greet">
                        <h2><b>Hello!</b></h2>
                        <p>Selamat Datang Kembali!</p>
                    </div>
                    <div class="formulir">
                        <form action="">
                            <div class="mb-3 input-group">
                                <span class="input-group-text rounded-pill" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control rounded-pill" id="inputEmail" name="email" placeholder="E-mail" aria-describedby="basic-addon1">
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text rounded-pill" id="basic-addon2"><i class="bi bi-lock-fill"></i></span>
                                <input type="password" class="form-control rounded-pill" id="inputPassword" name="password" placeholder="Password" aria-describedby="basic-addon2">
                            </div>
                            <div class="mb-1">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-success rounded-pill border border-light" type="button" style="background-color: #72DC58">Login</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <center>
                                    <a href="{{ url('register') }}" style="font-size: 12px">Belum punya akun? Daftar sekarang!</a>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection