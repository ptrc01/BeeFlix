@extends('layout')

@section('content')
    <form action="{{ route('movie.add') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="genre_id" class="form-label">Genre</label>
            <select name="genre_id" id="genre_id" class="form-control">
                <option value="" disabled selected>Select a Genre</option>
                @foreach ($genres as $genre)
                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                @endforeach
            </select>
            @error('genre')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Cover Photo</label>
            <input type="file" name="photo" id="photo" class="form-control">

            @error('photo')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" >
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" ></textarea>
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="publish_date" class="form-label">Publish Date</label>
            <input type="date" name="publish_date" id="publish_date" class="form-control">
            @error('publish_date')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
@endsection
