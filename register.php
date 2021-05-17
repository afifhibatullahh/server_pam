<?php

include 'config.php';
 
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
  
 $hasil = "Gagal memasukkan data";
 if($username and $email){

    $CheckSQL = "SELECT * FROM akun WHERE email='$email'";
    // Executing SQL Query.
    $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
    
    if(isset($check)){
        $hasil = "email sudah digunakan";
    }else{
        
     $sql1 = "INSERT INTO akun (username,email,password) VALUES ('$username','$email','$password')";
     $q1 = mysqli_query($con,$sql1);
     $hasil = "hello";
     if($q1){
         $hasil = "Berhasil membuat akun ";
     }
    }

 }
 $data['result'] = $hasil;
 echo json_encode($data);

?>