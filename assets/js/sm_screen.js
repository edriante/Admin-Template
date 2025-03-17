// Agnayun t class nga sm-screen no jay screen kt bumasit.
const maimai = document.querySelector('main');

function checkScreenSize() {
    
    if (window.innerWidth < 724) {
        document.body.classList.add('sm-screen');   
        maimai.classList.add('sm-screen'); 
    } else {
        document.body.classList.remove('sm-screen');
        maimai.classList.remove('sm-screen');    
    }
}
window.addEventListener('load', checkScreenSize);
window.addEventListener('resize', checkScreenSize);
