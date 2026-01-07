@extends('layouts.app')

@section('content')
<x-header />

<main>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-slate-900 overflow-hidden">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff1a_1px,transparent_1px),linear-gradient(to_bottom,#ffffff1a_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute right-0 top-0 -z-10 h-full w-1/2 bg-gradient-to-b from-transparent to-slate-900/50"></div>
        <div class="absolute inset-0" style="{{ \App\Helpers\TailwindColorHelper::getGradientBackgroundWithOpacity($post->color, 500, 500, 0.1) }}"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row gap-4 items-start mb-6">
                <span class="px-4 py-1.5 rounded-full border text-sm font-medium" style="{{ \App\Helpers\TailwindColorHelper::getGradientBackgroundWithOpacity($post->color, 500, 500, 0.1) }} {{ \App\Helpers\TailwindColorHelper::getBorderColor($post->color, 500) }} {{ \App\Helpers\TailwindColorHelper::getTextColor($post->color, 400) }}">
                    {{ $post->category }}
                </span>
                <div class="flex flex-wrap gap-2">
                    @php
                        $tags = $post->tags ?? [];
                        // Handle case where tags might be a string (backward compatibility)
                        if (is_string($tags)) {
                            $tags = json_decode($tags, true) ?? [];
                        }
                        // Ensure it's an array
                        $tags = is_array($tags) ? $tags : [];
                    @endphp
                    @foreach($tags as $tag)
                        <span class="px-2 py-1 rounded-md bg-white/5 text-gray-400 text-xs border border-white/10">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>
            
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                {{ $post->title }}
            </h1>
            
            <div class="flex flex-wrap items-center gap-4 text-gray-300">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>{{ $post->author }}</span>
                </div>
                <span class="text-gray-500">•</span>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>{{ $post->published_at ? $post->published_at->format('M j, Y') : '' }}</span>
                </div>
                <span class="text-gray-500">•</span>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ $post->read_time }}</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left Column: Content -->
                <div class="lg:col-span-8">
                    <!-- Feature Image -->
                    <div class="rounded-2xl overflow-hidden shadow-2xl mb-12 bg-gray-100 aspect-video relative group">
                        <img src="{{ asset('assets/images/blog/' . str_replace('blog-', '', $post->image) . '.png') }}" 
                             alt="{{ $post->title }}" 
                             class="w-full h-full object-cover"
                             onerror="this.onerror=null; this.parentElement.style.backgroundColor='{{ $post->color === 'blue' ? '#eff6ff' : ($post->color === 'indigo' ? '#eef2ff' : '#f9fafb') }}'; this.style.display='none';"
                        >
                    </div>

                    <!-- Post Body -->
                    <div class="prose prose-lg prose-slate max-w-none">
                        {!! $post->content !!}
                    </div>

                    <!-- Back Button -->
                    <div class="mt-16 pt-8 border-t border-gray-100">
                        <a href="{{ route('blog') }}" class="inline-flex items-center text-gray-600 hover:text-blue-600 font-medium transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Back to Blog
                        </a>
                    </div>
                </div>

                <!-- Right Column: Sidebar -->
                <div class="lg:col-span-4 space-y-8">
                    <div class="bg-slate-50 rounded-2xl p-8 border border-gray-100 sticky top-32">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Need help with this topic?</h3>
                        <p class="text-gray-600 mb-6">Let\'s explore how these ideas fit your roadmap.</p>
                        <a href="/contact" class="flex w-full items-center justify-center px-6 py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/20">
                            Start a Project
                        </a>
                    </div>

                    @if($relatedPosts->isNotEmpty())
                        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                            <h4 class="text-lg font-semibold text-gray-900 mb-4">Related Posts</h4>
                            <div class="space-y-4">
                                @foreach($relatedPosts as $related)
                                    <a href="{{ route('blog.show', $related->slug) }}" class="block group">
                                        <div class="flex items-start gap-3">
                                            <div class="w-12 h-12 rounded-lg flex items-center justify-center font-semibold" style="{{ \App\Helpers\TailwindColorHelper::getBackgroundColor($related->color, 50) }} {{ \App\Helpers\TailwindColorHelper::getTextColor($related->color, 600) }}">
                                                {{ strtoupper(substr($related->title, 0, 1)) }}
                                            </div>
                                            <div>
                                                <p class="text-sm text-gray-500 mb-1">{{ $related->category }} • {{ $related->read_time }}</p>
                                                <h5 class="text-base font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">{{ $related->title }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</main>

<x-footer />
@endsection

