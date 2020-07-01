<?php include("../../path.php"); ?>
<?php include("../../app/controllers/usersAdmin.php");?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" contetn="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">

  
     <link rel="stylesheet" href="../../assets/css/style.css">
   
     <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Add Users</title>
  </head>
  <body>
    
  <?php include("../../app/includes/adminHeader.php"); ?>
    
<div class="admin-wrapper">

  <?php include("../../app/includes/adminSidebar.php"); ?>

  <div class="admin-content">
<div class="button-group">
  <a href="create.php" class="btn btn-big">Add User</a>
  <a href="index.php" class="btn btn-big">Manage User</a>
  
</div>

<div class="content">

   <h2 class="page-title">Add User</h2>

   <?php include("../../app/helpers/formErrors.php")?>
   <form action="create.php" method="post">
    <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username?>" class="text-input">
        </div>
        <div>
          <label>Email</label>
          <input type="text" name="email" value="<?php echo $email?>" class="text-input">
          </div>
          <div>
          <label>Password</label>
          <input type="password" name="password" value="<?php echo $password?>" class="text-input">
          </div>
          <div>
          <label>Password Confirmation</label>
          <input type="password" name="passwordConf" value="<?php echo $password?>" class="text-input">
          </div>
          <div>

          <?php if (isset($admin) &&  $admin == 1):?>
            <label>
              <input type="checkbox" name="admin" checked>
              Admin
            </label>
          <?php else: ?>
            <label>
              <input type="checkbox" name="admin">
              Admin
            </label>
          <?php endif;?>
        </div>
        <div>
          <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
        </div>  
   </form>

</div>
</div>

</div>





<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- CKEDITOR-->
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

<!-- Custom Script -->
<script src="../../assets/js/scripts.js"></script>


</html>
