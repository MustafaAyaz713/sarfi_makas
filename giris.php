<?php

include("baglanti.php");

if(isset($_POST["giris"]))
{
    $mail = $_POST['mail'];
    $parola = $_POST['parola'];

    $sorgu = "SELECT * FROM kullanicilar WHERE mail='$mail' AND parola='$parola'";
    $sonuc = mysqli_query($connection, $sorgu);

    if (mysqli_num_rows($sonuc) > 0) {
    // Giriş başarılı olduğunda kullanıcı adını session'a kaydet
    session_start();
    $kullanici = mysqli_fetch_assoc($sonuc);
    $_SESSION['kullaniciadi'] = $kullanici['kullanici_adi']; // Assuming 'kullanici_adi' is the column name for the username in the 'kullanicilar' table
    header("Location: index.php");
    exit();
} else {
    echo '<div class="alert alert-danger" role="alert">Geçersiz e-posta veya parola.</div>';
}

}

mysqli_close($connection);
?>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var registerBtn = document.querySelector('.register-btn');
        registerBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = 'kayit.php';
        });
    });
</script>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sarfi Makas Giris</title>
   
    <link rel="stylesheet" href="css/giris.css">
    <!-- favicon-->
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
  </head>
  <body>
  <div class="container">
  
  <div class="wrapper">
    <form action="giris.php" method="POST">
      <h1>GİRİŞ YAP</h1>
      <p>Eğer zaten üyeysen, kolayca giriş yap...</p>
      <input type="email" id="email" placeholder="E-Mail" name="mail">
      <div class="pass-icon">
        <input type="password" id="password" placeholder="Şifre" name="parola">
        <img src="https://cdn.pixabay.com/photo/2016/12/18/11/04/eye-1915454_960_720.png">
      </div>
      
      <a href="#">Şifremi Unuttum</a>
      <input type="submit" id="login-btn" value="Login" name="giris">
      <div class="or">
        <hr>
        <span>OR</span>
        <hr>
      </div>
      <button class="google-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
  <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
</svg>
        Login with Google
      </button>
      <div class="register">
        <p>Eğer Hesabın Yoksa</p>
        <button class="register-btn">Kayıt Ol</button>

      </div>
    </form>  

  </div>
  
  <div class="main-img"></div>
</div>
  </body>
</html>