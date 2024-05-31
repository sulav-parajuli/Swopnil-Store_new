@extends('admin.master')

@section('content')

<div class="section-title">
    <h2>Parties</h2>
</div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Company Image</th>
                <th scope="col">Company ID</th>
                <th scope="col">Company Name</th>
                <th scope="col">Company Description</th>
                <th scope="col">Company Ledger</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companyData as $company)
            <tr>
                
                <td><img src="/img/company/{{$company->company_image}}" style="width:200px;height:200px;"></td>
                <td>{{$company->company_id}}</td>
                <td>{{$company->company_name}}</td>
                <td>{{$company->company_description}}</td>
                <td>
                <a href="/ledger/{{$company->id}}">View Ledger</a>
                </td>
                <td>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{$company->id}}">Edit</a>
                </td>
                <td>
                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$company->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Edit Modals (outside of the foreach loop) -->
@foreach($companyData as $company)
<!-- Edit Modal -->
<div class="modal fade" id="editModal{{$company->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{$company->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{$company->id}}">Edit Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to edit this Company?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="/editcompany/{{$company->id}}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Delete Modals (outside of the foreach loop) -->
@foreach($companyData as $company)
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$company->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$company->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{$company->id}}">Delete Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this Company?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="/deletecompany/{{$company->id}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
