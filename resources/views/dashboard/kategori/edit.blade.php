@extends('dashboard.layouts.main')

@section('judul', 'Ubah Kategori - Dashboard SIG')

@section('container')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Kategori</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Ubah Kategori</h6>
        </div>
        <div class="card-body">
            <form action="/dashboard/kategori/{{ $kategori->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label class="fw-semibold" for="namakategori">Nama Kategori</label>
                    <input type="text" class="form-control @error('name')is-invalid @enderror" id="namakategori" name="namakategori" placeholder="Isikan nama kategori" value="{{ $kategori->namakategori }}">
                </div>
                <div class="mb-3">
                    <label class="fw-semibold" for="slug">Slug</label>
                    <input type="text" class="form-control @error('slug')is-invalid @enderror" id="slug" name="slug" placeholder="Slug akan otomatis terisi" value="{{ $kategori->slug }}" readonly>
                </div>
                
                <button type="submit" class="btn btn-primary" >Ubah Kategori</button>
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

    const judulInput = document.getElementById('namakategori');
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
