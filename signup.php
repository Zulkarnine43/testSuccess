<?php
if(isset($_POST['btn'])){

    function add($data){
//print_r($_POST);
$link = mysqli_connect("localhost","root","","test");
$sql = "INSERT INTO signup (firstname,lastname,email,password,confirmpassword) VALUES ('$data[firstname]','$data[lastname]','$data[email]',
'$data[password]','$data[confirmpassword]') ";
      mysqli_query($link,$sql);


}
add($_POST);
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
 <form  method="POST" action="">
 

    <!-- Jumbotron Header -->
   <div class="col-md-9 main">
  <!-- register -->
      <div class="sign-up-form">
         
            <div >
              <h4 class="a">First Name* :</h4>
            </div>
            
             
                <input type="text" name="firstname" value="" >

             
           
            <div >
              <h4 class="b">Last Name* :</h4>
            </div>
          
        
                  <input type="text"  name="lastname" value="" >

           
            <div >
              <h4 class="c">Email Address* :</h4>
            </div>
          
            
                 <input type="text"  name="email" value="" >

            <div>
              <h4 class="d">Password* :</h4>
            </div>
           
            
                 <input type="password" name="password" value="">

            <div >
              <h4>Confirm Password* :</h4>
            </div>
              
                       <input type="password"  name="confirmpassword" value="" >
         
                      <input type="submit"  name="btn" value="submit">
         
        </div>
        
      </div>
       </form>
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