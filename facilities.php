<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Booking - FACILITIES</title>
    <?php require('inc/links.php'); ?>
    <style>
    .pop:hover {
        border-top-color: red !important;
        transform: scale(1.03);
        transition: all 0.3s;
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
        <div class="row">
            <?php
                $res=selectAll('facilities');
                $path=FEATURES_IMG_PATH;
                while($row=mysqli_fetch_assoc($res)){
                    echo<<<data
                     <div class="col-lg-4 col-md-6 mb-5 px-4">
                        <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="$path$row[icon]" width="40px" alt="" />
                            <h5 class="m-0 ms-3">$row[name]</h5>
                        </div>
                        <p>
                            $row[description]
                        </p>
                     </div>
                    </div>
                    data;
                }
            ?>


        </div>
    </div>

    <!-- Footer -->
    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>