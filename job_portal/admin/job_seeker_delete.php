<?php
 include('connection/db.php');
 $del=$_GET

  $query=mysqli_query($conn,"delete from admin_login where id = '$del' ");
  if($query)
   {
      echo "<script>alert('Record has been successfully been Deleted')</script>" ;
      header('location:job_seeker.php')
  }
  else
  {
      echo "<script> alert('Record has been successfully been Deleted')</script>";
  }


?>