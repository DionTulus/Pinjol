<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
            <li class="active"><a href="user_page.php">Dashboard</a></li>
            <li>
                <a href="#" class="feat-btn">Borrow
                    <span class="fas fa-caret-down first"></span>
                </a>
                <ul class="feat-show">
                    <li><a href="uang/peminjaman.php">Loan</a></li>
                    <li><a href="uang/pembayaran.php">Payment</a></li>
                </ul>
            </li>
            <li><a href="#feedback">Feedback</a></li>
            <li><a href="#user_profile">Loan History</a></li>
        </ul>
    </nav>

    <div class="user_profile" id="user_profile">
    <h2>
    <span class="namamu">Hello <?php echo $_SESSION['user_name'] ?></span>
    </h2>
    </div>

    <script src="js/script.js"></script>
</body>
</html>