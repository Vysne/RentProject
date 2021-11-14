@extends('layouts.index')

@section('header')
<div class="col-10 col-sm-10 col-md-10 col-lg-10">
    <div class="row" style="width: 100vw; border-bottom: 2px solid #eee;">
        <div class="col-md-4 p-5">
            <h1 id="greetingsTitle" class="display-3 text-light"></h1>
        </div>
        <div class="col-md-4">
            <div id="bannerimg">
            <img src="assets/banner.png" alt="Eventify banner">
            </div>
        </div>
        <div class="col-md-4 p-5 d-flex justify-content-center align-items-center">
            <div id="userbtn">
                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        Taylor Swift
                    </button>
                    <ul class="dropdown-menu w-100 text-break text-center overflow-auto">
                        <p class="lead"><strong>Band: Gusha</strong></p>
                        <p class="lead"><strong>Popularity: 322</strong></p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('sidebar')
<div class="d-flex flex-column flex-shrink-0" style="width: 5.5rem; height: 100vh; border-right: 1px solid #eee;">
    <div id="sidebar">
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
                <a href="index.php" class="nav-link py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i class="fas fa-home fs-2"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom" title="Search" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i class="fas fa-search fs-2"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom" title="Library" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i class="fas fa-book fs-2"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom" title="Sponsors" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i class="fas fa-handshake fs-2"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link py-3 border-bottom" title="Places" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i class="fas fa-globe fs-2"></i>
                </a>
            </li>
        </ul>
        <div class="dropdown border-top logoutbtn">
            <a href="#" class="d-flex p-3 link-dark" title="Log out" aria-expanded="false">
                <i class="fas fa-door-open fs-2"></i>
            </a>
        </div>
    </div>
</div>
@endsection