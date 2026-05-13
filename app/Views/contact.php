<?= $this->extend('layouts/main') ?>

<?= $this->section('head_scripts') ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","@id":"https://mo-marine.com/#localbusiness","name":"M&O Marine Services & Ship Supplies Ltd", "url":<?= json_encode(site_url('contact')) ?>,"image":"https://mo-marine.com/assets/images/contact_us_hero.png","telephone":"+963172770040","email":"hala@mo-marine.com","address":{"@type":"PostalAddress","streetAddress":"KIA Motor Building 3rd floor, Nadim Hasan Street","postOfficeBoxNumber":"P.O. BOX 1808","addressLocality":"Lattakia","addressCountry":"SY"},"areaServed":["Lattakia","Tartous","Syria"],"sameAs":["https://www.instagram.com/momarineservices?igsh=MWMxcGlqYTd0dnE3Mw%3D%3D&utm_source=qr","https://www.facebook.com/share/19BLcN5STF/?mibextid=wwXIfr","https://www.linkedin.com/company/mo-marine/"],"contactPoint":[{"@type":"ContactPoint","contactType":"customer service","telephone":"+963172770040","areaServed":"SY","availableLanguage":["en","ar"]},{"@type":"ContactPoint","contactType":"sales","telephone":"+963933093901","areaServed":"SY","availableLanguage":["en","ar"]},{"@type":"ContactPoint","contactType":"emergency","telephone":"+963933303041","areaServed":"SY","availableLanguage":["en","ar"]}],"knowsAbout":["Ship supply","Port logistics","Marine technical support","FFA and LSA safety services","Nautical charts and publications"]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://mo-marine.com/"},{"@type":"ListItem","position":2,"name":"Contact", "item":<?= json_encode(site_url('contact')) ?>}]}</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Header Section -->
    <section class="relative min-h-[70vh] flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-navy-950/85 via-navy-900/60 to-navy-950 z-10"></div>
        <img src="assets/images/contact_us_hero.png" class="absolute inset-0 w-full h-full object-cover z-0" alt="" aria-hidden="true" fetchpriority="high"/>
        <div class="relative z-20 max-w-7xl mx-auto px-6 text-center w-full pt-32 pb-20">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white/90 text-xs font-semibold tracking-widest uppercase mb-8 opacity-0 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                Operations Center &mdash; 24/7 Active
            </div>
            <h1 class="font-display text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 opacity-0 animate-fade-in-up stagger-1 leading-tight">
                Contact &amp; Port<br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-white">Operations</span>
            </h1>
            <p class="text-white/80 text-xl max-w-2xl mx-auto leading-relaxed opacity-0 animate-fade-in-up stagger-2">
                Strategic presence in Lattakia &amp; Tartous with immediate emergency response. Send your requirements and we'll mobilize within hours.
            </p>
        </div>
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2 text-white/40 animate-bounce">
            <span class="text-xs tracking-widest uppercase">Scroll</span>
            <span class="material-symbols-outlined text-[20px]">keyboard_arrow_down</span>
        </div>
    </section>

    <!-- Quick Contact Cards -->
    <section class="bg-navy-950 py-0">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-white/10">
                <a href="tel:+963933303041" class="flex items-center gap-5 px-6 md:px-8 py-6 md:py-8 hover:bg-white/5 transition-colors group">
                    <div class="h-12 w-12 rounded-xl bg-green-500/20 flex items-center justify-center text-green-400 flex-shrink-0 group-hover:bg-green-500/30 transition-colors">
                        <span class="material-symbols-outlined text-[24px]">phone_in_talk</span>
                    </div>
                    <div>
                        <p class="text-white/50 text-[10px] md:text-xs font-bold uppercase tracking-widest">Call Direct</p>
                        <p class="text-white font-bold text-base md:text-lg mt-0.5">+963 933 303041</p>
                    </div>
                </a>
                <div class="flex items-center gap-5 px-6 md:px-8 py-6 md:py-8 hover:bg-white/5 transition-colors group">
                    <div class="h-12 w-12 rounded-xl bg-blue-500/20 flex items-center justify-center text-blue-400 flex-shrink-0 group-hover:bg-blue-500/30 transition-colors">
                        <span class="material-symbols-outlined text-[24px]">mail</span>
                    </div>
                    <div>
                        <p class="text-white/50 text-[10px] md:text-xs font-bold uppercase tracking-widest">Email Us</p>
                        <a href="mailto:hala@mo-marine.com" class="block text-white font-bold text-sm md:text-base mt-0.5 hover:text-blue-300 transition-colors">hala@mo-marine.com</a>
                    </div>
                </div>
                <div class="flex items-center gap-5 px-6 md:px-8 py-6 md:py-8">
                    <div class="h-12 w-12 rounded-xl bg-maritime-500/20 flex items-center justify-center text-maritime-500 flex-shrink-0">
                        <span class="material-symbols-outlined text-[24px]">location_on</span>
                    </div>
                    <div>
                        <p class="text-white/50 text-[10px] md:text-xs font-bold uppercase tracking-widest">Headquarters</p>
                        <p class="text-white font-bold text-sm md:text-base leading-snug mt-0.5">KIA Motor Building 3rd floor, Nadim Hasan Street<br/>P.O. BOX 1808 Lattakia Syria</p>
                        <div class="text-white/60 text-[11px] font-semibold mt-1 space-y-1">
                            <p class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[14px]">call</span>
                                +963 17 2770040/41/42/43
                            </p>
                            <p class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[14px]">smartphone</span>
                                +963 933 093901
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-24 bg-surface">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Info -->
                <div class="opacity-0 animate-fade-in-up stagger-2">
                    <p class="text-sm font-bold tracking-widest text-maritime-500 uppercase mb-3">Reach Us</p>
                    <h2 class="font-display text-3xl font-bold text-navy-900 mb-8">Regional Operations Center</h2>
                    <div class="space-y-5 mb-10">
                        <div class="flex items-start gap-4 p-5 bg-white rounded-xl border border-navy-100 shadow-sm hover:shadow-md transition-all">
                            <div class="p-3 bg-navy-50 rounded-lg text-maritime-500 flex-shrink-0"><span class="material-symbols-outlined">location_on</span></div>
                            <div>
                                <h4 class="font-bold text-navy-900 mb-0.5">Main Headquarters</h4>
                                <p class="text-navy-600 text-sm">KIA Motor Building 3rd floor, Nadim Hasan Street</p>
                                <p class="text-navy-600 text-sm">P.O. BOX 1808 Lattakia Syria</p>
                                <div class="text-navy-600 text-sm mt-2 space-y-1.5">
                                    <p class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-[16px]">call</span>
                                        +963 17 2770040/41/42/43
                                    </p>
                                    <p class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-[16px]">smartphone</span>
                                        +963 933 093901
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-5 bg-white rounded-xl border border-navy-100 shadow-sm hover:shadow-md transition-all">
                            <div class="p-3 bg-green-50 rounded-lg text-green-600 flex-shrink-0"><span class="material-symbols-outlined">phone_in_talk</span></div>
                            <div>
                                <h4 class="font-bold text-navy-900 mb-0.5">24/7 Dispatch Hotline</h4>
                                <a href="tel:+963933303041" class="text-navy-600 text-sm hover:text-green-600 transition-colors">+963 933 303041</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-5 bg-white rounded-xl border border-navy-100 shadow-sm hover:shadow-md transition-all">
                            <div class="p-3 bg-blue-50 rounded-lg text-blue-600 flex-shrink-0"><span class="material-symbols-outlined">mail</span></div>
                            <div>
                                <h4 class="font-bold text-navy-900 mb-0.5">Email</h4>
                                <a href="mailto:hala@mo-marine.com" class="block text-navy-600 text-sm hover:text-blue-600 transition-colors">hala@mo-marine.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-navy-900 p-8 rounded-xl text-white relative overflow-hidden">
                        <div class="absolute top-4 right-4 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                            <span class="text-green-400 text-xs font-bold uppercase tracking-wider">Live</span>
                        </div>
                        <span class="material-symbols-outlined text-maritime-500 text-[36px] mb-4 block">directions_boat</span>
                        <h4 class="font-display font-bold text-xl mb-3">Port Clearances &amp; Agency</h4>
                        <p class="text-navy-200 text-sm leading-relaxed mb-5">We provide comprehensive agency services, from berth allocation to crew change logistics across Syrian waters. Our port agents are stationed at Lattakia and Tartous 24/7.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-navy-800 text-white text-xs px-3 py-1.5 rounded-full border border-navy-700">Lattakia Port</span>
                            <span class="bg-navy-800 text-white text-xs px-3 py-1.5 rounded-full border border-navy-700">Tartous Port</span>
                            <span class="bg-navy-800 text-white text-xs px-3 py-1.5 rounded-full border border-navy-700">Baniyas Port</span>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div id="contact-form" class="bg-white p-6 md:p-10 rounded-2xl shadow-xl shadow-navy-900/5 border border-navy-100 opacity-0 animate-fade-in-up stagger-3">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="h-12 w-12 rounded-xl bg-navy-900 grid place-items-center text-white flex-shrink-0">
                            <span class="material-symbols-outlined leading-none">send</span>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-navy-400 uppercase tracking-widest">Send a Request</p>
                            <h3 class="font-display text-2xl font-bold text-navy-900">Instant Dispatch</h3>
                        </div>
                    </div>

                    <?php if (! empty($success)): ?>
                    <div class="flex items-start gap-3 bg-green-50 border border-green-200 rounded-xl px-4 py-4 mb-6">
                        <span class="material-symbols-outlined text-green-600 text-[22px] flex-shrink-0 mt-0.5">check_circle</span>
                        <div>
                            <p class="text-green-800 font-bold text-sm">Request Received!</p>
                            <p class="text-green-700 text-sm mt-0.5"><?= esc($success) ?></p>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if (! empty($error)): ?>
                    <div class="flex items-start gap-3 bg-red-50 border border-red-200 rounded-xl px-4 py-4 mb-6">
                        <span class="material-symbols-outlined text-red-600 text-[22px] flex-shrink-0 mt-0.5">error</span>
                        <p class="text-red-700 text-sm"><?= esc($error) ?></p>
                    </div>
                    <?php endif; ?>

                    <form method="POST" action="<?= site_url('contact/submit') ?>" class="space-y-5" aria-label="Contact M&O Marine operations team">
                        <?= csrf_field() ?>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="vessel-name" class="block text-xs font-bold text-navy-500 uppercase tracking-wide mb-2">Vessel Name / IMO</label>
                                <input id="vessel-name" name="vessel_name" type="text" autocomplete="organization"
                                       value="<?= esc(old('vessel_name')) ?>"
                                       class="w-full bg-surface border border-navy-200 rounded-lg px-4 py-3 focus:outline-none focus:border-maritime-500 focus:ring-1 focus:ring-maritime-500 transition-all text-navy-900 text-sm" placeholder="e.g. MV OCEAN COMMANDER">
                            </div>
                            <div>
                                <label for="port-of-call" class="block text-xs font-bold text-navy-500 uppercase tracking-wide mb-2">Port of Call</label>
                                <select id="port-of-call" name="port_of_call" class="w-full bg-surface border border-navy-200 rounded-lg px-4 py-3 focus:outline-none focus:border-maritime-500 transition-all text-navy-900 text-sm">
                                    <?php foreach (['Lattakia','Tartous','Baniyas'] as $p): ?>
                                    <option <?= old('port_of_call') === $p ? 'selected' : '' ?>><?= $p ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="service-required" class="block text-xs font-bold text-navy-500 uppercase tracking-wide mb-2">Service Required</label>
                            <select id="service-required" name="service_required" class="w-full bg-surface border border-navy-200 rounded-lg px-4 py-3 focus:outline-none focus:border-maritime-500 focus:ring-1 focus:ring-maritime-500 transition-all text-navy-900 text-sm">
                                <?php foreach ([
                                    'Technical Repair / Underwater Services',
                                    'Emergency Provisions & Stores',
                                    'Safety Inspection (FFA / LSA)',
                                    'Customs / Logistics Clearance',
                                    'Nautical Charts & Publications',
                                    'Ship Agency Services',
                                    'General Inquiry',
                                ] as $s): ?>
                                <option <?= old('service_required') === $s ? 'selected' : '' ?>><?= esc($s) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="contact-number" class="block text-xs font-bold text-navy-500 uppercase tracking-wide mb-2">Contact Number</label>
                                <input id="contact-number" name="contact_number" type="tel" inputmode="tel" autocomplete="tel"
                                       value="<?= esc(old('contact_number')) ?>"
                                       class="w-full bg-surface border border-navy-200 rounded-lg px-4 py-3 focus:outline-none focus:border-maritime-500 focus:ring-1 focus:ring-maritime-500 transition-all text-navy-900 text-sm" placeholder="+963 ...">
                            </div>
                            <div>
                                <label for="email-address" class="block text-xs font-bold text-navy-500 uppercase tracking-wide mb-2">Email Address</label>
                                <input id="email-address" name="email" type="email" autocomplete="email"
                                       value="<?= esc(old('email')) ?>"
                                       class="w-full bg-surface border border-navy-200 rounded-lg px-4 py-3 focus:outline-none focus:border-maritime-500 focus:ring-1 focus:ring-maritime-500 transition-all text-navy-900 text-sm" placeholder="captain@vessel.com">
                            </div>
                        </div>
                        <div>
                            <label for="message-requirements" class="block text-xs font-bold text-navy-500 uppercase tracking-wide mb-2">Message / Requirements</label>
                            <textarea id="message-requirements" name="message" rows="4" class="w-full bg-surface border border-navy-200 rounded-lg px-4 py-3 focus:outline-none focus:border-maritime-500 focus:ring-1 focus:ring-maritime-500 transition-all text-navy-900 text-sm resize-none" placeholder="Describe your vessel's requirements..."><?= esc(old('message')) ?></textarea>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-navy-500 uppercase tracking-wide mb-3">Urgency Level</label>
                            <div class="flex gap-4">
                                <label class="flex items-center gap-2 cursor-pointer bg-red-50 border border-red-200 rounded-lg px-4 py-2.5 hover:bg-red-100 transition-colors">
                                    <input id="urgency-critical" type="radio" name="urgency" value="critical" <?= old('urgency') === 'critical' ? 'checked' : '' ?> class="text-red-500 focus:ring-red-500">
                                    <span class="text-sm font-bold text-red-700">🚨 Critical</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer bg-navy-50 border border-navy-200 rounded-lg px-4 py-2.5 hover:bg-navy-100 transition-colors">
                                    <input id="urgency-normal" type="radio" name="urgency" value="normal" <?= old('urgency') !== 'critical' ? 'checked' : '' ?> class="text-maritime-500 focus:ring-maritime-500">
                                    <span class="text-sm font-bold text-navy-700">✓ Normal</span>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="w-full bg-navy-900 text-white font-bold py-4 rounded-xl uppercase tracking-widest hover:bg-maritime-500 transition-colors flex items-center justify-center gap-2 mt-2">
                            <span class="material-symbols-outlined text-[20px]">send</span>
                            Send Request
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
