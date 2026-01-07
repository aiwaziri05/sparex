<footer class="bg-gray-900 pt-20 pb-10 text-white border-t border-gray-800">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-16">
      
      <!-- Brand & Description -->
      <div class="lg:col-span-4 space-y-6">
        <div class="flex items-center gap-3">
            <img src="{{ asset('assets/images/logo_white.png') }}" alt="Sparex" class="h-16 w-auto object-contain">
        </div>
        <p class="text-gray-400 leading-relaxed max-w-sm">
          Empowering businesses with practical digital solutions that improve operations and support growth.
        </p>
        <div class="flex items-center gap-4 pt-2">
            <!-- Social Links -->
            @forelse($socialMediaLinks ?? [] as $link)
            @php
                $hoverColor = $link->hover_color ?? 'blue-600';
                $hoverColorParts = explode('-', $hoverColor);
                $hoverColorName = $hoverColorParts[0] ?? 'blue';
                $hoverColorShade = isset($hoverColorParts[1]) ? (int)$hoverColorParts[1] : 600;
                $hoverBgHex = \App\Helpers\TailwindColorHelper::getColorHex($hoverColorName, $hoverColorShade) ?? '#2563eb';
            @endphp
            <a href="{{ $link->url }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 hover:text-white transition-all duration-300 social-link" onmouseover="this.style.backgroundColor = '{{ $hoverBgHex }}';" onmouseout="this.style.backgroundColor = '';">
                @if($link->icon)
                  @if(filter_var($link->icon, FILTER_VALIDATE_URL))
                    <img src="{{ $link->icon }}" alt="{{ $link->platform }}" class="w-5 h-5">
                  @else
                    <img src="{{ asset('storage/' . $link->icon) }}" alt="{{ $link->platform }}" class="w-5 h-5">
                  @endif
                @else
                  <!-- Default icons based on platform -->
                  @if($link->platform === 'facebook')
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path></svg>
                  @elseif($link->platform === 'twitter')
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                  @elseif($link->platform === 'instagram')
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772 4.902 4.902 0 011.772-1.153c.636-.247 1.363-.416 2.427-.465.957-.043 1.318-.06 2.427-.06h.08c.958 0 1.319.013 2.427.06H12.315zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" clip-rule="evenodd"></path></svg>
                  @elseif($link->platform === 'linkedin')
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path></svg>
                  @else
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                  @endif
                @endif
            </a>
            @empty
            <!-- No social media links -->
            @endforelse
        </div>
      </div>

      <!-- Links Column 1 -->
      <div class="col-span-1 md:col-span-4 lg:col-span-2">
        <h3 class="text-white font-semibold tracking-wide mb-6">Solutions</h3>
        <ul class="space-y-4 text-gray-400">
          <li><a href="#" class="hover:text-white transition-colors">Data Analytics</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Workflow Automation</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Software Solutions</a></li>
          <li><a href="#" class="hover:text-white transition-colors">IT Infrastructure</a></li>
        </ul>
      </div>

      <!-- Links Column 2 -->
      <div class="col-span-1 md:col-span-4 lg:col-span-2">
        <h3 class="text-white font-semibold tracking-wide mb-6">Company</h3>
        <ul class="space-y-4 text-gray-400">
          <li><a href="#about" class="hover:text-white transition-colors">About Us</a></li>
          <li><a href="#careers" class="hover:text-white transition-colors">Careers</a></li>
          <li><a href="#blog" class="hover:text-white transition-colors">Blog</a></li>
          <li><a href="#contact" class="hover:text-white transition-colors">Contact</a></li>
        </ul>
      </div>

      <!-- Newsletter Column -->
      <div class="col-span-1 lg:col-span-4">
        <h3 class="text-white font-semibold tracking-wide mb-6">Stay Updated</h3>
        <p class="text-gray-400 text-sm mb-2">Subscribe to our newsletter for updates on digital solutions, workflow automation, and company news.</p>
        <p class="text-gray-500 text-xs mb-4">You’ll receive an email to confirm your subscription (double opt-in).</p>
        <form id="footer-newsletter-form" class="flex flex-col sm:flex-row gap-3">
            <input id="footer-newsletter-email" type="email" name="email" placeholder="Enter your email" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all">
            <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-colors duration-300">
                Subscribe
            </button>
        </form>
        <p id="footer-newsletter-message" class="mt-2 text-xs text-gray-400"></p>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
        <div class="text-gray-500 text-sm">
            &copy; {{ date('Y') }} Sparex Tech. All rights reserved.
        </div>
        <div class="flex gap-6 text-sm text-gray-500">
            <a href="#" class="hover:text-gray-300 transition-colors">Privacy Policy</a>
            <a href="#" class="hover:text-gray-300 transition-colors">Terms of Service</a>
            <a href="#" class="hover:text-gray-300 transition-colors">Cookies</a>
        </div>
    </div>
  </div>
</footer>