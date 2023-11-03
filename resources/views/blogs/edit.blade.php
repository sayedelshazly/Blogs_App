@extends('layouts.app')
@section('content')
    <br><br>
    <div class="form-title text-uppercase d-flex justify-content-center align-items-center mt-5">
        <h1 class=" text-dark">Have a new information to add!</h1>
        <span class="fs-4 text-danger ms-2">Edit now</span>
    </div>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('blogs.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="text" class="form-control bg-none border border-2 border-danger text-danger shadow-none py-2" name="title"
                        value="{{ $post->title }}">
                    <textarea class="form-control border border-2 border-danger text-danger shadow-none mt-3" id="" cols="30" rows="10"
                        name="description" value="">{{ $post->description }}</textarea>
                    <input type="file" class="form-control border border-2 border-danger text-danger shadow-none mt-3" name="image">
                    <button type="submit" class="btn btn-danger mt-4">Edit Now</button>
                </form>
            </div>
        </div>

    </div>
@endsection
