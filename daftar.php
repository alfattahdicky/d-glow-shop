<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="./style/signup.css" />
    <link rel="icon" type="image/png" href="../../images/logo.png" />
    <title>Daftar</title>
  </head>

  <body>
    <div class="formdaftar">
      <h1>DAFTAR</h1>
      <form action="daftar.php" method="POST">
        <label>Nama Depan</label>
        <br />
        <input type="text" name="front-name" />
        <br />
        <label>Nama Belakang</label>
        <br />
        <input type="text" name="back-name" />
        <br />
        <label>Nomor Telepon</label>
        <br />
        <input type="text" name="phone" />
        <br />
        <label>Jenis Kelamin</label>
        <br />
        <input type="text" name="gender" />
        <br />
        <label>Email</label>
        <br />
        <input type="text" name="email" />
        <br />
        <label>Username</label>
        <br />
        <input type="text" name="username" />
        <br />
        <label>Password</label>
        <br />
        <input type="password" name="password" />
        <br />
        <label>Confirm Password</label>
        <br />
        <input type="password" name="confirm-password" />
        <br />
        <button type="submit" name="daftar">DAFTAR</button>
          <?php
            if(isset($_POST['daftar'])) {
              $front_name = $_POST['front-name'];
              $back_name = $_POST['back-name'];
              $gender = $_POST['gender'];
              $phone = $_POST['phone'];
              $email = $_POST['email'];
              $password = $_POST['password'];
              $confirm_password = $_POST['confirm-password'];

              if($gender === "Laki" || $gender === "Wanita") {
                $gender;
              }

              if($password === $confirm_password) {
                $result = $password;
              }
            }

          ?>
        <div class="result">

          <p><?php 
          if(isset($_POST['daftar'])) {
            echo $front_name . "<br/>";
            echo $back_name . "<br/>";
            echo $phone . "<br/>";
            echo $gender . "<br/>";
            echo $email . "<br/>";
            echo $result . "<br/>";
          }
          ?></p>
      </form>
    </div>
    
    
    <div class="gambar">
      <!-- <img src="./images/logo.png" alt="int logo" class="img-logo" /> -->
      <!-- <h3>Happy Shopping!</h3> -->
    </div>
    </div>
  </body>
</html>
