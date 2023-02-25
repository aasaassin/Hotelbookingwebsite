<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Booking - ROOM</title>
    <?php require('inc/links.php'); ?>

</head>

<body class="bg-light">
    <!-- Header -->
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Phòng</h2>
        <div class="bg-dark h-line"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Lọc</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filtersDropdown" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filtersDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px">Kiểm tra phòng trống</h5>
                                <label class="form-label">Ngày nhận phòng</label>
                                <input type="date" class="form-label shadow-none mb-3" />
                                <label class="form-label">Ngày trả phòng</label>
                                <input type="date" class="form-label shadow-none" />
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px">Tiện ích</h5>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id="f1" />
                                    <label for="f1" class="form-check-label">Wifi</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id="f2" />
                                    <label for="f2" class="form-check-label">Hồ bơi</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id="f3" />
                                    <label for="f3" class="form-check-label">Máy lạnh</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id="f4" />
                                    <label for="f4" class="form-check-label">TV</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px">Số lượng khách hàng</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Người lớn</label>
                                        <input type="number" class="form-control shadow-none" />
                                    </div>
                                    <div>
                                        <label class="form-label">Trẻ em</label>
                                        <input type="number" class="form-control shadow-none" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded-start" />
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5>Roseland Sweet Hotel & Spa</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Đặc trưng</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 2 Giường </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 2 Phòng tắm </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Ban công </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 3 Sofa </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Tiện nghi</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Wifi </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Tivi </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Máy lạnh </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Tủ lạnh </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Số lượng khách tối đa</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 5 người lớn </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 4 trẻ em </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4">$500/ngày</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt phòng</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark custom-bg shadow-none">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/2.jpg" class="img-fluid rounded-start" />
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5>Roseland Sweet Hotel & Spa</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Đặc trưng</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 2 Giường </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 2 Phòng tắm </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Ban công </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 3 Sofa </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Tiện nghi</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Wifi </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Tivi </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Máy lạnh </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Tủ lạnh </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Số lượng khách tối đa</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 5 người lớn </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 4 trẻ em </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4">$500/ngày</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt phòng</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark custom-bg shadow-none">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/3.jpg" class="img-fluid rounded-start" />
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5>Roseland Sweet Hotel & Spa</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Đặc trưng</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 2 Giường </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 2 Phòng tắm </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 1 Ban công </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 3 Sofa </span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Tiện nghi</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Wifi </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Tivi </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Máy lạnh </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> Tủ lạnh </span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Số lượng khách tối đa</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 5 người lớn </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap"> 4 trẻ em </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4">$500/ngày</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Đặt phòng</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark custom-bg shadow-none">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>