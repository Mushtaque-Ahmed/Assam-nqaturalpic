<?php
        include "config.php";
		if(!mysqli_select_db($con,'picture')){
		   echo "db not selected";
		}
		
		    if(isset($_POST["query"]))
			{
				$output='';
				$query="select * from waiz where title like '%".$_POST["query"]."%'";
				$result=mysqli_query($con,$query);
				$output='<ul class="list-unstyled">';
				if(mysqli_num_rows($result)>0)
				{
				   while($row=mysqli_fetch_array($result))
			    	   {
					      $output.='<li>'.$row["title"].'</li>';
		     		  }					
				}else{
					$output.='<li>sorry am not able</li>';
				}
				$output.='</ul>';
				echo $output;
			}
				
		


?>