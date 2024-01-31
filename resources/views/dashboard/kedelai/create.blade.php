@extends('dashboard.layouts.main')

@section('judul', 'Tambah Data Kesesuaian Lahan - Dashboard SIG')

@section('container')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Wilayah Kesesuaian Lahan</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Wilayah Kesesuaian Lahan</h6>
        </div>
        <div class="card-body">
            <form action="/dashboard/kesesuaian-lahan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label class="fw-semibold" for="kelas">Kelas</label>
                  <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Isikan nama kelas kesesuaian lahan">
              </div>
                <div class="mb-3">
                    <label class="fw-semibold" for="kecamatan_id">Nama Kecamatan</label>
                    <select class="form-select" aria-label="Default select example" name="kecamatan_id">
                        @foreach ($kecamatans as $kecamatan)   
                            <option value="{{ $kecamatan->id }}">{{ $kecamatan->namakecamatan }}</option>
                        @endforeach
                    </select>
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
