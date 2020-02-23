<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class ProductController extends Controller
{
    
    // all product
    public function all_product(){
        $products = Product::all();
        return view('shop.index',[
            'products' => $products
        ]);
    }

    public function index()
    {
        $products = Product::all();
        return view('backend.product',[
            'products' => $products
        ]);
    }

    // store product
    public function store(Request $request)
    {
        
        $product = new Product();
        $product->image = $request->image->store('product','public');
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect()->back()->withSuccess('Product Added Successfully.');
    }

    // edit product
    public function product_edit($id)
    {
        $product = Product::find($id);
        return view('backend.product-edit',[
            'product' => $product
        ]);
    }

    public function update_product(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->image) {
            if($product->image){
                unlink(public_path('storage/' . $product->image));
            }
            $product->image = $request->image->store('product','public');
        }
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->update();

        return redirect()->back()->withSuccess('Product Updated Successfully.');
    }

    public function product_delete($id)
    {
        $product = Product::find($id);
        if($product->image){
            unlink(public_path('storage/' . $product->image));
        }
        $product->delete();

        return redirect()->back()->withSuccess('Product Deleted Successfully.');
    }
    public function add_cart(Request $request){
        $product = Product::find($request->product_id);
        Cart::add([
            'id' => $request->product_id, 
            'name' => $product->title, 
            'qty' => $request->qnty, 
            'price' => $product->price, 
            'options' => ['image' =>$product->image]
            ]);
            return redirect()->back();
    }
    public function show_cart(){
        $products = Cart::content();
        return view('shop.show',[
            'products' => $products
        ]);
    }
    public function delete_cart($id){
        Cart::remove($id);
        return redirect()->back();
    }
}
