@extends('dashboard.layouts.main')  

@section('judul', 'Kecamatan - Dashboard SIG')

@section('container')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Peta Wilayah Administrasi</h1>
        <a href="/dashboard/kecamatan/create" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success col-lg-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Peta</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#</th>
                  {{-- <th>ID Kecamatan</th> --}}
                  <th>Nama Kecamatan</th>
                  <th>Warna</th>
                  <th>GeoJSON</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#</th>
                  {{-- <th>ID Kecamatan</th> --}}
                  <th>Nama Kecamatan</th>
                  <th>Warna</th>
                  <th>GeoJSON</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($kecamatans as $kecamatan)                    
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    {{-- <td>{{ $kecamatan->idkc }}</td> --}}
                    <td>{{ $kecamatan->namakecamatan }}</td>
                    <td> <span style="display: inline-block; background-color: {{ $kecamatan->warna }}; color: white;">{{ $kecamatan->warna }}</span></td>
                    <a href=""></a>
                    <td><a href="/geojson/{{ $kecamatan->geojson }}" target="_blank">Lihat GeoJson</a></td>
                    <td>
                        <a href="/dashboard/kecamatan/{{ $kecamatan->id }}/edit" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-fw fa-wrench"></i></a>
                    </td>
                    <td>
                        <form action="/dashboard/kecamatan/{{ $kecamatan->id }}" method="POST" class="d-line">
                          @method('delete') @csrf
                          <button type="button" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#confirmDeleteModal">
                              <i class="fas fa-times" aria-hidden="true"></i>
                          </button>
                          <!-- Modal Konfirmasi Hapus -->
                          <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="confirmDeleteModalLabel">
                                              Konfirmasi Hapus
                                          </h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                          Apakah Anda yakin ingin menghapus data ini?
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal" >Batal</button>
                                          <button type="submit" class="btn btn-danger">Hapus</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="container ms-auto">{{ $kecamatans->links() }}</div>
      </div>

</div>
@endsection