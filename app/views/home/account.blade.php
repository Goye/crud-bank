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
            <li><a href="/cash-in/{{$user->id}}">Cash In</a></li>
            <li><a href="/cash-out/{{$user->id}}">Cash Out</a></li>
            <li class="active"><a href="/home/edit/{{$user->id}}">Account</a></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </div>
      </div>
  </nav>

  <div class="panel panel-success">
      <div class="panel-heading">
        <h4>Edit User</h4>
      </div>

      <div class="panel-body">
        @if (!empty($user))
        <form method="post" action="/update-user/{{ $user->id }}">
          <p>
            <input value="{{ $user->name }}" type="text" name="name" placeholder="Name" class="form-control" required>
          </p>
          <p>
            <input value="{{ $user->username }}" type="text" name="username" placeholder="Username" class="form-control" required>
          </p>
          <input type="submit" value="Save" class="btn btn-success">
        @else
          <p>
            We don't have information of this user.
          </p>
        @endif
      </form>
    </div>
  </div>

  @if(Session::has('message'))
    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
</body>
</html>