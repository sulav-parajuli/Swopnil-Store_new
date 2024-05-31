@extends('admin.master')

@section('content')
<div class="section-title">
          <h2>Create Ledger</h2>
        </div>
<form method="post" action="/createledger/save" enctype="multipart/form-data">
  @csrf
<div class="form-group mb-3">
    <label for="InputLedgerDate" class="form-label">Date<span class="required">*</span></label>
    <input type="date" class="form-control @error('date') is-invalid @enderror" id="InputLedgerDate" name="date" placeholder="Enter Date">
    @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
<div class="form-group mb-3">
    <label for="InputLedgerId" class="form-label">Ledger No.<span class="required">*</span></label>
    <input type="text" class="form-control @error('ledger_id') is-invalid @enderror" id="InputLedgerId" name="ledger_id" placeholder="Enter Ledger No">
    @error('ledger_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputProductCategory" class="form-label">Customer Name<span class="required">*</span></label>
    <select class="form-select @error('company_id') is-invalid @enderror" id="InputProductCategory" name="company_id" required>
      <option disabled selected>Choose Customer</option>
      @foreach($companyData as $company)
      <option value="{{$company->id}}">{{$company->company_name}}</option>
      @endforeach
    </select>
    @error('company_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Please choose any one customers</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputCredit" class="form-label">Credit<span class="required">*</span></label>
    <input type="text" class="form-control @error('credit') is-invalid @enderror" id="InputCredit" name="credit" placeholder="Enter Credit Value">
    @error('credit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputDebit" class="form-label">Debit<span class="required">*</span></label>
    <input type="text" class="form-control @error('debit') is-invalid @enderror" id="InputDebit" name="debit" placeholder="Enter Debit Value">
    @error('debit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <div class="form-group mb-3">
    <label for="InputLedgerDescription" class="form-label">Ledger Description<span class="required">*</span></label>
    <textarea class="form-control @error('description') is-invalid @enderror" id="InputLedgerDescription" name="description" placeholder="Enter Ledger Description"></textarea>
    @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection