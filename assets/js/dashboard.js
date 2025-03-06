document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('toggleBtn');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const sidebarTitle = document.getElementById('sidebarTitle');
    const linkTexts = document.querySelectorAll('.link-text');

    toggleBtn.addEventListener('click', function () {
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('collapsed');
        
        linkTexts.forEach(text => {
            text.style.transition = 'opacity 0.3s ease';
            text.style.opacity = sidebar.classList.contains('collapsed') ? '0' : '1';
        });

        sidebarTitle.style.opacity = sidebar.classList.contains('collapsed') ? '0' : '1';
    });
});

