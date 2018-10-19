@extends('layouts.backend')
@section('content')
<div class="app-title">
  <div>
    <h2><i class="fa fa-th-list"></i>&nbsp;Tạo danh mục cấp 2 cho danh mục: <span style="color:red">{{ $category->name }}</span></h2>
  </div>
</div>
<form action="{{ route('categories.store-sub-cate', $category->id)}}" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="name">Tên danh mục</label>
		<input type="text" name="name" id="name" placeholder="Nhập tên danh mục" class="form-control">
	</div>
	<div class="form-group"></div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Đăng ký">
	</div>
</form>
@endsection