<?= $this->extend('layouts/admin') ?>

<?= $this->section('head_extra') ?>
<style>
.detail-field {
    background: rgba(255,255,255,0.025);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 14px;
    padding: 16px;
    transition: border-color 0.2s;
}
.detail-field:hover { border-color: rgba(255,255,255,0.1); }
.action-btn {
    display: flex; align-items: center; justify-content: center;
    gap: 8px; width: 100%; padding: 11px 16px;
    border-radius: 12px; font-size: 0.875rem; font-weight: 600;
    transition: all 0.2s; text-decoration: none;
}
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php
$isCritical = $submission['urgency'] === 'critical';
$statusStyles = [
    'new'     => ['pill' => 'bg-red-500/12 text-red-400 border-red-500/25',    'dot' => 'bg-red-400',     'label' => 'New'],
    'read'    => ['pill' => 'bg-sky-500/12 text-sky-400 border-sky-500/25',    'dot' => 'bg-sky-400',     'label' => 'Read'],
    'replied' => ['pill' => 'bg-emerald-500/12 text-emerald-400 border-emerald-500/25', 'dot' => 'bg-emerald-400', 'label' => 'Replied'],
];
$st = $statusStyles[$submission['status']] ?? $statusStyles['read'];
?>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 max-w-5xl">

    <!-- Left: main content -->
    <div class="lg:col-span-2 space-y-5">

        <!-- Hero card -->
        <div class="section-card p-6"
             style="background:linear-gradient(135deg,rgba(14,165,233,0.07) 0%,rgba(10,22,40,0.9) 100%)">
            <div class="flex items-start justify-between gap-4">
                <div class="flex items-start gap-4">
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center flex-shrink-0"
                         style="background:<?= $isCritical
                             ? 'linear-gradient(135deg,rgba(239,68,68,0.25),rgba(239,68,68,0.08))'
                             : 'linear-gradient(135deg,rgba(14,165,233,0.25),rgba(14,165,233,0.06))' ?>">
                        <span class="material-symbols-outlined text-[26px] <?= $isCritical ? 'text-red-400' : 'text-sky-400' ?>">
                            <?= $isCritical ? 'priority_high' : 'mail' ?>
                        </span>
                    </div>
                    <div>
                        <h1 class="font-display text-2xl font-bold text-white leading-tight">
                            <?= esc($submission['vessel_name'] ?: 'Unknown Vessel') ?>
                        </h1>
                        <p class="text-white/35 text-sm mt-1.5 flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[14px]">schedule</span>
                            <?= date('d M Y · H:i', strtotime($submission['created_at'])) ?>
                        </p>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-2 flex-shrink-0">
                    <?php if ($isCritical): ?>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold bg-red-500/15 text-red-400 border border-red-500/25">
                        <span class="material-symbols-outlined text-[13px]">priority_high</span>
                        Critical
                    </span>
                    <?php endif; ?>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl text-xs font-bold border <?= esc($st['pill']) ?>">
                        <span class="w-1.5 h-1.5 rounded-full <?= esc($st['dot']) ?>"></span>
                        <?= esc($st['label']) ?>
                    </span>
                </div>
            </div>
        </div>

        <!-- Details card -->
        <div class="section-card p-6">
            <div class="flex items-center gap-2 mb-5">
                <span class="material-symbols-outlined text-sky-500 text-[17px]">assignment</span>
                <h2 class="text-white font-bold text-sm">Submission Details</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <?php foreach ([
                    ['Port of Call',     $submission['port_of_call'],     'anchor',   'text-sky-400'],
                    ['Service Required', $submission['service_required'], 'build',    'text-violet-400'],
                    ['Contact Number',   $submission['contact_number'],   'call',     'text-emerald-400'],
                    ['Email Address',    $submission['email'],            'mail',     'text-sky-400'],
                ] as [$label, $value, $icon, $color]): ?>
                <div class="detail-field">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="material-symbols-outlined <?= $color ?>/60 text-[15px]"><?= $icon ?></span>
                        <p class="text-white/30 text-[10px] font-bold uppercase tracking-widest"><?= $label ?></p>
                    </div>
                    <p class="text-white/85 text-sm font-medium"><?= esc($value ?: '—') ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <?php if ($submission['message']): ?>
            <div class="detail-field mt-3">
                <div class="flex items-center gap-2 mb-3">
                    <span class="material-symbols-outlined text-amber-400/60 text-[15px]">forum</span>
                    <p class="text-white/30 text-[10px] font-bold uppercase tracking-widest">Message / Requirements</p>
                </div>
                <p class="text-white/80 text-sm leading-relaxed whitespace-pre-wrap"><?= esc($submission['message']) ?></p>
            </div>
            <?php endif; ?>
        </div>

    </div>

    <!-- Right: actions sidebar -->
    <div class="space-y-4">

        <!-- Status update -->
        <div class="section-card p-5">
            <div class="flex items-center gap-2 mb-4">
                <span class="material-symbols-outlined text-sky-500 text-[17px]">tune</span>
                <h2 class="text-white font-bold text-sm">Update Status</h2>
            </div>
            <form method="POST" action="<?= site_url("admin/contacts/{$submission['id']}/status") ?>">
                <?= csrf_field() ?>
                <div class="space-y-2 mb-4">
                    <?php foreach ([
                        ['new',     'New',     'bg-red-500/12 border-red-500/25 text-red-300',     'bg-red-400'],
                        ['read',    'Read',    'bg-sky-500/12 border-sky-500/25 text-sky-300',     'bg-sky-400'],
                        ['replied', 'Replied', 'bg-emerald-500/12 border-emerald-500/25 text-emerald-300', 'bg-emerald-400'],
                    ] as [$val, $lbl, $activeCls, $dotCls]): ?>
                    <?php $isSelected = $submission['status'] === $val; ?>
                    <label class="flex items-center gap-3 p-3 rounded-xl border cursor-pointer transition-all
                                  <?= $isSelected
                                      ? $activeCls
                                      : 'border-white/6 bg-white/[0.02] text-white/40 hover:border-white/12 hover:bg-white/[0.04]' ?>">
                        <input type="radio" name="status" value="<?= esc($val, 'attr') ?>" <?= $isSelected ? 'checked' : '' ?>
                               class="sr-only" onchange="this.form.submit()">
                        <span class="w-2 h-2 rounded-full flex-shrink-0 <?= $isSelected ? esc($dotCls) : 'bg-white/15' ?>"></span>
                        <span class="text-sm font-semibold <?= $isSelected ? '' : 'text-white/40' ?>"><?= esc($lbl) ?></span>
                        <?php if ($isSelected): ?>
                        <span class="material-symbols-outlined text-[15px] ml-auto">check</span>
                        <?php endif; ?>
                    </label>
                    <?php endforeach; ?>
                </div>
                <button type="submit" class="btn-primary w-full rounded-xl py-2.5 text-sm font-bold text-white">
                    <span class="material-symbols-outlined text-[16px]">save</span>
                    Save Status
                </button>
            </form>
        </div>

        <!-- Quick contact -->
        <div class="section-card p-5">
            <div class="flex items-center gap-2 mb-4">
                <span class="material-symbols-outlined text-sky-500 text-[17px]">contact_phone</span>
                <h2 class="text-white font-bold text-sm">Quick Contact</h2>
            </div>
            <div class="space-y-2">
                <?php if ($submission['email']): ?>
                <a href="mailto:<?= esc($submission['email']) ?>"
                   class="action-btn border border-sky-500/20 bg-sky-500/8 text-sky-300 hover:bg-sky-500/18 hover:border-sky-500/35">
                    <span class="material-symbols-outlined text-[18px]">reply</span>
                    Reply via Email
                </a>
                <?php endif; ?>
                <?php if ($submission['contact_number']): ?>
                <a href="tel:<?= esc($submission['contact_number']) ?>"
                   class="action-btn border border-emerald-500/20 bg-emerald-500/8 text-emerald-300 hover:bg-emerald-500/18 hover:border-emerald-500/35">
                    <span class="material-symbols-outlined text-[18px]">call</span>
                    <?= esc($submission['contact_number']) ?>
                </a>
                <?php endif; ?>
                <?php if (! $submission['email'] && ! $submission['contact_number']): ?>
                <p class="text-white/25 text-sm text-center py-3">No contact info provided</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Danger zone -->
        <div class="section-card p-5">
            <div class="flex items-center gap-2 mb-4">
                <span class="material-symbols-outlined text-red-400/50 text-[17px]">warning</span>
                <h2 class="text-white/50 font-bold text-sm">Danger Zone</h2>
            </div>
            <form method="POST" action="<?= site_url("admin/contacts/{$submission['id']}/delete") ?>"
                  onsubmit="return confirm('Delete this submission permanently?')">
                <?= csrf_field() ?>
                <button type="submit"
                        class="action-btn border border-red-500/15 bg-red-500/6 text-red-400/70 hover:bg-red-500/12 hover:border-red-500/25 hover:text-red-400">
                    <span class="material-symbols-outlined text-[17px]">delete</span>
                    Delete Submission
                </button>
            </form>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
