<?= $this->extend('layouts/admin') ?>

<?= $this->section('head_extra') ?>
<style>
.settings-input {
    width: 100%;
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.09);
    border-radius: 10px;
    padding: 10px 14px;
    color: #e2e8f0;
    font-size: 0.875rem;
    transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
}
.settings-input:focus {
    border-color: rgba(14,165,233,0.5);
    box-shadow: 0 0 0 3px rgba(14,165,233,0.1);
    outline: none;
    background: rgba(255,255,255,0.06);
}
.settings-input::placeholder { color: rgba(255,255,255,0.2); }
.group-tab.active {
    background: linear-gradient(135deg,rgba(14,165,233,0.18),rgba(14,165,233,0.06));
    border-color: rgba(14,165,233,0.3);
    color: #38bdf8;
}
.group-panel { display: none; }
.group-panel.active { display: block; }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php
$groupMeta = [
    'contact' => ['label' => 'Contact Info',   'icon' => 'call',          'color' => 'text-emerald-400', 'dot' => 'bg-emerald-400'],
    'social'  => ['label' => 'Social Media',   'icon' => 'share',         'color' => 'text-violet-400',  'dot' => 'bg-violet-400'],
    'company' => ['label' => 'Company Info',   'icon' => 'business',      'color' => 'text-amber-400',   'dot' => 'bg-amber-400'],
];

$typeIcons = [
    'tel'   => 'call',
    'email' => 'mail',
    'url'   => 'link',
    'text'  => 'edit',
];

$socialIcons = [
    'social_instagram' => ['icon' => 'photo_camera', 'color' => 'text-pink-400',    'bg' => 'rgba(236,72,153,0.15)'],
    'social_facebook'  => ['icon' => 'thumb_up',     'color' => 'text-blue-400',    'bg' => 'rgba(59,130,246,0.15)'],
    'social_linkedin'  => ['icon' => 'work',         'color' => 'text-sky-400',     'bg' => 'rgba(14,165,233,0.15)'],
    'social_whatsapp'  => ['icon' => 'chat',         'color' => 'text-emerald-400', 'bg' => 'rgba(34,197,94,0.15)'],
    'social_twitter'   => ['icon' => 'tag',          'color' => 'text-sky-300',     'bg' => 'rgba(125,211,252,0.12)'],
];

$firstGroup = array_key_first($groups);
?>

<div class="flex items-center justify-between mb-7">
    <div>
        <h1 class="font-display text-2xl font-bold text-white">Site Settings</h1>
        <p class="text-white/35 text-sm mt-1">Manage contact details, social links, and company info</p>
    </div>
</div>

