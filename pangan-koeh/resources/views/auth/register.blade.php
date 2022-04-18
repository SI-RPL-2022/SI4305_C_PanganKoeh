@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7" id="background-auth">
                <div id="picture">
                    <img id="logo-auth" src="{{ asset('frontend\gambar\logo-login-register.png') }}" alt="logo">
                    <svg id="svg-auth" width="1140" height="741" viewBox="0 0 1140 741" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="403.108" cy="805.761" r="734.847" stroke="#0575E6" stroke-width="2.64333"/>
                        <circle cx="188.998" cy="737.035" r="734.847" stroke="#0575E6" stroke-width="2.64333"/>
                    </svg>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="form">
                    <div class="greet">
                        <h2><b>Hello!</b></h2>
                        <p>Daftar untuk memulai!</p>
                    </div>
                    <div class="formulir">
                        <form action="/register" method="post">
                            @csrf
                            <input type="text" class="form-control" id="role" name="role" value="USER" hidden>
                            <div class="mb-3 input-group">
                                <span class="input-group-text rounded-pill" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control rounded-pill" id="name" name="name" placeholder="Username" aria-describedby="basic-addon1" required value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text rounded-pill" id="basic-addon2"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="E-mail" aria-describedby="emailHelp"required value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text rounded-pill" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control rounded-pill" id="no" name="no" placeholder="No.Telpon/HP" aria-describedby="basic-addon1" required value="{{ old('no') }}">
                                @error('no')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text rounded-pill" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control rounded-pill" id="alamat" name="alamat" placeholder="Alamat" aria-describedby="basic-addon1" required value="{{ old('alamat') }}">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 input-group">
                                <span class="input-group-text rounded-pill" id="basic-addon3"><i class="bi bi-lock-fill"></i></span>
                                <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="Password" aria-describedby="basic-addon3" required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-success rounded-pill border border-light" type="submit" style="background-color: #3CD3A6">Daftar</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <center>
                                    <a href="{{ url('login') }}" id="link">Sudah punya akun? Login disini</a>
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection