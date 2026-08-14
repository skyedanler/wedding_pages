<?php $activePage = basename($_SERVER['PHP_SELF']); ?>

<header>
    <div class="header-fun">
      <img src="photos/orange-swirl.png" class="swirl1" alt=""">
      <h1>Skye & Zach</h1>
      <img src="photos/orange-swirl.png" class="swirl2" alt=""">
    </div>
    <div class="date">
      
      <!--under title stuff-->
      <h2>
        <time datetime="2027-08-21T15:00">08.21.2027</time>
      </h2>
      <p> | </p>
      <h2 id="countdown"></h2>
      
    </div>
  </header>
  <nav class="menu">
  <a href="?index.php" class="<?= ($activePage == 'index.php') ? 'active' : ''; ?>">Details</a>
  <a href="?photos.php" class="<?= ($activePage == 'photos.php') ? 'active' : ''; ?>">Photos</a>
  <a href="?faq.php" class="<?= ($activePage == 'faq.php') ? 'active' : ''; ?>">Q+A</a>
  <a href="?registry.php" class="<?= ($activePage == 'registry.php') ? 'active' : ''; ?>">Registry</a>
    </nav>
