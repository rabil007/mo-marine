<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="flex items-center justify-between mb-7">
    <div>
        <h1 class="font-display text-2xl font-bold text-white">FAQs</h1>
        <p class="text-white/35 text-sm mt-1"><?= $total ?> question<?= $total !== 1 ? 's' : '' ?> across <?= count($grouped) ?> categor<?= count($grouped) !== 1 ? 'ies' : 'y' ?></p>
    </div>
    <a href="<?= site_url('admin/faqs/new') ?>"
       class="btn-primary flex items-center gap-2 text-white px-4 py-2.5 rounded-xl text-sm font-semibold">
        <span class="material-symbols-outlined text-[18px]">add</span>
        Add Question
    </a>
</div>

<?php if (empty($grouped)): ?>
<div class="section-card text-center py-20">
    <div class="w-20 h-20 rounded-2xl mx-auto mb-5 flex items-center justify-center"
         style="background:linear-gradient(135deg,rgba(14,165,233,0.15),rgba(14,165,233,0.05))">
        <span class="material-symbols-outlined text-sky-400/50 text-[36px]">help</span>
    </div>
    <p class="text-white/70 font-semibold">No FAQs yet</p>
    <p class="text-white/30 text-sm mt-1.5">Add your first question to get started</p>
    <a href="<?= site_url('admin/faqs/new') ?>"
       class="btn-primary inline-flex items-center gap-2 mt-6 text-white text-sm font-semibold px-5 py-2.5 rounded-xl">
        <span class="material-symbols-outlined text-[18px]">add</span> Add Question
    </a>
</div>
<?php else: ?>

<div class="space-y-6">
    <?php foreach ($grouped as $category => $faqs): ?>
    <div class="section-card overflow-hidden">
        <div class="flex items-center justify-between px-6 py-4 border-b border-white/6">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0 bg-sky-500/15">
                    <span class="material-symbols-outlined text-sky-400 text-[16px]">folder</span>
                </div>
                <h2 class="text-white font-bold text-sm"><?= esc($category) ?></h2>
                <span class="text-[10px] font-bold text-white/25 bg-white/6 rounded-full px-2 py-0.5"><?= count($faqs) ?></span>
            </div>
        </div>
        <table class="w-full">
            <tbody class="divide-y divide-white/4">
                <?php foreach ($faqs as $faq): ?>
                <tr class="hover:bg-white/[0.025] transition-colors group">
                    <td class="px-6 py-4 w-6">
                        <span class="inline-flex items-center justify-center w-6 h-6 rounded-md bg-white/4 text-white/25 text-[10px] font-bold"><?= (int) $faq['sort_order'] ?></span>
                    </td>
                    <td class="px-4 py-4">
                        <p class="text-white/80 font-medium text-sm leading-snug"><?= esc($faq['question']) ?></p>
                        <p class="text-white/30 text-xs mt-1.5 line-clamp-1 max-w-xl"><?= esc($faq['answer']) ?></p>
                    </td>
                    <td class="px-4 py-4 text-center w-24">
                        <?php if ($faq['is_active']): ?>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold badge-green">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>Active
                        </span>
                        <?php else: ?>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold bg-white/6 text-white/30 border border-white/8">
                            <span class="w-1.5 h-1.5 rounded-full bg-white/20"></span>Hidden
                        </span>
                        <?php endif; ?>
                    </td>
                    <td class="px-6 py-4 text-right w-32">
                        <div class="flex items-center gap-2 justify-end">
                            <a href="<?= site_url("admin/faqs/{$faq['id']}/edit") ?>"
                               class="flex items-center gap-1.5 text-white/40 hover:text-white text-xs px-3 py-1.5 rounded-lg bg-white/4 hover:bg-white/8 border border-white/6 hover:border-white/14 transition-all">
                                <span class="material-symbols-outlined text-[14px]">edit</span>
                                <span class="hidden sm:inline">Edit</span>
                            </a>
                            <form method="POST" action="<?= site_url("admin/faqs/{$faq['id']}/delete") ?>"
                                  onsubmit="return confirm('Delete this FAQ?')">
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
    <?php endforeach; ?>
</div>

<?php endif; ?>

<?= $this->endSection() ?>
