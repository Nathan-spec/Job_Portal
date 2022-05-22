<?php
include('connection/db.php');

include('include/header.php');
include('include/sidebar.php');

//$id = $_GET['edit'];
$query= mysqli_query($conn,"select * from admin_login where id = '$id'");
while($row=mysqli_fetch_array($query))

{
    $company_name=$row['company'];
    $des=$row['des'];
    
}
  

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            
          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="job_seeker.php">Company</a></li>
    <li class="breadcrumb-item"><a href="add_job_seeker.php">Update Company</a></li>
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

               <label for="Job Seeker Email">Enter Company Name </label>
               <input type="Company" name="Company" id="Company" value="<?php echo $company_name; ?>" class="form-control" placeholder="Enter Job Seeker email">
                 </div>

                 <div class="form-group">
               <label for="Job Seeker Username">Enter Description</label>
               <input type="text" name="des" id="des" value= "<?php echo $des; ?>" class="form-control" placeholder="Enter Job Seeker username">
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
     $company=$_POST['company'];
     $des = $_POST['des'];
    $query1=mysqli_query($conn,"update Company set company='$company',des='$des' where id='$id'");

    if($query1){
        echo "<script> alert('Record has been successfully been Deleted')</script>";
    }else
    {
        echo "<script>alert('Some error Please try again !!!!') </script>";
    }

 };

?>


