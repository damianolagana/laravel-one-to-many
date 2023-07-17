@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center">Add New Project</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="post">
            @csrf

            <div class="mb-3">

                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    value="{{ old('title') }}">

                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="mb-3">

                <label for="textareaDesc">Content</label>
                <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="contentDesc">{{ old('content') }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-3">


                <label for="type" class="form-label">Type</label>
                <select id="type" name="type_id" class="form-select" aria-label="Default select example">
                    <option selected disabled>Select type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>

                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="inputImage" class="form-label">Image URL</label>
                <input name="image" type="text" class="form-control @error('image') is-invalid @enderror"
                    id="inputImage" value="{{ old('image') }}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection