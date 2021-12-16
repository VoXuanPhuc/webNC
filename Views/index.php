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
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- app css -->
    <link rel="icon" href="<?php echo URL; ?>public/images/logo/BAEShop_transparent.png">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/app.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/grid.css">
    <link rel="stylesheet" href="../public/css/app.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/css/grid.css?v=<?php echo time(); ?>">

    <style>

        /* .centent{
            display: none;
        } */

        .loader{
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            background: #d1eaf8;
            position: absolute;
        }

        .loader>div{
            height: 40px;
            width: 40px;
            border: 5px solid #45474b;
            border-top-color: #2a88e6;
            position: absolute;
            margin: auto;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 50%;
            animation: spin 0.5s infinite linear;
        }

        @keyframes spin {
            100%{
                transform: rotate(360deg);
            }
        }
    </style>

</head>

<body style="background: #d1eaf8">
    <div class="loader">
        <div>

        </div>
    </div>

    <div class="centent">
        <?php
        require_once('Views/header_footer/header.php');
        ?>

        <?php
        require_once('dieuhuong.php');
        ?>

        <?php
        require_once('Views/header_footer/footer.php');
        ?>
    </div>
    <script>
        $(window).on('load', function(){
            $('.loader').fadeOut(1500);
            $('.content').fadeIn(1000);
        });
    </script>


    <!-- app js -->
    <script src="<?php echo URL; ?>public/js/index.js"></script>
    <script src="<?php echo URL; ?>public/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>