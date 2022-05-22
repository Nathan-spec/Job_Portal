<?php
include('connection/db.php');

include('include/header.php');
include('include/sidebar.php');

//$id = $_GET['edit'];
$query= mysqli_query($conn,"select * from admin_login where id = '$id'");
while($row=mysqli_fetch_array($query))

{
    $email=$row['admin_email'];
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    $admin_pass=$row['admin_pass'];
    $admin_type=$row['admin_type'];

}
  

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            
          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="job_seeker.php">Job Seeker</a></li>
    <li class="breadcrumb-item"><a href="add_job_seeker.php">Add Job Seeker</a></li>
  </ol>
</nav>
            
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Update Job Seeker</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
              <a class="btn btn-primary" href="add_job_seeker.php">Add job seeker</a>
             </div>



         <!-- <table style="width:100%;" class="display" >

          <thead>
          <tr>

          <th></th>

          <th>id</th>
          <th>Email</th>
          <th>Username</th>

          </tr>
          </thead> 
          
          <tbody>
              
            <?php
              
              include('connection/db.php');
              
              $query=mysqli_query($conn,"select * from admin_login");
              while($row=mysqli_fetch_array($query)){
                     
            ?>
          
          
          <tr>
           <td><?php echo $row['id']; ?></td>
           <td><?php echo $row['admin_email']; ?></td>
           <td><?php echo $row['admin_username']; ?></td>
          </tr>
          <?php

              }
          ?>
          </tbody>-->
           
           <div style="width: 50%; margin-left: 20%; background-colour: #F2F4F4; ">
             <form action="" method="post" style="padding: 2%; margin: 2%;" name="job_seeker_form" id="job_seeker_form">
               <div class="form-group">

               <label for="Job Seeker Email"> </label>
               <input type="email" name="email" id="email" value="<?php echo $email; ?>" class="form-control" placeholder="Enter Job Seeker email">


                 </div>

                 <div class="form-group">
               <label for="Job Seeker Username"> </label>
               <input type="text" name="Username" id="Username" value= "<?php echo $admin_username; ?>" class="form-control" placeholder="Enter Job Seeker username">
               </div>

                <div class="form-group">
               <label for="First Name"> </label>
               <input type="text"name="first_name" id="first_name" value="<?php  echo $first_name; ?>" class="form-control" placeholder="Enter First name">
               </div> 

                <div class="form-group">
               <label for="Last Name"> </label>
               <input type="text" name="last_name" id="last_name" value = "<?php  echo $last_name; ?>" class="form-control" placeholder="Enter Last name">
               </div> 
                
                <div class="form-group">
                 <label for="Admin Type">Admin Type</label>
                 <select name="admin_type" value=" <?php echo $admin_username;?>" class="form-control" id="admin_type">
                 <option value="1">Super Admin</option>
                 <option value="2">Customer Admin</option>
                </div>
                 
                 <input type ="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>"> 

                 <div class="form-group"> 
                         <input type="submit" class="btn btn-success" placeholder="Update" name="submit" id="submit" > 
                  
                 </div>
                    
                    </div>
             
              </form>
           </div>



          
          </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
          <div class="table-responsive">
            
          </div>
        </main>
    </div>
</div>
        
        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>


    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
    feather.replace()
    </script>

    <!-- Database Plugin -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"> </script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
    </script>

    <script> 
       $(document).ready(function() {
        $('#example').DataTable(); 
       } );
     </script>
  <script>
    
    <script>
    $(document).ready(function(){
      $("#submit").click(function(){
          var email=$("#email").val();
          var Username =$("#Username").val();
          var Password =$("#Password").val();
          var first_name=$("#first_name").val();
          var last_name =$("#last_name").val();
          var admin_type=$("#admin_type").val();
          var data = $("#customer_form").serialize();

          $.ajax({
            type:"POST",
            url:"job_seeker_add.php",
            data:data,
            success:function(data){
              alert(data);
            }
          });
      });
    });last_name

    </script>
</body>

<html>

<?php
 include('connection/db.php');
 if (isset($_POST['submit'])) {
     $id=$_POST['id'];
     $email=$_POST['email'];
     $Username = $_POST['Username'];
     $Password = $_POST['Password'];
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $admin_type = $_POST['admin_type'];
    $query1=mysqli_query($conn,"update admin_login set admin_email='$email',admin_username='$Username',admin_pass='$Password',first_name='$first_name',last_name='$last_name',admin_type='$admin_type' where id='$id'");

    if($query1){
        echo "<script> alert('Record has been successfully been Deleted')</script>";
    }else
    {
        echo "<script>alert('Some error Please try again !!!!') </script>";
    }

 };

?>


