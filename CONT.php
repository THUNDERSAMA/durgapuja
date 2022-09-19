<?php
  // Initialize message variable
  include 'dbfr.php';

  

  // If upload button is clicked ...
  
  	// Get image name
$cmd=$_POST['cmd'];
if($cmd=='register')
{
  $fw=fopen("ttt.txt", "a");
  fwrite($fw, print_r($_POST,true));
  fwrite($fw, print_r($_FILES,true));
  //echo "ok2";
$e_name=$_POST['e_name'];
$p_name=$_POST['p_name'];
$pin=$_POST['pin'];
$address=$_POST['address'];
$map=$_POST['map'];
$rate=$_POST['rate'];
$comment=$_POST['comment'];

     $filename=$_FILES["image"]["name"];
  $tmpname=$_FILES["image"]["tmp_name"];

  
  $path="image/".$filename;
  $mimetype=mime_content_type($tmpname);
  $valid=array('image/jpeg','image/png','image/jpg','image/JPEG','image/PNG','image/JPG');
  if(in_array($mimetype, $valid))
  {
       if(move_uploaded_file($tmpname, $path))
       {

        //$k=$k+1;
        


      $query="INSERT INTO pandal (EDITOR,PANDALNAME,PINCODE,ADDRESS,MAP,IMAGE,RATING,COMMENT,VERIFY) VALUES ('$e_name','$p_name','$pin','$address','$map','$path','$rate','$comment',0)";
      $query_run=mysqli_query($con,$query);
      if($query_run)
      {
         //$t=$t+1;
         echo "OK";
         // header("Location:main_page.php");
          // header("Location:main_page.php");
      }
      else
      {
        echo "error".$query.(mysqli_error($con));
      }


       }
      
  }
  else
  {
    echo "file is not an image";
  }
 }
  ?>