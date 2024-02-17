@extends('master.base')
@section('content')
<div class="container">
    <h2>Update Product</h2>
    <form action="{{ route('product.update') }}" method="post">
        @csrf
        <input type="text" name="id" value="{{$product->id}}" hidden>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" value="{{ $product->name }}" id="name" name="name" required />
        @error('name')
        <div class="error-message">{{ $messagke }}</div>
         @enderror
      </div>
      <div class="form-group">
        <label for="stockqty">Stock Quantity:</label>
        <input type="number" id="stockqty" value="{{ $product->stock_quantity }}" name="stock_quantity" required />
        @error('stock_quantity')
        <div class="error-message">{{ $message }}</div>
         @enderror
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description"  name="description" required>{{ $product->description }}</textarea>
        @error('description')
        <div class="error-message">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" id="price" value="{{ $product->price }}" name="price" required />
        @error('price')
        <div class="error-message">{{ $message }}</div>
        @enderror
      </div>
      <button class="btn theme-btn" type="submit">Submit</button>
    </form>
  </div>
@endsection
