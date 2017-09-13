<?php
require_once "core/init.php";
require_once "view/header.php";

$error="";
$id = $_GET['id'];
if( isset($_GET['id']) ){
  $article = tampilkan_per_id($id);
  while($row = mysqli_fetch_assoc($article)){
    $judul_awal = $row['judul'];
    $isi_awal   = $row['isi'];
    $tag_awal   = $row['tag'];
    $waktu      = $row['waktu'];
  }
}
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('asset/img/post-bg.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><?=$judul_awal;?></h1>
          <span class="meta">Tag: <?=$tag_awal;?></span>
          <span class="meta">Diposting pada: <?=$waktu;?></span>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container formCust">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <p id="isi_single"><?=$isi_awal; ?></p><br>
    </div>
  </div>
</div>

<?php
require_once "view/footer.php";
?>
