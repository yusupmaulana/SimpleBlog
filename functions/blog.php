<?php
//untuk menampilkan data
function tampilkan(){
  $query = "SELECT * FROM blog";
  return tampil_data($query);
}


//fungsi untuk menjalankan query dari menampilkan data dan hasil_cari
function tampil_data($query){
  //global $link agar variabel $link bisa diakses dari mana saja scope nya.
  global $link;
  if($result = mysqli_query($link, $query) or die('gagal menampilkan data')){
    return $result;
  }
}




?>
