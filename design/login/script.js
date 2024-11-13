const toggle = document.getElementById('modeToggle');
const container = document.querySelector('.login-container');
const logoPlaceholder = document.querySelector('.logo-placeholder');
const body = document.body;

toggle.addEventListener('change', () => {
    body.classList.toggle('dark-mode');
    container.classList.toggle('dark-mode');
    logoPlaceholder.classList.toggle('dark-mode');
});
