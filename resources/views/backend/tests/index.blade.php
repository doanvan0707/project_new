@extends('layouts.backend')
@section('content')
<div class="col-md-12">
  <div class="tile">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
	  <i class="fa fa-plus"></i>Thêm danh sách
	</button>
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
            <th>Tiêu đề</th>
            <th>Mô tả</th>
            <th>Hành động</th>
          </tr>
        </thead>
        @foreach($tests as $key => $test)
			<tbody>
				<tr>
					<td>{{ ++$key }}</td>
					<td>{{ $test->title }}</td>
					<td>{{ $test->description }}</td>
					<td>
						<button type="button" class="btn btn-success" data-title="{{ $test->title }}" data-testid="{{ $test->id }}" data-des="{{ $test->description }}" data-toggle="modal" data-target="#show">
						  <i class="fa fa-eye"></i>
						</button>
						<button type="button" class="btn btn-warning" data-title="{{ $test->title }}" data-testid="{{ $test->id }}" data-des="{{ $test->description }}" data-toggle="modal" data-target="#edit">
						  <i class="fa fa-pencil"></i>
						</button>
						<button type="button" class="btn btn-danger" data-testid="{{ $test->id }}" data-toggle="modal" data-target="#delete">
						  <i class="fa fa-trash"></i>
						</button>
					</td>
				</tr>
			</tbody>
		@endforeach	
      </table>
      {{ $tests->links() }}
    </div>
  </div>
</div>

{{-- Modal create --}}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm danh sách</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('tests.store') }}" method="post">
      	{{ csrf_field() }}
      	<div class="modal-body">
        	<div class="form-group">
        		<label for="title">Title</label>
        		<input type="text" name="title" id="title" class="form-control" placeholder="Nhập tiêu đề ...">
        	</div>
        	<div class="form-group">
        		<label for="des">Description</label>
        		<textarea name="description" id="des" cols="30" rows="10" placeholder="Nhập mô tả ..." class="form-control"></textarea>
        	</div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      <button type="submit" class="btn btn-primary">Save</button>
	    </div>
      </form>
    </div>
  </div>
</div>

{{-- Modal edit --}}
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa danh sách</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('tests.update', 'test') }}" method="post">
      	{{ csrf_field() }}
      	{{ method_field('PUT') }}
      	<div class="modal-body">
      		<input type="hidden" name="test_id" id="testid" value=""> 
        	<div class="form-group">
        		<label for="title">Name</label>
        		<input type="text" name="title" id="title" class="form-control" placeholder="Nhập tiêu đề ...">
        	</div>
        	<div class="form-group">
        		<label for="des">Description</label>
        		<textarea name="description" id="des" cols="30" rows="10" placeholder="Nhập mô tả ..." class="form-control"></textarea>
        	</div>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      <button type="submit" class="btn btn-primary">Save changes</button>
	    </div>
      </form>
    </div>
  </div>
</div>

{{-- Modal show --}}
<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Danh sách</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      	<div class="modal-body">
      		<table class="table table-bordered">
  				<tr>
  					<th>ID</th>
  					<th>Title</th>
  					<th>Description</th>
  				</tr>
  				<tr>
            <td><input type="text" id="testid" class="form-control" disabled></td>
            <td><input type="text" id="title" class="form-control" disabled></td>
  					<td><textarea name="des" id="des" cols="30" rows="10" class="form-control" disabled></textarea></td>
  				</tr>
      		</table>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	    </div>
    </div>
  </div>
</div>

{{-- Modal delete --}}
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xóa danh sách</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('tests.destroy', 'test') }}" method="post">
      	{{ csrf_field() }}
      	{{ method_field('DELETE') }}
      	<div class="modal-body">
      		<p>Bạn có chắc chắn muốn xóa danh sách này?</p>
      		<input type="hidden" name="test_id" id="testid" value=""> 
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      <button type="submit" class="btn btn-primary">Có</button>
	    </div>
      </form>
    </div>
  </div>
</div>

@endsection