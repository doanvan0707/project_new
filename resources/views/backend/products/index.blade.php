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
    <li class="breadcrumb-item active"><a href="">Quản lý danh mục</a></li>
  </ul>
</div>
<div class="col-md-12">
  <div class="tile">
    <a href="{{ route('products.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Thêm sản phẩm</a>
  </div>
</div>
<div class="col-md-12">
  <div class="tile">
    <h3 class="tile-title">Danh sách</h3>
    <div class="table-responsive">
      <table class="table table-hover table-light table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Tên</th>
            <th>Danh mục</th>
            <th>Giá gốc</th>
            <th>Giá khuyến mãi</th>
            <th>Hành động</th>
          </tr>
        </thead>
        @foreach($products as $key => $product)
			<tbody>
				<tr>
					<td>{{ ++$key }}</td>
          <td>{{ $product->image }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->category->name }}</td>
          <td>{!!number_format($product->unit_price,0,",",".") . 'đ'!!}</td>
          <td>{!!number_format($product->promotion_price,0,",",".") . 'đ'!!}</td>
					<td>
						<a href="" class="btn btn-success"><i class="fa fa-eye"></i></a>
						<a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
						<a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
			</tbody>
		@endforeach	
      </table>
      {{ $products->links() }}
    </div>
  </div>
</div>
@endsection