<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= esc($pageTitle ?? 'Admin') ?> | M&amp;O Admin</title>
    <meta name="robots" content="noindex, nofollow"/>
    <base href="<?= base_url('/') ?>"/>
    <link rel="icon" type="image/png" href="https://lh3.googleusercontent.com/aida/ADBb0uja4Pi6GeJT_mp_CqXVXb_-sYCGSBshAeYzAVqZ2X7Fb6s1GVoTslzmP0TCXhHeHT7QAgK8yTTVhxPQUkPvvLgk-Weuhk2NZo-kNLnMs5ct6hKOviBkRS_u_Y3jWRPh8YGCTQUAcVudlWXCHJgijq3v0BCmW5mt4ptwwMZDhjzj4YZ7RyKv4rdxBfxsjQ6NFFqDQd1ZFFJdEnuBpPDZjMwKCuDQtEQM6EnRe99BrFGGz8QJkbcJc29Z_am7mr-jlPpcEfpblO0W2Q"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;600;700;800&family=Material+Symbols+Outlined:wght,FILL,GRAD,opsz@300,0,0,24&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/tailwind.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <style>
        :root {
            --sidebar-w: 240px;
        }
        body { font-family: 'Inter', sans-serif; }
        .admin-sidebar {
            width: var(--sidebar-w);
            background: linear-gradient(180deg, #0a1628 0%, #071020 100%);
            border-right: 1px solid rgba(255,255,255,0.06);
        }
        .admin-topbar {
            background: rgba(7, 16, 32, 0.95);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }
        .nav-item-active {
            background: linear-gradient(135deg, rgba(14,165,233,0.18) 0%, rgba(14,165,233,0.06) 100%);
            border: 1px solid rgba(14,165,233,0.25);
            color: #38bdf8;
        }
        .nav-item-active .nav-icon { color: #38bdf8; }
        .stat-card {
            background: linear-gradient(135deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%);
            border: 1px solid rgba(255,255,255,0.08);
            transition: transform 0.2s, border-color 0.2s, box-shadow 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-2px);
            border-color: rgba(255,255,255,0.14);
            box-shadow: 0 8px 32px rgba(0,0,0,0.25);
        }
        .module-card {
            background: linear-gradient(135deg, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.01) 100%);
            border: 1px solid rgba(255,255,255,0.08);
            transition: all 0.2s;
        }
        .module-card:hover {
            border-color: rgba(14,165,233,0.35);
            background: linear-gradient(135deg, rgba(14,165,233,0.08) 0%, rgba(14,165,233,0.02) 100%);
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(14,165,233,0.1);
        }
        .section-card {
            background: rgba(10, 22, 40, 0.7);
            border: 1px solid rgba(255,255,255,0.07);
            border-radius: 16px;
        }
        .badge-green { background: rgba(34,197,94,0.12); color: #4ade80; border: 1px solid rgba(34,197,94,0.2); }
        .badge-blue  { background: rgba(14,165,233,0.12); color: #38bdf8; border: 1px solid rgba(14,165,233,0.2); }
        .badge-red   { background: rgba(239,68,68,0.12);  color: #f87171; border: 1px solid rgba(239,68,68,0.2);  }
        .input-field {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.1);
            transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
        }
        .input-field:focus {
            background: rgba(255,255,255,0.06);
            border-color: rgba(14,165,233,0.5);
            box-shadow: 0 0 0 3px rgba(14,165,233,0.1);
            outline: none;
        }
        .btn-primary {
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
            box-shadow: 0 4px 16px rgba(14,165,233,0.3);
            transition: all 0.2s;
        }
        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(14,165,233,0.4);
        }
        .btn-primary:active { transform: translateY(0); }
        .avatar { background: linear-gradient(135deg, #0ea5e9, #0284c7); }
        .scrollbar-thin::-webkit-scrollbar { width: 4px; }
        .scrollbar-thin::-webkit-scrollbar-track { background: transparent; }
        .scrollbar-thin::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 4px; }
        .admin-input {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 10px;
            padding: 10px 14px;
            color: #e2e8f0;
            font-size: 0.875rem;
            width: 100%;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .admin-input:focus {
            border-color: rgba(14,165,233,0.5);
            box-shadow: 0 0 0 3px rgba(14,165,233,0.1);
            outline: none;
        }
        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 0.875rem;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            border: none;
        }
    </style>
    <?= $this->renderSection('head_extra') ?>
</head>
<body class="bg-[#060e1c] min-h-screen text-white">

<?php
$adminName   = session()->get('admin_name') ?? 'Admin';
$adminEmail  = session()->get('admin_email') ?? '';
$adminInitial = strtoupper(substr($adminName, 0, 1));
$currentPath    = '/' . ltrim(service('request')->getPath(), '/');
$newContactCount = (new \App\Models\ContactModel())->countByStatus('new');
$navModules  = [
    ['label' => 'Dashboard',    'url' => site_url('dashboard'),          'icon' => 'dashboard',      'match' => '/dashboard'],
    ['label' => 'Publications', 'url' => site_url('admin/publications'),  'icon' => 'picture_as_pdf', 'match' => '/admin/publications'],
    ['label' => 'FAQs',         'url' => site_url('admin/faqs'),          'icon' => 'help',           'match' => '/admin/faqs'],
    ['label' => 'Contacts',     'url' => site_url('admin/contacts'),      'icon' => 'inbox',          'match' => '/admin/contacts'],
];
?>

<!-- Sidebar -->
<aside id="sidebar"
       class="admin-sidebar fixed inset-y-0 left-0 z-40 flex flex-col
              -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out"
       style="width:var(--sidebar-w)">

    <!-- Logo -->
    <div class="flex items-center gap-3 px-5 h-16 border-b border-white/6 flex-shrink-0">
        <div class="w-8 h-8 rounded-lg overflow-hidden flex-shrink-0">
            <img src="https://lh3.googleusercontent.com/aida/ADBb0uja4Pi6GeJT_mp_CqXVXb_-sYCGSBshAeYzAVqZ2X7Fb6s1GVoTslzmP0TCXhHeHT7QAgK8yTTVhxPQUkPvvLgk-Weuhk2NZo-kNLnMs5ct6hKOviBkRS_u_Y3jWRPh8YGCTQUAcVudlWXCHJgijq3v0BCmW5mt4ptwwMZDhjzj4YZ7RyKv4rdxBfxsjQ6NFFqDQd1ZFFJdEnuBpPDZjMwKCuDQtEQM6EnRe99BrFGGz8QJkbcJc29Z_am7mr-jlPpcEfpblO0W2Q"
                 alt="M&O" class="w-full h-full object-cover"/>
        </div>
        <div>
            <p class="font-display font-bold text-white text-sm tracking-wider leading-none">M&amp;O Marine</p>
            <p class="text-[10px] text-sky-400/70 font-medium tracking-widest uppercase mt-0.5">Admin Panel</p>
        </div>
    </div>

    <!-- Nav -->
    <nav class="flex-1 py-4 px-3 overflow-y-auto scrollbar-thin">
        <p class="text-[10px] font-bold tracking-[0.15em] text-white/25 uppercase px-3 mb-2.5">Menu</p>
        <ul class="space-y-1">
            <?php foreach ($navModules as $mod):
                $active = str_starts_with($currentPath, $mod['match']);
            ?>
            <li>
                <a href="<?= $mod['url'] ?>"
                   class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[13px] font-medium transition-all <?= $active ? 'nav-item-active' : 'text-white/50 hover:text-white hover:bg-white/5' ?>">
                    <span class="material-symbols-outlined text-[18px] nav-icon flex-shrink-0 <?= $active ? '' : 'text-white/30' ?>"><?= $mod['icon'] ?></span>
                    <?= $mod['label'] ?>
                    <?php if ($active): ?>
                    <span class="ml-auto w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                    <?php elseif ($mod['match'] === '/admin/contacts' && $newContactCount > 0): ?>
                    <span class="ml-auto text-[10px] font-bold bg-red-500 text-white rounded-full min-w-[18px] h-[18px] flex items-center justify-center px-1"><?= $newContactCount ?></span>
                    <?php endif; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <!-- User info + view site -->
    <div class="px-3 pb-4 flex-shrink-0 border-t border-white/6 pt-3 space-y-1">
        <a href="<?= site_url('/') ?>" target="_blank"
           class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-[13px] font-medium text-white/40 hover:text-white hover:bg-white/5 transition-all">
            <span class="material-symbols-outlined text-[18px] text-white/25">language</span>
            View Website
        </a>
        <a href="<?= site_url('admin/profile') ?>"
           class="flex items-center gap-3 px-3 py-2.5 mt-1 rounded-xl hover:bg-white/5 transition-all group">
            <div class="avatar w-7 h-7 rounded-full flex items-center justify-center text-white text-xs font-bold flex-shrink-0 group-hover:shadow-lg group-hover:shadow-sky-500/20 transition-all">
                <?= $adminInitial ?>
            </div>
            <div class="min-w-0 flex-1">
                <p class="text-white/70 group-hover:text-white text-[12px] font-medium truncate transition-colors"><?= esc($adminName) ?></p>
                <?php if ($adminEmail): ?>
                <p class="text-white/25 text-[10px] truncate"><?= esc($adminEmail) ?></p>
                <?php endif; ?>
            </div>
            <span class="material-symbols-outlined text-white/20 group-hover:text-sky-400 text-[15px] flex-shrink-0 transition-colors">edit</span>
        </a>
    </div>
</aside>

<!-- Sidebar overlay (mobile) -->
<div id="sidebar-overlay" class="fixed inset-0 z-30 bg-black/60 backdrop-blur-sm hidden lg:hidden"
     onclick="closeSidebar()"></div>

<!-- Main wrapper -->
<div class="lg:pl-[240px] flex flex-col min-h-screen">

    <!-- Top bar -->
    <header class="admin-topbar sticky top-0 z-20 h-16 flex items-center justify-between px-5 gap-4">

        <div class="flex items-center gap-3">
            <button id="sidebar-toggle" class="lg:hidden w-9 h-9 flex items-center justify-center rounded-xl text-white/50 hover:text-white hover:bg-white/8 transition-all" aria-label="Toggle sidebar">
                <span class="material-symbols-outlined text-[20px]">menu</span>
            </button>

            <!-- Breadcrumbs -->
            <?php if (! empty($breadcrumbs)): ?>
            <nav class="flex items-center gap-1 text-xs" aria-label="Breadcrumb">
                <a href="<?= site_url('dashboard') ?>" class="text-white/35 hover:text-white/70 transition-colors font-medium">Dashboard</a>
                <?php foreach ($breadcrumbs as $crumb): ?>
                <span class="material-symbols-outlined text-[11px] text-white/20">chevron_right</span>
                <?php if (! empty($crumb['url'])): ?>
                <a href="<?= $crumb['url'] ?>" class="text-white/35 hover:text-white/70 transition-colors font-medium"><?= esc($crumb['label']) ?></a>
                <?php else: ?>
                <span class="text-white/70 font-semibold"><?= esc($crumb['label']) ?></span>
                <?php endif; ?>
                <?php endforeach; ?>
            </nav>
            <?php else: ?>
            <span class="text-white/60 text-sm font-semibold"><?= esc($pageTitle ?? '') ?></span>
            <?php endif; ?>
        </div>

        <div class="flex items-center gap-2">
            <a href="<?= site_url('/') ?>" target="_blank"
               class="hidden sm:flex items-center gap-1.5 text-white/40 hover:text-white text-xs font-medium px-3 py-2 rounded-xl hover:bg-white/6 transition-all">
                <span class="material-symbols-outlined text-[14px]">open_in_new</span>
                View Site
            </a>
            <div class="w-px h-4 bg-white/8 hidden sm:block"></div>
            <a href="<?= site_url('logout') ?>"
               class="flex items-center gap-1.5 text-white/50 hover:text-white text-xs font-medium px-3 py-2 rounded-xl hover:bg-red-500/10 hover:text-red-400 transition-all border border-transparent hover:border-red-500/20">
                <span class="material-symbols-outlined text-[15px]">logout</span>
                <span class="hidden sm:inline">Logout</span>
            </a>
        </div>
    </header>

    <!-- Page content -->
    <main class="flex-1 px-5 sm:px-7 py-7 max-w-6xl w-full mx-auto">

        <!-- Flash success -->
        <?php if ($flash = session()->getFlashdata('success')): ?>
        <div class="flex items-center gap-3 badge-green rounded-xl px-4 py-3.5 mb-6">
            <span class="material-symbols-outlined text-[20px] flex-shrink-0">check_circle</span>
            <p class="text-sm font-medium"><?= esc($flash) ?></p>
            <button onclick="this.parentElement.remove()" class="ml-auto text-current/60 hover:text-current transition-colors">
                <span class="material-symbols-outlined text-[16px]">close</span>
            </button>
        </div>
        <?php endif; ?>

        <!-- Flash error -->
        <?php if ($flash = session()->getFlashdata('error')): ?>
        <div class="flex items-center gap-3 badge-red rounded-xl px-4 py-3.5 mb-6">
            <span class="material-symbols-outlined text-[20px] flex-shrink-0">error</span>
            <p class="text-sm font-medium"><?= esc($flash) ?></p>
            <button onclick="this.parentElement.remove()" class="ml-auto text-current/60 hover:text-current transition-colors">
                <span class="material-symbols-outlined text-[16px]">close</span>
            </button>
        </div>
        <?php endif; ?>

        <?= $this->renderSection('content') ?>
    </main>
</div>

<script>
const sidebar       = document.getElementById('sidebar');
const overlay       = document.getElementById('sidebar-overlay');
const sidebarToggle = document.getElementById('sidebar-toggle');

function openSidebar()  { sidebar.classList.remove('-translate-x-full'); overlay.classList.remove('hidden'); }
function closeSidebar() { sidebar.classList.add('-translate-x-full');    overlay.classList.add('hidden'); }
sidebarToggle?.addEventListener('click', () =>
    sidebar.classList.contains('-translate-x-full') ? openSidebar() : closeSidebar()
);
</script>

<?= $this->renderSection('page_scripts') ?>
</body>
</html>
