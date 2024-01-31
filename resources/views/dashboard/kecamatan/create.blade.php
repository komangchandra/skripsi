@extends('dashboard.layouts.main')

@section('judul', 'Tambah Data Kecamatan - Dashboard SIG')

@section('container')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Wilayah Administrasi</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Wilayah Administrasi</h6>
        </div>
        <div class="card-body">
            <form action="/dashboard/kecamatan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label class="fw-semibold" for="idkc">ID Kecamatan</label>
                  <input type="text" class="form-control" id="idkc" name="idkc" placeholder="Isikan id kecamatan">
              </div>
                <div class="mb-3">
                    <label class="fw-semibold" for="namakecamatan">Nama Kecamatan</label>
                    <input type="text" class="form-control" id="namakecamatan" name="namakecamatan" placeholder="Isikan nama kecamatan">
                </div>
                <div class="mb-3">
                    <label class="fw-semibold" for="warna">Warna</label>
                    <input type="text" class="form-control @error('warna')is-invalid @enderror" id="warna" name="warna" placeholder="Isikan kode warna menggunakan #">
                </div>
                <div class="mb-3">
                  <label class="fw-semibold" for="geojson">GeoJSON</label>
                  <input type="text" class="form-control @error('geojson')is-invalid @enderror" id="geojson" name="geojson" placeholder="Isikan nama geojson">
                </div>
                {{-- <div class="mb-3">
                  <label class="fw-semibold" for="foto">Uplode GeoJSON</label>
                  <img id="preview" src="#" class="img-preview img-fluid mb-3 col-sm-3">
                  <input class="form-control" type="file" id="geojson" name="geojson" accept="geojson/*" onchange="previewImage(event)">
                </div> --}}
                <button type="submit" class="btn btn-primary" >Tambah Wilayah</button>
            </form>
        </div>
    </div>
</div>
    

@endsection
