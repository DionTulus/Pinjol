const loanAmountInput = document.getElementById('loan-amount');
const loanDurationInput = document.getElementById('loan-duration');
const monthlyInstallmentInput = document.getElementById('monthly-installment');
const totalAmountInput = document.getElementById('total-amount');
const remainingMonthsInput = document.getElementById('remaining-months');

function formatNumber(number) {
  return new Intl.NumberFormat('id-ID').format(number);
}

// Fungsi untuk menghitung cicilan per bulan
function calculateMonthlyInstallment() {
  const loanAmount = parseInt(loanAmountInput.value, 10);
  const loanDuration = parseInt(loanDurationInput.value, 10);

  if (isNaN(loanAmount) || isNaN(loanDuration) || loanAmount <= 0 || loanDuration < 1) {
    monthlyInstallmentInput.value = 'Masukkan jumlah dan lama peminjaman yang valid.';
    return;
  }

  const monthlyInterestRate = 0.05; // 2% per bulan (misalnya)
  const totalInterest = loanAmount * monthlyInterestRate * loanDuration;
  const totalAmountToRepay = loanAmount + totalInterest;
  const monthlyInstallment = totalAmountToRepay / loanDuration;

  monthlyInstallmentInput.value = `Rp ${formatNumber(monthlyInstallment.toFixed(2))}`;
}

loanAmountInput.addEventListener('input', calculateMonthlyInstallment);
loanDurationInput.addEventListener('input', calculateMonthlyInstallment);

// Fungsi untuk menampilkan input nomor pembayaran saat mengklik ikon pembayaran
document.getElementById('bank-icon').addEventListener('click', function() {
  document.getElementById('payment-input').placeholder = 'Masukkan nomor bank';
  document.getElementById('input-container').style.display = 'flex';
});

document.getElementById('gopay-icon').addEventListener('click', function() {
  document.getElementById('payment-input').placeholder = 'Masukkan nomor GoPay';
  document.getElementById('input-container').style.display = 'flex';
});

document.getElementById('dana-icon').addEventListener('click', function() {
  document.getElementById('payment-input').placeholder = 'Masukkan nomor Dana';
  document.getElementById('input-container').style.display = 'flex';
});

document.getElementById('paypal-icon').addEventListener('click', function() {
  document.getElementById('payment-input').placeholder = 'Masukkan nomor PayPal';
  document.getElementById('input-container').style.display = 'flex';
});

// Fungsi untuk menyembunyikan input nomor pembayaran saat mengklik tombol "Selesai"
document.getElementById('btn-selesai').addEventListener('click', function() {
  const paymentInputValue = document.getElementById('payment-input').value;
  if (paymentInputValue === '') {
    document.getElementById('payment-input').style.borderColor = 'red';
  } else {
    document.getElementById('payment-input').style.borderColor = '';
    document.getElementById('input-container').style.display = 'none';
  }
});

// Variabel untuk menyimpan total cicilan per bulan saat ini
let totalMonthlyInstallment = 0;
let totalLoanAmount = 0;
let totalLoanDuration = 0;

// Fungsi untuk menghitung total peminjaman dan menampilkan di kotak ringkasan
function calculateTotalAmount1() {
     const loanAmount = parseInt(loanAmountInput.value, 10);
    const loanDuration = parseInt(loanDurationInput.value, 10);

    if (isNaN(loanAmount) || isNaN(loanDuration) || loanAmount <= 0 || loanDuration < 1) {
        totalAmountInput.value = '';
        return;
    }

    totalLoanAmount += loanAmount;
    totalAmountInput.value = `Rp ${formatNumber(totalLoanAmount)}`;

    const remainingMonths = calculateRemainingMonths();
    remainingMonthsInput.value = remainingMonths;

    lastMonth = new Date().getMonth(); // Perbarui bulan terakhir

}

// Fungsi untuk menampilkan alert ketika tombol "Pinjam" diklik tanpa memasukkan nomor pembayaran
document.getElementById('btn-pinjam').addEventListener('click', function() {
    const paymentInputValue = document.getElementById('payment-input').value;
    if (paymentInputValue === '') {
        alert('Masukkan nomor pembayaran sebelum melakukan peminjaman!');
    } else {
        alert('Peminjaman telah sukses!');

        // Peminjaman sukses, tambahkan jumlah peminjaman per bulan ke total peminjaman pertama
        calculateTotalAmount1();

        // Peminjaman sukses, tambahkan jumlah peminjaman per bulan ke total peminjaman kedua
        calculateTotalAmount2();

        // Reset nilai input nomor pembayaran
        document.getElementById('payment-input').value = '';

    lastMonth = new Date().getMonth();
    
    // Hitung ulang sisa bulan
    const remainingMonths = calculateRemainingMonths();
    remainingMonthsInput.value = remainingMonths;
    }
});

// JavaScript untuk tombol "Bayar" (dummy, tidak ada fungsionalitas)
document.getElementById('btn-bayar').addEventListener('click', function() {

});

// total peminjaman ke 2
const totalAmountInput2 = document.getElementById('total-amount2');

