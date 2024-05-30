@extends('admin.master')

@section('content')
<div class="section-title">
          <h2>{{ $categoryData[0]->category_name }}</h2>
        </div>
    <div class="row justify-content-center">
            @foreach ($categoryData as $newCatData)
            @foreach ($newCatData->products as $productData)
            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                            <img src="/img/product/{{$productData->product_image}}" class="card-img-top" alt="Product Image" style="width:200px;height:200px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $productData->product_name }}</h5>
                                <div class="star-rating">
										<ul class="list-inline">
                                        <?php
    $fullStars = floor($productData->average);
    $halfStars = $productData->average - $fullStars; 
    $emptyStars = 5 - ceil($productData->average);
    
    // Full stars
    for ($i = 0; $i < $fullStars; $i++) {
        echo '<li class="list-inline-item"><i class="fas fa-star"></i></li>';
    }
    
    // Half star, if applicable
    if ($halfStars > 0) {
        echo '<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>';
    }
    
    // Empty stars
    for ($i = 0; $i < $emptyStars; $i++) {
        echo '<li class="list-inline-item"><i class="far fa-star"></i></li>';
    }
    ?>
										</ul>
									</div>
                                <p class="card-text">{{$productData->product_description}}</p>
                                <p class="card-text">NPR {{$productData->product_price}}</p></div>
                                <div class="card-footer">
                                <a href="/productdetail/{{$productData->id}}" class="btn btn-primary btn-block">View Product Detail</a>
                            </div>
                        </div>
                    </div>
            @endforeach
            @endforeach
    </div>
    </div>
</div>
@endsection