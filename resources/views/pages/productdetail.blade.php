@extends('partials.master')

@section('content')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script async src="https://www.google.com/recaptcha/api.js"></script>

<!-- content -->
<main id="main">
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>{{ $productData->product_name }}</h2>
            <ol>
              <li><a>Product</a></li>
              <li>Details</li>
            </ol>
          </div>
  
        </div>
      </div><!-- End Breadcrumbs -->
      <section class="sample-page">
        <div class="container" data-aos="fade-up">
    <div class="row gx-5">
      <aside class="col-lg-6">
        <div class="border rounded-4 mb-3 d-flex justify-content-center">
          <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="/img/product/{{$productData->product_image}}">
            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="/img/product/{{$productData->product_image}}" />
          </a>
        </div>
      </aside>
      <main class="col-lg-6">
        <div class="ps-lg-3">
          <h4 class="title text-dark">
          {{ $productData->product_name }}
          </h4>
          <div class="d-flex flex-row my-3">
            <div class= "mb-1 me-2">
            <?php
    $fullStars = floor($average);
    $halfStars = $average - $fullStars; 
    $emptyStars = 5 - ceil($average);
    
    // Full stars
    for ($i = 0; $i < $fullStars; $i++) {
        echo '<i class="fas fa-star"></i>';
    }
    
    // Half star, if applicable
    if ($halfStars > 0) {
        echo '<i class="fas fa-star-half-alt"></i>';
    }
    
    // Empty stars
    for ($i = 0; $i < $emptyStars; $i++) {
        echo '<i class="far fa-star"></i>';
    }
    ?>
              <span class="ms-1">
              {{$average}}
              </span>
            </div>
            <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
            <span class="text-success ms-2">In stock</span>
          </div>

          <div class="mb-3">
            <span class="h5">RS {{$productData->product_price}}</span>
            <span class="text-muted">/per each</span>
          </div>

          <p>
            {{$productData->product_description}}
          </p>

          <hr />

          <div class="row mb-4">
            <div class="col-md-4 col-6 mb-3">
              <label class="mb-2 d-block">Quantity</label>
              <div class="input-group mb-3" style="width: 170px;">
                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                  <i class="fas fa-minus"></i>
                </button>
                <input type="text" class="form-control text-center border border-secondary" placeholder="1" aria-label="Example text with button addon" aria-describedby="button-addon1"/>
                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
              <label class="mb-2 d-block">Total Price</label>
              <div class="input-group mb-3" style="width: 170px;">NPR {{($productData->product_price)}}</div>
            </div>
          </div>
          <a href="/checkout" class="btn btn-warning shadow-0" style="border-radius: 50px;padding:8px 20px;"> Buy now </a>
          <a href="#" class="btn shadow-0" style="color: #ffffff; background-color: #0b5c87; border-radius: 50px;padding:8px 20px;"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
          <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3" style="border-radius: 50px;padding:8px 20px;"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>
        </div>
      </main>
    </div>
  </div>
</section>

<section class="bg-light border-top py-4">
  <div class="container">
    <div class="row gx-4">
      <div class="col-lg-12 mb-4">
        <div class="border rounded-2 px-3 py-2 bg-white">
          <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item d-flex" role="presentation">
              <a class="nav-link d-flex align-items-center justify-content-center w-100 active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Review</a>
            </li>
            <li class="nav-item d-flex" role="presentation">
              <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab" aria-controls="ex1-pills-2" aria-selected="false">Warranty info</a>
            </li>
            <li class="nav-item d-flex" role="presentation">
              <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab" aria-controls="ex1-pills-3" aria-selected="false">Shipping info</a>
            </li>
            <li class="nav-item d-flex" role="presentation">
              <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-4" data-mdb-toggle="pill" href="#ex1-pills-4" role="tab" aria-controls="ex1-pills-4" aria-selected="false">Seller profile</a>
            </li>
          </ul>
          <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
            <div class="container">
            <div class="col-md-12">
            <!-- Ratings and Reviews Section -->
            <div class="bg-white rounded p-4 mb-4 clearfix graph-star-rating">
                <h5>Ratings and Reviews</h5>
                <hr class="mt-0">
                <div class="graph-star-rating-header">
                    <!-- Star Rating Display -->
                    <div class="star-rating d-inline">
                    <?php
    $fullStars = floor($average);
    $halfStars = $average - $fullStars; 
    $emptyStars = 5 - ceil($average);
    
    // Full stars
    for ($i = 0; $i < $fullStars; $i++) {
        echo '<i class="fas fa-star"></i>';
    }
    
    // Half star, if applicable
    if ($halfStars > 0) {
        echo '<i class="fas fa-star-half-alt"></i>';
    }
    
    // Empty stars
    for ($i = 0; $i < $emptyStars; $i++) {
        echo '<i class="far fa-star"></i>';
    }
    ?>
    <b class="text-dark">{{$reviewer}}</b> <!-- Total number of ratings -->
