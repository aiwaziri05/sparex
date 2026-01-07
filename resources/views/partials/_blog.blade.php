<section id="blog" class="py-20 bg-gradient-to-b from-gray-50 to-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-2xl md:text-3xl font-bold leading-tight text-body">Latest Insights</h2>
      <p class="text-gray-500 mt-3 text-base max-w-2xl mx-auto">Stay updated with industry trends and best practices from our experts</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse($posts ?? [] as $post)
        <article class="blog-card group overflow-hidden rounded-2xl bg-white border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
          <div class="relative h-48 overflow-hidden group-hover:scale-105 transition-transform duration-500">
            <img src="{{ asset('assets/images/blog/' . str_replace('blog-', '', $post->image) . '.png') }}" alt="{{ $post->title }}" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.style.backgroundColor='#f9fafb'; this.style.display='none';">
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </div>
          <div class="p-6 flex-1 flex flex-col">
            <div class="flex items-center gap-2 mb-3">
              @if(!empty($post->category))
                <span class="text-xs font-semibold px-3 py-1 rounded-full" style="background: rgba(0,0,0,0.04);">{{ $post->category }}</span>
              @endif
              @if(!empty($post->read_time))
                <span class="text-xs text-gray-500">• {{ $post->read_time }} min read</span>
              @endif
            </div>
            <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-secondary transition-colors">{{ $post->title }}</h3>
            <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-1">{{ \Illuminate\Support\Str::limit($post->description ?? $post->content ?? '', 140) }}</p>
            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
              <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="text-sm font-semibold text-gray-700">{{ optional($post->published_at)->format('M j, Y') }}</span>
              </div>
              <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center text-secondary font-medium text-sm group">
                <span class="transition-transform duration-300 group-hover:-translate-x-1">Read More</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
              </a>
            </div>
          </div>
        </article>
      @empty
        <p class="text-gray-400">No featured articles found.</p>
      @endforelse
    </div>

    <div class="text-center mt-12">
      <a href="{{ route('blog') }}" class="inline-flex w-full sm:w-auto items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-secondary bg-white border-2 border-secondary/10 rounded-xl hover:bg-secondary/5 hover:border-secondary hover:shadow-lg transition-all duration-300 group">
        View All Articles
        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" focusable="false">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
    </div>
  </div>
</section>
