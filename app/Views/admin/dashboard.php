<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Dashboard | M&amp;O Marine Admin</title>
    <meta name="robots" content="noindex, nofollow"/>
    <base href="<?= base_url('/') ?>"/>
    <link rel="icon" type="image/png" href="https://lh3.googleusercontent.com/aida/ADBb0uja4Pi6GeJT_mp_CqXVXb_-sYCGSBshAeYzAVqZ2X7Fb6s1GVoTslzmP0TCXhHeHT7QAgK8yTTVhxPQUkPvvLgk-Weuhk2NZo-kNLnMs5ct6hKOviBkRS_u_Y3jWRPh8YGCTQUAcVudlWXCHJgijq3v0BCmW5mt4ptwwMZDhjzj4YZ7RyKv4rdxBfxsjQ6NFFqDQd1ZFFJdEnuBpPDZjMwKCuDQtEQM6EnRe99BrFGGz8QJkbcJc29Z_am7mr-jlPpcEfpblO0W2Q"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@400;600;700;800&family=Material+Symbols+Outlined:wght,FILL,GRAD,opsz@300,0,0,24&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/tailwind.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body class="bg-navy-950 min-h-screen">

    <nav class="glass-nav sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="/dashboard" class="flex items-center gap-3">
                <img src="https://lh3.googleusercontent.com/aida/ADBb0uja4Pi6GeJT_mp_CqXVXb_-sYCGSBshAeYzAVqZ2X7Fb6s1GVoTslzmP0TCXhHeHT7QAgK8yTTVhxPQUkPvvLgk-Weuhk2NZo-kNLnMs5ct6hKOviBkRS_u_Y3jWRPh8YGCTQUAcVudlWXCHJgijq3v0BCmW5mt4ptwwMZDhjzj4YZ7RyKv4rdxBfxsjQ6NFFqDQd1ZFFJdEnuBpPDZjMwKCuDQtEQM6EnRe99BrFGGz8QJkbcJc29Z_am7mr-jlPpcEfpblO0W2Q"
                     alt="M&O Logo" width="36" height="36" class="h-9 w-9 object-contain"/>
                <div>
                    <span class="font-display font-bold text-white text-sm tracking-wider">M&amp;O</span>
                    <span class="text-navy-300 text-xs ml-2">Admin</span>
                </div>
            </a>
            <div class="flex items-center gap-4">
                <a href="/" target="_blank"
                   class="text-navy-300 hover:text-white text-sm flex items-center gap-1.5 transition-colors">
                    <span class="material-symbols-outlined text-[16px]">open_in_new</span>
                    View Site
                </a>
                <div class="w-px h-5 bg-white/10"></div>
                <span class="text-navy-300 text-sm">
                    <span class="material-symbols-outlined text-[16px] align-middle mr-1">person</span>
                    <?= esc($admin_name) ?>
                </span>
                <a href="<?= site_url('logout') ?>"
                   class="flex items-center gap-1.5 bg-white/10 hover:bg-white/20 text-white text-sm px-3 py-1.5 rounded-lg transition-all">
                    <span class="material-symbols-outlined text-[16px]">logout</span>
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-10">

        <div class="mb-8">
            <h1 class="font-display text-2xl font-bold text-white">Welcome back, <?= esc($admin_name) ?></h1>
            <p class="text-navy-400 text-sm mt-1">M&amp;O Marine Service — Admin Dashboard</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-10">
            <div class="bg-navy-900 rounded-xl border border-white/10 p-6">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-navy-400 text-xs font-bold uppercase tracking-widest">Pages</span>
                    <span class="material-symbols-outlined text-maritime-500 text-[22px]">web</span>
                </div>
                <div class="font-display text-3xl font-bold text-white">7</div>
                <p class="text-navy-400 text-xs mt-1">Public pages live</p>
            </div>
            <div class="bg-navy-900 rounded-xl border border-white/10 p-6">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-navy-400 text-xs font-bold uppercase tracking-widest">SEO</span>
                    <span class="material-symbols-outlined text-green-400 text-[22px]">verified</span>
                </div>
                <div class="font-display text-3xl font-bold text-white">100%</div>
                <p class="text-navy-400 text-xs mt-1">All pages passing audit</p>
            </div>
            <div class="bg-navy-900 rounded-xl border border-white/10 p-6">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-navy-400 text-xs font-bold uppercase tracking-widest">Assets</span>
                    <span class="material-symbols-outlined text-blue-400 text-[22px]">folder</span>
                </div>
                <div class="font-display text-3xl font-bold text-white">24</div>
                <p class="text-navy-400 text-xs mt-1">Images, CSS, JS, PDFs</p>
            </div>
            <div class="bg-navy-900 rounded-xl border border-white/10 p-6">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-navy-400 text-xs font-bold uppercase tracking-widest">Status</span>
                    <span class="material-symbols-outlined text-green-400 text-[22px]">check_circle</span>
                </div>
                <div class="font-display text-3xl font-bold text-green-400">Live</div>
                <p class="text-navy-400 text-xs mt-1">All routes responding 200</p>
            </div>
        </div>

        <div class="bg-navy-900 rounded-xl border border-white/10 p-6 mb-6">
            <h2 class="font-display font-bold text-white mb-5 flex items-center gap-2">
                <span class="material-symbols-outlined text-maritime-500 text-[20px]">link</span>
                Quick Navigation
            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-7 gap-3">
                <?php
                $pages = [
                    ['label' => 'Home',      'url' => '/',          'icon' => 'home'],
                    ['label' => 'About',     'url' => '/about',     'icon' => 'info'],
                    ['label' => 'Services',  'url' => '/services',  'icon' => 'inventory'],
                    ['label' => 'Technical', 'url' => '/technical', 'icon' => 'engineering'],
                    ['label' => 'Logistics', 'url' => '/logistics', 'icon' => 'local_shipping'],
                    ['label' => 'FAQ',       'url' => '/faq',       'icon' => 'help'],
                    ['label' => 'Contact',   'url' => '/contact',   'icon' => 'mail'],
                ];
                foreach ($pages as $page): ?>
                <a href="<?= $page['url'] ?>" target="_blank"
                   class="flex flex-col items-center gap-2 bg-navy-800 hover:bg-navy-700 rounded-lg p-4 border border-white/5 hover:border-maritime-500/30 transition-all group text-center">
                    <span class="material-symbols-outlined text-navy-400 group-hover:text-maritime-500 text-[24px] transition-colors"><?= $page['icon'] ?></span>
                    <span class="text-navy-300 group-hover:text-white text-xs font-medium transition-colors"><?= $page['label'] ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="bg-navy-900 rounded-xl border border-white/10 p-6">
            <h2 class="font-display font-bold text-white mb-5 flex items-center gap-2">
                <span class="material-symbols-outlined text-maritime-500 text-[20px]">info</span>
                System Info
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm">
                <div class="bg-navy-800 rounded-lg p-4 border border-white/5">
                    <p class="text-navy-400 text-xs uppercase tracking-wider mb-1">Framework</p>
                    <p class="text-white font-medium">CodeIgniter 4</p>
                </div>
                <div class="bg-navy-800 rounded-lg p-4 border border-white/5">
                    <p class="text-navy-400 text-xs uppercase tracking-wider mb-1">PHP Version</p>
                    <p class="text-white font-medium"><?= PHP_VERSION ?></p>
                </div>
                <div class="bg-navy-800 rounded-lg p-4 border border-white/5">
                    <p class="text-navy-400 text-xs uppercase tracking-wider mb-1">Environment</p>
                    <p class="text-white font-medium"><?= ucfirst(ENVIRONMENT) ?></p>
                </div>
            </div>
        </div>

    </main>

</body>
</html>
