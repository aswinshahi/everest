<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use \App\Product;
use Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if(!Gate::allows('isAdmin')){
//            abort(404,"Sorry, You can do this actions");
//        }
        
        $products = Product::all();
        $categories = Category::all();
        return view('product.index',compact('categories', 'products'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->except('_token');
        $image = $request->file('product_image');
        $new_product = new product();


        if($request->hasFile('product_image')) {

            $image = $request->file('product_image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();

//            if (file_exists(public_path('products/'.$request->old_file))) {
//                unlink(public_path('products/'.$request->old_file));
//            }
            if (!file_exists(public_path('/products')) && !is_dir(public_path('/products'))) {
                $destinationPath = mkdir(public_path('/products'), 0755, true);
            } else {
                $destinationPath = public_path('/products');
            }

            $image->move($destinationPath, $input['imagename']);
            $product['product_image'] = $input['imagename'];
            $new_product->product_image = $input['imagename'];

        }
        $new_product->title = $request->title;
        $new_product->cat_id = $request->cat_id;
        $new_product->description = $request->description;
        $new_product->product_code = $request->product_code;
        $new_product->pages = $request->pages;
        $new_product->width = $request->width;
        $new_product->length = $request->length;
        $new_product->latest = ($request->latest?true:false);
        $new_product->save();
//        try{
//            Product::create($product);
//
//        } catch(\Exception $e) {
//            var_dump($e->getMessage());die;
//        }


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        $categories = Category::all();
        return view('product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product = $request->except('_token','product_id');
        $image = $request->file('product_image');
        $new_product = Product::findOrFail($request->product_id);


        if($request->hasFile('product_image')) {

            $image = $request->file('product_image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();

            if (file_exists(public_path('products/'.$request->old_file))) {
                unlink(public_path('products/'.$request->old_file));
            }
            if (!file_exists(public_path('/products')) && !is_dir(public_path('/products'))) {
                $destinationPath = mkdir(public_path('/products'), 0755, true);
            } else {
                $destinationPath = public_path('/products');
            }

            $image->move($destinationPath, $input['imagename']);
            $product['product_image'] = $input['imagename'];
            $new_product->product_image = $input['imagename'];
        }


        $new_product->title = $request->title;
        $new_product->cat_id = $request->cat_id;
        $new_product->description = $request->description;
        $new_product->product_code = $request->product_code;
        $new_product->pages = $request->pages;
        $new_product->width = $request->width;
        $new_product->length = $request->length;
        $new_product->latest = ($request->latest?true:false);
        $new_product->save();


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        $category = Product::findOrFail($request->category_id);
        $category->delete();

        return back();
    }
}
