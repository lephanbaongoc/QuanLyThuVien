<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thư Viện</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #004080;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .content {
            padding: 20px;
        }
        .submenu {
            padding: 10px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .submenu a {
            color: #007bff;
            text-decoration: none;
        }
        .submenu a:hover {
            text-decoration: underline;
        }
        footer {
            background-color: #004080;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Thư Viện Đại Học Nha Trang</h1>
</header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="introduction.php">Giới thiệu chung</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Chức năng và nhiệm vụ</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Nhân sự</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Thời gian làm việc</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sơ đồ Thư viện</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Thư viện hiện đại</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Thư viện số ĐHNT</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container content">
    <h2>Giới Thiệu Chung</h2>
    <p>Thư viện Đại học Nha Trang cung cấp một không gian học tập hiện đại, hỗ trợ sinh viên, giảng viên trong quá trình học tập và nghiên cứu. Với hơn 100,000 đầu sách và tài liệu tham khảo, thư viện là nơi lý tưởng để tìm kiếm thông tin và học tập.</p>

    <h3>Chức Năng và Nhiệm Vụ</h3>
    <p>Thư viện có nhiệm vụ quản lý và bảo quản tài liệu học thuật, hỗ trợ sinh viên và giảng viên trong việc tìm kiếm tài liệu tham khảo và nghiên cứu khoa học.</p>

    <h3>Nhân Sự</h3>
    <p>Đội ngũ nhân sự của thư viện luôn sẵn sàng hỗ trợ người dùng trong việc tra cứu và mượn tài liệu.</p>

    <h3>Thời Gian Làm Việc</h3>
    <ul>
        <li>Thứ Hai - Thứ Sáu: 7:30 - 17:30</li>
        <li>Thứ Bảy: 8:00 - 12:00</li>
        <li>Chủ Nhật: Nghỉ</li>
    </ul>

    <h3>Sơ Đồ Thư Viện</h3>
    <p>Thư viện bao gồm các khu vực: khu vực đọc sách, khu vực tham khảo, khu vực máy tính và khu vực thư viện số.</p>

    <h3>Thư Viện Số ĐHNT</h3>
    <p>Thư viện số cung cấp tài liệu điện tử, phục vụ người dùng từ xa thông qua các thiết bị cá nhân.</p>
</div>

<footer>
    &copy; 2024 Thư Viện Đại Học 
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