<form method="POST" action="<?= site_url('admin/settings') ?>" id="settingsForm">
    <?= csrf_field() ?>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-5">

        <!-- Sidebar tabs -->
        <div class="lg:col-span-1">
            <div class="section-card p-2 space-y-1 sticky top-24">
                <?php foreach ($groups as $groupKey => $fields):
                    $meta    = $groupMeta[$groupKey] ?? ['label' => ucfirst($groupKey), 'icon' => 'settings', 'color' => 'text-sky-400', 'dot' => 'bg-sky-400'];
                    $isFirst = ($groupKey === $firstGroup);
                ?>
                <button type="button"
                        onclick="switchTab('<?= $groupKey ?>')"
                        id="tab-<?= $groupKey ?>"
                        class="group-tab w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-all border border-transparent text-white/50 hover:text-white hover:bg-white/5 <?= $isFirst ? 'active' : '' ?>">
                    <span class="material-symbols-outlined text-[18px] <?= $meta['color'] ?>"><?= $meta['icon'] ?></span>
                    <span><?= $meta['label'] ?></span>
                    <span class="ml-auto w-1.5 h-1.5 rounded-full <?= $meta['dot'] ?> opacity-50"></span>
                </button>
                <?php endforeach; ?>

                <div class="pt-2 px-2">
                    <button type="submit"
                            class="btn-primary w-full rounded-xl py-3 text-sm font-bold text-white flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[17px]">save</span>
                        Save All Settings
                    </button>
                </div>
            </div>
        </div>

        <!-- Panels -->
        <div class="lg:col-span-3 space-y-5">
            <?php foreach ($groups as $groupKey => $fields):
                $meta    = $groupMeta[$groupKey] ?? ['label' => ucfirst($groupKey), 'icon' => 'settings', 'color' => 'text-sky-400'];
                $isFirst = ($groupKey === $firstGroup);
            ?>
            <div class="group-panel <?= $isFirst ? 'active' : '' ?>" id="panel-<?= $groupKey ?>">
                <div class="section-card p-6">
                    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-white/6">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                             style="background:rgba(14,165,233,0.12)">
                            <span class="material-symbols-outlined <?= $meta['color'] ?> text-[20px]"><?= $meta['icon'] ?></span>
                        </div>
                        <div>
                            <h2 class="text-white font-bold"><?= $meta['label'] ?></h2>
                            <p class="text-white/30 text-xs mt-0.5"><?= count($fields) ?> settings</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <?php foreach ($fields as $field):
                            $si = $socialIcons[$field['key']] ?? null;
                        ?>
                        <div class="flex items-start gap-4 p-4 rounded-xl border border-white/5 bg-white/[0.015] hover:border-white/8 transition-colors">

                            <?php if ($si): ?>
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5"
                                 style="background:<?= $si['bg'] ?>">
                                <span class="material-symbols-outlined <?= $si['color'] ?> text-[18px]"><?= $si['icon'] ?></span>
                            </div>
                            <?php else: ?>
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5"
                                 style="background:rgba(255,255,255,0.04)">
                                <span class="material-symbols-outlined text-white/25 text-[17px]">
                                    <?= $typeIcons[$field['type']] ?? 'edit' ?>
                                </span>
                            </div>
                            <?php endif; ?>

                            <div class="flex-1 min-w-0">
                                <label for="field-<?= $field['key'] ?>"
                                       class="block text-white/60 text-[11px] font-bold uppercase tracking-widest mb-2">
                                    <?= esc($field['label']) ?>
                                </label>
                                <input id="field-<?= $field['key'] ?>"
                                       type="<?= in_array($field['type'], ['tel','email','url']) ? 'text' : 'text' ?>"
                                       name="<?= esc($field['key']) ?>"
                                       value="<?= esc($field['value'] ?? '') ?>"
                                       class="settings-input"
                                       placeholder="<?= $field['type'] === 'tel' ? '+xxx xxx xxxxxx'
                                           : ($field['type'] === 'email' ? 'email@example.com'
                                           : ($field['type'] === 'url'   ? 'https://'
                                           : '')) ?>">
                            </div>

                            <?php if (! empty($field['value'])): ?>
                            <div class="flex-shrink-0 mt-8">
                                <?php if ($field['type'] === 'url'): ?>
                                <a href="<?= esc($field['value']) ?>" target="_blank"
                                   class="w-8 h-8 rounded-lg flex items-center justify-center text-white/20 hover:text-sky-400 hover:bg-sky-500/10 transition-all border border-white/6 hover:border-sky-500/20">
                                    <span class="material-symbols-outlined text-[15px]">open_in_new</span>
                                </a>
                                <?php elseif ($field['type'] === 'tel'): ?>
                                <a href="tel:<?= esc($field['value']) ?>"
                                   class="w-8 h-8 rounded-lg flex items-center justify-center text-white/20 hover:text-emerald-400 hover:bg-emerald-500/10 transition-all border border-white/6 hover:border-emerald-500/20">
                                    <span class="material-symbols-outlined text-[15px]">call</span>
                                </a>
                                <?php elseif ($field['type'] === 'email'): ?>
                                <a href="mailto:<?= esc($field['value']) ?>"
                                   class="w-8 h-8 rounded-lg flex items-center justify-center text-white/20 hover:text-sky-400 hover:bg-sky-500/10 transition-all border border-white/6 hover:border-sky-500/20">
                                    <span class="material-symbols-outlined text-[15px]">mail</span>
                                </a>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>

                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</form>

<?= $this->endSection() ?>

<?= $this->section('page_scripts') ?>
<script>
function switchTab(key) {
    document.querySelectorAll('.group-tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.group-panel').forEach(p => p.classList.remove('active'));
    document.getElementById('tab-' + key).classList.add('active');
    document.getElementById('panel-' + key).classList.add('active');
}
</script>
<?= $this->endSection() ?>
