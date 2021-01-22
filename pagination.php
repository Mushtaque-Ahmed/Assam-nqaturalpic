<?php 
   include "config.php";
   $limit_per_page=3;
   $page="";
    if(isset($_POST['page_no'])){
		$page=$_POST['page_no'];
	}   else{
		$page=1;
	}
	$offset=($page-1)*$limit_per_page;
	$sql="select * from waiz limit {$offset},{$limit_per_page}";
	$result=mysqli_query($con,$sql) or die("Query failed");
	



?>