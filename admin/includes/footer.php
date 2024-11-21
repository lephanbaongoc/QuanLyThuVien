<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .footer {
            background-color: #0a75ad;
            color: white;
            padding: 20px;
            position: relative;
            display: flex;
            justify-content: space-between;
        }
        .footer .left, .footer .right {
            display: inline-block;
            vertical-align: top;
        }
        .footer .left {
            width: 70%;
        }
        .footer .right {
            width: 25%;
        }
        .footer .logo {
            display: flex;
            align-items: center;
        }
        .footer .logo img {
            height: 80px;
            margin-right: 15px;
        }
        .footer .info p {
            margin: 5px 0;
        }
        .footer .stats p {
            margin: 5px 0;
        }
        .footer .social-icons a {
            margin-left: 10px;
            color: white;
            text-decoration: none;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="footer">
        <div class="left">
            <div class="logo">
                <img src="" alt="">
                <div class="info">
                    <p><strong>Bản quyền thuộc về nhóm 3</strong></p>
                    <p>Địa chỉ: Số 2 Nguyễn Đình Chiểu - Nha Trang - Khánh Hòa</p>
                    <p>Email: thuvien@ntu.edu.vn</p>
                    <p>Điện thoại: </p>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="stats">
                <p>Hôm nay: <?php echo date("d M Y"); ?></p>
                <p>Người dùng online: <?php echo rand(1000, 2000); ?></p>
                <p>Tháng này: <?php echo number_format(rand(1000000, 3000000)); ?></p>
                <p>Tổng lượt truy cập: <?php echo number_format(rand(10000000, 20000000)); ?></p>
            </div>
            <div class="social-icons">
                <!-- Replace text with Font Awesome icons -->
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</body>
</html>
