/**
 * Main JS for M&O Marine Service
 * Shared animations and scroll logic
 */

document.addEventListener("DOMContentLoaded", function() {
    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    // Reveal animations on scroll (excluding header/navbar elements)
    const animateElements = Array.from(document.querySelectorAll('.bg-white, .bg-navy-900, h2, h3, .group, .animate-on-scroll'))
        .filter(el => !el.closest('header') && !el.closest('#navbar'));

    if (prefersReducedMotion) {
        animateElements.forEach((el) => {
            el.style.opacity = '1';
            el.style.transform = 'none';
            el.style.transition = 'none';
        });
        return;
    }

    animateElements.forEach((el, index) => {
        if(!el.classList.contains('animate-fade-in-up')) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.8s cubic-bezier(0.16, 1, 0.3, 1)';
            // Slight delay based on grid position
            el.style.transitionDelay = `${(index % 4) * 0.1}s`;
        }
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    animateElements.forEach(el => observer.observe(el));

    if (window.matchMedia('(hover: hover)').matches) {
        document.querySelectorAll('.group, .bg-white').forEach(card => {
            card.addEventListener('mouseenter', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if(icon) {
                    icon.style.transform = 'scale(1.1) translateY(-4px)';
                    icon.style.transition = 'all 0.3s ease';
                }
            });
            card.addEventListener('mouseleave', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if(icon) {
                    icon.style.transform = 'scale(1) translateY(0)';
                }
            });
        });
    }
});
