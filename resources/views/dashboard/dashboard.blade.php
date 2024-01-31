@extends('dashboard.layouts.main')  

@section('judul', 'Dashboard SIG')

@section('container')
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hallo {{ auth()->user()->user }}</h1>
      </div>

      <!-- Content Row -->
      <div class="row">

          <!-- Tanggal -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                  Tanggal Hari ini</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \Carbon\Carbon::now()->format('d-m-Y') }} </div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Jumlah Artikel -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                  Jumlah Artikel</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahArtikel }}</div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Wilayah Sangat COcok -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kecamatan
                              </div>
                              <div class="row no-gutters align-items-center">
                                  <div class="col-auto">
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $jumlahKecamatan }}</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-map fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Jumlah Admin -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                  Jumlah Lahan Yang Sangat Sesuai</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahSesuai }}</div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-map-marker fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Content Row -->

      <div class="row">

          <!-- Area Chart -->
          <div class="col-xl-8 col-lg-9">
              <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div
                      class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Preview Peta</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                      <div id="map"></div>
                  </div>
              </div>
          </div>
      </div>

  </div>


  {{-- Script Map --}}
  <script>
    // Membuat peta dengan koordinat tengah dan level zoom awal
    var map = L.map("map").setView([-5.125649, 105.625293], 9);

    // Menambahkan peta dasar OpenStreetMap
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: "GIS Kedelai Lamtim &copy; Komang Chandra",
    }).addTo(map);

    var geojsonFiles = [
      @foreach($kedelais as $kedelai)
        {
          "url": "{{ asset('kelas-geojson/' . $kedelai->geojson) }}",
          "warna": "{{ $kedelai->warna }}",
          "namaKecamatan": "{{ $kedelai->kecamatan->namakecamatan }}",
          "kelas": "{{ $kedelai->kelas }}"
        },
      @endforeach
    ];

    geojsonFiles.forEach(function(file) {
      fetch(file.url)
        .then(response => response.json())
        .then(data => {
          L.geoJSON(data, {
            style: function(feature) {
              return {
                fillColor: file.warna,
                color: "white",
                weight: 1,
                fillOpacity: 0.5
              };
            },
            onEachFeature: function(feature, layer) {
              var popupContent = "<h3> Kecamatan: " + file.namaKecamatan + "</h3> <p> Keterangan: " + file.kelas + "</p>";
              layer.bindPopup(popupContent);
            }
          }).addTo(map);
        })
        .catch(error => {
          console.error("Error loading GeoJSON:", error);
        });
    });
  </script>

@endsection