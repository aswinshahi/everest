@extends('layouts.master')

@section('content')


	<div class="">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">settings</h3>
			</div>
			<form action="{{route('setting.store')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				<input type="hidden" name="setting_id" value="{{!empty($settings && $settings->id) ?$settings->id: ''}}">

				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" id="title" value="{{!empty($settings && $settings->title) ?$settings->title: ''}}">
				</div>
				<div class="form-group">
					<label for="title">Contact Number</label>
					<input type="text" class="form-control" name="contact_number" id="contact_number" value="{{!empty($settings && $settings->contact_number) ?$settings->contact_number: ''}}">
				</div>
				<div class="form-group">
					<label for="title">Mobile Number</label>
					<input type="text" class="form-control" name="mobile_number" id="mobile_number" value="{{!empty($settings && $settings->mobile_number) ?$settings->mobile_number: ''}}">
				</div>
				<div class="form-group">
					<label for="title">Email</label>
					<input type="text" class="form-control" name="email" id="email" value="{{!empty($settings && $settings->email) ?$settings->email: ''}}">
				</div>
				<div class="form-group">
					<label for="title">Address</label>
					<input type="text" class="form-control" name="address" id="address" value="{{!empty($settings && $settings->address) ?$settings->address: ''}}">
				</div>
				<div class="form-group ">
					<label class="control-label col-md-4">Slider1</label>
					<div class="col-md-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							@php ($logo=!empty($settings &&$settings->slider1) ?$settings->slider1: '')

								<div class="fileinput-preview thumbnail" data-trigger="fileinput"
									 style="width: 200px; height: 150px;">
									@if (file_exists( public_path('slider1/'.$logo)) && $logo != '')
										<img src="{{url('/slider1',$logo)}}" style="width:200px;height:150px;"><br/>
										<br/>
									@else
										<img src="{{url('/no-image.png')}}" style="width:200px;height:150px;"><br/><br/>
									@endif
								</div>

								<div>
                                    <span class="btn red btn-outline btn-file">
                                      <button class="fileinput-new"> Select image </button>
                                      <button class="fileinput-exists"> Change </button>
                                        <input type="file" id="slider1" name="slider1" value="{{!empty($settings &&$settings->slider1) ?$settings->slider1: ''}}">
                                    </span>
									<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
										Remove </a>
								</div>
						</div>
					</div>
				</div>
				<div class="form-group ">
					<label class="control-label col-md-4">Slider 2</label>
					<div class="col-md-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							@php ($logo=!empty($settings &&$settings->slider2) ?$settings->slider2: '')

								<div class="fileinput-preview thumbnail" data-trigger="fileinput"
									 style="width: 200px; height: 150px;">
									@if (file_exists( public_path('slider2/'.$logo)) && $logo != '')
										<img src="{{url('/slider2',$logo)}}" style="width:200px;height:150px;"><br/>
										<br/>
									@else
										<img src="{{url('/no-image.png')}}" style="width:200px;height:150px;"><br/><br/>
									@endif
								</div>

								<div>
                                    <span class="btn red btn-outline btn-file">
                                      <button class="fileinput-new"> Select image </button>
                                      <button class="fileinput-exists"> Change </button>
                                        <input type="file" id="slider2" name="slider2" value="{{!empty($settings &&$settings->slider2) ?$settings->slider2: ''}}">
                                    </span>
									<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
										Remove </a>
								</div>
						</div>
					</div>
				</div>
				<div class="form-group ">
					<label class="control-label col-md-4">Slider 3</label>
					<div class="col-md-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							@php ($logo=!empty($settings &&$settings->slider3) ?$settings->slider3: '')

								<div class="fileinput-preview thumbnail" data-trigger="fileinput"
									 style="width: 200px; height: 150px;">
									@if (file_exists( public_path('slider3/'.$logo)) && $logo != '')
										<img src="{{url('/slider3',$logo)}}" style="width:200px;height:150px;"><br/>
										<br/>
									@else
										<img src="{{url('/no-image.png')}}" style="width:200px;height:150px;"><br/><br/>
									@endif
								</div>

								<div>
                                    <span class="btn red btn-outline btn-file">
                                      <button class="fileinput-new"> Select image </button>
                                      <button class="fileinput-exists"> Change </button>
                                        <input type="file" id="slider3" name="slider3" value="{{!empty($settings &&$settings->slider3) ?$settings->slider3: ''}}">
                                    </span>
									<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
										Remove </a>
								</div>
						</div>
					</div>
				</div>
				<div class="form-group ">
					<label class="control-label col-md-4">Company Logo</label>
					<div class="col-md-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							@php ($logo=!empty($settings &&$settings->company_logo) ?$settings->company_logo: '')

								<div class="fileinput-preview thumbnail" data-trigger="fileinput"
									 style="width: 200px; height: 150px;">
									@if (file_exists( public_path('company_logo/'.$logo)) && $logo != '')
										<img src="{{url('/company_logo',$logo)}}" style="width:200px;height:150px;"><br/>
										<br/>
									@else
										<img src="{{url('/no-image.png')}}" style="width:200px;height:150px;"><br/><br/>
									@endif
								</div>

								<div>
                                    <span class="btn red btn-outline btn-file">
                                      <button class="fileinput-new"> Select image </button>
                                      <button class="fileinput-exists"> Change </button>
                                        <input type="file" id="company_logo" name="company_logo" value="{{!empty($settings &&$settings->company_logo) ?$settings->company_logo: ''}}">
                                    </span>
									<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
										Remove </a>
								</div>
						</div>
					</div>
				</div>
                <div class="form-group">
                    <label for="des">Home</label>
                    <textarea name="home" id="desc" cols="20" rows="5" class="form-control">{{!empty($settings && $settings->home) ?$settings->home: ''}}</textarea>
                </div>
                <div class="form-group">
                    <label for="des">About Us</label>
                    <textarea name="aboutus" id="desc" cols="20" rows="5" class="form-control">{{!empty($settings && $settings->aboutus) ?$settings->aboutus: ''}}</textarea>
                </div>
					<button type="button" class="btn btn-default" setting-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
@endsection