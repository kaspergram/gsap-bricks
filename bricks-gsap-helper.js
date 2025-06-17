(function(){
    function init() {
        if (typeof gsap === 'undefined') return;
        const elements = document.querySelectorAll('.bgh-animate');
        if (!elements.length) return;
        elements.forEach(el => {
            const anim = el.dataset.bghAnimation;
            const opts = el.dataset.bghOptions ? JSON.parse(el.dataset.bghOptions) : {};
            if (anim === 'heroSequence') {
                const inset = el.querySelector('.hero-inset');
                const text = el.querySelector('.hero-text');
                const tl = gsap.timeline({ defaults: { duration: opts.duration || 1, ease: opts.ease || 'power2.out' } });
                if (inset) tl.from(inset, { xPercent: -50, autoAlpha: 0 });
                if (text) tl.from(text, { y: 50, autoAlpha: 0 }, '>-0.2');
            }
        });
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
