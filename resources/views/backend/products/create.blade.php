@extends('layouts.backend')
@section('content')
<div class="app-title">
	<div>
	  <h1><i class="fa fa-plus"></i>&nbsp;Tạo sản phẩm</h1>
	</div>
</div>
<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="name">Tên sản phẩm</label>
		<input type="text" name="name" id="name" placeholder="Nhập tên sản phẩm ..." class="form-control">
	</div>
	<div class="form-group">
		<label class="control-label">Hình ảnh sản phẩm</label>
		<input class="form-control" type="file" name="image" id="image">
  	</div>
	<div class="form-group">
		<label for="category_id">Tên danh mục</label>
		<select name="category_id" id="category_id" class="form-control">
			@foreach ($categories as $category)
		<option value="{{ $category->id }}">{{$category->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="description">Mô tả sản phẩm</label>
		<input type="text" name="description" id="description" placeholder="Mô tả sản phẩm ..." class="form-control">
	</div>
	<div class="form-group">
		<label for="unit_price">Giá gốc</label>
		<input type="text" name="unit_price" id="unit_price" placeholder="Nhập giá gốc ..." class="form-control">
	</div>
	<div class="form-group">
		<label for="promotion_price">Giá khuyến mãi (Nếu có)</label>
		<input type="text" name="promotion_price" id="promotion_price" placeholder="Nhập giá khuyến mãi ..." class="form-control">
	</div>
    <div class="form-group">
	  	<label for="size">Kích cỡ</label>
		<input type="text" name="size" id="size" placeholder="Nhập giá khuyến mãi ..." class="form-control">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-success" value="Đăng ký">
	</div>
</form>
@endsection