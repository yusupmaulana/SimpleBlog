<?php
require_once "core/init.php";
//redirect kalau user belum login
if(!isset($_SESSION['user'])) {
  header('Location: login.php');
}

if ( isset($_GET['id']) ) {
  if ( hapus_data($_GET['id'])) {
    header('Location: index.php');
  }else {
    echo "ada masalah saat menghapus data";
  }
}



?>
