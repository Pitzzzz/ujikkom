/**
 * Landing page interactions — vanilla JS only (design.md §6–§8)
 * Libraries: Tailwind only. No Framer/GSAP/Radix.
 */

function prefersReducedMotion() {
    return window.matchMedia('(prefers-reduced-motion: reduce)').matches;
}

/* ---------- Header scroll state ---------- */
function initHeader() {
    const header = document.getElementById('site-header');
    if (!header) return;

    const onScroll = () => {
        header.classList.toggle('is-scrolled', window.scrollY > 24);
    };

    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
}

/* ---------- Mobile menu ---------- */
function initMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    const toggle = document.getElementById('menu-toggle');
    const closeBtn = document.getElementById('menu-close');
    if (!menu || !toggle) return;

    const open = () => {
        menu.hidden = false;
        requestAnimationFrame(() => menu.classList.add('is-open'));
        toggle.setAttribute('aria-expanded', 'true');
        document.body.classList.add('modal-open');
        closeBtn?.focus();
    };

    const close = () => {
        menu.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('modal-open');
        setTimeout(() => {
            menu.hidden = true;
            toggle.focus();
        }, 300);
    };

    toggle.addEventListener('click', open);
    closeBtn?.addEventListener('click', close);
    menu.querySelectorAll('a').forEach((link) => link.addEventListener('click', close));

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && menu.classList.contains('is-open')) close();
    });
}

/* ---------- Scroll reveal ---------- */
function initReveal() {
    const nodes = document.querySelectorAll('.reveal');
    if (!nodes.length) return;

    if (prefersReducedMotion()) {
        nodes.forEach((el) => el.classList.add('is-visible'));
        return;
    }

    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
    );

    nodes.forEach((el) => io.observe(el));
}

/* ---------- Hero collage stagger ---------- */
function initCollage() {
    const collage = document.getElementById('hero-collage');
    if (!collage) return;

    if (prefersReducedMotion()) {
        collage.classList.add('is-visible');
        return;
    }

    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    collage.classList.add('is-visible');
                    io.disconnect();
                }
            });
        },
        { threshold: 0.2 }
    );

    io.observe(collage);
    // Also trigger on load if already in view
    requestAnimationFrame(() => collage.classList.add('is-visible'));
}

/* ---------- Count-up stats ---------- */
function animateCount(el, target, duration = 1600) {
    if (prefersReducedMotion()) {
        el.textContent = String(target);
        return;
    }

    const start = performance.now();
    const from = 0;

    const tick = (now) => {
        const progress = Math.min((now - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        el.textContent = String(Math.round(from + (target - from) * eased));
        if (progress < 1) requestAnimationFrame(tick);
    };

    requestAnimationFrame(tick);
}

function initCounters() {
    const counters = document.querySelectorAll('[data-count]');
    if (!counters.length) return;

    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                const el = entry.target;
                const target = Number(el.getAttribute('data-count'));
                animateCount(el, target);
                io.unobserve(el);
            });
        },
        { threshold: 0.4 }
    );

    counters.forEach((el) => io.observe(el));
}

