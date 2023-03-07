<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <?php require('inc/links.php'); ?>
    <title><?php echo $settings_r['site_title'] ?> - ABOUT</title>
    <style>
    .box:hover {
        border-top-color: red !important;
        transform: scale(1.03);
        transition: all 0.3s;
    }

    .custom-alert {
        position: fixed;
        top: 80px;
        right: 25px;
        z-index: 1111;
    }
    </style>
</head>

<body class="bg-light">
    <!-- Header -->
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Tiện Ích</h2>
        <div class="bg-dark h-line"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius distinctio magnam quaerat minima illum ex
            reprehenderit blanditiis et natus alias aliquam ab, sunt dicta aliquid expedita inventore facere, sapiente
            temporibus!
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit amet.</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus hic nulla maiores deserunt
                    exercitationem ipsum debitis distinctio, laborum nobis laudantium ipsam perferendis consectetur at
                    officiis dolor ipsa dolore similique non.
                </p>
            </div>
            <div class="col-lg-6 col-md-5 mb-4 order-md-2 order-1">
                <img src="images/about/about.png" class="w-75" alt="">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px" alt="">
                    <h4 class="mt-3">1000+ Khách sạn</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px" alt="">
                    <h4 class="mt-3">1000+ Khách hàng</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px" alt="">
                    <h4 class="mt-3">10000+ Đánh giá</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px" alt="">
                    <h4 class="mt-3">500+ Nhân viên</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">Đội ngũ quản lý</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about//1.jpg" class="w-100" alt="">
                    <h5 class="mt-2">Phan Mạnh Trường</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/2.jpg" class="w-100" alt="">
                    <h5 class="mt-2">Nguyễn Trường Giang</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/3.jpg" class="w-100" alt="">
                    <h5 class="mt-2">Nguyễn Minh Tiến</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/about/4.jpg" class="w-100" alt="">
                    <h5 class="mt-2">Nguyễn Quốc Huy</h5>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Footer -->
    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {

        spaceBetween: 40,
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
    </script>
</body>

</html>