<section id="portfolio" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-2xl md:text-3xl font-bold leading-tight text-body">Our Portfolio</h2>
      <p class="text-gray-500 mt-3 text-base max-w-2xl mx-auto">Explore the projects we've delivered for leading organizations</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Portfolio Card 1 -->
      <div class="portfolio-card group overflow-hidden rounded-2xl bg-white border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300">
        <div class="relative h-48 overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100 group-hover:scale-105 transition-transform duration-500">
          <img src="{{ asset('assets/images/portfolio/analytics.png') }}" alt="Data Analytics Platform" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>
        <div class="p-6">
          <div class="flex items-center gap-2 mb-3">
            <span class="text-xs font-semibold px-3 py-1 rounded-full" style="background: rgba(25, 118, 210, 0.1); color: var(--color-secondary);">Analytics</span>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">Data Analytics Platform</h3>
          <p class="text-sm text-gray-600 leading-relaxed mb-4">Transformed sales data into actionable insights with custom dashboards for a Fortune 500 company.</p>
          <a href="{{ route('portfolio.show', 'global-logistics-dashboard') }}" class="inline-flex items-center text-secondary font-medium text-sm group">
            <span class="transition-transform duration-300 group-hover:-translate-x-1">View Project</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Portfolio Card 2 -->
      <div class="portfolio-card group overflow-hidden rounded-2xl bg-white border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300">
        <div class="relative h-48 overflow-hidden bg-gradient-to-br from-green-50 to-green-100 group-hover:scale-105 transition-transform duration-500">
          <img src="{{ asset('assets/images/portfolio/automation.png') }}" alt="Workflow Automation Suite" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>
        <div class="p-6">
          <div class="flex items-center gap-2 mb-3">
            <span class="text-xs font-semibold px-3 py-1 rounded-full" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">Automation</span>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">Workflow Automation Suite</h3>
          <p class="text-sm text-gray-600 leading-relaxed mb-4">Reduced manual processes by 85% for a manufacturing leader with intelligent automation.</p>
          <a href="{{ route('portfolio.show', 'manufacturing-sop-portal') }}" class="inline-flex items-center text-secondary font-medium text-sm group">
            <span class="transition-transform duration-300 group-hover:-translate-x-1">View Project</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Portfolio Card 3 -->
      <div class="portfolio-card group overflow-hidden rounded-2xl bg-white border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300">
        <div class="relative h-48 overflow-hidden bg-gradient-to-br from-amber-50 to-amber-100 group-hover:scale-105 transition-transform duration-500">
          <img src="{{ asset('assets/images/portfolio/ai.png') }}" alt="AI-Powered Insights" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>
        <div class="p-6">
          <div class="flex items-center gap-2 mb-3">
            <span class="text-xs font-semibold px-3 py-1 rounded-full" style="background: rgba(255, 152, 0, 0.1); color: var(--color-accent);">AI/ML</span>
          </div>
          <h3 class="text-lg font-bold text-gray-900 mb-2">AI-Powered Insights Engine</h3>
          <p class="text-sm text-gray-600 leading-relaxed mb-4">Built predictive models that increased forecast accuracy to 94% for a retail enterprise.</p>
          <a href="{{ route('portfolio.show', 'hr-onboarding-automation') }}" class="inline-flex items-center text-secondary font-medium text-sm group">
            <span class="transition-transform duration-300 group-hover:-translate-x-1">View Project</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
