<?php
require_once "core/init.php";

$error='';


//validasi register
if (isset($_POST['submit'])) {
  $nama = $_POST['username'];
  $pass = $_POST['password'];

  if(!empty(trim($nama)) && !empty(trim($pass)) ){

    if( cek_nama($nama) == 0){
      //memasukkan ke database
      if(register_user($nama, $pass)) header("Location: index.php");
      else $error = "gagal daftar";

    }else $error = "nama sudah dipakai user lain";

  }else $error = "nama atau password tidak boleh kosong";
}



require_once "view/header.php";
 ?>
 <!-- Page Header -->
 <header class="masthead" style="background-image: url('asset/img/about-bg.jpg')">
   <div class="container">
     <div class="row">
       <div class="col-lg-8 col-md-10 mx-auto">
         <div class="page-heading">
           <h1>Daftar Akun</h1>
           <span class="subheading">Segera ikut kontribusi di SimpleBlog!</span>
         </div>
       </div>
     </div>
   </div>
 </header>

<div class="container formCust">
    <form action="" method="post">

      <div class="form-group">
        <label for="">Nama</label><br>
        <input type="text" name="username" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Password</label><br>
        <input type="password" name="password" class="form-control">
      </div>

      <?php if($error !=''){ ?>
        <div id="error">
          <?= $error; ?>
        </div>
      <?php } ?>

      <input type="submit" name="submit" class="btn btn-default" value="daftar">

    </form>

</div>


<?php require_once "view/footer.php" ?>
