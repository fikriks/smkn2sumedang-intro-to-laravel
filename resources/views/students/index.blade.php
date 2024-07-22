@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title">Data Siswa</h5>
                    <a href="{{ route('students.create') }}" class="btn btn-primary">Tambah +</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive mt-2">
                <table class="table table-bordered mt-3" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Kelas</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->ClassRoom->name }}</td>
                                <td>{{ $student->gender == "M" ? "Laki-Laki" : "Perempuan" }}</td>
                                <td>
                                        <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}"><i class="bi bi-pencil-fill"></i></a>

                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
