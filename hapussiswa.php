<?php
require_once "koneksi.php";


if(isset($_GET["id"])){
  $id=$_GET["id"];
  $data= mysqli_fetch_array(mysqli_query($kon,"SELECT * FROM siswa WHERE id_siswa='$id'") );

  $file=$data["gambar"];//simpan data gambar ke var file
  //proses hapus file dari folder
  unlink('image/'.$file);

  $query="DELETE FROM siswa WHERE id_siswa='$id'";
  mysqli_query($kon,$query) or die (mysqli_error($kon)) ;
  
  if(isset($query)){
    
    echo "
            <script>
               alert('data berhasil dihapus!');
               document.location.href = 'tampilsiswa.php';
            </script>";
  }else{
    echo "
            <script>
               alert('data gagal dihapus!');
               document.location.href = 'tampilsiswa.php';
            </script>";
  }
}

?>