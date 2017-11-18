<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Form Register with bootstrap</title>

  
</head>

<body>
  <html>
  <head>
    <title>Form register</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <style type="text/css">
      body{
            background-image: url("https://www.w3schools.com/howto/img_girl.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
      }
    </style>
  </head>
  <body>
     <div class="container-fluid">
    <section class="container">
    <div class="container-page">        
      <div class="col-md-6">
        <h3 class="dark-grey">Registration</h3>
        <form class="form" method="post" action="register_backend.php">
        <div class="form-group col-lg-12">
          <label>Name</label>
          <input type="text" name="name" class="form-control" placeholder="name">
          <!-- <input type="" name="" class="form-control" id="" value=""> -->
        </div>


        <div class="form-group col-lg-12">
          <label>Username</label>
          <input type="text" name="username" class="form-control" placeholder="name">
          <!-- <input type="" name="" class="form-control" id="" value=""> -->
        </div>

        <div class="form-group col-lg-6">
          <label>Email Address</label>
          <input type="email" name="email" class="form-control" placeholder="email">
          <!-- <input type="" name="" class="form-control" id="" value=""> -->
        </div>
        
        <div class="form-group col-lg-6">
          <label>Password</label>
          <input type="password" placeholder="password" class="form-control"  name="password">
          <!-- <input type="password" name="" class="form-control" id="" value=""> -->
        </div>
        
        <div class="form-group col-lg-6">
          <label>Repeat Password</label>
          <input type="password" name="" class="form-control" id="" value="">
        </div>
                


        <div class="form-group col-lg-6">
          <label for="sel1">Click to  select the type of user</label>
            <select class="form-control" id="sel1" name="type">
              <option value="Student">Student</option>
              <option value="Govt. Official">Govt. Official</option>
              <option value="NGO">NGO</option>
              <option value="Others">Others</option>
            </select>
        </div>

        <div class="form-group col-lg-6">
           <label for="sel1">Remarks</label>
            <input type="textarea" name="remarks" placeholder="remarks">
        </div>



        
                
               <p>
                 <div class="col-sm-2">
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </div>
                </p>
      
      </form>
      </div>

  </section>
</div> 
  </body>
</html>
  
  
</body>
</html>
