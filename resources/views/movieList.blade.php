@extends('layout')
@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset('logo.jpg') }}" width="500px">
        <a class="btn btn-dark" href="{{ route('movie.addForm')}}" role="button">Add New Movie</a>
    </div>

    <div class="d-flex justify-content-center gap-5 mt-5 mb-5">
        @foreach ($movies as $item)
            <div class="card" style="width: 18rem;">
                <img src="{{'storage/'. $item->photo}}" height="350px" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{$item->genre->name}}</p>
                    <p class="card-text">{{$item->description}}</p>
                    <p class="card-text text-muted">{{$item->publish_date->format('d-m-Y')}}</p>
                    <form action="{{ route('movie.delete', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>

        @endforeach
    </div>

    {{$movies->links()}}
@endsection
