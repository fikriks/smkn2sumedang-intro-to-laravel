@extends('layouts.app')

@section('title', 'Edit Data Siswa')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Edit Data Siswa</h5>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $student->name) }}" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <select name="class_room_id" class="form-control @error('name') is-invalid @enderror" id="name" required>
                    <option value="" selected disabled>-- Pilih Kelas --</option>
                    @foreach ($classRooms as $classRoom)
                        <option value="{{ $classRoom->id }}" @selected($classRoom->id == old('class_room_id', $student->class_room_id))>{{ $classRoom->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Jenis Kelamin</label>
                <div class="form-checked">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="M" @checked(old('gender', $student->gender) == "M") required>
                    <label class="form-check-label" for="male">Laki-Laki</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="F" @checked(old('gender', $student->gender) == "F") required>
                    <label class="form-check-label" for="female">Perempuan</label>
                  </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Tambah</button>
        </form>
    </div>
</div>
@endsection
