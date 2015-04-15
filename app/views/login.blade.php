<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bank Login</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css" media="screen" />
</head>
<body>

	{{ Form::open(array('url' => 'login')) }}
	<h1>Bank Login</h1>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>User Information</h4>
  		</div>

  		<div class="panel-body">
  		    @if ( ! $errors->isEmpty() )
		    <div class="row">
		        @foreach ( $errors->all() as $error )
		        <div class="col-md-10 col-md-offset-1 alert alert-danger">{{ $error }}</div>
		        @endforeach
		    </div>
		    @elseif ( Session::has( 'message' ) )
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1 alert alert-{{ Session::get('class') }}">{{ Session::get( 'message' ) }}</div>
		    </div>
		    @else
		        <p>&nbsp;</p>
		    @endif
		    <div class="col-md-10 col-md-offset-1">
				<p>
					{{ Form::label('email', 'Email Address') }}
					{{ Form::text('email', Input::old('email'), array('placeholder' => 'bank@awesome.co')) }}
				</p>

				<p>
					{{ Form::label('password', 'Password') }}
					{{ Form::password('password') }}
				</p>

				<input type="submit" value="Submit" class="btn btn-primary">
			</div>
		</div>
	{{ Form::close() }}
	</div>

</body>
</html>