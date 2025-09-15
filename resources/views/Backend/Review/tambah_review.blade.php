@extends('backend.layout.admin')

@section('content')
<div class="container mt-4">
    <h2>Tambah Review</h2>

    {{-- Notifikasi sukses / error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Periksa kembali inputan anda!</strong><br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Ulasan</label>
            <textarea name="ulasan" class="form-control" rows="3" placeholder="Tulis ulasan" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Rating</label>
            <select name="rate" class="form-control" required>
                <option value="">-- Pilih Rating --</option>
                <option value="1">1 ⭐</option>
                <option value="2">2 ⭐⭐</option>
                <option value="3">3 ⭐⭐⭐</option>
                <option value="4">4 ⭐⭐⭐⭐</option>
                <option value="5">5 ⭐⭐⭐⭐⭐</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto (Opsional)</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('review.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
