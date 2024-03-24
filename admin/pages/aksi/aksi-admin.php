<?php
include '../../../koneksi.php';

if (isset($_POST['atambah'])) {
   $id = $_POST['id_admin'];
   $nm = $_POST['nama_admin'];
   $us = $_POST['username'];
   $pw = md5($_POST['password']);
   $no = $_POST['no_telepon'];
   $al = $_POST['alamat'];
   $query = mysqli_query($koneksi, "INSERT INTO admin (nama_admin,username,password,no_telepon,alamat) VALUE ('$nm','$us','$pw','$no','$al') ");

   $_SESSION['setatus'] ;
   if ($query) {
    echo "<script>alert('berhasil menambah account admin baru');location.href='../index.php?page=admin';</script>";
   }

}

if (isset($_POST['chapus'])) {
   $id = $_POST['id_admin'];
   $query = mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin='$id'");

   $_SESSION['stetus'];
   if ($query) {
      echo "<script>alert('berhasil menghapus account');location.href='../index.php?page=admin';</script>";
   }
}

if (isset($_POST['bedit'])) {
   $id = $_POST['id_admin'];
   $nm = $_POST['nama_admin'];
   $us = $_POST['username'];
   $pw = md5($_POST['password']);
   $no = $_POST['no_telepon'];
   $al = $_POST['alamat'];

   if ($_POST['password'] == '' ) {
      $query = mysqli_query($koneksi, "UPDATE admin set nama_admin='$nm', username='$us' , no_telepon='$no', alamat='$al' where id_admin='$id' ");
  }else{
      $query = mysqli_query($koneksi, "UPDATE admin set nama_admin='$nm', username='$us' , password='$pw', no_telepon='$no', alamat='$al' where id_admin='$id' ");
  }

      $_SESSION['status'] = "";
      if ($query) {
          echo "<script>alert('Berhasil update account admin');location.href ='../index.php?page=admin';</script>";
      }

}