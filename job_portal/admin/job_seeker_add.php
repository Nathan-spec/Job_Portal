<?php

include('connection/db.php');

  $email=$_POST['email'];
  $username=$_POST['username'];
  $Password=$_POST['Password'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];

 
$query=mysqli_query($conn,"insert into admin_login(admin_email, admin_pass,admin_username,first_name,last_name)values('$email','$username','$Password','$first_name','$last_name')");

var_dump($query);
if(query)
{
    echo "Your data has been successfully entered";
} else
{
    echo "Please try again";
}


?>