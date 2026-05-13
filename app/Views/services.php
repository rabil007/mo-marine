<?= $this->extend('layouts/main') ?>

<?= $this->section('head_scripts') ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://mo-marine.com/"},{"@type":"ListItem","position":2,"name":"Services", "item":<?= json_encode(site_url('services')) ?>}]}</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Header Section -->
    <section class="relative min-h-[70vh] flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-navy-950/85 via-navy-900/60 to-navy-950 z-10"></div>
        <img src="assets/images/ship_supply_hero.png" class="absolute inset-0 w-full h-full object-cover z-0" alt="" aria-hidden="true" fetchpriority="high"/>
        <div class="relative z-20 max-w-7xl mx-auto px-6 text-center w-full pt-32 pb-20">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white/90 text-xs font-semibold tracking-widest uppercase mb-8 opacity-0 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                One-Stop Maritime Supply
            </div>
            <h1 class="font-display text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 opacity-0 animate-fade-in-up stagger-1 leading-tight">
                Ship Supply, Technical<br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-white">&amp; Port Services</span>
            </h1>
            <p class="text-white/80 text-xl max-w-2xl mx-auto leading-relaxed opacity-0 animate-fade-in-up stagger-2">
                Integrated marine support covering chandlery, bonded stores, safety compliance, logistics, and nautical publications for vessels calling Syrian ports.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center opacity-0 animate-fade-in-up stagger-3">
                <a href="contact" class="inline-flex items-center justify-center gap-2 bg-white text-navy-900 px-7 py-3.5 rounded-sm font-bold tracking-wide hover:bg-gray-100 transition-all">Request a Quote <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
                <a href="#services" class="inline-flex items-center justify-center gap-2 bg-white/10 text-white border border-white/20 px-7 py-3.5 rounded-sm font-semibold hover:bg-white/20 transition-all backdrop-blur-sm">Browse Services</a>
            </div>
        </div>
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2 text-white/40 animate-bounce">
            <span class="text-xs tracking-widest uppercase">Scroll</span>
            <span class="material-symbols-outlined text-[20px]">keyboard_arrow_down</span>
        </div>
    </section>

    <!-- Quick Nav Tabs -->
    <div class="bg-navy-950 sticky top-20 z-40 border-b border-white/10" id="services">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex overflow-x-auto gap-0 no-scrollbar">
                <a href="#supply" class="flex-shrink-0 px-4 md:px-6 py-3 md:py-4 text-xs md:text-sm font-semibold text-white/60 hover:text-white border-b-2 border-transparent hover:border-maritime-500 transition-all uppercase tracking-wider">Supply</a>
                <a href="#technical" class="flex-shrink-0 px-4 md:px-6 py-3 md:py-4 text-xs md:text-sm font-semibold text-white/60 hover:text-white border-b-2 border-transparent hover:border-maritime-500 transition-all uppercase tracking-wider">Technical</a>
                <a href="#logistics" class="flex-shrink-0 px-4 md:px-6 py-3 md:py-4 text-xs md:text-sm font-semibold text-white/60 hover:text-white border-b-2 border-transparent hover:border-maritime-500 transition-all uppercase tracking-wider">Logistics</a>
                <a href="#nautical" class="flex-shrink-0 px-4 md:px-6 py-3 md:py-4 text-xs md:text-sm font-semibold text-white/60 hover:text-white border-b-2 border-transparent hover:border-maritime-500 transition-all uppercase tracking-wider">Nautical</a>
            </div>
        </div>
    </div>

    <!-- Services Overview -->
    <section class="py-24 bg-surface">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Category: Supply & Provisions -->
            <div class="mb-24" id="supply">
                <div class="flex items-center gap-4 mb-10">
                    <div class="h-12 w-12 rounded-xl bg-maritime-500 flex items-center justify-center text-white"><span class="material-symbols-outlined">inventory_2</span></div>
                    <div>
                        <p class="text-xs font-bold tracking-widest text-maritime-500 uppercase">Section 01</p>
                        <h2 class="font-display text-3xl font-bold text-navy-900">Supply &amp; Provisions</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Chandlery -->
                    <div class="bg-white p-6 md:p-8 rounded-xl border border-navy-100 shadow-sm hover:shadow-xl transition-all">
                        <div class="h-12 w-12 bg-navy-50 rounded-lg flex items-center justify-center text-maritime-500 mb-6">
                            <span class="material-symbols-outlined text-[24px]">inventory_2</span>
                        </div>
                        <h3 class="font-display text-xl font-bold text-navy-900 mb-3">Ship Supply (Chandlery)</h3>
                        <p class="text-navy-600 text-sm mb-4">Supplying everything a ship needs to operate. Covers all departments: deck, engine, cabin, safety, and medical.</p>
                        <ul class="text-sm space-y-2 text-navy-700">
                            <li><span class="font-semibold text-maritime-500">•</span> Technical Stores (Engine spares, tools)</li>
                            <li><span class="font-semibold text-maritime-500">•</span> Deck Stores (Ropes, anchors, paints)</li>
                            <li><span class="font-semibold text-maritime-500">•</span> Cabin Stores (Consumables, stationery)</li>
                            <li><span class="font-semibold text-maritime-500">•</span> Electrical & Navigation Equipment</li>
                        </ul>
                    </div>

                    <!-- Food Supply -->
                    <div class="bg-white p-6 md:p-8 rounded-xl border border-navy-100 shadow-sm hover:shadow-xl transition-all">
                        <div class="h-12 w-12 bg-navy-50 rounded-lg flex items-center justify-center text-maritime-500 mb-6">
                            <span class="material-symbols-outlined text-[24px]">restaurant</span>
                        </div>
                        <h3 class="font-display text-xl font-bold text-navy-900 mb-3">Ship Provisions</h3>
                        <p class="text-navy-600 text-sm mb-4">Full food supply catering directly to vessels. Fresh delivery with proper packaging and transport.</p>
                        <ul class="text-sm space-y-2 text-navy-700">
                            <li><span class="font-semibold text-maritime-500">•</span> Fresh Food (Meat, fish, vegetables)</li>
                            <li><span class="font-semibold text-maritime-500">•</span> Frozen Products</li>
                            <li><span class="font-semibold text-maritime-500">•</span> Dry Goods (Rice, cereals, canned food)</li>
                            <li><span class="font-semibold text-maritime-500">•</span> Drinks & Beverages</li>
                        </ul>
                    </div>

                    <!-- Bonded Stores -->
                    <div class="bg-white p-6 md:p-8 rounded-xl border border-navy-100 shadow-sm hover:shadow-xl transition-all">
                        <div class="h-12 w-12 bg-navy-50 rounded-lg flex items-center justify-center text-maritime-500 mb-6">
                            <span class="material-symbols-outlined text-[24px]">local_mall</span>
                        </div>
                        <h3 class="font-display text-xl font-bold text-navy-900 mb-3">Bonded Stores Supply</h3>
                        <p class="text-navy-600 text-sm mb-4">Tax-free products sold directly to ships.</p>
                        <ul class="text-sm space-y-2 text-navy-700">
                            <li><span class="font-semibold text-maritime-500">•</span> Cigarettes & Tobacco</li>
                            <li><span class="font-semibold text-maritime-500">•</span> Alcohol / Beverages</li>
                            <li><span class="font-semibold text-maritime-500">•</span> Perfumes & Electronics</li>
                            <li><span class="font-semibold text-maritime-500">•</span> Gifts & Souvenirs</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Category: Technical, Safety & Repairs -->
            <div class="mb-24" id="technical">
                <div class="flex items-center gap-4 mb-10">
                    <div class="h-12 w-12 rounded-xl bg-red-500 flex items-center justify-center text-white"><span class="material-symbols-outlined">engineering</span></div>
                    <div>
                        <p class="text-xs font-bold tracking-widest text-red-500 uppercase">Section 02</p>
                        <h2 class="font-display text-3xl font-bold text-navy-900">Technical, Safety &amp; Repairs</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Technical Repairs -->
                    <div class="bg-white p-6 md:p-8 rounded-xl border border-navy-100 shadow-sm hover:shadow-xl transition-all">
                        <div class="h-12 w-12 bg-red-50 rounded-lg flex items-center justify-center text-red-500 mb-6">
                            <span class="material-symbols-outlined text-[24px]">engineering</span>
                        </div>
                        <h3 class="font-display text-xl font-bold text-navy-900 mb-3">Technical Services & Repairs</h3>
                        <p class="text-navy-600 text-sm mb-4">Comprehensive engineering, ship repair coordination, and underwater services.</p>
                        <ul class="text-sm space-y-2 text-navy-700">
                            <li><span class="font-semibold text-red-500">•</span> Engine, Pump & Turbocharger Repairs</li>
                            <li><span class="font-semibold text-red-500">•</span> Electrical Motor Rewinding</li>
                            <li><span class="font-semibold text-red-500">•</span> Lifeboat & Radio Room Repairs</li>
                            <li><span class="font-semibold text-red-500">•</span> Underwater Hull Cleaning & Welding</li>
                        </ul>
                    </div>

                    <!-- Safety Services -->
                    <div class="bg-white p-6 md:p-8 rounded-xl border border-navy-100 shadow-sm hover:shadow-xl transition-all">
                        <div class="h-12 w-12 bg-red-50 rounded-lg flex items-center justify-center text-red-500 mb-6">
                            <span class="material-symbols-outlined text-[24px]">verified_user</span>
                        </div>
                        <h3 class="font-display text-xl font-bold text-navy-900 mb-3">Safety Services (FFA/LSA)</h3>
                        <p class="text-navy-600 text-sm mb-4">Critical inspection and servicing for compliance with IMO & SOLAS maritime regulations.</p>
                        <ul class="text-sm space-y-2 text-navy-700">
                            <li><span class="font-semibold text-red-500">•</span> Fire Extinguishers</li>
                            <li><span class="font-semibold text-red-500">•</span> Life Rafts</li>
                            <li><span class="font-semibold text-red-500">•</span> Pyrotechnics (Flares, smoke signals)</li>
                            <li><span class="font-semibold text-red-500">•</span> Complete Safety Systems</li>
                        </ul>
                    </div>

                    <!-- Tapes & Industrial -->
                    <div class="bg-white p-6 md:p-8 rounded-xl border border-navy-100 shadow-sm hover:shadow-xl transition-all">
                        <div class="h-12 w-12 bg-red-50 rounded-lg flex items-center justify-center text-red-500 mb-6">
                            <span class="material-symbols-outlined text-[24px]">plumbing</span>
                        </div>
                        <h3 class="font-display text-xl font-bold text-navy-900 mb-3">Marine Tapes & Industrial</h3>
                        <p class="text-navy-600 text-sm mb-4">Specialized maintenance products for heavy duty maritime applications.</p>
                        <ul class="text-sm space-y-2 text-navy-700">
                            <li><span class="font-semibold text-red-500">•</span> Pipe Repair Tapes</li>
                            <li><span class="font-semibold text-red-500">•</span> Spray Products</li>
                            <li><span class="font-semibold text-red-500">•</span> SOLAS-compliant Materials</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Category: Logistics & Operations -->
            <div class="mb-24" id="logistics">
                <div class="flex items-center gap-4 mb-10">
                    <div class="h-12 w-12 rounded-xl bg-yellow-500 flex items-center justify-center text-white"><span class="material-symbols-outlined">local_shipping</span></div>
                    <div>
                        <p class="text-xs font-bold tracking-widest text-yellow-600 uppercase">Section 03</p>
                        <h2 class="font-display text-3xl font-bold text-navy-900">Logistics &amp; Port Operations</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Spare Parts Logistics -->
                    <div class="bg-white p-6 rounded-xl border border-navy-100 shadow-sm hover:shadow-xl transition-all">
                        <h3 class="font-display font-bold text-navy-900 mb-2 flex items-center gap-2"><span class="material-symbols-outlined text-yellow-600 text-lg">local_shipping</span> Spare Parts Logistics</h3>
                        <p class="text-navy-600 text-sm">We collect spare parts from suppliers, deliver directly to the vessel, or store them in our warehouse. We also manage transport to and from repair workshops.</p>
                    </div>
                    <!-- Customs Clearance -->
                    <div class="bg-white p-6 rounded-xl border border-navy-100 shadow-sm hover:shadow-xl transition-all">
                        <h3 class="font-display font-bold text-navy-900 mb-2 flex items-center gap-2"><span class="material-symbols-outlined text-yellow-600 text-lg">description</span> Customs Clearance</h3>
                        <p class="text-navy-600 text-sm">Airport cargo clearance and handling of import formalities to ensure fast onboard delivery of urgent items before departure.</p>
                    </div>
                    <!-- Shipping Agency -->
                    <div class="bg-white p-6 rounded-xl border border-navy-100 shadow-sm hover:shadow-xl transition-all">
                        <h3 class="font-display font-bold text-navy-900 mb-2 flex items-center gap-2"><span class="material-symbols-outlined text-yellow-600 text-lg">directions_boat</span> Shipping Agency</h3>
                        <p class="text-navy-600 text-sm">Full ship support at port, berth allocation, and general coordination services for vessels entering Syrian waters.</p>
                    </div>
                    <!-- Nautical Surveys -->
                    <div class="bg-white p-6 rounded-xl border border-navy-100 shadow-sm hover:shadow-xl transition-all">
                        <h3 class="font-display font-bold text-navy-900 mb-2 flex items-center gap-2"><span class="material-symbols-outlined text-yellow-600 text-lg">analytics</span> Nautical Surveys</h3>
                        <p class="text-navy-600 text-sm">Professional inspection services and marine condition checks to ensure your vessel meets operational standards.</p>
                    </div>
                </div>
            </div>

            <!-- Category: ECDIS Training -->
            <div class="mb-20" id="ecdis">
                <div class="flex items-center gap-4 mb-10">
                    <div class="h-12 w-12 rounded-xl bg-indigo-500 flex items-center justify-center text-white"><span class="material-symbols-outlined">school</span></div>
                    <div>
                        <p class="text-xs font-bold tracking-widest text-indigo-500 uppercase">Section 04</p>
                        <h2 class="font-display text-3xl font-bold text-navy-900">ECDIS Type-Specific Training</h2>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 md:p-12 border border-indigo-100 shadow-lg">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                        <!-- Left: Description -->
                        <div>
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined text-indigo-500 text-[20px]">anchor</span>
                                </div>
                                <h3 class="font-display text-xl font-bold text-navy-900">Certified Navigator Training</h3>
                            </div>
                            <p class="text-navy-600 leading-relaxed mb-4">
                                We provide ECDIS type-specific training for all major systems, ensuring deck officers are fully competent in the safe and compliant use of onboard navigation equipment.
                            </p>
                            <p class="text-navy-600 leading-relaxed mb-4">
                                Our training programs are designed in line with IMO and flag state requirements, delivering comprehensive theoretical knowledge and hands-on system operation — fully online.
                            </p>
                            <p class="text-navy-600 leading-relaxed mb-6">
                                Upon successful completion, trainees are issued <span class="text-indigo-600 font-semibold">MCA-approved certificates</span>, confirming compliance with international standards.
                            </p>

                            <!-- Why it matters -->
                            <div class="bg-indigo-50 border border-indigo-100 rounded-xl p-5">
                                <h4 class="font-bold text-indigo-600 text-sm uppercase tracking-widest mb-3">Why It Matters</h4>
                                <p class="text-navy-500 text-sm mb-3">Proper ECDIS training is essential for:</p>
                                <div class="space-y-2">
                                    <?php foreach (['Safe navigation', 'Regulatory compliance', 'Reducing operational risks'] as $reason): ?>
                                    <div class="flex items-center gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full bg-indigo-500 flex-shrink-0"></span>
                                        <span class="text-navy-600 text-sm"><?= $reason ?></span>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Right: What we offer -->
                        <div>
                            <h4 class="font-bold text-indigo-600 text-sm uppercase tracking-widest mb-5">What We Offer</h4>
                            <div class="space-y-3">
                                <?php foreach ([
                                    ['school',            'Training for all major ECDIS brands and models'],
                                    ['verified',          'Type-specific certification in compliance with regulations'],
                                    ['workspace_premium', 'MCA-approved certification upon completion'],
                                    ['devices',           'Practical, system-focused learning'],
                                    ['wifi',              'Online training — accessible from anywhere'],
                                    ['groups',            'Support for individual officers and fleet-wide requirements'],
                                ] as [$icon, $text]): ?>
                                <div class="flex items-start gap-4 bg-navy-50 border border-navy-100 rounded-xl px-4 py-3.5">
                                    <div class="w-8 h-8 rounded-lg bg-indigo-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <span class="material-symbols-outlined text-indigo-500 text-[16px]"><?= $icon ?></span>
                                    </div>
                                    <p class="text-navy-600 text-sm leading-relaxed"><?= $text ?></p>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <p class="text-navy-400 text-sm mt-6 leading-relaxed">We ensure your crew is fully trained, certified, and ready to operate ECDIS systems with confidence.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category: Nautical Intelligence (The Massive Section) -->
            <div class="mb-20" id="nautical">
                <div class="flex items-center gap-4 mb-10">
                    <div class="h-12 w-12 rounded-xl bg-cyan-500 flex items-center justify-center text-white"><span class="material-symbols-outlined">map</span></div>
                    <div>
                        <p class="text-xs font-bold tracking-widest text-cyan-500 uppercase">Section 05</p>
                        <h2 class="font-display text-3xl font-bold text-navy-900">Nautical Intelligence &amp; Digital Services</h2>
                    </div>
                </div>
                
                <div class="bg-navy-900 rounded-2xl p-6 md:p-12 text-white relative overflow-hidden shadow-2xl">
                    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(rgba(34,211,238,0.22) 1px, transparent 1px); background-size: 22px 22px;"></div>
                    
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-cyan-400 text-4xl">map</span>
                            <h3 class="font-display text-2xl md:text-3xl font-bold text-white">Nautical Charts & Publications</h3>
                        </div>
                        <p class="text-navy-200 text-lg mb-10 max-w-4xl leading-relaxed">
                            M&O Marine is the first and only company in Syria stocking more than 2,500 up-to-date Admiralty charts. We provide a complete Folio Management Service covering paper and digital nautical charts and publications for safe navigation.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <!-- Chart Supply -->
                            <div>
                                <h4 class="font-bold text-cyan-400 mb-3 flex items-center gap-2"><span class="material-symbols-outlined text-sm">layers</span> Chart & Publication Supply</h4>
                                <ul class="text-sm text-navy-200 space-y-2">
                                    <li>• Full coverage of Med, Black Sea, Red Sea</li>
                                    <li>• All UKHO & International publications</li>
                                    <li>• Digital products</li>
                                    <li>• Transition support to digital formats</li>
                                </ul>
                            </div>
                            
                            <!-- Chart Management -->
                            <div>
                                <h4 class="font-bold text-cyan-400 mb-3 flex items-center gap-2"><span class="material-symbols-outlined text-sm">folder_managed</span> Management & Indexing</h4>
                                <ul class="text-sm text-navy-200 space-y-2">
                                    <li>• SOLAS compliant continuous updates</li>
                                    <li>• Custom Ship Index compilation</li>
                                    <li>• Automatic supply of new editions</li>
                                    <li>• Official Certificate of Participation issued</li>
                                </ul>
                            </div>

                            <!-- Weekly Updates -->
                            <div>
                                <h4 class="font-bold text-cyan-400 mb-3 flex items-center gap-2"><span class="material-symbols-outlined text-sm">update</span> Weekly Updates & Corrections</h4>
                                <ul class="text-sm text-navy-200 space-y-2">
                                    <li>• British Admiralty & US Notices to Mariners</li>
                                    <li>• Chart correction tracings supplied globally</li>
                                    <li>• Weekly computer-generated correction lists</li>
                                    <li>• Digital updates</li>
                                </ul>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12 pt-12 border-t border-white/10">
                            <div>
                                <h4 class="font-display font-bold text-white mb-3 flex items-center gap-2"><span class="material-symbols-outlined text-cyan-400">warning</span> IMO Signs & Posters</h4>
                                <p class="text-navy-200 text-sm">Required safety signage, compliance posters, and custom signs designed to meet international regulations.</p>
                            </div>
                            <div>
                                <h4 class="font-display font-bold text-white mb-3 flex items-center gap-2"><span class="material-symbols-outlined text-cyan-400">laptop_mac</span> Marine Software Solutions</h4>
                                <p class="text-navy-200 text-sm">Modern digital service offering including navigation software, cargo management systems, stability software, and training software.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Publications Downloads -->
            <?php if (! empty($publications)): ?>
            <div class="mt-10">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <p class="text-sm font-bold tracking-widest text-maritime-500 uppercase mb-1 flex items-center gap-2">
                            <span class="w-6 h-px bg-maritime-500"></span> Downloads
                        </p>
                        <h3 class="font-display text-2xl font-bold text-navy-900">Publication Index</h3>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php foreach ($publications as $pub): ?>
                    <a href="<?= esc(base_url($pub['file_path']), 'attr') ?>" target="_blank" rel="noopener"
                       class="group flex items-start gap-4 bg-white border border-navy-100 rounded-xl p-5 hover:border-maritime-500/40 hover:shadow-lg transition-all duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-maritime-500/10 rounded-lg flex items-center justify-center group-hover:bg-maritime-500 transition-colors duration-300">
                            <span class="material-symbols-outlined text-maritime-500 group-hover:text-white text-[24px] transition-colors duration-300">picture_as_pdf</span>
                        </div>
                        <div class="min-w-0 flex-1">
                            <p class="font-semibold text-navy-900 text-sm leading-snug group-hover:text-maritime-500 transition-colors"><?= esc($pub['title']) ?></p>
                            <?php if ($pub['subtitle']): ?>
                            <p class="text-navy-500 text-xs mt-0.5"><?= esc($pub['subtitle']) ?></p>
                            <?php endif; ?>
                            <p class="text-navy-400 text-xs mt-2 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px]">download</span>
                                Download PDF
                            </p>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Operational Capabilities -->
            <div class="bg-navy-50 rounded-xl p-6 md:p-10 text-center border border-navy-100">
                <h3 class="font-display text-2xl font-bold text-navy-900 mb-8">Our Operational Capabilities</h3>
                
                <?php $displayStats = array_slice($stats ?? [], 0, 4); ?>
                <div class="grid grid-cols-2 md:grid-cols-<?= count($displayStats) ?: 4 ?> gap-6 mb-10">
                    <?php foreach ($displayStats as $st): ?>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-navy-100">
                        <div class="font-display text-4xl font-bold text-maritime-500 mb-2"><?= esc($st['value']) ?></div>
                        <div class="text-xs font-bold text-navy-500 uppercase tracking-wider"><?= esc($st['label']) ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="flex flex-wrap justify-center gap-4 text-navy-700 font-medium">
                    <span class="bg-white px-5 py-2.5 rounded-full shadow-sm text-sm border border-navy-100">Serves All Vessel Types (Cargo to Cruise)</span>
                    <span class="bg-white px-5 py-2.5 rounded-full shadow-sm text-sm border border-navy-100">Massive Warehouse Infrastructure</span>
                    <span class="bg-white px-5 py-2.5 rounded-full shadow-sm text-sm border border-navy-100">Fast Global Delivery</span>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA Band -->
    <section class="py-20 bg-white border-t border-navy-100">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <span class="inline-block bg-maritime-500/10 text-maritime-500 text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-widest mb-6">Get Started</span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-navy-900 mb-6 leading-tight">Ready to Place<br/>Your Order?</h2>
            <p class="text-navy-600 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">Send us your vessel's requirements and our operations team will coordinate everything — from warehousing to dockside delivery.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact" class="inline-flex items-center justify-center gap-2 bg-navy-900 text-white px-8 py-4 rounded-sm font-bold tracking-wide hover:bg-navy-800 transition-all hover:scale-[1.02]">Request a Quote <span class="material-symbols-outlined text-[20px]">arrow_forward</span></a>
                <a href="faq" class="inline-flex items-center justify-center gap-2 border border-navy-200 text-navy-700 px-8 py-4 rounded-sm font-semibold hover:bg-navy-50 transition-all">View FAQ</a>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
