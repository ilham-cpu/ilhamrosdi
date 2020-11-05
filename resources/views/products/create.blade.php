@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Product
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
      <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
          <div class="form-group"> 
              @csrf
              <label for="name">Product Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <textarea rows="5" columns="5" class="form-control" name="description"></textarea>
          </div>
          <div class="form-group">
              <label for="count">Total :</label>
              <input type="number" class="form-control" name="count"/>
          </div>
          <div class="form-group">
              <label for="price">Price (RM) :</label>
              <input type="number" class="form-control" name="price"/>
          </div>

          <div class="form-group">
              <label for="image">Image :</label>
              <input type="file" class="form-control" name="image"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
@endsection