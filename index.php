
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#08090b">
  <meta name="description" content="Hotel Charaideo in Kohora, Kaziranga, Assam. Comfortable non-AC rooms, parking and safari tour assistance. Contact us for room enquiries.">
  <title>Hotel Charaideo | Stay in Kaziranga</title>

  <style>
    :root {
      --black: #08090b;
      --gold: #d5b16b;
      --white: #ffffff;
      --muted: #c6c6c6;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    html { scroll-behavior: smooth; }

    body {
      background: var(--black);
      color: var(--white);
      font-family: Arial, Helvetica, sans-serif;
      line-height: 1.6;
    }

    a { color: inherit; text-decoration: none; }

    .header {
      position: sticky;
      top: 0;
      z-index: 10;
      background: rgba(8, 9, 11, .88);
      backdrop-filter: blur(18px);
      border-bottom: 1px solid rgba(213, 177, 107, .3);
    }

    .nav {
      max-width: 1200px;
      min-height: 82px;
      margin: auto;
      padding: 16px 22px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
    }

    .brand { color: var(--gold); font-size: 22px; font-weight: 800; }
    .brand small { display: block; font-size: 10px; letter-spacing: 3px; }

    .links { display: flex; gap: 26px; align-items: center; }
    .links a:hover { color: var(--gold); }

    .menu-btn {
      display: none;
      border: 1px solid var(--gold);
      color: var(--gold);
      background: transparent;
      padding: 8px 12px;
      border-radius: 8px;
      font-size: 22px;
      cursor: pointer;
    }

    .hero {
      position: relative;
      min-height: 610px;
      display: flex;
      align-items: center;
      overflow: hidden;
      background: #171717;
    }

    .slide {
      position: absolute;
      inset: 0;
      opacity: 0;
      transition: opacity .8s ease;
      background-size: cover;
      background-position: center;
    }

    .slide.active { opacity: 1; }

    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg, rgba(0,0,0,.86), rgba(0,0,0,.25)),
                  linear-gradient(0deg, rgba(0,0,0,.5), transparent);
      z-index: 1;
      pointer-events: none;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      width: 100%;
      max-width: 1200px;
      padding: 90px 24px;
      margin: auto;
    }

    .eyebrow {
      color: var(--gold);
      text-transform: uppercase;
      letter-spacing: 4px;
      font-size: 12px;
      font-weight: bold;
    }

    h1 {
      max-width: 700px;
      font-size: clamp(38px, 6vw, 72px);
      line-height: 1.1;
      margin: 18px 0;
    }

    h1 span { color: var(--gold); }

    .hero-content p {
      max-width: 580px;
      color: #eeeeee;
      font-size: 17px;
      margin-bottom: 28px;
    }

    .actions { display: flex; flex-wrap: wrap; gap: 12px; }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 48px;
      padding: 12px 22px;
      border-radius: 8px;
      font-weight: bold;
      transition: .25s;
    }

    .btn-gold { background: var(--gold); color: #111; }
    .btn-outline { border: 1px solid var(--gold); color: var(--white); }
    .btn:hover { transform: translateY(-2px); }

    .dots {
      position: absolute;
      z-index: 3;
      bottom: 26px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 10px;
    }

    .dot {
      width: 11px;
      height: 11px;
      border-radius: 50%;
      border: 1px solid white;
      background: transparent;
      cursor: pointer;
    }

    .dot.active { background: var(--gold); border-color: var(--gold); }

    section { padding: 80px 22px; }

    .container { max-width: 1100px; margin: auto; }

    .section-title { text-align: center; margin-bottom: 38px; }
    .section-title h2 { font-size: clamp(28px, 4vw, 42px); }
    .section-title p { color: var(--muted); margin-top: 8px; }
    .gold { color: var(--gold); }

    .glass {
      background: rgba(255,255,255,.045);
      border: 1px solid rgba(213,177,107,.22);
      border-radius: 16px;
      padding: 26px;
      backdrop-filter: blur(12px);
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .feature-icon { font-size: 30px; margin-bottom: 12px; }
    .glass h3 { margin-bottom: 8px; }
    .glass p { color: var(--muted); }

    .about {
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      gap: 35px;
    }

    .about img {
      display: block;
      width: 100%;
      min-height: 280px;
      object-fit: cover;
      border-radius: 16px;
      border: 1px solid rgba(213,177,107,.4);
    }

    .about h2 { font-size: 36px; margin: 12px 0; }
    .about p { color: var(--muted); margin-bottom: 22px; }

    .contact { text-align: center; }
    .contact .glass { max-width: 750px; margin: auto; }
    .contact p { margin: 10px 0; }

    footer {
      padding: 28px 20px;
      border-top: 1px solid rgba(213,177,107,.25);
      text-align: center;
      color: var(--muted);
    }

    footer strong { color: var(--gold); }

    .float-wa {
      position: fixed;
      right: 20px;
      bottom: 20px;
      z-index: 20;
      background: #25d366;
      color: #07160c;
      padding: 13px 18px;
      border-radius: 40px;
      font-weight: bold;
      box-shadow: 0 5px 24px #0008;
    }

    @media (max-width: 760px) {
      .nav { min-height: 70px; }
      .menu-btn { display: block; }

      .links {
        display: none;
        position: absolute;
        top: 70px;
        left: 0;
        right: 0;
        background: #101114;
        padding: 22px;
        flex-direction: column;
        align-items: stretch;
        gap: 18px;
        border-bottom: 1px solid var(--gold);
      }

      .links.open { display: flex; }
      .hero { min-height: 570px; }
      .hero-content { padding: 70px 22px; }
      .grid { grid-template-columns: 1fr; }
      .about { grid-template-columns: 1fr; }
      section { padding: 58px 18px; }
    }

    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after {
        scroll-behavior: auto !important;
        transition: none !important;
      }
    }
  </style>
</head>

<body>
<header class="header">
  <nav class="nav">
    <a href="#home" class="brand">
      HOTEL CHARAIDEO
      <small>KAZIRANGA · ASSAM</small>
    </a>

    <button class="menu-btn" id="menuBtn"
      aria-label="Open navigation" aria-expanded="false"
      aria-controls="navLinks">☰</button>

    <div class="links" id="navLinks">
      <a href="#home">Home</a>
      <a href="#rooms">Room Facilities</a>
      <a href="#tours">Safari &amp; Zip Tour</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>
</header>

<main>
  <section class="hero" id="home" aria-label="Hotel image carousel">
    <div class="slide active"
      style="background-image:url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1800&q=85')"></div>
    <div class="slide"
      style="background-image:url('https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=1800&q=85')"></div>
    <div class="slide"
      style="background-image:url('https://images.unsplash.com/photo-1564013799919-ab600027ffc6?auto=format&fit=crop&w=1800&q=85')"></div>
    <div class="slide"
      style="background-image:url('https://images.unsplash.com/photo-1510798831971-661eb04b3739?auto=format&fit=crop&w=1800&q=85')"></div>

    <div class="hero-content">
      <div class="eyebrow">Welcome to Hotel Charaideo</div>
      <h1>Your Stay in <span>Kaziranga</span> Starts Here</h1>
      <p>
        A convenient place to stay in Kohora, Kaziranga.
        Contact us to enquire about room availability, negotiable
        rent and local tour arrangements.
      </p>
      <div class="actions">
        <a class="btn btn-gold" target="_blank" rel="noopener noreferrer"
          href="https://wa.me/918638337976?text=Hello%2C%20I%20would%20like%20to%20enquire%20about%20room%20availability%20and%20rent%20at%20Hotel%20Charaideo.">
          WhatsApp Enquiry
        </a>
        <a class="btn btn-outline" href="tel:+918638337976">☎ Call Now</a>
      </div>
    </div>

    <div class="dots" aria-label="Choose hero slide">
      <button class="dot active" aria-label="Slide 1" aria-pressed="true"></button>
      <button class="dot" aria-label="Slide 2" aria-pressed="false"></button>
      <button class="dot" aria-label="Slide 3" aria-pressed="false"></button>
      <button class="dot" aria-label="Slide 4" aria-pressed="false"></button>
    </div>
  </section>

  <section id="rooms">
    <div class="container">
      <div class="section-title">
        <div class="eyebrow">Comfort &amp; Convenience</div>
        <h2>Room <span class="gold">Facilities</span></h2>
        <p>Contact us directly to discuss your stay and room rent.</p>
      </div>

      <div class="grid">
        <article class="glass">
          <div class="feature-icon">🛏️</div>
          <h3>Non-AC Rooms</h3>
          <p>Non-air-conditioned accommodation for your visit to Kaziranga.</p>
        </article>
        <article class="glass">
          <div class="feature-icon">🚿</div>
          <h3>Geyser</h3>
          <p>Geyser facility available.</p>
        </article>
        <article class="glass">
          <div class="feature-icon">🚗</div>
          <h3>Parking</h3>
          <p>Parking facility available for guests.</p>
        </article>
        <article class="glass">
          <div class="feature-icon">🍽️</div>
          <h3>Outside Food</h3>
          <p>Guests are allowed to bring outside food.</p>
        </article>
        <article class="glass">
          <div class="feature-icon">💰</div>
          <h3>Negotiable Rent</h3>
          <p>Contact us to discuss room rates and availability.</p>
        </article>
        <article class="glass">
          <div class="feature-icon">🤝</div>
          <h3>Couple Policy</h3>
          <p>Couples are allowed, subject to applicable ID and hotel policies.</p>
        </article>
      </div>

      <div class="actions" style="justify-content:center;margin-top:30px">
        <a class="btn btn-gold" target="_blank" rel="noopener noreferrer"
          href="https://wa.me/918638337976?text=Hello%2C%20please%20share%20room%20availability%20and%20rent%20details.">
          Enquire About Rooms
        </a>
      </div>
    </div>
  </section>

  <section id="tours">
    <div class="container about">
      <img
        src="https://images.unsplash.com/photo-1516426122078-c23e76319801?auto=format&fit=crop&w=1000&q=85"
        alt="Wildlife safari landscape"
        loading="lazy">
      <div>
        <div class="eyebrow">Explore the Outdoors</div>
        <h2>Discover <span class="gold">Kaziranga</span></h2>
        <p>
          Planning a wildlife adventure? Contact Hotel Charaideo
          to enquire about available safari tours and zip tour
          arrangements. Please confirm availability and prices
          directly before making plans.
        </p>
        <div class="actions">
          <a class="btn btn-gold" target="_blank" rel="noopener noreferrer"
            href="https://wa.me/918638337976?text=Hello%2C%20I%20would%20like%20to%20enquire%20about%20Safari%20and%20Zip%20Tour%20availability%20and%20prices.">
            Enquire About Tours
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <div class="eyebrow">We Are Here to Help</div>
        <h2>Contact <span class="gold">Us</span></h2>
      </div>

      <div class="glass">
        <h3 class="gold">Hotel Charaideo</h3>
        <p>Kaziranga, Kohora, NH-37, Golaghat, Assam 785609</p>
        <p>Phone: <a href="tel:+918638337976">086383 37976</a></p>
        <div class="actions" style="justify-content:center;margin-top:22px">
          <a class="btn btn-gold" target="_blank" rel="noopener noreferrer"
            href="https://wa.me/918638337976?text=Hello%2C%20I%20am%20interested%20in%20staying%20at%20Hotel%20Charaideo.">
            WhatsApp Us
          </a>
          <a class="btn btn-outline" target="_blank" rel="noopener noreferrer"
            href="https://maps.app.goo.gl/ms1NWDEu1eoG5SKM9">
            Get Directions
          </a>
          <a class="btn btn-outline" href="tel:+918638337976">Call Now</a>
        </div>
      </div>
    </div>
  </section>
</main>

<footer>
  <p><strong>HOTEL CHARAIDEO</strong> · Kohora, Kaziranga, Assam</p>
  <p>© <span id="year"></span> Hotel Charaideo. All rights reserved.</p>
</footer>

<a class="float-wa" target="_blank" rel="noopener noreferrer"
  href="https://wa.me/918638337976?text=Hello%2C%20I%20would%20like%20to%20enquire%20about%20Hotel%20Charaideo."
  aria-label="Chat with Hotel Charaideo on WhatsApp">WhatsApp ↗</a>

<script>
  const slides = document.querySelectorAll('.slide');
  const dots = document.querySelectorAll('.dot');
  const menuBtn = document.getElementById('menuBtn');
  const navLinks = document.getElementById('navLinks');
  let current = 0;
  let timer;

  function showSlide(index) {
    current = index;
    slides.forEach((slide, i) =>
      slide.classList.toggle('active', i === current)
    );
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === current);
      dot.setAttribute('aria-pressed', String(i === current));
    });
  }

  function startCarousel() {
    clearInterval(timer);
    if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      timer = setInterval(() => showSlide((current + 1) % slides.length), 5000);
    }
  }

  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      showSlide(i);
      startCarousel();
    });
  });

  menuBtn.addEventListener('click', () => {
    const isOpen = navLinks.classList.toggle('open');
    menuBtn.setAttribute('aria-expanded', String(isOpen));
    menuBtn.setAttribute('aria-label', isOpen ? 'Close navigation' : 'Open navigation');
    menuBtn.textContent = isOpen ? '✕' : '☰';
  });

  navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      navLinks.classList.remove('open');
      menuBtn.setAttribute('aria-expanded', 'false');
      menuBtn.setAttribute('aria-label', 'Open navigation');
      menuBtn.textContent = '☰';
    });
  });

  document.getElementById('year').textContent = new Date().getFullYear();
  startCarousel();
</script>
</body>
</html>
