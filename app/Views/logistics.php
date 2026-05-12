<?= $this->extend('layouts/main') ?>

<?= $this->section('head_scripts') ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://mo-marine.com/"},{"@type":"ListItem","position":2,"name":"Services","item":"<?= site_url('services') ?>"},{"@type":"ListItem","position":3,"name":"Logistics & Port Operations","item":"<?= site_url('logistics') ?>"}]}</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Header Section -->
    <section class="relative pt-40 pb-32 overflow-hidden">
        <div class="absolute inset-0 bg-navy-950/80 z-10"></div>
        <img src="assets/images/logistics_hero.png" class="absolute inset-0 w-full h-full object-cover z-0" alt="" aria-hidden="true" fetchpriority="high"/>
        <div class="relative z-20 max-w-7xl mx-auto px-6 text-center">
            <h1 class="font-display text-3xl md:text-6xl font-bold text-white mb-6 opacity-0 animate-fade-in-up drop-shadow-lg px-4">Maritime Logistics &amp; Port Operations</h1>
            <p class="text-white/90 text-xl max-w-2xl mx-auto leading-relaxed opacity-0 animate-fade-in-up stagger-1 drop-shadow-md">
                Operational coordination connecting warehouse supply, customs clearance, airport cargo, and vessel delivery across Syrian ports.
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-24 bg-surface">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-navy-900 mb-4">Integrated Logistics for Vessel Turnarounds</h2>
                <p class="text-navy-600 leading-relaxed">From airport cargo and customs formalities to warehouse storage and final delivery, our logistics teams keep marine operations moving without delays at Syrian ports.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-24 opacity-0 animate-fade-in-up stagger-2">
                
                <div class="bg-white p-8 rounded-xl shadow-sm border border-navy-100">
                    <div class="h-12 w-12 bg-navy-50 rounded-lg flex items-center justify-center text-maritime-500 mb-6">
                        <span class="material-symbols-outlined text-[24px]">local_shipping</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-navy-900 mb-4">Port Logistics</h3>
                    <p class="text-navy-600 leading-relaxed text-sm">Operating from our central warehouses in Lattakia and Tartous, we provide seamless coordination between airport cargo, customs clearance, and vessel delivery.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm border border-navy-100">
                    <div class="h-12 w-12 bg-navy-50 rounded-lg flex items-center justify-center text-maritime-500 mb-6">
                        <span class="material-symbols-outlined text-[24px]">map</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-navy-900 mb-4">Nautical Intelligence</h3>
                    <p class="text-navy-600 leading-relaxed text-sm">Our specialized divisions manage digital charts, regulatory publications, and advanced marine software to ensure your bridge operates flawlessly.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm border border-navy-100">
                    <div class="h-12 w-12 bg-navy-50 rounded-lg flex items-center justify-center text-maritime-500 mb-6">
                        <span class="material-symbols-outlined text-[24px]">warehouse</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-navy-900 mb-4">Warehousing</h3>
                    <p class="text-navy-600 leading-relaxed text-sm">Extensive storage facilities for provisions, technical spares, and bonded goods. Fully monitored and climate controlled for maximum preservation.</p>
                </div>

            </div>
            
            <div class="text-center">
                <a href="contact" class="inline-flex items-center justify-center gap-2 bg-navy-900 text-white px-8 py-4 rounded-sm font-semibold tracking-wide hover:bg-navy-800 transition-all">
                    Connect with Logistics
                </a>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
