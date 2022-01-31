<?php
require_once "koneksi.php";

$id=$_GET["id"];

if(isset($id)){
  $hapus=mysqli_query($kon, "DELETE FROM guru WHERE id_guru='$id'");
  
  if(isset($hapus)){
    echo "
            <script>
               alert('data berhasil dihapus!');
               document.location.href = 'tampilguru.php';
            </script>";
  }else{
    echo "
            <script>
               alert('data gagal dihapus!');
               document.location.href = 'tampilguru.php';
            </script>";
  }
}
?>