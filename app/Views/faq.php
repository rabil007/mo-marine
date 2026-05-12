<?= $this->extend('layouts/main') ?>

<?= $this->section('head_scripts') ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Which ports do you actively service?","acceptedAnswer":{"@type":"Answer","text":"Our primary hubs are Lattakia and Tartous ports in Syria. We provide full-scale agency, technical, and supply services 24/7 across these terminals, with dispatch capabilities reaching all vessels within Syrian territorial waters."}},{"@type":"Question","name":"Are you ISSA and IMPA certified?","acceptedAnswer":{"@type":"Answer","text":"Yes. M&O is a certified member of both the International Shipsuppliers & Services Association (ISSA) and the International Marine Purchasing Association (IMPA), ensuring provisions and stores meet global maritime standards."}},{"@type":"Question","name":"How quickly can you dispatch emergency provisions?","acceptedAnswer":{"@type":"Answer","text":"For emergency situations, our dispatch fleet can deliver fresh, frozen, and dry provisions to your vessel within hours of anchoring or berthing, using our localized supply chain and cold-storage warehouses."}},{"@type":"Question","name":"Can you service FFA and LSA equipment?","acceptedAnswer":{"@type":"Answer","text":"Yes. We provide inspection, servicing, and replacement of Fire Fighting Apparatus and Life Saving Apparatus, including fire extinguishers, life rafts, immersion suits, and pyrotechnics, in line with IMO and SOLAS regulations."}}]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://mo-marine.com/"},{"@type":"ListItem","position":2,"name":"FAQ","item":"<?= site_url('faq') ?>"}]}</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Header Section -->
    <section class="relative min-h-[70vh] flex items-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-navy-950/85 via-navy-900/60 to-navy-950 z-10"></div>
        <img src="assets/images/FAQ.jpg" class="absolute inset-0 w-full h-full object-cover z-0" alt="" aria-hidden="true" fetchpriority="high"/>
        <div class="relative z-20 max-w-7xl mx-auto px-6 text-center w-full pt-32 pb-20">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white/90 text-xs font-semibold tracking-widest uppercase mb-8 opacity-0 animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                Got Questions? We Have Answers
            </div>
            <h1 class="font-display text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 opacity-0 animate-fade-in-up stagger-1 leading-tight">
                Frequently Asked<br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-white">Maritime Questions</span>
            </h1>
            <p class="text-white/80 text-xl max-w-2xl mx-auto leading-relaxed opacity-0 animate-fade-in-up stagger-2">
                Key answers about our ship supply, technical response, certifications, and Syrian port support services.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center opacity-0 animate-fade-in-up stagger-3">
                <a href="#faq" class="inline-flex items-center justify-center gap-2 bg-white text-navy-900 px-7 py-3.5 rounded-sm font-bold tracking-wide hover:bg-gray-100 transition-all">Browse Questions <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
                <a href="contact" class="inline-flex items-center justify-center gap-2 bg-white/10 text-white border border-white/20 px-7 py-3.5 rounded-sm font-semibold hover:bg-white/20 transition-all backdrop-blur-sm">Contact Us</a>
            </div>
        </div>
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2 text-white/40 animate-bounce">
            <span class="text-xs tracking-widest uppercase">Scroll</span>
            <span class="material-symbols-outlined text-[20px]">keyboard_arrow_down</span>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="py-24 bg-surface" id="faq">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16">
                <p class="text-sm font-bold tracking-widest text-maritime-500 uppercase mb-3">Support Center</p>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-navy-900">Common Questions</h2>
                <p class="text-navy-600 mt-4 max-w-xl mx-auto">Click any question to expand the answer. Can't find what you're looking for? Reach out directly.</p>
            </div>

            <!-- Category: General -->
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="h-9 w-9 rounded-lg bg-maritime-500 flex items-center justify-center text-white"><span class="material-symbols-outlined text-[20px]">info</span></div>
                    <h3 class="font-display font-bold text-navy-900 text-lg">General Operations</h3>
                </div>
                <div class="space-y-3">
                    <details class="group bg-white rounded-xl border border-navy-100 shadow-sm overflow-hidden">
                        <summary class="flex items-center justify-between gap-4 px-5 md:px-7 py-4 md:py-5 cursor-pointer list-none">
                            <span class="font-display font-bold text-navy-900">Which ports do you actively service?</span>
                            <span class="material-symbols-outlined text-maritime-500 transition-transform duration-300 group-open:rotate-180 flex-shrink-0">expand_more</span>
                        </summary>
                        <div class="px-5 md:px-7 pb-6 text-navy-600 text-sm md:text-base leading-relaxed border-t border-navy-50 pt-4">Our primary hubs are Lattakia and Tartous ports in Syria. We provide full-scale agency, technical, and supply services 24/7 across these terminals, with dispatch capabilities reaching all vessels within Syrian territorial waters.</div>
                    </details>
                    <details class="group bg-white rounded-xl border border-navy-100 shadow-sm overflow-hidden">
                        <summary class="flex items-center justify-between gap-4 px-7 py-5 cursor-pointer list-none">
                            <span class="font-display font-bold text-navy-900">Are you ISSA and IMPA certified?</span>
                            <span class="material-symbols-outlined text-maritime-500 transition-transform duration-300 group-open:rotate-180 flex-shrink-0">expand_more</span>
                        </summary>
                        <div class="px-7 pb-6 text-navy-600 leading-relaxed border-t border-navy-50 pt-4">Yes. M&amp;O is a certified member of both the International Shipsuppliers &amp; Services Association (ISSA) &mdash; the first Syrian company to join in 2002 &mdash; and the International Marine Purchasing Association (IMPA), ensuring all provisions and stores meet global maritime standards.</div>
                    </details>
                    <details class="group bg-white rounded-xl border border-navy-100 shadow-sm overflow-hidden">
                        <summary class="flex items-center justify-between gap-4 px-7 py-5 cursor-pointer list-none">
                            <span class="font-display font-bold text-navy-900">How many vessels are you currently serving?</span>
                            <span class="material-symbols-outlined text-maritime-500 transition-transform duration-300 group-open:rotate-180 flex-shrink-0">expand_more</span>
                        </summary>
                        <div class="px-7 pb-6 text-navy-600 leading-relaxed border-t border-navy-50 pt-4">Over our 22+ years of operation, we are serving more than 450 vessels belonging to over 50 international shipping companies, covering all vessel types from bulk carriers to tankers and passenger ships.</div>
                    </details>
                </div>
            </div>

            <!-- Category: Supply & Provisions -->
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="h-9 w-9 rounded-lg bg-blue-500 flex items-center justify-center text-white"><span class="material-symbols-outlined text-[20px]">inventory_2</span></div>
                    <h3 class="font-display font-bold text-navy-900 text-lg">Supply &amp; Provisions</h3>
                </div>
                <div class="space-y-3">
                    <details class="group bg-white rounded-xl border border-navy-100 shadow-sm overflow-hidden">
                        <summary class="flex items-center justify-between gap-4 px-7 py-5 cursor-pointer list-none">
                            <span class="font-display font-bold text-navy-900">How quickly can you dispatch emergency provisions?</span>
                            <span class="material-symbols-outlined text-maritime-500 transition-transform duration-300 group-open:rotate-180 flex-shrink-0">expand_more</span>
                        </summary>
                        <div class="px-7 pb-6 text-navy-600 leading-relaxed border-t border-navy-50 pt-4">For emergency situations, our dispatch fleet can deliver fresh, frozen, and dry provisions to your vessel within hours of anchoring or berthing, utilizing our localized supply chain and cold-storage warehouses.</div>
                    </details>
                    <details class="group bg-white rounded-xl border border-navy-100 shadow-sm overflow-hidden">
                        <summary class="flex items-center justify-between gap-4 px-7 py-5 cursor-pointer list-none">
                            <span class="font-display font-bold text-navy-900">Do you supply bonded stores?</span>
                            <span class="material-symbols-outlined text-maritime-500 transition-transform duration-300 group-open:rotate-180 flex-shrink-0">expand_more</span>
                        </summary>
                        <div class="px-7 pb-6 text-navy-600 leading-relaxed border-t border-navy-50 pt-4">Yes. We supply a full range of bonded (tax-free) products directly to vessels, including cigarettes, tobacco, alcohol, beverages, perfumes, and electronics, in compliance with Syrian Customs Authority regulations.</div>
                    </details>
                    <details class="group bg-white rounded-xl border border-navy-100 shadow-sm overflow-hidden">
                        <summary class="flex items-center justify-between gap-4 px-7 py-5 cursor-pointer list-none">
                            <span class="font-display font-bold text-navy-900">Can you supply nautical charts worldwide?</span>
                            <span class="material-symbols-outlined text-maritime-500 transition-transform duration-300 group-open:rotate-180 flex-shrink-0">expand_more</span>
                        </summary>
                        <div class="px-7 pb-6 text-navy-600 leading-relaxed border-t border-navy-50 pt-4">Absolutely. We maintain a stock of over 2,500 up-to-date Admiralty charts and can dispatch publications, digital charts (ARCS/ENC), and IMO signs worldwide. We are the first and only company in Syria offering this service.</div>
                    </details>
                </div>
            </div>

            <!-- Category: Technical -->
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="h-9 w-9 rounded-lg bg-red-500 flex items-center justify-center text-white"><span class="material-symbols-outlined text-[20px]">engineering</span></div>
                    <h3 class="font-display font-bold text-navy-900 text-lg">Technical &amp; Safety</h3>
                </div>
                <div class="space-y-3">
                    <details class="group bg-white rounded-xl border border-navy-100 shadow-sm overflow-hidden">
                        <summary class="flex items-center justify-between gap-4 px-7 py-5 cursor-pointer list-none">
                            <span class="font-display font-bold text-navy-900">Do you provide underwater inspection services?</span>
                            <span class="material-symbols-outlined text-maritime-500 transition-transform duration-300 group-open:rotate-180 flex-shrink-0">expand_more</span>
                        </summary>
                        <div class="px-7 pb-6 text-navy-600 leading-relaxed border-t border-navy-50 pt-4">Yes. We coordinate specialized marine engineering and underwater hull inspections utilizing certified diving teams equipped for technical repairs, hull cleaning, and condition surveys.</div>
                    </details>
                    <details class="group bg-white rounded-xl border border-navy-100 shadow-sm overflow-hidden">
                        <summary class="flex items-center justify-between gap-4 px-7 py-5 cursor-pointer list-none">
                            <span class="font-display font-bold text-navy-900">Can you service FFA and LSA equipment?</span>
                            <span class="material-symbols-outlined text-maritime-500 transition-transform duration-300 group-open:rotate-180 flex-shrink-0">expand_more</span>
                        </summary>
                        <div class="px-7 pb-6 text-navy-600 leading-relaxed border-t border-navy-50 pt-4">Yes. We provide full inspection, servicing, and replacement of Fire Fighting Apparatus (FFA) and Life Saving Apparatus (LSA) including fire extinguishers, life rafts, immersion suits, and pyrotechnics — all compliant with IMO and SOLAS regulations.</div>
                    </details>
                    <details class="group bg-white rounded-xl border border-navy-100 shadow-sm overflow-hidden">
                        <summary class="flex items-center justify-between gap-4 px-7 py-5 cursor-pointer list-none">
                            <span class="font-display font-bold text-navy-900">Do you handle spare parts logistics?</span>
                            <span class="material-symbols-outlined text-maritime-500 transition-transform duration-300 group-open:rotate-180 flex-shrink-0">expand_more</span>
                        </summary>
                        <div class="px-7 pb-6 text-navy-600 leading-relaxed border-t border-navy-50 pt-4">Yes. We collect spare parts from local or international suppliers, handle customs clearance and airport cargo processing, then deliver directly to the vessel or store them safely in our warehouse until the ship arrives.</div>
                    </details>
                </div>
            </div>

            <div class="bg-navy-900 rounded-2xl p-6 md:p-10 text-center relative overflow-hidden mt-8">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(99,179,237,0.6) 1px, transparent 1px); background-size: 20px 20px;"></div>
                <div class="relative z-10">
                    <span class="material-symbols-outlined text-blue-400 text-[40px] md:text-[48px] mb-4 block">headset_mic</span>
                    <h3 class="font-display text-2xl font-bold text-white mb-3">Still Have Questions?</h3>
                    <p class="text-navy-300 mb-8 max-w-md mx-auto text-sm md:text-base">Our operations team is available 24/7. Send us a message and we'll respond within the hour.</p>
                    <a href="contact" class="w-full md:w-auto inline-flex items-center justify-center gap-2 bg-white text-navy-900 px-8 py-3.5 rounded-sm font-bold hover:bg-gray-100 transition-all">Contact Support <span class="material-symbols-outlined text-[18px]">arrow_forward</span></a>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