</div>
                    <p class="text-black mb-4 mt-2">Average Rating: {{$average}} out of 5</p>
                </div>
                <div class="graph-star-rating-body">
                    <!-- Rating distribution -->
                    <div class="rating-list">
                        <div class="rating-list-left text-black">
                            5 Star
                        </div>
                        <div class="rating-list-center">
                            <!-- Progress bar indicating percentage of ratings -->
                            <div class="progress">
                                <div style="width: {{$fivestar}}%;" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar">
                                    <span class="sr-only">{{$fivestar}}% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="rating-list-right text-black">{{$fivestar}}%</div> <!-- Percentage of 5-star ratings -->
                    </div>
                    <div class="rating-list">
                        <div class="rating-list-left text-black">
                            4 Star
                        </div>
                        <div class="rating-list-center">
                            <!-- Progress bar indicating percentage of ratings -->
                            <div class="progress">
                                <div style="width: {{$fourstar}}%;" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar">
                                    <span class="sr-only">{{$fourstar}}% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="rating-list-right text-black">{{$fourstar}}%</div> <!-- Percentage of 4-star ratings -->
                    </div>
                    <div class="rating-list">
                        <div class="rating-list-left text-black">
                            3 Star
                        </div>
                        <div class="rating-list-center">
                            <!-- Progress bar indicating percentage of ratings -->
                            <div class="progress">
                                <div style="width: {{$threestar}}%;" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar">
                                    <span class="sr-only">{{$threestar}}% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="rating-list-right text-black">{{$threestar}}%</div> <!-- Percentage of 3-star ratings -->
                    </div>
                    <div class="rating-list">
                        <div class="rating-list-left text-black">
                            2 Star
                        </div>
                        <div class="rating-list-center">
                            <!-- Progress bar indicating percentage of ratings -->
                            <div class="progress">
                                <div style="width: {{$twostar}}%;" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar">
                                    <span class="sr-only">{{$twostar}}% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="rating-list-right text-black">{{$twostar}}%</div> <!-- Percentage of 2-star ratings -->
                    </div>
                    <div class="rating-list">
                        <div class="rating-list-left text-black">
                            1 Star
                        </div>
                        <div class="rating-list-center">
                            <!-- Progress bar indicating percentage of ratings -->
                            <div class="progress">
                                <div style="width: {{$onestar}}%;" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar">
                                    <span class="sr-only">{{$onestar}}% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="rating-list-right text-black">{{$onestar}}%</div> <!-- Percentage of 1-star ratings -->
                    </div>
                </div>
            </div>
            <!-- End of Ratings and Reviews Section -->

            <div class="dropdown">
  
  <select class="btn btn-light dropdown-toggle" id="dropdownMenuButton" name="rating_sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <option selected>All</option>
      <option>Most Relevant</option>
    </select>
</div>

            <!-- All Ratings and Reviews Section -->
            @foreach ($reviews as $review)
            @foreach ($review->reviews as $review)
            <div class="reviews-members pt-4 pb-4">
    <div class="media">
        <a href="#"><img alt="User Avatar" src="http://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-pill"></a>
        <div class="media-body">
            <div class="reviews-members-header align-items-center">
            <div class="user-details">
                    <h6 class="mb-0"><a class="text-black" href="#">Singh Osahan</a></h6>
                    <p class="text-gray">Tue, 20 Mar 2020</p>
                </div>
                <!-- Star Rating Display -->
                <div class="star-rating">
    <?php
    $fullStars = floor($review->review_count);
    $halfStars = $review->review_count - $fullStars; 
    $emptyStars = 5 - ceil($review->review_count);
    
    // Full stars
    for ($i = 0; $i < $fullStars; $i++) {
        echo '<i class="fas fa-star"></i>';
    }
    
    // Half star, if applicable
    if ($halfStars > 0) {
        echo '<i class="fas fa-star-half-alt"></i>';
    }
    
    // Empty stars
    for ($i = 0; $i < $emptyStars; $i++) {
        echo '<i class="far fa-star"></i>';
    }
    ?>
</div>

            </div>
            <div class="reviews-members-body">
              <h5>{{$review->review_status}}</h5>
                <p>{{$review->review}}</p>
            </div>
            <div class="reviews-members-footer">
                <!-- Like buttons -->
                <a class="total-like" href="#"><i class="fas fa-thumbs-up"></i> 856M</a> 
            </div>
        </div>
    </div>
</div>
            @endforeach
            @endforeach
