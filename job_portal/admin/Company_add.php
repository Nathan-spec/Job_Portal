<?php

include('connection/db.php');

  $Company=$_POST['Company'];
  $Description=$_POST['Description'];
  

 
$query=mysqli_query($conn,"insert into Company(company,des)values('$Company','$Description')"); 

var_dump($query);
if(query)
{
    echo "Your data has been successfully entered";
} else
{
    echo "Please try again"; 
}


?>