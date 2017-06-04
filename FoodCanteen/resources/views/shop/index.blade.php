@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
@if(Session::has('success'))
	 <div class="row">
	<div class="col-sn-6 col-md-4 col-md-offset-4 col-sn-offset-3">
	<div id="charge-message" class="alert alert-success">
	{{ Session::get('success') }}
	</div>
	</div>
	</div>
	@endif
	@foreach($fooditem->chunk(3)  as $fooditemChunk)
	<div class="row">
	@foreach($fooditemChunk as $fooditem)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ $fooditem->imagePath }}" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>{{ $fooditem->title }}</h3>
                    <p class="description">{{ $fooditem->description }}</p>
                    <div class="clearfix">
                        <div class="pull-left price">Tk{{ $fooditem->price }}</div>
                        <a href="{{ route('fooditem.addToCart', ['id' => $fooditem->id ]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
		</div>
@endforeach
    </div>
@endforeach
@endsection
