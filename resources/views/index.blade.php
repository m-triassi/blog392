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
                    <div class="site-heading">
                        <h1>Wage Theory</h1>
                        <span class="subheading">A Blog that helped end wage stagnation</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($latestPosts as $post)
                    <div class="post-preview">
                        <a href="/article/{{ $post->slug }}">
                            <h2 class="post-title">
                                {{ $post->title }}
                            </h2>
                            <h3 class="post-subtitle">
                                {{ $post->excerpt }}
                            </h3>
                        </a>
                        <p class="post-meta">Posted by
                            <a href="#">{{ $post->author->name }}</a>

                            on {{ trim($post->updated_at->format('"l, F d, Y"'), '"') }}</p>
                    </div>
                    <hr>
                @endforeach
                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#" style="display: none">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>

<!-- Footer -->
@include('partials.footer')

@endsection
