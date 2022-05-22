<?php
   session_start();
   if( $_SESSION['email']==true)
   {

   }
   else
   {
    header('location:admin_dashboard.php');
   }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Administrator Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/admin_dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Job Seeker
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Openings
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            
          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="job_seeker.php">Job Seeker</a></li>
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
             <form action="" method="post" style="padding: 2%; margin: 2%;" name="job_seeker_form" id="job_seeker_form">
               <div class="form-group">

               <label for="Job Seeker Email"> </label>
               <input type="email" name="email" id="email" class="form-control" placeholder="Enter Job Seeker email">


                 </div>

                 <div class="form-group">
               <label for="Job Seeker Username"> </label>
               <input type="text" name="Username" id="Username" class="form-control" placeholder="Enter Job Seeker username">
               </div>

                 <div class="form-group">
               <label for="First Name"> </label>
               <input type="text"name="first_name" id="first_name" class="form-control" placeholder="Enter First name">


                 </div> 

                 <div class="form-group">
               <label for="Last Name"> </label>
               <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last name">


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
       var email=$("#email").val();
       var Username=$("#Username").val();
       var Password=$("#Password").val();
       var first_name=$("#first_name").val();
       var last_name=$("#last_name").val();
       var data = $("job_seeker_form").serialize();

       $.ajax({
         type:"POST",
         url:"job_seeker_add.php",
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
