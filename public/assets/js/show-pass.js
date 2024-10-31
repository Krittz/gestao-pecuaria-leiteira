const icon = document.querySelector('#show-pass');
const password = document.querySelector('#password');

icon.addEventListener('click', function () {
    if (password.type === 'password') {
        password.type = 'text';
        icon.classList.remove('ph', 'ph-eye-slash');
        icon.classList.add('ph', 'ph-eye');
    } else {
        password.type = 'password';
        icon.classList.remove('ph', 'ph-eye');
        icon.classList.add('ph', 'ph-eye-slash');
    }
});