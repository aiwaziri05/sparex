<!-- Services Partial: clean card UI with icon illustrations -->
<section id="services" class="py-20" style="background: linear-gradient(to bottom, #ffffff, #f5f5f5);">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-2xl md:text-3xl font-bold leading-tight text-body">Our Services</h2>
      <p class="text-gray-500 mt-3 text-base max-w-2xl mx-auto">End-to-end digital solutions designed to streamline operations and drive smarter decisions.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @forelse($services ?? [] as $service)
      <article class="service-card bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:border-transparent">
        <div class="flex items-start gap-4">
          @if($service->icon)
          <div class="service-icon" style="background: {{ $service->icon_color ?? 'rgba(25, 118, 210, 0.15)' }};">
            @if(filter_var($service->icon, FILTER_VALIDATE_URL))
              <img src="{{ $service->icon }}" alt="{{ $service->title }}">
            @else
              <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}" onerror="this.style.display='none';">
            @endif
          </div>
          @endif
          <div>
            <h3 class="font-semibold text-base">{{ $service->title }}</h3>
            <p class="text-sm text-gray-600 mt-2 leading-relaxed">{{ $service->description }}</p>
          </div>
        </div>
      </article>
      @empty
      <p class="text-gray-500 col-span-full text-center">No services available.</p>
      @endforelse
    </div>
  </div>
</section>