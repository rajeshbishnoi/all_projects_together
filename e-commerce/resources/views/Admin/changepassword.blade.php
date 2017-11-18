<!DOCTYPE html>
<html>
<head>
	<title>Admin | Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
	{!! Form::open(['url' => 'foo/bar']) !!}
   		
		
   		{!! Form::label('Old Password','', array('class' => '','placeholder' => '' )) !!}<br>

   		
   		{!! Form::password('old_password','', array('class' => ' center','placeholder' => '' )) !!}<br><br>
		
		 
   		{!! Form::label('New Password','', array('class' => '','placeholder' => '' )) !!}<br>
   		
   		{!! Form::password('new_password','', array('class' => 'center','placeholder' => '' )) !!}<br><br>

      {!! Form::label('Confirm Password','', array('class' => '','placeholder' => '' )) !!}<br>
      
      {!! Form::password('confirm_password','', array('class' => 'center','placeholder' => '' )) !!}<br><br>

      {!! Form::submit('submit','', array('class' => 'btn btn-success','placeholder' => '' )) !!}
		

	{!! Form::close() !!}
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

