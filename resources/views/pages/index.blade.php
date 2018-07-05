@extends('layout.app')

@section('content')
    <div class="jumbotron text-center">
            <h1 class="display-4" class="text-center">Welcome to TheFatBeardedVegan.com</h1>
            </br>
            <p class="lead">The personal space of The Fat Bearded Vegan</p>
            <p class="lead">Get to know me a little bit. This is a project page so it might change</p>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">About me</h5>
                        <p class="card-test">This page gives a little bit more information about me</p>
                        <a href="/about" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Blog</h5>
                            <p class="card-test">Here are some musings and words of wisdom from the village idiot.</p>
                            <a href="/posts" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contact Me</h5>
                                <p class="card-test">Here's a form so you can email me spam or nasty comments</p>
                                <a href="/about" class="btn btn-primary">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>

@endsection
