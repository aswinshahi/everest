	        	<div class="form-group">
		        	<label for="title">Title</label>
		        	<input type="text" class="form-control" name="title" id="title">
	        	</div>
				<div class="form-group">
					<label for="cat_id">Parent Category</label>
					<select id="cat_id" name="cat_id" class="form-control" size="1">
						<option value="0">Select Categories</option>
						<option value="0">Root</option>
						@if($categories && $categories->toArray())
							@foreach($categories as $key=>$cate)
								<option value="{{$cate['id']}}">{{$cate['title']}}</option>
							@endforeach
						@endif
					</select>
				</div>