<section id="values" class="py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold leading-tight text-body">Our Core Values</h2>
            <p class="text-gray-500 mt-4 text-base max-w-2xl mx-auto">The principles that guide how we think, build, and partner with our clients.</p>
        </div>

        <!-- Modern grid with gradient cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($coreValues ?? [] as $value)
            <div class="group value-item">
                <div class="relative overflow-hidden rounded-2xl p-6 h-full transition-all duration-300 hover:shadow-xl" style="{{ \App\Helpers\TailwindColorHelper::getGradientBackground($value->color, 50, 100) }}">
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300" style="background: radial-gradient(circle at top right, rgba(2, 132, 199, 0.1), transparent);"></div>
                    <div class="relative z-10">
                        @if($value->icon_svg)
                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl mb-4" style="color: #0284C7;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="{{ $value->icon_svg }}" />
                            </svg>
                        </div>
                        @endif
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $value->title }}</h3>
                        <p class="text-gray-700 text-sm leading-relaxed">{{ $value->description }}</p>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-gray-500 col-span-full text-center">No core values available.</p>
            @endforelse
        </div>
    </div>
</section>

