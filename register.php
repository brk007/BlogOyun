<?php include("path.php")?>
<?php include("app/controllers/users.php") ?>


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

    <title>Kayıt</title>
  </head>
  <body>
  <?php include (ROOT_PATH . "/app/includes/header.php");?>
    </header>

<div class="auth-content">
<form action="register.php" method="post">
  <h2 class="form-title">Register</h2>
  <?php include (ROOT_PATH . "/app/helpers/formErrors.php");?>


<div>
  <label>Username</label>
  <input type="text" name="username" value="<?php echo $username;?>" class="text-input">
  </div>
  <div>
    <label>Email</label>
    <input type="text" name="email" value="<?php echo $email;?>" class="text-input">
    </div>
    <div>
    <label>Password</label>
    <input type="password" name="password" value="<?php echo $password;?>" class="text-input">
    </div>
    <div>
    <label>Password Confirmation</label>
    <input type="password" name="passwordConf" value="<?php echo $passwordConf;?>" class="text-input">
    </div>
    <div>
     <button type="submit" name="register-btn" class="btn btn-big">Register</button>
    </div>
    <p>Or <a href="<?php echo BASE_URL . '/login.php'?>">Sign In</a></p>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Custom Script -->
 <script src="assets/js/scripts.js"></script>

   </body>



 </html>
