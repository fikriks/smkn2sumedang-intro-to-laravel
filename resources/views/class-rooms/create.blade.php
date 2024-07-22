@extends('layouts.app')

@section('title', 'Tambah Data Kelas')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Tambah Data Kelas</h5>
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

        <form action="{{ route('class-rooms.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama Kelas</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Tambah</button>
        </form>
    </div>
</div>
@endsection
