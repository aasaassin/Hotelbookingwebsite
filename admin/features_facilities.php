<?php
require( 'inc/essentials.php' );
require( 'inc/db_config.php' );
adminLogin();

if(isset($_GET['seen'])){
   $frm_data=filteration($_GET);

   if($frm_data['seen']=='all'){
      $q="UPDATE `user_queries` SET `seen`=?";
      $values=[1];
      if(update($q,$values,'i')){
         alert('success','Marked all as read');
      }
      else{
         alert('error','Operation Failed');
      }
   }
   else{
      $q="UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
      $values=[1,$frm_data['seen']];
      if(update($q,$values,'ii')){
         alert('success','Marked as read');
      }
      else{
         alert('error','Operation Failed');
      }
   }
}

if(isset($_GET['del'])){
   $frm_data=filteration($_GET);

   if($frm_data['del']=='all'){
      $q="DELETE FROM `user_queries`";
      if(mysqli_query($con,$q)){
         alert('success','Delete all message');
      }
      else{
         alert('error','Operation Failed');
      }
   }
   else{
      $q="DELETE FROM `user_queries` WHERE `sr_no`=?";
      $values=[$frm_data['del']];
      if(delete($q,$values,'i')){
         alert('success','Delete message');
      }
      else{
         alert('error','Operation Failed');
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - User Queries</title>
    <?php require( 'inc/links.php' );
    
?>
    <style>
    .custom-alert {
        position: fixed;
        top: 80px;
        right: 25px;
    }

    .card_img {
        width: 330px;
        height: 330px;
    }
    </style>
</head>

<body class="bg-light">
    <?php require( 'inc/header.php' );
?>
    <div class="d-flex h-100">
        <div class="col-lg-2 bg-dark border-top border-3 border-secondary vh-100" id="dashboard-menu">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2 text-light">ADMIN PANEL</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#adminDropdown" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="adminDropdown">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="features_facilities.php">Features & Facilities</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="user_queries.php">User Queries</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="carousel.php">Carousel</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="setting.php">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="col-lg-10 ms-auto p-4 overflow-hidden" id="main-content">
            <h3 class="mb-4 text-dark">USER QUERIES</h3>

            <!-- Carousel  section -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">

                    <div class="text-end mb-4">
                        <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none btn-sm"><i
                                class="bi bi-check-all"></i> Mark all read</a>
                        <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm"><i
                                class="bi bi-trash"></i> Delete all</a>
                    </div>

                    <div class="table-responsive-md" style="height: 450px; overflow-y: scroll">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                                <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col" style="width: 20%;">Subject</th>
                                    <th scope="col" style="width: 20%;">Message</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                              $q="SELECT * FROM `user_queries` ORDER BY `sr_no` DESC";
                              $data=mysqli_query($con,$q);
                              $i=1;

                              while($row=mysqli_fetch_assoc($data)){
                                 $seen='';
                                 if($row['seen']!=1){
                                    $seen = "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>
                                   Mark as read
                                    </a> <br>";
                                 }
                                 $seen.="<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>
                                 Delete
                                 </a>";
                                 echo <<<query
                                    <tr>
                                       <td>$i</td>
                                       <td>$row[name]</td>
                                       <td>$row[email]</td>
                                       <td>$row[subject]</td>
                                       <td>$row[message]</td>
                                       <td>$row[date]</td>
                                       <td>$seen</td>
                                    </tr>
                                 query;
                                 $i++;
                              }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require( 'inc/scripts.php' );?>
</body>

</html>