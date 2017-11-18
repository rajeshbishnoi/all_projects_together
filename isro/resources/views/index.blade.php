<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login/register</title>
  
      {{Html::style('public/css/style.css')}}  

</head>

<body>
  <div class="box">
      <h1 id="logintoregister">Login</h1>
    <div class="group">      
      <input class="inputMaterial" type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Username</label>
      </div>
	  <div class="group">      
      <input class="inputMaterial" type="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Password</label>
      </div>
	  <div class="group show">      
      <input class="inputMaterial" type="password" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Comfirm Password</label>
      </div>
	  <div class="group show">      
      <input class="inputMaterial" type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Name</label>
      </div>
	  <div class="group show">      
      <input class="inputMaterial" type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Cognome</label>
      </div>
	  <div class="group show">      
      <input class="inputMaterial" type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Email</label>
      </div>

  <button id="buttonlogintoregister">Login</button>
      <p id="plogintoregister">Don't have a account? </p><p id="textchange" onclick="register()"> Register</p>
    </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  {{Html::script('public/js/index.js')}}

</body>
</html>
