<?php
include('include/header.php');
include('include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="create_company.php">Create Company</a></li>
    <li class="breadcrumb-item"><a href="add_job_seeker.php">Add Job Seeker</a></li>
  </ol>
</nav>
            
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Job Seeker</h1>
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
              <div id="msg"> </div>
              <form action="" method="post" style="padding: 2%; margin: 2%;" name="Company_form" id="Company_form">
                <div class="form-group">
               <label for="Job Seeker Email">Company Name </label>
               <input type="text" name="Company" id="Company" class="form-control" placeholder="Enter Company">
               </div>

                <div class="form-group">
               <label for="Job Seeker Username">Description </label>
               <textarea name="Description" id="Description" class="form-control" cols="30" rows="10"> </textarea>
               </div>

                <div class="form-group"> 
                <input type="submit" class="btn btn-success" placeholder="Save" name="submit" id="submit" > 
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
   $(document).ready(function(){
     $("#submit").click(function()
     {
       var Description=$("#Description").val();
       var Company=$("#Company").val();
         if(Description=='')
         {
           alert("Enter Description !!");
           return false;
         }
         if(Company=='')
         {
           alert("Enter Company !!");
           return false;
         }
       var data = $("#Company_form").serialize();

       $.ajax({
         type:"POST",
         url:"Company_add.php",
         data:data,
         success:function(data){
           $("#msg").html(data);
         }
       })


     });
     });

    </script>


    
  </body>
</html>
