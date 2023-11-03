@extends('layouts.app')
@section('content')
    {{-- <p class="w-100 border-start-0 border-top-0 border-end-0 bg-dark border p-3 mt-5 "></p> --}}
    <div class="welcome-page mt-5"><br><br><br><br>
        <h1 class="text-uppercase d-flex justify-content-center mt-5 text-dark fs-2">All about<span class="text-danger px-2">
                programming </span>world</h1>
        <h5 class="d-flex justify-content-center text-dark fs-6">Languages, Frameworks, Tracks and more topics</h6>
        <p class="text-center"><a class="btn btn-danger my-5" href="/blogs">Start Reading</a></p>
    </div><br><br><br>
    <br><br>
    <p class="w-50 m-auto text-uppercase mt-5 rounded-top text-center text-secondary ">
        For educate you in programming field and development web application</p>
    <br><br><br><br>
    <div class="container p-4 ">
        <div class="row d-flex align-items-center">
            <div class="col-6 p-3">
                <img src="/images/kisspng-ninja-computer-programming-learning-study-skills-avatar-5acd61df6f5765.9129322315234093754561.png" class="w-100" alt="">
            </div>
            <div class="col-6 p-5">
                <p class="text-uppercase fs-2 fw-bold">How to be a <span class="text-danger px-2"> developer </span> in 2023
                </p>
                <p class="fs-4 text-danger">You can find a list of all programming language you need.</p>
                <p class="opacity-25"> Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Doloribus voluptatem quasi a aliquam atque,<br>
                    laboriosam odio ut, eius quos tempore deseruntfugit nisi incidunt esse quas dicta,
                    consectetur in nulla!</p>
                <p class=" mt-3"><a class=" text-danger" href="/blogs">Read More</a></p>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <hr class="mt-0 pt-2 bg-danger">
    <div class=" text-dark p-4 container">
        <p class="title text-center mt-5 fs-4 fw-bold text-uppercase"><span class="text-danger me-1">best programming topics to be</span>good developer</p>
        <div class="row">
            <div class="col-md-3 sup-title mx-auto text-center mt-5 position-relative">
                <p class="fs-4 text-light bg-danger border border-2 border-danger rounded-1 p-2">C++ | C# | C | Java</p>
                <p class="fs-4 text-light bg-danger border border-2 border-danger rounded-1 p-2"> Data Structure</p>
                <p class="fs-4 text-light bg-danger border border-2 border-danger rounded-1 p-2"> Database</p>
                <p class="fs-4 text-light bg-danger border border-2 border-danger rounded-1 p-2">Design Pattern</p>
            </div>
        </div>
        <p class="title text-center my-5 fs-4 fw-bold text-uppercase"><span class="text-danger me-1">best roadmap to be</span> backend developer</p>
        <div class="container sup-title d-flex justify-content-between text-center my-5 p-3">
            <p class="fs-4 text-danger border border-2 border-danger rounded-1 p-2">Html</p>
            <p class="fs-4 text-danger border border-2 border-danger rounded-1 p-2">CSS</p>
            <p class="fs-4 text-danger border border-2 border-danger rounded-1 p-2"> JavaScript</p>
            <p class="fs-4 text-danger border border-2 border-danger rounded-1 p-2"> Bootstrap</p>
            <p class="fs-4 text-danger border border-2 border-black  rounded-1 p-2"> Tailwind</p>
            <p class="fs-4 text-light bg-danger border border-2 border-danger rounded-1 p-2"> PHP</p>
            <p class="fs-4 text-light bg-danger border border-2 border-danger rounded-1 p-2"><span class="text-light"> PHP</span> OOP</p>
            <p class="fs-4 text-light bg-danger border border-2 border-danger rounded-1 p-2"> Laravel</p>
            <p class="fs-4 text-light bg-danger border border-2 border-danger rounded-1 p-2"> Git</p>
            <p class="fs-4 text-light bg-danger border border-2 border-danger rounded-1 p-2"> GitHub</p>
        </div>
    </div>
    <hr class="mt-0 pt-2 bg-danger">
    {{-- <br><br><br><br> --}}
    <div class="w-50 m-auto py-5">
        <p class="fs-2 text-danger text-center text-uppercase">Recent Posts</p>
        <p class="text-center opacity-50 fs-6 px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, id,
            eligendi esse doloribus tempore expedita in consequatur maxime laudantium beatae labore?
            Reprehenderit vero dolor exercitationem dolores ad,
            laudantium tempora autem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Officia, incidunt ut consequuntur modi repellendus tenetur
            aliquam culpa aperiam veniam nostrum est atque expedita
            dolores non saepe rem unde temporibus praesentium.
        </p>
    </div>
    {{-- <br><br><br><br> --}}
    <hr class="mt-0 pt-2 bg-danger">
    <div class="container d-flex justify-content-around align-items-center my-5">
        <div class=" p-5">
            <div class="liks-posts ms-2">
                <a href="/" class="btn btn-primary">PHP</a>
                <a href="/" class="btn btn-warning ms-2">C++</a>
                <a href="/" class="btn btn-danger ms-2">HTML</a>
                <a href="/" class="btn btn-info ms-2">JAVA</a>
            </div>
            <div class="content p-2 text-dark mt-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, id,
                    eligendi esse doloribus tempore expedita in consequatur maxime laudantium beatae labore?
                    Reprehenderit vero dolor exercitationem dolores ad,
                    laudantium tempora autem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Officia, incidunt ut consequuntur modi repellendus tenetur
                    aliquam culpa aperiam veniam nostrum est atque expedita
                    dolores non saepe rem unde temporibus praesentium.
                </p>
            </div>
            <p class="mt-4 ms-2"><a class="text-danger" href="/blogs">Read More</a></p>
        </div>
        <div class="col-6 p-3">
            <img src="/images/—Pngtree—vector computer program language material_3171303 (1).png" class="w-100" alt="">
        </div>
    </div>
@endsection
