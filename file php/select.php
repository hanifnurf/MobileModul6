<?php 
    $id = $_GET['id'];
    require 'koneksi.php';
    //Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan 
    
    //Importing database 
    //Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID 
    $sql = "SELECT * FROM mahasiswa WHERE id=$id";
    //Mendapatkan Hasil 
    $r = mysqli_query($con,$sql) or die('Unable to Connect');
    //Memasukkan Hasil Kedalam Array 
    $result = array();
    $row = mysqli_fetch_array($r);
    array_push($result,array( 
        "id"=>$row['id'], 
        "nama"=>$row['nama'], 
        "jurusan"=>$row['jurusan'], 
        "email"=>$row['email'] 
    ));
    //Menampilkan dalam format JSON 
    echo json_encode(array('result'=>$result));
    mysqli_close($con);
?>