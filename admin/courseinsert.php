<?php  
session_start();  
?>
<?php

extract($_POST);
$rname=$_SESSION["rname"];

include("database.php");

date_default_timezone_set("Asia/Kolkata");
						 $dt=date('Y-m-d h:i:s');
						 $timetype=date('A');
						 $file_name=$_FILES['file']['name'];
						 $file_name1=$_FILES['image']['name'];
						 

	$tmp_name=$_FILES['file']['tmp_name'];
 $temp = explode(".", $file_name);
$txtname="dd".date('Ymdhis')."gh";
$newfilename = $txtname.".".end($temp);
$uploads_dir = '/upload';


if (($_FILES["image"]["type"] == "image/gif")
or ($_FILES["image"]["type"] == "image/jpeg")
or ($_FILES["image"]["type"] == "image/pjpeg")
or ($_FILES["image"]["type"] == "image/png"))
{
    if ($_FILES["image"]["error"] == 0)
    {
        move_uploaded_file($_FILES["image"]["tmp_name"],
        "album/".$_FILES["image"]["name"]);

    }
	
    
}


// checking mp3
if (substr($_FILES["file"]["name"],-3) == "mp3")
{
    if ($_FILES["file"]["error"] == 0)
    {
        move_uploaded_file($_FILES["file"]["tmp_name"],
        "audio/".$_FILES["file"]["name"]);
    }
    
}






       $file_location="audio/".$newfilename;
     // $tmp_location=$_FILES["file"]["tmp_name"];
	  //echo $tmp_location;
      move_uploaded_file($_FILES["file"]["tmp_name"], "uploads_dir/".$newfilename);
						 
						$sql="INSERT INTO course(cname,Specialization, Category, duration, typ, Intake) VALUES (
			\"$_REQUEST[cname]\",
			\"$_REQUEST[Specialization]\",
			\"$_REQUEST[Category]\",
			\"$_REQUEST[duration]\",
			\"$_REQUEST[type]\",
			\"$_REQUEST[Intake]\"
		
			
			
			
			
			)			";


$res=mysqli_query($con,$sql)or die("Could Not Perform the Query");;
						
						header("Location: addcourse.php?msg1=success");
						
						


?>

