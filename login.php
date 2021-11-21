<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/login.css">
    <link rel="icon" type="image/png" href="../../images/logo.png">
    <title>Halaman Login</title>
</head>

<body>
    <div class="Login">
        <h1>LOGIN</h1>
        <ul>
            <h2>Belum memiliki akun?<a href="./daftar.html">DAFTAR</a></h2>
        </ul>
        <?php 
            if(isset($_POST['result'])) {
                $name = $_POST['nama'];
                $password = $_POST['password'];
            }
        ?>
        
        <form action="login.php" method="POST">
            <label>Username / Email</label><br>
            <input type="text" name="nama" placeholder="Nama"><br>
            
            <label>Password</label><br>
            <input type="password" name="password"><br>
            <button type="submit" name="result">LOG IN</button>
            <div class="result">
                <p><?php
                if(isset($_POST['result'])) {
                    echo $name. '<br/>';
                    echo $password;
                }
        ?></p>
            </div>
        </form>
    </div>
</body>

</html>