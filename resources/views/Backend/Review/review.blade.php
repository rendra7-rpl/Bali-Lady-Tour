@extends('Backend.Layout.admin')

@push('css')
<style>
    /* Tambahkan padding kiri hanya saat sidebar terbuka */
    body.sidebar-open .content-wrapper.review-page {
        margin-left: 250px !important; /* sesuaikan dengan lebar sidebar */
        transition: margin-left 0.3s ease;
    }

    /* Saat sidebar tertutup */
    .content-wrapper.review-page {
        margin-left: 0 !important;
        transition: margin-left 0.3s ease;
    }
</style>
@endpush

@section('content')
<div class="content-wrapper review-page">
    <section class="content pt-4">
        <div class="container-fluid">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h3 class="card-title fw-bold text-center fs-4">Data Ulasan Pengguna</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('review.create') }}" class="btn btn-success mb-3">+ Tambah Data</a>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle text-center">
                            <thead class="table-secondary">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Ulasan</th>
                                    <th>Rate</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($data as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td class="text-start">{{ $row->ulasan }}</td>
                                    <td>⭐ {{ $row->rate }}</td>
                                    <td>
                                        <a href="{{ route('review.edit', $row->id) }}" class="btn btn-info btn-sm text-white">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $row->id }}">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">Belum ada ulasan pengguna</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // SweetAlert untuk hapus
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
@endpush
