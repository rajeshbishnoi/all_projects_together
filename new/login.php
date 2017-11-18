<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>Sign-Up/Login</title>
  <link href="login_files/css.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="login_files/normalize.css">
<link rel="stylesheet" href="login_files/style.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <!-- <li class="tab active"><a href="#signup">Sign Up</a></li> -->
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="login">   
          
          
          <form action="" method="post">
          
         <h1>E-mail *</h1>
        <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            <input name="email" required="" autocomplete="off" value="root" type="email">
          </div>
         
          <h1>Password</h1>
          <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            <input name="password" required="" autocomplete="off" type="password">
          </div>
            <input class="button" name="login" value="Login" required="" autocomplete="off" type="submit">
          <!-- <button type="submit" class="button button-block" name="submit"/>Get Started  </button> -->
          
          </form>

        </div>
        
        <!-- <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req"></span>
            </label>
            <input required="" autocomplete="off" value="root" type="email">
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input required="" autocomplete="off" type="password">
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block">Log In</button>
          
          </form>

        </div> -->
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src="login_files/jquery.htm"></script>

    <script src="login_files/index.js"></script>



</body></html>