<?php
require_once "koneksi.php";

$id=htmlspecialchars($_GET["id"]);
if(isset($id)){
  $hapus=mysqli_query($kon, "DELETE FROM jadwal WHERE id='$id'");
  
  if(isset($hapus)){
    echo "
            <script>
               alert('data berhasil dihapus!');
               document.location.href = 'index.php';
            </script>";
  }else{
    echo "
            <script>
               alert('data gagal dihapus!');
               document.location.href = 'index.php';
            </script>";
  }

}

?>