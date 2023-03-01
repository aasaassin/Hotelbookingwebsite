<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Booking - CONTACT</title>
    <?php require('inc/links.php'); ?>
    <style>
    .custom-alert {
        position: fixed;
        top: 80px;
        right: 25px;
    }
    </style>
</head>

<body class="bg-light">
    <!-- Header -->
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Liên hệ</h2>
        <div class="bg-dark h-line"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius distinctio magnam quaerat minima illum ex
            reprehenderit blanditiis et natus alias aliquam ab, sunt dicta aliquid expedita inventore facere, sapiente
            temporibus!
        </p>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe src="<?php echo $contact_r['iframe'] ?>" height="320px" loading="lazy"
                        class="w-100 rounded mb-4">
                    </iframe>
                    <h5>Địa chỉ</h5>
                    <a href=" <?php echo $contact_r['gmap'] ?>" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        <?php echo $contact_r['address'] ?>
                    </a>
                    <h5 class="mt-4">Số điện thoại</h5>
                    <a href="tel:  <?php echo $contact_r['pn1'] ?>"
                        class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> <?php echo $contact_r['pn1'] ?>
                    </a>
                    <br />
                    <?php 
                    if($contact_r['pn2']!=''){
                        echo<<<data
                        <a href="tel: $contact_r[pn2] ?>"class="d-inline-block text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> $contact_r[pn2]
                    </a>
                    data;
                    }
                    ?>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: <?php echo $contact_r['email'] ?>"
                        class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i>
                        <?php echo $contact_r['email'] ?>
                    </a>
                    <h5 class="mt-4">Theo dõi</h5>
                    <?php 
                    if($contact_r['tw']!=''){
                        echo<<<data
                            <a href="$contact_r[tw]" class="d-inline-block mb-3" target="_blank">
                                 <span class="badge bg-light text-dark fs-6 p-2"> <i class="bi bi-twitter me-1"></i>Twitter
                                </span>
                            </a>
                             <br />
                        data;
                    }
                    ?>

                    <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3" target="_blank">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br />
                    <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-3" target="_blank">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i>Instagram
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST">
                        <h5>Gửi yêu cầu</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Họ tên</label>
                            <input name="name" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Email</label>
                            <input name="email" required type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Chủ đề</label>
                            <input name="subject" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Yêu cầu</label>
                            <textarea name="message" required class="form-control shadow-none" rows="1"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php require('inc/footer.php'); ?>

    <?php 
    
    if(isset($_POST['send'])){
        $frm_data=filteration($_POST);

        $q="INSERT INTO `user_queries`(`name`, `email`, `subject`, `message` ) VALUES (?,?,?,?)";
        $values=[$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];

        $res=insert($q,$values,'ssss');
        if($res==1){
            alert('success','Mail sent!');
        }
        else{
            alert('error','Server Down! Try again later.');
        }
    }

    ?>


    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>