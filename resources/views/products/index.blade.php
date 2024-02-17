@extends('master.base')
@section('content')
@if (Session::has('success'))
<div class="alert alert-success alert-flex" role="alert">
    <div style="d-flex">
        <strong>Well Done!</strong> {{Session::get('success')}}
    </div>
    <button type="button" class="btn alert-theme-btn" data-bs-dismiss="alert" aria-hidden="true">×</button>
</div>
@endif
<div class="main">
      <div class="table-card">
        <h2>Products Listing</h2>
        <table>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock Qty</th>
            <th>Actions</th>
          </tr>
          @php
              $i=1;
          @endphp
          @foreach ($products as $product)

          <tr>
            <td>{{ $i++ }}</td>
            <td class="td-col">{{ $product->name }}</td>
            <td class="td-col">{{ $product->description }}</td>
            <td class="td-col">{{ $product->price }}</td>
            <td>{{ $product->stock_quantity }}</td>
            <td>
              <div class="dropdown">
                <button class="dots">&#8286;</button>
                <div class="dropdown-content">
                  <a href="{{ route('product.edit',$product->id) }}">Edit</a>
                  <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="option-theme-btn">Delete</button>
                  </form>
                  <a href="{{ route('product.show' , $product->id) }}">Check Detail</a>
                </div>
              </div>
            </td>

          </tr>
          @endforeach
        </table>
      </div>
    </div>
@endsection




