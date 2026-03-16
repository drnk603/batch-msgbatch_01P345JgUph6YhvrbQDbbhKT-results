(function (global) {
  'use strict';

  global.__app = global.__app || {};
  var __app = global.__app;

  function debounce(fn, delay) {
    var timer;
    return function () {
      var ctx = this;
      var args = arguments;
      clearTimeout(timer);
      timer = setTimeout(function () {
        fn.apply(ctx, args);
      }, delay);
    };
  }

  function getHeaderHeight() {
    var header = document.querySelector('.navbar');
    return header ? header.getBoundingClientRect().height : 72;
  }

  function isHomePage() {
    var path = global.location.pathname;
    return path === '/' || path === '/index.html' || path.endsWith('/index.html');
  }

  function initBurger() {
    if (__app.burgerInit) return;
    __app.burgerInit = true;

    var toggler = document.querySelector('.navbar-toggler');
    var mobileNav = document.querySelector('.mobile-nav');
    var overlay = document.querySelector('.mobile-nav-overlay');
    var body = document.body;

    if (!toggler || !mobileNav) return;

    var navbarNav = document.querySelector('.navbar-nav');
    if (navbarNav && mobileNav) {
      var existingList = mobileNav.querySelector('.mobile-nav__list');
      if (!existingList) {
        var sourceLinks = navbarNav.querySelectorAll('.nav-link');
        var ul = document.createElement('ul');
        ul.className = 'mobile-nav__list';
        for (var i = 0; i < sourceLinks.length; i++) {
          var li = document.createElement('li');
          li.className = 'mobile-nav__item';
          var a = document.createElement('a');
          a.href = sourceLinks[i].getAttribute('href') || '#';
          a.className = 'mobile-nav__link';
          a.textContent = sourceLinks[i].textContent.trim();
          li.appendChild(a);
          ul.appendChild(li);
        }
        mobileNav.appendChild(ul);
      }
    }

    function isOpen() {
      return mobileNav.classList.contains('is-open');
    }

    function openMenu() {
      mobileNav.classList.add('is-open');
      toggler.classList.add('is-active');
      toggler.setAttribute('aria-expanded', 'true');
      if (overlay) overlay.classList.add('is-visible');
      body.classList.add('u-no-scroll');
    }

    function closeMenu() {
      mobileNav.classList.remove('is-open');
      toggler.classList.remove('is-active');
      toggler.setAttribute('aria-expanded', 'false');
      if (overlay) overlay.classList.remove('is-visible');
      body.classList.remove('u-no-scroll');
    }

    toggler.addEventListener('click', function () {
      if (isOpen()) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    if (overlay) {
      overlay.addEventListener('click', function () {
        closeMenu();
      });
    }

    document.addEventListener('keydown', function (e) {
      if (!isOpen()) return;
      if (e.key === 'Escape' || e.keyCode === 27) {
        closeMenu();
        toggler.focus();
      }
    });

    var mobileLinks = mobileNav.querySelectorAll('.mobile-nav__link');
    for (var j = 0; j < mobileLinks.length; j++) {
      mobileLinks[j].addEventListener('click', function () {
        closeMenu();
      });
    }

    global.addEventListener('resize', debounce(function () {
      if (global.innerWidth >= 768) {
        closeMenu();
      }
    }, 150));
  }

  function initAnchors() {
    if (__app.anchorsInit) return;
    __app.anchorsInit = true;

    var anchors = document.querySelectorAll('a[href^="#"]');

    for (var i = 0; i < anchors.length; i++) {
      (function (link) {
        var href = link.getAttribute('href');
        if (!href || href === '#' || href === '#!') return;

        if (!isHomePage()) {
          if (href.charAt(0) === '#' && href.length > 1) {
            link.setAttribute('href', '/' + href);
            return;
          }
        }

        link.addEventListener('click', function (e) {
          var target = link.getAttribute('href');
          if (!target || target === '#' || target === '#!') return;
          if (target.charAt(0) !== '#') return;

          var el = document.querySelector(target);
          if (!el) return;

          e.preventDefault();

          var offset = getHeaderHeight();
          var top = el.getBoundingClientRect().top + global.pageYOffset - offset;

          global.scrollTo({ top: top, behavior: 'smooth' });

          if (history && history.pushState) {
            history.pushState(null, null, target);
          }
        });
      })(anchors[i]);
    }
  }

  function initScrollSpy() {
    if (__app.scrollSpyInit) return;
    __app.scrollSpyInit = true;

    var navLinks = document.querySelectorAll('.navbar-nav .nav-link, .mobile-nav .mobile-nav__link, .sidebar-nav__link');

    function getSections() {
      var sections = [];
      for (var i = 0; i < navLinks.length; i++) {
        var href = navLinks[i].getAttribute('href');
        if (!href) continue;
        var hash = href.indexOf('#') !== -1 ? '#' + href.split('#')[1] : null;
        if (!hash || hash === '#') continue;
        var el = document.querySelector(hash);
        if (el) sections.push({ el: el, links: [] });
      }

      for (var j = 0; j < navLinks.length; j++) {
        var h = navLinks[j].getAttribute('href');
        if (!h) continue;
        var hh = h.indexOf('#') !== -1 ? '#' + h.split('#')[1] : null;
        if (!hh || hh === '#') continue;
        for (var k = 0; k < sections.length; k++) {
          if (sections[k].el.id && hh === '#' + sections[k].el.id) {
            sections[k].links.push(navLinks[j]);
          }
        }
      }
      return sections;
    }

    function onScroll() {
      var sections = getSections();
      if (!sections.length) return;

      var scrollY = global.pageYOffset;
      var offset = getHeaderHeight() + 16;
      var active = null;

      for (var i = 0; i < sections.length; i++) {
        var top = sections[i].el.getBoundingClientRect().top + scrollY - offset;
        if (scrollY >= top) {
          active = sections[i];
        }
      }

      for (var j = 0; j < navLinks.length; j++) {
        navLinks[j].classList.remove('active');
        navLinks[j].removeAttribute('aria-current');
      }

      if (active) {
        for (var k = 0; k < active.links.length; k++) {
          active.links[k].classList.add('active');
          active.links[k].setAttribute('aria-current', 'true');
        }
      }
    }

    global.addEventListener('scroll', debounce(onScroll, 80), { passive: true });
  }

  function initActiveNav() {
    if (__app.activeNavInit) return;
    __app.activeNavInit = true;

    var links = document.querySelectorAll('.navbar-nav .nav-link, .mobile-nav__link, .sidebar-nav__link');
    var currentPath = global.location.pathname;

    for (var i = 0; i < links.length; i++) {
      links[i].removeAttribute('aria-current');
      links[i].classList.remove('is-active', 'active');
    }

    for (var j = 0; j < links.length; j++) {
      var link = links[j];
      var href = link.getAttribute('href');
      if (!href) continue;

      var linkPath = href.split('#')[0].split('?')[0];
      var matched = false;

      if (
        (linkPath === '/' || linkPath === '/index.html' || linkPath === '') &&
        (currentPath === '/' || currentPath === '/index.html')
      ) {
        matched = true;
      } else if (linkPath && linkPath !== '/' && currentPath === linkPath) {
        matched = true;
      }

      if (matched) {
        link.setAttribute('aria-current', 'page');
        link.classList.add('is-active', 'active');
      }
    }
  }

  function initScrollToTop() {
    if (__app.scrollTopInit) return;
    __app.scrollTopInit = true;

    var btn = document.querySelector('.js-scroll-top, [data-scroll-top], #scrollToTop, .scroll-to-top');
    if (!btn) return;

    function toggleVisibility() {
      if (global.pageYOffset > 400) {
        btn.classList.add('is-visible');
      } else {
        btn.classList.remove('is-visible');
      }
    }

    btn.addEventListener('click', function (e) {
      e.preventDefault();
      global.scrollTo({ top: 0, behavior: 'smooth' });
    });

    global.addEventListener('scroll', debounce(toggleVisibility, 100), { passive: true });
    toggleVisibility();
  }

  function initCountUp() {
    if (__app.countUpInit) return;
    __app.countUpInit = true;

    var stats = document.querySelectorAll('.c-stat__number[data-count], [data-countup]');
    if (!stats.length) return;

    var started = {};

    function animateCount(el) {
      var id = el.dataset.countupId;
      if (started[id]) return;
      started[id] = true;

      var target = parseFloat(el.getAttribute('data-count') || el.getAttribute('data-countup') || el.textContent);
      if (isNaN(target)) return;

      var suffix = el.getAttribute('data-suffix') || '';
      var prefix = el.getAttribute('data-prefix') || '';
      var duration = 1800;
      var startTime = null;
      var startValue = 0;

      function step(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = Math.min((timestamp - startTime) / duration, 1);
        var eased = 1 - Math.pow(1 - progress, 3);
        var current = Math.round(startValue + (target - startValue) * eased);
        el.textContent = prefix + current + suffix;
        if (progress < 1) {
          requestAnimationFrame(step);
        } else {
          el.textContent = prefix + target + suffix;
        }
      }

      requestAnimationFrame(step);
    }

    var observer = new IntersectionObserver(function (entries) {
      for (var i = 0; i < entries.length; i++) {
        if (entries[i].isIntersecting) {
          animateCount(entries[i].target);
        }
      }
    }, { threshold: 0.3 });

    for (var i = 0; i < stats.length; i++) {
      stats[i].dataset.countupId = 'cu_' + i;
      observer.observe(stats[i]);
    }
  }

  function initModal() {
    if (__app.modalInit) return;
    __app.modalInit = true;

    var overlay = document.getElementById('modal-overlay');
    var modal = document.getElementById('privacy-modal');
    var triggers = document.querySelectorAll('[data-modal="privacy"], .js-privacy-modal, a[href="#privacy-policy"]');
    var closeBtns = document.querySelectorAll('[data-modal-close], .js-modal-close');

    if (!overlay && !modal && !triggers.length) return;

    if (!overlay) {
      overlay = document.createElement('div');
      overlay.id = 'modal-overlay';
      overlay.className = 'modal-overlay';
      overlay.setAttribute('role', 'presentation');
      document.body.appendChild(overlay);
    }

    if (!modal) {
      modal = document.createElement('div');
      modal.id = 'privacy-modal';
      modal.className = 'c-modal';
      modal.setAttribute('role', 'dialog');
      modal.setAttribute('aria-modal', 'true');
      modal.setAttribute('aria-labelledby', 'privacy-modal-title');
      modal.innerHTML =
        '<div class="c-modal__inner">' +
        '<div class="c-modal__header">' +
        '<h2 id="privacy-modal-title" class="c-modal__title">Privacy Policy</h2>' +
        '<button class="c-modal__close js-modal-close" aria-label="Close">&times;</button>' +
        '</div>' +
        '<div class="c-modal__body" id="privacy-modal-body"></div>' +
        '</div>';
      document.body.appendChild(modal);
    }

    function openModal() {
      modal.classList.add('is-open');
      overlay.classList.add('is-visible');
      document.body.classList.add('u-no-scroll');
      modal.focus();
    }

    function closeModal() {
      modal.classList.remove('is-open');
      overlay.classList.remove('is-visible');
      document.body.classList.remove('u-no-scroll');
    }

    for (var i = 0; i < triggers.length; i++) {
      triggers[i].addEventListener('click', function (e) {
        e.preventDefault();
        openModal();
      });
    }

    overlay.addEventListener('click', closeModal);

    document.addEventListener('click', function (e) {
      if (e.target.classList.contains('js-modal-close') || e.target.closest('.js-modal-close')) {
        closeModal();
      }
    });

    document.addEventListener('keydown', function (e) {
      if ((e.key === 'Escape' || e.keyCode === 27) && modal.classList.contains('is-open')) {
        closeModal();
      }
    });
  }

  function initNotify() {
    if (__app.notifyInit) return;
    __app.notifyInit = true;

    var container = document.getElementById('toast-container');
    if (!container) {
      container = document.createElement('div');
      container.id = 'toast-container';
      container.setAttribute('role', 'alert');
      container.setAttribute('aria-live', 'polite');
      container.setAttribute('aria-atomic', 'true');
      container.className = 'toast-container';
      document.body.appendChild(container);
    }

    __app.notify = function (message, type) {
      var alertType = type || 'success';
      var toast = document.createElement('div');
      toast.className = 'c-alert c-alert--' + (alertType === 'danger' ? 'error' : alertType) + ' toast-item';
      toast.setAttribute('role', 'alert');

      var msg = document.createElement('span');
      msg.textContent = message;

      var closeBtn = document.createElement('button');
      closeBtn.type = 'button';
      closeBtn.className = 'toast-close';
      closeBtn.setAttribute('aria-label', 'Close');
      closeBtn.textContent = '\u00D7';
      closeBtn.addEventListener('click', function () {
        removeToast(toast);
      });

      toast.appendChild(msg);
      toast.appendChild(closeBtn);
      container.appendChild(toast);

      setTimeout(function () {
        removeToast(toast);
      }, 5000);
    };

    function removeToast(toast) {
      toast.classList.add('toast-hiding');
      setTimeout(function () {
        if (toast.parentNode) toast.parentNode.removeChild(toast);
      }, 300);
    }
  }

  function showFieldError(field, message) {
    clearFieldError(field);
    field.classList.add('is-invalid');
    var err = document.createElement('span');
    err.className = 'c-form__error field-error-msg';
    err.textContent = message;
    err.setAttribute('role', 'alert');
    field.parentNode.insertBefore(err, field.nextSibling);
  }

  function clearFieldError(field) {
    field.classList.remove('is-invalid');
    var parent = field.parentNode;
    var existing = parent.querySelector('.field-error-msg');
    if (existing) parent.removeChild(existing);
  }

  function clearAllErrors(form) {
    var invalids = form.querySelectorAll('.is-invalid');
    for (var i = 0; i < invalids.length; i++) {
      invalids[i].classList.remove('is-invalid');
    }
    var msgs = form.querySelectorAll('.field-error-msg');
    for (var j = 0; j < msgs.length; j++) {
      if (msgs[j].parentNode) msgs[j].parentNode.removeChild(msgs[j]);
    }
  }

  function validateForm(form) {
    clearAllErrors(form);
    var valid = true;
    var firstError = null;

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var phoneRegex = /^[-\ds+()[\]]{7,20}$/;

    var fields = form.querySelectorAll('input, textarea, select');

    for (var i = 0; i < fields.length; i++) {
      var field = fields[i];
      var name = field.name || '';
      var type = (field.type || '').toLowerCase();
      var value = field.value ? field.value.trim() : '';
      var tagName = field.tagName.toLowerCase();

      if (field.classList.contains('js-honeypot') || name === 'website' || name === 'honeypot') {
        continue;
      }

      if (!field.required) continue;

      if (type === 'checkbox') {
        if (!field.checked) {
          showFieldError(field, 'This field is required.');
          valid = false;
          if (!firstError) firstError = field;
        }
        continue;
      }

      if (!value) {
        showFieldError(field, 'This field is required.');
        valid = false;
        if (!firstError) firstError = field;
        continue;
      }

      if (type === 'email' || name.indexOf('email') !== -1) {
        if (!emailRegex.test(value)) {
          showFieldError(field, 'Please enter a valid email address.');
          valid = false;
          if (!firstError) firstError = field;
          continue;
        }
      }

      if (type === 'tel' || name.indexOf('phone') !== -1 || name.indexOf('tel') !== -1) {
        if (!phoneRegex.test(value)) {
          showFieldError(field, 'Please enter a valid phone number (7\u201320 digits).');
          valid = false;
          if (!firstError) firstError = field;
          continue;
        }
      }

      if ((tagName === 'textarea' || name.indexOf('message') !== -1 || name.indexOf('msg') !== -1) && tagName !== 'input') {
        if (value.length < 10) {
          showFieldError(field, 'Message must be at least 10 characters.');
          valid = false;
          if (!firstError) firstError = field;
          continue;
        }
      }

      if (name.indexOf('name') !== -1 && type !== 'email' && type !== 'tel') {
        if (value.length < 2) {
          showFieldError(field, 'Name must be at least 2 characters.');
          valid = false;
          if (!firstError) firstError = field;
          continue;
        }
      }
    }

    if (firstError) firstError.focus();
    return valid;
  }

  function initForms() {
    if (__app.formsInit) return;
    __app.formsInit = true;

    var forms = document.querySelectorAll('form');

    for (var i = 0; i < forms.length; i++) {
      (function (form) {
        form.setAttribute('novalidate', '');

        var honeypot = form.querySelector('.js-honeypot, input[name="website"], input[name="honeypot"]');
        if (!honeypot) {
          honeypot = document.createElement('input');
          honeypot.type = 'text';
          honeypot.name = 'website';
          honeypot.className = 'js-honeypot';
          honeypot.setAttribute('tabindex', '-1');
          honeypot.setAttribute('autocomplete', 'off');
          honeypot.setAttribute('aria-hidden', 'true');
          form.appendChild(honeypot);
        }

        var submitTime = Date.now();

        form.addEventListener('submit', function (e) {
          e.preventDefault();
          e.stopPropagation();

          var honey = form.querySelector('.js-honeypot, input[name="website"]');
          if (honey && honey.value) {
            return;
          }

          var elapsed = Date.now() - submitTime;
          if (elapsed < 1500) {
            return;
          }

          if (!validateForm(form)) {
            return;
          }

          var submitBtn = form.querySelector('[type="submit"]');
          var originalText = '';

          if (submitBtn) {
            originalText = submitBtn.textContent;
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending\u2026';
            submitBtn.classList.add('is-loading');
          }

          function onSuccess() {
            if (__app.notify) {
              __app.notify('Thank you! Your message has been sent successfully.', 'success');
            }
            form.reset();
            clearAllErrors(form);
            setTimeout(function () {
              global.location.href = 'thank_you.html';
            }, 800);
          }

          function onError(isOffline) {
            var msg = isOffline
              ? 'Connection error, please try again later.'
              : 'Error sending. Please try again or contact us directly.';
            if (__app.notify) __app.notify(msg, 'danger');
          }

          function onFinally() {
            if (submitBtn) {
              submitBtn.disabled = false;
              submitBtn.textContent = originalText;
              submitBtn.classList.remove('is-loading');
            }
          }

          if (!global.navigator.onLine) {
            onError(true);
            onFinally();
            return;
          }

          var data = {};
          var fields = form.elements;
          for (var f = 0; f < fields.length; f++) {
            var field = fields[f];
            if (field.name && field.name !== 'website' && field.name !== 'honeypot') {
              if (field.type === 'checkbox') {
                data[field.name] = field.checked;
              } else {
                data[field.name] = field.value;
              }
            }
          }

          var action = form.getAttribute('action') || 'process.php';

          fetch(action, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
          })
            .then(function (response) {
              if (!response.ok) throw new Error('server');
              return response.json();
            })
            .then(function () {
              onSuccess();
            })
            .catch(function (err) {
              var offline = err && err.message === 'Failed to fetch';
              onError(offline);
            })
            .finally ? fetch(action, {
              method: 'POST',
              headers: { 'Content-Type': 'application/json' },
              body: JSON.stringify(data)
            })
            .then(function (r) {
              if (!r.ok) throw new Error('server');
              return r.json();
            })
            .then(function () { onSuccess(); })
            .catch(function (err) {
              var offline = !global.navigator.onLine || (err && err.message === 'Failed to fetch');
              onError(offline);
            })
            .finally(function () { onFinally(); })
            : (function () {
              fetch(action, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
              })
                .then(function (r) {
                  if (!r.ok) throw new Error('server');
                  return r.json();
                })
                .then(function () { onSuccess(); })
                .catch(function (err) {
                  var offline = !global.navigator.onLine || (err && err.message === 'Failed to fetch');
                  onError(offline);
                });

              setTimeout(onFinally, 8000);
            })();