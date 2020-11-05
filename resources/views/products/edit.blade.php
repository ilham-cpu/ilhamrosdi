@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Product Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.update', $product->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Product Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $product->name }}"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <textarea rows="5" columns="5" class="form-control" name="description">{{ $product->description }}</textarea>
          </div>
          <div class="form-group">
              <label for="total">Total :</label>
              <input type="text" class="form-control" name="count" value="{{ $product->total }}"/>
          </div>
          <div class="form-group">
              <label for="price">Price (RM) :</label>
              <input type="text" class="form-control" name="price" value="{{ $product->price }}"/>
          </div>



          <div class="form-group">
              <img src="{{ $product->image}}">
              <label for="image">Image :</label>
              <input type="file" class="form-control" name="image"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection