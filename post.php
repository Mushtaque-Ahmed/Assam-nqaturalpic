   <?php
        session_start();
		if(!isset($_SESSION['user'])){
			header ('location:index.php');
		}
   ?>

<!DOCTYPE html>
<html>
<head>
   <title>new bootstrap</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="log.css">
   
</head>
<body>      
                  <section class="col-lg-12 col-md-12 col-sm-12" "my-5">
		       <div class="py-5">
			   <h2 class="text-center">Add Post</h2>
			    <div class="text-center"><h2>welcome,<?php echo $_SESSION['user'];?></h2>
			         </div>
			   </div>
			     <div class="w-50 m-auto">
              	<form action="proccess.php" method="post"  enctype="multipart/form-data">
				   <div class="form-group">
                       <label>Title:</label>
					   <input  type="text" name="user"  class="form-control"></input>
					   </div>
					   
					   <div class="form-group">
                       <label>Describe:</label>
					   <textarea  type="text" name="desc"  class="form-control"></textarea>
					   </div>
					         <div class="form-group">
							    <label>Date</label>
							   <input type="date" name="date" class="form-control">
							 </div>
					  
					   <div class="form-group">
						      <label for="exampleInputPassword1">Category:</label>
							  <select name="category"class="form-control">
							  <option disabled>select Category</option>
							      <?php
								       include "config.php";
									   if(!mysqli_select_db($con,'picture')){
										   echo "db not selected";
									   }
									        $sql="select * from category";
									   $q=mysqli_query($con,$sql) or die ("Query failed.");
									   if(mysqli_num_rows($q)>0){
										   while($row=mysqli_fetch_assoc($q)){
										   echo "<option value='{$row['cid']}'>{$row['name']}</option>";
										   }
									   }
								  
								  ?>
								</select>
								</div>
					   
					   <br>
					     <div class="form-group">
                       
					   <input  type="file" name="fileToUpload" value="upload" ></input>
					   </div>
					   <button type="submit" name="submit" class="btn btn-success">Submit</button>
				   </form>
				   
				 </div>
				 <div class="text-center"><a href="logout.php">Log-out</a></div>
			   
		
		   </section>

 
</body>
</html>