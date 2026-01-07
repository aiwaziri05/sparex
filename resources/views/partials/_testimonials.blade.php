<section id="testimonials" class="py-20 bg-gradient-to-b from-white to-gray-50">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-extrabold leading-tight text-gray-900">What Our Clients Say</h2>
      <p class="text-gray-500 mt-3 text-lg max-w-2xl mx-auto">Real results, real stories. Here’s what our partners say about working with us.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse($testimonials ?? [] as $testimonial)
      <div class="rounded-3xl bg-white/90 border p-8 flex flex-col items-start shadow-lg hover:shadow-xl transition-all duration-300" style="{{ \App\Helpers\TailwindColorHelper::getBorderColor($testimonial->color, 100) }}">
        <div class="flex items-center gap-4 mb-5">
          @if($testimonial->image)
            @if(filter_var($testimonial->image, FILTER_VALIDATE_URL))
              <img src="{{ $testimonial->image }}" alt="{{ $testimonial->name }}" class="w-14 h-14 rounded-full object-cover border-2 shadow" style="{{ \App\Helpers\TailwindColorHelper::getBorderColor($testimonial->color, 200) }}">
            @else
              <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="w-14 h-14 rounded-full object-cover border-2 shadow" style="{{ \App\Helpers\TailwindColorHelper::getBorderColor($testimonial->color, 200) }}">
            @endif
          @else
            <div class="w-14 h-14 rounded-full flex items-center justify-center border-2 shadow" style="{{ \App\Helpers\TailwindColorHelper::getBackgroundColor($testimonial->color, 100) }} {{ \App\Helpers\TailwindColorHelper::getBorderColor($testimonial->color, 200) }}">
              <span class="font-bold" style="{{ \App\Helpers\TailwindColorHelper::getTextColor($testimonial->color, 600) }}">{{ substr($testimonial->name, 0, 1) }}</span>
            </div>
          @endif
          <div>
            <div class="font-semibold text-gray-900 text-lg">{{ $testimonial->name }}</div>
            <div class="text-xs text-gray-500">{{ $testimonial->position }}, {{ $testimonial->company }}</div>
          </div>
        </div>
        <p class="text-gray-700 text-base flex-1 italic">"{{ $testimonial->testimonial }}"</p>
        @if($testimonial->is_verified)
        <div class="mt-6 flex items-center gap-2 text-xs font-semibold" style="{{ \App\Helpers\TailwindColorHelper::getTextColor($testimonial->color, 500) }}">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z" />
          </svg>
          Verified Client
        </div>
        @endif
      </div>
      @empty
      <p class="text-gray-500 col-span-full text-center">No testimonials available.</p>
      @endforelse
    </div>
  </div>
</section>
