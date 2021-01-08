<?php include("../../path.php"); ?>
<?php include("../../app/controllers/posts.php"); ?>
<?$posts=getPublishedPosts();?>

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

    <title>Admin Sekmesi - Paylasımları Yönet</title>
  </head>
  <body>
    
  <?php include("../../app/includes/adminHeader.php"); ?>

  <div class="admin-wrapper">
    
  <div class="admin-content">
<div class="button-group">
  <a href="create.php" class="btn btn-big">Paylaşım Ekle</a>
  <a href="index.php" class="btn btn-big">Paylaşımları Yönet</a>
  
</div>

<div class="content">

   <h2 class="page-title">Paylasimlar</h2>

   <?php include("../../app/includes/messages.php") ?>
     
   
   <table>
     <thead>
       <th>Paylaşım No</th>
       <th>Başlık</th>
       <th>Yazar ID</th>
       <th colspan="3"></th>
     </thead>
     <tbody>
       <?php foreach($posts as $key => $post): ?>
       <tr>
          
         <td><?php echo $key +1;?></td>
         <td><?php echo $post['title']?></td>
         <td><?php echo $post['user_id']?></td>
         <td><a href="edit.php?id=<?php echo $post['id'];?>" class="edit">Düzenle</a></td>
         <td><a href="edit.php?delete_id=<?php echo $post['id'] ?>" class="delete">Sil</a></td>
         <?php if ($post["published"]): ?>
         <td><a href="edit.php?published=0&p_id=<?php echo $post['id']?>" class="unpublish">Yayından Kaldır</a></td>
         <?php else: ?>
         <td><a href="edit.php?published=1&p_id=<?php echo $post['id']?>" class="unpublish">Yayınla</a></td>
         <?php endif; ?>
       </tr>
         <?php endforeach;?>
       
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
