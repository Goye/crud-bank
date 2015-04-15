<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bank CRUD</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css" media="screen" />

</head>
<body>
	<h1>Internal Bank View</h1>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
			
			</div>
  		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    			<ul class="nav navbar-nav">
    				<li class="active"><a href="#">Cash In</a></li>
      			<li><a href="/cash-out/{{$userId}}">Cash Out</a></li>
      			<li><a href="/home/edit/{{$userId}}">Account</a></li>
            <li><a href="/logout">Logout</a></li>
      		</ul>
      	</div>
      </div>
  </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Cash in transactions</h4>
  		</div>

  		<div class="panel-body">
  			@if (!empty($values))
	    		<table class="table">
					<thead>
						<tr>
							<th>Id</th>
							<th>Amount</th>
							<th>Name</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
						@foreach($values as $value)
							<tr>
								<td>{{ $value->id }}</td>
								<td>{{ $value->amount }}</td>
								<td>{{ $value->name }}</td>
								<td>{{ $value->created_at }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@else
        <p>
            We don't have information of this user.
        </p>
    	@endif	
  		</div>
  	</div>
</body>
</html>