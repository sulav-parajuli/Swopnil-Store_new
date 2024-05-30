@extends('admin.master')

@section('content')
<div class="section-title">
          <h2>Edit Category</h2>
        </div>
<form method="post" action="/editcategory/save/{{$categoryData->id}}" enctype="multipart/form-data">
  @csrf
<div class="form-group mb-3">
    <label for="InputCategoryId" class="form-label">Category Id</label>
    <input type="text" class="form-control" id="InputCategoryId" name="cid" placeholder="Enter Category ID" value="{{ $categoryData->category_id }}">
  </div>
  <div class="form-group mb-3">
    <label for="InputCategoryName" class="form-label">Category Name</label>
    <input type="text" class="form-control" id="InputCategoryName" name="cname" placeholder="Enter Category Name" value="{{ $categoryData->category_name }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection