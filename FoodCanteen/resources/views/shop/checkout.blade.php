@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
<div class="row">
  <div class="col-sn-6 col-md-4 col-md-offset-4 col-sn-offset-3">
  <h1>Checkout</h1>
  <h4>Your Total:  Tk.{{ $total }}</h4>
  <form action="{{ route('checkout') }}" method="post" id="checkout-form">
  <div class="row">
  <div class="col-xs-12">
  <div class="form-group">
   <label for="name">Name</label>'<input type="text" id="name" class="form-control" required name="name">
   </div>
 </div>
   <div class="col-xs-12">
  <div class="form-group">
   <label for="address">Address</label>'<input type="text" id="address" class="form-control" required name="address">
   </div>
 </div>
 {{ csrf_field() }}
 <button type="submit" class="btn btn-success">Buy now</button>
 </form>
  </div>
  </div>
@endsection