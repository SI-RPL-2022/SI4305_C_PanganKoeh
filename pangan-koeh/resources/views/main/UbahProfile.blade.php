@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')
    <h3 align="center" style="padding-top: 50px"><b>UBAH PROFILE</b></h3>
    <div class="container" style="padding-top: 60px; padding-left: 50px; padding-bottom: 40px">
        <div class="card" style="width: 65rem;">
                <div class="card-body" style="padding-top: 10px;">
                <form method="POST">
                  @csrf
                  <input type="hidden" class="form-control" id="id" name="id" value="{{ auth()->user()->id }}" readonly>
                  <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="email" name="email">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="no_hp" class="col-sm-2 col-form-label">No.Telp/HP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="no_hp">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="alamat">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="pass" class="col-sm-2 col-form-label">Password saat ini</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pass">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="passbar" class="col-sm-2 col-form-label">Password baru</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="passbar">
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-success" style="margin-left: 652px; padding-left: 55px; padding-right: 55px; background-color: #3CD3A6">Simpan</button>
                    <button type="submit" class="btn btn-secondary" style="margin-left: 10px; padding-left: 60px; padding-right: 60px">Batal</button>
                  </div>
                </form>
                </div>
        </div>
    </div>
@endsection