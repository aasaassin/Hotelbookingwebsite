<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"><?php echo $settings_r['site_title'] ?>
            </h3>
            <p><?php echo $settings_r['site_about'] ?></p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Đường dẫn</h5>
            <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Trang chủ</a><br />
            <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Phòng</a><br />
            <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Tiện ích</a><br />
            <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Liên hệ</a><br />
            <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">Về chúng tôi</a>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Theo dõi</h5>
            <a href="<?php echo $contact_r['tw'] ?>" target="_blank"
                class="d-inline-block text-dark text-decoration-none mb-2"><i
                    class="bi bi-github me-2"></i>Twitter</a><br />
            <a href="<?php echo $contact_r['fb'] ?>" target="_blank"
                class="d-inline-block text-dark text-decoration-none mb-2"><i
                    class="bi bi-facebook me-2"></i>Facebook</a><br />
            <a href="<?php echo $contact_r['insta'] ?>" target="_blank"
                class="d-inline-block text-dark text-decoration-none mb-2"><i
                    class="bi bi-facebook me-2"></i>Instagram</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script>
function alert(type, msg, position = 'body') {
    let bs_class = type == 'success' ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');
    element.innerHTML = `
        <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
            <strong class="me-3">${msg}</strong>  
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        `;
    if (position == 'body') {
        document.body.append(element);
        element.classList.add('custom-alert');
    } else {
        document.getElementById(position).appendChild(element);
    }
    setTimeout(remAlert, 3500);
}

function remAlert() {
    document.getElementsByClassName('alert')[0].remove();
}

function setActive() {
    let navbar = document.getElementById('nav-bar');
    let a_tags = navbar.getElementsByTagName('a');

    for (i = 0; i < a_tags.length; i++) {
        let file = a_tags[i].href.split('/').pop();
        let file_name = file.split('.')[0];

        if (document.location.href.indexOf(file_name) >= 0) {
            a_tags[i].classList.add('active');
        }
    }
}

let register_form = document.getElementById('register-form');

register_form.addEventListener('submit', (e) => {
    e.preventDefault();
    let data = new FormData();
    data.append('name', register_form.elements['name'].value);
    data.append('email', register_form.elements['email'].value);
    data.append('phonenum', register_form.elements['phonenum'].value);
    data.append('address', register_form.elements['address'].value);
    data.append('pincode', register_form.elements['pincode'].value);
    data.append('dob', register_form.elements['dob'].value);
    data.append('pass', register_form.elements['pass'].value);
    data.append('cpass', register_form.elements['cpass'].value);
    data.append('profile', register_form.elements['profile'].files[0]);
    data.append('register', '');

    var myModal = document.getElementById('registerModal');
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/login_register.php", true);

    xhr.onload = function() {
        if (this.responseText == 'pass_mismatch') {
            alert('error', "Password mismatch");
        } else if (this.responseText == 'email_already') {
            alert('error', "Email is already registered");
        } else if (this.responseText == 'phone_already') {
            alert('error', "Phone is already registered");
        } else if (this.responseText == 'inv_img') {
            alert('error', "Only JPG, PNG images");
        } else if (this.responseText == 'upd_failed') {
            alert('error', "Images upload failed");
        } else if (this.responseText == 'mail_failed') {
            alert('error', "Cannot send confirmation email! Server down!");
        } else if (this.responseText == 'ins_failed') {
            alert('error', "Registration failed! Server down");
        } else {
            alert('success', "Registration successful! Confirmation link sent to email!");
            register_form.reset();
        }
    }
    xhr.send(data);
})



setActive();
</script>