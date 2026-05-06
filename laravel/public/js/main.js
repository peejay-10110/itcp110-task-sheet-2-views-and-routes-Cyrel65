/* ===================================
   CYREL LORICA PORTFOLIO - MAIN.JS
=================================== */

document.addEventListener('DOMContentLoaded', () => {

  // ===== FLOATING BUBBLES =====
  const bubblesContainer = document.querySelector('.bubbles');
  if (bubblesContainer) {
    const colors = ['#7EC8E3', '#B8E4F2', '#FFB5C8', '#B5D8FF', '#C5F0A4', '#FFE4A0'];
    for (let i = 0; i < 18; i++) {
      const bubble = document.createElement('div');
      bubble.classList.add('bubble');
      const size = Math.random() * 80 + 20;
      bubble.style.cssText = `
        width: ${size}px;
        height: ${size}px;
        left: ${Math.random() * 100}%;
        bottom: -${size}px;
        background: ${colors[Math.floor(Math.random() * colors.length)]};
        animation-duration: ${Math.random() * 20 + 15}s;
        animation-delay: ${Math.random() * 12}s;
      `;
      bubblesContainer.appendChild(bubble);
    }
  }

  // ===== NAVBAR TOGGLE =====
  const toggle = document.querySelector('.nav-toggle');
  const navLinks = document.querySelector('.nav-links');
  if (toggle && navLinks) {
    toggle.addEventListener('click', () => {
      navLinks.classList.toggle('open');
      toggle.setAttribute('aria-expanded', navLinks.classList.contains('open'));
    });
    // Close on link click (mobile)
    navLinks.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => navLinks.classList.remove('open'));
    });
  }

  // ===== ACTIVE NAV LINK =====
  const currentPath = window.location.pathname.replace(/\/$/, '') || '/';
  document.querySelectorAll('.nav-links a').forEach(a => {
    const href = a.getAttribute('href').replace(/\/$/, '') || '/';
    if (href === currentPath) a.classList.add('active');
  });

  // ===== SKILL BAR ANIMATION =====
  const skillBars = document.querySelectorAll('.skill-bar-fill');
  if (skillBars.length) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.width = entry.target.dataset.width;
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });
    skillBars.forEach(bar => {
      const w = bar.style.width;
      bar.style.width = '0';
      bar.dataset.width = w;
      observer.observe(bar);
    });
  }

  // ===== SCROLL FADE IN =====
  const fadeEls = document.querySelectorAll('.card, .hobby-card, .achievement-item, .school-item, .project-card, .exp-card, .skill-pill');
  if (fadeEls.length && 'IntersectionObserver' in window) {
    const fadeObs = new IntersectionObserver(entries => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          entry.target.style.animationDelay = (i * 0.05) + 's';
          entry.target.classList.add('fade-in-visible');
          fadeObs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    fadeEls.forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
      fadeObs.observe(el);
    });

    // Re-use the class addition to trigger transition
    document.addEventListener('scroll', () => {}, { passive: true });
  }

  // Manual trigger for fade
  const style = document.createElement('style');
  style.textContent = `.fade-in-visible { opacity: 1 !important; transform: translateY(0) !important; }`;
  document.head.appendChild(style);

  // ===== HERO TYPING EFFECT =====
  const typeEl = document.querySelector('.typing-text');
  if (typeEl) {
    const words = ['Student 📚', 'Developer 💻', 'Future Teacher 🍎', 'Chess Player ♟️', 'Singer 🎤'];
    let wIndex = 0, cIndex = 0, deleting = false;
    function type() {
      const word = words[wIndex];
      if (!deleting) {
        typeEl.textContent = word.slice(0, cIndex + 1);
        cIndex++;
        if (cIndex === word.length) { deleting = true; setTimeout(type, 1600); return; }
      } else {
        typeEl.textContent = word.slice(0, cIndex - 1);
        cIndex--;
        if (cIndex === 0) { deleting = false; wIndex = (wIndex + 1) % words.length; }
      }
      setTimeout(type, deleting ? 60 : 95);
    }
    type();
  }

  // ===== NAVBAR SHADOW ON SCROLL =====
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', () => {
      navbar.style.boxShadow = window.scrollY > 10
        ? '0 8px 32px rgba(126,200,227,0.22)'
        : '0 4px 24px rgba(126,200,227,0.12)';
    }, { passive: true });
  }

});
