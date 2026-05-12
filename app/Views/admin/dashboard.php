<?= $this->extend('layouts/admin') ?>

<?= $this->section('head_extra') ?>
<style>
.stat-icon-pages    { background: linear-gradient(135deg,#3b82f6,#1d4ed8); }
.stat-icon-seo      { background: linear-gradient(135deg,#10b981,#059669); }
.stat-icon-pub      { background: linear-gradient(135deg,#f59e0b,#d97706); }
.stat-icon-status   { background: linear-gradient(135deg,#8b5cf6,#6d28d9); }
.quicknav-item:hover .qn-icon { color: #38bdf8; }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page header -->
<div class="mb-8">
    <h1 class="font-display text-[26px] font-bold text-white leading-tight">
        Welcome back, <span class="text-sky-400"><?= esc(session()->get('admin_name')) ?></span>
    </h1>
    <p class="text-white/35 text-sm mt-1">M&amp;O Marine Service — Admin Panel</p>
</div>

<!-- Stats row -->
<div class="grid grid-cols-2 xl:grid-cols-4 gap-4 mb-7">

    <div class="stat-card rounded-2xl p-5">
        <div class="flex items-start justify-between mb-5">
            <p class="text-white/40 text-[11px] font-bold uppercase tracking-widest">Pages</p>
            <div class="stat-icon-pages w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                <span class="material-symbols-outlined text-white text-[18px]">web</span>
            </div>
        </div>
        <p class="font-display text-[34px] font-bold text-white leading-none">7</p>
        <p class="text-white/30 text-xs mt-2">Public pages live</p>
    </div>

    <div class="stat-card rounded-2xl p-5">
        <div class="flex items-start justify-between mb-5">
            <p class="text-white/40 text-[11px] font-bold uppercase tracking-widest">SEO</p>
            <div class="stat-icon-seo w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                <span class="material-symbols-outlined text-white text-[18px]">verified</span>
            </div>
        </div>
        <p class="font-display text-[34px] font-bold text-white leading-none">100<span class="text-lg">%</span></p>
        <p class="text-white/30 text-xs mt-2">All pages passing audit</p>
    </div>

    <div class="stat-card rounded-2xl p-5">
        <div class="flex items-start justify-between mb-5">
            <p class="text-white/40 text-[11px] font-bold uppercase tracking-widest">Publications</p>
            <div class="stat-icon-pub w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                <span class="material-symbols-outlined text-white text-[18px]">picture_as_pdf</span>
            </div>
        </div>
        <p class="font-display text-[34px] font-bold text-white leading-none"><?= $pub_count ?></p>
        <p class="text-white/30 text-xs mt-2">Active PDFs uploaded</p>
    </div>

    <div class="stat-card rounded-2xl p-5">
        <div class="flex items-start justify-between mb-5">
            <p class="text-white/40 text-[11px] font-bold uppercase tracking-widest">Status</p>
            <div class="stat-icon-status w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                <span class="material-symbols-outlined text-white text-[18px]">check_circle</span>
            </div>
        </div>
        <p class="font-display text-[28px] font-bold text-emerald-400 leading-none">Live</p>
        <p class="text-white/30 text-xs mt-2">All routes responding</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

    <!-- Content Modules -->
    <div class="lg:col-span-2 section-card p-6">
        <div class="flex items-center gap-2 mb-5">
            <span class="material-symbols-outlined text-sky-500 text-[18px]">grid_view</span>
            <h2 class="text-white font-bold text-sm">Content Modules</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <a href="<?= site_url('admin/publications') ?>" class="module-card rounded-xl p-4 flex items-center gap-4 group">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0"
                     style="background:linear-gradient(135deg,rgba(239,68,68,0.2),rgba(239,68,68,0.08))">
                    <span class="material-symbols-outlined text-red-400 text-[22px]">picture_as_pdf</span>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-white font-semibold text-sm">Publications</p>
                    <p class="text-white/35 text-xs mt-0.5">Upload & manage PDFs</p>
                </div>
                <span class="material-symbols-outlined text-white/20 group-hover:text-sky-400 transition-colors flex-shrink-0 text-[18px]">arrow_forward</span>
            </a>

            <!-- Placeholder for future module -->
            <div class="rounded-xl p-4 flex items-center gap-4 border border-dashed border-white/8 opacity-40">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 bg-white/4">
                    <span class="material-symbols-outlined text-white/30 text-[22px]">add</span>
                </div>
                <div>
                    <p class="text-white/50 font-semibold text-sm">More modules</p>
                    <p class="text-white/25 text-xs mt-0.5">Coming soon</p>
                </div>
            </div>
        </div>
    </div>

    <!-- System Info -->
    <div class="section-card p-6">
        <div class="flex items-center gap-2 mb-5">
            <span class="material-symbols-outlined text-sky-500 text-[18px]">memory</span>
            <h2 class="text-white font-bold text-sm">System</h2>
        </div>
        <ul class="space-y-3">
            <?php foreach ([
                ['label' => 'Framework',   'value' => 'CodeIgniter 4',    'icon' => 'code'],
                ['label' => 'PHP',         'value' => PHP_VERSION,        'icon' => 'terminal'],
                ['label' => 'Environment', 'value' => ucfirst(ENVIRONMENT),'icon' => 'settings'],
            ] as $item): ?>
            <li class="flex items-center gap-3 p-3 rounded-xl bg-white/3 border border-white/5">
                <span class="material-symbols-outlined text-sky-500/60 text-[16px]"><?= $item['icon'] ?></span>
                <div class="flex-1 min-w-0">
                    <p class="text-white/35 text-[10px] uppercase tracking-wider"><?= $item['label'] ?></p>
                    <p class="text-white/80 text-xs font-semibold mt-0.5"><?= $item['value'] ?></p>
                </div>
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0"></span>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>

<!-- Quick Navigation -->
<div class="section-card p-6 mt-5">
    <div class="flex items-center justify-between mb-5">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-sky-500 text-[18px]">link</span>
            <h2 class="text-white font-bold text-sm">Quick Navigation</h2>
        </div>
        <p class="text-white/25 text-xs">Opens in new tab</p>
    </div>
    <div class="grid grid-cols-4 sm:grid-cols-7 gap-3">
        <?php foreach ([
            ['label' => 'Home',      'url' => '/',          'icon' => 'home',          'color' => 'text-sky-400'],
            ['label' => 'About',     'url' => '/about',     'icon' => 'info',          'color' => 'text-violet-400'],
            ['label' => 'Services',  'url' => '/services',  'icon' => 'inventory',     'color' => 'text-amber-400'],
            ['label' => 'Technical', 'url' => '/technical', 'icon' => 'engineering',   'color' => 'text-emerald-400'],
            ['label' => 'Logistics', 'url' => '/logistics', 'icon' => 'local_shipping','color' => 'text-orange-400'],
            ['label' => 'FAQ',       'url' => '/faq',       'icon' => 'help',          'color' => 'text-pink-400'],
            ['label' => 'Contact',   'url' => '/contact',   'icon' => 'mail',          'color' => 'text-teal-400'],
        ] as $page): ?>
        <a href="<?= $page['url'] ?>" target="_blank"
           class="quicknav-item flex flex-col items-center gap-2 bg-white/3 hover:bg-white/6 rounded-xl p-4 border border-white/6 hover:border-white/12 transition-all group text-center">
            <span class="material-symbols-outlined qn-icon <?= $page['color'] ?> text-[22px] transition-colors"><?= $page['icon'] ?></span>
            <span class="text-white/40 group-hover:text-white/70 text-[11px] font-medium transition-colors leading-tight"><?= $page['label'] ?></span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>
