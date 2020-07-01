<?php include("path.php")?>
<?php include(ROOT_PATH . "/app/controllers/users.php") ?>

 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" contetn="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Giriş</title>
  </head>
  <body>
  <?php include(ROOT_PATH . "/app/includes/header.php");?>
  <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>

<div class="auth-content">
<form action="login.php" method="post">
  <h2 class="form-title">Giris</h2>
<div>
  <label>Kullanici Adi</label>
  <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
  </div>
    <div>
    <label>Parola</label>
    <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
    </div>
    <div>
     <button type="submit" name="login-btn" class="btn btn-big">Giris</button>
    </div>
    <p>Ya da <a href="<?php echo BASE_URL . '/register.php'?>">Kayıt ol</a></p>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Custom Script -->
 <script src="assets/js/scripts.js"></script>

   </body>



 </html>
