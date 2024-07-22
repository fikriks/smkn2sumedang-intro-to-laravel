@extends('layouts.app')

@section('title', 'Edit Data Kelas')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Edit Data Kelas</h5>
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

        <form action="{{ route('class-rooms.update', $classRoom->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nama Kelas</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $classRoom->name) }}" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Edit</button>
        </form>
    </div>
</div>
@endsection
