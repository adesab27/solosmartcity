@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Artikel</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Data</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('dimensi.update',['id'=> $data->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Tambah Data</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul</label>
                                            <input type="text" name = 'judul' class="form-control" id="example" value="{{ $data->judul }}"
                                                placeholder="Masukkan Judul">
                                            @error('judul')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <input type="text" name = 'desc' class="form-control" id="example" value="{{ $data->desc }}"
                                                placeholder="Masukkan Deskripsi">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Sub Dimensi</label>
                                            <input type="text" name = 'subdimensi' class="form-control" id="example" value="{{ $data->subdimensi }}"
                                                placeholder="Masukkan sub smart dimensi">
                                            @error('judul')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Photo</label>
                                                <input type="file" name = 'photo' class="form-control"
                                                    id="exampleInputFile1">
                                            @error('photo')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                            <!-- Input addon -->

                        </div>
                        <!--/.col (left) -->
                    </div>
                    <!-- /.row -->
                </form>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

    </div>
@endsection
