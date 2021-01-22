<?php
       include "config.php";
	   if(!mysqli_select_db($con,'picture')){
		   echo "db not selected";
	   }
	   if(isset($_POST['submit'])){
		   
            $file=$_FILES['fileToUpload'];
			
           $filename=$file['name'];
		  $fileerror=$file['error'];
		  $filetmp=$file['tmp_name'];
		  
		  $fileext= explode('.',$filename);
		  $filecheck=strtolower(end($fileext));
		  $fileextstored=array('png','jpg','jpeg');
		  
		  $title=$_POST['user'];
		   $detail=$_POST['desc'];
		   $dt=$_POST["date"];
            $category=$_POST['category'];
		   
		  if(in_array($filecheck,$fileextstored)){
			  $destinationfile='upload/'.$filename;
			  move_uploaded_file($filetmp,$destinationfile);
			  $q="insert into waiz(pic,title,detail,dadline,category)
			  values('$destinationfile','$title','$detail','$dt','$category');";
			 $q.="update category set post = post+1 where cid =$category";
			
			if(mysqli_multi_query($con,$q)){
               			 header('location:index.php');
			 }else{
				 echo "<div class='alert alert-danger'>Query failed</div>";	
			}
			  
		  }
		  			
	   }



?>