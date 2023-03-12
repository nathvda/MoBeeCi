import "./bootstrap";
<<<<<<< HEAD
import './bootstrap';
=======
import "./bootstrap";
>>>>>>> ben

let buttons = document.getElementById("nav_bar");

buttons.addEventListener('change', (e) => {

    let infos = buttons.querySelectorAll('input[type=checkbox]');
    
    infos.forEach((a, index) =>{
        if ( a.checked === true ) {
            document.querySelector('.maps').querySelectorAll('.layer')[index].style.display = "block";
        } else { 
            document.querySelector('.maps').querySelectorAll('.layer')[index].style.display = "none";
        }
        });
})
