@extends('admin.master')

@section('content')
<div class="section-title">
          <h2>Edit Product</h2>
        </div>
<form method="post" action="/editproduct/save/{{$productData->id}}" enctype="multipart/form-data">
  @csrf
<div class="form-group mb-3">
    <label for="InputProductId" class="form-label">Product Id</label>
    <input type="text" class="form-control" id="InputProductId" name="pid" placeholder="Enter Product ID" value="{{ $productData->product_id }}">
  </div>
  <div class="form-group mb-3">
    <label for="InputProductName" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="InputProductName" name="pname" placeholder="Enter Product Name" value="{{ $productData->product_name }}">
  </div>
  <div class="form-group mb-3">
    <label for="InputProductPrice" class="form-label">Product Price</label>
    <input type="text" class="form-control" id="InputProductPrice" name="pprice" placeholder="Enter Product Price" value="{{ $productData->product_price }}">
  </div>
  <div class="form-group mb-3">
    <label for="InputProductImage" class="form-label">Product Image</label>
    <input type="file" class="form-control" id="InputProductImage" name="product_image" placeholder="Upload Product Image" value="{{ $productData->product_image }}">
  </div>
  <div class="form-group mb-3">
    <label for="InputProductDescription" class="form-label">Product Description</label>
    <textarea class="form-control" id="InputProductDescription" name="product_description" placeholder="Enter Product Description">{{ $productData->product_description }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection