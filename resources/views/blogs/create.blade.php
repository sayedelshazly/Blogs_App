



@extends('layouts.app')
@section('content')
    <br><br>
    <div class="form-title text-uppercase d-flex justify-content-center align-items-center mt-5">
        <h1 class="text-dark">Have a new artical!</h1>
        <span class="fs-4 text-danger ms-2">create now</span>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8 ">
                <form action="/blogs" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="form-control border border-2 border-danger text-danger shadow-none py-2" name="title">
                    <textarea name="description" class="form-control border border-1 border-danger text-danger shadow-none mt-3" id="" cols="30" rows="10"></textarea>
                    <input type="file" class="form-control border border-3 border-danger text-danger shadow-none mt-3" name="image">
                    <button type="submit" class="btn btn-danger mt-4">Create Now</button>
                </form>
            </div>
        </div>
    </div>



@endsection