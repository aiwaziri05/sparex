@props(['section'])

<section id="{{ $section->slug }}" class="{{ $section->type }}-section">
    <div class="max-w-7xl mx-auto px-6 py-8">
        <h2 class="text-2xl md:text-3xl font-bold leading-tight text-body text-center">{{ $section->title }}</h2>
        <div class="text-gray-500 mt-3 text-base max-w-2xl mx-auto">{!! $section->content !!}</div>
    </div>
</section>
