<?php
// koneksi ke database
$kon=mysqli_connect('localhost', 'root', '', 'db_sekolah');

function query($query){
  global $kon;
  $result=mysqli_query($kon,$query) or die (mysqli_error($kon));
  $rows=[];

  foreach($result as $row){
    $rows[]=$row;
  }
  return $rows;
}

function update($data){
  global $kon;
  $id=mysqli_real_escape_string($kon, $_GET["id"]);
  $hari=mysqli_real_escape_string($kon, $data["hari"]);
  $nama=mysqli_real_escape_string($kon, $data["namasiswa"]);
  $pel=mysqli_real_escape_string($kon, $data["namapel"]);
  $kls=mysqli_real_escape_string($kon, $data["kelas"]);
  $guru=mysqli_real_escape_string($kon, $data["guru"]);

  $query="UPDATE jadwal SET hari='$hari',
                            id_siswa=$nama,
                            id_mapel=$pel,
                            id_kelas=$kls,
                            id_guru=$guru
                      WHERE id=$id ";

  mysqli_query($kon,$query) or die(mysqli_error($kon));
  return mysqli_affected_rows($kon);
}
// function hapus($id){
//   global $kon;

//   mysqli_query($kon,"DELETE FROM jadwal WHERE id=$id");

//   return mysqli_affected_rows($kon);
// }

?>