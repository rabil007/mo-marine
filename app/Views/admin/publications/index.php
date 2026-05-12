<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Publications | M&amp;O Admin</title>
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
                <span class="text-navy-300 text-sm">Publications</span>
            </div>
            <a href="<?= site_url('logout') ?>" class="flex items-center gap-1.5 text-navy-400 hover:text-white text-sm transition-colors">
                <span class="material-symbols-outlined text-[16px]">logout</span> Logout
            </a>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-10">

        <div class="flex items-center gap-3 mb-6">
            <a href="<?= site_url('dashboard') ?>"
               class="flex items-center gap-1.5 text-navy-400 hover:text-white text-sm transition-colors">
                <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                Dashboard
            </a>
        </div>

        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="font-display text-2xl font-bold text-white">Publications</h1>
                <p class="text-navy-400 text-sm mt-1">Upload and manage downloadable PDF publications</p>
            </div>
            <a href="<?= site_url('admin/publications/new') ?>"
               class="flex items-center gap-2 bg-maritime-500 hover:bg-maritime-600 text-white px-4 py-2.5 rounded-lg text-sm font-semibold transition-all shadow-lg shadow-maritime-500/20">
                <span class="material-symbols-outlined text-[18px]">upload_file</span>
                Upload Publication
            </a>
        </div>

        <?php if (! empty($success)): ?>
        <div class="flex items-center gap-3 bg-green-500/10 border border-green-500/30 rounded-lg px-4 py-3 mb-6">
            <span class="material-symbols-outlined text-green-400 text-[20px]">check_circle</span>
            <p class="text-green-300 text-sm"><?= esc($success) ?></p>
        </div>
        <?php endif; ?>

        <?php if (! empty($error)): ?>
        <div class="flex items-center gap-3 bg-red-500/10 border border-red-500/30 rounded-lg px-4 py-3 mb-6">
            <span class="material-symbols-outlined text-red-400 text-[20px]">error</span>
            <p class="text-red-300 text-sm"><?= esc($error) ?></p>
        </div>
        <?php endif; ?>

        <div class="bg-navy-900 rounded-xl border border-white/10 overflow-hidden">
            <?php if (empty($publications)): ?>
            <div class="text-center py-20">
                <span class="material-symbols-outlined text-navy-600 text-[64px]">picture_as_pdf</span>
                <p class="text-navy-400 mt-4">No publications yet.</p>
                <a href="<?= site_url('admin/publications/new') ?>" class="inline-flex items-center gap-2 mt-4 text-maritime-500 hover:text-white text-sm font-medium transition-colors">
                    <span class="material-symbols-outlined text-[16px]">add</span> Upload your first publication
                </a>
            </div>
            <?php else: ?>
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-white/10 text-left">
                        <th class="px-6 py-4 text-navy-400 font-semibold text-xs uppercase tracking-wider">Title</th>
                        <th class="px-6 py-4 text-navy-400 font-semibold text-xs uppercase tracking-wider">File</th>
                        <th class="px-6 py-4 text-navy-400 font-semibold text-xs uppercase tracking-wider text-center">Order</th>
                        <th class="px-6 py-4 text-navy-400 font-semibold text-xs uppercase tracking-wider text-center">Status</th>
                        <th class="px-6 py-4 text-navy-400 font-semibold text-xs uppercase tracking-wider">Added</th>
                        <th class="px-6 py-4 text-navy-400 font-semibold text-xs uppercase tracking-wider text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    <?php foreach ($publications as $pub): ?>
                    <tr class="hover:bg-white/5 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-maritime-500 text-[20px]">picture_as_pdf</span>
                                <div>
                                    <p class="text-white font-medium"><?= esc($pub['title']) ?></p>
                                    <?php if ($pub['subtitle']): ?>
                                    <p class="text-navy-400 text-xs mt-0.5"><?= esc($pub['subtitle']) ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <a href="<?= base_url($pub['file_path']) ?>" target="_blank"
                               class="text-blue-400 hover:text-white text-xs transition-colors flex items-center gap-1 max-w-[180px] truncate">
                                <span class="material-symbols-outlined text-[14px]">download</span>
                                <?= esc($pub['file_name']) ?>
                            </a>
                            <p class="text-navy-500 text-xs mt-0.5"><?= number_format($pub['file_size'] / 1024, 0) ?> KB</p>
                        </td>
                        <td class="px-6 py-4 text-center text-navy-300"><?= (int) $pub['sort_order'] ?></td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-bold <?= $pub['is_active'] ? 'bg-green-500/15 text-green-400' : 'bg-navy-700 text-navy-400' ?>">
                                <span class="w-1.5 h-1.5 rounded-full <?= $pub['is_active'] ? 'bg-green-400' : 'bg-navy-500' ?>"></span>
                                <?= $pub['is_active'] ? 'Active' : 'Hidden' ?>
                            </span>
                        </td>
                        <td class="px-6 py-4 text-navy-400 text-xs"><?= date('d M Y', strtotime($pub['created_at'])) ?></td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center gap-2 justify-end">
                                <a href="<?= site_url("admin/publications/{$pub['id']}/edit") ?>"
                                   class="flex items-center gap-1 text-navy-400 hover:text-white text-xs px-2.5 py-1.5 rounded-md bg-white/5 hover:bg-white/10 transition-all">
                                    <span class="material-symbols-outlined text-[14px]">edit</span> Edit
                                </a>
                                <form method="POST" action="<?= site_url("admin/publications/{$pub['id']}/delete") ?>"
                                      onsubmit="return confirm('Delete this publication and its file?')">
                                    <?= csrf_field() ?>
                                    <button type="submit"
                                            class="flex items-center gap-1 text-red-400 hover:text-white text-xs px-2.5 py-1.5 rounded-md bg-red-500/10 hover:bg-red-500/20 transition-all">
                                        <span class="material-symbols-outlined text-[14px]">delete</span> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php endif; ?>
        </div>

    </main>
</body>
</html>
