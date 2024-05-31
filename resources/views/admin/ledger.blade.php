@extends('admin.master')

@section('content')

<div class="section-title">
    <h2>Ledger</h2>
</div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Ledger No.</th>
                <th scope="col">Description</th>
                <th scope="col">Credit</th>
                <th scope="col">Debit</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ledgerData as $ledgerr)
            @foreach ($ledgerr->ledger as $ledger)
            <tr>
                <td>{{$ledger->date}}</td>
                <td>{{$ledger->ledger_id}}</td>
                <td>{{$ledger->description}}</td>
                <td>{{$ledger->credit}}</td>
                <td>{{$ledger->debit}}</td>
                <td>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{$ledger->id}}">Edit</a>
                </td>
                <td>
                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$ledger->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
</div>

<!-- Edit Modals (outside of the foreach loop) -->
@foreach($ledgerData as $ledger)
@foreach ($ledgerr->ledger as $ledger)
<!-- Edit Modal -->
<div class="modal fade" id="editModal{{$ledger->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{$ledger->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{$ledger->id}}">Edit Ledger</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to edit this ledger?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="/editledger/{{$ledger->id}}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endforeach

<!-- Delete Modals (outside of the foreach loop) -->
@foreach($ledgerData as $ledger)
@foreach ($ledgerr->ledger as $ledger)
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$ledger->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$ledger->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{$ledger->id}}">Delete Ledger</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this ledger?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="/deleteledger/{{$ledger->id}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endforeach

@endsection
