				
              <div class="py-5">
			    <div class="row" id="post">
			  <div class="col-lg-12 col-sm-12">
			   <h2 class="text-center">New Post</h2>
			   <br>
				<?php
				     include "config.php";
					 if(!mysqli_select_db($con,'picture')){
						 echo "db not selected";
					 }
					 $sql="select * from waiz INNER JOIN category ON 
					 waiz.category=category.cid order by id desc limit 5";
					 $result=mysqli_query($con,$sql);
					 $num=mysqli_num_rows($result);
					 if($num>0){
						while($row=mysqli_fetch_assoc($result)){  
					?> 
				   <div class="row">
				   <div class="col-lg-4 col-sm-12">
				   
				  <img src="<?php echo $row['pic']?>" height="250px" width="300px" class="pl-4" class="pr-4" class="py-3-auto">
				</div>
				<div class="col-lg-6 col-sm-12" ><p class="pl-5" class="pr-5"><?php echo $row['title']?></p>
				  <p><?php echo $row['detail']?></p>
                   	<p class="text-center"><i class="fa fa-calendar" aria-hidden="true"> <?php echo $row['dadline']?></i>   <i class="fa fa-user-md" aria-hidden="true">     Waiz</i></p>   
         	   </div>
		   
		   </div>
		   <br>
		  
		  
		   <?php
		        
						}
					 }
		   ?>
		   </div>
		   
		  </div>