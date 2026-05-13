<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="flex items-center justify-between mb-7">
    <div>
        <h1 class="font-display text-2xl font-bold text-white">Site Stats</h1>
        <p class="text-white/35 text-sm mt-1">Edit the numbers shown on the homepage and services page</p>
    </div>
</div>

<form method="POST" action="<?= site_url('admin/stats') ?>">
    <?= csrf_field() ?>

    <div class="section-card overflow-hidden mb-5">
        <div class="flex items-center gap-3 px-6 py-4 border-b border-white/6">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0 bg-sky-500/15">
                <span class="material-symbols-outlined text-sky-400 text-[16px]">bar_chart</span>
            </div>
            <h2 class="text-white font-bold text-sm">All Stats</h2>
            <span class="text-[10px] font-bold text-white/25 bg-white/6 rounded-full px-2 py-0.5"><?= count($stats) ?></span>
        </div>

        <div class="divide-y divide-white/4">
            <?php foreach ($stats as $i => $stat): ?>
            <div class="flex items-center gap-4 px-6 py-4 hover:bg-white/[0.02] transition-colors">
                <input type="hidden" name="id[]" value="<?= (int) $stat['id'] ?>"/>

                <span class="inline-flex items-center justify-center w-6 h-6 rounded-md bg-white/4 text-white/25 text-[10px] font-bold flex-shrink-0">
                    <?= (int) $stat['sort_order'] ?>
                </span>

                <div class="flex flex-col sm:flex-row gap-3 flex-1">
                    <input type="text"
                           name="value[]"
                           value="<?= esc($stat['value']) ?>"
                           placeholder="Value (e.g. 450+)"
                           required maxlength="50"
                           class="input-field rounded-xl px-4 py-2.5 text-white placeholder-white/20 text-sm font-display font-bold text-xl w-full sm:w-40 flex-shrink-0"/>

                    <input type="text"
                           name="label[]"
                           value="<?= esc($stat['label']) ?>"
                           placeholder="Label"
                           required maxlength="150"
                           class="input-field rounded-xl px-4 py-2.5 text-white placeholder-white/20 text-sm flex-1"/>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <button type="submit"
                class="btn-primary flex items-center gap-2 text-white font-semibold px-6 py-3 rounded-xl text-sm">
            <span class="material-symbols-outlined text-[18px]">save</span>
            Save Changes
        </button>
    </div>
</form>

<!-- Preview -->
<div class="section-card p-6 mt-6">
    <h2 class="flex items-center gap-2 text-white/50 text-[11px] font-bold uppercase tracking-widest mb-5">
        <span class="material-symbols-outlined text-sky-500 text-[15px]">preview</span>
        Website Preview
    </h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4" id="preview-grid">
        <?php foreach (array_slice($stats, 0, 4) as $idx => $stat): ?>
        <div class="bg-navy-900 rounded-xl p-6 text-center border border-white/8">
            <div class="font-display text-4xl font-bold text-sky-400 mb-2 preview-value-<?= $idx ?>"><?= esc($stat['value']) ?></div>
            <div class="text-white/50 text-xs font-bold uppercase tracking-wider preview-label-<?= $idx ?>"><?= esc($stat['label']) ?></div>
        </div>
        <?php endforeach; ?>
    </div>
    <p class="text-white/20 text-xs mt-4 flex items-center gap-1.5">
        <span class="material-symbols-outlined text-[13px]">info</span>
        The first 4 stats (by sort order) appear on the website.
    </p>
</div>

<?= $this->endSection() ?>

<?= $this->section('page_scripts') ?>
<script>
document.querySelectorAll('input[name="value[]"]').forEach((inp, i) => {
    inp.addEventListener('input', () => {
        const el = document.querySelector('.preview-value-' + i);
        if (el) el.textContent = inp.value || '—';
    });
});
document.querySelectorAll('input[name="label[]"]').forEach((inp, i) => {
    inp.addEventListener('input', () => {
        const el = document.querySelector('.preview-label-' + i);
        if (el) el.textContent = inp.value || 'Label';
    });
});
</script>
<?= $this->endSection() ?>
