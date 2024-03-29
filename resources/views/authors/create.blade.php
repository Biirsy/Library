@extends('templates.default')

@php
  $title = "Tambah Author";
  $preTitle = "Data Perpustakaan"
@endphp

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('author.store') }}" class="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <label class="form-label">Name</label>
                <input type ="text" name="name" class="form-control 
                @error('name')
                    is-invalid
                @enderror" placeholder="Insert Name" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Photo</label>
                <input type ="file" name="photo" class="form-control
                @error('photo')
                    is-invalid
                @enderror
                " placeholder="Insert Photo" value="{{ old('photo') }}">
                @error('photo')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="submit" value="Tambah" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
@endsection