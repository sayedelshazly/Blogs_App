@extends('layouts.app')
@section('content')
    @if (session()->has('message'))
        <div class="w-50 m-auto alert bg-danger p-1 px-3 text-light alert-dismissible show d-flex align-items-center justify-content-between"
            role="alert">
            <strong class="">{{ session()->get('message') }}</strong>
            <button type="button" class="border border-0 p-1" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <br><br>
    <h1 class="text-uppercase d-flex justify-content-center my-5 text-dark"><span class="text-danger me-2">
        Topics you have to learn in </span> backend</h1>
    <hr class="mt-2 pt-2 bg-danger">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            @if (Auth::check())
                <div class="container d-flex justify-content-center my-5">
                    <a href="{{ route('blogs.create') }}" class="text-uppercase btn btn-danger">create new post</a>
                </div>
            @endif
            @foreach ($posts as $post)
                <div class="mt-5 p-5">
                    <div class="row g-0 position-relative">
                        <div class="col-md-6 mb-md-0 p-md-4">
                            <img src="/images/{{$post->image_path}}" class="img-fluid rounded w-100" alt="...">
                        </div>
                        <div class="col-md-6 p-4 ps-md-0">
                          <h5 class="mt-0 text-uppercase text-danger fs-3 fw-bold">{{$post->title}}</h5>
                          <figcaption class="figure-caption mt-4 text-danger">{{$post->user->name}} <span class="text-dark">on</span>
                            {{date('d-m-Y', strtotime($post->updated_at))}}</figcaption>
                          <p class="opacity-50 mt-4">{{$post->description}}</p>
                          <a href="{{route('blogs.show', $post->id)}}" class="stretched-link text-danger mt-2">Read More</a>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
