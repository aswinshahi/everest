<?php

namespace App\Http\Controllers;

use App\Category;
use App\Setting;
use Illuminate\Http\Request;
use \App\Product;
use Gate;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
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

        $settings = DB::table('settings')->first();
        return view('setting.index',compact('settings'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $settings = DB::table('settings')->first();
        $setting = $request->except('_token','setting_id');

        if($request->hasFile('slider1')) {

            $image = $request->file('slider1');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();

//            if (file_exists(public_path('products/'.$request->old_file))) {
//                unlink(public_path('products/'.$request->old_file));
//            }
            if (!file_exists(public_path('/slider')) && !is_dir(public_path('/slider'))) {
                $destinationPath = mkdir(public_path('/slider'), 0755, true);
            } else {
                $destinationPath = public_path('/slider');
            }
            $image->move($destinationPath, "1");
            $setting['slider1'] = "1";
        }


        if($request->hasFile('slider2')) {

            $image = $request->file('slider2');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();

//            if (file_exists(public_path('products/'.$request->old_file))) {
//                unlink(public_path('products/'.$request->old_file));
//            }
            if (!file_exists(public_path('/slider')) && !is_dir(public_path('/slider2'))) {
                $destinationPath = mkdir(public_path('/slider'), 0755, true);
            } else {
                $destinationPath = public_path('/slider');
            }

            $image->move($destinationPath, "2");
            $setting['slider2'] = "2";

        }

        if($request->hasFile('slider3')) {

            $image = $request->file('slider3');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();

//            if (file_exists(public_path('products/'.$request->old_file))) {
//                unlink(public_path('products/'.$request->old_file));
//            }
            if (!file_exists(public_path('/slider')) && !is_dir(public_path('/slider3'))) {
                $destinationPath = mkdir(public_path('/slider'), 0755, true);
            } else {
                $destinationPath = public_path('/slider');
            }

            $image->move($destinationPath, "3");
            $setting['slider3'] = "3";

        }

        if($request->hasFile('company_logo')) {

            $image = $request->file('company_logo');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();

//            if (file_exists(public_path('products/'.$request->old_file))) {
//                unlink(public_path('products/'.$request->old_file));
//            }
            if (!file_exists(public_path('/company_logo')) && !is_dir(public_path('/company_logo'))) {
                $destinationPath = mkdir(public_path('/company_logo'), 0755, true);
            } else {
                $destinationPath = public_path('/company_logo');
            }

            $image->move($destinationPath, $input['imagename']);
            $setting['company_logo'] = $input['imagename'];

        }

        if (empty($settings)) {
            Setting::create($setting);
        } else {
            Setting::where('id', $request->setting_id)
                ->update($setting);
        }

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
        //
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
        $category = Product::findOrFail($request->category_id);

        $category->update($request->all());
       
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
