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
<div class="bayar" id="bayar">
    <div class="loan-summary2">
        <div class="form-group1">
            <label>Peminjaman + 2%</label>
            <input type="text" id="total-amount2" value="0" readonly>
        </div>
      <div class="form-group2">
        <label>Sisa Bulan</label>
        <input type="text" id="remaining-months" value="0" readonly>
      </div>
        <div class="form-group3">
            <label>Cicilan/bulan</label>
            <input type="text" id="monthly-installment2" value="0" readonly>
        </div>
    </div>
  <!-- list 1 -->
      <div class="tombol-bayar">
        <div class="tombol1">
          <div class="cont_principal">
                <div class="cont_menu">
                  <div class="cont_titulo_menu" onclick="menu()">
                <div class="cont_titulo">
                    <h4>BAYAR SEKALIGUS</h4>
                    </div>
                    <div class="cont_icon_menu">
                    <div class="cont_circle_1"></div>
                    <div class="cont_circle_2"></div> 
                    <div class="cont_circle_3"></div>
                    <div class="cont_circle_4"></div>
                    </div>
                  </div>
                <div class="cont_icon_trg disable">
                  <svg width="46px" height="38px" viewBox="0 0 46 38" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  >
                      <defs>
                          <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-1">
                              <feOffset dx="0" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                              <feGaussianBlur stdDeviation="1.5" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                              <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.0813575634 0" in="shadowBlurOuter1" type="matrix" result="shadowMatrixOuter1"></feColorMatrix>
                              <feMerge>
                                  <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                  <feMergeNode in="SourceGraphic"></feMergeNode>
                              </feMerge>
                          </filter>
                      </defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                          <polygon id="Triangle-1" fill="#FFFFFF" filter="url(#filter-1)" sketch:type="MSShapeGroup" points="23 7 39 24 7 24 "></polygon>
                      </g>
                  </svg></div>    
                  <div class="cont_drobpdown_menu disable" id="cont_drobpdown_menu_1">
                          <ul>
                              <li class="hoverable-dropdown">
                                <div class="content_bayar">
                                  <img src="img/bank.png" height="30px" width="30px">
                                  <p>Bank Account</p>
                                  <div class="dropdown_pembayaran">
                                  <input type="text" placeholder="nomor Banking" class="payment-number-input">
                                    <button id="btn-bayaran" class="bayar-button" disabled>Bayar</button>
                                  </div>
                                </div>
                              </li>
                              <li><hr /></li>
                              <li class="hoverable-dropdown">
                                <div class="content_bayar">
                                  <img src="img/Gopay.png" height="30px" width="30px">
                                  <p>Gopay Account</p>
                                  <div class="dropdown_pembayaran">
                                    <input type="text" placeholder="nomor Gopay" class="payment-number-input">
                                    <button id="btn-bayaran" class="bayar-button" disabled>Bayar</button>
                                  </div>
                                </div>
                              </li>
                              <li><hr /></li>
                              <li class="hoverable-dropdown">
                                <div class="content_bayar">
                                  <img src="img/dana.png" height="30px" width="30px">
                                  <p>Dana Account</p>
                                  <div class="dropdown_pembayaran">
                                    <input type="text" placeholder="nomor Dana" class="payment-number-input">
                                    <button id="btn-bayaran" class="bayar-button" disabled>Bayar</button>
                                  </div>
                                </div>
                              </li>
                              <li><hr /></li>
                              <li class="hoverable-dropdown">
                                <div class="content_bayar">
                                  <img src="img/paypal.png" height="30px" width="30px">
                                  <p>Paypal Account</p>
                                  <div class="dropdown_pembayaran" >
                                  <input type="text" placeholder="nomor PayPal" class="payment-number-input">   
                                  <button id="btn-bayaran" class="bayar-button" disabled>Bayar</button>
                                  </div>
                                </div>
                              </li>
                              
                          </ul>
                      </div>


                  </div> 
                </div>
        </div>
          <div class="tombol2">
            <!-- list 2 -->
                  <div class="cont_principal">
                <div class="cont_menu">
                  <div class="cont_titulo_menu" onclick="menu2()">
                <div class="cont_titulo">
                    <h4>BAYAR CICILAN</h4>
                    </div>
                    <div class="cont_icon_menu">
                     <div class="cont_circle_1"></div>
                     <div class="cont_circle_2"></div>
                     <div class="cont_circle_3"></div>
                     <div class="cont_circle_4"></div>
                     </div>
                  </div>
                <div class="cont_icon_trg2 disable" onclick="toggleMenu('cont_drobpdown_menu_2')">
                <svg width="46px" height="38px" viewBox="0 0 46 38" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  >
                    <defs>
                        <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-1">
                            <feOffset dx="0" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                            <feGaussianBlur stdDeviation="1.5" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                            <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.0813575634 0" in="shadowBlurOuter1" type="matrix" result="shadowMatrixOuter1"></feColorMatrix>
                            <feMerge>
                                <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                <feMergeNode in="SourceGraphic"></feMergeNode>
                            </feMerge>
                        </filter>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <polygon id="Triangle-1" fill="#FFFFFF" filter="url(#filter-1)" sketch:type="MSShapeGroup" points="23 7 39 24 7 24 "></polygon>
                    </g>
                </svg>
              </div>
                  <dv class="cont_drobpdown_menu disable" id="cont_drobpdown_menu_2">
                          <ul>
                              <li class="hoverable-dropdown">
                                <div class="content_bayar">
                                  <img src="img/bank.png" height="30px" width="30px">
                                  <p>Bank Account</p>
                                  <div class="dropdown_pembayaran">
                                  <input type="text" placeholder="nomor Bangking" class="payment-number-input">
                                    <button id="btn-bayaran" class="bayar-button" disabled>Bayar</button>
                                  </div>
                                </div>
                              </li>
                              <li><hr /></li>
                              <li class="hoverable-dropdown">
                                <div class="content_bayar">
                                  <img src="img/Gopay.png" height="30px" width="30px">
                                  <p>Gopay Account</p>
                                  <div class="dropdown_pembayaran">
                                    <input type="text" placeholder="nomor Gopay" class="payment-number-input">
                                    <button id="btn-bayaran" class="bayar-button" disabled>Bayar</button>
                                  </div>
                                </div>
                              </li>
                              <li><hr /></li>
                              <li class="hoverable-dropdown">
                                <div class="content_bayar">
                                  <img src="img/dana.png" height="30px" width="30px">
                                  <p>Dana Account</p>
                                  <div class="dropdown_pembayaran">
                                    <input type="text" placeholder="nomor Dana" class="payment-number-input">
                                    <button id="btn-bayaran" class="bayar-button" disabled>Bayar</button>
                                  </div>
                                </div>
                              </li>
                              <li><hr /></li>
                              <li class="hoverable-dropdown">
                                <div class="content_bayar">
                                  <img src="img/paypal.png" height="30px" width="30px">
                                  <p>Paypal Account</p>
                                  <div class="dropdown_pembayaran" >
                                  <input type="text" placeholder="nomor PayPal" class="payment-number-input">   
                                  <button id="btn-bayaran" class="bayar-button" disabled>Bayar</button>
                                  </div>
                                </div>
                              </li>
                              
                          </ul>
                      </dv>
                  </div> 
                </div>
          </div>
    </div>
    <!-- end of tombol -->
</div>
</body>
</html>