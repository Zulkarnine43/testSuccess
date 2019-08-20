<?php
if(isset($_POST['btn'])){

function signin($data){
$link = mysqli_connect("localhost","root","","test");
$sql = "SELECT email, password FROM signup WHERE email='$data[email]' and password='$data[password]'";
  $result= mysqli_query($link,$sql);
      $user = mysqli_fetch_assoc($result);
      
      if($user){
        header("Location:index.php");
      }
    }
    
signin($_POST);

}

?>


<!DOCTYPE html>	
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.css">
</head>
<body >

<div class="h3 " class="sidebar-menu">
  <a href="index.php"  class="btn-warning">Home</a>
  <a href="blog.php"class="btn-dark">Blog</a>
  <a href="education.php"class="btn-warning">Education</a>
  <a href="entertainment.php"class="btn-dark">Entertainment</a>

  <a href="sports.php"class="btn-warning">Sports
  <a href="news.php"class="btn-primary">News</a>
  <a href="about.php"class="btn-dark">about Us</a>
  <a href="contact.php"class="btn-warning">Contact</a>
  <a href="signin.php"class="btn-primary">Sign In</a>
  <a href="signup.php"class="btn-dark">Sign Up</a>
                                      

</div>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
   <div class="col-md-9 main">
  <!-- login-page -->
  <div class="login">
    <div >
      <div >
           <h3 class="tittle">Login <i ></i></h3>
           
           <p>If you have previously Login with us, <a href="#">click here</a></p>
           <form method="POST" action="">
             <div >
              <h4 class="c">Email Address* :</h4>
            </div>
          
            
                 <input type="text"  name="email" value="" >

            <div>
              <h4 class="d">Password* :</h4>
            </div>
           
            
                 <input type="password" name="password" value="">        
             <input type="submit" name="btn" value="Login">
              
           </form>
          <a href="#">Forgot Password ?</a>
      </div>
      <div class="col-md-6 login-right">
          <a href="signup.php" >Create An Account</a>
      </div>
   
    </div>
  </div>
<!-- //login-page -->
     

 </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>





</body>
</html>