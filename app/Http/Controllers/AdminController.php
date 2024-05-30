<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function createProduct(){
        $categoryData = Category::all(); //get all category
        return view('admin.createproduct',compact('categoryData'));
    }
    public function createProductCategory(){
        return view('admin.createcategory');
    }
    public function products(){
        $productData = Product::all(); //get all products
        // $productData = Product::where(['product_id'=>'4o'])->get(); // filter the products
        return view('admin.product',compact('productData'));
    }
    public function category(){
        $categoryData = Category::all(); //get all products
        // $productData = Product::where(['product_id'=>'4o'])->get(); // filter the products
        return view('admin.category',compact('categoryData'));
    }
    public function addProduct(Request  $request){
        $request->validate([
            'product_id' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            'category_id' => 'required',
        ]);
        $productData = new Product();
        $productData ->fill($request->all());
        $newThumbnailImageName = time() . '.' . $request->file('product_image')->getClientOriginalName();
        $request->product_image->move('img/product/', $newThumbnailImageName);

        $productData->product_image = $newThumbnailImageName;
        $productData->product_slug = Str::slug($request->product_name);
        
        $productData ->save();
        return redirect()->route('products');
    }
    public function addCategory(Request  $request){
        $request->validate([
            'category_id' => 'required',
            'category_name' => 'required',
        ]);
        $categoryData = new Category();
        $categoryData ->fill($request->all());
        
        $categoryData ->save();
        return redirect()->route('category');
    }
    public function editProduct($id){
        $productData = Product::find($id);
        return view('admin.editproduct',compact('productData'));
    }
    public function editCategory($id){
        $categoryData = Category::find($id);
        return view('admin.editcategory',compact('categoryData'));
    }
    public function categoryDetail($id){
        $categoryData = Category::where('id', $id)->with( 'products')->get();
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
        return view('admin.categorydetail',compact('categoryData'));
    }
    public function saveEditedProduct(Request $request, $id){
    $productData = Product::find($id);

    $image_path=$productData->product_image;
$image_name = public_path('/img/product/' . $image_path);

if(file_exists($image_name)){
    unlink($image_name);
   $newThumbnailImageName = time() . '.' . $request->file('product_image')->getClientOriginalName();
   $request->product_image->move('img/product/', $newThumbnailImageName);

   $productData->product_image = $newThumbnailImageName;
   
   $productData ->save();
}
        $productData ->product_id=$request->pid;
        $productData->product_name=$request->pname;
        $productData->product_price=$request->pprice;
        
        $productData->product_description=$request->product_description;
        $productData->save();
        // Redirect to the /products page
        return redirect()->route('products');
    }

    public function saveEditedCategory(Request $request, $id){
    $categoryData = Category::find($id);
    $categoryData ->category_id=$request->cid;
    $categoryData->category_name=$request->cname;
    $categoryData->save();
        // return view('app.pages.sucessfulpage');
        // Redirect to the /products page
        return redirect()->route('category');
    }

    public function deleteProduct($id){
        $productData = Product::find($id);
        $productData->delete();
        return redirect()->route('products');
    }
    
    public function deleteCategory($id){
        $categoryData = Category::find($id);
        $categoryData->delete();
        return redirect()->route('category');
    }

    public function admin(){
        return view('admin.dashboard');
    }
}
