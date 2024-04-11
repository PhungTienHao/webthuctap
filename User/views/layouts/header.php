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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body>
<!---------------------header------------------>
<!--<header>-->
    <div class="top">
        <div class="container">
            <div class="header-top row">
                <div >
                    <a href="http://localhost/webthuctap/User/index.php?" >
                        <img class="logoheader" src="assets/images/logo.png" >
                    </a>
                </div>
                <ul>
                    <!--<i class="fas fa-times"></i>-->
                    <li><a href="">Trang chủ</a></li>
                    <li><div class="dropdown"> <a href="index.php?controller=home&action=aboutus">Về Chúng Tôi  </a>
                            <div class="dropdown-content">
                                <ul> <li><a title="123" href="#">1222</a></li> </ul>
                                 <ul>   <li><a title="123445" href="#">122345</a></li>
                                </ul>
                            </div>
                        </div>

                    </li>
                    <li><a href="index.php?controller=home&action=strategy">Chiến lược</a></li>
                    <li><a href="">Hoạt động</a></li>
                    <li><div class="dropdown"> <a href="">Dịch vụ</a>
                            <div class="dropdown-content">
                                <ul> <li><a title="" href="#">Quảng cáo và truyền thông</a></li> </ul>
                                <ul>   <li><a title="" href="#">Tư vấn thiết kế website</a></li> </ul>
                                <ul>   <li><a title="" href="#">dịch vụ tên miền và lưu trữ dữ liệu</a></li> </ul>
                                <ul> <li><a title="" href="#"> Giải pháp TMDT</a></li> </ul>
                                <ul> <li><a title="" href="#"> Giải pháp bảo mật an ninh ATTTM</a></li> </ul>

                            </div>
                        </div>
                    </li>
                </ul>
                <!--<i class="fas fa-bars"></i>-->
            </div>
        </div>
    </div>
<!--    <div class="bg-image">-->
<!---->
<!--    </div>-->

<!--</header>-->

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
.top{
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
        height: auto;
    }
    .header-top{
        justify-content: space-between;
        padding: 32px 0;
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
        font-size: 19px;
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
    .dropdown {
        position: relative;
        display: inline-block;
        height: 50px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color:black;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;

    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
    .logoheader{
        height: 85px;
        margin-right: 520px;
    }
</style>