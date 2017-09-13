<?php
require_once "core/init.php";
require_once "view/header.php";

$error="";

if( isset($_POST['submit']) ){
  $judul = $_POST['judul'];
  $isi   = $_POST['isi'];
  $tag = $_POST['tag'];
  // die($judul."".$isi."".$tag);
  if ( !empty(trim($judul)) && !empty(trim($isi))) {

    if (tambah_data($judul, $isi, $tag)) {
        header('Location: index.php');
    }else {
        $error = "ada masalah saat menambah data";
    }
  }else {
    $error = "judul dan isi tidak boleh kosong";
  }
}

?>
<div class="container formCust">
  <form action="" method="post">

    <div class="form-group">
      <label for="judul">Judul</label><br>
      <input type="text" name="judul" class="form-control">
    </div>

    <div class="form-group">
      <label for="isi">Isi</label><br>
      <textarea name="isi" class="form-control" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group">
      <label for="tag">Tag</label><br>
      <input type="text" name="tag" class="form-control"><br>
    </div>

    <div id="error"><?=$error ?></div><br>

    <input type="submit" name="submit" class="btn btn-default" value="submit">
  </form>
</div>

<?php
require_once "view/footer.php";
?>
