@extends('admin/layouts/contentNavbarLayout')

@section('title', 'User Edit')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users/</span> Edit</h4>

<div class="row">
	<div class="col-xl">
		<div class="card mb-4">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="mb-0">Edit User</h5> <small class="text-muted float-end"></small>
			</div>
			<div class="card-body">
			{{ Form::model($user, array('route' => array('admin.users.update', $user->id), 'method' => 'PUT')) }}
				@if($errors->any())
					<div class="alert alert-danger">
						@foreach ($errors->all() as $error)
							{{ $error }} <br>
						@endforeach
					</div>
				@endif
					<div class="mb-3">
						<label class="form-label" for="basic-default-fullname">Name</label>
						{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'John Doe')) }}
					</div>
					<div class="mb-3">
						<label class="form-label" for="basic-default-email">Email</label>
						<div class="input-group input-group-merge">
						{{ Form::text('email', null, array('class' => 'form-control')) }}
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection