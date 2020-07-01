<?php include("../../path.php"); ?>
<?php include("../../app/controllers/posts.php"); ?>

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

    <title>Admin Sekmesi - Paylaşım Ekleme</title>
  </head>
  <body>
    
  <?php include("../../app/includes/adminHeader.php"); ?>
    
<div class="admin-wrapper">

  <div class="admin-content">
    
<div class="button-group">
<?php if($_SESSION['admin']):?>
  <a href="create.php" class="btn btn-big">Paylaşım Ekle</a>
    <a href="index.php" class="btn btn-big">Paylaşımları Yönet</a>
          <?php endif; ?>
  
  
</div>

<div class="content">

   <h2 class="page-title">Paylaşım Ekle</h2>

   <?php include("../../app/helpers/formErrors.php");?>


   <form action="create.php" method="post" enctype="multipart/form-data">
       <div>
           <label>Konu Başlığı</label>
           <input type="text" name="title" value="<?php echo $title?>" class="text-input">
       </div>
       <div>
        <label>Konu İçeriği </label>
        <textarea name="body" id="body" value="<?php echo $body?>"></textarea>
    </div>
    <div>
    <label>Görsel</label>
    <input type="file" name="image" class="text-input"> 
    </div>
    <div>
    <label>Steam Linki:</label>
    <input type="text" name="steam" value="<?php echo $steam?>" class="text-input"> 
    </div>
    <div>
    <label>Resmi Sayfa Linki:</label>
    <input type="text" name="offical"value="<?php echo $offical?>"  class="text-input"> 
    </div>
    <div>
        <label>Kategori</label>
        <select name="topic_id" class="text-input">
        <option value=""></option>
            <?php foreach ($topics as $key => $topic): ?>
              <?php if (!empty($topic_id)&& $topic_id == $topic['id']):?>
                <option selected value="<?php echo $topic['id'] ?> "><?php echo $topic['name']?></option>
              <?php else :?> 
                <option value="<?php echo $topic['id'] ?> "><?php echo $topic['name']?></option>
              <?php endif ;?> 

            <?php endforeach;?>


        </select>
    </div>
    <div>
      <?php if (empty($published)):?>
      <label>
        <input type= "checkbox" name="published">
        Yayımla
      </label>
      <?php else:?>
        <label>
        <input type= "checkbox" name="published" checked>
        Yayımla
      </label>
      <?php endif; ?>
    </div>          
    
    <div>
      <button type="submit" name="add-post" class="btn btn-big">Paylaş</button>
    </div>
   </form>

</div>
</div>
<!--admin content-->

</div>





<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- CKEDITOR-->
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

<!-- Custom Script -->
<script src="../../assets/js/scripts.js"></script>


</html>
