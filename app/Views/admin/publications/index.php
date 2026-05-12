<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="flex items-center justify-between mb-7">
    <div>
        <h1 class="font-display text-2xl font-bold text-white">Publications</h1>
        <p class="text-white/35 text-sm mt-1">Upload and manage downloadable PDF publications</p>
    </div>
    <a href="<?= site_url('admin/publications/new') ?>"
       class="btn-primary flex items-center gap-2 text-white px-4 py-2.5 rounded-xl text-sm font-semibold">
        <span class="material-symbols-outlined text-[18px]">upload_file</span>
        Upload PDF
    </a>
</div>

<div class="section-card overflow-hidden">
    <?php if (empty($publications)): ?>
    <div class="text-center py-20 px-6">
        <div class="w-20 h-20 rounded-2xl mx-auto mb-5 flex items-center justify-center"
             style="background:linear-gradient(135deg,rgba(239,68,68,0.15),rgba(239,68,68,0.05))">
            <span class="material-symbols-outlined text-red-400/60 text-[36px]">picture_as_pdf</span>
        </div>
        <p class="text-white/70 font-semibold text-base">No publications yet</p>
        <p class="text-white/30 text-sm mt-1.5">Upload your first PDF to get started</p>
        <a href="<?= site_url('admin/publications/new') ?>"
           class="btn-primary inline-flex items-center gap-2 mt-6 text-white text-sm font-semibold px-5 py-2.5 rounded-xl">
            <span class="material-symbols-outlined text-[18px]">upload_file</span>
            Upload Publication
        </a>
    </div>
    <?php else: ?>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-white/6">
                    <th class="px-6 py-4 text-left text-[10px] font-bold text-white/30 uppercase tracking-[0.12em]">Publication</th>
                    <th class="px-6 py-4 text-left text-[10px] font-bold text-white/30 uppercase tracking-[0.12em] hidden md:table-cell">File</th>
                    <th class="px-6 py-4 text-center text-[10px] font-bold text-white/30 uppercase tracking-[0.12em]">Order</th>
                    <th class="px-6 py-4 text-center text-[10px] font-bold text-white/30 uppercase tracking-[0.12em]">Status</th>
                    <th class="px-6 py-4 text-left text-[10px] font-bold text-white/30 uppercase tracking-[0.12em] hidden lg:table-cell">Added</th>
                    <th class="px-6 py-4 text-right text-[10px] font-bold text-white/30 uppercase tracking-[0.12em]">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/4">
                <?php foreach ($publications as $pub): ?>
                <tr class="group hover:bg-white/[0.025] transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3.5">
                            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                                 style="background:linear-gradient(135deg,rgba(239,68,68,0.2),rgba(239,68,68,0.06))">
                                <span class="material-symbols-outlined text-red-400 text-[18px]">picture_as_pdf</span>
                            </div>
                            <div>
                                <p class="text-white font-semibold text-sm leading-snug"><?= esc($pub['title']) ?></p>
                                <?php if ($pub['subtitle']): ?>
                                <p class="text-white/35 text-xs mt-0.5"><?= esc($pub['subtitle']) ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 hidden md:table-cell">
                        <a href="<?= base_url($pub['file_path']) ?>" target="_blank"
                           class="flex items-center gap-1.5 text-sky-400/70 hover:text-sky-400 text-xs transition-colors max-w-[200px] group/link">
                            <span class="material-symbols-outlined text-[13px] flex-shrink-0 group-hover/link:translate-y-px transition-transform">download</span>
                            <span class="truncate"><?= esc($pub['file_name']) ?></span>
                        </a>
                        <p class="text-white/20 text-[11px] mt-0.5"><?= number_format($pub['file_size'] / 1024, 0) ?> KB</p>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-white/5 text-white/50 text-xs font-bold">
                            <?= (int) $pub['sort_order'] ?>
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <?php if ($pub['is_active']): ?>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold badge-green">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>Active
                        </span>
                        <?php else: ?>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold bg-white/6 text-white/30 border border-white/8">
                            <span class="w-1.5 h-1.5 rounded-full bg-white/20"></span>Hidden
                        </span>
                        <?php endif; ?>
                    </td>
                    <td class="px-6 py-4 text-white/25 text-xs hidden lg:table-cell">
                        <?= date('d M Y', strtotime($pub['created_at'])) ?>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2 justify-end">
                            <a href="<?= site_url("admin/publications/{$pub['id']}/edit") ?>"
                               class="flex items-center gap-1.5 text-white/40 hover:text-white text-xs px-3 py-1.5 rounded-lg bg-white/4 hover:bg-white/8 border border-white/6 hover:border-white/14 transition-all">
                                <span class="material-symbols-outlined text-[14px]">edit</span>
                                <span class="hidden sm:inline">Edit</span>
                            </a>
                            <form method="POST" action="<?= site_url("admin/publications/{$pub['id']}/delete") ?>"
                                  onsubmit="return confirm('Delete this publication and its file permanently?')">
                                <?= csrf_field() ?>
                                <button type="submit"
                                        class="flex items-center gap-1.5 text-red-400/60 hover:text-red-400 text-xs px-3 py-1.5 rounded-lg bg-red-500/4 hover:bg-red-500/12 border border-red-500/10 hover:border-red-500/25 transition-all">
                                    <span class="material-symbols-outlined text-[14px]">delete</span>
                                    <span class="hidden sm:inline">Delete</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
