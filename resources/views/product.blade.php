@extends('layouts.app')

@section('content')
    <div class="album text-muted">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <img data-src="holder.js/100px280/thumb" alt="100%x280" class="img-responsive"
                             src="{{ $product->image }}" data-holder-rendered="true">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>{{$product->name}} ({{$product->category}})</h2>
                    <p>{{$product->title}}</p>
                    <p>{{$product->price}} $</p>
                    <p>
                        <a href="#" class="btn btn-primary">Join</a>
                        <a href="#" class="btn btn-default">Share</a>
                        <a href="#" class="btn btn-secondary">Report</a>
                    </p>
                </div>

            </div>

        </div>
    </div>
@endsection
