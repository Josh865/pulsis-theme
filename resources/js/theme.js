function toggleNavMenu() {
  document.getElementById('mobileNavMenu').classList.toggle('pulsis-hidden');
}

const toggleButton = document.getElementById('mobileNavToggleButton');
toggleButton.addEventListener('click', toggleNavMenu);
