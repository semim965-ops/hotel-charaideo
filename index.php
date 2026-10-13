
<?php
$hotelName = "Hotel Charaideo";
$phoneDisplay = "086383 37976";
$phoneLink = "+918638337976";
$whatsappLink = "https://wa.me/918638337976?text=" . rawurlencode(
    "Hello, I would like to enquire about room availability and rent at Hotel Charaideo."
);
$mapLink = "https://maps.app.goo.gl/ms1NWDEu1eoG5SKM9";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#08090b">
    <meta name="description" content="Hotel Charaideo in Kohora, Kaziranga, Assam. Enquire about rooms, parking and safari tours.">
    <title>Hotel Charaideo | Stay in Kaziranga</title>

    <style>
        :root {
            --black: #08090b;
            --panel: #121418;
            --gold: #d5b16b;
            --white: #ffffff;
            --muted: #c6c6c6;
            --border: rgba(213,177,107,.28);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 85px;
        }

        body {
            background: var(--black);
            color: var(--white);
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.7;
            overflow-x: hidden;
        }

        a { color: inherit; text-decoration: none; }
        button { font: inherit; cursor: pointer; }

        .container {
            width: min(1120px, 92%);
            margin: auto;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(8,9,11,.96);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(15px);
        }

        .navbar {
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            color: var(--gold);
            font-size: 19px;
            font-weight: 800;
            letter-spacing: 1.2px;
            line-height: 1.3;
        }

        .brand small {
            display: block;
            color: var(--muted);
            font-size: 10px;
            letter-spacing: 3px;
            margin-top: 4px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .nav-links a {
            font-size: 14px;
            transition: color .2s;
        }

        .nav-links a:hover { color: var(--gold); }

        .menu-button {
            display: none;
            padding: 6px 12px;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: var(--panel);
            color: var(--gold);
            font-size: 25px;
        }

        .hero {
            position: relative;
            isolation: isolate;
            min-height: 610px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #151515;
        }

        .slide {
            position: absolute;
            inset: 0;
            z-index: -2;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transform: scale(1.04);
            transition: opacity 1s ease, transform 6s ease;
        }

        .slide.active {
            opacity: 1;
            transform: scale(1);
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background: linear-gradient(
                90deg, rgba(0,0,0,.88),
                rgba(0,0,0,.60) 58%,
                rgba(0,0,0,.22)
            );
        }

        .hero-content {
            width: min(760px, 92%);
            margin: auto;
            padding: 80px 0 110px;
        }

        .eyebrow {
            color: var(--gold);
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .hero h1 {
            font-size: clamp(38px, 6vw, 68px);
            line-height: 1.1;
            margin-bottom: 22px;
        }

        .gold, .hero h1 span { color: var(--gold); }

        .hero p {
            max-width: 610px;
            color: #eeeeee;
            font-size: 17px;
            margin-bottom: 28px;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 47px;
            padding: 11px 20px;
            border: 1px solid var(--gold);
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            transition: transform .2s, background .2s;
        }

        .btn:hover { transform: translateY(-2px); }
        .btn-gold { background: var(--gold); color: #111; }
        .btn-outline { background: rgba(0,0,0,.25); color: white; }

        .dots {
            position: absolute;
            bottom: 27px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .dot {
            width: 11px;
            height: 11px;
            padding: 0;
            border: 1px solid white;
            border-radius: 50%;
            background: transparent;
        }

        .dot.active {
            background: var(--gold);
            border-color: var(--gold);
        }

        .content-section { padding: 78px 0; }

        .section-heading {
            max-width: 720px;
            text-align: center;
            margin: 0 auto 38px;
        }

        .section-heading h2 {
            font-size: clamp(28px, 4vw, 42px);
            line-height: 1.25;
            margin-bottom: 13px;
        }

        .section-heading p,
        .glass-card p,
        .tour-copy p,
        .contact-line p {
            color: var(--muted);
        }

        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .glass-card {
            min-width: 0;
            padding: 25px;
            border: 1px solid var(--border);
            border-radius: 15px;
            background: linear-gradient(
                145deg, rgba(255,255,255,.055),
                rgba(255,255,255,.015)
            );
            box-shadow: 0 12px 30px rgba(0,0,0,.15);
            transition: border-color .2s, transform .2s;
        }

        .glass-card:hover {
            border-color: var(--gold);
            transform: translateY(-4px);
        }

        .card-icon {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: rgba(213,177,107,.13);
            color: var(--gold);
            font-size: 23px;
            margin-bottom: 15px;
        }

        .glass-card h3 {
            font-size: 19px;
            margin-bottom: 8px;
        }

        .glass-card p { font-size: 14px; }

        .tour-section {
            background: #101114;
            border-block: 1px solid rgba(255,255,255,.05);
        }

        .tour-panel {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .tour-image {
            min-height: 340px;
            border: 1px solid var(--border);
            border-radius: 16px;
            background-image: url("https://images.unsplash.com/photo-1511497584788-876760111969?auto=format&fit=crop&w=1200&q=85");
            background-position: center;
            background-size: cover;
        }

        .tour-copy h2 {
            font-size: clamp(28px, 4vw, 40px);
            line-height: 1.25;
            margin-bottom: 16px;
        }

        .tour-list {
            list-style: none;
            margin: 20px 0 25px;
        }

        .tour-list li { margin-bottom: 9px; }
        .tour-list li::before {
            content: "✓";
            color: var(--gold);
            margin-right: 10px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
        }

        .contact-line {
            margin: 17px 0;
            overflow-wrap: anywhere;
        }

        .contact-line strong {
            display: block;
            color: var(--gold);
            margin-bottom: 3px;
        }

        .contact-line a { color: var(--muted); }
        .contact-line a:hover { color: var(--gold); }

        .map-frame {
            display: block;
            width: 100%;
            min-height: 320px;
            border: 1px solid var(--border);
            border-radius: 15px;
            background: var(--panel);
        }

        .final-cta {
            text-align: center;
            padding: 50px 20px;
            border: 1px solid var(--border);
            border-radius: 17px;
            background: linear-gradient(
                120deg, rgba(213,177,107,.13),
                rgba(255,255,255,.025)
            );
        }

        .final-cta h2 {
            font-size: clamp(26px, 4vw, 38px);
            margin-bottom: 12px;
        }

        .final-cta p {
            color: var(--muted);
            margin-bottom: 22px;
        }

        .site-footer {
            padding: 27px 0;
            border-top: 1px solid var(--border);
            color: var(--muted);
            font-size: 13px;
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }

        .footer-links { display: flex; flex-wrap: wrap; gap: 18px; }
        .footer-links a:hover { color: var(--gold); }

        .floating-actions {
            position: fixed;
            right: 16px;
            bottom: 16px;
            z-index: 900;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .floating-actions a {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: var(--gold);
            color: #111;
            font-size: 22px;
            box-shadow: 0 5px 18px #0006;
        }

        .floating-actions a:first-child {
            background: #25d366;
            color: white;
        }

        @media (max-width: 800px) {
            .menu-button { display: block; }

            .nav-links {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                padding: 16px 5%;
                background: rgba(8,9,11,.99);
                border-bottom: 1px solid var(--border);
                flex-direction: column;
                align-items: stretch;
                gap: 0;
            }

            .nav-links.open { display: flex; }

            .nav-links a {
                padding: 11px 0;
                border-bottom: 1px solid #ffffff12;
            }

            .facilities-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .tour-panel, .contact-grid { grid-template-columns: 1fr; }
            .tour-image { min-height: 270px; }
            .content-section { padding: 58px 0; }
        }

        @media (max-width: 520px) {
            .brand { font-size: 16px; }
            .hero { min-height: 570px; }
            .hero h1 { font-size: 39px; }
            .hero p { font-size: 15px; }
            .actions { flex-direction: column; align-items: stretch; }
            .btn { width: 100%; }
            .facilities-grid { grid-template-columns: 1fr; }
            .glass-card { padding: 22px; }
            .footer-inner { align-items: flex-start; flex-direction: column; }
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *, *::before, *::after { transition-duration: .01ms !important; }
        }
    </style>
</head>
<body>

<header class="site-header">
    <div class="container navbar">
        <a class="brand" href="#home">
            HOTEL CHARAIDEO
            <small>KAZIRANGA · ASSAM</small>
        </a>

        <button class="menu-button" id="menuBtn" type="button"
                aria-label="Open menu" aria-expanded="false"
                aria-controls="navLinks">☰</button>

        <nav class="nav-links" id="navLinks" aria-label="Main navigation">
            <a href="#home">Home</a>
            <a href="#facilities">Facilities</a>
            <a href="#tours">Safari &amp; Tours</a>
            <a href="#contact">Contact</a>
            <a href="rooms.php">Rooms</a>
        </nav>
    </div>
</header>

<main>
    <section class="hero" id="home" aria-label="Hotel image carousel">
        <div class="slide active"
             style="background-image:url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1800&q=85')"
             role="img" aria-label="Hotel exterior"></div>

        <div class="slide"
             style="background-image:url('https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1800&q=85')"
             role="img" aria-label="Hotel room"></div>

        <div class="slide"
             style="background-image:url('https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=1800&q=85')"
             role="img" aria-label="Property surroundings"></div>

        <div class="slide"
             style="background-image:url('https://images.unsplash.com/photo-1510798831971-661eb04b3739?auto=format&fit=crop&w=1800&q=85')"
             role="img" aria-label="Nature and travel"></div>

        <div class="hero-content container">
            <div class="eyebrow">Welcome to Hotel Charaideo</div>
            <h1>Your Stay in <span>Kaziranga</span> Starts Here</h1>
            <p>
                A convenient place to stay in Kohora, Kaziranga.
                Contact us to enquire about room availability,
                negotiable rent and local tour arrangements.
            </p>

            <div class="actions">
                <a class="btn btn-gold"
                   href="<?php echo htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8'); ?>"
                   target="_blank" rel="noopener noreferrer">
                    ☏ WhatsApp Enquiry
                </a>
                <a class="btn btn-outline" href="tel:<?php echo $phoneLink; ?>">
                    ☎ Call Now
                </a>
            </div>
        </div>

        <div class="dots" aria-label="Choose hero slide">
            <button class="dot active" type="button" aria-label="Slide 1" aria-pressed="true"></button>
            <button class="dot" type="button" aria-label="Slide 2" aria-pressed="false"></button>
            <button class="dot" type="button" aria-label="Slide 3" aria-pressed="false"></button>
            <button class="dot" type="button" aria-label="Slide 4" aria-pressed="false"></button>
        </div>
    </section>

    <section class="content-section" id="facilities">
        <div class="container">
            <div class="section-heading">
                <div class="eyebrow">Comfort &amp; Convenience</div>
                <h2>Our <span class="gold">Facilities</span></h2>
                <p>
                    Essential amenities for your stay in Kohora,
                    near Kaziranga National Park. Please contact us
                    to confirm availability and details.
                </p>
            </div>

            <div class="facilities-grid">
                <article class="glass-card">
                    <div class="card-icon">🛏</div>
                    <h3>Non-AC Rooms</h3>
                    <p>Non-AC rooms for guests visiting Kaziranga.</p>
                </article>

                <article class="glass-card">
                    <div class="card-icon">♨</div>
                    <h3>Geyser Facility</h3>
                    <p>Ask us about hot-water availability for your room.</p>
                </article>

                <article class="glass-card">
                    <div class="card-icon">🚗</div>
                    <h3>Parking</h3>
                    <p>Contact us about current guest parking arrangements.</p>
                </article>

                <article class="glass-card">
                    <div class="card-icon">🍱</div>
                    <h3>Outside Food</h3>
                    <p>Outside food is allowed, subject to hotel rules.</p>
                </article>

                <article class="glass-card">
                    <div class="card-icon">🤝</div>
                    <h3>Couples Welcome</h3>
                    <p>Subject to valid identification and hotel policies.</p>
                </article>

                <article class="glass-card">
                    <div class="card-icon">₹</div>
                    <h3>Negotiable Rent</h3>
                    <p>Contact us directly to discuss room rates and availability.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="content-section tour-section" id="tours">
        <div class="container tour-panel">
            <div class="tour-image" role="img" aria-label="Green forest landscape"></div>

            <div class="tour-copy">
                <div class="eyebrow">Explore Kaziranga</div>
                <h2>Plan Your <span class="gold">Safari &amp; Tour</span></h2>
                <p>
                    Discover the natural beauty of Kaziranga and the
                    surrounding area. Ask Hotel Charaideo about safari
                    tour arrangements and local travel options.
                </p>

                <ul class="tour-list">
                    <li>Safari tour enquiries</li>
                    <li>Local sightseeing information</li>
                    <li>Tour arrangement enquiries</li>
                    <li>Confirm availability and charges in advance</li>
                </ul>

                <a class="btn btn-gold"
                   href="<?php echo htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8'); ?>"
                   target="_blank" rel="noopener noreferrer">
                    Enquire About Tours
                </a>
            </div>
        </div>
    </section>

    <section class="content-section" id="contact">
        <div class="container">
            <div class="section-heading">
                <div class="eyebrow">Get in Touch</div>
                <h2>Contact <span class="gold">Hotel Charaideo</span></h2>
                <p>Contact us for room availability, rent, directions and tour enquiries.</p>
            </div>

            <div class="contact-grid">
                <div class="glass-card">
                    <h3>Hotel Information</h3>

                    <div class="contact-line">
                        <strong>Address</strong>
                        <p>Kaziranga, Kohora, NH-37,<br>Golaghat, Assam 785609, India</p>
                    </div>

                    <div class="contact-line">
                        <strong>Phone</strong>
                        <a href="tel:<?php echo $phoneLink; ?>">
                            <?php echo htmlspecialchars($phoneDisplay, ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    </div>

                    <div class="contact-line">
                        <strong>Room Enquiries</strong>
                        <a href="<?php echo htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8'); ?>"
                           target="_blank" rel="noopener noreferrer">Message us on WhatsApp</a>
                    </div>

                    <div class="actions" style="margin-top:25px">
                        <a class="btn btn-gold"
                           href="<?php echo htmlspecialchars($mapLink, ENT_QUOTES, 'UTF-8'); ?>"
                           target="_blank" rel="noopener noreferrer">
                            Open Google Maps
                        </a>
                    </div>
                </div>

                <iframe
                    class="map-frame"
                    title="Hotel Charaideo location in Kaziranga"
                    src="https://maps.google.com/maps?q=Hotel%20Charaideo%2C%20Kohora%2C%20Kaziranga%2C%20Assam&z=14&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="final-cta">
                <div class="eyebrow">Your Kaziranga Visit</div>
                <h2>Looking for a Room?</h2>
                <p>Contact Hotel Charaideo to discuss room availability and negotiable rent.</p>

                <div class="actions" style="justify-content:center">
                    <a class="btn btn-gold"
                       href="<?php echo htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8'); ?>"
                       target="_blank" rel="noopener noreferrer">WhatsApp Us</a>

                    <a class="btn btn-outline" href="tel:<?php echo $phoneLink; ?>">
                        Call <?php echo htmlspecialchars($phoneDisplay, ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container footer-inner">
        <div>© <span data-current-year></span> Hotel Charaideo. All rights reserved.</div>
        <div class="footer-links">
            <a href="#home">Home</a>
            <a href="#facilities">Facilities</a>
            <a href="rooms.php">Rooms</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>
</footer>

<div class="floating-actions" aria-label="Quick contact">
    <a href="<?php echo htmlspecialchars($whatsappLink, ENT_QUOTES, 'UTF-8'); ?>"
       target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">☏</a>
    <a href="tel:<?php echo $phoneLink; ?>" aria-label="Call hotel">☎</a>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.getElementById('menuBtn');
    const navLinks = document.getElementById('navLinks');

    if (menuButton && navLinks) {
        menuButton.addEventListener('click', function () {
            const open = navLinks.classList.toggle('open');
            menuButton.setAttribute('aria-expanded', String(open));
            menuButton.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
            menuButton.textContent = open ? '✕' : '☰';
        });

        navLinks.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                navLinks.classList.remove('open');
                menuButton.setAttribute('aria-expanded', 'false');
                menuButton.setAttribute('aria-label', 'Open menu');
                menuButton.textContent = '☰';
            });
        });
    }

    const hero = document.querySelector('.hero');
    const slides = Array.from(document.querySelectorAll('.hero .slide'));
    const dots = Array.from(document.querySelectorAll('.hero .dots .dot'));

    if (hero && slides.length) {
        let index = 0;
        let timer;

        function showSlide(next) {
            index = (next + slides.length) % slides.length;
            slides.forEach(function (slide, i) {
                slide.classList.toggle('active', i === index);
            });
            dots.forEach(function (dot, i) {
                dot.classList.toggle('active', i === index);
                dot.setAttribute('aria-pressed', String(i === index));
            });
        }

        function startCarousel() {
            clearInterval(timer);
            if (slides.length > 1) {
                timer = setInterval(function () {
                    showSlide(index + 1);
                }, 5000);
            }
        }

        dots.forEach(function (dot, i) {
            dot.addEventListener('click', function () {
                showSlide(i);
                startCarousel();
            });
        });

        hero.addEventListener('mouseenter', function () {
            clearInterval(timer);
        });
        hero.addEventListener('mouseleave', startCarousel);
        hero.addEventListener('focusin', function () {
            clearInterval(timer);
        });
        hero.addEventListener('focusout', startCarousel);

        showSlide(0);
        startCarousel();
    }

    document.querySelectorAll('[data-current-year]').forEach(function (element) {
        element.textContent = new Date().getFullYear();
    });
});
</script>

</body>
</html>
