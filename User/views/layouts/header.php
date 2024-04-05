<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webthuctap</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="script.js"></script>
</head>
<body>
<!---------------------header------------------>
<header>
    <div class="top">
        <div class="container">
            <div class="header-top row">
                <p>TECHMU<span></span></p>
                <ul>
                    <!--<i class="fas fa-times"></i>-->
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="">Chiến lược</a></li>
                    <li><a href="">Hoạt động</a></li>
                    <li><a href="">Liên hệ</a></li>
                </ul>
                <!--<i class="fas fa-bars"></i>-->
            </div>
        </div>
    </div>
<!--    <div class="bg-image">-->
<!---->
<!--    </div>-->

</header>

</body>
</html>
<style>
    a{
        text-decoration: none;
        color: black;
    }
    li{
        list-style: none;

    }
    /*.container{*/
    /*    max-width: 1024px;*/
    /*    margin: auto;*/
    /*}*/
    /*.row{*/
    /*    display: flex;*/
    /*    flex-wrap: wrap;*/
    /*}*/
    header{
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100vw;
        height: 10vh;
        position: relative;
        /*background-color: seashell;*/
        /*background-image: url(assets/images/bg.jpg);*/
        background-color: black;
        opacity: 0.6;
        }
        /*.bg-image{*/
    /*    position: absolute;*/
    /*    content: "";*/
    /*    width: 100%;*/
    /*    height: 10%;*/
    /*    background-color: black;*/
    /*    opacity: 0.6;*/
    /*    background-color: seashell;*/
    /*}*/
    .top{
        position: absolute;
        width: 100%;
        z-index: 1;
    }
    .header-top{
        justify-content: space-between;
        padding: 12px 0;
        align-items: center;
    }
    .header-top p {
        font-family: var(--logo-text-font);
        font-size: 25px;
        letter-spacing: 2px;
        color: var(--main-color);

    }
    .header-top ul{
        display: flex;
    }
    .header-top ul li{
        margin-left: 12px;
        position: relative;

    }
    .header-top ul li::after{
        position: absolute;
        content: "";
        display: block;
        bottom: -2px;
        height: 4px;
        width: 0%;
        left: 50%;
        transform: translate(-50%);
        background-color: var(--main-color);
        border-radius: 5px;
        transition: all 0.5s ease;
    }
    .header-top ul li:hover::after{
        width: 100%;
    }
    .header-top ul li a{
        font-family: var(--main-text-font);
        color: black;
        black  font-weight: bold;
    }
    .header-top ul i{
        font-size: 32px;
        color: white;
        margin: 12px 0 0 12px;
        cursor: pointer;
        margin-bottom: 150px;
        display: none;
    }
    .header-top> i{
        font-size: 32px;
        color: var(--main-color);
        cursor: pointer;
    }

</style>