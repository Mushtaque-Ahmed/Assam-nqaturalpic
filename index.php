<!DOCTYPE html>
<html  lang="en">
<head>
   <title>Assam natural pic</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="styl.css" type="text/css">
   
</head>
<body>   <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Assam Natural Picture</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">about</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="natural.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
		 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		 <!--query to category-->
		 <?php
		        include "config.php";
	              
				$sql="select * from category where post>0";
				$result=mysqli_query($con,$sql) or die("query failed.:category");
				if(mysqli_num_rows($result)>0){
					
				
		        while($row=mysqli_fetch_assoc($result)){
               ?>				 
				 <a class="dropdown-item" href="natural.php?cid=<?php echo $row['cid'];?>"><?php echo $row['name'];?></a>
		
				  
				   <?php
			   }
          
				}
				?>
        </div>
      </li>
    
      <li class="nav-item">
        <a class="nav-link " href="contact.php">contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" id="search_id" placeholder="search post.." aria-label="Search">
	  
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	  

    </form>
  </div>
</nav>

  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner" id="tytle">
    <div class="carousel-item active">
      <img src="me1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="me2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="me3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

             
              
		       <div class="py-5">
			    <div class="row" id="post">
			  <div class="col-lg-12 col-sm-12" >
			   <h2 class="text-center"><em style="color:blue" class="small">New Post</em></h2>
			   <br>
			    
				<!--query to post-->
				 <?php
				     include "config.php";
					 if(!mysqli_select_db($con,'picture')){
						 echo "db not selected";
					 }
					 $sql="select * from waiz INNER JOIN category ON 
					 waiz.category=category.cid order by id desc limit 4";
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
		   <button class="btn btn-success ml-3 my-2" id="btnclick" >see more</button>
              
		   </div>
		   </div>
		   
           <div class="container" id="login">
		  
		        <div class="py-5">
				    <h2 class="text-center">About us</h2>
				   </div>
				  
                                    
					<div class="row">
					      <div class="col-lg-6 col-md-6 col-sm-12">
						     <img src="me4.jpg" class="img-fluid aboutimg" >
						  </div>
						    <div class="col-lg-6 col-md-6 col-sm-12">
						     <h2 class="display-4">waiz technecal</h2>
							 <p class="py-3">When the container is within your navbar, its horizontal padding is removed at breakpoints lower than your specified .navbar-expand{-sm|-md|-lg|-xl} class. This ensures we’re not doubling up on padding unnecessarily on l</p>
						        <a href="about.php" class="btn bnt-success">check more</a>
						 
					  </div>				   
					</div>
		   
		   
		   <section class="my-5">
		       <div class="py-5">
			   <h2 class="text-center">Reaply</h2>
			         
			   </div>
			     <div class="w-50 m-auto">
              	<form action="process.php" method="post">
				   <div class="form-group">
                       <label>Name:</label>
					   <input  type="text" name="user" autocomplete="off" class="form-control"></input>
					   </div>
					   
					   <div class="form-group">
                       <label>Email-Id:</label>
					   <input  type="text" name="email" autocomplete="off" class="form-control"></input>
					   </div>
					   <div class="form-group">
                       <label>Mobile:</label>
					   <input  type="number" name="mobile" autocomplete="off" class="form-control"></input>
					   </div>
					     <div class="form-group">
                       <label>Comment:</label>
					   <textarea  type="text" name="comment" autocomplete="off" class="form-control"></textarea>
					   </div>
					   <button type="submit" class="btn btn-success">Submit</button>
				   </form>
				   
				 </div>
			   
		
		  
		   <div id="footer-sidebar">
			  
			    <div class="row">
			       <div class=" col-sm-6 col-lg-4">
				     <div class="footer-widget">
				             <h4>About Company</h4>
						 <p>About Us Webkor.com was created to help you choose from a very large web hosting market Choose The Best Web Hosting We have compared for you the platforms, services and applications offered by web hosts. Our team of experts is based on expertise and very good knowledge of the web market. Consult our comparisons, and … About Us Read More »</p>
				    </div>
			      </div>
				  
				  <div class=" col-sm-6 col-lg-4">
				     <div class="footer-widget">
				             <h4>Information</h4>
						 <ul>
				           <li><a href="" >About-us</a></li>
					       <li><a href="" >Site-map</a></li>
					       <li><a href="" >Privacy-policy</a></li>
					       <li><a href="" >Terms & Conditions</a></li>
						   <li><a href="conn.php" >contact-us</a></li>
						  </ul>
				    </div>
			      </div>
				  
				  <div class=" col-sm-6 col-md-4">
				     <div class="footer-widget">
				             <h4>Employers</h4>
						 <ul>
				           <li><a id="log" href="login.php" >User-login</a></li>
					       <li><a href="" >Site-map</a></li>
					  
						  </ul>
				    </div>
			      </div>
				</div>
			  </div>
			
			  <div id="footer">
			    
			    <div class="row">
				  <div class="col-md-6"><p><i class="fa fa-copyright" aria-hidden="true"></i>  Copy Right 2021:All Right Reserved,Founded by Waiz<a href="index.php">Assamnaturalpic.com</a> </p>
				
				  </div>
				   <div class="col-md-6">
				   <ul id="social-icons" class="float-md-right"> 
				    <li><a href="" class="fa fa-instagram"></a></li>
				        <li><a href="" class="fa fa-facebook-square"></a></li>
					    <li><a href="" class="fa fa-linkedin-square"></a></li>
					    <li><a href="" class="fa fa-twitter-square"></a></li>
						<li><a href="" class="fa fa-whatsapp"></a></li>
				   </ul>
				  </div>
				</div>
			 
			  </div>
</div>

</div>









  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript">
		  $(document).ready(function() {
    function loadTable(page){
      $.ajax({
        url: "pagination.php",
        type: "POST",
        data: {page_no :page },
        success: function(data) {
          $("#table-data").html(data);
        }
      });
    }
    loadTable();

    //Pagination Code
    $(document).on("click","#pagination a",function(e) {
      e.preventDefault();
      var page_id = $(this).attr("id");

      loadTable(page_id);
    })
  });
		
		</script>
		<script>
		  $(document).ready(function(){
			  $('#btnclick').click(function(){
				  $('#post').load('see_more.php');
			  })
		  });
		</script>
		<script>
		  $(document).ready(function(){
			  $('#log').click(function(){
				  $('#login').load('login.php');
			  })
		  });
		</script>
		<script>
		  $(document).ready(function(){
			  $('#search_id').keyup(function(){
				  var query = $(this).val();
				  if(query !=""){
					  $.ajax({
						  url:"search.php",
						  method:"POST",
                          data:{query:query},
                          success:function(data){
							  $('#tytle').fadeIn();
							  $('#tytle').html(data);
						  }						  
						 });
				  }else{
					  $("#tytle").fadeout();
					  $('#tytle').html("");
				  }
			  });
			  $(document).on('click', 'li', function(){
				  $('#search_id').val($(this).text());
				  $("#tytle").fadeout();
			  });
		  });
		</script>


</body>
</html>