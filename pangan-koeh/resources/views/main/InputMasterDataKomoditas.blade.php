@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h2 align="center" style="color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px; padding-top: 50px"><b>INPUT DATA KOMODITAS</b></h2>
        <div class="container" style="padding-top: 50px; padding-bottom: 300px" align="center">
            <div class="card" style="width: 65rem;">
                <div class="card-body" style="padding-top: 10px;">
                    <form action="/inputkomoditas" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row mt-3 mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nama Komoditas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama komoditas">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gambar" class="col-sm-2 col-form-label">Foto Komoditas</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" onchange="previewImage()">
                                @error('gambar')
                                    <div style="text-align: left" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <img style="height: 200px; object-fit: cover;text-align: left" class="img-preview img-fluid pt-2">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success" style="margin-left: 652px; padding-left: 55px; padding-right: 55px; background-color: #3CD3A6">Simpan</button>
                            <button type="button" onclick="history.back()" class="btn btn-secondary" style="margin-left: 10px; padding-left: 60px; padding-right: 60px">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage() {
            const gambar = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
 @endsection