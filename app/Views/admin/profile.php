<?= $this->extend('layouts/admin') ?>

<?= $this->section('head_extra') ?>
<style>
.strength-bar div { transition: width 0.3s ease, background-color 0.3s ease; }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Page header -->
<div class="flex items-center gap-4 mb-8">
    <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-2xl font-bold text-white flex-shrink-0"
         style="background: linear-gradient(135deg,#0ea5e9,#0284c7); box-shadow: 0 8px 24px rgba(14,165,233,0.3)">
        <?= esc(strtoupper(substr((string) session()->get('admin_name'), 0, 1))) ?>
    </div>
    <div>
        <h1 class="font-display text-2xl font-bold text-white"><?= esc($user['name']) ?></h1>
        <p class="text-white/35 text-sm mt-0.5"><?= esc($user['email']) ?></p>
    </div>
</div>

<?php if ($flash = session()->getFlashdata('profile_error')): ?>
<div class="flex items-center gap-3 badge-red rounded-xl px-4 py-3.5 mb-5">
    <span class="material-symbols-outlined text-[20px] flex-shrink-0">error</span>
    <p class="text-sm font-medium"><?= esc($flash) ?></p>
    <button onclick="this.parentElement.remove()" class="ml-auto opacity-60 hover:opacity-100 transition-opacity">
        <span class="material-symbols-outlined text-[16px]">close</span>
    </button>
</div>
<?php endif; ?>

<?php if ($flash = session()->getFlashdata('password_error')): ?>
<div class="flex items-center gap-3 badge-red rounded-xl px-4 py-3.5 mb-5">
    <span class="material-symbols-outlined text-[20px] flex-shrink-0">lock</span>
    <p class="text-sm font-medium"><?= esc($flash) ?></p>
    <button onclick="this.parentElement.remove()" class="ml-auto opacity-60 hover:opacity-100 transition-opacity">
        <span class="material-symbols-outlined text-[16px]">close</span>
    </button>
