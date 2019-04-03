<?php
 include "Koneksi.php";
 session_start();
$USERNAME=$_POST['USERNAME'];
$PASSWORD=$_POST['PASSWORD'];

 $query = mysqli_query($db, "SELECT * FROM role WHERE USERNAME='$USERNAME' AND PASSWORD='$PASSWORD' ");
 
 
 if ($query)
  {
    if (mysqli_num_rows($query) == 0)
    {
      echo "<script type='text/javascript'>alert('Username & Password Salah');location='Login.php';</script>";
    }
    else {

        $result=mysqli_fetch_assoc($query);
        $ID_ROLE=$result['ID_ROLE'];

        if($ID_ROLE =='1'){
            $link = 'Kelola_data.php';
         }
         else {
            $link = 'MyAccount.php';
         }
        $_SESSION['ID_ROLE']=$result['ID_ROLE'];
        $_SESSION['NAMA_ROLE']=$result['NAMA_ROLE'];
        $_SESSION['USERNAME']=$result['USERNAME'];
        $_SESSION['PASSWORD']=$result['PASSOWRD'];
        
        header("Location: ".$link."");
    }
  }
	// $row = mysqli_fetch_array($query); 
 //if (!empty($row)){
	// 	echo "<script>window.location = 'MyAccount.php';</script>";
	 //} else { 
	 	//echo "username atau password salah";
		//echo "<script>alert("silahkan isi username atau password");</script>";
		
//	 }
?>