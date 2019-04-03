<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="(max-width: 640px)" href="max-640px.css">
<link rel="stylesheet" media="(min-width: 640px)" href="min-640px.css">
<link rel="stylesheet" media="(orientation: portrait)" href="portrait.css">
<link rel="stylesheet" media="(orientation: landscape)" href="landscape.css">
<link rel="stylesheet" type="text/css" href="css/header-footer.css">
<link rel="stylesheet" type="text/css" href="css/kelola.css">
</head>

<body>

    <!-- header -->
    <img src="gambar/header.jpg" alt="Header" style="width:100%;">
<div class="header">
  <div class="header-right">
    <a class="active" href="#home"><b>Kelola Data</b></a>
    <a href="#contact"><b>Transaksi</b></a>
    <a href="#about"><b>Laporan</b></a>
  </div>


    <!-- konten -->
    <br/><br/><br/><br/><br/><button class="tablink" onclick="openPage('Pegawai', this, '#23394C')"id="defaultOpen"><b>Pegawai</b></button>
    <button class="tablink" onclick="openPage('Sparepart', this, '#23394C')"><b>Sparepart</b></button>
    <button class="tablink" onclick="openPage('Supplier', this, '#23394C')"><b>Supplier</b></button>
    <button class="tablink" onclick="openPage('Jasa_Service', this, '#23394C')"><b>Jasa Service</b></button>
    <button class="tablink" onclick="openPage('Pelanggan', this, '#23394C')"><b>Pelanggan</b></button>

    <div id="Pegawai" class="tabcontent">
      <p align="center" ><b>DATA PEGAWAI</b></p>
      <a href="Daftar_pegawai.php" class="button"><i>Daftarkan Pegawai</i></a>
      <button class="button2"><i>Cari</i></button> 
      <input type="text" name="cari_pegawai" size="30" placeholder="Cari Nama Pegawai"><br/><br/>

      <table>
          <tr>
            <th><b>No</b></th>
            <th><b>Nama</b></th>
            <th><b>No Telepon</b></th>
            <th><b>Alamat</b></th>
            <th><b>Gaji(mingguan)</b></th>
            <th><b>Aksi</b></th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          
          
        </table>
        
    </div>

    <div id="Sparepart" class="tabcontent">
        <p  align="center" ><b>DATA SPAREPART</b></p>
        <a href="Daftar_sparepart.php" class="button"><i>Masukkan Sparepart</i></a>
      <button class="button2"><i>Cari</i></button> 
      <input type="text" name="cari_sparepart" size="30" placeholder="Cari Nama Sparepart"><br/><br/>

      <table>
          <tr>
            <th><b>No</b></th>
            <th><b>Nama</b></th>
            <th><b>Kode</b></th>
            <th><b>Jumlah</b></th>
            <th><b>Tipe</b></th>
            <th><b>Kecocokan</b></th>
            <th><b>Harga Beli</b></th>
            <th><b>Harga Jual</b></th>
            <th><b>Nomor</b></th>
            <th><b>Aksi</b></th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          
          
        </table>
      </div>

    <div id="Supplier" class="tabcontent">
          <p  align="center" ><b>DATA SUPPLIER</b></p>
          <a href="#" class="button"><i>Masukkan Supplier Baru</i></a>
      <button class="button2"><i>Cari</i></button> 
      <input type="text" name="cari_supplier" size="30" placeholder="Cari Nama Supplier"><br/><br/>

      <table>
          <tr>
            <th><b>No</b></th>
            <th><b>Nama</b></th>
            <th><b>Alamat</b></th>
            <th><b>No Telepon</b></th>
            <th><b>Nama Sales</b></th>
            <th><b>No Telepon Sales</b></th>
            <th><b>Aksi</b></th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          
          
        </table>
      </div>

    <div id="Jasa_Service" class="tabcontent">
          <p  align="center" ><b>DATA JASA SERVICE</b></p>
          <a href="#" class="button"><i>Masukkan Jasa Service</i></a> 
          <button class="button2"><i>Cari</i></button> 
          <input type="text" name="cari_jasa_service" size="30" placeholder="Cari Jasa Service"><br/><br/>
    
          <table>
              <tr>
                <th><b>No</b></th>
                <th><b>Kode</b></th>
                <th><b>Jenis Service</b></th>
                <th><b>Harga</b></th>
                <th><b>Aksi</b></th>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </table>
    </div>

    <div id="Pelanggan" class="tabcontent">
        <p  align="center" ><b>DATA PELANGGAN</b></p>
        <a href="#" class="button"><i>Daftarkan Pelanggan Baru</i></a> 
        <button class="button2"><i>Cari</i></button> 
        <input type="text" name="cari_pelanggan" size="30" placeholder="Cari Nama Pelanggan"><br/><br/>
  
        <table>
            <tr>
              <th><b>No</b></th>
              <th><b>Nama</b></th>
              <th><b>No Telepon</b></th>
              <th><b>Alamat</b></th>
              <th><b>Kendaraan</b></th>
              <th><b>Nomor Polisi Kendaraan</b></th>
              <th><b>Aksi</b></th>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
    </div>
    
    
<script>
        function openPage(pageName,elmnt,color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>
</body>
</html>