/* ---------- Modal helpers ---------- */
function openModal(modal, trigger) {
    if (!modal) return;
    modal.hidden = false;
    document.body.classList.add('modal-open');
    requestAnimationFrame(() => modal.classList.add('is-open'));
    modal.dataset.triggerId = trigger?.id || '';
    const focusable = modal.querySelector('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
    focusable?.focus();
}

function closeModal(modal) {
    if (!modal) return;
    modal.classList.remove('is-open');
    document.body.classList.remove('modal-open');
    setTimeout(() => {
        modal.hidden = true;
    }, 300);
}

function bindModalChrome(modal) {
    if (!modal) return;

    modal.querySelectorAll('[data-modal-close]').forEach((btn) => {
        btn.addEventListener('click', () => closeModal(modal));
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal(modal);
    });
}

/* ---------- Gallery lightbox ---------- */
function initGallery() {
    const allItems = () =>
        Array.from(document.querySelectorAll('[data-gallery-index]')).filter(
            (el) => !el.classList.contains('is-hidden') && el.offsetParent !== null
        );
    const modal = document.getElementById('gallery-modal');
    if (!document.querySelector('[data-gallery-index]') || !modal) return;

    const img = document.getElementById('gallery-modal-image');
    const title = document.getElementById('gallery-modal-title');
    const desc = document.getElementById('gallery-modal-desc');
    const date = document.getElementById('gallery-modal-date');
    const category = document.getElementById('gallery-modal-category');
    const counter = document.getElementById('gallery-counter');
    const prevBtn = document.getElementById('gallery-prev');
    const nextBtn = document.getElementById('gallery-next');

    let index = 0;

    const render = () => {
        const items = allItems();
        if (!items.length) return;
        index = ((index % items.length) + items.length) % items.length;
        const el = items[index];
        img.src = el.dataset.src;
        img.alt = el.dataset.title || '';
        title.textContent = el.dataset.title || '';
        desc.textContent = el.dataset.desc || '';
        date.textContent = el.dataset.date || '';
        category.textContent = el.dataset.category || '';
        counter.textContent = `${index + 1} / ${items.length}`;
    };

    const show = (el) => {
        const items = allItems();
        index = Math.max(0, items.indexOf(el));
        render();
        openModal(modal, el);
    };

    document.querySelectorAll('[data-gallery-index]').forEach((el) => {
        el.addEventListener('click', () => show(el));
    });

    prevBtn?.addEventListener('click', () => {
        index -= 1;
        render();
    });

    nextBtn?.addEventListener('click', () => {
        index += 1;
        render();
    });

    bindModalChrome(modal);

    document.addEventListener('keydown', (e) => {
        if (!modal.classList.contains('is-open')) return;
        if (e.key === 'Escape') closeModal(modal);
        if (e.key === 'ArrowLeft') {
            index -= 1;
            render();
        }
        if (e.key === 'ArrowRight') {
            index += 1;
            render();
        }
    });
}

/* ---------- Product modal ---------- */
function initProducts() {
    const buttons = document.querySelectorAll('[data-product-index]');
    const modal = document.getElementById('product-modal');
    if (!buttons.length || !modal) return;

    const img = document.getElementById('product-modal-image');
    const title = document.getElementById('product-modal-title');
    const desc = document.getElementById('product-modal-desc');
    const category = document.getElementById('product-modal-category');
    const price = document.getElementById('product-modal-price');
    const variantsWrap = document.getElementById('product-modal-variants');
    const wa = document.getElementById('product-wa');

    buttons.forEach((btn) => {
        btn.addEventListener('click', () => {
            img.src = btn.dataset.img;
            img.alt = btn.dataset.title || '';
            title.textContent = btn.dataset.title || '';
            desc.textContent = btn.dataset.desc || '';
            category.textContent = btn.dataset.category || '';
            price.textContent = btn.dataset.price || '';

            if (variantsWrap) {
                variantsWrap.innerHTML = '';
                const variants = (btn.dataset.variants || '')
                    .split(',')
                    .map((v) => v.trim())
                    .filter(Boolean);
                variants.forEach((variant, i) => {
                    const chip = document.createElement('button');
                    chip.type = 'button';
                    chip.className = `variant-chip${i === 0 ? ' is-active' : ''}`;
                    chip.textContent = variant;
                    chip.addEventListener('click', () => {
                        variantsWrap.querySelectorAll('.variant-chip').forEach((c) => c.classList.remove('is-active'));
                        chip.classList.add('is-active');
                    });
                    variantsWrap.appendChild(chip);
                });
            }

            if (wa) {
                const text = encodeURIComponent(`Halo, saya tertarik dengan ${btn.dataset.title}`);
                wa.href = `https://wa.me/6281234567890?text=${text}`;
            }
            openModal(modal, btn);
        });
    });

    bindModalChrome(modal);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('is-open')) closeModal(modal);
    });
}

/* ---------- Filters / search / sort ---------- */
function initFilters() {
    document.querySelectorAll('[data-filter-group]').forEach((bar) => {
        const group = bar.dataset.filterGroup;
        const chips = bar.querySelectorAll('[data-filter]');

        chips.forEach((chip) => {
            chip.addEventListener('click', () => {
                chips.forEach((c) => {
                    c.classList.remove('is-active');
                    c.setAttribute('aria-selected', 'false');
                });
                chip.classList.add('is-active');
                chip.setAttribute('aria-selected', 'true');

                const value = chip.dataset.filter;

                if (group === 'gallery') {
                    document.querySelectorAll('.masonry__item').forEach((item) => {
                        const show = value === 'Semua' || item.dataset.category === value;
                        item.classList.toggle('is-hidden', !show);
                    });
                }

                if (group === 'articles') {
                    applyArticleFilters();
                }

                if (group === 'products') {
                    applyProductFilters();
                }
            });
        });
    });
}

