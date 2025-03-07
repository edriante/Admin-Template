// Agnayun t class nga sm-screen no jay screen kt bumasit.
function checkScreenSize() {
    if (window.innerWidth < 724) {
        document.body.classList.add('sm-screen');
    } else {
        document.body.classList.remove('sm-screen');
    }
}
window.addEventListener('load', checkScreenSize);
window.addEventListener('resize', checkScreenSize);
