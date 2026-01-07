<section id="portfolio" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-2xl md:text-3xl font-bold leading-tight text-body">Our Portfolio</h2>
      <p class="text-gray-500 mt-3 text-base max-w-2xl mx-auto">Explore the projects we've delivered for leading organizations</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse($projects ?? [] as $project)
        <div class="portfolio-card group overflow-hidden rounded-2xl bg-white border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="relative h-48 overflow-hidden group-hover:scale-105 transition-transform duration-500">
            <img src="{{ asset('assets/images/portfolio/' . str_replace('portfolio-', '', $project->image) . '.png') }}" alt="{{ $project->title }}" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.style.backgroundColor='#f9fafb'; this.style.display='none';">
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-2 mb-3">
              @if(!empty($project->category))
                <span class="text-xs font-semibold px-3 py-1 rounded-full" style="background: rgba(0,0,0,0.04);">{{ $project->category }}</span>
              @endif
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $project->title }}</h3>
            <p class="text-sm text-gray-600 leading-relaxed mb-4">{{ \Illuminate\Support\Str::limit($project->description ?? $project->long_description ?? '', 120) }}</p>
            <a href="{{ route('portfolio.show', $project->slug) }}" class="inline-flex items-center text-secondary font-medium text-sm group">
              <span class="transition-transform duration-300 group-hover:-translate-x-1">View Project</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </a>
          </div>
        </div>
      @empty
        <p class="text-gray-400">No featured projects found.</p>
      @endforelse
    </div>
  </div>
</section>
