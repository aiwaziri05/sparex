@extends('layouts.app')

@section('content')
<x-header />

<!-- Social Media Panel -->
<x-social-panel />

<main x-data="{ activeCategory: 'All' }">
    <!-- Header Section -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 bg-slate-900 overflow-hidden">
        <!-- Subtle Grid Background -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff1a_1px,transparent_1px),linear-gradient(to_bottom,#ffffff1a_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute left-0 right-0 top-0 -z-10 m-auto h-[310px] w-[310px] rounded-full bg-blue-600 opacity-20 blur-[100px]"></div>
        <div class="absolute right-0 top-0 -z-10 h-full w-1/2 bg-linear-to-b from-transparent to-slate-900/50"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 tracking-tight leading-tight">
                    Latest <span class="text-transparent bg-clip-text bg-linear-to-r from-blue-400 to-indigo-400">Insights.</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-400 leading-relaxed font-light mb-10">
                Stay updated with practical guidance, industry trends, and insights from the Sparex team on digital transformation, automation, and data-driven business solutions.
                </p>
                
                <a href="{{ route('newsletter') }}" class="inline-flex w-full sm:w-auto items-center justify-center gap-3 px-8 py-4 text-base font-semibold text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-105 transition-all duration-300 group">
                    Subscribe to Newsletter
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-6 mt-12 mb-24">
        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts as $post)
                <article class="blog-card group overflow-hidden rounded-2xl bg-white border border-gray-200 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col">
                    <!-- Image Area -->
                    <div class="relative h-48 overflow-hidden bg-gradient-to-br from-{{ $post->color }}-50 to-{{ $post->color }}-100 flex items-center justify-center group-hover:scale-105 transition-transform duration-500">
                        <!-- Fallback logic similar to portfolio -->
                         <img src="{{ asset('assets/images/blog/' . str_replace('blog-', '', $post->image) . '.png') }}" 
                              alt="{{ $post->title }}" 
                              class="w-full h-full object-cover"
                              onerror="this.onerror=null; this.parentElement.style.backgroundColor='{{ $post->color === 'blue' ? '#eff6ff' : ($post->color === 'indigo' ? '#eef2ff' : '#f9fafb') }}'; this.style.display='none';"
                         >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <!-- Content Area -->
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs font-semibold px-3 py-1 rounded-full bg-{{ $post->color }}-50 text-{{ $post->color }}-600">
                                {{ $post->category }}
                            </span>
                            <span class="text-xs text-gray-500">• {{ $post->read_time }}</span>
                        </div>
                        
                        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">{{ $post->title }}</h3>
                        <p class="text-sm text-gray-600 leading-relaxed mb-4 flex-1 line-clamp-3">
                            {{ $post->description }}
                        </p>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="text-sm font-semibold text-gray-700">{{ $post->published_at ? $post->published_at->format('M j, Y') : '' }}</span>
                            </div>
                            
                            <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center text-secondary font-medium text-sm group">
                                <span class="transition-transform duration-300 group-hover:-translate-x-1">Read More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
    
    <!-- Social Proof Section -->
    <div class="mt-32">
        @include('partials._social-proof')
    </div>
</main>

<x-footer />
@endsection