<hr>
<a class="text-center w-100 d-block mt-4 font-weight-bold" href="#">See All Reviews</a>
            <!-- End of All Ratings and Reviews Section -->

            <!-- Leave Comment Section -->
             <div class="bg-white rounded p-4 mb-5 rating-review-select-page">
    <h5>Leave Comment</h5>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <hr class="mt-0">
    <form method="post" action="/productdetail/submit" enctype="multipart/form-data">
      @csrf
      <div class="form-group mb-3">
    <label for="InputReviewStatus" class="form-label">Product<span class="required">*</span></label>
    <select class="form-select" id="InputProductId" name="product_id">
      <option value="{{$productData->id}}">{{$productData->product_name}}</option>
    </select>
  </div>
      <div class="form-group mb-3">
    <label for="InputReviewStatus" class="form-label">Review Status<span class="required">*</span></label>
    <input type="text" class="form-control" id="InputReviewStatus" name="review_status" placeholder="Write your Status" required>
  </div>
  <p class="mb-2">Rate the Product</p>

<div class="rating-container">
  <div class="d-flex justify-content-between align-items-center">
    <label for="review_quality" class="mb-0">Quality</label>
    <div class="mb-4 rating">
      <input type="radio" name="review_quality" id="5a" value="5"><label for="5a">☆</label>
      <input type="radio" name="review_quality" id="4a" value="4"><label for="4a">☆</label>
      <input type="radio" name="review_quality" id="3a" value="3"><label for="3a">☆</label>
      <input type="radio" name="review_quality" id="2a" value="2"><label for="2a">☆</label>
      <input type="radio" name="review_quality" id="1a" value="1"><label for="1a">☆</label>
    </div>
  </div>

  <div class="d-flex justify-content-between align-items-center">
    <label for="review_price" class="mb-0">Price</label>
    <div class="mb-4 rating">
      <input type="radio" name="review_price" id="5b" value="5"><label for="5b">☆</label>
      <input type="radio" name="review_price" id="4b" value="4"><label for="4b">☆</label>
      <input type="radio" name="review_price" id="3b" value="3"><label for="3b">☆</label>
      <input type="radio" name="review_price" id="2b" value="2"><label for="2b">☆</label>
      <input type="radio" name="review_price" id="1b" value="1"><label for="1b">☆</label>
    </div>
  </div>

  <div class="d-flex justify-content-between align-items-center">
    <label for="review_availability" class="mb-0">Availability</label>
    <div class="mb-4 rating">
      <input type="radio" name="review_availability" id="5c" value="5"><label for="5c">☆</label>
      <input type="radio" name="review_availability" id="4c" value="4"><label for="4c">☆</label>
      <input type="radio" name="review_availability" id="3c" value="3"><label for="3c">☆</label>
      <input type="radio" name="review_availability" id="2c" value="2"><label for="2c">☆</label>
      <input type="radio" name="review_availability" id="1c" value="1"><label for="1c">☆</label>
    </div>
  </div>

  <div class="d-flex justify-content-between align-items-center">
    <label for="review_service" class="mb-0">Service</label>
    <div class="mb-4 rating">
      <input type="radio" name="review_service" id="5d" value="5"><label for="5d">☆</label>
      <input type="radio" name="review_service" id="4d" value="4"><label for="4d">☆</label>
      <input type="radio" name="review_service" id="3d" value="3"><label for="3d">☆</label>
      <input type="radio" name="review_service" id="2d" value="2"><label for="2d">☆</label>
      <input type="radio" name="review_service" id="1d" value="1"><label for="1d">☆</label>
    </div>
  </div>

  <div class="d-flex justify-content-between align-items-center">
    <label for="review_packaging" class="mb-0">Packaging</label>
    <div class="mb-4 rating">
      <input type="radio" name="review_packaging" id="5e" value="5"><label for="5e">☆</label>
      <input type="radio" name="review_packaging" id="4e" value="4"><label for="4e">☆</label>
      <input type="radio" name="review_packaging" id="3e" value="3"><label for="3e">☆</label>
      <input type="radio" name="review_packaging" id="2e" value="2"><label for="2e">☆</label>
      <input type="radio" name="review_packaging" id="1e" value="1"><label for="1e">☆</label>
    </div>
  </div>
  <!-- Add similar structures for other rating categories -->

</div>
        <div class="form-group mb-3">
            <label for="review" class="form-label">Comment/Review<span class="required">*</span></label>
            <textarea class="form-control" id="review" name="review" placeholder="Write your Comment/Review" rows="3"></textarea>
        </div>
        <!-- Google Recaptcha Widget-->
<div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
        <div class="form-group">
            <!-- Submit button -->
            <button class="btn btn-sm" style="color: #ffffff; background-color: #0b5c87; border-radius: 50px;padding:8px 20px;" type="submit">Submit</button>
        </div>
    </form>
</div>
            <!-- End of Leave Comment Section -->
        </div>
        </div>
    </div>
</div>
            </div>
          </div>
        </div>
      </div>
</section>
</main><!-- End #main -->

@endsection