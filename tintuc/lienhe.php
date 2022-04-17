<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .contact-container {
            background: white;
            padding: 1rem 1rem 2rem 1rem;
        }

        .contact-container .contact-form {
            padding: 1rem 2rem 2rem 1rem;
            display: flex;
            flex-direction: row;
            gap: 2.5rem;
            justify-content: space-between;

        }

        .contact-container .contact-form .info-contact {
            width: 40%;
        }

        .contact-container .contact-form .info-contact p {
            padding: .8rem 0;
        }

        .contact-container .contact-form .ct-form {
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="contact-container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="index.php" class="breadcrumbs__url">Trang chủ</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="index.php" class="breadcrumbs__url breadcrumbs__item--current">Liên hệ</a>
        </ul>
        <div class="contact-form">
            <div class="info-contact">
                <h3>Thông tin liên hệ</h3>
                <p><i class="fas fa-home"></i> <b>Tòa soạn và trị sự</b> <br>
                    Số 60A, Hoàng Văn Thụ, Phường 9, Quận Phú Nhuận, Thành phố Hồ Chí Minh, Việt Nam</p>
                <p><i class="fas fa-phone"></i> <b>Hotline</b><br> 0121 456 789 - 0121 456 789</p>
                <p><i class="far fa-envelope"></i> <b>E-mail</b><br> baomoi-toasoan@news.com</p>
            </div>
            <div class="ct-form">
                <h3>Liên hệ với chúng tôi</h3>
                <form action="">
                    <div class="formfield">
                        <hr>
                        <div class="form-group">
                            <input type="text" placeholder="Nhập họ tên..." name="hoten" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Nhập email..." name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Tiêu đề" name="tieude" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea id="info" placeholder="Nội dung" name="content" rows="4" cols="50"></textarea>
                        </div>
                        <div>
                            <a href="#" class="btn btn-lg btn-color">
                                <span>Gửi ngay !</span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!--bản đồ-->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4554866414387!2d106.68559431437014!3d10.776383992321545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1810bfa3cd%3A0x1346cc31b200615f!2zQsOhbyBUaGFuaCBOacOqbg!5e0!3m2!1svi!2s!4v1627311420768!5m2!1svi!2s" width="770" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

</body>

</html>