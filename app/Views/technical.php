<?= $this->extend('layouts/main') ?>

<?= $this->section('head_scripts') ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://mo-marine.com/"},{"@type":"ListItem","position":2,"name":"Services","item":"<?= site_url('services') ?>"},{"@type":"ListItem","position":3,"name":"Technical & Safety Services","item":"<?= site_url('technical') ?>"}]}</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Header Section -->
    <section class="relative pt-40 pb-32 overflow-hidden">
        <div class="absolute inset-0 bg-navy-950/80 z-10"></div>
        <img src="assets/images/technical_safety_hero.png" class="absolute inset-0 w-full h-full object-cover z-0" alt="" aria-hidden="true" fetchpriority="high"/>
        <div class="relative z-20 max-w-7xl mx-auto px-6 text-center">
            <h1 class="font-display text-3xl md:text-6xl font-bold text-white mb-6 opacity-0 animate-fade-in-up drop-shadow-lg px-4">Marine Technical &amp; Safety Services</h1>
            <p class="text-white/90 text-xl max-w-2xl mx-auto leading-relaxed opacity-0 animate-fade-in-up stagger-1 drop-shadow-md">
                Rigorous engineering coordination, underwater support, and SOLAS-focused safety servicing for commercial vessels.
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-24 bg-surface">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-navy-900 mb-4">Marine Engineering, Repairs, and Safety Compliance</h2>
                <p class="text-navy-600 leading-relaxed">Our technical division supports vessel safety, statutory readiness, and urgent engineering requirements with coordinated service teams, certified partners, and port-side execution.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-24 opacity-0 animate-fade-in-up stagger-2">
                <div class="bg-white p-10 rounded-xl shadow-sm border border-navy-100">
                    <div class="h-12 w-12 bg-maritime-500/10 rounded-lg flex items-center justify-center text-maritime-500 mb-6">
                        <span class="material-symbols-outlined text-[24px]">construction</span>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-navy-900 mb-4">Engineering & Repair</h3>
                    <p class="text-navy-600 mb-6 leading-relaxed">We coordinate specialized marine engineering, underwater hull cleaning, and technical repairs utilizing certified personnel equipped for rigorous maritime challenges.</p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3"><span class="material-symbols-outlined text-maritime-500">done</span> Underwater Inspections</li>
                        <li class="flex items-center gap-3"><span class="material-symbols-outlined text-maritime-500">done</span> Structural Repairs</li>
                        <li class="flex items-center gap-3"><span class="material-symbols-outlined text-maritime-500">done</span> Mechanical Overhauls</li>
                    </ul>
                </div>

                <div class="bg-white p-10 rounded-xl shadow-sm border border-red-500/20 border-l-4 border-l-red-500">
                    <div class="flex items-center justify-between mb-6">
                        <div class="h-12 w-12 bg-red-500/10 rounded-lg flex items-center justify-center text-red-500">
                            <span class="material-symbols-outlined text-[24px]">verified_user</span>
                        </div>
                        <span class="bg-red-50 text-red-600 text-xs font-bold px-3 py-1 rounded uppercase">SOLAS Compliant</span>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-navy-900 mb-4">Safety & Rescue (FFA/LSA)</h3>
                    <p class="text-navy-600 mb-6 leading-relaxed">Critical fire fighting appliances and life-saving apparatus. We provide supply, servicing, and mandatory inspection services for international compliance.</p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3"><span class="material-symbols-outlined text-red-500">done</span> Life Raft Servicing</li>
                        <li class="flex items-center gap-3"><span class="material-symbols-outlined text-red-500">done</span> Fire Extinguisher Inspection</li>
                        <li class="flex items-center gap-3"><span class="material-symbols-outlined text-red-500">done</span> Breathing Apparatus Certification</li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center">
                <a href="contact" class="inline-flex items-center justify-center gap-2 bg-navy-900 text-white px-8 py-4 rounded-sm font-semibold tracking-wide hover:bg-navy-800 transition-all">
                    Schedule an Inspection
                </a>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
