<?php
require_once "core/init.php";
require_once "view/header.php";

$error="";
//redirect kalau user belum login
if(!isset($_SESSION['user'])) {
  header('Location: login.php');
}

$id = $_GET['id'];



if( isset($_GET['id']) ){
  $article = tampilkan_per_id($id);
  while($row = mysqli_fetch_assoc($article)){
    $judul_awal = $row['judul'];
    $isi_awal   = $row['isi'];
    $tag_awal   = $row['tag'];
  }
}



if( isset($_POST['submit']) ){
  $judul = $_POST['judul'];
  $isi   = $_POST['isi'];
  $tag = $_POST['tag'];
  // die($judul."".$isi."".$tag);
  if ( !empty(trim($judul)) && !empty(trim($isi))) {

    if (edit_data($judul, $isi, $tag, $id)) {
        header('Location: index.php');
    }else {
        $error = "ada masalah saat update data";
    }
  }else {
    $error = "judul dan isi tidak boleh kosong";
  }
}

?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('asset/img/post-sample-image.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>Edit Artikel</h1>
          <span class="subheading">Manusia tidak luput dari kesalahan. Mari menjadi lebih baik!</span>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container formCust">
  <form action="" method="post">

    <div class="form-group">
      <label for="judul">Judul</label><br>
      <input type="text" name="judul" class="form-control" value="<?=$judul_awal;?>">
    </div>

    <div class="form-group">
      <label for="isi">Isi</label><br>
      <textarea name="isi" class="form-control" rows="8" cols="80"><?=$isi_awal;?></textarea>
    </div>
    <div class="form-group">
      <label for="tag">Tag</label><br>
      <input type="text" name="tag" class="form-control" value="<?=$tag_awal;?>"><br>
    </div>

    <div id="error"><?=$error ?></div><br>

    <input type="submit" name="submit" class="btn btn-default" value="update">
  </form>
</div>

<?php
require_once "view/footer.php";
?>
