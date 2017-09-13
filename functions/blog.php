<?php
//untuk menampilkan data
function tampilkan(){
  $query = "SELECT * FROM blog ORDER BY id DESC";
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

//utk menambah artikel ke dalam database
function tambah_data($judul, $isi, $tag){
  $judul = escape($judul);
  $isi   = escape($isi);
  $tag   = escape($tag);

  $query = "INSERT INTO blog (judul, isi, tag) VALUES ('$judul','$isi','$tag')";
  return run($query);
}

//utk menjalankan query
function run($query){
  global $link;

  if (mysqli_query($link, $query)) return true;
    else return false;
}

//utk mencegah sql injection
function escape($data){
  global $link;
  return mysqli_real_escape_string($link, $data);
}
?>
