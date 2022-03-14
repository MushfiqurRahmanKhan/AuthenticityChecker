<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel='shortcut icon' type='image/svg' href='images/favicon.svg'>
  <link rel='stylesheet' type='text/css' href='search.css'> 
  <meta charset="UTF-8">
  <title>Authenticity Checker/Search</title>
  <style>
   body{background-image: url(images/background.jpg);
      color:white;}
   button{color:black;}
   
</style>
</head>

<div class="full-page">
		<div class="navbar">
			<div>
				<a href='index.html'>
					​<img src="images/logo.svg" alt="logo" width="250" height="100">
					</a>
			</div>
			<nav>
				<div id="menuToggle">
					<input type="checkbox" />
					<span></span>
					<span></span>
					<span></span>
					<ul id="menu">
						<a href="index.html"><li>Home</li></a>
						<a href="userguide.html"><li>User guide</li></a>
						<a href="aboutus.html"><li>About us</li></a>
						<a href="contactus.html"><li>Contact us</li></a> 
						<a href="form.html"><li>Login/Registration</li></a>
					</ul>
			  </div>
			</nav>
		</div> 
	</div>

<body>
   <br><br><br><br>
<div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">

   <?php

     $connection = mysqli_connect('localhost', 'root', '', 'device_information');
     if(isset($_POST['search'])){
        $searchKey = $_POST['search'];
        $sql = "SELECT * FROM srl WHERE slno LIKE '%$searchKey%'";
     } 
     else{
     $sql = "SELECT * FROM srl";
     $searchKey = "";
     }
     $result = mysqli_query($connection,$sql);
   ?>

   <form action="" method="POST"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search By Serial No." value=<?php echo $searchKey; ?>> 
     </div>
     <div class="col-md-6 text-left">
      <button class="btn">Search</button>
     </div>
   </form>

   <br> 
   <br>
</div>

<table class="table table-bordered">   
  <tr>
     <th>Serial No.</th>
     <th>Company</th>
     <th>Location</th>
  </tr>
  <?php while( $row = $result->fetch_object() ): ?>
  <tr>
     <td><?php echo $row->slno ?></td>
     <td><?php echo $row->company ?></td>
     <td><?php echo $row->location ?></td>
  </tr>
  <?php endwhile; ?>
</table>
</div>
</div>
</div>
</body>
</html>