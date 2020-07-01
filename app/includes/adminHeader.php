<header>
      <div class="logo">
        <h1 class="logo-text"><a href="../../index.php">BlogOyun</a></h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
        <?php if(isset($_SESSION['username'])):?>
            <li>
              <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']?>
            <i class="fa fa-chevron-down" style="font-size:.8em;"></i>
          </a>
          <ul>
          <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Çıkış</a></li>
        </ul>
          </li> 
        <?php endif;?>
        </ul>
      </header>