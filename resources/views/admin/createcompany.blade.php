@extends('admin.master')

@section('content')
<div class="section-title">
          <h2>Create Company</h2>
        </div>
<form method="post" action="/createcompany/save" enctype="multipart/form-data">
  @csrf
<div class="form-group mb-3">
    <label for="InputCompanyId" class="form-label">Company Id<span class="required">*</span></label>
    <input type="text" class="form-control @error('company_id') is-invalid @enderror" id="InputCompanyId" name="company_id" placeholder="Enter Company ID">
    @error('company_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputCompanyName" class="form-label">Company Name<span class="required">*</span></label>
    <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="InputCompanyName" name="company_name" placeholder="Enter Company Name">
    @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputCompanyImage" class="form-label">Company Image<span class="required">*</span></label>
    <input type="file" class="form-control @error('company_image') is-invalid @enderror" id="InputCompanyImage" name="company_image" placeholder="Upload Company Image">
    @error('company_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputCompanyDescription" class="form-label">Company Description<span class="required">*</span></label>
    <textarea class="form-control @error('company_description') is-invalid @enderror" id="InputCompanyDescription" name="company_description" placeholder="Enter Company Description"></textarea>
    @error('company_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection