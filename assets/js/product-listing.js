document.addEventListener('DOMContentLoaded', () => {
    const viewBtns = document.querySelectorAll('.view-btn');
    const shopGrid = document.getElementById('shopGrid');

    viewBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            viewBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            btn.classList.add('active');

            // Change CSS Grid columns based on data-col attribute
            const columns = btn.getAttribute('data-col');
            shopGrid.style.gridTemplateColumns = `repeat(${columns}, 1fr)`;
        });
    });

    // Filter Drawer Logic
    const filterBtn = document.querySelector('.filter-btn');
    const closeDrawer = document.getElementById('closeDrawer');
    const filterDrawer = document.getElementById('filterDrawer');
    const drawerOverlay = document.getElementById('drawerOverlay');

    const toggleDrawer = () => {
        filterDrawer.classList.toggle('active');
        drawerOverlay.classList.toggle('active');
        // Prevent scrolling when drawer is open
        document.body.style.overflow = filterDrawer.classList.contains('active') ? 'hidden' : '';
    };

    if (filterBtn) filterBtn.addEventListener('click', toggleDrawer);
    if (closeDrawer) closeDrawer.addEventListener('click', toggleDrawer);
    if (drawerOverlay) drawerOverlay.addEventListener('click', toggleDrawer);
});