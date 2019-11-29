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
                <div class="post-heading">
                    <h1>{{ $post->title }}</h1>
                    <h2 class="subheading">{{ $post->excerpt }}</h2>
                    <span class="meta">Posted by
              <a href="#">{{ $post->author->name }}</a>
              on {{ trim($post->updated_at->format('"l, F d, Y"'), '"') }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach(explode("\n", trim($post->body)) as $paragraph)
                    <p>{!! $paragraph !!}</p>
                @endforeach
            </div>
        </div>
    </div>
</article>

<hr>

<!-- Footer -->
@include('partials.footer')
    
@endsection