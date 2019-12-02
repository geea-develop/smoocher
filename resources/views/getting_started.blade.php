@extends('layouts.app')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Getting Started with {{ config('app.name', 'Smooch') }}</h1>
            <p class="lead text-muted"></p>
            <p>
                <a href="/" class="btn btn-primary">Choose products</a>
            </p>
        </div>
    </section>

    <div class="container">

        <h2>Select a product you like.
            <a href="/" class="btn btn-secondary">Choose products</a>
        </h2>
        <h2>Click "Get sharable link"</h2>
        <h2>Copy link and start sharing!</h2>
    </div>
@endsection
