const dropdowns = document.querySelectorAll('.dropdown');
dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const caret = dropdown.querySelector('.caret');
    const menu = dropdown.querySelector('.form-menu');
    const options = dropdown.querySelectorAll('.form-menu li');
    const selected = dropdown.querySelector('.selected');

    select.addEventListener('click', () => {
        select.classList.toggle('select-clicked');
        caret.classList.toggle('caret-rotate');
        menu.classList.toggle('menu-open');
    });

    options.forEach(option => {
        option.addEventListener('click', () => {
            selected.innerText = option.innerText;
            select.classList.remove('select-clicked');
            caret.classList.remove('caret-rotate');
            menu.classList.remove('menu-open');

            options.forEach(opt => opt.classList.remove('active'));
            option.classList.add('active');

            if (dropdown.querySelector('.selected').innerText === 'Fêmea' || dropdown.querySelector('.selected').innerText === 'Macho') {
                document.getElementById('sexoInput').value = option.innerText;
            } else if (dropdown.querySelector('.selected').innerText === 'Sim' || dropdown.querySelector('.selected').innerText === 'Não') {
                document.getElementById('prenhezInput').value = option.innerText === 'Sim' ? '1' : '0';
            }
        });
    });
});