function applyArticleFilters() {
    const active = document.querySelector('[data-filter-group="articles"] .filter-chip.is-active');
    const category = active?.dataset.filter || 'Semua';
    const query = (document.getElementById('article-search')?.value || '').trim().toLowerCase();

    document.querySelectorAll('[data-article-item]').forEach((item) => {
        const matchCat = category === 'Semua' || item.dataset.category === category;
        const matchQuery = !query || (item.dataset.title || '').includes(query);
        item.classList.toggle('is-hidden', !(matchCat && matchQuery));
    });
}

function initArticleSearch() {
    const input = document.getElementById('article-search');
    if (!input) return;
    input.addEventListener('input', applyArticleFilters);
}

function applyProductFilters() {
    const active = document.querySelector('[data-filter-group="products"] .filter-chip.is-active');
    const category = active?.dataset.filter || 'Semua';
    const sort = document.getElementById('product-sort')?.value || 'newest';
    const grid = document.getElementById('product-grid');
    if (!grid) return;

    const items = Array.from(grid.querySelectorAll('[data-product-item]'));

    items.forEach((item) => {
        const show = category === 'Semua' || item.dataset.category === category;
        item.classList.toggle('is-hidden', !show);
    });

    const visible = items.filter((item) => !item.classList.contains('is-hidden'));
    visible.sort((a, b) => {
        const pa = Number(a.dataset.price);
        const pb = Number(b.dataset.price);
        if (sort === 'price-asc') return pa - pb;
        if (sort === 'price-desc') return pb - pa;
        return Number(a.dataset.index) - Number(b.dataset.index);
    });

    visible.forEach((item) => grid.appendChild(item));
}

function initProductSort() {
    const select = document.getElementById('product-sort');
    if (!select) return;
    select.addEventListener('change', applyProductFilters);
}

/* ---------- Contact form ---------- */
function showToast(message) {
    const toast = document.getElementById('toast');
    if (!toast) return;
    toast.hidden = false;
    toast.textContent = message;
    requestAnimationFrame(() => toast.classList.add('is-visible'));
    setTimeout(() => {
        toast.classList.remove('is-visible');
        setTimeout(() => {
            toast.hidden = true;
        }, 300);
    }, 2800);
}

function initContactForm() {
    const form = document.getElementById('contact-form');
    if (!form) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        let valid = true;

        const fields = [
            { id: 'name', message: 'Nama wajib diisi.' },
            { id: 'email', message: 'Email tidak valid.', test: (v) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v) },
            { id: 'phone', message: 'No. telepon wajib diisi.' },
            { id: 'subject', message: 'Pilih subjek.' },
            { id: 'message', message: 'Pesan wajib diisi.' },
        ];

        fields.forEach(({ id, message, test }) => {
            const input = form.querySelector(`#${id}`);
            const error = form.querySelector(`[data-error-for="${id}"]`);
            const value = (input?.value || '').trim();
            const ok = test ? test(value) : Boolean(value);
            if (error) error.textContent = ok ? '' : message;
            if (!ok) valid = false;
        });

        if (!valid) return;

        form.reset();
        showToast('Pesan terkirim. Terima kasih.');
    });
}

function initCopyLink() {
    const btn = document.getElementById('copy-link');
    if (!btn) return;
    btn.addEventListener('click', async () => {
        const url = btn.dataset.url || window.location.href;
        try {
            await navigator.clipboard.writeText(url);
            showToast('Tautan disalin');
        } catch {
            showToast('Gagal menyalin tautan');
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initHeader();
    initMobileMenu();
    initReveal();
    initCollage();
    initCounters();
    initGallery();
    initProducts();
    initFilters();
    initArticleSearch();
    initProductSort();
    initContactForm();
    initCopyLink();
});
