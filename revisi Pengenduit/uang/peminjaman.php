<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="../css/bayar.css">
    <link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="../css/pinjam.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
            <li class="active"><a href="../user_page.php">Dashboard</a></li>
            <li>
                <a href="#" class="feat-btn">Borrow
                    <span class="fas fa-caret-down first"></span>
                </a>
                <ul class="feat-show">
                    <li><a href="peminjaman.php">Loan</a></li>
                    <li><a href="pembayaran.php">Payment</a></li>
                </ul>
            </li>
            <li><a href="#">Feedback</a></li>
        </ul>
    </nav>
    
  <div class="content">
    <!-- kalkulator pinjol -->
    <div class="peminjaman_uang">
      <div class="pinjamdulu">
      <div class="loan-summary">
            <h2>Ringkasan Peminjaman</h2>
            <div class="form-group">
                <label for="total-amount">Total Peminjaman:</label>
                <input type="text" id="total-amount" readonly>
            </div>
            <button onclick = "window.location.href='#bayar';" type="button" id="btn-bayar">Bayar</button>
        </div>
      <div class="loan-calculator">
        <h2>Kotak Peminjaman Uang</h2>
        <div class="form-group">
          <label for="loan-amount">Jumlah Peminjaman:</label>
          <select id="loan-amount">
            <option value="5000000">Rp 5.000.000</option>
            <option value="10000000">Rp 10.000.000</option>
            <option value="20000000">Rp 20.000.000</option>
            <option value="30000000">Rp 30.000.000</option>
            <option value="40000000">Rp 40.000.000</option>
            <option value="50000000">Rp 50.000.000</option>
            <option value="60000000">Rp 60.000.000</option>
            <option value="70000000">Rp 70.000.000</option>
            <option value="80000000">Rp 80.000.000</option>
            <option value="90000000">Rp 90.000.000</option>
            <option value="100000000">Rp 100.000.000</option>
          </select>
        </div>
        <div class="form-group">
          <label for="loan-duration">Lama Peminjaman (bulan):</label>
          <select id="loan-duration">
            <option value="6">6 Bulan</option>
            <option value="12">12 Bulan</option>
            <option value="18">18 Bulan</option>
            <option value="24">24 Bulan</option>
            <option value="30">30 Bulan</option>
            <option value="36">36 Bulan</option>
            <!-- Tambahkan opsi dengan kelipatan 6 bulan hingga 60 bulan -->
          </select>
        </div>
        <div class="form-group">
          <label for="monthly-installment">Cicilan per Bulan:</label>
          <input type="text" id="monthly-installment" readonly>
        </div>
        <button type="button" id="btn-pinjam">Pinjam</button>
        <div class="payment-icons">
          <span id="bank-icon" class="payment-icon"><img src="img/bank.png" height="30px" width="30px" ><p>bank</p></span>
          <span id="gopay-icon" class="payment-icon"><img src="img/Gopay.png" height="30px" width="30px" ><p>gopay</p></span>
          <span id="dana-icon" class="payment-icon"><img src="img/dana.png" height="30px" width="30px" ><p>dana</p></span>
          <span id="paypal-icon" class="payment-icon"><img src="img/paypal.png" height="30px" width="30px" ><p>paypal</p></span>
        </div>
        <div id="input-container">
          <input type="text" id="payment-input" placeholder="Masukkan nomor pembayaran">
          <button type="button" id="btn-selesai">Selesai</button>
        </div>
      </div>
    </div>
    </div>
  </div>

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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="../js/bayar.js"></script>

<script src="../js/script.js"></script>


<script src="https://unpkg.com/scrollreveal@4%22%3E></script>
</body>
</html>
