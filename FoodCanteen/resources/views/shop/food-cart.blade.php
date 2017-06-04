@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
@if(Session::has('cart'))
	 <div class="row">
  <div class="col-sn-6 col-md-6 col-md-offset-3 col-sn-offset-3">
  <ul class="list-group">
  @foreach($fooditem as $fooditem)
		<li class="list-group-item">
		<span class="badge">{{ $fooditem['qty'] }}</span>
		<strong>{{ $fooditem['item']['title'] }}</strong>
		<span class="label-success">{{ $fooditem['price'] }} </span>
		<div class="btn-group">
			<button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Actions <span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">Reduce by 1</a></li>
				<li><a href="#">Reduce All</a></li>
				</ul>
			</div>
		</li>
		@endforeach
		</ul>
</div>
</div>
 <div class="row">
  <div class="col-sn-6 col-md-6 col-md-offset-3 col-sn-offset-3">
   <strong>Total: {{ $totalPrice }}</strong>
  </div>
  </div>
  <hr>
  <div class="row">
  <div class="col-sn-6 col-md-6 col-md-offset-3 col-sn-offset-3">
   <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
  </div>
  </div>
@else
	<div class="row">
  <div class="col-sn-6 col-md-6 col-md-offset-3 col-sn-offset-3">
   <h2>No Items in Cart</h2>
  </div>
  </div>
@endif

@endsection