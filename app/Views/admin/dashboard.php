<?= $this->extend('layouts/admin') ?>

<?= $this->section('head_extra') ?>
<style>
.stat-icon-msg  { background: linear-gradient(135deg,#0ea5e9,#0369a1); }
.stat-icon-pub  { background: linear-gradient(135deg,#f59e0b,#d97706); }
.stat-icon-faq  { background: linear-gradient(135deg,#8b5cf6,#6d28d9); }
.stat-icon-crit { background: linear-gradient(135deg,#ef4444,#b91c1c); }
.mini-bar { height: 4px; border-radius: 4px; transition: width 0.6s ease; }
.activity-bar {
    flex: 1;
    border-radius: 4px 4px 0 0;
    transition: height 0.4s ease;
    min-height: 3px;
}
.quicknav-item:hover .qn-icon { color: #38bdf8; }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php
function fmtBytes(int $bytes): string {
    if ($bytes >= 1048576) return round($bytes / 1048576, 1) . ' MB';
    if ($bytes >= 1024)    return round($bytes / 1024, 1)    . ' KB';
    return $bytes . ' B';
}
$contactTotal = max($contact_total, 1);
$maxService   = !empty($service_rows) ? max(array_column($service_rows, 'cnt')) : 1;
$maxPort      = !empty($port_rows)    ? max(array_column($port_rows, 'cnt'))    : 1;
$maxActivity  = max(max($activity_data), 1);
?>

<!-- Page header -->
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="font-display text-[26px] font-bold text-white leading-tight">
            Welcome back, <span class="text-sky-400"><?= esc(session()->get('admin_name')) ?></span>
        </h1>
        <p class="text-white/35 text-sm mt-1"><?= date('l, d F Y · H:i') ?> &mdash; M&amp;O Marine Admin</p>
    </div>
    <a href="<?= site_url('/') ?>" target="_blank"
       class="hidden sm:flex items-center gap-2 px-4 py-2.5 rounded-xl border border-white/8 bg-white/3 text-white/50 hover:text-white hover:bg-white/6 text-xs font-medium transition-all">
        <span class="material-symbols-outlined text-[15px]">open_in_new</span>
        View Site
    </a>
</div>

<!-- ── Stat Cards ───────────────────────────────────────────────── -->
<div class="grid grid-cols-2 xl:grid-cols-4 gap-4 mb-6">

    <!-- Messages -->
    <a href="<?= site_url('admin/contacts') ?>" class="stat-card rounded-2xl p-5 block group">
        <div class="flex items-start justify-between mb-4">
            <p class="text-white/40 text-[10px] font-bold uppercase tracking-widest">Messages</p>
            <div class="stat-icon-msg w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                <span class="material-symbols-outlined text-white text-[18px]">inbox</span>
            </div>
        </div>
        <div class="flex items-end gap-2 mb-3">
            <p class="font-display text-[34px] font-bold <?= $contact_new > 0 ? 'text-red-400' : 'text-white' ?> leading-none"><?= $contact_total ?></p>
            <?php if ($contact_new > 0): ?>
            <span class="mb-1 text-[11px] font-bold bg-red-500/20 text-red-400 border border-red-500/25 rounded-full px-2 py-0.5"><?= $contact_new ?> new</span>
            <?php endif; ?>
        </div>
        <div class="space-y-1.5">
            <?php foreach ([
                ['New',     $contact_new,     'bg-red-400',     $contactTotal],
                ['Read',    $contact_read,    'bg-sky-400',     $contactTotal],
                ['Replied', $contact_replied, 'bg-emerald-400', $contactTotal],
            ] as [$lbl, $val, $color, $base]): ?>
            <div class="flex items-center gap-2">
                <span class="text-white/25 text-[10px] w-10 text-right"><?= $lbl ?></span>
                <div class="flex-1 bg-white/5 rounded-full h-1">
                    <div class="mini-bar <?= $color ?>/60" style="width:<?= $base > 0 ? round($val/$base*100) : 0 ?>%"></div>
                </div>
                <span class="text-white/35 text-[10px] w-4"><?= $val ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </a>

    <!-- Publications -->
    <a href="<?= site_url('admin/publications') ?>" class="stat-card rounded-2xl p-5 block group">
        <div class="flex items-start justify-between mb-4">
            <p class="text-white/40 text-[10px] font-bold uppercase tracking-widest">Publications</p>
            <div class="stat-icon-pub w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                <span class="material-symbols-outlined text-white text-[18px]">picture_as_pdf</span>
            </div>
        </div>
        <p class="font-display text-[34px] font-bold text-white leading-none mb-1"><?= $pub_count ?></p>
        <p class="text-white/30 text-xs mb-3">Active · <?= $pub_total ?> total</p>
        <div class="flex items-center gap-2 pt-3 border-t border-white/5">
            <span class="material-symbols-outlined text-amber-400/50 text-[14px]">storage</span>
            <span class="text-white/35 text-[11px]"><?= fmtBytes($pub_size) ?> total</span>
        </div>
    </a>

    <!-- FAQs -->
    <a href="<?= site_url('admin/faqs') ?>" class="stat-card rounded-2xl p-5 block group">
        <div class="flex items-start justify-between mb-4">
            <p class="text-white/40 text-[10px] font-bold uppercase tracking-widest">FAQs</p>
            <div class="stat-icon-faq w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                <span class="material-symbols-outlined text-white text-[18px]">help</span>
            </div>
        </div>
        <p class="font-display text-[34px] font-bold text-white leading-none mb-1"><?= $faq_count ?></p>
        <p class="text-white/30 text-xs mb-3">Active · <?= $faq_total ?> total</p>
        <div class="flex items-center gap-2 pt-3 border-t border-white/5">
            <span class="material-symbols-outlined text-violet-400/50 text-[14px]">category</span>
            <span class="text-white/35 text-[11px]"><?= $faq_categories ?> categor<?= $faq_categories === 1 ? 'y' : 'ies' ?></span>
        </div>
    </a>

    <!-- Stats -->
    <a href="<?= site_url('admin/stats') ?>" class="stat-card rounded-2xl p-5 block group">
        <div class="flex items-start justify-between mb-4">
            <p class="text-white/40 text-[10px] font-bold uppercase tracking-widest">Site Stats</p>
            <div class="w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg"
                 style="background:linear-gradient(135deg,rgba(16,185,129,0.9),rgba(5,150,105,0.7))">
                <span class="material-symbols-outlined text-white text-[18px]">bar_chart</span>
            </div>
        </div>
        <p class="font-display text-[34px] font-bold text-white leading-none mb-1"><?= $stat_total ?></p>
        <p class="text-white/30 text-xs mb-3">Stats on website</p>
        <div class="flex items-center gap-2 pt-3 border-t border-white/5">
            <span class="material-symbols-outlined text-emerald-400/50 text-[14px]">public</span>
            <span class="text-white/35 text-[11px]">Shown on homepage &amp; services</span>
        </div>
    </a>

    <!-- Critical -->
    <div class="stat-card rounded-2xl p-5">
        <div class="flex items-start justify-between mb-4">
            <p class="text-white/40 text-[10px] font-bold uppercase tracking-widest">Critical</p>
            <div class="stat-icon-crit w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                <span class="material-symbols-outlined text-white text-[18px]">priority_high</span>
            </div>
        </div>
        <p class="font-display text-[34px] font-bold <?= $contact_critical > 0 ? 'text-red-400' : 'text-white' ?> leading-none mb-1"><?= $contact_critical ?></p>
        <p class="text-white/30 text-xs mb-3">Urgent requests</p>
        <div class="flex items-center gap-2 pt-3 border-t border-white/5">
            <span class="w-2 h-2 rounded-full <?= $contact_critical > 0 ? 'bg-red-400 animate-pulse' : 'bg-white/20' ?>"></span>
            <span class="text-white/35 text-[11px]"><?= $contact_critical > 0 ? 'Needs attention' : 'All clear' ?></span>
        </div>
    </div>
</div>

<!-- ── Row 2: Activity + Recent Submissions ──────────────────────── -->
<div class="grid grid-cols-1 lg:grid-cols-5 gap-5 mb-5">

    <!-- 7-day activity sparkline -->
    <div class="lg:col-span-2 section-card p-6">
        <div class="flex items-center justify-between mb-5">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-sky-500 text-[17px]">bar_chart</span>
                <h2 class="text-white font-bold text-sm">7-Day Activity</h2>
            </div>
            <span class="text-white/25 text-[11px]">Contact submissions</span>
        </div>
        <div class="flex items-end gap-1.5 h-24 mb-3">
            <?php foreach ($activity_data as $i => $val): ?>
            <?php $pct = $maxActivity > 0 ? round($val / $maxActivity * 100) : 0; ?>
            <div class="flex-1 flex flex-col items-center gap-1.5">
                <span class="text-white/30 text-[9px]"><?= $val > 0 ? $val : '' ?></span>
                <div class="w-full flex items-end" style="height:56px">
                    <div class="activity-bar w-full <?= $val > 0 ? 'bg-sky-500/60 hover:bg-sky-400/80' : 'bg-white/5' ?>"
                         style="height:<?= max($pct, $val > 0 ? 8 : 4) ?>%"></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="flex gap-1.5">
            <?php foreach ($activity_labels as $lbl): ?>
            <div class="flex-1 text-center text-white/25 text-[10px] font-medium"><?= esc($lbl) ?></div>
            <?php endforeach; ?>
        </div>
        <div class="mt-4 pt-4 border-t border-white/5 flex items-center justify-between">
            <span class="text-white/30 text-[11px]">Total this week</span>
            <span class="text-white/70 text-sm font-bold"><?= array_sum($activity_data) ?></span>
        </div>
    </div>

    <!-- Recent submissions -->
    <div class="lg:col-span-3 section-card overflow-hidden">
        <div class="flex items-center justify-between px-5 pt-5 pb-4 border-b border-white/5">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-sky-500 text-[17px]">inbox</span>
                <h2 class="text-white font-bold text-sm">Recent Submissions</h2>
            </div>
            <a href="<?= site_url('admin/contacts') ?>"
               class="text-sky-400/60 hover:text-sky-400 text-[11px] font-medium transition-colors flex items-center gap-1">
                View all
                <span class="material-symbols-outlined text-[13px]">arrow_forward</span>
            </a>
        </div>
        <?php if (empty($recent_contacts)): ?>
        <div class="flex flex-col items-center justify-center py-12 text-center">
            <span class="material-symbols-outlined text-white/15 text-[36px] mb-3">inbox</span>
            <p class="text-white/30 text-sm">No submissions yet</p>
        </div>
        <?php else: ?>
        <div class="divide-y divide-white/[0.04]">
            <?php foreach ($recent_contacts as $sub):
                $isCritical = $sub['urgency'] === 'critical';
                $statusColor = ['new' => 'text-red-400', 'read' => 'text-sky-400', 'replied' => 'text-emerald-400'][$sub['status']] ?? 'text-white/40';
            ?>
            <a href="<?= site_url('admin/contacts/' . $sub['id']) ?>"
               class="flex items-center gap-3 px-5 py-3.5 hover:bg-white/[0.025] transition-colors group">
                <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0 <?= $isCritical ? 'bg-red-500/15' : 'bg-sky-500/10' ?>">
                    <span class="material-symbols-outlined text-[15px] <?= $isCritical ? 'text-red-400' : 'text-sky-400/70' ?>"><?= $isCritical ? 'priority_high' : 'mail' ?></span>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-white/80 text-xs font-semibold truncate"><?= esc($sub['vessel_name'] ?: 'Unknown Vessel') ?></p>
                    <p class="text-white/30 text-[11px] truncate mt-0.5"><?= esc($sub['service_required'] ?? '—') ?></p>
                </div>
                <div class="flex flex-col items-end gap-1 flex-shrink-0">
                    <span class="text-[10px] font-bold uppercase tracking-wide <?= $statusColor ?>"><?= esc($sub['status']) ?></span>
                    <span class="text-white/20 text-[10px]"><?= date('d M, H:i', strtotime($sub['created_at'])) ?></span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- ── Row 3: Services + Ports ───────────────────────────────────── -->
<?php if (!empty($service_rows) || !empty($port_rows)): ?>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">

    <!-- Top services -->
    <div class="section-card p-6">
        <div class="flex items-center gap-2 mb-5">
            <span class="material-symbols-outlined text-sky-500 text-[17px]">build</span>
            <h2 class="text-white font-bold text-sm">Top Services Requested</h2>
        </div>
        <?php if (empty($service_rows)): ?>
        <p class="text-white/25 text-sm text-center py-6">No data yet</p>
        <?php else: ?>
        <div class="space-y-3">
            <?php foreach ($service_rows as $row): ?>
            <?php $pct = $maxService > 0 ? round($row['cnt'] / $maxService * 100) : 0; ?>
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-white/65 text-xs truncate pr-3 flex-1"><?= esc($row['service_required'] ?? 'Unknown') ?></span>
                    <span class="text-white/45 text-[11px] font-bold flex-shrink-0"><?= $row['cnt'] ?></span>
                </div>
                <div class="h-1.5 bg-white/5 rounded-full">
                    <div class="h-1.5 rounded-full bg-gradient-to-r from-sky-500 to-sky-400/60 transition-all duration-700"
                         style="width:<?= $pct ?>%"></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>

    <!-- Port distribution -->
    <div class="section-card p-6">
        <div class="flex items-center gap-2 mb-5">
            <span class="material-symbols-outlined text-sky-500 text-[17px]">anchor</span>
            <h2 class="text-white font-bold text-sm">Requests by Port</h2>
        </div>
        <?php if (empty($port_rows)): ?>
        <p class="text-white/25 text-sm text-center py-6">No data yet</p>
        <?php else: ?>
        <div class="space-y-4">
            <?php foreach ($port_rows as $row):
                $pct = $maxPort > 0 ? round($row['cnt'] / $maxPort * 100) : 0;
                $portColors = ['Lattakia' => 'from-emerald-500 to-emerald-400/60', 'Tartous' => 'from-violet-500 to-violet-400/60'];
                $grad = $portColors[$row['port_of_call']] ?? 'from-sky-500 to-sky-400/60';
            ?>
            <div>
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-white/20 text-[14px]">location_on</span>
                        <span class="text-white/65 text-sm font-medium"><?= esc($row['port_of_call'] ?? 'Unknown') ?></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-white/45 text-xs"><?= $row['cnt'] ?> requests</span>
                        <span class="text-white/25 text-[11px]"><?= $contact_total > 0 ? round($row['cnt'] / $contact_total * 100) : 0 ?>%</span>
                    </div>
                </div>
                <div class="h-2 bg-white/5 rounded-full">
                    <div class="h-2 rounded-full bg-gradient-to-r <?= $grad ?> transition-all duration-700"
                         style="width:<?= $pct ?>%"></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<!-- ── Row 4: Content modules + System ───────────────────────────── -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 mb-5">

    <div class="lg:col-span-2 section-card p-6">
        <div class="flex items-center gap-2 mb-5">
            <span class="material-symbols-outlined text-sky-500 text-[18px]">grid_view</span>
            <h2 class="text-white font-bold text-sm">Content Modules</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <?php foreach ([
                [site_url('admin/publications'), 'linear-gradient(135deg,rgba(239,68,68,0.2),rgba(239,68,68,0.08))',   'picture_as_pdf', 'text-red-400',    'Publications',        $pub_count  . ' active PDF' . ($pub_count !== 1 ? 's' : '')],
                [site_url('admin/faqs'),          'linear-gradient(135deg,rgba(14,165,233,0.2),rgba(14,165,233,0.06))', 'help',           'text-sky-400',    'FAQs',                $faq_count  . ' active entr' . ($faq_count !== 1 ? 'ies' : 'y')],
                [site_url('admin/contacts'),      'linear-gradient(135deg,rgba(14,165,233,0.15),rgba(14,165,233,0.05))','inbox',          'text-sky-400',    'Contact Submissions', $contact_new > 0 ? $contact_new . ' unread' : $contact_total . ' total'],
                [site_url('admin/stats'),         'linear-gradient(135deg,rgba(16,185,129,0.2),rgba(16,185,129,0.05))',  'bar_chart',      'text-emerald-400','Site Stats',          $stat_total . ' stat' . ($stat_total !== 1 ? 's' : '') . ' on website'],
                [site_url('admin/settings'),      'linear-gradient(135deg,rgba(245,158,11,0.18),rgba(245,158,11,0.05))','tune',           'text-amber-400',  'Site Settings',       'Phone, social & company'],
            ] as [$url, $bg, $icon, $iconColor, $title, $sub]):
            ?>
            <a href="<?= $url ?>" class="module-card rounded-xl p-4 flex items-center gap-4 group">
                <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0" style="background:<?= $bg ?>">
                    <span class="material-symbols-outlined <?= $iconColor ?> text-[20px]"><?= $icon ?></span>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-white font-semibold text-sm"><?= $title ?></p>
                    <p class="text-white/35 text-xs mt-0.5 truncate"><?= $sub ?></p>
                </div>
                <span class="material-symbols-outlined text-white/20 group-hover:text-sky-400 transition-colors flex-shrink-0 text-[17px]">arrow_forward</span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="section-card p-6">
        <div class="flex items-center gap-2 mb-5">
            <span class="material-symbols-outlined text-sky-500 text-[18px]">memory</span>
            <h2 class="text-white font-bold text-sm">System</h2>
        </div>
        <ul class="space-y-2">
            <?php foreach ([
                ['Framework',   'CodeIgniter 4',                             'code',     'bg-sky-400'],
                ['PHP',         PHP_VERSION,                                 'terminal', 'bg-emerald-400'],
                ['Environment', ucfirst(ENVIRONMENT),                        'settings', ENVIRONMENT === 'production' ? 'bg-emerald-400' : 'bg-amber-400'],
                ['Memory',      round(memory_get_usage(true)/1024/1024,1).' MB', 'storage',  'bg-violet-400'],
            ] as [$label, $value, $icon, $dot]): ?>
            <li class="flex items-center gap-3 p-3 rounded-xl bg-white/[0.025] border border-white/[0.05]">
                <span class="material-symbols-outlined text-sky-500/60 text-[15px]"><?= $icon ?></span>
                <div class="flex-1 min-w-0">
                    <p class="text-white/30 text-[10px] uppercase tracking-wider"><?= $label ?></p>
                    <p class="text-white/75 text-xs font-semibold mt-0.5 truncate"><?= esc($value) ?></p>
                </div>
                <span class="w-1.5 h-1.5 rounded-full <?= $dot ?> flex-shrink-0"></span>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!-- ── Row 5: Quick Navigation ───────────────────────────────────── -->
<div class="section-card p-6">
    <div class="flex items-center justify-between mb-5">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-sky-500 text-[18px]">link</span>
            <h2 class="text-white font-bold text-sm">Quick Navigation</h2>
        </div>
        <p class="text-white/25 text-xs">Opens in new tab</p>
    </div>
    <div class="grid grid-cols-4 sm:grid-cols-7 gap-3">
        <?php foreach ([
            ['Home',      '/',          'home',          'text-sky-400'],
            ['About',     '/about',     'info',          'text-violet-400'],
            ['Services',  '/services',  'inventory',     'text-amber-400'],
            ['Technical', '/technical', 'engineering',   'text-emerald-400'],
            ['Logistics', '/logistics', 'local_shipping','text-orange-400'],
            ['FAQ',       '/faq',       'help',          'text-pink-400'],
            ['Contact',   '/contact',   'mail',          'text-teal-400'],
        ] as [$label, $url, $icon, $color]): ?>
        <a href="<?= $url ?>" target="_blank"
           class="quicknav-item flex flex-col items-center gap-2 bg-white/3 hover:bg-white/6 rounded-xl p-4 border border-white/6 hover:border-white/12 transition-all group text-center">
            <span class="material-symbols-outlined qn-icon <?= $color ?> text-[22px] transition-colors"><?= $icon ?></span>
            <span class="text-white/40 group-hover:text-white/70 text-[11px] font-medium transition-colors leading-tight"><?= $label ?></span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>
