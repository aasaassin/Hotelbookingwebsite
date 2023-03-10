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
    <title>Admin Panel - Features & Facilities</title>
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
                            <li class="nav-item">
                                <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="rooms.php">Rooms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="features_facilities.php">Features & Facilities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="user_queries.php">User Queries</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="carousel.php">Carousel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="setting.php">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="col-lg-10 ms-auto p-4 overflow-hidden" id="main-content">
            <h3 class="mb-4 text-dark">FEATURES & FACILITIES</h3>

            <!-- Carousel  section -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="cart-title m-0">Features</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                            data-bs-target="#feature-s">
                            <i class="bi bi-plus-square"></i>Add
                        </button>
                    </div>
                    <div class="table-responsive-md" style="height: 350px; overflow-y: scroll">
                        <table class="table table-hover border">
                            <thead>
                                <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="features-data"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="cart-title m-0">Facilities</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                            data-bs-target="#facility-s">
                            <i class="bi bi-plus-square"></i>Add
                        </button>
                    </div>
                    <div class="table-responsive-md" style="height: 350px; overflow-y: scroll">
                        <table class="table table-hover border">
                            <thead>
                                <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" width="40%">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="facilities-data"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature  modal -->
    <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="feature_s_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Feature</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Name</label>
                            <input type="text" name="feature_name" class="form-control shadow-none" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none"
                            data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Facility  modal -->
    <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="facility_s_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Facility</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Name</label>
                            <input type="text" name="facility_name" class="form-control shadow-none" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Icon</label>
                            <input type="file" name="facility_icon" class="form-control shadow-none" accept=".svg" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="facility_desc" class="form-control shadow-none" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none"
                            data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php require( 'inc/scripts.php' );?>

    <script>
    let feature_s_form = document.getElementById('feature_s_form');
    let facility_s_form = document.getElementById('facility_s_form');

    feature_s_form.addEventListener('submit', function(e) {
        e.preventDefault();
        add_feature();
    });

    function add_feature() {
        let data = new FormData();

        data.append('name', feature_s_form.elements['feature_name'].value);
        data.append('add_feature', '');

        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'ajax/features_facilities.php', true);

        xhr.onload = function() {
            var myModal = document.getElementById('feature-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if (this.responseText == 1) {
                alert('success', 'New feature added!');
                feature_s_form.elements['feature_name'].value = '';
                get_features();
            } else {
                alert('error', 'Server Down');
            }
        };
        xhr.send(data);
    }

    function get_features() {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'ajax/features_facilities.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            document.getElementById('features-data').innerHTML = this.responseText;
        };

        xhr.send('get_features');
    }

    function rem_feature(val) {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'ajax/features_facilities.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            if (this.responseText == 1) {
                alert('success', 'Features removes');
                get_features();
            } else if (this.responseText == 'room_added') {
                alert('error', 'Feature is added in room');
            } else {
                alert('error', 'Server down!');
            }
        };
        xhr.send('rem_feature=' + val);
    }

    facility_s_form.addEventListener('submit', function(e) {
        e.preventDefault();
        add_facility();
    });

    function add_facility() {
        let data = new FormData();

        data.append('name', facility_s_form.elements['facility_name'].value);
        data.append('icon', facility_s_form.elements['facility_icon'].files[0]);
        data.append('desc', facility_s_form.elements['facility_desc'].value);
        data.append('add_facility', '');

        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'ajax/features_facilities.php', true);

        xhr.onload = function() {
            var myModal = document.getElementById('facility-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if (this.responseText == 'inv_img') {
                alert('error', 'Only JPG and PNG images are allowed!');
            } else if (this.responseText == 'inv_size') {
                alert('error', 'Image should be less than 2MB!');
            } else if (this.responseText == 'upd_failed') {
                alert('error', 'Image upload failed. Server Down');
            } else {
                alert('success', 'New facility add');
                facility_s_form.reset();
                get_facilities();
            }
        };
        xhr.send(data);
    }

    function get_facilities() {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'ajax/features_facilities.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            document.getElementById('facilities-data').innerHTML = this.responseText;
        };

        xhr.send('get_facilities');
    }

    function rem_facility(val) {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'ajax/features_facilities.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (this.responseText == 1) {
                alert('success', 'Facility removes');
                get_facilities();
            } else if (this.responseText == 'room_added') {
                alert('error', 'Facility is added in room');
            } else {
                alert('error', 'Server down!');
            }
        };
        xhr.send('rem_facility=' + val);
    }

    window.onload = function() {
        get_features();
        get_facilities();
    };
    </script>
</body>

</html>