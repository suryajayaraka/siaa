<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="(max-width: 640px)" href="max-640px.css">
    <link rel="stylesheet" media="(min-width: 640px)" href="min-640px.css">
    <link rel="stylesheet" media="(orientation: portrait)" href="portrait.css">
    <link rel="stylesheet" media="(orientation: landscape)" href="landscape.css">
    <link rel="stylesheet" type="text/css" href="css/header-footer.css">
    <link rel="stylesheet" type="text/css" href="css/daftar_pegawai.css">
    </head>
    
    <body>
    
        <!-- header -->
        <img src="gambar/header.jpg" alt="Header" style="width:100%;">

        <!-- konten -->
        <p class="judul" align="center" ><b>DAFTARKAN PEGAWAI BARU</b></p>
        <a href="Kelola_data.php" class="button"><i>Kembali</i></a>

        <form action="/action_page.php">
          <fieldset>
            <legend><b><i>Daftarkan Pegawai Baru</i></b></legend></br>
            
            <table>
                <tr>
                    <td><p2>Nama</p2></td>
                    <td><p2>:</p2></td>
                    <td><input type="text" name="nama_pegawai" size="50" placeholder="Masukkan Nama Pegawai " / required><br/></td>
                </tr>
                <tr>
                    <td><p2>Nomor Telepon</p2></td>
                    <td><p2>:</p2></td>
                    <td><input type="text" name="no_telepon_pegawai" size="50" placeholder="Masukkan No Telepon Pegawai " / required><br/></td>
                </tr>
                <tr>
                    <td><p2>Alamat</p2></td>
                    <td><p2>:</p2></td>
                    <td><input type="text" name="alamat_pegawai" size="50" placeholder="Masukkan Alamat Pegawai " / required><br/></td>
                </tr>
                <tr>
                    <td><p2>Gaji Pegawai(Mingguan)</p2></td>
                    <td><p2>:</p2></td>
                    <td><input type="text" name="gaji_pegawai" size="50" placeholder="Masukkan Gaji Pegawai " / required><br/></td>
                </tr>
            </table></br>

            <input type="submit" value="Daftar">
            <input class="kedua" type="submit" value="Batal">
            

          </fieldset>
        </form></br></br></br>
    



    <!-- footer -->
    <div class="footer">
        <p>SIAA 2019</p>
      </div>


</body>
</html>
