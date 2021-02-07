@extends('layout.main')

@section('title', 'Ubah Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Edit Mahasiswa</h1>

                <form method="post" action="/students/{{$student->id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="@error('nama') is-invalid @enderror form-control"
                               id="nama" placeholder="Masukkan nama" name="nama"
                               value="{{$student->nama}}">

                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="@error('nim') is-invalid @enderror form-control"
                               id="nim" placeholder="Masukkan NIM" name="nim"
                               value="{{$student->nim}}">

                        @error('nim')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control"
                               id="email" placeholder="Masukkan email" name="email"
                               value="{{$student->email}}">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control"
                               id="jurusan" placeholder="Masukkan jurusan" name="jurusan"
                               value="{{$student->jurusan}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
