<?php
 	session_start();
	require 'db.php';
   
  if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
      
      $firstname = dataFilter($_POST['firstname']);
		  $lastname = dataFilter($_POST['lastname']);
		  $email = dataFilter($_POST['email']);
		  $comments = dataFilter($_POST['comments']);

      $sql = "INSERT INTO contactus (firstname, lastname, email, comments)
			       VALUES (' $firstname', '$lastname', '$email', '$comments')";
		  $result = mysqli_query($conn, $sql);
    	if(!$result)
	  	{
			    $_SESSION['message'] = "data fault !!!";
			    header("Location: index.html");
		  }
	  	else {
			$_SESSION['message'] = "successfull !!!";
      header("Location: success.html");

	  	}
    }
    function dataFilter($data)
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> M4Y</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <img src="./img/our-official-logo.png" alt="logo" class="logo1">
  
      <ul>
        <li><a class="active" href="./index.html">About</a></li>
        <li><a href="./services.html">Services</a></li>
        <li><a href="./contact.php">Contact</a></li>
        <li><a href="./view.php">visitors</a></li>
        
      </ul>
    </nav>

    <div class="contact-form">
        <h1>Contact Us</h1>
        <div class="form-box">
            <form method="POST" action="contact.php" enctype="multipart/form-data">
                <input type="text" id ="firstname" name="firstname"placeholder="FirstName" >
                <input type="text" id ="lastname" name="lastname" placeholder="LastName" >
                <input type="text" id ="email" name="email"placeholder="Email Address" >
                <textarea name="comments" id="comments" name="comments" cols="30" rows="10" placeholder="Comments / Queries"></textarea>                
                <button class="submit">Submit</button>
            </form>
        </div>
    </div>





    <div class="social">
        <h6>Contact Us</h6>
        <a href="#"><i class="fa fa-facebook"></i> </a>
        <a href="#"><i class="fa fa-twitter"></i> </a>
        <a href="#"><i class="fa fa-snapchat-ghost"></i> </a>
        <a href="#"><i class="fa fa-instagram"></i> </a>
        <a href="#"><i class="fa fa-google-plus"></i> </a>
      

        <div>
        <p class="copyright"> Copyright All rights reserved. </p>
        </div>
    </div>

  </body>
</html>
