{{--<input type="hidden" name="old_file" value="{{!empty($cat &&$cat->product_image) ?$cat->product_image: ''}}">--}}
{{--<input type="hidden" name="category_id" value="{{!empty($cat &&$cat->id) ?$cat->id: ''}}">--}}

<div class="form-group">
		        	<label for="title">Title</label>
		        	<input type="text" class="form-control" name="title" id="title">
	        	</div>
				<div class="form-group">
					<label for="product_code">Product Code</label>
					<input type="text" class="form-control" name="product_code" id="product_code">
				</div>
				<div class="form-group">
					<label for="price">Pages</label>
					<input type="text" class="form-control" name="pages" id="price">
				</div>
				<div class="form-group">
					<input type="checkbox" id="latest" name="latest"/>
					<label for="latest">Latest</label>
				</div>
				<div class="form-group">
					<label for="cat_id">Category</label>
					<select id="cat_id" name="cat_id" class="form-control" size="1">
						<option value="">Select Categories</option>
						@if($categories && $categories->toArray())
							@foreach($categories as $key=>$cate)
								<option value="{{$cate['id']}}">{{$cate['title']}}</option>
							@endforeach
						@endif
					</select>
				</div>
                <div class="form-group">
                    <label for="size">Length</label>
                    <input type="text" class="form-control" name="length" id="length">
                </div>
				<div class="form-group">
					<label for="size">Width</label>
					<input type="text" class="form-control" name="width" id="width">
				</div>
				<div class="form-group ">
					<label class="control-label col-md-4">Image</label>
					<div class="col-md-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							@php ($logo='')

								<div class="fileinput-preview thumbnail" data-trigger="fileinput"
									 style="width: 200px; height: 150px;">
									@if (file_exists( public_path('products/'.$logo)))
										<img src="{{url('/products',$logo)}}" style="width:200px;height:200px;"><br/>
										<br/>
									@else
										<img src="{{url('/no-image.png')}}" style="width:200px;height:200px;"><br/><br/>
									@endif
								</div>

								<div>
                                    <span class="btn red btn-outline btn-file">
                                      <button class="fileinput-new"> Select image </button>
                                      <button class="fileinput-exists"> Change </button>
                                        <input type="file" id="product_image" name="product_image">
                                    </span>
									<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
										Remove </a>
								</div>
						</div>
					</div>
				</div>


				<div class="form-group">
	        		<label for="des">Description</label>
	        		<textarea name="description" id="desc" cols="20" rows="5" class="form-control"></textarea>
	        	</div>
