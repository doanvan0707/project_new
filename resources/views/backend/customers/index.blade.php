@extends('layouts.backend')
@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-user"></i>&nbsp;Quản lý khách hàng</h1>
    <p>Toàn bộ thông tin khách hàng của Katy Shop</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Admin</li>
    <li class="breadcrumb-item active"><a href="{{ route('customers.index') }}">Quản lý danh mục</a></li>
  </ul>
</div>
<div class="col-md-12">
  <div class="tile">
    <a href="{{ route('customers.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Thêm khách hàng</a>
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
						<th>Họ tên</th>
						<th>Giới tính</th>
						<th>Email</th>
						<th>Hành động</th>
					</tr>
				</thead>
				@foreach($customers as $key => $customer)
				<tbody>
					<tr>
						<td>{{ ++$key }}</td>
						<td>{{ $customer->name }}</td>
						<td>{{ $customer->gender }}</td>
						<td>{{ $customer->email }}</td>
						<td>
							<a href="{{ route('customers.show', $customer->id) }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
							<a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
							<a class="btn btn-danger delete-cus" id="" href="#"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				</tbody>
				@endforeach
			</table>
		</div>
	</div>	
</div>		
@endsection