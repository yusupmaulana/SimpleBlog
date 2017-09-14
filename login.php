<?php
require_once "core/init.php";

$error ='';

//redirect kalau user sudah login
if(isset($_SESSION['user'])) {
  header('Location: index.php');
}

//validasi register
if (isset($_POST['submit'])) {
  $nama = $_POST['username'];
  $pass = $_POST['password'];

  if(!empty(trim($nama)) && !empty(trim($pass)) ){

    if ( cek_nama($nama) != 0) {
      // die('nama tersedia');
      if(cek_data($nama, $pass)) redirect_login($nama);
      else $error = "nama atau password ada yang salah";

    }else $error = "nama belum terdaftar";

  }else $error = "nama atau password tidak boleh kosong";
}



require_once "view/header.php";
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('asset/img/contact-bg.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>Login</h1>
          <span class="subheading">Kamu dapat menulis artikel jika telah login</span>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container formCust">
    <?php if($error !=''){ ?>
      <div id="error">
        <?= $error; ?>
      </div>
    <?php } ?>
    <form action="" method="post">

      <div class="form-group">
        <label for="">Nama</label><br>
        <input type="text" name="username" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Password</label><br>
        <input type="password" name="password" class="form-control">
      </div>

      <input type="submit" name="submit" class="btn btn-default" value="login">

    </form>
</div>

<?php require_once "view/footer.php" ?>
