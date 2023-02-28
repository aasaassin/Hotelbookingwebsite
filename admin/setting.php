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
      <style>
         .custom-alert {
            position: fixed;
            top: 80px;
            right: 25px;
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
                  <button
                     class="navbar-toggler shadow-none"
                     type="button"
                     data-bs-toggle="collapse"
                     data-bs-target="#adminDropdown"
                     aria-controls="navbarSupportedContent"
                     aria-expanded="false"
                     aria-label="Toggle navigation"
                  >
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
            <div class="card border-0 shadow-sm mb-4">
               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                     <h5 class="card-title m-0">General Settings</h5>
                     <button
                        type="button"
                        class="btn btn-dark shadow-none btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#general-s"
                     >
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
            <div
               class="modal fade"
               id="general-s"
               data-bs-backdrop="static"
               data-bs-keyboard="true"
               tabindex="-1"
               aria-labelledby="staticBackdropLabel"
               aria-hidden="true"
            >
               <div class="modal-dialog">
                  <form id="general_s_form">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title">General settings</h5>
                        </div>
                        <div class="modal-body">
                           <div class="mb-3">
                              <label class="form-label">Side Title</label>
                              <input
                                 name="site_title"
                                 type="text"
                                 id="site_title_inp"
                                 required
                                 class="form-control shadow-none"
                              />
                           </div>
                           <div class="mb-3">
                              <label class="form-label fw-bold">About us</label>
                              <textarea
                                 class="form-control shadow-none"
                                 id="site_about_inp"
                                 name="site_about"
                                 required
                                 rows="6"
                              ></textarea>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button
                              type="button"
                              onclick="site_title.value=general_data.site_title,site_about.value=general_data.site_about"
                              class="btn text-secondary shadow-none"
                              data-bs-dismiss="modal"
                           >
                              CANCEL
                           </button>
                           <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <!-- Shutdown section -->
            <div class="card border-0 shadow-sm mb-4">
               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                     <h5 class="card-title m-0">Shutdown website</h5>
                     <div class="form-check form-switch">
                        <form>
                           <input
                              onchange="upd_shutdown(this.value)"
                              class="form-check-input"
                              type="checkbox"
                              id="shutdown_toggle"
                           />
                        </form>
                     </div>
                  </div>
                  <p class="card-text">
                     No customer will be allowed to book hotel room, when shutdown mode is turned on.
                  </p>
               </div>
            </div>
            <!-- Contact details section -->
            <div class="card border-0 shadow-sm mb-4">
               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                     <h5 class="card-title m-0">Contacts Settings</h5>
                     <button
                        type="button"
                        class="btn btn-dark shadow-none btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#contacts-s"
                     >
                        <i class="bi bi-pencil-square"></i> Edit
                     </button>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="mb-4">
                           <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                           <p class="card-text" id="address"></p>
                        </div>
                        <div class="mb-4">
                           <h6 class="card-subtitle mb-1 fw-bold">Goole map</h6>
                           <p class="card-text" id="gmap"></p>
                        </div>
                        <div class="mb-4">
                           <h6 class="card-subtitle mb-1 fw-bold">Phone number</h6>
                           <p class="card-text mb-1">
                              <i class="bi bi-telephone-fill"></i>
                              <span id="pn1"></span>
                           </p>
                           <p class="card-text">
                              <i class="bi bi-telephone-fill"></i>
                              <span id="pn2"></span>
                           </p>
                        </div>
                        <div class="mb-4">
                           <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                           <p class="card-text" id="email"></p>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="mb-4">
                           <h6 class="card-subtitle mb-1 fw-bold">Social links</h6>
                           <p class="card-text mb-1">
                              <i class="bi bi-instagram"></i>
                              <span id="insta"></span>
                           </p>
                           <p class="card-text mb-1">
                              <i class="bi bi-facebook me-1"></i>
                              <span id="fb"></span>
                           </p>
                           <p class="card-text">
                              <i class="bi bi-twitter"></i>
                              <span id="tw"></span>
                           </p>
                        </div>
                        <div class="mb-4">
                           <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                           <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Contact details modal -->
            <div
               class="modal fade"
               id="contacts-s"
               data-bs-backdrop="static"
               data-bs-keyboard="true"
               tabindex="-1"
               aria-labelledby="staticBackdropLabel"
               aria-hidden="true"
            >
               <div class="modal-dialog modal-lg">
                  <form id="contacts_s_form">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title">Contact settings</h5>
                        </div>
                        <div class="modal-body">
                           <div class="container-fluid p-0">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="mb-3">
                                       <label class="form-label fw-bold">Address</label>
                                       <input
                                          name="address"
                                          type="text"
                                          id="address_inp"
                                          required
                                          class="form-control shadow-none"
                                       />
                                    </div>
                                    <div class="mb-3">
                                       <label class="form-label fw-bold">Goole map</label>
                                       <input
                                          name="gmap"
                                          type="text"
                                          id="gmap_inp"
                                          required
                                          class="form-control shadow-none"
                                       />
                                    </div>
                                    <div class="mb-3">
                                       <label class="form-label fw-bold">Phone Number</label>
                                       <div class="input-group mb-3">
                                          <span class="input-group-text"> <i class="bi bi-telephone-fill"></i></span>
                                          <input
                                             type="text"
                                             name="pn1"
                                             id="pn1_inp"
                                             class="form-control shadow-none"
                                             required
                                          />
                                       </div>
                                       <div class="input-group mb-3">
                                          <span class="input-group-text"> <i class="bi bi-telephone-fill"></i></span>
                                          <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none" />
                                       </div>
                                    </div>
                                    <div class="mb-3">
                                       <label class="form-label fw-bold">Email</label>
                                       <input
                                          name="email"
                                          type="email"
                                          id="email_inp"
                                          required
                                          class="form-control shadow-none"
                                       />
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="mb-3">
                                       <label class="form-label fw-bold">Social Link</label>
                                       <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                          <input
                                             type="text"
                                             name="fb"
                                             id="fb_inp"
                                             class="form-control shadow-none"
                                             required
                                          />
                                       </div>
                                       <div class="input-group mb-3">
                                          <span class="input-group-text"> <i class="bi bi-instagram"></i></span>
                                          <input
                                             type="text"
                                             name="insta"
                                             id="insta_inp"
                                             class="form-control shadow-none"
                                             required
                                          />
                                       </div>
                                       <div class="input-group mb-3">
                                          <span class="input-group-text"> <i class="bi bi-twitter"></i></span>
                                          <input
                                             type="text"
                                             name="tw"
                                             id="tw_inp"
                                             class="form-control shadow-none"
                                             required
                                          />
                                       </div>
                                    </div>
                                    <div class="mb-3">
                                       <label class="form-label fw-bold">Iframe Src</label>
                                       <input
                                          name="iframe"
                                          type="text"
                                          id="iframe_inp"
                                          required
                                          class="form-control shadow-none"
                                       />
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button
                              type="button"
                              onclick="contacts_inp(contacts_data)"
                              class="btn text-secondary shadow-none"
                              data-bs-dismiss="modal"
                           >
                              CANCEL
                           </button>
                           <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php require( 'inc/scripts.php' );?>

      <script>
         let general_data, contacts_data;

         let general_s_form = document.getElementById('general_s_form');
         let site_title_inp = document.getElementById('site_title_inp');
         let site_about_inp = document.getElementById('site_about_inp');

         let contacts_s_form = document.getElementById('contacts_s_form');

         function get_general() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

            let shutdown_toggle = document.getElementById('shutdown_toggle');

            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'ajax/settings_crud.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
               general_data = JSON.parse(this.responseText);

               site_title.innerText = general_data.site_title;
               site_about.innerText = general_data.site_about;

               site_title_inp.value = general_data.site_title;
               site_about_inp.value = general_data.site_about;

               if (general_data.shutdown == 0) {
                  shutdown_toggle.checked = false;
                  shutdown_toggle.value = 0;
               } else {
                  shutdown_toggle.checked = true;
                  shutdown_toggle.value = 1;
               }
            };

            xhr.send('get_general');
         }

         general_s_form.addEventListener('submit', function (e) {
            e.preventDefault();
            upd_general(site_title_inp.value, site_about_inp.value);
         });

         function upd_general(site_title_val, site_about_val) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'ajax/settings_crud.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
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

         function upd_shutdown(val) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'ajax/settings_crud.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
               if (this.responseText == 1 && general_data.shutdown == 0) {
                  alert('success', 'Site has been shutdown!');
                  get_general();
               } else {
                  alert('error', 'Shutdown mode off!');
               }
            };

            xhr.send('upd_shutdown=' + val);
         }

         function get_contacts() {
            let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
            let iframe = document.getElementById('iframe');

            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'ajax/settings_crud.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
               contacts_data = JSON.parse(this.responseText);
               contacts_data = Object.values(contacts_data);
               for (i = 0; i < contacts_p_id.length; i++) {
                  document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];
               }
               iframe.src = contacts_data[9];
               contacts_inp(contacts_data);
            };

            xhr.send('get_contacts');
         }

         function contacts_inp(data) {
            let contacts_inp_id = [
               'address_inp',
               'gmap_inp',
               'pn1_inp',
               'pn2_inp',
               'email_inp',
               'fb_inp',
               'insta_inp',
               'tw_inp',
               'iframe_inp',
            ];
            for (i = 0; i < contacts_inp_id.length; i++) {
               document.getElementById(contacts_inp_id[i]).value = data[i + 1];
            }
         }

         contacts_s_form.addEventListener('submit', function (e) {
            e.preventDefault();
            upd_contacts();
         });

         function upd_contacts() {
            let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw', 'iframe'];
            let contacts_inp_id = [
               'address_inp',
               'gmap_inp',
               'pn1_inp',
               'pn2_inp',
               'email_inp',
               'fb_inp',
               'insta_inp',
               'tw_inp',
               'iframe_inp',
            ];
            let data_str = '';
            for (i = 0; i < index.length; i++) {
               data_str += index[i] + '=' + document.getElementById(contacts_inp_id[i]).value + '&';
            }
            data_str += 'upd_contacts';

            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'ajax/settings_crud.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function () {
               var myModal = document.getElementById('contacts-s');
               var modal = bootstrap.Modal.getInstance(myModal);
               modal.hide();
               if (this.responseText == 1) {
                  alert('success', 'Change save!');
                  get_contacts();
               } else {
                  alert('error', 'No changes made!');
               }
            };
            xhr.send(data_str);
         }

         window.onload = function () {
            get_general();
            get_contacts();
         };
      </script>
   </body>
</html>
