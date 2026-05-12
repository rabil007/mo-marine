<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="flex items-start gap-4 mb-7">
    <div class="w-12 h-12 rounded-2xl flex items-center justify-center flex-shrink-0"
         style="background:linear-gradient(135deg,rgba(14,165,233,0.2),rgba(14,165,233,0.06))">
        <span class="material-symbols-outlined text-sky-400 text-[22px]"><?= $publication ? 'edit' : 'upload_file' ?></span>
    </div>
    <div>
        <h1 class="font-display text-2xl font-bold text-white">
            <?= $publication ? 'Edit Publication' : 'Upload New Publication' ?>
        </h1>
        <p class="text-white/35 text-sm mt-1">
            <?= $publication ? 'Update details or replace the PDF file.' : 'Add a new PDF publication to the website.' ?>
        </p>
    </div>
</div>

<?php if (! empty($formError)): ?>
<div class="flex items-center gap-3 badge-red rounded-xl px-4 py-3.5 mb-6">
    <span class="material-symbols-outlined text-[20px] flex-shrink-0">error</span>
    <p class="text-sm font-medium"><?= esc($formError) ?></p>
</div>
<?php endif; ?>

<form method="POST"
      action="<?= $publication ? site_url("admin/publications/{$publication['id']}") : site_url('admin/publications') ?>"
      enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-5 items-start">

        <!-- Left: Details + Settings + Actions -->
        <div class="lg:col-span-2 flex flex-col gap-5">

            <div class="section-card p-6 space-y-5">
                <h2 class="flex items-center gap-2 text-white/50 text-[11px] font-bold uppercase tracking-widest">
                    <span class="material-symbols-outlined text-sky-500 text-[15px]">title</span>
                    Publication Details
                </h2>
                <div>
                    <label for="title" class="block text-sm font-medium text-white/60 mb-2">
                        Title <span class="text-red-400">*</span>
                    </label>
                    <input type="text" id="title" name="title" required
                           value="<?= esc($publication['title'] ?? old('title')) ?>"
                           placeholder="e.g. Monthly Publications Checklist"
                           class="input-field w-full rounded-xl px-4 py-3 text-white placeholder-white/20 text-sm"/>
                </div>
                <div>
                    <label for="subtitle" class="block text-sm font-medium text-white/60 mb-2">
                        Subtitle
                        <span class="text-white/25 font-normal">— shown in navbar dropdown</span>
                    </label>
                    <input type="text" id="subtitle" name="subtitle"
                           value="<?= esc($publication['subtitle'] ?? old('subtitle')) ?>"
                           placeholder="e.g. Med, Black & Red Sea"
                           class="input-field w-full rounded-xl px-4 py-3 text-white placeholder-white/20 text-sm"/>
                </div>
            </div>

            <div class="section-card p-6 space-y-5">
                <h2 class="flex items-center gap-2 text-white/50 text-[11px] font-bold uppercase tracking-widest">
                    <span class="material-symbols-outlined text-sky-500 text-[15px]">tune</span>
                    Settings
                </h2>
                <div>
                    <label for="sort_order" class="block text-sm font-medium text-white/60 mb-2">Sort Order</label>
                    <input type="number" id="sort_order" name="sort_order" min="0"
                           value="<?= esc($publication['sort_order'] ?? old('sort_order', '0')) ?>"
                           class="input-field w-full rounded-xl px-4 py-3 text-white text-sm"/>
                    <p class="text-white/20 text-xs mt-2 flex items-center gap-1">
                        <span class="material-symbols-outlined text-[12px]">info</span>
                        Lower number appears first
                    </p>
                </div>
                <div>
                    <label for="is_active" class="block text-sm font-medium text-white/60 mb-2">Visibility</label>
                    <select id="is_active" name="is_active"
                            class="input-field w-full rounded-xl px-4 py-3 text-white text-sm cursor-pointer">
                        <option value="1" <?= (($publication['is_active'] ?? 1) == 1) ? 'selected' : '' ?>>Active — visible on website</option>
                        <option value="0" <?= (($publication['is_active'] ?? 1) == 0) ? 'selected' : '' ?>>Hidden — not shown publicly</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <button type="submit" class="btn-primary flex items-center gap-2 text-white font-semibold px-6 py-3 rounded-xl text-sm">
                    <span class="material-symbols-outlined text-[18px]"><?= $publication ? 'save' : 'upload_file' ?></span>
                    <?= $publication ? 'Save Changes' : 'Upload Publication' ?>
                </button>
                <a href="<?= site_url('admin/publications') ?>"
                   class="flex items-center gap-2 px-5 py-3 bg-white/4 hover:bg-white/7 text-white/40 hover:text-white/80 rounded-xl text-sm font-medium transition-all border border-white/6">
                    <span class="material-symbols-outlined text-[18px]">close</span>
                    Cancel
                </a>
            </div>
        </div>

        <!-- Right: File upload -->
        <div class="lg:col-span-3">
            <div class="section-card p-6 space-y-4">
                <h2 class="flex items-center gap-2 text-white/50 text-[11px] font-bold uppercase tracking-widest">
                    <span class="material-symbols-outlined text-sky-500 text-[15px]">upload_file</span>
                    PDF File
                    <?php if ($publication): ?>
                    <span class="text-white/25 font-normal normal-case tracking-normal text-xs ml-1">— leave blank to keep current</span>
                    <?php else: ?>
                    <span class="text-red-400 ml-1 tracking-normal normal-case font-normal">*</span>
                    <?php endif; ?>
                </h2>

                <?php if ($publication): ?>
                <div class="flex items-center gap-3 bg-white/3 border border-white/8 rounded-xl px-4 py-3.5">
                    <div class="w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0"
                         style="background:linear-gradient(135deg,rgba(239,68,68,0.2),rgba(239,68,68,0.06))">
                        <span class="material-symbols-outlined text-red-400 text-[16px]">picture_as_pdf</span>
                    </div>
                    <div class="min-w-0 flex-1">
                        <p class="text-white/80 text-sm font-medium truncate"><?= esc($publication['file_name']) ?></p>
                        <p class="text-white/30 text-xs mt-0.5"><?= number_format($publication['file_size'] / 1024, 0) ?> KB · Current file</p>
                    </div>
                    <a href="<?= esc(base_url($publication['file_path']), 'attr') ?>" target="_blank"
                       class="flex-shrink-0 flex items-center gap-1.5 text-white/35 hover:text-white text-xs px-3 py-1.5 rounded-lg bg-white/4 hover:bg-white/8 border border-white/8 transition-all">
                        <span class="material-symbols-outlined text-[14px]">open_in_new</span> Preview
                    </a>
                </div>
                <?php endif; ?>

                <div id="drop-zone"
                     class="relative border-2 border-dashed border-white/8 rounded-2xl text-center cursor-pointer group transition-all duration-200 hover:border-sky-500/35 hover:bg-sky-500/3 flex items-center justify-center"
                     style="min-height:380px"
                     onclick="document.getElementById('pdf_file').click()">

                    <div id="drop-idle" class="pointer-events-none p-8 w-full">
                        <div class="w-24 h-24 bg-white/3 group-hover:bg-sky-500/8 rounded-3xl flex items-center justify-center mx-auto mb-6 transition-colors duration-200 border border-white/6 group-hover:border-sky-500/25">
                            <span class="material-symbols-outlined text-white/15 group-hover:text-sky-400/70 text-[44px] transition-colors duration-200">cloud_upload</span>
                        </div>
                        <p class="text-white/50 text-base font-semibold">Click to browse or drag &amp; drop</p>
                        <p class="text-white/20 text-sm mt-2">PDF files only · Max 20 MB</p>
                        <div class="flex items-center justify-center gap-6 mt-8">
                            <div class="flex items-center gap-2 text-white/12 text-xs">
                                <span class="material-symbols-outlined text-[13px]">lock</span> Secure upload
                            </div>
                            <div class="flex items-center gap-2 text-white/12 text-xs">
                                <span class="material-symbols-outlined text-[13px]">bolt</span> Instant publish
                            </div>
                            <div class="flex items-center gap-2 text-white/12 text-xs">
                                <span class="material-symbols-outlined text-[13px]">picture_as_pdf</span> PDF only
                            </div>
                        </div>
                    </div>

                    <div id="drop-selected" class="hidden pointer-events-none p-8 w-full">
                        <div class="w-24 h-24 rounded-3xl flex items-center justify-center mx-auto mb-6 border border-emerald-500/25"
                             style="background:linear-gradient(135deg,rgba(16,185,129,0.15),rgba(16,185,129,0.05))">
                            <span class="material-symbols-outlined text-emerald-400 text-[44px]">check_circle</span>
                        </div>
                        <p id="selected-name" class="text-white/80 text-base font-semibold truncate max-w-sm mx-auto"></p>
                        <p id="selected-size" class="text-white/30 text-sm mt-2"></p>
                        <p class="text-emerald-400/60 text-xs mt-3 font-medium">Ready to upload</p>
                        <button type="button" onclick="clearFile(event)"
                                class="mt-4 pointer-events-auto text-xs text-white/20 hover:text-red-400 transition-colors underline underline-offset-2">
                            Remove and choose a different file
                        </button>
                    </div>

                    <input type="file" id="pdf_file" name="pdf_file" accept=".pdf,application/pdf" class="hidden"/>
                </div>
            </div>
        </div>

    </div>
