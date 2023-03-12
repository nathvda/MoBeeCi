import './bootstrap';

let buttons = document.getElementById('nav_bar');

buttons.addEventListener('change', (e) => {
    console.log(e.target);
    console.log(buttons);

    console.log(e.target.checked);
    let infos = buttons.querySelectorAll('input[type=checkbox]');
    for(let info of infos){
        console.log(info.checked);
    }

})
