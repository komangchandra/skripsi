@extends('layouts.main')

@section('judul', 'Artikel - SIG Kedelai Bogor')
    
@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-lg-8">

        <a class="text-decoration-none text-muted me-3" href="/artikel"><i class="bi bi-arrow-left"></i></a> <span class="font-bold text-muted">{{ $artikel->updated_at->diffForHumans() }}</span> <p class="text-decoration-none text-success me-3"> - dalam kategori <span class="fw-bold">{{ $artikel->kategori->namakategori }} </span></p>
        <h1 class="font-bold display-3 fw-bold">{{ $artikel->judul }}</h1>
      </div>
    </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <img src="{{ asset('storage/' . $artikel->foto) }}" alt="{{ $artikel->judul }}" class="card-img-top img-read rounded" />
    </div>
  </div>
</div>

<div class="container mt-3 mb-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <article class="font-bold artikel-read">
          <p class="fs-6">
            {!! $artikel->body !!}
          </p>
        </article>
      </div>
    </div>
</div>

    
@endsection