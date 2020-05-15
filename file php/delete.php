<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){ 
        //Mendapatkan Nilai Dari Variable 
        $id = $_GET['id'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        //import file koneksi database 
        require_once('koneksi.php');
        //Membuat SQL Query 
        $sql = "DELETE FROM tb_pegawai WHERE id=$id;";
        //Menghapus Nilai pada Database
        if(mysqli_query($con,$sql)){
            echo 'Berhasil Menghapus Mahasiswa';
        }
        else{
            echo 'Gagal Menghapus Mahasiswa';
        }
   
    mysqli_close($con);

}

?>