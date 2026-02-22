<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="icon" type="image/x-icon" href="/img/profile_img.jpg">
  <meta name="description"
    content="Compassionate, evidence-based psychiatric care in a confidential and safe environment.">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400&family=Inter:wght@300;400;500;600&display=swap"
    rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Tailwind CSS (CDN) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            bg: '#FDFBF7',
            'bg-alt': '#F4F1EA',
            sage: {
              DEFAULT: '#8DA399',
              light: '#EAEFE9',
              dark: '#6E827A',
            },
            navy: {
              DEFAULT: '#1A2530',
              light: '#2C3E50',
            },
            gold: '#C5B398',
            text: {
              main: '#2D2D2D',
              muted: '#666666',
            }
          },
          fontFamily: {
            heading: ['Cormorant Garamond', 'serif'],
            body: ['Inter', 'sans-serif'],
          },
          borderRadius: {
            'xl': '12px',
            '2xl': '24px',
            '3xl': '32px',
          },
          boxShadow: {
            'soft': '0 20px 60px -15px rgba(26, 37, 48, 0.05)',
            'hover': '0 30px 60px -15px rgba(26, 37, 48, 0.1)',
          },
          animation: {
            'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
          },
          keyframes: {
            fadeInUp: {
              '0%': { opacity: '0', transform: 'translateY(30px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            }
          }
        }
      }
    }
  </script>

  <style>
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-track {
      background: #FDFBF7;
    }

    ::-webkit-scrollbar-thumb {
      background: #8DA399;
      border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #6E827A;
    }

    /* Mobile Menu Transition */
    .mobile-menu-open {
      clip-path: circle(150% at 100% 0);
    }

    .mobile-menu-closed {
      clip-path: circle(0% at 100% 0);
    }
  </style>
</head>

<body class="font-body text-text-main bg-bg antialiased overflow-x-hidden">

  <!-- Header -->
  <header id="header" class="fixed top-0 left-0 w-full z-50 transition-all duration-500 bg-bg/85 backdrop-blur-md py-6">
    <div class="max-w-[1240px] mx-auto px-6 flex justify-between items-center">
      <a href="{{ route('home.index') }}" class="font-heading text-2xl font-semibold text-navy flex items-center gap-3 group">
        Dr. Pranjal Joshi
      </a>

      <!-- Desktop Nav -->
      <nav class="hidden md:flex gap-10 items-center">
        <a href="{{ route('home.index') }}" class="text-base font-medium text-navy hover:text-sage transition-colors relative group">
          Home
          <span class="absolute bottom-[-4px] left-0 w-0 h-[1px] bg-sage transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="{{ route('home.about') }}" class="text-base font-medium text-navy hover:text-sage transition-colors relative group">
          About
          <span class="absolute bottom-[-4px] left-0 w-0 h-[1px] bg-sage transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="{{ route('home.contact') }}" class="text-base font-medium text-navy hover:text-sage transition-colors relative group">
          Contact
          <span class="absolute bottom-[-4px] left-0 w-0 h-[1px] bg-sage transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="{{ route('home.services') }}" class="text-base font-medium text-navy hover:text-sage transition-colors relative group">
          Services
          <span class="absolute bottom-[-4px] left-0 w-0 h-[1px] bg-sage transition-all duration-300 group-hover:w-full"></span>
        </a>

        <a href="{{ route('admin.create') }}"
          class="px-9 py-4 bg-navy text-white rounded-full font-medium text-sm tracking-wide hover:bg-sage hover:-translate-y-0.5 transition-all duration-300 shadow-lg hover:shadow-sage/30">
          Book Appointment
        </a>
      </nav>

      <!-- Mobile Toggle -->
      <button id="mobileToggle" class="md:hidden text-2xl text-navy focus:outline-none">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu"
      class="md:hidden absolute top-full left-0 w-full bg-white shadow-xl mobile-menu-closed transition-[clip-path] duration-500 ease-in-out">
      <div class="flex flex-col p-8 gap-6 items-center">
        <a href="#about" class="text-lg font-medium text-navy hover:text-sage">About</a>
        <a href="#services" class="text-lg font-medium text-navy hover:text-sage">Services</a>
        <a href="#approach" class="text-lg font-medium text-navy hover:text-sage">Approach</a>
        <a href="#resources" class="text-lg font-medium text-navy hover:text-sage">Resources</a>
        <a href="#contact" class="w-full text-center px-8 py-3 bg-navy text-white rounded-full font-medium">Book
          Appointment</a>
      </div>
    </div>
  </header>

    @yield('content')

  <!-- Footer -->
  <footer class="bg-navy text-white pt-20 pb-8">
    <div class="max-w-[1240px] mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
        <div class="footer-brand">
          <h3 class="font-heading text-3xl mb-6">Dr. Pranjal Joshi</h3>
          <p class="text-white/50 text-sm leading-relaxed mb-6">
            Dedicated to providing compassionate, evidence-based psychiatric care in a confidential and safe
            environment.
          </p>
          <div class="flex gap-4">
            <a href="https://www.linkedin.com/in/pranjal-joshi-4a1a381a8/" target="_blank"
              class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-sage transition-colors"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61574836624542" target="_blank"
              class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-sage transition-colors"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/therapyandthrive_atmeraki/" target="_blank"
              class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-sage transition-colors"><i class="fa-brands fa-instagram"></i></a>
          </div>
        </div>

        <div class="footer-col">
          <h4 class="font-body font-bold text-xs uppercase tracking-widest mb-6">Quick Links</h4>
          <ul class="space-y-4 text-sm text-white/50">
            <li><a href="{{ route('home.index') }}" class="hover:text-sage transition-colors">Home</a></li>
            <li><a href="{{ route('home.about') }}" class="hover:text-sage transition-colors">About Dr. Joshi</a></li>
            <li><a href="{{ route('home.services') }}" class="hover:text-sage transition-colors">Services</a></li>
            <li><a href="{{ route('home.contact') }}" class="hover:text-sage transition-colors">Contact</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4 class="font-body font-bold text-xs uppercase tracking-widest mb-6">Services</h4>
          <ul class="space-y-4 text-sm text-white/50">
            <li><a href="{{ route('home.services') }}#psychiatric-evaluation" class="hover:text-sage transition-colors">General Consultation</a></li>
            <li><a href="{{ route('home.services') }}#psychotherapy" class="hover:text-sage transition-colors">Anxiety & Stress Therapy</a></li>
            <li><a href="{{ route('home.services') }}#medication-management" class="hover:text-sage transition-colors">Depression Support</a></li>
            <li><a href="{{ route('home.services') }}#online-consultation" class="hover:text-sage transition-colors">Behavioral Therapy</a></li>
            <li><a href="{{ route('home.services') }}#online-consultation" class="hover:text-sage transition-colors">Follow-up Sessions</a></li>
            <li><a href="{{ route('home.services') }}#online-consultation" class="hover:text-sage transition-colors">Mental Wellness Coaching</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4 class="font-body font-bold text-xs uppercase tracking-widest mb-6">Legal</h4>
          <ul class="space-y-4 text-sm text-white/50">
            <li><a href="{{ route('home.privacy_policy') }}" class="hover:text-sage transition-colors">Privacy Policy</a></li>
            <li><a href="{{ route('home.terms_of_service') }}" class="hover:text-sage transition-colors">Terms of Service</a></li>
            <li><a href="{{ route('home.disclaimer') }}" class="hover:text-sage transition-colors">Disclaimer</a></li>
          </ul>
        </div>
      </div>

      <div
        class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-white/30">
        <p>&copy; 2023 Dr. Pranjal Joshi. All rights reserved.</p>
        <div class="flex gap-4">
          <span>Designed for Mental Wellness</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
