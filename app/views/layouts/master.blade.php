<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title') | Project-Titan.DEV</title>
		<meta charset="UTF-8">
		<meta name="description" content="">
		<meta name="author" content="Tangfastics, @jasonsleeman">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Styles CSS -->
		<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
		<link href="{{asset('css/bootstrap/bootstrap.united.css')}}" rel="stylesheet" media="screen">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href="{{asset('css/global.styles.css')}}" rel="stylesheet">
		@yield('styles')
		<!-- END Styles CSS -->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
        <![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default navbar-static-top navbar-custom" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{URL::to('/')}}"><i class="fa fa-beer"></i> Project-Titan</a>
				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="{{URL::to('/')}}"><i class="fa fa-home"></i> Home</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
						<li><a href="#"><i class="fa fa-sign-in"></i> Sign In</a></li>
						<li><a href="#"><i class="fa fa-pencil-square-o"></i> Register</a></li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->username}} <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
						@endif
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>

		<div class="content-header">
			<div class="container">
				<h1 class="page-title pull-left">
					@yield('page-title')
				</h1>

				{{Form::open(['route' => 'search.do', 'class' => 'form-inline search-form pull-right col-sm-3', 'role' => 'form'])}}
					<div class="input-group">
						{{Form::input('search', 'search_term', null, ['class' => 'form-control', 'placeholder' => 'Enter search term...'])}}
						<span class="input-group-btn">
							{{Form::submit('Search', ['class' => 'btn btn-info'])}}
						</span>
					</div>
				</form>
			</div>
		</div>

		<div class="container">
			<ol class="breadcrumb">
				<li>
					<a href="{{URL::to('/')}}"><i class="fa fa-home"></i></a>
				</li>
				@yield('breadcrumb')
			</ol>
			@yield('content')
		</div>

		<!-- Scripts -->
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		@yield('scripts')
		<!-- END Scripts -->
	</body>
</html>