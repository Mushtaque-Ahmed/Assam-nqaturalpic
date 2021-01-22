<?php
         session_start();
         
       include "config.php";
	   if(!mysqli_select_db($con,'picture')){
		   echo "db not selected";
	   }
	    
			$name=$_POST['user'];
			$pass=$_POST['pass'];
			
			
			$q="select * from user where name='$name' && password=$pass";
			$result=mysqli_query($con,$q);
			$num=mysqli_num_rows($result);
			if($num==1){
			     $_SESSION['user']=$name;
				header ("location:post.php");
			}else{
			
		echo "something went wrong"; 				
				
		
				header ("location:login.php");
			}
		
	   


?>