<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="flex items-center justify-between mb-7">
    <div>
        <h1 class="font-display text-2xl font-bold text-white">Contact Submissions</h1>
        <p class="text-white/35 text-sm mt-1">Incoming requests from the website contact form</p>
    </div>
    <?php if ($count_new > 0): ?>
    <span class="flex items-center gap-2 bg-red-500/15 border border-red-500/25 text-red-400 text-sm font-bold px-4 py-2 rounded-xl">
        <span class="w-2 h-2 rounded-full bg-red-400 animate-pulse"></span>
        <?= $count_new ?> New
    </span>
    <?php endif; ?>
</div>

<!-- Status filter tabs -->
<div class="flex items-center gap-2 mb-6 flex-wrap">
    <?php foreach ([
        ['value' => 'all',     'label' => 'All',     'count' => $count_new + $count_read + $count_replied],
        ['value' => 'new',     'label' => 'New',     'count' => $count_new,     'dot' => 'bg-red-400'],
        ['value' => 'read',    'label' => 'Read',    'count' => $count_read,    'dot' => 'bg-sky-400'],
        ['value' => 'replied', 'label' => 'Replied', 'count' => $count_replied, 'dot' => 'bg-emerald-400'],
    ] as $tab): ?>
    <a href="<?= site_url('admin/contacts') ?>?status=<?= $tab['value'] ?>"
       class="flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-medium transition-all border
              <?= $filter === $tab['value']
                  ? 'bg-sky-500/15 border-sky-500/30 text-sky-300'
                  : 'bg-white/4 border-white/8 text-white/40 hover:text-white hover:bg-white/7' ?>">
        <?php if (isset($tab['dot'])): ?>
        <span class="w-2 h-2 rounded-full <?= $tab['dot'] ?>"></span>
        <?php endif; ?>
        <?= $tab['label'] ?>
        <span class="text-[11px] opacity-60"><?= $tab['count'] ?></span>
    </a>
    <?php endforeach; ?>
</div>

<div class="section-card overflow-hidden">
    <?php if (empty($submissions)): ?>
    <div class="text-center py-20">
        <div class="w-20 h-20 rounded-2xl mx-auto mb-5 flex items-center justify-center"
             style="background:linear-gradient(135deg,rgba(14,165,233,0.15),rgba(14,165,233,0.05))">
            <span class="material-symbols-outlined text-sky-400/50 text-[36px]">inbox</span>
        </div>
        <p class="text-white/70 font-semibold">No submissions</p>
        <p class="text-white/30 text-sm mt-1.5">
            <?= $filter !== 'all' ? 'No ' . $filter . ' submissions found.' : 'No contact form submissions yet.' ?>
        </p>
    </div>
    <?php else: ?>
    <div class="divide-y divide-white/4">
        <?php foreach ($submissions as $sub): ?>
        <a href="<?= site_url("admin/contacts/{$sub['id']}") ?>"
           class="flex items-start gap-4 px-6 py-5 hover:bg-white/[0.025] transition-colors group block">
            <div class="flex-shrink-0 mt-0.5">
                <?php if ($sub['urgency'] === 'critical'): ?>
                <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background:linear-gradient(135deg,rgba(239,68,68,0.2),rgba(239,68,68,0.06))">
                    <span class="material-symbols-outlined text-red-400 text-[18px]">priority_high</span>
                </div>
                <?php else: ?>
                <div class="w-10 h-10 rounded-xl flex items-center justify-center" style="background:linear-gradient(135deg,rgba(14,165,233,0.15),rgba(14,165,233,0.05))">
                    <span class="material-symbols-outlined text-sky-400 text-[18px]">mail</span>
                </div>
                <?php endif; ?>
            </div>
            <div class="flex-1 min-w-0">
                <div class="flex items-center gap-3 flex-wrap">
                    <p class="text-white font-semibold text-sm <?= $sub['status'] === 'new' ? '' : 'text-white/70' ?>">
                        <?= esc($sub['vessel_name'] ?: 'Unknown Vessel') ?>
                    </p>
                    <?php if ($sub['status'] === 'new'): ?>
                    <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-red-500/15 text-red-400 border border-red-500/20">NEW</span>
                    <?php endif; ?>
                    <?php if ($sub['urgency'] === 'critical'): ?>
                    <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-red-500/15 text-red-400 border border-red-500/20">🚨 CRITICAL</span>
                    <?php endif; ?>
                </div>
                <p class="text-white/40 text-xs mt-1"><?= esc($sub['service_required']) ?> · <?= esc($sub['port_of_call']) ?></p>
                <?php if ($sub['message']): ?>
                <p class="text-white/25 text-xs mt-1.5 line-clamp-1 max-w-lg"><?= esc($sub['message']) ?></p>
                <?php endif; ?>
            </div>
            <div class="flex-shrink-0 text-right">
                <div class="flex items-center gap-2 justify-end mb-2">
                    <?php
                    $statusMap = [
                        'new'     => ['bg-red-500/12 text-red-400 border-red-500/20',   'fiber_new'],
                        'read'    => ['bg-sky-500/12 text-sky-400 border-sky-500/20',    'drafts'],
                        'replied' => ['bg-emerald-500/12 text-emerald-400 border-emerald-500/20', 'mark_email_read'],
                    ];
                    [$cls, $ico] = $statusMap[$sub['status']] ?? $statusMap['read'];
                    ?>
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-bold border <?= esc($cls) ?>">
                        <span class="material-symbols-outlined text-[12px]"><?= esc($ico) ?></span>
                        <?= esc(ucfirst($sub['status'])) ?>
                    </span>
                </div>
                <p class="text-white/20 text-[11px]"><?= date('d M, H:i', strtotime($sub['created_at'])) ?></p>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
