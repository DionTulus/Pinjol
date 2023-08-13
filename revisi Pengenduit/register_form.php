<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

   $targetDirectory = "uploads";
   $targetFile = $targetDirectory . basename($_FILES["profile_image"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

   // Periksa apakah berkas adalah gambar asli atau palsu
   if (isset($_POST["submit"])) {
      $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
      if ($check !== false) {
         $uploadOk = 1;
      } else {
         $error[] = "Berkas bukan gambar.";
         $uploadOk = 0;
      }
   }

   // Periksa apakah berkas sudah ada
   if (file_exists($targetFile)) {
      $error[] = "Maaf, berkas sudah ada.";
      $uploadOk = 0;
   }

   // Periksa ukuran berkas
   if ($_FILES["profile_image"]["size"] > 500000) {
      $error[] = "Maaf, berkas Anda terlalu besar.";
      $uploadOk = 0;
   }

   // Hanya izinkan format berkas gambar tertentu
   if (
      $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif"
   ) {
      $error[] = "Maaf, hanya format berkas JPG, JPEG, PNG, dan GIF yang diizinkan.";
      $uploadOk = 0;
   }

   // Periksa apakah $uploadOk diatur menjadi 0 karena ada kesalahan
   if ($uploadOk == 0) {
      $error[] = "Maaf, berkas Anda tidak berhasil diunggah.";
   } else {
      if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFile)) {
         // Gambar berhasil diunggah
         // Lanjutkan dengan pemrosesan pendaftaran pengguna
      } else {
         $error[] = "Maaf, terjadi kesalahan saat mengunggah berkas Anda.";
      }
   }

   $isKtpImage = verifyKtpImage($_FILES["profile_image"]["tmp_name"]);

   if (!$isKtpImage) {
      $error[] = "Maaf, gambar yang Anda unggah bukan gambar KTP yang valid.";
   } else {
      if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFile)) {
         // Gambar berhasil diunggah dan diverifikasi sebagai KTP
         // Lanjutkan dengan pemrosesan pendaftaran pengguna
      } else {
         $error[] = "Maaf, terjadi kesalahan saat mengunggah berkas Anda.";
      }
   }


};

function verifyKtpImage($tmpFileName) {
   $image = imagecreatefromjpeg($tmpFileName); // Ubah sesuai jenis berkas gambar

   // Lakukan analisis warna untuk mendeteksi gambar KTP
   // Anda perlu mengimplementasikan logika yang sesuai untuk deteksi ini
   // Misalnya, memeriksa apakah gambar memiliki banyak warna serupa dengan KTP

   // Lakukan penghancuran objek gambar untuk membebaskan memori
   imagedestroy($image);

   // Kembalikan hasil verifikasi
   return $isKtpImage;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="KTP" require placeholder="name as per ID card (KTP)">
      <input type="" name="NIK" require placeholder="NIK">
      <input type="text" name="name" required placeholder="Username">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>