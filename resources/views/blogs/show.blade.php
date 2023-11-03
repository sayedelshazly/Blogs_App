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
    <h1 class="text-uppercase d-flex justify-content-center mt-5 text-danger">{{ $post->title }}</h1>
    <div class="container p-4">
        <div class="row d-flex justify-content-center">

            <div class="col-8">

                <div class="p-5 d-flex justify-content-center">
                    <img class="rounded-3" src="/images/{{ $post->image_path }}" alt="">
                </div>
                <div class="text-center p-5">
                    <p class="fs-6 fw-bold text-danger opacity-50">{{ $post->user->name }} <span class="text-dark">on</span>
                        {{date('d-m-Y', strtotime($post->updated_at))}}</p>
                    <p class="opacity-50">{{ $post->description }}</p>
                </div>
                @if (Auth::check() && Auth::user()->id == $post->user_id)
                    <div class="mt-3 d-flex justify-content-center">
                        <a href="{{ route('blogs.edit', $post->id) }}" class="text-uppercase btn btn-danger">Edit</a>
                        <form action="/blogs/{{ $post->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-uppercase btn btn-danger ms-3">Delete</button>
                        </form>
                    </div>
                @endif
            </div>


        </div>
    </div>
@endsection
