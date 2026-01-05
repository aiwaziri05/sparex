<section id="social-proof" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="rounded-3xl p-8 bg-white/60 border border-gray-100 shadow-lg backdrop-blur-sm flex flex-col md:flex-row items-center justify-between gap-6">
      <div class="flex-1 text-center md:text-left">
        <h2 class="text-2xl md:text-3xl font-semibold text-gray-900">Trusted by Growing Businesses</h2>
        <p class="text-gray-500 mt-2 max-w-xl">We support organizations with practical digital solutions from workflow automation to data-driven systems helping teams operate efficiently and scale with confidence.</p>
        <div class="mt-6 flex flex-col sm:flex-row items-stretch sm:items-center justify-center md:justify-start gap-3 w-full">
          <a href="/contact" class="inline-flex w-full sm:w-auto items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-white bg-linear-to-r from-blue-600 to-indigo-600 rounded-xl shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-105 transition-all duration-300 group">
            Get Started
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
          <a href="/portfolio" class="inline-flex w-full sm:w-auto items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-secondary bg-white border-2 border-secondary/10 rounded-xl hover:bg-secondary/5 hover:border-secondary hover:shadow-lg transition-all duration-300 group">
            See Our Work
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>
      </div>

      <div class="flex-none w-full md:w-auto">
        <div class="flex flex-wrap md:flex-nowrap items-center gap-4 justify-center md:justify-end">
          <div class="px-6 py-4 rounded-2xl border border-indigo-100 bg-gradient-to-br from-indigo-100 to-indigo-200 flex flex-col items-center min-w-[140px] w-full sm:w-auto">
            <div class="text-xs font-semibold uppercase tracking-wide text-indigo-600 mb-1">Projects</div>
            <div class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-0.5">150+</div>
            <div class="text-xs text-gray-500">Delivered</div>
          </div>
          <div class="px-6 py-4 rounded-2xl border border-emerald-100 bg-gradient-to-br from-emerald-100 to-emerald-200 flex flex-col items-center min-w-[140px] w-full sm:w-auto">
            <div class="text-xs font-semibold uppercase tracking-wide text-emerald-600 mb-1">Forecast Accuracy</div>
            <div class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-0.5">94%</div>
            <div class="text-xs text-gray-500">AI-Driven</div>
          </div>
          <div class="px-6 py-4 rounded-2xl border border-amber-100 bg-gradient-to-br from-amber-100 to-amber-200 flex flex-col items-center min-w-[140px] w-full sm:w-auto">
            <div class="text-xs font-semibold uppercase tracking-wide text-amber-600 mb-1">Manual Work Reduced</div>
            <div class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-0.5">85%</div>
            <div class="text-xs text-gray-500">With Automation</div>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-8">
      <div class="relative overflow-hidden">
        <div class="absolute left-0 top-0 w-full h-full pointer-events-none bg-gradient-to-r from-white via-transparent to-white z-10"></div>
        <div class="logo-slider flex items-center gap-12 animate-logo-scroll py-2">
          @forelse($companyLogos ?? [] as $logo)
            @if($logo->website_url)
              <a href="{{ $logo->website_url }}" target="_blank" rel="noopener noreferrer">
            @endif
            @if(filter_var($logo->logo, FILTER_VALIDATE_URL))
              <img src="{{ $logo->logo }}" alt="{{ $logo->name }}" class="h-8 grayscale opacity-80 hover:opacity-100 transition" />
            @else
              <img src="{{ asset('storage/' . $logo->logo) }}" alt="{{ $logo->name }}" class="h-8 grayscale opacity-80 hover:opacity-100 transition" />
            @endif
            @if($logo->website_url)
              </a>
            @endif
          @empty
            <p class="text-gray-400 text-sm">No company logos available.</p>
          @endforelse
          <!-- Repeat for seamless loop -->
          @if(isset($companyLogos) && count($companyLogos ?? []) > 0)
            @foreach($companyLogos as $logo)
              @if($logo->website_url)
                <a href="{{ $logo->website_url }}" target="_blank" rel="noopener noreferrer">
              @endif
              @if(filter_var($logo->logo, FILTER_VALIDATE_URL))
                <img src="{{ $logo->logo }}" alt="{{ $logo->name }}" class="h-8 grayscale opacity-80 hover:opacity-100 transition" />
              @else
                <img src="{{ asset('storage/' . $logo->logo) }}" alt="{{ $logo->name }}" class="h-8 grayscale opacity-80 hover:opacity-100 transition" />
              @endif
              @if($logo->website_url)
                </a>
              @endif
            @endforeach
          @endif
        </div>
      </div>
      <p class="text-center text-xs text-gray-400 mt-4">Logos and case studies available on request.</p>
    </div>
  </div>
</section>