<script>
  // Mobile Menu Toggle
  const mobileToggle = document.getElementById('mobileToggle');
  const mobileMenu = document.getElementById('mobileMenu');

  if (mobileToggle && mobileMenu) {
    const icon = mobileToggle.querySelector('i');

    mobileToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('mobile-menu-open');
      mobileMenu.classList.toggle('mobile-menu-closed');

      if (mobileMenu.classList.contains('mobile-menu-open')) {
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-xmark');
      } else {
        icon.classList.remove('fa-xmark');
        icon.classList.add('fa-bars');
      }
    });

    // Close mobile menu on link click
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('mobile-menu-open');
        mobileMenu.classList.add('mobile-menu-closed');
        icon.classList.remove('fa-xmark');
        icon.classList.add('fa-bars');
      });
    });
  }

  // Header Scroll Effect
  const header = document.getElementById('header');

  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('shadow-lg', 'bg-white/95');
        header.classList.remove('py-6');
        header.classList.add('py-4');
      } else {
        header.classList.remove('shadow-lg', 'bg-white/95');
        header.classList.remove('py-4');
        header.classList.add('py-6');
      }
    });
  }

  // Intersection Observer for Fade In Animations
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
        entry.target.classList.remove('fade-in-scroll');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.fade-in-scroll').forEach((el) => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
    observer.observe(el);
  });

  // Hero animation on load
  window.addEventListener('load', () => {
    const heroText = document.getElementById('heroText');
    const heroImg = document.getElementById('heroImg');

    if (heroText) {
      heroText.style.opacity = '1';
      heroText.style.transform = 'translateY(0)';
    }

    setTimeout(() => {
      if (heroImg) {
        heroImg.style.opacity = '1';
        heroImg.style.transform = 'translateX(0)';
      }
    }, 300);
  });
</script>
</body>
</html>