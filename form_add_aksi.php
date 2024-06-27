<?php
include "koneksi.php";

if(isset($_POST['kirim'])) {
    $nama_lengkap = $_POST['$nama_lengkap'];
    $alamat = $_POST ['alamat'];
    $tempat_lahir = $_POST ['tempat_lahir'];
    $tanggal_lahir = $_POST ['tanggal_lahir'];
    $jk = $_POST = $_POST ['jk'];
    $info = $_POST ['info'];
    $no_telepon = $_POST ['no_telepon'];
    $email = $_POST ['email'];
    $sosial = $_POST ['sosial'];

    $simpan = "INSERT INTO bukutamu(nama_lengkap,alamat,tempat_lahir,tangal_lahir,jk,info,no_telepon,email,sosisal
    VALUES('$nama_lengkap','$alamat','$tempat_lahir','$tanggal_lahir','$jk','$info','$no_telepon','$email','$sosial')";

    $result = mysqli_query($conn,$simpan);

    if ($result) {
        echo "<script>alert('Data Telah Berhasil di
        simpan');window.location='bukutamu.php'</script>";
    }
}
?>