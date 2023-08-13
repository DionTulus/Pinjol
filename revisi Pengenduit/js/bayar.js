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