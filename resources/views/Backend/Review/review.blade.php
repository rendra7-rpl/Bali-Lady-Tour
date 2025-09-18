@extends('Backend.Layout.admin')

@section('content')
<div class="content-wrapper review-page">

  <section class="content pt-4">
    <div class="container-fluid">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-white">
          <h3 class="card-title fw-bold text-center fs-4">Data Ulasan Pengguna</h3>
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

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Review Pengguna</h1>
                </div>
            </div>
        </div>
        <div class="card-body">
          <a href="{{ route('review.create') }}" class="btn btn-success mb-3">+ Tambah Data</a>
          <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
              <thead class="table-secondary">
                <tr>
                  <th>No</th>
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

                      <!-- tombol yang memicu SweetAlert -->
                      <button class="btn btn-danger btn-sm delete" data-id="{{ $row->id }}">Delete</button>

                      <!-- form tersembunyi -->
                      <form id="delete-form-{{ $row->id }}" action="{{ route('review.destroy', $row->id) }}" method="POST" style="display:none;">
                        @csrf
                        @method('DELETE')
                      </form>
                    </td>
                  </tr>
                @empty
                  <tr><td colspan="5" class="text-center text-muted py-4">Belum ada ulasan pengguna</td></tr>
                @endforelse
              </tbody>
            </table>
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
                                <a href="/delete/{{ $row->id }}" 
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
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  // SweetAlert konfirmasi delete
  document.querySelectorAll('.delete').forEach(function(btn){
    btn.addEventListener('click', function(e){
      e.preventDefault();
      const id = this.dataset.id;
      Swal.fire({
        title: 'Yakin ingin menghapus?',
        text: "Data ini tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById('delete-form-' + id).submit();
        }
      });
    });
  });

  // toastr feedback (pastikan toastr.js sudah include di layout)
  @if(session('delete'))
    toastr.success("{{ session('delete') }}");
  @endif
  @if(session('error'))
    toastr.error("{{ session('error') }}");
  @endif
});
</script>
@endpush
