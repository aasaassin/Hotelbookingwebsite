<?php
require( 'inc/essentials.php' );
adminLogin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel - Dashboard</title>
    <?php require( 'inc/links.php' );
    
?>
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
                                <a class="nav-link text-white" href="#">Rooms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Users</a>
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
            <h3 class="mb-4 text-dark">SETTINGS</h3>
            <!-- General settings section  -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">General Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                            data-bs-target="#general-s">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                    </div>
                    <h6 class="card-subtitle mb-1 fw-bold">Side title</h6>
                    <p class="card-text" id="site_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                    <p class="card-text" id="site_about"></p>
                </div>
            </div>
            <!-- General settings modal -->
            <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">General settings</h5>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Side Title</label>
                                    <input name="site_title" type="text" id="site_title_inp"
                                        class="form-control shadow-none" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control shadow-none" id="site_about_inp" name="site_about"
                                        rows="6"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button"
                                    onclick="site_title.value=general_data.site_title,site_about.value=general_data.site_about"
                                    class="btn text-secondary shadow-none" data-bs-dismiss="modal">
                                    CANCEL
                                </button>
                                <button type="button" onclick="upd_general(site_title.value,site_about.value)"
                                    class="btn custom-bg text-white shadow-none">
                                    SUBMIT
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require( 'inc/scripts.php' );?>

    <script>
    let general_data;

    function get_general() {
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');

        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'ajax/settings_crud.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            general_data = JSON.parse(this.responseText);

            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about;

            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;
        };

        xhr.send('get_general');
    }

    function upd_general(site_title_val, site_about_val) {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'ajax/settings_crud.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function() {
            var myModal = document.getElementById('general-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();
            if (this.responseText == 1) {
                alert('success', 'Changes saved!');
                get_general();
            } else {
                alert('error', 'No changes made!');
            }
        };

        xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');
    }

    window.onload = function() {
        get_general();
    };
    </script>
</body>

</html>