</div>
<?php endif; ?>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-5">

    <!-- Update profile -->
    <div class="section-card p-6 flex flex-col gap-6">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                 style="background:linear-gradient(135deg,rgba(14,165,233,0.2),rgba(14,165,233,0.06))">
                <span class="material-symbols-outlined text-sky-400 text-[20px]">person</span>
            </div>
            <div>
                <h2 class="text-white font-bold text-base">Account Info</h2>
                <p class="text-white/30 text-xs mt-0.5">Update your name and email address</p>
            </div>
        </div>

        <form method="POST" action="<?= site_url('admin/profile') ?>" class="space-y-4">
            <?= csrf_field() ?>

            <div>
                <label class="block text-sm font-medium text-white/60 mb-2">Full Name <span class="text-red-400">*</span></label>
                <input type="text" name="name" required
                       value="<?= esc($user['name']) ?>"
                       class="input-field w-full rounded-xl px-4 py-3 text-white text-sm"/>
            </div>

            <div>
                <label class="block text-sm font-medium text-white/60 mb-2">Email Address <span class="text-red-400">*</span></label>
                <input type="email" name="email" required
                       value="<?= esc($user['email']) ?>"
                       class="input-field w-full rounded-xl px-4 py-3 text-white text-sm"/>
            </div>

            <div class="pt-1">
                <button type="submit" class="btn-primary flex items-center gap-2 text-white font-semibold px-5 py-2.5 rounded-xl text-sm">
                    <span class="material-symbols-outlined text-[17px]">save</span>
                    Save Changes
                </button>
            </div>
        </form>
    </div>

    <!-- Change password -->
    <div class="section-card p-6 flex flex-col gap-6">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                 style="background:linear-gradient(135deg,rgba(139,92,246,0.2),rgba(139,92,246,0.06))">
                <span class="material-symbols-outlined text-violet-400 text-[20px]">lock</span>
            </div>
            <div>
                <h2 class="text-white font-bold text-base">Change Password</h2>
                <p class="text-white/30 text-xs mt-0.5">Use a strong password of at least 8 characters</p>
            </div>
        </div>

        <form method="POST" action="<?= site_url('admin/profile/password') ?>" class="space-y-4" id="pw-form">
            <?= csrf_field() ?>

            <div>
                <label class="block text-sm font-medium text-white/60 mb-2">Current Password <span class="text-red-400">*</span></label>
                <div class="relative">
                    <input type="password" name="current_password" id="current_pw" required
                           class="input-field w-full rounded-xl px-4 py-3 pr-11 text-white text-sm"/>
                    <button type="button" onclick="togglePw('current_pw', this)"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-white/25 hover:text-white/60 transition-colors">
                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                    </button>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-white/60 mb-2">New Password <span class="text-red-400">*</span></label>
                <div class="relative">
                    <input type="password" name="new_password" id="new_pw" required
                           oninput="checkStrength(this.value)"
                           class="input-field w-full rounded-xl px-4 py-3 pr-11 text-white text-sm"/>
                    <button type="button" onclick="togglePw('new_pw', this)"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-white/25 hover:text-white/60 transition-colors">
                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                    </button>
                </div>
                <!-- Strength bar -->
                <div class="mt-2 space-y-1">
                    <div class="h-1 w-full bg-white/6 rounded-full overflow-hidden strength-bar">
                        <div id="strength-fill" class="h-full w-0 rounded-full bg-red-500"></div>
                    </div>
                    <p id="strength-label" class="text-[11px] text-white/20"></p>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-white/60 mb-2">Confirm New Password <span class="text-red-400">*</span></label>
                <div class="relative">
                    <input type="password" name="confirm_password" id="confirm_pw" required
                           oninput="checkMatch()"
                           class="input-field w-full rounded-xl px-4 py-3 pr-11 text-white text-sm"/>
                    <button type="button" onclick="togglePw('confirm_pw', this)"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-white/25 hover:text-white/60 transition-colors">
                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                    </button>
                </div>
                <p id="match-msg" class="text-[11px] mt-1.5 hidden"></p>
            </div>

            <div class="pt-1">
                <button type="submit" class="flex items-center gap-2 text-white font-semibold px-5 py-2.5 rounded-xl text-sm transition-all"
                        style="background:linear-gradient(135deg,#8b5cf6,#6d28d9);box-shadow:0 4px 16px rgba(139,92,246,0.3)">
                    <span class="material-symbols-outlined text-[17px]">lock_reset</span>
                    Update Password
                </button>
            </div>
        </form>
    </div>

    <!-- Account meta -->
    <div class="section-card p-6 lg:col-span-2">
        <div class="flex items-center gap-2 mb-5">
            <span class="material-symbols-outlined text-sky-500 text-[16px]">info</span>
            <h2 class="text-white/50 text-[11px] font-bold uppercase tracking-widest">Account Details</h2>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <?php foreach ([
                ['label' => 'Account ID',    'value' => '#' . str_pad($user['id'], 4, '0', STR_PAD_LEFT), 'icon' => 'tag'],
                ['label' => 'Role',          'value' => 'Administrator',                                   'icon' => 'shield'],
                ['label' => 'Member Since',  'value' => date('d M Y', strtotime($user['created_at'])),     'icon' => 'calendar_today'],
                ['label' => 'Last Updated',  'value' => date('d M Y', strtotime($user['updated_at'])),     'icon' => 'update'],
            ] as $item): ?>
            <div class="bg-white/3 border border-white/6 rounded-xl p-4">
                <div class="flex items-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-sky-500/50 text-[14px]"><?= $item['icon'] ?></span>
                    <p class="text-white/30 text-[10px] uppercase tracking-wider font-bold"><?= $item['label'] ?></p>
                </div>
                <p class="text-white/80 text-sm font-semibold"><?= $item['value'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<?= $this->endSection() ?>

<?= $this->section('page_scripts') ?>
<script>
function togglePw(id, btn) {
    const input = document.getElementById(id);
    const icon  = btn.querySelector('.material-symbols-outlined');
    if (input.type === 'password') {
        input.type  = 'text';
        icon.textContent = 'visibility_off';
    } else {
        input.type  = 'password';
        icon.textContent = 'visibility';
    }
}

function checkStrength(val) {
    const fill  = document.getElementById('strength-fill');
    const label = document.getElementById('strength-label');
    if (!val) { fill.style.width = '0'; label.textContent = ''; return; }

    let score = 0;
    if (val.length >= 8)  score++;
    if (val.length >= 12) score++;
    if (/[A-Z]/.test(val)) score++;
    if (/[0-9]/.test(val)) score++;
    if (/[^A-Za-z0-9]/.test(val)) score++;

    const levels = [
        { w: '20%',  color: '#ef4444', text: 'Very weak'  },
        { w: '40%',  color: '#f97316', text: 'Weak'        },
        { w: '60%',  color: '#eab308', text: 'Fair'        },
        { w: '80%',  color: '#22c55e', text: 'Strong'      },
        { w: '100%', color: '#10b981', text: 'Very strong' },
    ];
    const l = levels[Math.min(score, 4)];
    fill.style.width           = l.w;
    fill.style.backgroundColor = l.color;
    label.textContent          = l.text;
    label.style.color          = l.color;
}

function checkMatch() {
    const nw  = document.getElementById('new_pw').value;
    const cw  = document.getElementById('confirm_pw').value;
    const msg = document.getElementById('match-msg');
    if (!cw) { msg.classList.add('hidden'); return; }
    msg.classList.remove('hidden');
    if (nw === cw) {
        msg.textContent = '✓ Passwords match';
        msg.style.color = '#4ade80';
    } else {
        msg.textContent = '✗ Passwords do not match';
        msg.style.color = '#f87171';
    }
}
</script>
<?= $this->endSection() ?>
