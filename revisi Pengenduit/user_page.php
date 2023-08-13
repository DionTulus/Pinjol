<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Pengen Duit</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="css/bayar.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/pinjam.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
</head>

<body>
    <div class="btn">
        <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="text">
            Pengen Duit
        </div>
        <ul>
            <li class="active"><a href="#home">Dashboard</a></li>
            <li>
                <a href="#" class="feat-btn">Borrow
                    <span class="fas fa-caret-down first"></span>
                </a>
                <ul class="feat-show">
                    <li><a href="uang/peminjaman.php">Loan</a></li>
                    <li><a href="uang/pembayaran.php">Payment</a></li>
                </ul>
            </li>
            <li><a href="#">Feedback</a></li>
        </ul>
    </nav>
    <script>
        $('.btn').click(function () {
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
        });
        $('.feat-btn').click(function () {
            $('nav ul .feat-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        });
        $('.serv-btn').click(function () {
            $('nav ul .serv-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });
        $('nav ul li').click(function () {
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>
  <!-- home -->
  <div class="content" id="home">
    <div class="user">
        <h1>Hello <span><?php echo $_SESSION['user_name'] ?></span></h1>
    </div>
  </div>


    <!-- Add this script tag to include JQuery -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="../Pinjol/js/bayar.js"></script>

<script src="../Pinjol/js/script.js"></script>

<script src="https://unpkg.com/scrollreveal@4%22%3E></script>

</body>
</html>