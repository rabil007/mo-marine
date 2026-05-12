<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= esc($title) ?></title>
    <meta name="description" content="<?= esc($description) ?>"/>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"/>
    <meta name="theme-color" content="#00142b"/>
    <base href="<?= base_url('/') ?>"/>
    <link rel="canonical" href="<?= $canonical ?>"/>
    <link rel="icon" type="image/png" href="https://lh3.googleusercontent.com/aida/ADBb0uja4Pi6GeJT_mp_CqXVXb_-sYCGSBshAeYzAVqZ2X7Fb6s1GVoTslzmP0TCXhHeHT7QAgK8yTTVhxPQUkPvvLgk-Weuhk2NZo-kNLnMs5ct6hKOviBkRS_u_Y3jWRPh8YGCTQUAcVudlWXCHJgijq3v0BCmW5mt4ptwwMZDhjzj4YZ7RyKv4rdxBfxsjQ6NFFqDQd1ZFFJdEnuBpPDZjMwKCuDQtEQM6EnRe99BrFGGz8QJkbcJc29Z_am7mr-jlPpcEfpblO0W2Q"/>
    <link rel="shortcut icon" href="https://lh3.googleusercontent.com/aida/ADBb0uja4Pi6GeJT_mp_CqXVXb_-sYCGSBshAeYzAVqZ2X7Fb6s1GVoTslzmP0TCXhHeHT7QAgK8yTTVhxPQUkPvvLgk-Weuhk2NZo-kNLnMs5ct6hKOviBkRS_u_Y3jWRPh8YGCTQUAcVudlWXCHJgijq3v0BCmW5mt4ptwwMZDhjzj4YZ7RyKv4rdxBfxsjQ6NFFqDQd1ZFFJdEnuBpPDZjMwKCuDQtEQM6EnRe99BrFGGz8QJkbcJc29Z_am7mr-jlPpcEfpblO0W2Q"/>
    <link rel="apple-touch-icon" href="https://lh3.googleusercontent.com/aida/ADBb0uja4Pi6GeJT_mp_CqXVXb_-sYCGSBshAeYzAVqZ2X7Fb6s1GVoTslzmP0TCXhHeHT7QAgK8yTTVhxPQUkPvvLgk-Weuhk2NZo-kNLnMs5ct6hKOviBkRS_u_Y3jWRPh8YGCTQUAcVudlWXCHJgijq3v0BCmW5mt4ptwwMZDhjzj4YZ7RyKv4rdxBfxsjQ6NFFqDQd1ZFFJdEnuBpPDZjMwKCuDQtEQM6EnRe99BrFGGz8QJkbcJc29Z_am7mr-jlPpcEfpblO0W2Q"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="preconnect" href="https://lh3.googleusercontent.com" crossorigin/>
    <link rel="dns-prefetch" href="https://fonts.googleapis.com"/>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com"/>
    <link rel="dns-prefetch" href="https://lh3.googleusercontent.com"/>
    <link rel="preload" as="image" href="<?= esc($preload_image) ?>" fetchpriority="high"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="M&amp;O Marine Service"/>
    <meta property="og:title" content="<?= esc($title) ?>"/>
    <meta property="og:description" content="<?= esc($description) ?>"/>
    <meta property="og:url" content="<?= $canonical ?>"/>
    <meta property="og:image" content="<?= esc($og_image) ?>"/>
    <meta property="og:image:alt" content="<?= esc($og_image_alt) ?>"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="<?= esc($title) ?>"/>
    <meta name="twitter:description" content="<?= esc($description) ?>"/>
    <meta name="twitter:image" content="<?= esc($og_image) ?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@400;500;600;700;800&family=Material+Symbols+Outlined:wght,FILL,GRAD,opsz@300,0,0,24&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/tailwind.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","@id":"https://mo-marine.com/#organization","name":"M&O Marine Services & Ship Supplies Ltd","url":"https://mo-marine.com/","logo":"https://lh3.googleusercontent.com/aida/ADBb0uja4Pi6GeJT_mp_CqXVXb_-sYCGSBshAeYzAVqZ2X7Fb6s1GVoTslzmP0TCXhHeHT7QAgK8yTTVhxPQUkPvvLgk-Weuhk2NZo-kNLnMs5ct6hKOviBkRS_u_Y3jWRPh8YGCTQUAcVudlWXCHJgijq3v0BCmW5mt4ptwwMZDhjzj4YZ7RyKv4rdxBfxsjQ6NFFqDQd1ZFFJdEnuBpPDZjMwKCuDQtEQM6EnRe99BrFGGz8QJkbcJc29Z_am7mr-jlPpcEfpblO0W2Q","image":"https://mo-marine.com/assets/images/hero_bg.png","email":"hala@mo-marine.com","sameAs":["https://www.instagram.com/momarineservices?igsh=MWMxcGlqYTd0dnE3Mw%3D%3D&utm_source=qr","https://www.facebook.com/share/19BLcN5STF/?mibextid=wwXIfr","https://www.linkedin.com/company/mo-marine/"],"contactPoint":[{"@type":"ContactPoint","contactType":"customer service","telephone":"+963172770040","areaServed":"SY","availableLanguage":["en","ar"]},{"@type":"ContactPoint","contactType":"sales","telephone":"+963933093901","areaServed":"SY","availableLanguage":["en","ar"]},{"@type":"ContactPoint","contactType":"emergency","telephone":"+963933303041","areaServed":"SY","availableLanguage":["en","ar"]}]}</script>
    <?= $this->renderSection('head_scripts') ?>
</head>
<body class="text-navy-900 selection:bg-maritime-500 selection:text-white">

    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-[100] focus:rounded-md focus:bg-white focus:px-4 focus:py-3 focus:text-navy-900">Skip to main content</a>

    <noscript>
        <nav aria-label="Fallback navigation" style="padding:16px;background:#00142b;color:#ffffff;font-family:Arial,sans-serif;">
            <a href="./" style="color:#ffffff;margin-right:16px;">Home</a>
            <a href="about" style="color:#ffffff;margin-right:16px;">About</a>
            <a href="services" style="color:#ffffff;margin-right:16px;">Services</a>
            <a href="technical" style="color:#ffffff;margin-right:16px;">Technical</a>
            <a href="logistics" style="color:#ffffff;margin-right:16px;">Logistics</a>
            <a href="faq" style="color:#ffffff;margin-right:16px;">FAQ</a>
            <a href="contact" style="color:#ffffff;">Contact</a>
        </nav>
    </noscript>

    <div id="navbar-placeholder"></div>
    <script src="assets/js/navbar.js?v=2" defer></script>

    <main id="main-content">
        <?= $this->renderSection('content') ?>
    </main>

    <div id="footer-placeholder"></div>
    <script src="assets/js/footer.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</body>
</html>
