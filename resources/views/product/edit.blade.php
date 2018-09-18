@extends('layouts.master')

@section('content')
	<form action="{{url('/product/update')}}" method="post" enctype="multipart/form-data">
	{{method_field('patch')}}
	{{csrf_field()}}
<input type="hidden" name="old_file" value="{{!empty($product &&$product->product_image) ?$product->product_image: ''}}">
<input type="hidden" name="product_id" value="{{!empty($product &&$product->id) ?$product->id: ''}}">

<div class="form-group">
		        	<label for="title">Title</label>
		        	<input type="text" class="form-control" name="title" id="title" value="{{$product->title}}">
	        	</div>
				<div class="form-group">
					<label for="product_code">Product Code</label>
					<input type="text" class="form-control" name="product_code" value="{{$product->product_code}}" id="product_code">
				</div>
		<div class="form-group">
			<label for="price">Pages</label>
			<input type="text" class="form-control" value="{{$product->pages}}" name="pages" id="price">
		</div>
		<div class="form-group">
			<input type="checkbox" id="latest" @if($product->latest == true) checked @endif" name="latest"/>
			<label for="latest">Latest</label>
		</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input type="text" class="form-control" name="price" id="price" value="{{$product->price}}">
				</div>
				<div class="form-group">
					<label for="cat_id">Category</label>
					<select id="cat_id" name="cat_id" class="form-control" size="1">
						<option value="">Select Categories</option>
						@if($categories && $categories->toArray())
							@foreach($categories as $key=>$cate)
								@if($cate['id'] == $product->cat_id)
								<option selected value="{{$cate['id']}}">{{$cate['title']}}</option>
								@else
								<option value="{{$cate['id']}}">{{$cate['title']}}</option>
								@endif

							@endforeach
						@endif
					</select>
				</div>
		<div class="form-group">
			<label for="size">Length</label>
			<input type="text" class="form-control" value="{{$product->length}}" name="length" id="length">
		</div>
		<div class="form-group">
			<label for="size">Width</label>
			<input type="text" class="form-control" value="{{$product->width}}" name="width" id="width">
		</div>
				<div class="form-group ">
					<label class="control-label col-md-4">Image</label>
					<div class="col-md-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							@php ($logo=!empty($product &&$product->product_image) ?$product->product_image: '')

								<div class="fileinput-preview thumbnail" data-trigger="fileinput"
									 style="width: 200px; height: 150px;">
									@if (file_exists( public_path('products/'.$logo)) && $logo != '')
										<img src="{{url('/products',$logo)}}" style="width:200px;height:150px;"><br/>
										<br/>
									@else
										<img src="{{url('/no-image.png')}}" style="width:200px;height:150px;"><br/><br/>
									@endif
								</div>

								<div>
                                    <span class="btn red btn-outline btn-file">
                                      <button class="fileinput-new"> Select image </button>
                                      <button class="fileinput-exists"> Change </button>
                                        <input type="file" id="product_image" name="product_image" value="{{!empty($product &&$product->product_image) ?$product->product_image: ''}}">
                                    </span>
									<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
										Remove </a>
								</div>
						</div>
					</div>
				</div>


				<div class="form-group">
	        		<label for="des">Description</label>
	        		<textarea name="description" id="desc" cols="20" rows="5" class="form-control">{{$product->description}}</textarea>
	        	</div>
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary">Save Changes</button>
	</form>
@endsection
