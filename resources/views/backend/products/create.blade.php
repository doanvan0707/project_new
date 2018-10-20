@extends('layouts.backend')
@section('content')
<form action="" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="name">Tên sản phẩm</label>
		<input type="text" name="name" id="name" placeholder="Nhập tên sản phẩm ..." class="form-control">
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
	  	<label class="control-label">Hình ảnh sản phẩm</label>
	  	<input class="form-control" type="file" name="image" id="image">
	</div>
</form>
@endsection