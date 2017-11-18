<!DOCTYPE html>
<html>
<head>
	<title>Admin | Login</title>
	<link href="{{ URL::asset('public/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
  <link href="{{ URL::asset('public/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin-Panel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Admin Panel</a></li>
          
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="" style="text-align: center;margin-top: 5%;">
	{!! Form::open(['url' => '/']) !!}
   		
		
   		{!! Form::label('Email','', array('class' => '','placeholder' => '' )) !!}<br>

   		
   		{!! Form::text('email','', array('class' => ' center','placeholder' => '' )) !!}<br><br>
		
		 
   		{!! Form::label('Password','', array('class' => '','placeholder' => '' )) !!}<br>
   		
   		{!! Form::password('password','', array('class' => 'center','placeholder' => '' )) !!}<br><br>

       {!! Form::submit('Login','', array('class' => 'btn btn-success','placeholder' => '' )) !!}
		

	{!! Form::close() !!}
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

