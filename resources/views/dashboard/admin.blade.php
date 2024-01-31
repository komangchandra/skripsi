@extends('dashboard.layouts.main')

@section('judul', 'Artikel - Dashboard SIG')

@section('container')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Admin</h1>
    </div>

    <div class="row">
        <div class="col-md-7">

    <div class="card shadow mb-4">
            
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Admin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Admin</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama Admin</th>
                            <th>Username</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->user }}</td>
                            <td>{{ $user->username }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container ms-auto">{{ $users->links() }}</div>

        
        </div>
    </div>

        </div>
    </div>

@endsection
