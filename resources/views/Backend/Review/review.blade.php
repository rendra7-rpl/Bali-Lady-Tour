@extends('Backend.Layout.admin')
@push('css')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Kelebihan</h1>
                </div>
            </div>
        </div>
    </div>    
  <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
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
        </div>
      </div>
    </section>
@endsection

@push('scripts')
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

<!-- jQuery first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Toastr Alerts -->
<script>
  @if (Session::has('Success'))
    toastr.success("{{ Session::get('Success') }}");
  @endif

  @if (Session::has('update'))
    toastr.success("{{ Session::get('update') }}");
  @endif

  @if (Session::has('delete'))
    toastr.success("{{ Session::get('delete') }}");
  @endif

  @if (Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
  @endif
</script>
@endpush