document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('toggleBtn');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const sidebarTitle = document.getElementById('sidebarTitle');
    const linkTexts = document.querySelectorAll('.link-text');

    function applySidebarState(collapsed) {
        sidebar.classList.toggle('collapsed', collapsed);
        mainContent.classList.toggle('collapsed', collapsed);

        const opacity = collapsed ? '0' : '1';
        linkTexts.forEach(text => text.style.opacity = opacity);
        sidebarTitle.style.opacity = opacity;
    }

    function checkScreenSize() {
        if (window.matchMedia("(max-width: 723px)").matches) {
            applySidebarState(true); 
        } else {
            applySidebarState(false); 
        }
    }

    
    checkScreenSize();

    
    window.addEventListener('resize', checkScreenSize);

    toggleBtn.addEventListener('click', function () {
        applySidebarState(!sidebar.classList.contains('collapsed'));
    });
});
