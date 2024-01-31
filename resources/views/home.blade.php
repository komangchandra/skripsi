@extends('layouts.main')

@section('judul', 'SIG Kedelai - Lampung Timur')

@section('content')

  <div class="pt-2 mb-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold">Sistem Informasi Geografis</h1>
                <p>Penelusuran GIS: Kesesuaian Lahan Tanaman Kedelai di Kabupaten Lampung Timur untuk Pertanian Unggul.</p>
            </div>
            <div class="col-md-6">
                <img src="/img/kedelai.png" alt="Foto Kedelai" class="img-blog">
            </div>
        </div>
    </div>
  </div>

  <div class="mt-5">
    <div class="container">
        <h3 class="text-center fw-bold">Peta Wilayah Kesesuaian Lahan<mark class="bg-success text-white"> Tanaman Kedelai </mark></h3>
        <hr>
        <div id="map" style="height: 550px"></div>
    </div>
  </div>

  <script>
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

    // Membuat peta dengan koordinat tengah dan level zoom awal
    var map = L.map("map").setView([-5.125649, 105.625293], 10);

    // Menambahkan peta dasar OpenStreetMap
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: "GIS Kedelai Lamtim &copy; Komang Chandra",
    }).addTo(map);

    var dropdown = L.control({position: 'topright'});

    dropdown.onAdd = function (map) {
        var div = L.DomUtil.create('div', 'info legend');
        div.innerHTML = '<select id="geojsonSelector"><option value="">Pilih Wilayah</option></select>';
        div.firstChild.onmousedown = div.firstChild.ondblclick = L.DomEvent.stopPropagation;
        return div;
    };

    dropdown.addTo(map);

    geojsonFiles.forEach(function (file) {
      fetch(file.url)
        .then((response) => response.json())
        .then((data) => {
          L.geoJSON(data, {
            style: function (feature) {
              return {
                fillColor: file.warna,
                color: "white",
                weight: 1,
                fillOpacity: 0.7
              };
            },
            onEachFeature: function (feature, layer) {
              var popupContent = "<h3> Kecamatan: " + file.namaKecamatan + "</h3> <p> Keterangan: " + file.kelas + "</p>";
              layer.bindPopup(popupContent);
            }
          }).addTo(map);

          var select = document.getElementById('geojsonSelector');
          var option = document.createElement('option');
          option.value = file.url;
          option.text = file.namaKecamatan + ' - ' + file.kelas;
          select.add(option);
        })
        .catch(error => {
          console.error("Error loading GeoJSON:", error);
        });
    });

    document.getElementById('geojsonSelector').addEventListener('change', function() {
      map.eachLayer(function (layer) {
        if (layer instanceof L.GeoJSON) {
          map.removeLayer(layer);
        }
      });

      var selectedGeoJSON = this.value;

      if (selectedGeoJSON !== '') {
        fetch(selectedGeoJSON)
          .then((response) => response.json())
          .then((data) => {
            L.geoJSON(data, {
              style: function (feature) {
                return {
                  fillColor: geojsonFiles.find(file => file.url === selectedGeoJSON).warna,
                  color: "white",
                  weight: 1,
                  fillOpacity: 0.7
                };
              },
              onEachFeature: function (feature, layer) {
                var popupContent = "<h3> Kecamatan: " + geojsonFiles.find(file => file.url === selectedGeoJSON).namaKecamatan + "</h3> <p> Keterangan: " + geojsonFiles.find(file => file.url === selectedGeoJSON).kelas + "</p>";
                layer.bindPopup(popupContent);
              }
            }).addTo(map);

            // Mendapatkan batas area geojson
            var bounds = L.geoJSON(data).getBounds();

            // Melakukan zoom dan pan ke area geojson
            map.fitBounds(bounds);
          })
          .catch(error => {
            console.error("Error loading GeoJSON:", error);
          });
      }
    });


  </script>

@endsection
