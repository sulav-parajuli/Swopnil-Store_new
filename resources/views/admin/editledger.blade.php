@extends('admin.master')

@section('content')
<div class="section-title">
          <h2>Edit Ledger</h2>
        </div>
<form method="post" action="/editledger/save/{{$ledgerData->id}}" enctype="multipart/form-data">
  @csrf
<div class="form-group mb-3">
    <label for="InputLedgerDate" class="form-label">Ledger Date</label>
    <input type="date" class="form-control" id="InputLedgerDate" name="date" placeholder="Enter Date" value="{{ $ledgerData->date }}">
  </div>
<div class="form-group mb-3">
    <label for="InputLedgerId" class="form-label">Ledger No.</label>
    <input type="text" class="form-control" id="InputLedgerId" name="ledger_id" placeholder="Enter Ledger No" value="{{ $ledgerData->ledger_id }}">
  </div>
  <div class="form-group mb-3">
    <label for="InputCredit" class="form-label">Credit Value</label>
    <input type="text" class="form-control" id="InputCredit" name="credit" placeholder="Enter Credit Value" value="{{ $ledgerData->credit }}">
  </div>
  <div class="form-group mb-3">
    <label for="InputDebit" class="form-label">Debit Value</label>
    <input type="text" class="form-control" id="InputDebit" name="debit" placeholder="Enter Debit Value" value="{{ $ledgerData->debit }}">
  </div>
  <div class="form-group mb-3">
    <label for="InputLedgerDescription" class="form-label">Ledger Description</label>
    <textarea class="form-control" id="InputLedgerDescription" name="description" placeholder="Enter Ledger Description">{{ $ledgerData->description }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection