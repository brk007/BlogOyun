<?php include("path.php");
include(ROOT_PATH ."/app/database/db.php");



if (isset($_GET['t_id'])){
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name']."'";

}else{
  $posts=getPublishedPosts();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Blog</title>
  </head>
  <body>
    
  <?php include (ROOT_PATH ."/app/includes/header.php");?>
  <?php include (ROOT_PATH ."/app/includes/messages.php");?>
  
<div class="page-wrapper">
    <div class="post-slider">
    <h1 class="slider-title">Popüler</h1>
    <i class="fa fa-chevron-left prev"></i>
    <i class="fa fa-chevron-right next"></i>

    <div class="post-wrapper">

    <?php foreach($posts as $post): ?>
      <div class="post">
      <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
      <div class="post info">
        <h4><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></h4>
        <i class="fa fa-user"><?php echo $post['username'];?></i>
        &nbsp;
        <i class="fa fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at']));?></i>
      </div>
   </div>
    <?php endforeach;?>
      
   
</div>
</div>

<div class="content clearfix">

  <div class= "main-content">
    <h1 class="recent-post-title">Paylasımlar</h1>
     
    <?php foreach($posts as $post): ?>
    <div class= "post clearfix">
      <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>"  alt="" class="post-image">
      <div class= "post-preview">
        <h2><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></h2>
        <i class="fa fa-user"><?php echo $post['username'];?></i>
        &nbsp;
        <i class= "fa fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at']));?></i>
        <p class="preview-text"> <?php echo html_entity_decode(substr($post['body'],0,150)) ?></p>
        <a href="single.php?id=<?php echo $post['id'];?>" class="btn read-more">Devamı..</a>
      </div>
  </div>
    <?php endforeach; ?> 
    

  <div class="sidebar"></div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="assets/js/scripts.js"></script>

  </body>



</html>
