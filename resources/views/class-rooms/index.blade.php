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
                    <h5 class="card-title">Data Kelas</h5>
                    <a href="{{ route('class-rooms.create') }}" class="btn btn-primary">Tambah +</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive mt-2">
                <table class="table table-bordered mt-3" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classRooms as $classRoom)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $classRoom->name }}</td>
                                <td>
                                        <a class="btn btn-warning text-white" href="{{ route('class-rooms.show', $classRoom->id) }}"><i class="bi bi-eye-fill"></i></a>
                                        <a class="btn btn-primary" href="{{ route('class-rooms.edit', $classRoom->id) }}"><i class="bi bi-pencil-fill"></i></a>

                                        <form action="{{ route('class-rooms.destroy', $classRoom->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus kelas ini?')" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
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
