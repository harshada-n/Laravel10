@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="fw-bold py-3 mb-4">
	<span class="text-muted fw-light">User Management /</span> Users
	<a href="{{ route('admin.users.create') }}" class="btn btn-info"> Create</a>
</h4>

<div class="card">
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>
					<th>Sr. No.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				
				@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td><span class="badge bg-label-primary me-1">Active</span></td>
					<td>
								<a href="{{ route('admin.users.edit', [$user->id]) }}"><i class="bx bx-edit-alt me-1"></i></a>
								<a onclick="event.preventDefault(); this.closest('form').submit();" href="{{ route('admin.users.destroy', [$user->id]) }}" ><i class="bx bx-trash me-1"></i></a>
								<a href="{{ route('admin.users.edit', [$user->id]) }}"><i class="bx bx-dislike-alt me-1"></i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@endsection