<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Booking - CONTACT</title>
    <?php require('inc/links.php'); ?>
    <style>

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
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6317112758893!2d106.68029371411639!3d10.762840862388996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1c06f4e1dd%3A0x43900f1d4539a3d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaG9hIGjhu41jIFThu7Egbmhpw6puIC0gxJDhuqFpIGjhu41jIFF14buRYyBnaWEgVFAuSENN!5e0!3m2!1svi!2s!4v1676908226715!5m2!1svi!2s"
                        height="320px" loading="lazy" class="w-100 rounded mb-4">
                    </iframe>
                    <h5>Địa chỉ</h5>
                    <a href="https://goo.gl/maps/d39MjtJL2L1C1HrT7" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        227 Đ. Nguyễn Văn Cừ, Phường 4, Quận 5, Thành phố Hồ Chí Minh
                    </a>
                    <h5 class="mt-4">Số điện thoại</h5>
                    <a href="tel: 0916064500" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0916064500
                    </a>
                    <br />
                    <a href="tel: 0385822122" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0385822122
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: phanmanhtruong01@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i>
                        phanmanhtruong01@gmail.com
                    </a>
                    <h5 class="mt-4">Theo dõi</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-github me-1"></i>
                    </a>

                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Gửi yêu cầu</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Họ tên</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Chủ đề</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Yêu cầu</label>
                            <textarea class="form-control shadow-none" rows="1"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>