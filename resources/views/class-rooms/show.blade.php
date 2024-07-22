@extends('layouts.app')

@section('title', 'Class Room')

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
                    <h5 class="card-title">Data Siswa Kelas {{ $classRoom->name }}</h5>
                    <a href="{{ route('class-rooms.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive mt-2">
                <table class="table table-bordered mt-3" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classRoom->Students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->gender == 'M' ? 'Laki-Laki' : 'Perempuan' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
