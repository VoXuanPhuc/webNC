<!DOCTYPE html>
<html lang="vi-vn">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng giày dép Lucky Shoe</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- app css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/app.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/grid.css">
    <link rel="stylesheet" href="../public/css/app.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/css/grid.css?v=<?php echo time(); ?>">
</head>

<body>

    <?php require_once('../Views/header_footer/header.php'); ?>
    <!-- products content bg-main -->
    <div class="">
        <div class="container">
            <div class="box">
                <div class="">
                    <a href="<?php echo URL; ?>">Trang chủ</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="<?php echo URL; ?>danhmuc/">Cửa hàng</a>
                </div>
            </div>
            <div class="box">
                <div class="row">

                    <?php require_once('category.php'); ?>

                    <?php require_once("list-products.php") ?>
                </div>
            </div>
        </div>
    </div>


    <!-- end products content -->
    <?php require_once("../Views/header_footer/footer.php"); ?>
    <script src="<?php echo URL; ?>public/js/index.js"></script>
    <script src="<?php echo URL; ?>public/js/app.js"></script>

</body>

</html>