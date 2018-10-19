@extends('layouts.backend')
@section('content')

<div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i>&nbsp;Quản lý thông tin danh mục</h1>
      <p>Toàn bộ danh mục sản phẩm của Katy Shop</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Admin</li>
      <li class="breadcrumb-item active"><a href="{{ route('categories.index') }}">Quản lý danh mục</a></li>
    </ul>
  </div>
<div class="col-md-12">
  <div class="tile">
    <a href="{{ route('categories.create-sub-cate', $category->id) }}" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Thêm danh mục cấp 2</a>
  </div>
</div>
<div class="col-md-12">
  <div class="tile">
    <h3 class="tile-title">Danh sách</h3>
    <div class="table-responsive">
      <table class="table table-hover table-light table-bordered">
        @if($subCategories)
          <thead>
            <tr>
              <th>#</th>
              <th>Tên</th>
              <th>Hành động</th>
            </tr>
          </thead>
          @foreach($subCategories as $key => $subCategory)
            <tbody>
              <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $subCategory->name }}</td>
                <td>
                  <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                  <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            </tbody>
          @endforeach 
        @else
           <p>Không có danh mục con</p>
        @endif
      </table>
      {{ $subCategories->links() }}
    </div>
  </div>
</div>
@endsection