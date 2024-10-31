const icon = document.querySelector('#show-pass');
const password = document.querySelector('#password');

icon.addEventListener('click', function() {
    if (password.type === 'password') {
        password.type = 'text';
        icon.setAttribute('name', 'eye-outline');
    } else {
        password.type = 'password';
        icon.setAttribute('name', 'eye-off-outline');
    }
});