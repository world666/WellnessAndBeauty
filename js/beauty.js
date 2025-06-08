  document.addEventListener('DOMContentLoaded', function () {
    // --- Слайдер Beauty ---
    const slider = document.getElementById('beautySlider');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const scrollAmount = 320;

    if (slider && prevBtn && nextBtn) {
      slider.addEventListener('wheel', function (e) {
        e.preventDefault();
        slider.scrollBy({
          left: e.deltaY > 0 ? scrollAmount : -scrollAmount,
          behavior: 'smooth'
        });
      });

      prevBtn.addEventListener('click', () => {
        slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
      });

      nextBtn.addEventListener('click', () => {
        slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
      });

      setInterval(() => {
        slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
      }, 5000);
    }

    // --- Toggle Collapse ---
    document.querySelectorAll('.toggle-details').forEach(button => {
      const targetId = button.getAttribute('data-bs-target');
      const collapseElement = document.querySelector(targetId);
      if (!collapseElement) return;

      const bsCollapse = new bootstrap.Collapse(collapseElement, { toggle: false });

      button.addEventListener('click', function (e) {
        e.preventDefault();
        if (collapseElement.classList.contains('show')) {
          bsCollapse.hide();
        } else {
          bsCollapse.show();
        }
      });

      collapseElement.addEventListener('hidden.bs.collapse', () => {
        button.textContent = 'Details anzeigen';
        const icon = button.querySelector('i');
        if (icon) icon.classList.replace('bi-chevron-up', 'bi-chevron-down');
      });

      collapseElement.addEventListener('shown.bs.collapse', () => {
        button.textContent = 'Details verbergen';
        const icon = button.querySelector('i');
        if (icon) icon.classList.replace('bi-chevron-down', 'bi-chevron-up');
      });
    });

    // --- Плавное появление ---
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

    // --- Прозрачный Navbar при скролле ---
    window.addEventListener('scroll', function () {
      const navbar = document.querySelector('.navbar');
      if (navbar) {
        navbar.classList.toggle('scrolled', window.scrollY > 50);
      }
    });

    // --- Активная навигация ---
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
      link.addEventListener('click', function () {
        navLinks.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
      });
    });

    // --- Переключение логотипа при скролле ---
    window.addEventListener('scroll', function () {
      const scrollTop = window.scrollY;
      const logoImg = document.querySelector('.logo-img');
      const logoText = document.querySelector('.logo-text');
      if (logoImg && logoText) {
        if (scrollTop > 100) {
          logoImg.classList.add('d-none');
          logoText.classList.replace('d-none', 'd-block');
        } else {
          logoImg.classList.remove('d-none');
          logoText.classList.replace('d-block', 'd-none');
        }
      }
    });
  });
  
  // --- Текст про меня---
const toggleParagraph = document.getElementById('toggleParagraph');
  const extraParagraphs = document.getElementById('extraParagraphs');

  toggleParagraph.addEventListener('click', () => {
    const isCollapsed = toggleParagraph.classList.contains('collapsible-collapsed');

    if (isCollapsed) {
      // Разворачиваем второй абзац и показываем доп. абзацы
      toggleParagraph.classList.remove('collapsible-collapsed');
      toggleParagraph.classList.add('collapsible-expanded');

      extraParagraphs.classList.remove('collapsible-hidden');
      extraParagraphs.classList.add('collapsible-visible');
    } else {
      // Сворачиваем обратно
      toggleParagraph.classList.remove('collapsible-expanded');
      toggleParagraph.classList.add('collapsible-collapsed');

      extraParagraphs.classList.remove('collapsible-visible');
      extraParagraphs.classList.add('collapsible-hidden');
    }
  });