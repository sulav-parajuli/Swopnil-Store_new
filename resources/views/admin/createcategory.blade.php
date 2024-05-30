@extends('admin.master')

@section('content')

<div class="section-title">
          <h2>Create Category</h2>
        </div>
<form method="post" action="/createcategory/save" enctype="multipart/form-data">
  @csrf
<div class="form-group mb-3">
    <label for="InputProductId" class="form-label">Category Id<span class="required">*</span></label>
    <input type="text" class="form-control @error('category_id') is-invalid @enderror" id="InputCategoryId" name="category_id" placeholder="Enter Product Category ID">
    @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputProductName" class="form-label">Category Name<span class="required">*</span></label>
    <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="InputProductName" name="category_name" placeholder="Enter Product Category Name">
    @error('category_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection