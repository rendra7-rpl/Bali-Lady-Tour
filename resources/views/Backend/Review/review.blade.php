@extends('Backend.Layout.admin')

@section('content')
<style>
    /* Atur khusus halaman review supaya isi tidak ketiban sidebar */
    .content-wrapper {
        margin-left: 250px !important; /* lebar sidebar AdminLTE */
        padding: 20px;
    }
</style>

<div class="card shadow-sm border-0">
    <div class="card-header bg-white">
        <h3 class="card-title m-0 text-dark fw-bold">Data Ulasan Pengguna</h3>
    </div>

    <div class="card-body">
        {{-- Tombol Tambah Data --}}
        <div class="mb-3">
            <a href="{{ route('review.create') }}" class="btn btn-success">
                + Tambah Data
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
                <thead class="table-secondary">
                    <tr>
                        <th style="width: 50px">ID</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Ulasan</th>
                        <th>Rate</th>
                        <th style="width: 150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($data as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>
                            @if ($row->foto)
                                <img src="{{ asset('fotoprofile/' . $row->foto) }}" 
                                     class="img-thumbnail" 
                                     style="width: 100px; height: 60px; object-fit: cover;">
                            @else
                                <span class="text-muted">Tidak ada</span>
                            @endif
                        </td>
                        <td class="text-start">{{ $row->ulasan }}</td>
                        <td>⭐ {{ $row->rate }}</td>
                        <td>
                            <a href="{{ route('review.edit', $row->id) }}" 
                               class="btn btn-info btn-sm text-white">Edit</a>
                            <a href="#" 
                               class="btn btn-danger btn-sm delete" 
                               data-id="{{ $row->id }}">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            Belum ada ulasan pengguna
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- SweetAlert2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.delete').forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.getAttribute('data-id');

            Swal.fire({
                title: 'Yakin ingin menghapus?',
                text: "Data ini tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/review/' + id + '/delete';
                }
            });
        });
    });
</script>
@endsection
