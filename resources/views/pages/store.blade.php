@extends('partials.master')

@section('content')
<link href="/css/main.css" rel="stylesheet" />
<main id="main">
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Products</h2>
            <ol>
              <li><a>Home</a></li>
              <li>Store</li>
            </ol>
          </div>
  
        </div>
      </div><!-- End Breadcrumbs -->
      <section class="sample-page">
        <div class="container" data-aos="fade-up">
        @foreach ($categoryData as $newCatData)
<div class="container mt-5">
<h1 class="text-center mb-4">{{ $newCatData->category_name }}</h1>
<hr class="my-4 bg-primary" style="height: 2px; width: 30%; margin: auto;">
    <div class="row justify-content-center">
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
                                <a href="/productdetail/{{$productData->id}}" class="btn btn-block" style="color: #ffffff; background-color: #0b5c87; border-radius: 50px;padding:8px 20px;">View Product Detail</a>
                            </div>
                        </div>
                    </div>
            @endforeach
            @endforeach
    </div>
    </div>
    </div>
</div>
</div>
</section>
</main>

@endsection