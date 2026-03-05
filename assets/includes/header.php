<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Governor Header</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/hero.css">
    <link rel="stylesheet" href="assets/css/newarrival.css">
    <link rel="stylesheet" href="assets/css/shirtcollection.css">
    <link rel="stylesheet" href="assets/css/topcategories.css">
    <link rel="stylesheet" href="assets/css/fast-movings.css">
    <link rel="stylesheet" href="assets/css/linen-banner.css">
    <link rel="stylesheet" href="assets/css/flash-sale.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <!-- Animate.css Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <header>
        <div class="top-bar">
            <div class="top-bar-content">
                <span>FREE DELIVERY ON ORDERS ABOVE LKR 10,000/-</span>
                <span>FREE DELIVERY ON ORDERS ABOVE LKR 10,000/-</span>
                <span>FREE DELIVERY ON ORDERS ABOVE LKR 10,000/-</span>
                <span>FREE DELIVERY ON ORDERS ABOVE LKR 10,000/-</span>
            </div>
            <div class="top-bar-content">
                <span>FREE DELIVERY ON ORDERS ABOVE LKR 10,000/-</span>
                <span>FREE DELIVERY ON ORDERS ABOVE LKR 10,000/-</span>
                <span>FREE DELIVERY ON ORDERS ABOVE LKR 10,000/-</span>
                <span>FREE DELIVERY ON ORDERS ABOVE LKR 10,000/-</span>
            </div>
        </div>

        <nav class="navbar">
            <button class="hamburger" id="hamburgerBtn">
                <svg viewBox="0 0 24 24"><path d="M3 12h18M3 6h18M3 18h18" stroke-linecap="round"/></svg>
            </button>

            <a href="#" class="logo">GOVERNOR</a>

            <ul class="nav-links" id="navLinks">
                <li><a href="#">HOME</a></li>
                <li><a href="#">T SHIRTS <i>⌵</i></a></li>
                <li><a href="#">SHIRTS <i>⌵</i></a></li>
                <li><a href="#" class="contact-us">CONTACT US</a></li>
            </ul>

            <div class="nav-icons">
                <button class="icon-btn">
                    <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35" stroke-linecap="round"/></svg>
                </button>
                <button class="icon-btn" style="display: none; /* Can unhide if needed on mobile */">
                    <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </button>
                <button class="icon-btn">
                    <svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 01-8 0"/></svg>
                    <span class="cart-badge">3</span>
                </button>
            </div>
        </nav>
    </header>

    <script>
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const navLinks = document.getElementById('navLinks');

        const header = document.querySelector('header');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        });

        hamburgerBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
