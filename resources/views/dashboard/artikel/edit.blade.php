@extends('dashboard.layouts.main')

@section('judul', 'Ubah Artikel - Dashboard SIG')

@section('container')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Artikel</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Ubah Artikel</h6>
        </div>
        <div class="card-body">
            <form action="/dashboard/artikel/{{ $artikel->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label class="fw-semibold" for="judul">Judul Artikel</label>
                    <input type="text" class="form-control @error('name')is-invalid @enderror" id="judul" name="judul" placeholder="Isikan judul artikel" value="{{ $artikel->judul }}">
                </div>
                <div class="mb-3">
                    <label class="fw-semibold" for="slug">Slug</label>
                    <input type="text" class="form-control @error('slug')is-invalid @enderror" id="slug" name="slug" placeholder="Slug akan otomatis terisi" value="{{ $artikel->slug }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="fw-semibold" for="judul">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori_id">
                        @foreach ($kategoris as $kategori)   
                            <option value="{{ $kategori->id }}">{{ $kategori->namakategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="fw-semibold" for="body">Body</label>
                    <input id="body" type="hidden" name="body" value="{{ $artikel->body }}" >
                    <trix-editor input="body"></trix-editor>
                </div>
                {{-- <div class="mb-3">
                    <label class="fw-semibold" for="ex">Excerp</label>
                    <textarea class="form-control" id="ex" name="ex" rows="2" placeholder="Isi excerp" required>{{ $artikel->ex }}</textarea>
                </div> --}}
                <div class="mb-3">
                    <label class="fw-semibold" for="foto">Uplode Foto</label>
                    <input type="hiden" name="oldFoto" value="{{ $artikel->foto }}">
                    @if ($artikel->foto)
                    <img src="{{ asset('storage/' . $artikel->foto) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
                    @else
                    <img id="preview" src="#" class="img-preview img-fluid mb-3 col-sm-3">
                    @endif
                    <input class="form-control" type="file" id="foto" name="foto" accept="foto/*" onchange="previewImage()">
                  </div>
                <button type="submit" class="btn btn-primary" >Ubah Artikel</button>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    const judulInput = document.getElementById('judul');
    const slugInput = document.getElementById('slug');

    judulInput.addEventListener('input', function() {
        const judul = judulInput.value;
        const slug = slugify(judul);
        slugInput.value = slug;
    });

    function slugify(text) {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')           // Mengganti spasi dengan tanda hubung
            .replace(/[^\w\-]+/g, '')       // Menghapus karakter non-word dan non-hyphen
            .replace(/\-\-+/g, '-')         // Mengganti dua atau lebih tanda hubung berturut-turut dengan satu tanda hubung
            .replace(/^-+/, '')             // Menghapus tanda hubung di awal teks
            .replace(/-+$/, '');            // Menghapus tanda hubung di akhir teks
    }
</script>

@endsection
