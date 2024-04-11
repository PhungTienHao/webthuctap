<?php
//
//require_once 'controllers/ProductController.php';
//require_once 'models/Product.php';
//require_once 'controllers/HomeController.php';
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $_SERVER['SCRIPT_NAME'] ?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TECHMU</title>


    <link rel="canonical" href="http://localhost"/>
    <link rel="alternate" href="http://localhost" hreflang="vi-vn"/>

    <meta name="robots" content="index,follow,noodp">
    <meta name="author" content="http://localhost">
    <meta name="copyright" content="http://localhost"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="MVC Demo Frontend"/>
    <meta property="og:url" content="http://localhost"/>
    <meta property="og:site_name" content="http://localhost"/>
    <!-- SEO META DESCRIPTION -->
    <meta name="title" content="">
    <meta name="keywords" content="">
    <meta name="description" content=""/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900&amp;subset=latin-ext"
          rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/all.min.css"/>
    <!--<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Tooltip plugin (zebra) css file -->
    <link rel="stylesheet" href="assets/css/zebra_tooltips.min.css"/>
    <!-- Owl Carousel plugin css file. only used pages -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css"/>

    <!-- Ideabox responsive css file -->
    <link rel="stylesheet" href="assets/css/responsive-style.css"/>
    <!-- Ideabox main theme css file. you have to add all pages -->
    <link rel="stylesheet" href="assets/css/style.css"asp-append-version="true"/>

</head>
<body>
<div class="main">
<div class="anhhd">
    <div class="header-text">
        <h1 class="l1">TECHMU VIỆT NAM</h1>
        <p class="l1">CÔNG TY TNHH ĐÀO TẠO VÀ CHUYỂN GIAO CÔNG NGHỆ SỐ VIỆT NAM</p>
        <button class="l1">Tìm Hiểu Thêm</button>
    </div>
</div>
</div>
</body>
</html>
<style>
    .anhhd{
        background-image: url(assets/images/bg.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100vw;
        height: 100vh;
        position: relative;
    }
    .header-text{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 700px;
        min-width: 500px;
        text-align: center;
        color:black;
        font-size: x-large;
    }
    .l1{
    color:black;
    }
</style>



