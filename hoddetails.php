
<?php include('uheader.php'); ?>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
div.gallery1 {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery1 img {
    width: 100%;
    height: auto;
}

div.desc1 {
    padding: 15px;
    text-align: center;
}
.details{
	
	margin-left:200px;
	
}
.contact{
	
	position:absolute;
	
	
}
#profile{
	
	margin-left:950px;
	
}

</style>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="home.html">Home</a><span>«</span></li>
									<li>HOD<span></span></li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					
					  <h2 class="w3_inner_tittle">Head of the Department Details</h2>

									<div class="agile-grids">	
				<!-- validation -->
				<div class="inner_content_w3_agile_info two_in">
					  
<?PHP
include("database.php");
											 

	$sql_sel="SELECT * FROM hod";
	$res_sel=mysqli_query($con,$sql_sel);
	if($row_sel=mysqli_fetch_array($res_sel))
	{
	
	?>  
							<!--/forms-->
													<div class="container" id="profile">

														<!-- <a href="pdf/Profile.pdf" download><button type="button" class="btn btn-primary">Pdf profile</button></a> -->
  
													</div>
													<div class="forms-main_agileits">
														
														<div class="gallery1">
															<a target="_blank">
																<img src="<?php echo "admin/album/".$row_sel['image'];?>" height="200" width="300"/>
															</a>
															
														</div>
														
																
													</div>
													<div class="details">
														<p><b><font color="#e63900" size="5em"><?PHP echo $row_sel['hname']; ?></font></b></p><br>
														<p><font color="black" size="3px"><?PHP echo $row_sel['qua']; ?></font></p><br>
														<p><b><font color="" size="3px"><?PHP echo $row_sel['degn']; ?></font></b></p><br>
														<p><b><font color="" size="3px"><?PHP echo $row_sel['deg']; ?></font></b></p><br>
														<p><font color="black" size="3px"><?PHP echo $row_sel['dep']; ?></font></p><br>
														
													</div>
													
													
														<!--//forms-->											   
					
							<!-- /social_media-->
						  
						<!-- //social_media-->
				    </div>
													
					<br><br><br><br><br>
					<p><b><font color="black">Areas of Interest:</strong></font><b></p>
					<?PHP echo $row_sel['aoi']; ?><br>
					<br><br><br>
					<div class="contact">
					
						<p><b><font color="black">Contact:</strong></font><b></p>
						<img width="180" height="8" border="0" src="album/line1.jpg" />
						<p><b><font color="black" size="3em"><?PHP echo $row_sel['hname']; ?></font></b></p><br>
						<p><font color="black" size="2px"><?PHP echo $row_sel['qua']; ?></font></p><br>
						<p><font color="" size="2px"><?PHP echo $row_sel['degn']; ?></font></p><br>
						<p><font color="" size="2px">Gayatri Vidya Parishad College of Engineering (Autonomous)</font></p><br>
						<p><font color="" size="2px">Official Email:<a href="<?PHP echo $row_sel['Email1']; ?>"><?PHP echo $row_sel['Email1']; ?></font></a></p><br>
						<p><font color="" size="2px">Alternate Email:<a href="<?PHP echo $row_sel['Email2']; ?>"><?PHP echo $row_sel['Email2']; ?></font></a></p><br>
						<p><font color="black" size="2px">Phone:<?PHP echo $row_sel['phone']; ?></font></p><br>
						
					</div>
					<?PHP } ?>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('footer.php'); ?>