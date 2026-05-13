<?= $this->extend('layouts/main') ?>

<?= $this->section('head_scripts') ?>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","@id":"https://mo-marine.com/#localbusiness","name":"M&O Marine Services & Ship Supplies Ltd", "url":<?= json_encode(site_url('contact')) ?>,"image":"https://mo-marine.com/assets/images/contact_us_hero.png","telephone":"+963172770040","email":"hala@mo-marine.com","address":{"@type":"PostalAddress","streetAddress":"KIA Motor Building 3rd floor, Nadim Hasan Street","postOfficeBoxNumber":"P.O. BOX 1808","addressLocality":"Lattakia","addressCountry":"SY"},"areaServed":["Lattakia","Tartous","Syria"],"sameAs":["https://www.instagram.com/momarineservices?igsh=MWMxcGlqYTd0dnE3Mw%3D%3D&utm_source=qr","https://www.facebook.com/share/19BLcN5STF/?mibextid=wwXIfr","https://www.linkedin.com/company/mo-marine/"],"contactPoint":[{"@type":"ContactPoint","contactType":"customer service","telephone":"+963172770040","areaServed":"SY","availableLanguage":["en","ar"]},{"@type":"ContactPoint","contactType":"sales","telephone":"+963933093901","areaServed":"SY","availableLanguage":["en","ar"]},{"@type":"ContactPoint","contactType":"emergency","telephone":"+963933303041","areaServed":"SY","availableLanguage":["en","ar"]}],"knowsAbout":["Ship supply","Port logistics","Marine technical support","FFA and LSA safety services","Nautical charts and publications"]}</script>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebSite","@id":"https://mo-marine.com/#website","url":"https://mo-marine.com/","name":"M&O Marine Service","publisher":{"@id":"https://mo-marine.com/#organization"},"inLanguage":"en"}</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center pt-20 bg-hero-pattern bg-cover bg-center bg-no-repeat bg-fixed">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-navy-900/50 to-navy-950"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full py-24 lg:py-32">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white/90 text-xs font-semibold tracking-wider uppercase mb-8 opacity-0 animate-fade-in-up">
                    <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                    Operational Since 2002
                </div>
                
                <h1 class="font-display text-4xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6 opacity-0 animate-fade-in-up stagger-1">
                    Exceptional Ship Supply <br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-white">&amp; Maritime Services in Syria</span>
                </h1>
                
                <p class="text-lg md:text-xl text-white/70 font-light leading-relaxed mb-10 max-w-2xl opacity-0 animate-fade-in-up stagger-2">
                    24/7 ship supply, technical response, and port logistics for commercial vessels calling Lattakia and Tartous.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 opacity-0 animate-fade-in-up stagger-3">
                    <a href="#services" class="inline-flex justify-center items-center gap-2 bg-white text-navy-900 px-8 py-4 rounded-sm font-semibold tracking-wide hover:bg-gray-50 transition-all hover:scale-[1.02]">
                        Explore Services
                        <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                    </a>
                    <a href="contact" class="inline-flex justify-center items-center gap-2 bg-white/10 text-white border border-white/20 px-8 py-4 rounded-sm font-semibold tracking-wide backdrop-blur-sm hover:bg-white/20 transition-all">
                        Request a Quote
                    </a>
                </div>
            </div>
        </div>

        <!-- Floating Stats Strip -->
        <div class="absolute bottom-0 left-0 w-full transform translate-y-1/2 z-20 px-4 md:px-6">
            <div class="max-w-7xl mx-auto">
                <div class="glass-card rounded-xl p-5 md:p-8 flex flex-col md:flex-row items-center justify-between gap-6 md:gap-8 animate-fade-in-up stagger-4">
                    <div class="flex items-center gap-4 w-full md:w-auto">
                        <div class="h-12 w-12 rounded-full bg-navy-50 flex items-center justify-center text-maritime-500">
                            <span class="material-symbols-outlined text-[24px]">location_on</span>
                        </div>
                        <div class="max-w-[280px]">
                            <p class="text-sm text-navy-500 font-medium">Head Office</p>
                            <p class="font-display font-bold text-navy-900 text-sm leading-snug">KIA Motor Building 3rd floor, Nadim Hasan Street<br/>P.O. BOX 1808 Lattakia Syria</p>
                        </div>
                    </div>
                    <div class="hidden md:block w-px h-12 bg-navy-100"></div>
                    <div class="flex items-center gap-4 w-full md:w-auto">
                        <div class="h-12 w-12 rounded-full bg-navy-50 flex items-center justify-center text-maritime-500">
                            <span class="material-symbols-outlined text-[24px]">schedule</span>
                        </div>
                        <div>
                            <p class="text-sm text-navy-500 font-medium">Availability</p>
                            <p class="font-display font-bold text-navy-900 text-lg">24/7 Operations</p>
                        </div>
                    </div>
                    <div class="hidden md:block w-px h-12 bg-navy-100"></div>
                    <div class="flex items-center gap-4 w-full md:w-auto">
                        <div class="h-12 w-12 rounded-full bg-navy-50 flex items-center justify-center text-maritime-500">
                            <span class="material-symbols-outlined text-[24px]">verified</span>
                        </div>
                        <div>
                            <p class="text-sm text-navy-500 font-medium">Accreditation</p>
                            <p class="font-display font-bold text-navy-900 text-lg">ISSA & IMPA Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-32 pb-24 bg-surface relative">
        <div class="max-w-7xl mx-auto px-6 mt-16 md:mt-24">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div class="max-w-2xl">
                    <p class="text-sm font-bold tracking-widest text-maritime-500 uppercase mb-3 flex items-center gap-3">
                        <span class="w-8 h-px bg-maritime-500"></span> Core Expertise
                    </p>
                    <h2 class="font-display text-3xl md:text-5xl font-bold text-navy-900 leading-tight">Comprehensive Marine Solutions</h2>
                </div>
                <p class="text-navy-600 max-w-md text-base leading-relaxed">
                    Engineered for maximum efficiency, our integrated services ensure your vessel remains fully operational, compliant, and ready for deployment.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="group bg-white rounded-xl p-8 border border-navy-100 shadow-sm hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-8 opacity-5 transform translate-x-4 -translate-y-4 group-hover:scale-110 transition-transform duration-500">
                        <span class="material-symbols-outlined text-[120px]">inventory_2</span>
                    </div>
                    <div class="h-14 w-14 bg-navy-50 rounded-lg flex items-center justify-center text-maritime-500 mb-6 group-hover:bg-maritime-500 group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-[28px]">inventory</span>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-navy-900 mb-3">Provisions & Supply</h3>
                    <p class="text-navy-600 leading-relaxed mb-8">Premium fresh, frozen, and dry provisions. Complete bonded stores and specialized cabin equipment delivered direct to deck.</p>
                    <a href="services" class="inline-flex items-center gap-2 text-maritime-500 font-semibold group-hover:gap-3 transition-all">
                        Learn More <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="group bg-white rounded-xl p-8 border border-navy-100 shadow-sm hover:shadow-xl transition-all duration-300 relative overflow-hidden transform md:-translate-y-4">
                    <div class="absolute top-0 right-0 p-8 opacity-5 transform translate-x-4 -translate-y-4 group-hover:scale-110 transition-transform duration-500">
                        <span class="material-symbols-outlined text-[120px]">build</span>
                    </div>
                    <div class="h-14 w-14 bg-navy-50 rounded-lg flex items-center justify-center text-maritime-500 mb-6 group-hover:bg-maritime-500 group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-[28px]">engineering</span>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-navy-900 mb-3">Technical Services</h3>
                    <p class="text-navy-600 leading-relaxed mb-8">Specialized marine engineering coordination, underwater repairs, and rigorous safety compliance (FFA/LSA) inspections.</p>
                    <a href="technical" class="inline-flex items-center gap-2 text-maritime-500 font-semibold group-hover:gap-3 transition-all">
                        Learn More <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="group bg-white rounded-xl p-8 border border-navy-100 shadow-sm hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-8 opacity-5 transform translate-x-4 -translate-y-4 group-hover:scale-110 transition-transform duration-500">
                        <span class="material-symbols-outlined text-[120px]">directions_boat</span>
                    </div>
                    <div class="h-14 w-14 bg-navy-50 rounded-lg flex items-center justify-center text-maritime-500 mb-6 group-hover:bg-maritime-500 group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-[28px]">local_shipping</span>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-navy-900 mb-3">Port Logistics</h3>
                    <p class="text-navy-600 leading-relaxed mb-8">End-to-end customs clearance, spare parts warehousing, and dedicated fleet dispatch across Lattakia and Tartous terminals.</p>
                    <a href="logistics" class="inline-flex items-center gap-2 text-maritime-500 font-semibold group-hover:gap-3 transition-all">
                        Learn More <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Excellence Section (Dark) -->
    <section class="py-24 bg-navy-900 relative overflow-hidden">
        <!-- Abstract Background -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0,0 L100,0 L100,100 L0,100 Z" fill="none" stroke="currentColor" stroke-width="0.5" stroke-dasharray="2 4"/>
                <path d="M0,50 Q25,25 50,50 T100,50" fill="none" stroke="currentColor" stroke-width="0.2"/>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-white mb-6">Nautical Intelligence & Compliance</h2>
                    <p class="text-white/70 text-lg leading-relaxed mb-10">
                        Beyond physical logistics, our specialized divisions manage digital charts, regulatory publications, and advanced marine software to ensure your bridge operates flawlessly and in strict accordance with IMO standards.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-6">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-blue-300">
                                <span class="material-symbols-outlined text-[20px]">map</span>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">Nautical Charts</h3>
                                <p class="text-white/60 text-sm">Digital & Paper Charts</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-blue-300">
                                <span class="material-symbols-outlined text-[20px]">shield</span>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">IMO Compliance</h3>
                                <p class="text-white/60 text-sm">Safety Posters & Signs</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-blue-300">
                                <span class="material-symbols-outlined text-[20px]">terminal</span>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">Marine Software</h3>
                                <p class="text-white/60 text-sm">Cargo & Stability</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-blue-300">
                                <span class="material-symbols-outlined text-[20px]">analytics</span>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">Publications</h3>
                                <p class="text-white/60 text-sm">Digital & Paper Publications</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-2xl transform rotate-3 opacity-20 blur-xl"></div>
                    <div class="bg-navy-800 rounded-2xl p-10 border border-white/10 relative backdrop-blur-sm">
                        <div class="flex justify-between items-start mb-8">
                            <span class="material-symbols-outlined text-blue-400 text-[40px]">radar</span>
                            <span class="bg-blue-500/20 text-blue-300 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Active Status</span>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-white mb-4">Operations Center</h3>
                        <p class="text-white/70 mb-8 leading-relaxed">
                            Our regional control room monitors vessel traffic and coordinates dispatch fleets 24 hours a day. We are ready to mobilize engineering teams or express supplies within hours of anchoring.
                        </p>
                        <a href="contact" class="w-full inline-flex items-center justify-center bg-white text-navy-900 py-3.5 rounded-sm font-semibold hover:bg-gray-100 transition-colors">
                            Contact Team
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How We Operate -->
    <section class="py-24 bg-surface relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <p class="text-sm font-bold tracking-widest text-maritime-500 uppercase mb-3">Our Process</p>
                <h2 class="font-display text-2xl md:text-4xl font-bold text-navy-900">Seamless Operational Workflow</h2>
                <p class="text-navy-600 max-w-2xl mx-auto mt-4 text-sm md:text-base px-4">We've refined our supply chain logistics over two decades to ensure your vessel receives exactly what it needs, the moment it docks.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8 relative">
                <!-- Connecting Line for Desktop -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-gradient-to-r from-navy-100 via-maritime-300 to-navy-100 -z-10 -translate-y-1/2"></div>
                
                <!-- Step 1 -->
                <div class="bg-white p-6 md:p-8 rounded-xl border border-navy-100 shadow-sm relative group hover:-translate-y-2 transition-all duration-300">
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full bg-navy-900 text-white flex items-center justify-center font-bold text-lg border-4 border-surface group-hover:bg-maritime-500 transition-colors shadow-lg">1</div>
                    <div class="h-16 w-16 mx-auto bg-navy-50 rounded-full flex items-center justify-center text-maritime-500 mb-6 mt-4 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[32px]">support_agent</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-navy-900 text-center mb-3">Instant Requisition</h3>
                    <p class="text-navy-600 text-center text-sm leading-relaxed">Our 24/7 dispatch center receives your vessel's requirements and immediately begins sourcing from our massive warehouse infrastructure.</p>
                </div>
                
                <!-- Step 2 -->
                <div class="bg-white p-8 rounded-xl border border-navy-100 shadow-sm relative group hover:-translate-y-2 transition-all duration-300">
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full bg-navy-900 text-white flex items-center justify-center font-bold text-lg border-4 border-surface group-hover:bg-maritime-500 transition-colors shadow-lg">2</div>
                    <div class="h-16 w-16 mx-auto bg-navy-50 rounded-full flex items-center justify-center text-maritime-500 mb-6 mt-4 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[32px]">warehouse</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-navy-900 text-center mb-3">Quality Consolidation</h3>
                    <p class="text-navy-600 text-center text-sm leading-relaxed">Goods, spares, and provisions are rigorously checked, safely packed, and cleared through local customs by our dedicated port agents.</p>
                </div>
                
                <!-- Step 3 -->
                <div class="bg-white p-8 rounded-xl border border-navy-100 shadow-sm relative group hover:-translate-y-2 transition-all duration-300">
                    <div class="absolute -top-6 left-1/2 -translate-x-1/2 w-12 h-12 rounded-full bg-navy-900 text-white flex items-center justify-center font-bold text-lg border-4 border-surface group-hover:bg-maritime-500 transition-colors shadow-lg">3</div>
                    <div class="h-16 w-16 mx-auto bg-navy-50 rounded-full flex items-center justify-center text-maritime-500 mb-6 mt-4 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[32px]">directions_boat</span>
                    </div>
                    <h3 class="font-display text-xl font-bold text-navy-900 text-center mb-3">Dockside Delivery</h3>
                    <p class="text-navy-600 text-center text-sm leading-relaxed">Our logistics fleet coordinates directly with the captain to deliver items straight to the vessel, ensuring zero delay in departure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Impact Stats -->
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-navy-900/80 z-10 mix-blend-multiply"></div>
        <img src="assets/images/stats_bg.png" class="absolute inset-0 w-full h-full object-cover z-0" alt="" aria-hidden="true" loading="lazy" decoding="async"/>
        <div class="absolute inset-0 bg-maritime-600/60 z-10 mix-blend-overlay"></div>
        <div class="absolute inset-0 opacity-20 z-10" style="background-image: radial-gradient(rgba(255, 255, 255, 0.4) 2px, transparent 2px); background-size: 30px 30px;"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-20">
            <?php $displayStats = array_slice($stats ?? [], 0, 4); ?>
            <div class="grid grid-cols-2 md:grid-cols-<?= count($displayStats) ?: 4 ?> gap-8 text-center divide-x divide-white/20">
                <?php foreach ($displayStats as $st): ?>
                <div class="px-4">
                    <div class="font-display text-5xl font-bold text-white mb-2"><?= esc($st['value']) ?></div>
                    <div class="text-blue-100 font-medium uppercase tracking-wider text-sm mt-2"><?= esc($st['label']) ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Why Choose M&O -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <p class="text-sm font-bold tracking-widest text-maritime-500 uppercase mb-3">Why M&O</p>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-navy-900">The Standard of the Eastern Mediterranean</h2>
                <p class="text-navy-600 max-w-2xl mx-auto mt-4 leading-relaxed">For over two decades, ship captains and fleet managers have trusted M&O for one simple reason: we never let a vessel down.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group text-center p-6 md:p-8 rounded-2xl border border-navy-100 hover:border-maritime-500/30 hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="h-16 w-16 mx-auto rounded-2xl bg-blue-50 flex items-center justify-center text-maritime-500 mb-5 group-hover:bg-maritime-500 group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined text-[32px]">bolt</span>
                    </div>
                    <h3 class="font-display font-bold text-navy-900 text-lg mb-2">Rapid Response</h3>
                    <p class="text-navy-600 text-sm leading-relaxed">Express supply delivery within hours of vessel arrival at Lattakia or Tartous port.</p>
                </div>
                <div class="group text-center p-8 rounded-2xl border border-navy-100 hover:border-maritime-500/30 hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="h-16 w-16 mx-auto rounded-2xl bg-blue-50 flex items-center justify-center text-maritime-500 mb-5 group-hover:bg-maritime-500 group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined text-[32px]">verified</span>
                    </div>
                    <h3 class="font-display font-bold text-navy-900 text-lg mb-2">ISSA & IMPA Certified</h3>
                    <p class="text-navy-600 text-sm leading-relaxed">Internationally accredited — the first Syrian company to achieve ISSA membership in 2002.</p>
                </div>
                <div class="group text-center p-8 rounded-2xl border border-navy-100 hover:border-maritime-500/30 hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="h-16 w-16 mx-auto rounded-2xl bg-blue-50 flex items-center justify-center text-maritime-500 mb-5 group-hover:bg-maritime-500 group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined text-[32px]">groups</span>
                    </div>
                    <h3 class="font-display font-bold text-navy-900 text-lg mb-2">Maritime Professionals</h3>
                    <p class="text-navy-600 text-sm leading-relaxed">Managed by Captains and Engineers who understand your exact operational needs at sea.</p>
                </div>
                <div class="group text-center p-8 rounded-2xl border border-navy-100 hover:border-maritime-500/30 hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="h-16 w-16 mx-auto rounded-2xl bg-blue-50 flex items-center justify-center text-maritime-500 mb-5 group-hover:bg-maritime-500 group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined text-[32px]">public</span>
                    </div>
                    <h3 class="font-display font-bold text-navy-900 text-lg mb-2">Worldwide Dispatch</h3>
                    <p class="text-navy-600 text-sm leading-relaxed">Nautical charts, publications, and specialist goods dispatched globally from our warehouse.</p>
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
            <span class="inline-block bg-blue-500/20 text-blue-300 text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-widest mb-6">Ready to Sail?</span>
            <h2 class="font-display text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">Your Next Port Call,<br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-white">Fully Prepared.</span></h2>
            <p class="text-white/60 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">Send us your requisition list in advance and our operations team will have everything ready dockside before you anchor.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact" class="inline-flex items-center justify-center gap-2 bg-white text-navy-900 px-8 py-4 rounded-sm font-bold tracking-wide hover:bg-gray-100 transition-all hover:scale-[1.02]">
                    Request a Quote <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                </a>
                <a href="faq" class="inline-flex items-center justify-center gap-2 bg-white/10 text-white border border-white/20 px-8 py-4 rounded-sm font-semibold tracking-wide hover:bg-white/20 transition-all backdrop-blur-sm">
                    View FAQ
                </a>
            </div>
        </div>
    </section>

    <!-- Trust / Certifications -->
    <section class="relative py-20 bg-white overflow-hidden border-y border-navy-100">
        <div class="absolute inset-0 opacity-[0.45]" style="background-image: radial-gradient(rgba(0,33,71,0.06) 1px, transparent 1px); background-size: 28px 28px;"></div>
        <div class="absolute left-0 top-0 h-px w-full bg-gradient-to-r from-transparent via-navy-200 to-transparent"></div>
        <div class="absolute left-0 bottom-0 h-px w-full bg-gradient-to-r from-transparent via-navy-200 to-transparent"></div>
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-maritime-500/10 border border-maritime-500/15 text-maritime-600 text-xs font-bold tracking-[0.2em] uppercase mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span>
                    Global Standards
                </span>
                <h2 class="font-display text-2xl md:text-3xl font-bold text-navy-900">Certified Maritime Excellence</h2>
                <p class="text-navy-500 text-sm mt-2 max-w-md mx-auto">Internationally accredited and recognised by the world's leading maritime bodies.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 max-w-3xl mx-auto">
                <div class="group flex flex-col items-center justify-center gap-3 rounded-2xl border border-navy-100 bg-white px-6 py-7 shadow-sm transition-all duration-300 hover:border-blue-400/30 hover:shadow-[0_8px_32px_rgba(59,130,246,0.12)] hover:-translate-y-1">
                    <div class="flex h-24 w-36 items-center justify-center">
                        <img src="assets/images/issa-logo.png" alt="ISSA Member" width="160" height="112" loading="lazy" decoding="async" class="h-28 w-40 object-contain transition-all duration-300 group-hover:scale-105"/>
                    </div>
                    <span class="text-navy-500 text-[10px] font-bold tracking-[0.2em] uppercase">Member Since 2002</span>
                </div>
                <div class="group flex flex-col items-center justify-center gap-3 rounded-2xl border border-navy-100 bg-white px-6 py-7 shadow-sm transition-all duration-300 hover:border-blue-400/30 hover:shadow-[0_8px_32px_rgba(59,130,246,0.12)] hover:-translate-y-1">
                    <div class="flex h-24 w-36 items-center justify-center">
                        <img src="assets/images/impa-logo.png" alt="IMPA Member" width="128" height="80" loading="lazy" decoding="async" class="h-20 w-32 object-contain transition-all duration-300 group-hover:scale-105"/>
                    </div>
                    <span class="text-navy-500 text-[10px] font-bold tracking-[0.2em] uppercase">Member Since 2009</span>
                </div>
                <div class="group flex flex-col items-center justify-center gap-3 rounded-2xl border border-navy-100 bg-white px-6 py-7 shadow-sm transition-all duration-300 hover:border-blue-400/30 hover:shadow-[0_8px_32px_rgba(59,130,246,0.12)] hover:-translate-y-1">
                    <div class="flex h-24 w-36 items-center justify-center">
                        <img src="assets/images/iso-9001-logo.png" alt="ISO 9001 Certified" width="128" height="80" loading="lazy" decoding="async" class="h-20 w-32 object-contain transition-all duration-300 group-hover:scale-105"/>
                    </div>
                    <span class="text-navy-500 text-[10px] font-bold tracking-[0.2em] uppercase">Quality Certified</span>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
