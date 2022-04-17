<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
    <style>
        .info-container{
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 2px rgb(0 0 0 / 10%);
            padding: 2rem 2rem 4rem 2rem;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
        }

        .info-container .info{
            width: 40%;
        }

        .info-container .image-info{
            text-align: center;
            width: 50%;
        }
        .info-container .info span{
            font-weight: bold;
        }
        .info-container .image-info img{
            width: 50%;
            border-radius: 360px;
        }
    </style>
</head>
<body>
    <!-- Breadcrumbs -->
    <div class="container">
      <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
          <a href="index.php" class="breadcrumbs__url">Trang chủ</a>
        </li>
        <li class="breadcrumbs__item">
          <a href="index.php" class="breadcrumbs__url breadcrumbs__item--current">Giới thiệu</a>
      </ul>
    </div>
    
    <div class="info-container">
        <div class="info">
            <h2>Giới thiệu</h2>
            <p><span>Họ tên:</span> Nguyễn Hoàng Thúy Mai</p>
            <p><strong>MSSV: </strong>PS15288</p>
            <p><strong>Lớp:</strong> WD-16301. Chuyên ngành Web</p>
            <p><strong>Email:</strong> mainhtps15288@fpt.edu.vn</p>
            <p><strong>Sdt:</strong> 0963 777 027</p>
            <a href="quantri/index.php">Đến trang quản trị 	&rarr;</a>

        </div>

        <div class="image-info">
            <img src="img/content/ava.jpg" alt="">
        </div>

    </div>
</body>
</html>