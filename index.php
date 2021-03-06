<?php
require_once "core/init.php";
require_once "view/header.php";

$super_user = $login = false;

if ( isset($_SESSION['user']) ) {
  $login = true;
  if ( cek_status($_SESSION['user']) == 1) {
    $super_user = true;
  }
}






$articles = tampilkan();
// die(print_r($articles));

if( isset($_GET['cari']) ){
  $cari     = $_GET['cari'];
  $articles = hasil_cari($cari);
}
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
    <?php if($login == true){ ?>
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <a href="add.php" class="btn btn-primary btn-md">
            <i class="fa fa-pencil-square-o fa-2x"></i>
            Tulis Artikel</a>
        </div>
      </div>
    <?php } ?>

      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <form action="" method="get">
            <div class="form-group">
              <input type="text" name="cari" class="form-control" placeholder="cari disini..">
            </div>
          </form>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php while($row = mysqli_fetch_assoc($articles)): ?>
          <div class="post-preview">
            <a href="single.php?id=<?=$row['id'];?>">
              <h2 class="post-title"><?=$row['judul'];?></h2>
            </a>
            <p><?=excerpt($row['isi']);?></p>
            <?php if($login == true){ ?>
              <a href="edit.php?id=<?=$row['id'];?>" class="btn btn-warning">Edit</a>
              <?php if($super_user == true){ ?>
                <a href="delete.php?id=<?=$row['id'];?>" class="btn btn-danger">Delete</a>
              <?php } ?>
            <?php } ?>
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
