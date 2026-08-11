document.addEventListener('DOMContentLoaded', () => {
  // Mobile navigation
  const header = document.getElementById('site-header');
  const toggle = document.getElementById('mobile-menu-toggle');
  const mobileNav = document.getElementById('mobile-nav');

  const syncHeader = () => {
    if (!header) return;
    const scrolled = window.scrollY > 12;
    header.classList.toggle('border-b', scrolled);
    header.classList.toggle('border-border', scrolled);
    header.classList.toggle('bg-background/85', scrolled);
    header.classList.toggle('shadow-soft', scrolled);
    header.classList.toggle('backdrop-blur-xl', scrolled);
  };
  syncHeader();
  window.addEventListener('scroll', syncHeader, { passive: true });

  if (toggle && mobileNav) {
    toggle.addEventListener('click', () => {
      const open = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!open));
      toggle.setAttribute('aria-label', open ? 'Buka menu navigasi' : 'Tutup menu navigasi');
      mobileNav.hidden = open;
      toggle.innerHTML = open
        ? '<svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>'
        : '<svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 6 12 12M18 6 6 18"/></svg>';
    });
  }

  // Scroll reveal
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const revealItems = document.querySelectorAll('[data-reveal]');
  if (reduceMotion) revealItems.forEach(el => el.dataset.revealed = 'true');
  else if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.dataset.revealed = 'true';
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });
    revealItems.forEach(el => observer.observe(el));
  } else revealItems.forEach(el => el.dataset.revealed = 'true');

  // ========================================
  // ANIMATED COUNTERS
  // ========================================

  const counters = document.querySelectorAll('[data-counter]');

  const animateCounter = (element) => {
    const target = Number(element.dataset.counter || 0);
    const duration = Number(
      element.dataset.duration || 1600
    );

    const startTime = performance.now();

    const updateCounter = (currentTime) => {
      const elapsed = currentTime - startTime;

      const progress = Math.min(
        elapsed / duration,
        1
      );

      // Ease Out Cubic
      const eased =
        1 - Math.pow(1 - progress, 3);

      const currentValue =
        Math.round(target * eased);

      element.textContent =
        currentValue.toLocaleString('id-ID');

      if (progress < 1) {
        requestAnimationFrame(updateCounter);
      }
    };

    requestAnimationFrame(updateCounter);
  };


  if (counters.length > 0) {

    const counterObserver =
      new IntersectionObserver(
        (entries, observer) => {

          entries.forEach(entry => {

            if (entry.isIntersecting) {

              animateCounter(entry.target);

              // Jalankan hanya satu kali
              observer.unobserve(entry.target);
            }

          });

        },
        {
          threshold: 0.5,
          rootMargin: '0px 0px -100px 0px'
        }
      );


    counters.forEach(counter => {

      // Pastikan nilai awal selalu 0
      counter.textContent = '0';

      counterObserver.observe(counter);

    });

  }

  // Subtle parallax; disabled on small screens and reduced-motion.
  const parallax = [...document.querySelectorAll('[data-parallax]')];
  if (!reduceMotion && window.matchMedia('(min-width: 768px)').matches && parallax.length) {
    let frame = 0;
    const update = () => {
      frame = 0;
      parallax.forEach(node => {
        const rect = node.getBoundingClientRect();
        const speed = Number(node.dataset.speed || .12);
        const progress = (rect.top + rect.height / 2 - window.innerHeight / 2) / window.innerHeight;
        node.style.transform = `translate3d(0, ${(progress * speed * 100).toFixed(2)}px, 0)`;
      });
    };
    const request = () => { if (!frame) frame = requestAnimationFrame(update); };
    update();
    window.addEventListener('scroll', request, { passive: true });
    window.addEventListener('resize', request);
  }

  // Gallery modal
  const modal = document.getElementById('gallery-modal');
  const modalImage = document.getElementById('gallery-modal-image');
  const modalTitle = document.getElementById('gallery-modal-title');
  const modalMeta = document.getElementById('gallery-modal-meta');
  document.querySelectorAll('[data-gallery-open]').forEach(button => {
    button.addEventListener('click', () => {
      if (!modal) return;
      modalImage.src = button.dataset.image || '';
      modalImage.alt = button.dataset.title || '';
      modalTitle.textContent = button.dataset.title || '';
      modalMeta.textContent = `${button.dataset.category || ''} • ${button.dataset.date || ''}`;
      modal.hidden = false;
      document.body.classList.add('overflow-hidden');
    });
  });
  document.querySelectorAll('[data-gallery-close]').forEach(button => button.addEventListener('click', closeGallery));
  modal?.addEventListener('click', e => { if (e.target === modal) closeGallery(); });
  document.addEventListener('keydown', e => { if (e.key === 'Escape') closeGallery(); });
  function closeGallery() {
    if (!modal) return;
    modal.hidden = true;
    document.body.classList.remove('overflow-hidden');
  }
});
