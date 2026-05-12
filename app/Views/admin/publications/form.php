<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= $publication ? 'Edit' : 'Upload' ?> Publication | M&amp;O Admin</title>
    <meta name="robots" content="noindex, nofollow"/>
    <base href="<?= base_url('/') ?>"/>
    <link rel="icon" type="image/png" href="https://lh3.googleusercontent.com/aida/ADBb0uja4Pi6GeJT_mp_CqXVXb_-sYCGSBshAeYzAVqZ2X7Fb6s1GVoTslzmP0TCXhHeHT7QAgK8yTTVhxPQUkPvvLgk-Weuhk2NZo-kNLnMs5ct6hKOviBkRS_u_Y3jWRPh8YGCTQUAcVudlWXCHJgijq3v0BCmW5mt4ptwwMZDhjzj4YZ7RyKv4rdxBfxsjQ6NFFqDQd1ZFFJdEnuBpPDZjMwKCuDQtEQM6EnRe99BrFGGz8QJkbcJc29Z_am7mr-jlPpcEfpblO0W2Q"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@400;600;700;800&family=Material+Symbols+Outlined:wght,FILL,GRAD,opsz@300,0,0,24&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/tailwind.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body class="bg-navy-950 min-h-screen">

    <nav class="glass-nav sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-6">
                <a href="/dashboard" class="flex items-center gap-3">
                    <img src="https://lh3.googleusercontent.com/aida/ADBb0uja4Pi6GeJT_mp_CqXVXb_-sYCGSBshAeYzAVqZ2X7Fb6s1GVoTslzmP0TCXhHeHT7QAgK8yTTVhxPQUkPvvLgk-Weuhk2NZo-kNLnMs5ct6hKOviBkRS_u_Y3jWRPh8YGCTQUAcVudlWXCHJgijq3v0BCmW5mt4ptwwMZDhjzj4YZ7RyKv4rdxBfxsjQ6NFFqDQd1ZFFJdEnuBpPDZjMwKCuDQtEQM6EnRe99BrFGGz8QJkbcJc29Z_am7mr-jlPpcEfpblO0W2Q"
                         alt="M&O Logo" width="32" height="32" class="h-8 w-8 object-contain"/>
                    <span class="font-display font-bold text-white text-sm">M&amp;O Admin</span>
                </a>
                <span class="text-white/20">/</span>
                <a href="<?= site_url('admin/publications') ?>" class="text-navy-400 hover:text-white text-sm transition-colors">Publications</a>
                <span class="text-white/20">/</span>
                <span class="text-white/60 text-sm"><?= $publication ? 'Edit' : 'Upload' ?></span>
            </div>
            <a href="<?= site_url('logout') ?>" class="flex items-center gap-1.5 text-navy-400 hover:text-white text-sm transition-colors">
                <span class="material-symbols-outlined text-[16px]">logout</span> Logout
            </a>
        </div>
    </nav>

    <main class="max-w-3xl mx-auto px-6 py-10">

        <div class="flex items-center gap-3 mb-8">
            <a href="<?= site_url('admin/publications') ?>"
               class="flex items-center gap-1.5 text-navy-400 hover:text-white text-sm transition-colors">
                <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                Back to Publications
            </a>
        </div>

        <div class="flex items-start gap-4 mb-8">
            <div class="w-12 h-12 bg-maritime-500/15 rounded-xl flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-maritime-500 text-[24px]">picture_as_pdf</span>
            </div>
            <div>
                <h1 class="font-display text-2xl font-bold text-white">
                    <?= $publication ? 'Edit Publication' : 'Upload New Publication' ?>
                </h1>
                <p class="text-navy-400 text-sm mt-1">
                    <?= $publication ? 'Update details or replace the PDF file.' : 'Add a new PDF publication to the website.' ?>
                </p>
            </div>
        </div>

        <?php if (! empty($error)): ?>
        <div class="flex items-center gap-3 bg-red-500/10 border border-red-500/30 rounded-xl px-4 py-3.5 mb-6">
            <span class="material-symbols-outlined text-red-400 text-[20px] flex-shrink-0">error</span>
            <p class="text-red-300 text-sm"><?= esc($error) ?></p>
        </div>
        <?php endif; ?>

        <form method="POST"
              action="<?= $publication ? site_url("admin/publications/{$publication['id']}") : site_url('admin/publications') ?>"
              enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="space-y-6">

                <!-- Title & Subtitle -->
                <div class="bg-navy-900 rounded-2xl border border-white/10 p-6 space-y-5">
                    <h2 class="text-white font-semibold text-sm uppercase tracking-wider flex items-center gap-2">
                        <span class="material-symbols-outlined text-maritime-500 text-[18px]">title</span>
                        Publication Details
                    </h2>

                    <div>
                        <label for="title" class="block text-sm font-medium text-navy-200 mb-2">
                            Title <span class="text-red-400">*</span>
                        </label>
                        <input type="text" id="title" name="title" required
                               value="<?= esc($publication['title'] ?? old('title')) ?>"
                               placeholder="e.g. Monthly Publications Checklist"
                               class="w-full bg-navy-800 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-navy-500 text-sm focus:outline-none focus:ring-2 focus:ring-maritime-500/60 focus:border-maritime-500/40 transition-all"/>
                    </div>

                    <div>
                        <label for="subtitle" class="block text-sm font-medium text-navy-200 mb-2">
                            Subtitle
                            <span class="text-navy-500 font-normal ml-1">— shown below the title in the dropdown</span>
                        </label>
                        <input type="subtitle" id="subtitle" name="subtitle"
                               value="<?= esc($publication['subtitle'] ?? old('subtitle')) ?>"
                               placeholder="e.g. Med, Black & Red Sea"
                               class="w-full bg-navy-800 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-navy-500 text-sm focus:outline-none focus:ring-2 focus:ring-maritime-500/60 focus:border-maritime-500/40 transition-all"/>
                    </div>
                </div>

                <!-- File Upload -->
                <div class="bg-navy-900 rounded-2xl border border-white/10 p-6 space-y-4">
                    <h2 class="text-white font-semibold text-sm uppercase tracking-wider flex items-center gap-2">
                        <span class="material-symbols-outlined text-maritime-500 text-[18px]">upload_file</span>
                        PDF File
                        <?php if ($publication): ?>
                        <span class="text-navy-500 font-normal normal-case tracking-normal ml-1 text-xs">— leave blank to keep current</span>
                        <?php else: ?>
                        <span class="text-red-400 ml-1">*</span>
                        <?php endif; ?>
                    </h2>

                    <?php if ($publication): ?>
                    <div class="flex items-center gap-3 bg-navy-800/60 border border-white/5 rounded-xl px-4 py-3.5">
                        <div class="w-9 h-9 bg-red-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-red-400 text-[18px]">picture_as_pdf</span>
                        </div>
                        <div class="min-w-0 flex-1">
                            <a href="<?= base_url($publication['file_path']) ?>" target="_blank"
                               class="text-white text-sm font-medium hover:text-maritime-400 transition-colors truncate block">
                                <?= esc($publication['file_name']) ?>
                            </a>
                            <p class="text-navy-500 text-xs mt-0.5"><?= number_format($publication['file_size'] / 1024, 0) ?> KB · Current file</p>
                        </div>
                        <a href="<?= base_url($publication['file_path']) ?>" target="_blank"
                           class="flex-shrink-0 flex items-center gap-1 text-navy-400 hover:text-white text-xs px-3 py-1.5 rounded-lg bg-white/5 hover:bg-white/10 transition-all">
                            <span class="material-symbols-outlined text-[14px]">open_in_new</span> Preview
                        </a>
                    </div>
                    <?php endif; ?>

                    <div id="drop-zone"
                         class="relative border-2 border-dashed border-white/10 rounded-xl p-10 text-center hover:border-maritime-500/50 hover:bg-maritime-500/3 transition-all duration-200 cursor-pointer group"
                         onclick="document.getElementById('pdf_file').click()">
                        <div id="drop-idle" class="pointer-events-none">
                            <div class="w-16 h-16 bg-navy-800 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-maritime-500/10 transition-colors">
                                <span class="material-symbols-outlined text-navy-500 group-hover:text-maritime-500 text-[32px] transition-colors">cloud_upload</span>
                            </div>
                            <p class="text-navy-200 text-sm font-medium">Click to browse or drag & drop</p>
                            <p class="text-navy-500 text-xs mt-1">PDF files only · Max 20 MB</p>
                        </div>
                        <div id="drop-selected" class="hidden pointer-events-none">
                            <div class="w-16 h-16 bg-maritime-500/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <span class="material-symbols-outlined text-maritime-500 text-[32px]">check_circle</span>
                            </div>
                            <p id="selected-name" class="text-white text-sm font-medium truncate max-w-xs mx-auto"></p>
                            <p id="selected-size" class="text-navy-400 text-xs mt-1"></p>
                            <button type="button" onclick="clearFile(event)"
                                    class="mt-3 pointer-events-auto text-xs text-navy-400 hover:text-white transition-colors underline underline-offset-2">
                                Remove
                            </button>
                        </div>
                        <input type="file" id="pdf_file" name="pdf_file" accept=".pdf,application/pdf" class="hidden"/>
                    </div>
                </div>

                <!-- Settings -->
                <div class="bg-navy-900 rounded-2xl border border-white/10 p-6">
                    <h2 class="text-white font-semibold text-sm uppercase tracking-wider flex items-center gap-2 mb-5">
                        <span class="material-symbols-outlined text-maritime-500 text-[18px]">tune</span>
                        Settings
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="sort_order" class="block text-sm font-medium text-navy-200 mb-2">Sort Order</label>
                            <input type="number" id="sort_order" name="sort_order" min="0"
                                   value="<?= esc($publication['sort_order'] ?? old('sort_order', '0')) ?>"
                                   class="w-full bg-navy-800 border border-white/10 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:ring-2 focus:ring-maritime-500/60 focus:border-maritime-500/40 transition-all"/>
                            <p class="text-navy-500 text-xs mt-2 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px]">info</span>
                                Lower number appears first
                            </p>
                        </div>
                        <div>
                            <label for="is_active" class="block text-sm font-medium text-navy-200 mb-2">Visibility</label>
                            <select id="is_active" name="is_active"
                                    class="w-full bg-navy-800 border border-white/10 rounded-xl px-4 py-3 text-white text-sm focus:outline-none focus:ring-2 focus:ring-maritime-500/60 focus:border-maritime-500/40 transition-all appearance-none cursor-pointer">
                                <option value="1" <?= (($publication['is_active'] ?? 1) == 1) ? 'selected' : '' ?>>
                                    ✓ Active — visible on website
                                </option>
                                <option value="0" <?= (($publication['is_active'] ?? 1) == 0) ? 'selected' : '' ?>>
                                    ✗ Hidden — not shown publicly
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex items-center gap-3">
                    <button type="submit"
                            class="flex items-center gap-2 bg-maritime-500 hover:bg-maritime-600 active:bg-maritime-700 text-white font-semibold px-6 py-3 rounded-xl transition-all shadow-lg shadow-maritime-500/20 text-sm">
                        <span class="material-symbols-outlined text-[18px]"><?= $publication ? 'save' : 'upload_file' ?></span>
                        <?= $publication ? 'Save Changes' : 'Upload Publication' ?>
                    </button>
                    <a href="<?= site_url('admin/publications') ?>"
                       class="flex items-center gap-2 px-6 py-3 bg-white/5 hover:bg-white/10 text-navy-300 hover:text-white rounded-xl text-sm font-medium transition-all">
                        <span class="material-symbols-outlined text-[18px]">close</span>
                        Cancel
                    </a>
                </div>

            </div>
        </form>
    </main>

    <script>
    const dropZone   = document.getElementById('drop-zone');
    const fileInput  = document.getElementById('pdf_file');
    const dropIdle   = document.getElementById('drop-idle');
    const dropSel    = document.getElementById('drop-selected');
    const selName    = document.getElementById('selected-name');
    const selSize    = document.getElementById('selected-size');

    function showFile(file) {
        selName.textContent = file.name;
        selSize.textContent = (file.size / 1024).toFixed(0) + ' KB';
        dropIdle.classList.add('hidden');
        dropSel.classList.remove('hidden');
        dropZone.classList.add('border-maritime-500/50', 'bg-maritime-500/5');
    }

    function clearFile(e) {
        e.stopPropagation();
        fileInput.value = '';
        dropIdle.classList.remove('hidden');
        dropSel.classList.add('hidden');
        dropZone.classList.remove('border-maritime-500/50', 'bg-maritime-500/5');
    }

    fileInput.addEventListener('change', () => {
        if (fileInput.files.length) showFile(fileInput.files[0]);
    });

    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('border-maritime-500/50', 'bg-maritime-500/5');
    });
    dropZone.addEventListener('dragleave', (e) => {
        if (!dropZone.contains(e.relatedTarget)) {
            if (!fileInput.files.length) dropZone.classList.remove('border-maritime-500/50', 'bg-maritime-500/5');
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
</body>
</html>
