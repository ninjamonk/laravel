@section('page-title', $pageTitle)

@section('breadcrumb')
<li>
	<a href="{{route('users.index')}}">Users</a>
</li>
<li class="active">{{$type}} Users</li>
@stop

@section('content')

@if($users->count())
<div class="users-wrapper">
	
</div>
@else
<p class="alert alert-info">
	<h4><i class="fa fa-info"></i> Information</h4>
	<p>There are no users to show at this time. Please check back later.</p>
</p>
@endif


@stop