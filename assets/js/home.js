document.getElementById("sidebar").addEventListener("click", function() {
    
    if (window.innerWidth >= 724) {
        document.querySelector(".sidebar").classList.toggle("collapsed");
    }
});