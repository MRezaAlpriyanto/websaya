<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function tanya(){
            if(confirm("Apakah Anda Yakin Ingin Menghapus Buku Tamu Ini")){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
    <title>buku Tamu | M Reza Alpriyanto</title>
    <link rel="stylesheet" type="text/css" href="bukutamu.css">
</head>
<body>
    <div class="warp">
        <div class="container">
            <h1>Buku Tamu</h1>
            <form action="form_add_aksi.php" method="POST">
                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama_lengkap"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="Tempat_Lahir"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="date" name="Tanggal_Lahir"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name = "jk" value= "Laki-Laki"> Laki-Laki
                            <input type="radio" name = "jk" value= "Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select name="info">
                                <center>
                                    <option selected="select">--= pilih =--</option>
                                </center>
                                <option value="Islam" >Islam</option>
                                <option value="Hindu" >hindu</option>
                                <option value="Katolik">katolik</option>
                                <option value="kristen">kristen</option>
                                <option value="Budha" >Budha</option>
                                <option value="khonghucu">khonghucu</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>No Telpon</td>
                        <td>:</td>
                        <td><input type="text" name="no_telepon"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="Email"></td>
                    </tr>
                    <tr>
                        <td>Sosial Media Yang Ada</td>
                        <td>:</td>
                        <td>
                            <input type="checkbox" name="Sosial" value="Ya"> Youtube
                            <input type="checkbox" name="Sosial" value="Ya"> Instagram
                            <input type="checkbox" name="Sosial" value="Ya"> Twitter
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" name="kirim">kirim</button>
                            <button type="reset" name="reset">Reset</button>
                        </td>
                    </tr>
                </table>
            </form>


        </div>
    </div>
</body>
</html>