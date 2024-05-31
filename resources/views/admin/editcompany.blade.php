@extends('admin.master')

@section('content')
<div class="section-title">
          <h2>Edit Company</h2>
        </div>
<form method="post" action="/editcompany/save/{{$companyData->id}}" enctype="multipart/form-data">
  @csrf
<div class="form-group mb-3">
    <label for="InputCompanyId" class="form-label">Company Id</label>
    <input type="text" class="form-control" id="InputCompanyId" name="company_id" placeholder="Enter Company ID" value="{{ $companyData->company_id }}">
  </div>
  <div class="form-group mb-3">
    <label for="InputCompanyName" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="InputCompanyName" name="company_name" placeholder="Enter Company Name" value="{{ $companyData->company_name }}">
  </div>
  <div class="form-group mb-3">
    <label for="InputCompanyImage" class="form-label">Company Image</label>
    <input type="file" class="form-control" id="InputCompanyImage" name="company_image" placeholder="Upload Company Image" value="{{ $companyData->company_image }}">
  </div>
  <div class="form-group mb-3">
    <label for="InputCompanyDescription" class="form-label">Company Description</label>
    <textarea class="form-control" id="InputCompanyDescription" name="company_description" placeholder="Enter Company Description">{{ $companyData->company_description }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection