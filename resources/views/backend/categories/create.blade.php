@extends('layouts.backend')
@section('content')
<form action="{{ route('categories.store') }}" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="name">Tên danh mục</label>
		<input type="text" name="name" id="name" placeholder="Nhập tên danh mục" class="form-control">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Đăng ký">
	</div>
</form>
@endsection