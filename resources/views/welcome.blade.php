@extends('layouts.app')

@section('content')
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   <span class="desc"></span> !
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="name"></h3>
                    <p class="title"></p>
                    <a class="sherable-link clickable" href="#"></a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" @click="getShareLink()">Get sharable link</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Welcome to {{ config('app.name', 'Smooch') }}</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            <p>
                <a href="{{ route('getting-started') }}" class="btn btn-primary">Getting Started</a>
                <a href="#" class="btn btn-secondary">Contact us</a>
            </p>
        </div>
    </section>

    <div class="album text-muted">
        <div class="container">

            <div class="row">
                @foreach($products as $key => $product)
                    <div class="col-md-3 clickable" @click="openModal({{ $product }})">
                        <div class="img-wrapper">
                        <img data-src="holder.js/100px280/thumb" alt="100%x280" class="img-responsive"
                             src="{{ $product->image }}" data-holder-rendered="true">
                        </div>
                        <h5>{{$product->name}}</h5>
                        <p class="card-text">{{$product->title}}</p>
                    </div>
                    @if ($key%4 == 3)
                        </div>
                        <div class="row">
                    @endif
                @endforeach
            </div>

        </div>
    </div>
@endsection
