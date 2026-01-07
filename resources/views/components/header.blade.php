<header
  x-data="{ scrolled: false, mobileMenuOpen: false }"
  @scroll.window="scrolled = window.pageYOffset > 20"
  :class="scrolled ? 'shadow-sm bg-white/70 backdrop-blur-xl' : 'bg-transparent'"
  class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b border-transparent"
  :style="scrolled ? 'background: rgba(255, 255, 255, 0.7); supports(backdrop-filter: blur(10px)) or (-webkit-backdrop-filter: blur(10px)) ? background: rgba(255, 255, 255, 0.6)' : ''"
>
  <div class="relative max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
    <!-- Logo -->
    <div class="flex items-center space-x-3">
      <a href="/" class="flex items-center gap-2.5 group">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Sparex" class="h-16 w-auto transition-transform duration-200 group-hover:scale-110 object-contain">
      </a>
    </div>

    <!-- Desktop Navigation -->
    <nav class="hidden lg:flex items-center gap-1">
      <a href="/" class="nav-link {{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : '' }}">Home</a>
      <a href="/#about" class="nav-link">About</a>
      <a href="/#services" class="nav-link">Services</a>
      <a href="/portfolio" class="nav-link {{ request()->routeIs('portfolio') ? 'text-blue-600 font-semibold' : '' }}">Portfolio</a>
      <a href="/blog" class="nav-link {{ request()->routeIs('blog*') ? 'text-blue-600 font-semibold' : '' }}">Blog</a>
    </nav>

    <!-- Desktop CTA -->
    <div class="hidden lg:flex items-center">
      <a href="/contact" class="inline-flex items-center gap-2 px-8 py-3 text-base font-semibold text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-105 transition-all duration-300">
        Get a Quote
      </a>
    </div>

    <!-- Mobile Menu Button -->
    <button
      @click="mobileMenuOpen = !mobileMenuOpen"
      class="lg:hidden p-2 text-gray-700 hover:text-secondary transition-colors"
      aria-label="Toggle menu"
    >
      <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div
    x-show="mobileMenuOpen"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 -translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-4"
    @click.away="mobileMenuOpen = false"
    class="lg:hidden border-t border-white/20 bg-white/70 backdrop-blur-lg"
  >
    <nav class="max-w-7xl mx-auto px-6 py-4 flex flex-col gap-2">
      <a href="/" class="nav-link-mobile {{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : '' }}" @click="mobileMenuOpen = false">Home</a>
      <a href="#about" class="nav-link-mobile" @click="mobileMenuOpen = false">About</a>
      <a href="#services" class="nav-link-mobile" @click="mobileMenuOpen = false">Services</a>
      <a href="/portfolio" class="nav-link-mobile {{ request()->routeIs('portfolio') ? 'text-blue-600 font-semibold' : '' }}" @click="mobileMenuOpen = false">Portfolio</a>
      <a href="/blog" class="nav-link-mobile {{ request()->routeIs('blog*') ? 'text-blue-600 font-semibold' : '' }}" @click="mobileMenuOpen = false">Blog</a>

      <div class="mt-4 pt-4 border-t border-white/20">
        <a href="/contact" class="inline-flex items-center justify-center gap-2 px-8 py-3 text-base font-semibold text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-105 transition-all duration-300 w-full" @click="mobileMenuOpen = false">
          Get a Quote
        </a>
      </div>
    </nav>
  </div>
</header>