</form>

<?= $this->endSection() ?>

<?= $this->section('page_scripts') ?>
<script>
const dropZone  = document.getElementById('drop-zone');
const fileInput = document.getElementById('pdf_file');
const dropIdle  = document.getElementById('drop-idle');
const dropSel   = document.getElementById('drop-selected');
const selName   = document.getElementById('selected-name');
const selSize   = document.getElementById('selected-size');

function showFile(file) {
    selName.textContent = file.name;
    selSize.textContent = (file.size / 1024).toFixed(0) + ' KB';
    dropIdle.classList.add('hidden');
    dropSel.classList.remove('hidden');
    dropZone.style.borderColor = 'rgba(16,185,129,0.35)';
    dropZone.style.background  = 'rgba(16,185,129,0.03)';
}

function clearFile(e) {
    e.stopPropagation();
    fileInput.value = '';
    dropIdle.classList.remove('hidden');
    dropSel.classList.add('hidden');
    dropZone.style.borderColor = '';
    dropZone.style.background  = '';
}

fileInput.addEventListener('change', () => { if (fileInput.files.length) showFile(fileInput.files[0]); });

dropZone.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropZone.style.borderColor = 'rgba(14,165,233,0.45)';
    dropZone.style.background  = 'rgba(14,165,233,0.04)';
});
dropZone.addEventListener('dragleave', (e) => {
    if (!dropZone.contains(e.relatedTarget) && !fileInput.files.length) {
        dropZone.style.borderColor = '';
        dropZone.style.background  = '';
    }
});
dropZone.addEventListener('drop', (e) => {
    e.preventDefault();
    const file = e.dataTransfer.files[0];
    if (file) {
        const dt = new DataTransfer();
        dt.items.add(file);
        fileInput.files = dt.files;
        showFile(file);
    }
});
</script>
<?= $this->endSection() ?>
