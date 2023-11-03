@extends('layouts.app')
@section('content')
    <br><br>
    <div class="form-title text-uppercase d-flex justify-content-center align-items-center mt-5">
        <h1 class="text-dark">lets know you about me</h1>
        <span class="fs-4 text-danger ms-2">who i am</span>
    </div><br><br>
    <hr class="mt-0 pt-2 bg-danger">
    <div class="container d-flex justify-content-around align-items-center my-5">
        <div class="content text-dark mt-3 ms-5 p-3" style="width: 70%">
            <h1 class="text-danger text-uppercase">me - sayed elshazly <span class="text-dark fs-4">softwere enginner</span>
            </h1>
            <h1 class="text-danger text-uppercase fs-2 mt-3">work as <span class="text-dark fs-4">backend developer</span>
            </h1>
            <div class="mt-5 text-uppercase fs-5 w-50 rounded-3 p-2">
                <p class="bg-danger p-2 text-light rounded-1">skills i have as a backend developer</p>
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <p class="text-danger">html | css</p>
                    <span class="ms-5 p-2 bg-danger text-light rounded-1">70 %</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <p class="text-danger">Boostrap | tailwind</p>
                    <span class="ms-5 p-2 bg-danger text-light rounded-1">90 %</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <p class="text-danger">php | php oop</p>
                    <span class="ms-5 p-2 bg-danger text-light rounded-1">60 %</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <p class="text-danger">laravel</p>
                    <span class="ms-5 p-2 bg-danger text-light rounded-1">60 %</span>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <p class="text-danger">git | gitHup</p>
                    <span class="ms-5 p-2 bg-danger text-light rounded-1">80 %</span>
                </div>
            </div>
        </div>
        <div class="info" style="width: 30%">
            <div class="w-100">
                <p class="text-danger fs-3 text-center text-uppercase mt-3"> Show My Work in <span>
                    <a href="https://github.com/sayedelshazly" class="text-dark">GitHup</a></span></p>
                <div class=" border border-5 border-danger rounded-1">
                    {{-- <img src="/images/Screenshot (62).png" class="figure-img img-fluid" alt="..."> --}}</div>
            </div>
        </div>
    </div>
@endsection
