<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  include "include/include_header.php";
  ?>
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.jpg" alt="" style="max-width: 112px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <?php
            include "nav_bar.php";
            ?>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>ความชื่นชอบแนวเพลงและศิลปินที่มีอิทธิพลต่อผู้ฟัง</h6>
            <div class="line-dec"></div>
            <h4>Favorite Music <em>Genres and Influential</em> Artists:<span>Listener's Perspective</span></h4>
            <p>มาลองทำแบบทดสอบเพลง เพื่อให้รู้แนวเพลงที่คุณชื่นชอบ </p>
            <div class="main-button scroll-to-section"><a href="login.php">กดเพื่อทำแบบทดสอบ</a></div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
     include "include/include_script.php";
     ?>

</body>

</html>