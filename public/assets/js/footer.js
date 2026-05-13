document.addEventListener('DOMContentLoaded', () => {
    const footerPlaceholder = document.getElementById('footer-placeholder');
    if (!footerPlaceholder) return;

    const resolvePath = (path) => new URL(path, document.baseURI).pathname;
    const routes = {
        home: resolvePath('./'),
        services: resolvePath('services'),
        technical: resolvePath('technical'),
        logistics: resolvePath('logistics'),
        contact: resolvePath('contact'),
    };

    const footerHTML = `
    <footer class="bg-navy-950 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 mb-16">
                <div class="lg:col-span-2 pr-0 lg:pr-12">
                    <a href="${routes.home}" class="flex items-center gap-4 mb-6 group cursor-pointer w-max" aria-label="M&O Marine Service home">
                        <div class="relative flex items-center justify-center">
                            <img src="${resolvePath('assets/images/logo.png')}" alt="M&O Marine Logo" width="252" height="314" loading="lazy" decoding="async" class="relative z-10 h-28 w-auto object-contain group-hover:rotate-[5deg] transition-all duration-300"/>
                        </div>
                        <div class="flex flex-col justify-center leading-tight">
                            <span class="font-display font-black tracking-wider text-3xl leading-none text-transparent bg-clip-text bg-gradient-to-r from-white to-blue-300">M&O</span>
                            <div class="font-sans text-blue-300/80 text-sm font-bold tracking-[0.16em] uppercase mt-2 flex flex-col">
                                <span>Marine Services</span>
                                <span>& Ship Supplies Ltd</span>
                            </div>
                        </div>
                    </a>
                    <p class="text-navy-300 leading-relaxed mb-8 max-w-md">
                        Setting the standard for maritime services in the Eastern Mediterranean. Reliable, compliant, and operational 24/7 since 2002.
                    </p>
                    <div class="flex gap-4">
                        <a href="https://www.instagram.com/momarineservices?igsh=MWMxcGlqYTd0dnE3Mw%3D%3D&utm_source=qr" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="h-10 w-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white/70 hover:bg-white/10 hover:text-pink-300 hover:border-pink-300/30 transition-colors">
                            <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                                <circle cx="12" cy="12" r="4"></circle>
                                <circle cx="17.5" cy="6.5" r="1"></circle>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/share/19BLcN5STF/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="h-10 w-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white/70 hover:bg-white/10 hover:text-blue-300 hover:border-blue-300/30 transition-colors">
                            <svg viewBox="0 0 24 24" class="h-5 w-5 fill-current" aria-hidden="true">
                                <path d="M13.5 21v-7h2.3l.4-2.8h-2.7V9.4c0-.8.2-1.4 1.4-1.4H16V5.5c-.3 0-1-.1-1.9-.1-1.9 0-3.2 1.2-3.2 3.4v2.4H8.7V14h2.2v7h2.6Z"></path>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/mo-marine/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="h-10 w-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white/70 hover:bg-white/10 hover:text-cyan-300 hover:border-cyan-300/30 transition-colors">
                            <svg viewBox="0 0 24 24" class="h-5 w-5 fill-current" aria-hidden="true">
                                <path d="M6.94 8.5H3.56V19h3.38V8.5ZM5.25 7.1c1.08 0 1.75-.72 1.75-1.62-.02-.92-.67-1.62-1.73-1.62S3.5 4.56 3.5 5.48c0 .9.69 1.62 1.73 1.62h.02ZM8.81 19h3.38v-5.86c0-.31.02-.62.12-.84.25-.62.81-1.27 1.76-1.27 1.24 0 1.74.96 1.74 2.36V19h3.38v-6c0-3.22-1.72-4.72-4.02-4.72-1.86 0-2.69 1.03-3.15 1.75h.02V8.5H8.81c.04 1 .04 10.5 0 10.5Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-white font-bold mb-6 tracking-wide uppercase text-sm">Service Divisions</h4>
                    <ul class="space-y-4">
                        <li><a href="${routes.services}" class="text-navy-300 hover:text-white transition-colors text-sm">Ship Provisions & Bonded</a></li>
                        <li><a href="${routes.technical}" class="text-navy-300 hover:text-white transition-colors text-sm">Technical Spares</a></li>
                        <li><a href="${routes.technical}" class="text-navy-300 hover:text-white transition-colors text-sm">Safety & Lifesaving (FFA/LSA)</a></li>
                        <li><a href="${routes.logistics}" class="text-navy-300 hover:text-white transition-colors text-sm">Port Logistics & Clearance</a></li>
                        <li><a href="${routes.services}" class="text-navy-300 hover:text-white transition-colors text-sm">Nautical Charts & Publications</a></li>
                        <li><a href="${routes.contact}" class="text-navy-300 hover:text-white transition-colors text-sm">Port Agency Services</a></li>
                        <li><a href="${routes.services}" class="text-navy-300 hover:text-white transition-colors text-sm">ECDIS Type-Specific Training</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-bold mb-6 tracking-wide uppercase text-sm">Operations</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-navy-400 text-[18px] mt-0.5">location_on</span>
                            <span class="text-navy-300 text-sm">KIA Motor Building 3rd floor, Nadim Hasan Street<br/>P.O. BOX 1808 Lattakia Syria</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-navy-400 text-[18px] mt-0.5">call</span>
                            <div class="text-navy-300 text-sm">
                                <div>+963 17 2770040/41/42/43</div>
                                <div>+963 933 093901</div>
                            </div>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-navy-400 text-[18px]">schedule</span>
                            <span class="text-navy-300 text-sm">24/7 Dispatch Center</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-navy-400 text-sm">
                    &copy; 2026 M&O Marine Services & Ship Supplies Ltd. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
    `;

    footerPlaceholder.innerHTML = footerHTML;
});
