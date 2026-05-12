<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="flex items-start gap-4 mb-7">
    <div class="w-12 h-12 rounded-2xl flex items-center justify-center flex-shrink-0"
         style="background:linear-gradient(135deg,rgba(14,165,233,0.2),rgba(14,165,233,0.06))">
        <span class="material-symbols-outlined text-sky-400 text-[22px]"><?= $faq ? 'edit' : 'add_circle' ?></span>
    </div>
    <div>
        <h1 class="font-display text-2xl font-bold text-white"><?= $faq ? 'Edit Question' : 'Add New Question' ?></h1>
        <p class="text-white/35 text-sm mt-1"><?= $faq ? 'Update this FAQ entry.' : 'Add a new question and answer to the FAQ page.' ?></p>
    </div>
</div>

<?php if (! empty($formError)): ?>
<div class="flex items-center gap-3 badge-red rounded-xl px-4 py-3.5 mb-6">
    <span class="material-symbols-outlined text-[20px] flex-shrink-0">error</span>
    <p class="text-sm font-medium"><?= esc($formError) ?></p>
</div>
<?php endif; ?>

<form method="POST"
      action="<?= $faq ? site_url("admin/faqs/{$faq['id']}") : site_url('admin/faqs') ?>">
    <?= csrf_field() ?>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-5 items-start">

        <!-- Left: Settings -->
        <div class="lg:col-span-2 flex flex-col gap-5">

            <div class="section-card p-6 space-y-5">
                <h2 class="flex items-center gap-2 text-white/50 text-[11px] font-bold uppercase tracking-widest">
                    <span class="material-symbols-outlined text-sky-500 text-[15px]">tune</span>
                    Settings
                </h2>

                <div>
                    <label class="block text-sm font-medium text-white/60 mb-2">
                        Category <span class="text-red-400">*</span>
                    </label>
                    <?php
                    $currentCat   = $faq['category'] ?? old('category', '');
                    $isCustom     = $currentCat !== '' && ! in_array($currentCat, $categories);
                    $selectVal    = $isCustom ? '__custom__' : $currentCat;
                    ?>
                    <select id="cat-select"
                            class="input-field w-full rounded-xl px-4 py-3 text-white text-sm cursor-pointer"
                            onchange="handleCatChange(this)">
                        <option value="" disabled <?= $selectVal === '' ? 'selected' : '' ?>>— Select a category —</option>
                        <?php foreach ($categories as $cat): ?>
                        <option value="<?= esc($cat) ?>" <?= $selectVal === $cat ? 'selected' : '' ?>><?= esc($cat) ?></option>
                        <?php endforeach; ?>
                        <option value="__custom__" <?= $isCustom ? 'selected' : '' ?>>+ New category…</option>
                    </select>

                    <div id="custom-cat-wrap" class="mt-3 <?= $isCustom ? '' : 'hidden' ?>">
                        <input type="text" id="custom-cat-input"
                               placeholder="Type new category name…"
                               value="<?= $isCustom ? esc($currentCat) : '' ?>"
                               oninput="document.getElementById('cat-hidden').value = this.value"
                               class="input-field w-full rounded-xl px-4 py-3 text-white placeholder-white/20 text-sm"/>
                    </div>

                    <input type="hidden" name="category" id="cat-hidden"
                           value="<?= esc($currentCat) ?>"/>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white/60 mb-2">Sort Order</label>
                    <input type="number" name="sort_order" min="0"
                           value="<?= esc($faq['sort_order'] ?? old('sort_order', '0')) ?>"
                           class="input-field w-full rounded-xl px-4 py-3 text-white text-sm"/>
                    <p class="text-white/20 text-xs mt-2 flex items-center gap-1">
                        <span class="material-symbols-outlined text-[12px]">info</span>
                        Lower number appears first
                    </p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-white/60 mb-2">Visibility</label>
                    <select name="is_active" class="input-field w-full rounded-xl px-4 py-3 text-white text-sm cursor-pointer">
                        <option value="1" <?= (($faq['is_active'] ?? 1) == 1) ? 'selected' : '' ?>>Active — visible on website</option>
                        <option value="0" <?= (($faq['is_active'] ?? 1) == 0) ? 'selected' : '' ?>>Hidden — not shown publicly</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <button type="submit" class="btn-primary flex items-center gap-2 text-white font-semibold px-6 py-3 rounded-xl text-sm">
                    <span class="material-symbols-outlined text-[18px]"><?= $faq ? 'save' : 'add_circle' ?></span>
                    <?= $faq ? 'Save Changes' : 'Add Question' ?>
                </button>
                <a href="<?= site_url('admin/faqs') ?>"
                   class="flex items-center gap-2 px-5 py-3 bg-white/4 hover:bg-white/7 text-white/40 hover:text-white/80 rounded-xl text-sm font-medium transition-all border border-white/6">
                    <span class="material-symbols-outlined text-[18px]">close</span>
                    Cancel
                </a>
            </div>
        </div>

        <!-- Right: Question + Answer -->
        <div class="lg:col-span-3 flex flex-col gap-5">

            <div class="section-card p-6 space-y-5">
                <h2 class="flex items-center gap-2 text-white/50 text-[11px] font-bold uppercase tracking-widest">
                    <span class="material-symbols-outlined text-sky-500 text-[15px]">help</span>
                    Content
                </h2>

                <div>
                    <label class="block text-sm font-medium text-white/60 mb-2">
                        Question <span class="text-red-400">*</span>
                    </label>
                    <input type="text" name="question" required
                           value="<?= esc($faq['question'] ?? old('question')) ?>"
                           placeholder="e.g. Which ports do you actively service?"
                           class="input-field w-full rounded-xl px-4 py-3 text-white placeholder-white/20 text-sm"/>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label class="block text-sm font-medium text-white/60">
                            Answer <span class="text-red-400">*</span>
                        </label>
                        <span id="char-count" class="text-white/20 text-xs"></span>
                    </div>
                    <textarea name="answer" required rows="10"
                              oninput="document.getElementById('char-count').textContent = this.value.length + ' chars'"
                              placeholder="Write the full answer here..."
                              class="input-field w-full rounded-xl px-4 py-3 text-white placeholder-white/20 text-sm resize-y leading-relaxed"><?= esc($faq['answer'] ?? old('answer')) ?></textarea>
                    <p class="text-white/20 text-xs mt-2">Plain text. Line breaks are preserved on the website.</p>
                </div>
            </div>

            <!-- Live preview -->
            <div class="section-card p-6">
                <h2 class="flex items-center gap-2 text-white/50 text-[11px] font-bold uppercase tracking-widest mb-4">
                    <span class="material-symbols-outlined text-sky-500 text-[15px]">preview</span>
                    Preview
                </h2>
                <div class="bg-white rounded-xl border border-navy-100 overflow-hidden">
                    <div class="flex items-center justify-between gap-4 px-6 py-4 cursor-default">
                        <span id="preview-q" class="font-bold text-navy-900 text-sm">Your question will appear here…</span>
                        <span class="material-symbols-outlined text-maritime-500 flex-shrink-0 text-[18px]">expand_more</span>
                    </div>
                    <div class="px-6 pb-5 pt-3 text-navy-600 text-sm border-t border-navy-50 leading-relaxed">
                        <span id="preview-a" class="text-navy-400 italic">Your answer will appear here…</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>

<?= $this->endSection() ?>

<?= $this->section('page_scripts') ?>
<script>
function handleCatChange(sel) {
    const wrap   = document.getElementById('custom-cat-wrap');
    const hidden = document.getElementById('cat-hidden');
    const input  = document.getElementById('custom-cat-input');
    if (sel.value === '__custom__') {
        wrap.classList.remove('hidden');
        input.focus();
        hidden.value = input.value;
    } else {
        wrap.classList.add('hidden');
        hidden.value = sel.value;
    }
}

const qInput = document.querySelector('input[name="question"]');
const aInput = document.querySelector('textarea[name="answer"]');
const preQ   = document.getElementById('preview-q');
const preA   = document.getElementById('preview-a');

function updatePreview() {
    preQ.textContent = qInput.value  || 'Your question will appear here…';
    preA.textContent = aInput.value  || 'Your answer will appear here…';
    preA.className   = aInput.value  ? 'text-navy-700' : 'text-navy-400 italic';
    document.getElementById('char-count').textContent = aInput.value.length + ' chars';
}

qInput.addEventListener('input', updatePreview);
aInput.addEventListener('input', updatePreview);
updatePreview();
</script>
<?= $this->endSection() ?>
