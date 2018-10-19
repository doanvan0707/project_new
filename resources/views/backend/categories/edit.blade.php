@extends('layouts.backend')
@section('content')
<form action="{{ route('categories.update', $category->id) }}" method="post">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	<div class="form-group">
		<label for="name">Tên danh mục</label>
		<input type="text" name="name" id="name" value="{{ $category->name }}" placeholder="Nhập tên danh mục" class="form-control">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary" value="Chỉnh sửa">
	</div>
</form>
@endsection