// Variabel untuk menyimpan total peminjaman saat ini untuk total peminjaman ke 2
let totalLoanAmount2 = 0;

// Fungsi untuk menghitung total peminjaman yang kedua dan menampilkan di kotak ringkasan 2
function calculateTotalAmount2() {
    const loanAmount = parseInt(loanAmountInput.value, 10);
    const loanDuration = parseInt(loanDurationInput.value, 10);

    if (isNaN(loanAmount) || isNaN(loanDuration) || loanAmount <= 0 || loanDuration < 1) {
        totalAmountInput2.value = '';
        return;
    }
    
 // Hitung total peminjaman ke 2 berdasarkan nilai loanAmount dan loanDuration
    // Misalnya, kita menggunakan bunga bulanan 1% sebagai contoh
    const monthlyInterestRate = 0.05;
    const totalInterest = loanAmount * monthlyInterestRate * loanDuration;
    const totalAmountToRepay = loanAmount + totalInterest;

    totalLoanAmount2 += totalAmountToRepay;
    totalAmountInput2.value = `Rp ${formatNumber(totalLoanAmount2)}`;
    
    const remainingMonths = calculateRemainingMonths();
    remainingMonthsInput.value = remainingMonths;

    // Hitung cicilan per bulan dari total peminjaman ke 2
    const monthlyInstallment2 = totalLoanAmount2 / loanDuration;

    // Tampilkan hasil cicilan per bulan di input dengan ID monthly-installment2
    document.getElementById('monthly-installment2').value = `Rp ${formatNumber(monthlyInstallment2.toFixed(2))}`;
}


// Fungsi untuk menghitung sisa bulan peminjaman
function calculateRemainingMonths() {
    const loanDuration = parseInt(loanDurationInput.value, 10);

    if (isNaN(loanDuration) || loanDuration <= 0) {
        return 0;
    }

    return loanDuration;
  }

// Fungsi untuk menampilkan input nomor pembayaran saat mengklik ikon pembayaran
document.getElementById('bank-icon').addEventListener('click', function() {
  document.getElementById('payment-input').placeholder = 'Masukkan nomor bank';
  document.getElementById('input-container').style.display = 'flex';
});

document.getElementById('gopay-icon').addEventListener('click', function() {
  document.getElementById('payment-input').placeholder = 'Masukkan nomor GoPay';
  document.getElementById('input-container').style.display = 'flex';
});

document.getElementById('dana-icon').addEventListener('click', function() {
  document.getElementById('payment-input').placeholder = 'Masukkan nomor Dana';
  document.getElementById('input-container').style.display = 'flex';
});

document.getElementById('paypal-icon').addEventListener('click', function() {
  document.getElementById('payment-input').placeholder = 'Masukkan nomor PayPal';
  document.getElementById('input-container').style.display = 'flex';
});

// Menambahkan event listener untuk setiap input nomor pembayaran di dropdown
const paymentNumberInputs = document.querySelectorAll('.payment-number-input');
paymentNumberInputs.forEach(function(input) {
  input.addEventListener('input', function(event) {
    const paymentNumberValue = event.target.value;
    // Lakukan sesuatu dengan nilai nomor pembayaran yang dimasukkan
  });
});
  

// button 1
let c1 = 0; // Gunakan variabel khusus untuk menu 1

function menu() {
  const contDropdownMenu1 = document.getElementById('cont_drobpdown_menu_1');
  const contDropdownMenu2 = document.getElementById('cont_drobpdown_menu_2');
  
  // Toggle kelas 'disable' pada menu dropdown 1
  contDropdownMenu1.classList.toggle('disable');

  // Pastikan menu dropdown 2 disembunyikan
  contDropdownMenu2.classList.add('disable');
}

// button 2
let c2 = 0; // Gunakan variabel khusus untuk menu 2

function menu2() {
  const contDropdownMenu1 = document.getElementById('cont_drobpdown_menu_1');
  const contDropdownMenu2 = document.getElementById('cont_drobpdown_menu_2');
  
  // Toggle kelas 'disable' pada menu dropdown 2
  contDropdownMenu2.classList.toggle('disable');

  // Pastikan menu dropdown 1 disembunyikan
  contDropdownMenu1.classList.add('disable');
}

let activeMenu = null; // Variable to store the ID of the currently active menu

function toggleMenu(menuId) {
  const menu = document.getElementById(menuId);
  const icon = menu.querySelector('.cont_icon_trg');

  if (activeMenu === null) {
    // No menu is open
    menu.classList.add('active');
    icon.classList.add('active');
    activeMenu = menuId;
  } else if (activeMenu === menuId) {
    // Clicked on the currently open menu, close the menu
    menu.classList.remove('active');
    icon.classList.remove('active');
    activeMenu = null;
  } else {
    // Another menu is open, close it and open the clicked menu
    const currentActiveMenu = document.getElementById(activeMenu);
    const currentActiveIcon = currentActiveMenu.querySelector('.cont_icon_trg');

    currentActiveMenu.classList.remove('active');
    currentActiveIcon.classList.remove('active');
    menu.classList.add('active');
    icon.classList.add('active');
    activeMenu = menuId;
  }
}