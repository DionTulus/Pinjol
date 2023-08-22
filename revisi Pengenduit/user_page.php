<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Pengen Duit</title>
    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="css/css.css">
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
            <li class="active"><a href="#dasboard">Dashboard</a></li>
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

  <div class="content" id="dasboard">
    <!-- home -->
    <div id="home">
        <div class="user">
            <h1>Ready to fulfill your dreams?</h1>
            <h3>Don't let capital get in the <br> way of your dreams.</h3>
            <button class="borrow_btn">Borrow Now</button>
        </div>
    </div>
  <!-- Feedback -->
  <div class="feedback" id="feedback">
    <div class="container">  
  <form id="contact" action="" method="post">
    <h3>Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>
        </div>
    </div>

  </div>
  </div>

  <script src="js/script.js" ></script>
  <script src="js/feedback.js" ></script>

</body>
</html>