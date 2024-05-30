@extends('admin.master')

@section('content')

<div class="section-title">
    <h2>Available Products</h2>
</div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Product Image</th>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Category</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Description</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productData as $product)
            <tr>
                
                <td><img src="/img/product/{{$product->product_image}}" style="width:200px;height:200px;"></td>
                <td>{{$product->product_id}}</td>
                <td><a href="/productdetail/{{$product->id}}">{{$product->product_name}}</a></td>
                <td>{{$product->cid}}</td>
                <td>{{$product->product_price}}</td>
                <td>{{$product->product_description}}</td>
                <td>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{$product->id}}">Edit</a>
                </td>
                <td>
                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$product->id}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Edit Modals (outside of the foreach loop) -->
@foreach($productData as $product)
<!-- Edit Modal -->
<div class="modal fade" id="editModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{$product->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{$product->id}}">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to edit this product?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="/editproduct/{{$product->id}}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Delete Modals (outside of the foreach loop) -->
@foreach($productData as $product)
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$product->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{$product->id}}">Delete Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this product?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="/deleteproduct/{{$product->id}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
