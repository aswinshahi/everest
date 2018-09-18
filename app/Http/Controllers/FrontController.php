<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use \App\Product;
use Gate;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function portfolio()
    {
//        if(!Gate::allows('isAdmin')){
//            abort(404,"Sorry, You can do this actions");
//        }
        
        $products = Product::all();
        $categories = Category::all();

        return view('front.portfolio',compact('categories', 'products'));
    }

    public function productList($id)
    {
//        if(!Gate::allows('isAdmin')){
//            abort(404,"Sorry, You can do this actions");
//        }

        $product_codes = Product::where('cat_id',$id)->distinct('product_code')->pluck('product_code');
        $id = $id;
        return view('front.products',compact( 'product_codes','id'));
    }

    public function sendMessage(Request $request)
    {
        $data = array('name'=>Input::get('message'),
                        'email' => Input::get('email'),
                        'phone' => Input::get('phone'));
        Mail::send('mail', $data, function($message) {
            $message->to('aswin.shahi@gmail.com', 'Everest Souvenir')->subject
            ('From Everest site');
            $message->from( Input::get('email'), Input::get('name') );
        });

        return redirect()->back()->with('message', 'Message Sent');

    }

}

