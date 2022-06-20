@extends('layouts.base')

@section('title')
    Pangankoeh
@endsection

@section('content')
    @include('layouts.navbarlogin')

    <div class="beranda">
        <h2 align="center" style="color: #677A68; font-family: scada; font-style: normal; font-weight: 400; line-height: 32px; padding-top: 50px"><b>EDIT ARTIKEL</b></h2>
        <div class="container" style="padding-top: 30px; padding-bottom: 160px" align="center">
            <div class="card" style="width: 65rem;">
                <div class="card-body" style="padding-top: 10px;">
                    <form action="/Informasi/update/{{ $info->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3 mb-3">
                            <label for="judul" class="col-sm-2 col-form-label">Judul Artikel</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required autofocus value="{{ old('judul', $info->judul) }}">
                                @error('judul')
                                    <div style="text-align: left" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3 mb-3">
                            <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $info->slug) }}">
                                @error('slug')
                                    <div style="text-align: left" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3 mb-3">
                            <label for="category_id" class="col-sm-2 col-form-label">Topik</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="category_id" id="category_id">
                                    @foreach ($categories as $category)
                                        @if (old('topik', $info->category_id) == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="body" class="col-sm-2 col-form-label">Isi Artikel</label>
                            <div style="text-align: left" class="trix-content col-sm-10">
                                <input id="body" type="hidden" name="body" value="{{ old('body', $info->body) }}">
                                <trix-editor input="body"></trix-editor>
                                @error('body')
                                <small style="text-align: left" class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gambarArtikel" class="col-sm-2 col-form-label">Gambar Artikel</label>
                            <div class="col-sm-10" style="">
                                <input type="hidden" name="oldImage" value="{{ $info->image }}">
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                                @error('image')
                                    <div style="text-align: left" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                @if ($info->image)
                                <img src="{{ asset('storage/' . $info->image) }}" style="height: 200px; object-fit: cover;text-align: left" class="img-preview img-fluid pt-2">
                                @else
                                    <img style="height: 200px; object-fit: cover;text-align: left" class="img-preview img-fluid pt-2">
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success" style="margin-left: 652px; padding-left: 55px; padding-right: 55px; background-color: #3CD3A6">Edit</button>
                            <button type="button" onclick="history.back()" class="btn btn-secondary" style="margin-left: 10px; padding-left: 60px; padding-right: 60px">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function() {
           fetch('/Informasi/cekSlug/' + judul.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

        document.addEventListener("trix-file-accept", function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
 @endsection