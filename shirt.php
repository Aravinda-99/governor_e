<?php include 'assets/includes/header.php'; ?>

<!-- Link to shirt specific CSS if needed, otherwise it's in header.php -->
<link rel="stylesheet" href="assets/css/shirt.css">

<section class="category-banner" data-aos="fade-in">
    <div class="banner-overlay"></div>
    
    <div class="banner-content">
        <div class="breadcrumb">
            <a href="index.php">Home</a> / <span>Shirts</span>
        </div>
        
        <h1 class="banner-title">SHIRTS</h1>
    </div>
</section>

<section class="product-listing-section">
    <div class="container">
        
        <div class="shop-toolbar">
            <div class="toolbar-left">
                <button class="filter-btn">
                    <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                    Filter
                </button>
                
                <div class="view-toggles">
                    <button class="view-btn" data-col="2"><svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><rect x="3" y="3" width="7" height="18"/><rect x="14" y="3" width="7" height="18"/></svg></button>
                    <button class="view-btn" data-col="3"><svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><rect x="2" y="3" width="5" height="18"/><rect x="9.5" y="3" width="5" height="18"/><rect x="17" y="3" width="5" height="18"/></svg></button>
                    <button class="view-btn active" data-col="4"><svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><rect x="2" y="3" width="3.5" height="18"/><rect x="7.5" y="3" width="3.5" height="18"/><rect x="13" y="3" width="3.5" height="18"/><rect x="18.5" y="3" width="3.5" height="18"/></svg></button>
                </div>
            </div>

            <div class="toolbar-right">
                <div class="sort-box">
                    <label>Sort by:</label>
                    <select>
                        <option>Date, new to old</option>
                        <option>Date, old to new</option>
                        <option>Price, low to high</option>
                        <option>Price, high to low</option>
                    </select>
                </div>
                <span class="product-count">24 Products</span>
            </div>
        </div>

        <div class="shop-grid" id="shopGrid">
            
            <!-- Products will be added here, currently showing placeholders similar to t-shirt.php -->
            <div class="shop-card" data-aos="fade-up" data-aos-delay="100">
                <div class="shop-img-wrapper">
                    <!-- Placeholder image -->
                    <img src="assets/images/product/sc1.png" alt="Shirt 1">
                </div>
                <div class="shop-info">
                    <h3>PREMIUM OFFICE WEAR SHIRT - WHITE</h3>
                    <p class="price">Rs 5,450.00</p>
                    <p class="installment">or pay in 3 x Rs 1,816.66 with KOKO</p>
                </div>
            </div>

            <div class="shop-card" data-aos="fade-up" data-aos-delay="200">
                <div class="shop-img-wrapper">
                    <img src="assets/images/product/sc2.png" alt="Shirt 2">
                </div>
                <div class="shop-info">
                    <h3>CASUAL STRIPED SHIRT - BLUE</h3>
                    <p class="price">Rs 4,950.00</p>
                    <p class="installment">or pay in 3 x Rs 1,650.00 with KOKO</p>
                </div>
            </div>

            <div class="shop-card" data-aos="fade-up" data-aos-delay="300">
                <div class="shop-img-wrapper">
                    <img src="assets/images/product/sc3.png" alt="Shirt 3">
                </div>
                <div class="shop-info">
                    <h3>FORMAL SLIM FIT SHIRT</h3>
                    <p class="price">Rs 5,950.00</p>
                    <p class="installment">or pay in 3 x Rs 1,983.33 with KOKO</p>
                </div>
            </div>

            <div class="shop-card" data-aos="fade-up" data-aos-delay="400">
                <div class="shop-img-wrapper">
                    <img src="assets/images/product/sc4.png" alt="Shirt 4">
                </div>
                <div class="shop-info">
                    <h3>PRINTED CASUAL SHIRT</h3>
                    <p class="price">Rs 4,850.00</p>
                    <p class="installment">or pay in 3 x Rs 1,616.66 with KOKO</p>
                </div>
            </div>

            </div>
    </div>
</section>

<!-- Filter Drawer -->
<div class="filter-drawer" id="filterDrawer">
    <div class="drawer-header">
        <h3>FILTER</h3>
        <button class="close-drawer" id="closeDrawer">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
    </div>
    
    <div class="drawer-body">
        <div class="filter-group">
            <h4>SIZE</h4>
            <label class="filter-item">
                <input type="checkbox"> <span>15.5</span>
            </label>
            <label class="filter-item">
                <input type="checkbox"> <span>16.0</span>
            </label>
            <label class="filter-item">
                <input type="checkbox"> <span>16.5</span>
            </label>
            <label class="filter-item">
                <input type="checkbox"> <span>17.0</span>
            </label>
        </div>

        <div class="filter-group">
            <h4>COLORS</h4>
            <label class="filter-item">
                <input type="checkbox"> <span>WHITE</span>
            </label>
            <label class="filter-item">
                <input type="checkbox"> <span>BLUE</span>
            </label>
            <label class="filter-item">
                <input type="checkbox"> <span>BLACK</span>
            </label>
        </div>


        <div class="filter-group">
            <h4>BRAND</h4>
            <label class="filter-item">
                <input type="checkbox"> <span>TOM CARTER</span> <small>(15)</small>
            </label>
        </div>
        
    </div>

    <div class="drawer-footer">
        <button class="apply-btn">APPLY FILTERS</button>
        <button class="clear-btn">CLEAR ALL</button>
    </div>
</div>
<div class="drawer-overlay" id="drawerOverlay"></div>

<?php include 'assets/includes/footer.php'; ?>

<script src="assets/js/product-listing.js"></script>

<!-- AOS Library JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });

    // Scroll to Top Logic
    const scrollToTopBtn = document.getElementById('scrollToTop');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
    });

    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
</body>
</html>
