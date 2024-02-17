@extends('master.base')
@section('content')
<div class="container">
    <h2>Add Product</h2>
    <form action="{{ route('product.store') }}" method="post">
        @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" />
        @error('name')
        <div class="error-message">{{ $message }}</div>
         @enderror
      </div>
      <div class="form-group">
        <label for="stockqty">Stock Quantity:</label>
        <input type="number" id="stockqty" name="stock_quantity" />
        @error('stock_quantity')
        <div class="error-message">{{ $message }}</div>
         @enderror
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        @error('description')
        <div class="error-message">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" id="price" name="price"  />
        @error('price')
        <div class="error-message">{{ $message }}</div>
        @enderror
      </div>
      <button class="btn theme-btn" type="submit">Submit</button>
    </form>
  </div>
@endsection
