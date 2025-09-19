@extends('Backend.Layout.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  <body>
    <h1 class="text-center mb-4">Tambah Akun</h1>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <div class="card-body">
                <form action="/add" method="post" enctype="multipart/form-data">
                  @csrf
  
                <div class="mb-3">
                    <label for="judulProgram" class="form-label">Judul</label>
                    <input type="text" name="" class="form-control" value="{{ old('') }}">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <input type="text" name="" class="form-control" value="{{ old('title') }}">
                </div>
                
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary">Save Change</button>
                </div>
                </form>
              </div>
             </div>
          </div>
        </div>
    </div>

    <!-- jQuery (required for Summernote) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</div>
@endsection