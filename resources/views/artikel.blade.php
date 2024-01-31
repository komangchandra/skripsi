@extends('layouts.main')

@section('judul', 'Artikel - SIG Kedelai')

@section('content')

  <div class="pt-2">
    <div class="container">
        @if ($artikels->count())
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <h1 class="fw-bold text-success">{{ $artikels[0]->judul }}</h1>
                <p class="card-desc">{{ $artikels[0]->body }}</p>
                <a class="btn btn-success btn rounded-pill mb-3" href="/artikel/{{ $artikels[0]->slug }}" role="button">Baca artikel</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $artikels[0]->foto) }}" alt="{{ $artikels[0]->judul }}" class="img-blog">
            </div>
        </div>
        @endif
    </div>
  </div>

  <div class="my-5">
    <div class="container">
        <h3 class="text-center fw-bold">Semua <mark class="bg-success text-white"> Artikel </mark></h3>

        {{-- Looping artikel --}}
        
        <div class="row d-flex justify-content-center my-3">
          @foreach ($artikels as $artikel)
          <div class="col-md-3 my-3">
              <a href="/artikel/{{ $artikel->slug }}" class="text-decoration-none">
                  <div class="card">
                      <img src="{{ asset('storage/' . $artikel->foto) }}" class="card-img-top img-fluid" alt="{{ $artikel->judul }}">
                      <div class="card-body">
                        <h5 class="card-title fw-bold text-success">{{ $artikel->judul }}</h5>
                        <p class="card-text card-desc">{{ $artikel->body }}</p>
                      </div>
                    </div>
              </a>
          </div>
          @endforeach
        </div>

        <div class="container ">
          {{ $artikels->links() }}
        </div>
        
    </div>
  </div>

@endsection