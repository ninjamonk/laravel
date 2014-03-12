@section('page-title', 'Viewing Profile: ' . $user->username)

@section('breadcrumb')
<li>
	<a href="{{route('users.index')}}">Users</a>
</li>
<li class="active">Viewing Profile: {{$user->username}}</li>
@stop

@section('content')
<div class="row">
	<div class="col-md-3">Thumbnail</div>
	<div class="col-md-9">
		User Information.
	</div>
</div>

@stop
