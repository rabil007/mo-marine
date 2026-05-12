document.addEventListener('DOMContentLoaded', () => {
    const navbarPlaceholder = document.getElementById('navbar-placeholder');
    if (!navbarPlaceholder) return;

    const normalizePath = (path) => {
        const normalized = path.replace(/\/+$/, '');
        return normalized === '' ? '/' : normalized;
    };

    const resolvePath = (path) => new URL(path, document.baseURI).pathname;
    const routes = {
        home: resolvePath('./'),
        about: resolvePath('about'),
        services: resolvePath('services'),
        faq: resolvePath('faq'),
        contact: resolvePath('contact'),
        technical: resolvePath('technical'),
        logistics: resolvePath('logistics'),
        publicationsChecklist: resolvePath('assets/pdf/M_O_Monthly_Publications_Check_List_for_Med_Black_Red_Sea.pdf'),
        publicationsIndex: resolvePath('assets/pdf/M_O_Publications_Index_Worldwide_Coverage.pdf'),
    };

    const currentPath = normalizePath(window.location.pathname);
    const isHome = currentPath === normalizePath(routes.home);
    const isAbout = currentPath === normalizePath(routes.about);
    const isServices = currentPath === normalizePath(routes.services);
    const isFAQ = currentPath === normalizePath(routes.faq);
    const isContact = currentPath === normalizePath(routes.contact);

    const navbarHTML = `
    <header class="fixed top-0 w-full z-50 glass-nav transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 h-28 flex items-center justify-between">
            <a href="${routes.home}" class="flex items-center gap-4 group relative cursor-pointer" aria-label="M&O Marine Service home">
                <div class="relative flex items-center justify-center">
                    <img src="https://lh3.googleusercontent.com/aida/ADBb0uja4Pi6GeJT_mp_CqXVXb_-sYCGSBshAeYzAVqZ2X7Fb6s1GVoTslzmP0TCXhHeHT7QAgK8yTTVhxPQUkPvvLgk-Weuhk2NZo-kNLnMs5ct6hKOviBkRS_u_Y3jWRPh8YGCTQUAcVudlWXCHJgijq3v0BCmW5mt4ptwwMZDhjzj4YZ7RyKv4rdxBfxsjQ6NFFqDQd1ZFFJdEnuBpPDZjMwKCuDQtEQM6EnRe99BrFGGz8QJkbcJc29Z_am7mr-jlPpcEfpblO0W2Q" alt="M&O Marine Logo" width="96" height="96" decoding="async" class="relative z-10 h-24 w-24 object-contain group-hover:rotate-[5deg] transition-all duration-300"/>
                </div>
                <div class="flex flex-col justify-center leading-tight">
                    <span class="font-display font-black tracking-wider text-2xl leading-none text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-blue-300 drop-shadow-sm group-hover:drop-shadow-md transition-all">M&O</span>
                    <div class="font-sans text-blue-200 text-[10px] font-bold tracking-[0.16em] uppercase mt-1 opacity-90 flex flex-col">
                        <span>Marine Services</span>
                        <span>& Ship Supplies Ltd</span>
                    </div>
                </div>
            </a>
            
            <nav class="hidden md:flex items-center gap-8" aria-label="Primary">
                <a href="${routes.home}" class="text-white/${isHome ? '90' : '60'} hover:text-white text-sm font-medium tracking-wide transition-colors relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-white after:scale-x-${isHome ? '100' : '0'} hover:after:scale-x-100 after:transition-transform after:origin-left">Home</a>
                <a href="${routes.about}" class="text-white/${isAbout ? '90' : '60'} hover:text-white text-sm font-medium tracking-wide transition-colors relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-white after:scale-x-${isAbout ? '100' : '0'} hover:after:scale-x-100 after:transition-transform after:origin-left">About</a>
                <a href="${routes.services}" class="text-white/${isServices ? '90' : '60'} hover:text-white text-sm font-medium tracking-wide transition-colors relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-white after:scale-x-${isServices ? '100' : '0'} hover:after:scale-x-100 after:transition-transform after:origin-left">Services</a>
                <a href="${routes.faq}" class="text-white/${isFAQ ? '90' : '60'} hover:text-white text-sm font-medium tracking-wide transition-colors relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-white after:scale-x-${isFAQ ? '100' : '0'} hover:after:scale-x-100 after:transition-transform after:origin-left">FAQ</a>
                <a href="${routes.contact}" class="text-white/${isContact ? '90' : '60'} hover:text-white text-sm font-medium tracking-wide transition-colors relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-white after:scale-x-${isContact ? '100' : '0'} hover:after:scale-x-100 after:transition-transform after:origin-left">Contact</a>
                <div class="relative group">
                    <button class="text-white/60 hover:text-white text-sm font-medium tracking-wide transition-colors flex items-center gap-1 relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-white after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:origin-left focus:outline-none" aria-haspopup="true" aria-expanded="false">
                        Publications Index
                        <span class="material-symbols-outlined text-[16px]">expand_more</span>
                    </button>
                    <div class="absolute top-full left-0 w-full h-4"></div>
                    <div class="absolute top-[calc(100%+0.5rem)] -left-4 w-[280px] bg-navy-950/95 backdrop-blur-xl border border-white/10 rounded-lg shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-300 transform origin-top -translate-y-2 group-hover:translate-y-0 group-focus-within:translate-y-0">
                        <div class="p-2 flex flex-col gap-1">
                            <a href="${routes.publicationsChecklist}" target="_blank" class="flex items-start gap-3 px-4 py-3 text-sm text-white/70 hover:text-white hover:bg-white/10 rounded-md transition-colors group/item">
                                <span class="material-symbols-outlined text-[20px] text-maritime-500 group-hover/item:text-white transition-colors">picture_as_pdf</span>
                                <span class="leading-snug">Monthly Checklist<br/><span class="text-[11px] text-white/40 group-hover/item:text-white/60 transition-colors">Med, Black, Red Sea</span></span>
                            </a>
                            <a href="${routes.publicationsIndex}" target="_blank" class="flex items-start gap-3 px-4 py-3 text-sm text-white/70 hover:text-white hover:bg-white/10 rounded-md transition-colors group/item">
                                <span class="material-symbols-outlined text-[20px] text-maritime-500 group-hover/item:text-white transition-colors">picture_as_pdf</span>
                                <span class="leading-snug">Publications Index<br/><span class="text-[11px] text-white/40 group-hover/item:text-white/60 transition-colors">Worldwide Coverage</span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="flex items-center gap-4">
                <a href="tel:+963933303041" class="hidden lg:inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-white/90 backdrop-blur-md transition-all duration-300 hover:-translate-y-0.5 hover:border-blue-300/30 hover:bg-white/10 hover:shadow-[0_10px_30px_rgba(59,130,246,0.15)]">
                    <span class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-400/15 text-blue-200">
                        <span class="material-symbols-outlined text-[16px] leading-none">call</span>
                    </span>
                    <span class="flex flex-col leading-none">
                        <span class="text-[10px] font-semibold uppercase tracking-[0.2em] text-white/50">24/7</span>
                        <span class="text-sm font-semibold text-white">Dispatch</span>
                    </span>
                </a>
                <button id="mobile-menu-btn" class="md:hidden text-white hover:text-blue-300 transition-colors ml-2 flex items-center justify-center" aria-label="Toggle navigation menu" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="material-symbols-outlined text-[32px] leading-none">menu</span>
                </button>
            </div>
        </div>
        
        <div id="mobile-menu" class="hidden md:hidden bg-navy-950/95 backdrop-blur-xl border-t border-white/10 absolute top-full left-0 w-full shadow-2xl max-h-[calc(100vh-112px)] overflow-y-auto">
            <div class="px-6 py-6 flex flex-col gap-4">
                <a href="${routes.home}" class="text-white/70 hover:text-white text-lg font-medium border-b border-white/10 pb-3 transition-colors">Home</a>
                <a href="${routes.about}" class="text-white/70 hover:text-white text-lg font-medium border-b border-white/10 pb-3 transition-colors">About</a>
                <a href="${routes.services}" class="text-white/70 hover:text-white text-lg font-medium border-b border-white/10 pb-3 transition-colors">Services</a>
                <a href="${routes.faq}" class="text-white/70 hover:text-white text-lg font-medium border-b border-white/10 pb-3 transition-colors">FAQ</a>
                <a href="${routes.contact}" class="text-white/70 hover:text-white text-lg font-medium border-b border-white/10 pb-3 transition-colors">Contact</a>
                <div class="border-b border-white/10 pb-3">
                    <button id="mobile-pubs-btn" class="w-full flex items-center justify-between text-white/70 hover:text-white text-lg font-medium transition-colors focus:outline-none" aria-controls="mobile-pubs" aria-expanded="false">
                        Publications Index
                        <span class="material-symbols-outlined">expand_more</span>
                    </button>
                    <div id="mobile-pubs" class="hidden flex-col gap-4 mt-4 pl-4 border-l-2 border-maritime-500/30">
                        <a href="${routes.publicationsChecklist}" target="_blank" class="flex items-start gap-3 text-white/60 hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-[20px] text-maritime-500 mt-0.5">picture_as_pdf</span>
                            <span class="leading-tight text-sm">Monthly Checklist<br/><span class="text-[11px] text-white/40">Med, Black, Red Sea</span></span>
                        </a>
                        <a href="${routes.publicationsIndex}" target="_blank" class="flex items-start gap-3 text-white/60 hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-[20px] text-maritime-500 mt-0.5">picture_as_pdf</span>
                            <span class="leading-tight text-sm">Publications Index<br/><span class="text-[11px] text-white/40">Worldwide Coverage</span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    `;

    navbarPlaceholder.innerHTML = navbarHTML;

    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobilePubsBtn = document.getElementById('mobile-pubs-btn');
    const mobilePubs = document.getElementById('mobile-pubs');
    const desktopPubsBtn = navbarPlaceholder.querySelector('nav .group > button');
    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
            const icon = this.querySelector('.material-symbols-outlined');
            const isExpanded = !mobileMenu.classList.contains('hidden');
            this.setAttribute('aria-expanded', String(isExpanded));
            if (!isExpanded) {
                icon.textContent = 'menu';
            } else {
                icon.textContent = 'close';
            }
        });
    }
    if (mobilePubsBtn && mobilePubs) {
        mobilePubsBtn.addEventListener('click', function () {
            mobilePubs.classList.toggle('hidden');
            const isExpanded = !mobilePubs.classList.contains('hidden');
            this.setAttribute('aria-expanded', String(isExpanded));
        });
    }
    if (desktopPubsBtn) {
        const parent = desktopPubsBtn.closest('.group');
        const setDesktopExpanded = (value) => desktopPubsBtn.setAttribute('aria-expanded', String(value));
        parent?.addEventListener('mouseenter', () => setDesktopExpanded(true));
        parent?.addEventListener('mouseleave', () => setDesktopExpanded(false));
        desktopPubsBtn.addEventListener('focus', () => setDesktopExpanded(true));
        parent?.addEventListener('focusout', (event) => {
            if (!parent.contains(event.relatedTarget)) {
                setDesktopExpanded(false);
            }
        });
    }

    const handleScroll = () => {
        const header = document.getElementById('navbar');
        if (!header) return;
        if (window.scrollY > 50) {
            header.style.paddingTop = '8px';
            header.style.paddingBottom = '8px';
            header.style.background = 'rgba(0, 20, 43, 0.98)';
            header.style.boxShadow = '0 10px 30px -10px rgba(0,0,0,0.5)';
        } else {
            header.style.paddingTop = '0';
            header.style.paddingBottom = '0';
            header.style.background = 'rgba(0, 20, 43, 0.85)';
            header.style.boxShadow = 'none';
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
});
