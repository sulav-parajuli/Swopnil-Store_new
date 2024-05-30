@extends('admin.master')

@section('content')
<div class="section-title">
          <h2>Create Product</h2>
        </div>
<form method="post" action="/createproduct/save" enctype="multipart/form-data">
  @csrf
<div class="form-group mb-3">
    <label for="InputProductId" class="form-label">Product Id<span class="required">*</span></label>
    <input type="text" class="form-control @error('product_id') is-invalid @enderror" id="InputProductId" name="product_id" placeholder="Enter Product ID">
    @error('product_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputProductName" class="form-label">Product Name<span class="required">*</span></label>
    <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="InputProductName" name="product_name" placeholder="Enter Product Name">
    @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputProductImage" class="form-label">Product Image<span class="required">*</span></label>
    <input type="file" class="form-control @error('product_image') is-invalid @enderror" id="InputProductImage" name="product_image" placeholder="Upload Product Image">
    @error('product_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputProductPrice" class="form-label">Product Price<span class="required">*</span></label>
    <input type="text" class="form-control @error('product_price') is-invalid @enderror" id="InputProductPrice" name="product_price" placeholder="Enter Product Price">
    @error('product_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputProductCategory" class="form-label">Product Category<span class="required">*</span></label>
    <select class="form-select @error('category_id') is-invalid @enderror" id="InputProductCategory" name="category_id" required>
      <option disabled selected>Choose Product Category</option>
      @foreach($categoryData as $category)
      <option value="{{$category->id}}">{{$category->category_name}}</option>
      @endforeach
    </select>
    @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Please choose any one product category</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputProductDescription" class="form-label">Product Description<span class="required">*</span></label>
    <textarea class="form-control @error('product_description') is-invalid @enderror" id="InputProductDescription" name="product_description" placeholder="Enter Product Description"></textarea>
    @error('product_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection