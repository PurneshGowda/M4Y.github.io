<?php 
// session_start();
require 'db.php';

// include "view.php";

//write the query to get data from users table

$sql = "SELECT * FROM contactus";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Visitors Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
<style>
table {
  border-collapse: collapse;
  width: 100%;
  margin: 4%;

  
}
th {
  height: 70px;
  text-align: left;
  padding: 8px;
}

 td {
  text-align: left;
  padding: 8px;
  
    margin: 0;
    text-decoration: none;
    list-style: none;
}

tr:nth-child(even) {background-color: #f2f2f2
}
body{
    font-family: "CroissantOne-Regular", "Merriweather", serif;}
</style>
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
	<div class="container">
		
<table class="table">
	<thead>
		<tr>
		
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>comments</th>
		
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					
					<td><?php echo $row['firstname']; ?></td>
					<td><?php echo $row['lastname']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['comments']; ?></td>
					
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

    <div class="social">
        <h6>Contact Us</h6>
        <a href="#"><i class="fa fa-facebook"></i> </a>
        <a href="#"><i class="fa fa-twitter"></i> </a>
        <a href="#"><i class="fa fa-snapchat-ghost"></i> </a>
        <a href="#"><i class="fa fa-instagram"></i> </a>
        <a href="#"><i class="fa fa-google-plus"></i> </a>
      

        <div>
        <p class="copyright"> &copy; Copyright All rights reserved. </p>
        </div>
    </div>
</body>
</html>