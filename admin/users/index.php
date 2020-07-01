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

    <title>Admin Section - Manage Users</title>



  </head>
  <body>
    
  <?php include("../../app/includes/adminHeader.php"); ?>

  <div class="admin-wrapper">

  <?php include("../../app/includes/adminSidebar.php"); ?>
    
  <div class="admin-content">
<div class="button-group">
  <a href="create.php" class="btn btn-big">Add Users</a>
  <a href="index.php" class="btn btn-big">Manage Users</a>
  
</div>

<div class="content">

   <h2 class="page-title">Manage Users</h2>
   <?php include("../../app/includes/messages.php") ?>
   <table>
     <thead>
       <th>SN</th>
       <th>Username</th>
       <th>Email</th>
       <th colspan="2">Action</th>
     </thead>
     <tbody>
       <?php foreach ($admin_users as $key => $user): ?>
        <tr>
         <td><?php echo $key +1;?></td>
         <td><?php echo $user['username'];?></td>
         <td><?php echo $user['email'];?></td>
         <td><a href="edit.php?id=<?php echo $user['id'];?>" class="edit">edit</a></td>
         <td><a href="index.php?delete_id=<?php echo $user['id'];?>" class="delete">delete</a></td>
       </tr>
       <?php endforeach; ?>
       
       
     </tbody>
   </table>

</div>
</div>





<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- CKEDITOR-->
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

<!-- Custom Script -->
<script src="../../assets/js/scripts.js"></script>


</html>
