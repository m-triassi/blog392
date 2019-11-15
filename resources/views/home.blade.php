@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    Submit an  article below!
                </div>
            </div>
            <div style="text-align: center; padding-top: 30px">
                <form action="/submit/article" method="POST" style="display: inline-block">
                    @csrf
                    <label for="title">Title</label>
                    <input type="text" name="title">
                    <br><br>
                    <label for="body">Body</label>
                    <textarea name="body"></textarea>
                    <br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
