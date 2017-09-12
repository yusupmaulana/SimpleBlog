<?php
require_once "core/init.php";
require_once "view/header.php";

$articles = tampilkan();
// die(print_r($articles));

?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('asset/img/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>SimpleBlog</h1>
              <span class="subheading">Created by Yusup Maulana</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php while($row = mysqli_fetch_assoc($articles)): ?>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title"><?=$row['judul'];?></h2>
            </a>
            <p><?=$row['isi'];?></p>
            <p class="post-meta">Diposting: <?=$row['waktu'];?></p>
            <p class="post-meta">Tag: <?=$row['tag'];?></p>
          </div>
          <hr>
        <?php endwhile; ?>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>
<?php require_once "view/footer.php"; ?>
