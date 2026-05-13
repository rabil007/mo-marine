<?= $this->extend('layouts/main') ?>

<?= $this->section('head_scripts') ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://mo-marine.com/"},{"@type":"ListItem","position":2,"name":"About", "item":<?= json_encode(site_url('about')) ?>}]}</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Header Section -->
    <section class="relative min-h-[70vh] flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-navy-950/85 via-navy-900/70 to-navy-950 z-10"></div>
        <img src="assets/images/about_us_hero.png" class="absolute inset-0 w-full h-full object-cover z-0" alt="" aria-hidden="true" fetchpriority="high"/>
        <div class="relative z-20 max-w-7xl mx-auto px-6 text-center w-full pt-32 pb-20">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white/90 text-xs font-semibold tracking-widest uppercase mb-8 opacity-0 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                Est. 2002 &mdash; Lattakia, Syria
            </div>
            <h1 class="font-display text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 opacity-0 animate-fade-in-up stagger-1 drop-shadow-lg leading-tight">
                About M&amp;O
            </h1>
            <p class="text-white/80 text-xl max-w-2xl mx-auto leading-relaxed opacity-0 animate-fade-in-up stagger-2">
                Since 2002, M&amp;O has supported Syrian port calls with certified ship supply, technical response, and nautical expertise.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center opacity-0 animate-fade-in-up stagger-3">
                <a href="services" class="inline-flex items-center justify-center gap-2 bg-white text-navy-900 px-7 py-3.5 rounded-sm font-bold tracking-wide hover:bg-gray-100 transition-all">Our Services <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
                <a href="contact" class="inline-flex items-center justify-center gap-2 bg-white/10 text-white border border-white/20 px-7 py-3.5 rounded-sm font-semibold hover:bg-white/20 transition-all backdrop-blur-sm">Contact Us</a>
            </div>
        </div>
        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2 text-white/40 animate-bounce">
            <span class="text-xs tracking-widest uppercase">Scroll</span>
            <span class="material-symbols-outlined text-[20px]">keyboard_arrow_down</span>
        </div>
    </section>

    <!-- Stats Strip -->
    <section class="bg-navy-950 py-0">
        <div class="max-w-7xl mx-auto px-6">
            <?php $displayStats = array_slice($stats ?? [], 0, 4); ?>
            <div class="grid grid-cols-2 md:grid-cols-<?= count($displayStats) ?: 4 ?> divide-x divide-white/10">
                <?php foreach ($displayStats as $st): ?>
                <div class="px-4 md:px-8 py-8 md:py-10 text-center border-b border-white/10 md:border-b-0">
                    <div class="font-display text-3xl md:text-4xl font-bold text-white mb-1"><?= esc($st['value']) ?></div>
                    <div class="text-navy-400 text-[10px] md:text-xs font-bold uppercase tracking-widest mt-1"><?= esc($st['label']) ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Legacy & History -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="opacity-0 animate-fade-in-up stagger-2">
                    <p class="text-sm font-bold tracking-widest text-maritime-500 uppercase mb-3">Our Legacy & Profile</p>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-navy-900 mb-6">M&O</h2>
                    <div class="text-navy-600 text-base leading-relaxed mb-8 space-y-4">
                        <p>M&O was founded in 2002 and was the first Syrian company to join the International Ship Suppliers Association (ISSA). In 2006 M&O successfully achieved the ISSA Quality Standard. In 2009 joined the International Marine Purchasing Association (IMPA).</p>
                        <p>The company is managed by a staff of maritime professionals (Captains and Engineers) and due to the high quality of service offered over the years, M&O has developed into the premier ship supply company in Syria.</p>
                        <p>As the name implies, we provide a complete range of maintenance, repairs, operations, chandlery and provisions, covering all aspects of ship operations: deck, engine, electric, electronics, cabin, medical, stationery, Fire Fighting Apparatus (FFA), Life Saving Apparatus (LSA) and pyrotechnics, etc.</p>
                        <div class="bg-navy-50 p-6 rounded-lg border border-navy-100 mt-6">
                            <h4 class="font-display font-bold text-navy-900 mb-4">Nautical Charts & Publications Division</h4>
                            <p class="mb-4 text-sm">In 2003, M&O created a new department and commenced the distribution of nautical charts, publications, IMO signs and posters. This department now offers the following items available for worldwide despatch:</p>
                            <ul class="grid grid-cols-1 gap-3 mt-4 text-sm">
                                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-maritime-500 text-[18px]">check_circle</span> <span>Admiralty Charts and publications.</span></li>
                                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-maritime-500 text-[18px]">check_circle</span> <span>Weekly Notices to Mariners and weekly tracings.</span></li>
                                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-maritime-500 text-[18px]">check_circle</span> <span>Chart correction service employing Admiralty methods.</span></li>
                                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-maritime-500 text-[18px]">check_circle</span> <span>Digital Charts including ARCS and ENC.</span></li>
                                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-maritime-500 text-[18px]">check_circle</span> <span>BA, IMO, OCIMF, ICS, TSO, NI publications.</span></li>
                                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-maritime-500 text-[18px]">check_circle</span> <span>Admiralty and IMO digital products.</span></li>
                                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-maritime-500 text-[18px]">check_circle</span> <span>Maritime safety training software.</span></li>
                                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-maritime-500 text-[18px]">check_circle</span> <span>Marine Software (cargo, stability, navigation).</span></li>
                                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-maritime-500 text-[18px]">check_circle</span> <span>Various logbooks.</span></li>
                                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-maritime-500 text-[18px]">check_circle</span> <span>IMO Signs and posters (standard & custom built to requirements).</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <a href="services" class="inline-flex items-center gap-2 bg-navy-900 text-white px-6 py-3 rounded-sm font-semibold hover:bg-navy-800 transition-all text-sm">
                            View All Services <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </a>
                        <a href="contact" class="inline-flex items-center gap-2 border border-navy-200 text-navy-700 px-6 py-3 rounded-sm font-semibold hover:bg-navy-50 transition-all text-sm">Get in Touch</a>
                    </div>
                </div>
                <div class="relative opacity-0 animate-fade-in-up stagger-3 mt-8 md:mt-0">
                    <div class="absolute inset-0 bg-maritime-500 rounded-xl transform translate-x-4 translate-y-4 -z-10"></div>
                    <img src="assets/images/about_us_legacy.png" alt="Close-up of vessel structure and deck details during marine operations" class="rounded-xl w-full h-[350px] md:h-[500px] object-cover shadow-2xl grayscale hover:grayscale-0 transition-all duration-700" loading="lazy" decoding="async"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Milestones Timeline -->
    <section class="py-24 bg-surface">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <p class="text-sm font-bold tracking-widest text-maritime-500 uppercase mb-3">Our Journey</p>
                <h2 class="font-display text-2xl md:text-4xl font-bold text-navy-900 px-4">Two Decades of Maritime Leadership</h2>
            </div>
            <div class="relative">
                <!-- vertical line -->
                <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-px bg-navy-100 -translate-x-1/2"></div>
                <div class="space-y-12">
                    <!-- 2002 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="md:text-right">
                            <div class="inline-block bg-maritime-500 text-white text-sm font-bold px-4 py-1 rounded-full mb-3">2002</div>
                            <h4 class="font-display text-xl font-bold text-navy-900 mb-2">Foundation & ISSA Membership</h4>
                            <p class="text-navy-600 text-sm leading-relaxed">M&amp;O was founded — becoming the first Syrian company to join the International Ship Suppliers Association (ISSA).</p>
                        </div>
                        <div class="hidden md:flex justify-start pl-8">
                            <div class="h-12 w-12 rounded-full bg-maritime-500 text-white flex items-center justify-center shadow-lg"><span class="material-symbols-outlined">anchor</span></div>
                        </div>
                    </div>
                    <!-- 2003 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="hidden md:flex justify-end pr-8">
                            <div class="h-12 w-12 rounded-full bg-navy-900 text-white flex items-center justify-center shadow-lg"><span class="material-symbols-outlined">map</span></div>
                        </div>
                        <div>
                            <div class="inline-block bg-navy-900 text-white text-sm font-bold px-4 py-1 rounded-full mb-3">2003</div>
                            <h4 class="font-display text-xl font-bold text-navy-900 mb-2">Charts & Publications Department</h4>
                            <p class="text-navy-600 text-sm leading-relaxed">Launched a dedicated department for Admiralty charts, publications, IMO signs, and digital navigation products.</p>
                        </div>
                    </div>
                    <!-- 2006 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="md:text-right">
                            <div class="inline-block bg-maritime-500 text-white text-sm font-bold px-4 py-1 rounded-full mb-3">2006</div>
                            <h4 class="font-display text-xl font-bold text-navy-900 mb-2">ISSA Quality Standard</h4>
                            <p class="text-navy-600 text-sm leading-relaxed">M&amp;O successfully achieved the ISSA Quality Standard, cementing its commitment to international excellence.</p>
                        </div>
                        <div class="hidden md:flex justify-start pl-8">
                            <div class="h-12 w-12 rounded-full bg-maritime-500 text-white flex items-center justify-center shadow-lg"><span class="material-symbols-outlined">verified</span></div>
                        </div>
                    </div>
                    <!-- 2009 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="hidden md:flex justify-end pr-8">
                            <div class="h-12 w-12 rounded-full bg-navy-900 text-white flex items-center justify-center shadow-lg"><span class="material-symbols-outlined">workspace_premium</span></div>
                        </div>
                        <div>
                            <div class="inline-block bg-navy-900 text-white text-sm font-bold px-4 py-1 rounded-full mb-3">2009</div>
                            <h4 class="font-display text-xl font-bold text-navy-900 mb-2">IMPA Membership</h4>
                            <p class="text-navy-600 text-sm leading-relaxed">Joined the International Marine Purchasing Association (IMPA), expanding global procurement networks.</p>
                        </div>
                    </div>
                    <!-- Today -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="md:text-right">
                            <div class="inline-block bg-blue-500 text-white text-sm font-bold px-4 py-1 rounded-full mb-3">Today</div>
                            <h4 class="font-display text-xl font-bold text-navy-900 mb-2">Premier Ship Supplier in Syria</h4>
                            <p class="text-navy-600 text-sm leading-relaxed">Serving 450+ vessels across 50+ shipping lines, with 24/7 operations and worldwide dispatch capabilities.</p>
                        </div>
                        <div class="hidden md:flex justify-start pl-8">
                            <div class="h-12 w-12 rounded-full bg-blue-500 text-white flex items-center justify-center shadow-lg"><span class="material-symbols-outlined">directions_boat</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-24 bg-navy-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="bg-navy-800 p-8 md:p-10 rounded-xl border border-white/10 relative overflow-hidden group hover:border-maritime-500/50 transition-colors">
                    <div class="absolute top-0 right-0 p-8 opacity-5 transform group-hover:scale-110 transition-transform duration-500">
                        <span class="material-symbols-outlined text-[80px] md:text-[120px] text-white">flag</span>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-white mb-4 md:mb-6">Our Mission</h3>
                    <p class="text-navy-200 leading-relaxed text-base md:text-lg">
                        To empower global maritime operations through precision supply chain management, uncompromising safety standards, and relentless 24/7 technical support. We aim to be the indispensable partner for every vessel docking in Lattakia and Tartous ports.
                    </p>
                </div>
                
                <!-- Vision -->
                <div class="bg-maritime-600 p-8 md:p-10 rounded-xl border border-white/10 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-8 opacity-10 transform group-hover:scale-110 transition-transform duration-500">
                        <span class="material-symbols-outlined text-[80px] md:text-[120px] text-white">visibility</span>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-white mb-4 md:mb-6">Strategic Vision</h3>
                    <p class="text-white/90 leading-relaxed text-base md:text-lg">
                        To bridge the gap between traditional maritime supply and digital logistics, creating a seamless, transparent infrastructure for the future of naval trade.
                    </p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="bg-navy-950 p-8 rounded-xl border border-white/5">
                    <h4 class="font-display font-bold text-white mb-3">Reliability</h4>
                    <p class="text-navy-300">Consistency in the most volatile environments.</p>
                </div>
                <div class="bg-navy-950 p-8 rounded-xl border border-white/5">
                    <h4 class="font-display font-bold text-white mb-3">Efficiency</h4>
                    <p class="text-navy-300">Optimized logistics to minimize port time.</p>
                </div>
                <div class="bg-navy-950 p-8 rounded-xl border border-white/5">
                    <h4 class="font-display font-bold text-white mb-3">Excellence</h4>
                    <p class="text-navy-300">Adhering to the highest maritime protocols.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Band -->
    <section class="py-20 bg-navy-950 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(99,179,237,0.6) 1px, transparent 1px); background-size: 24px 24px;"></div>
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-maritime-500 rounded-full opacity-10 blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-blue-400 rounded-full opacity-10 blur-3xl"></div>
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <span class="inline-block bg-blue-500/20 text-blue-300 text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-widest mb-6">Work With Us</span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">Ready for Your<br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-white">Next Port Call?</span></h2>
            <p class="text-white/60 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">Our operations team is on standby 24/7. Send your vessel's requirements and we'll have everything ready at the dock.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact" class="inline-flex items-center justify-center gap-2 bg-white text-navy-900 px-8 py-4 rounded-sm font-bold tracking-wide hover:bg-gray-100 transition-all hover:scale-[1.02]">Request a Quote <span class="material-symbols-outlined text-[20px]">arrow_forward</span></a>
                <a href="services" class="inline-flex items-center justify-center gap-2 bg-white/10 text-white border border-white/20 px-8 py-4 rounded-sm font-semibold tracking-wide hover:bg-white/20 transition-all backdrop-blur-sm">Our Services</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
<?= $this->endSection() ?>
