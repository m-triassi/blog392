@extends('layouts.app')

@section('content')

<!-- Navigation -->
@include('partials.header')


<!-- Page Header -->
<header class="masthead" style="background-image: url('https://source.unsplash.com/random')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>About</h1>
                    <span class="subheading"></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>This blog aims to inform the public about the terror of wage stagnation. If you'd like to know more about this issue, read <a href="#">this post</a> about the issue at hand.</p>
            <p>In short, pay scaling hasn't kept up with inflation. This puts every generation, current and future at a disadvantage. If this issue isn't fixed soon, it could spell catastrophe.</p>
            <p>This blog aims to bring this issue to the attention of the broader public. It also explores potential solutions to this growing issue.</p>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
@include('partials.footer')

@endsection