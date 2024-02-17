@extends('master.base')
@section('content')
<div class="main">
    <div class="card">
      <div class="card-title">{{ $product->name }}</div>
      <div class="card-description">
        {{$product->description}}
      </div>
      <div class="card-info">{{ $product->stock_quantity }} stock</div>
      <div class="card-price">{{ $product->price }} PKR</div>
    </div>
  </div>
@endsection
