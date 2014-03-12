@section('page-title', $pageTitle)

@section('breadcrumb')
<li>
	<a href="{{route('users.index')}}">Users</a>
</li>
<li class="active">{{$type}} Users</li>
@stop

@section('content')
@if (count($users))
	@foreach(array_chunk($users->getItems(), 3) as $items)
	<div class="row users-row">
		@foreach($items as $user)
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-4">
						<a href="{{route('profile.show', $user->username)}}">
							<img src="http://www.gravatar.com/avatar/{{md5(strtolower(trim($user->email)))}}?s=200" alt="" class="thumbnail img-responsive">
						</a>
					</div>
					<div class="col-md-8">
						<h3 class="username"><a href="{{route('profile.show', $user->username)}}">{{$user->username}}</a></h3>
						<div class="user-meta">
							Joined <strong>{{$user->created_at}}</strong>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
	@endforeach	
@else
<p class="alert alert">
	<h4><i class="fa fa-info"></i> Information</h4>
	<p>
		Sorry! There are currently no users to show you. Please check back at a later time.
	</p>
</p>
@endif
@stop

md5( strtolower( trim( "MyEmailAddress@example.com " ) ) );