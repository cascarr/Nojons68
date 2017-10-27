<?php

//use App\Http\Requests\StoreProducts;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Controllers\Controller;

use App\Product;

use Image;

use Validator;
use App\Http\Requests\StoreProducts;
use App\Http\Requests\EditProducts;

use DB;


class ProductController extends Controller
{
    
    
    // this function redirects the admin to the create page
    public function create()
    {
      return view('admin.create');  
    }
    
    
    public function store(StoreProducts $request)
    {
        if($request->hasFile('Product_image')){
            $image = $request->file('Product_image');
            $filename = $image->getClientOriginalName();
            $location = public_path('images/'.$filename);  
            Image::make($image)->save($location);
            
        }
        
        $products = new Product;
        $products->product_name = $request->product_name;
        $products->product_desc = $request->product_desc;
        $products->product_price = $request->product_price;
        $products->Product_image = $filename;
        $products->save();
        return redirect('/admin/show');
        
    }
    
    
    // this function displays product details to the admin
    public function show()
    {
        //$products = DB::table('products')->get();
        $products = Product::paginate(2);
        return view ('admin.show', compact('products'));

    }
    
    
    // this function redirects the admin to the update page
    public function edit($id)
    {
        // get the product
        $product = Product::find($id);
        
        // show the edit form and pass the product
        return view('admin.edit')->with('product', $product);
    }
    
    
    
    // processes the edit form
    public function updateProduct($id, EditProducts $request)
    {

        $product = Product::find($id);
                
        
        if($request->hasFile('Product_image')){
           
        $image = $request->file('Product_image');
        $filename = $image->getClientOriginalName();
        $location = public_path('images/'.$filename);  
        Image::make($image)->save($location);
        $product->Product_image = $filename;
            
        }

        $product->product_name = $request->product_name;
        $product->product_desc = $request->product_desc;
        $product->product_price = $request->product_price;
       
        $product->save();
        
        
        
        return redirect('/admin/show');
    }
    
    
    
    // processes the delete of items
    public function destroy($id)
    {
        $product = Product::find($id);
        
        $product->delete($id);
        
        return redirect('/admin/show');
    }

    
    

}
