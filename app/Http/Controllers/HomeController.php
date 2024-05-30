<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function checkout(){
        return view('pages.checkout');
    }
    public function profile(){
        return view('pages.userprofile');
    }
    public function productDetail($id){
        $productData = Product::find($id);
        $reviews = Product::where('id', $id)->with( 'reviews')->get();
        $initial = 0.0;
        $reviewer = 0.0;
        $fivestar = 0.0;
        $fourstar = 0.0;
        $threestar = 0.0;
        $twostar = 0.0;
        $onestar = 0.0;
        $average = 0.0;
        foreach($reviews as $review){
            foreach($review->reviews as $r){
                $initial = floatval($initial)+floatval($r->review_count);
            $reviewer ++;
            if($r->review_count == 5){
                $fivestar ++;
            }elseif($r->review_count == 4){
                $fourstar ++;
            }elseif($r->review_count == 3){
                $threestar ++;
            }elseif($r->review_count == 2){
                $twostar ++;
            }elseif($r->review_count == 1){
                $onestar ++;
            }
        }}
        if($reviewer > 0){
        $fivestar = ($fivestar / $reviewer) * 100;
        $fourstar = ($fourstar / $reviewer) * 100;
        $threestar = ($threestar / $reviewer) * 100;
        $twostar = ($twostar / $reviewer) * 100;
        $onestar = ($onestar / $reviewer) * 100;
        $average = $initial / $reviewer;
        }
        return view('pages.productdetail',compact('productData','reviews','reviewer','average','fivestar','fourstar','threestar','twostar','onestar'));
    }
    public function addReview(Request  $request){
        $request->validate([
            'review_status' => 'required',
            'review' => 'required',
        ]);
        $reviews = new Reviews();
        $reviews ->fill($request->all());
        $total_reviews = floatval($request->review_quality) + floatval($request->review_price) + floatval($request->review_packaging) + floatval($request->review_service) + floatval($request->review_availability);
        $total_average = $total_reviews / 5;
        $reviews->review_count = $total_average;
        
        $reviews ->save();
        return redirect()->back();
    }
    public function store(){
        $categoryData = Category::all(); //get all category
        foreach ($categoryData as $newCatData){
        foreach ($newCatData->products as $productData){
            $initial = 0.0;
        $reviewer = 0.0;
        $average = 0.0;
            foreach ($productData->reviews as $review){
                    $initial = floatval($initial)+floatval($review->review_count);
                $reviewer ++;
            }
            if($reviewer > 0){
            $average = $initial / $reviewer;
            }
            $productData->average = $average;
        }}
        // dd($categoryData);
        return view('pages.store',compact('categoryData'));
    }
}
