<header>
      <div class="logo">
        <h1 class="logo-text"><a href="<?php echo BASE_URL . '/index.php'?>">BlogOyun</a></h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
          <li>
            
            <a href="#">Kategoriler</a>
        <ul>
        
            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . 2 . '&name=' . 'Haber'?>">Haber</a></li>
            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . 3 . '&name=' . 'İnceleme'?>">İnceleme</a></li>
            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . 0 . '&name=' . 'İnceleme'?>">Blog</a></li>
            </ul>
          </li>
          <li><a href="contact.php">İletişim</a></li>

<?php if (isset($_SESSION['id'])):  ?>
         <li><a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username'];?>
            <i class="fa fa-chevron-down" style="font-size:.8em;"></i>
          </a>
          <ul>

          <li><a href="<?php echo BASE_URL . '/admin/posts/create.php'?>">Paylaşım</a></li>

          <li><a href="<?php echo BASE_URL . '/logout.php'?>" class="logout">Çıkış</a></li>
          </li>
<?php else: ?>
        <li><a href="<?php echo BASE_URL . '/register.php'?>">Kayıt</a></li>
         <li><a href="<?php echo BASE_URL . '/login.php'?>">Giris</a></li>

<?php endif; ?>
        </ul>
    </header>

