document.addEventListener('DOMContentLoaded', function() {
    // Add data-title attributes to nav items for tooltips
    document.querySelectorAll('.nav-item').forEach(item => {
        const title = item.querySelector('.title');
        if (title) {
            item.setAttribute('data-title', title.textContent.trim());
        }
    });

    // Handle sidebar toggle
    const toggleButtons = document.querySelectorAll('.sidebar-toggler, .sidebar-mobile-toggler');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Add a small delay to allow CSS transitions to complete
            setTimeout(() => {
                const isCollapsed = document.getElementById('app').classList.contains('app-sidebar-closed');
                if (isCollapsed) {
                    document.querySelectorAll('.nav-section-title, .nav-section-header').forEach(el => {
                        el.style.display = 'none';
                    });
                } else {
                    document.querySelectorAll('.nav-section-title, .nav-section-header').forEach(el => {
                        el.style.display = '';
                    });
                }
            }, 300);
        });
    });
});
