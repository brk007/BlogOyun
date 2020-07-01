<?php include("path.php")?>
<?php include(ROOT_PATH . '/app/controllers/postssingle.php'); 

if(isset($_GET['id'])){
$post = selectOne('posts', ['id'=>$_GET['id']]);

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" contetn="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/style.css">

    <title><?php echo $post['title']; ?> | BlogOyun</title>
  </head>
  <body>
  <?php include (ROOT_PATH . "/app/includes/header.php");?>

<div class="page-wrapper">

  <div class="content clearfix">


    <div class= "single-content">
      <h1 class="post-title"><?php echo $post['title']; ?></h1>
      <div class="button-group">
      <a href="<?php echo $post['steam']?>" class="btn btn-big">Steam Sayfası</a>
      <a href="<?php echo $post['offical']?>" class="btn btn-big">Resmi Sayfası</a>
      </div>
      <div class="post-content">
        <p><?php echo html_entity_decode ($post['body']); ?></p>
        
    </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


 <script src="assets/js/scripts.js"></script>

   </body>



 </html>
