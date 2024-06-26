<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liên hệ</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div>
<div class="main-contact">
    <div class="contactcenter">
        <div class="title-contact">
            <h2>Liên hệ với chúng tôi nhé!</h2>
            <div class="title-line"></div>
            <p>Số 26, ngách 132/86, Xóm Mới, TDP Nguyên Xá 2, Minh Khai, Bắc Từ Liêm, Hà Nội
            </p>
        </div>
        <div class="content-contact">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row12">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <i class="fas fa-user">
                            Họ và Tên</i>
                        <input type="text" name="name" id="name" placeholder="Your Name*"><br><br>
                        <i class="fas fa-phone">
                            Số Điện Thoại</i>
                        <input type="text" name="phone" id="phone"placeholder="phone number*">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <i class="fas fa-envelope">
                            Địa chỉ Email</i>
                        <input type="email" name="email" id="email" placeholder="Your Email*"><br><br>
                        <i class="fas fa-user">
                            Chủ Đề</i>
                        <input type="text" id="subject" name="subject" placeholder="Chủ Đề*">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <b>Ghi Nội Dung</b>
                        <textarea cols="20" rows="10" name="comment" id="comment" placeholder="Your Message*"></textarea>

                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" value="Gửi Tin Nhắn" class="btn btn-primary"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>

<style>
    .icon{

    }
    .row12{
        display: flex;
    }
    .col-12.col-sm-12.col-md-12.col-lg-12 {
        text-align: center;
        width: 950px;
        margin-top: 21px;
    }
    .main-contact {
        background: #daece8;
        padding: 80px 0;
        background-image: url(assets/images/contact.jpg);
        background-repeat:no-repeat;
        background-origin:border-box;
        background-size:cover;
        font-size: large;
        height: 949px;
    }
    .content-contact input, textarea {
        width: 100%;
        border-radius: 5px;
        border: none;
        color: black;
    }

    .title-contact h2 {
        color:white;
        text-align: center;
    }
    .title-contact .title-line {

    }
    .title-contact p {
        color: white;
        text-align: center;
    }
    .content-contact {
        margin-top: 50px;
        padding: 0 80px;
    }
    .content-contact .row {
        margin-bottom: 35px;
    }
    .content-contact input {
        height: 50px;
    }
    .content-contact input, textarea {
        width: 100%;
        border-radius: 5px;
        border: none;

    }
    .content-contact input::placeholder {
        color: #040415;
        padding: 0 20px;
    }
    .content-contact textarea::placeholder {
        color: #040415;
        padding: 10px 20px;
    }
    .load-moree{
        text-align: center;

    }
    .load-moree  button {
        margin-top: 20px;
        margin-bottom: 100px;
        text-transform: uppercase;
        padding: 10px 30px;
        color: #DCF3EE;
        background: black;
        border-radius: 10px;
        border: 0;
        border-bottom: 2px solid #0CA38B;
        text-align: center;

    }
    .contactcenter {
        text-align: center;
        display: block;
        width: 1080px;
        margin: auto;
    }
</style>