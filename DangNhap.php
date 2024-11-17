<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILL YOUR INFO TO LOGIN IN</title>
</head>
<body>
        <?php
            $username=$_POST['user'];
            $password=$_POST['pass'];
            if($username == "admin" && $password == "12345")
                echo "<font color=red>Welcome to our page, ".$username."</font>";
            else
                echo "<font color=red>Username hoặc Password sai. Vui lòng đăng nhập lại</font>;"
        ?>    

    <form action="" method="POST">
        Username: <input type="text" name="user" size="15"><br>
        Password: <input type="password" name="pass" size="15"><br>
        <input type="submit" name="submit" value="LOGIN">
    </form>

</body>
</html>