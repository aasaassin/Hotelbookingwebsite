<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Booking - HOME</title>
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <style>
    .avaiability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }

    @media screen and (max-width: 575px) {
        .avaiability-form {
            margin-top: 25px;
            padding: 0 35px;
        }
    }
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>
    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>
    <!-- Check avaibility form -->
    <div class="container avaiability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Kiểm tra phòng trống</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Ngày nhận phòng</label>
                            <input type="date" class="form-control shadow-none" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Ngày trả phòng</label>
                            <input type="date" class="form-control shadow-none" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Người lớn</label>
                            <select class="form-select shadow-none" aria-label="Default select example">
                                <option selected>Lựa chọn</option>
                                <option value="1">1 người</option>
                                <option value="2">2 người</option>
                                <option value="3">3 người</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500">Trẻ em</label>
                            <select class="form-select shadow-none" aria-label="Default select example">
                                <option selected>Lựa chọn</option>
                                <option value="1">1 người</option>
                                <option value="2">2 người</option>
                                <option value="3">3 người</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Xác nhận</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Phòng trống</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="images/rooms/1.jpg" style="height: 197px" class="card-img-top" />
                    <div class="card-body">
                        <h5>Nicecy Boutique Hotel</h5>
                        <h6 class="mb-4">$500/ngày</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Đặc trưng</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 2 Giường </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 2 Phòng tắm </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Ban công </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 3 Sofa </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Tiện nghi</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> Wifi </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> Tivi </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> Máy lạnh </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> Tủ lạnh </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Số lượng khách tối đa</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 5 người lớn </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 4 trẻ em </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Xếp hạng</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt phòng</a>
                            <a href="#" class="btn btn-sm btn-outline-dark custom-bg shadow-none">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="images/rooms/2.jpg" style="height: 197px" class="card-img-top" />
                    <div class="card-body">
                        <h5>Somerset Hồ Chí Minh</h5>
                        <h6 class="mb-4">$500/ngày</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Đặc trưng</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 2 Giường </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 2 Phòng tắm </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Ban công </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 3 Sofa </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Tiện nghi</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> Wifi </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> Tivi </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> Máy lạnh </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> Tủ lạnh </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Số lượng khách tối đa</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 5 người lớn </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 4 trẻ em </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Xếp hạng</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt phòng</a>
                            <a href="#" class="btn btn-sm btn-outline-dark custom-bg shadow-none">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="images/rooms/3.jpg" style="height: 197px" class="card-img-top" />
                    <div class="card-body">
                        <h5>Roseland Sweet Hotel & Spa</h5>
                        <h6 class="mb-4">$500/ngày</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Đặc trưng</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 2 Giường </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 2 Phòng tắm </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Ban công </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 3 Sofa </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Tiện nghi</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> Wifi </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> Tivi </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> Máy lạnh </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> Tủ lạnh </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Số lượng khách tối đa</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 5 người lớn </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap"> 4 trẻ em </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Xếp hạng</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt phòng</a>
                            <a href="#" class="btn btn-sm btn-outline-dark custom-bg shadow-none">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Xem thêm>>></a>
            </div>
        </div>
    </div>

    <!-- Our facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Tiện ích</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" alt="" />
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/air-conditor.svg" width="80px" alt="" />
                <h5 class="mt-3">Máy lạnh</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/masage.svg" width="80px" alt="" />
                <h5 class="mt-3">Massage</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/TV.svg" width="80px" alt="" />
                <h5 class="mt-3">TV</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/pool.png" width="80px" alt="" />
                <h5 class="mt-3">Hồ bơi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Xem thêm>>></a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Đánh giá</h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px" alt="" />
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt magnam perspiciatis iure.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px" alt="" />
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt magnam perspiciatis iure.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px" alt="" />
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt magnam perspiciatis iure.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Reach us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Liên hệ</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6317112758893!2d106.68029371411639!3d10.762840862388996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1c06f4e1dd%3A0x43900f1d4539a3d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaG9hIGjhu41jIFThu7Egbmhpw6puIC0gxJDhuqFpIGjhu41jIFF14buRYyBnaWEgVFAuSENN!5e0!3m2!1svi!2s!4v1676908226715!5m2!1svi!2s"
                    height="320px" loading="lazy" class="w-100 rounded"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Số điện thoại</h5>
                    <a href="tel: 0916064500" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0916064500
                    </a>
                    <br />
                    <a href="tel: 0385822122" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0385822122
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Theo dõi</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2"> <i class="bi bi-github me-1"></i>Github </span>
                    </a>
                    <br />
                    <a href="#" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2"> <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    });
    var swiper = new Swiper('.swiper-testimonials', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        slidesPerView: '3',
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
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
        },
    });
    </script>
</body>

</html>