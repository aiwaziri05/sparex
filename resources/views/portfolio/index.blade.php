@extends('layouts.app')

@section('content')
<x-header />

<!-- Social Media Panel -->
<x-social-panel />

<main x-data="{ activeCategory: 'All' }">
    <!-- Header Section -->
    <!-- Header Section -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 bg-slate-900 overflow-hidden">
        <!-- Subtle Grid Background -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff1a_1px,transparent_1px),linear-gradient(to_bottom,#ffffff1a_1px,transparent_1px)] bg-size-[24px_24px]"></div>
        <div class="absolute left-0 right-0 top-0 -z-10 m-auto h-[310px] w-[310px] rounded-full bg-blue-600 opacity-20 blur-[100px]"></div>
        <div class="absolute right-0 top-0 -z-10 h-full w-1/2 bg-linear-to-b from-transparent to-slate-900/50"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 tracking-tight leading-tight">
                    Delivering <span class="text-transparent bg-clip-text bg-linear-to-r from-blue-400 to-indigo-400">Digital Excellence.</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-400 leading-relaxed font-light mb-10">
                    Explore our portfolio of digital solutions from dashboards to mobile apps designed to streamline operations and drive measurable results.
                </p>

                <a href="/contact" class="inline-flex items-center gap-3 px-8 py-4 text-base font-semibold text-white bg-linear-to-r from-blue-600 to-indigo-600 rounded-xl shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-105 transition-all duration-300 group">
                    Start a Project
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6 mt-12">
        <!-- Filter Bar -->
        <div class="flex flex-wrap justify-center gap-2 mb-16">
            @foreach($categories as $category)
            <button
                @click="activeCategory = '{{ $category }}'"
                :class="{ 'bg-gray-900 text-white shadow-md': activeCategory === '{{ $category }}', 'bg-white text-gray-600 hover:bg-gray-50 border border-gray-200': activeCategory !== '{{ $category }}' }"
                class="px-5 py-2.5 rounded-full text-sm font-medium transition-all duration-200">
                {{ $category }}
            </button>
            @endforeach
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div
                x-show="activeCategory === 'All' || activeCategory === '{{ $project['category'] }}'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                class="portfolio-card group overflow-hidden rounded-2xl bg-white border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300">
                <!-- Image Area -->
                <div class="relative h-48 overflow-hidden bg-linear-to-br from-{{ $project['color'] }}-50 to-{{ $project['color'] }}-100 group-hover:scale-105 transition-transform duration-500">
                    <!-- Fallback directly to component or image based on what's available. 
                              Since we are ensuring this works, we'll try to use the image assets if they exist, 
                              or a colored placeholder if not. -->
                    @if(in_array($project['image'], ['portfolio-analytics', 'portfolio-automation', 'portfolio-ai']))
                    <!-- Mapping schematic names to potential real files or just using loose placeholders -->
                    <img src="{{ asset('assets/images/portfolio/' . str_replace('portfolio-', '', $project['image']) . '.png') }}"
                        alt="{{ $project['title'] }}"
                        class="w-full h-full object-cover"
                        onerror="this.onerror=null; this.parentElement.style.backgroundColor='{{ $project['color'] === 'blue' ? '#eff6ff' : ($project['color'] === 'indigo' ? '#eef2ff' : '#f9fafb') }}'; this.style.display='none';">
                    @else
                    <div class="w-full h-full flex items-center justify-center bg-{{ $project['color'] }}-50">
                        <span class="text-{{ $project['color'] }}-500 font-bold opacity-20 text-4xl">{{ substr($project['title'], 0, 1) }}</span>
                    </div>
                    @endif

                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <!-- Content Area -->
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs font-semibold px-3 py-1 rounded-full bg-blue-50 text-blue-600">
                            {{ $project['category'] }}
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $project['title'] }}</h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4 line-clamp-3">
                        {{ $project['description'] }}
                    </p>

                    <!-- Tags -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project['tags'] as $tag)
                        <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded">#{{ $tag }}</span>
                        @endforeach
                    </div>

                    <a href="{{ route('portfolio.show', $project['slug']) }}" class="inline-flex items-center text-secondary font-medium text-sm group">
                        <span class="transition-transform duration-300 group-hover:-translate-x-1">View Case Study</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Empty State -->
        <div x-show="false" class="hidden text-center py-24">
            <p class="text-gray-500">No projects found in this category.</p>
        </div>
    </div>

    <!-- Social Proof Section -->
    <div class="mt-32">
        @include('partials._social-proof')
    </div>
</main>

<x-footer />
@endsection