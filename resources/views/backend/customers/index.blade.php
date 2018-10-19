@extends('layouts.backend')
@section('content')
<table class="table table-bordered">
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
		</tr>
	</tbody>
	@endforeach
</table>
@endsection