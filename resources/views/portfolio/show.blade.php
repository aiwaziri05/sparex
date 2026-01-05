@extends('layouts.app')

@section('content')
<x-header />

<main>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-slate-900 overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff1a_1px,transparent_1px),linear-gradient(to_bottom,#ffffff1a_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute right-0 top-0 -z-10 h-full w-1/2 bg-gradient-to-b from-transparent to-slate-900/50"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-{{ $project->color }}-500/10 to-transparent"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row gap-4 items-start mb-6">
                <span class="px-4 py-1.5 rounded-full bg-{{ $project->color }}-500/10 border border-{{ $project->color }}-500/20 text-{{ $project->color }}-400 text-sm font-medium">
                    {{ $project->category }}
                </span>
                <div class="flex gap-2">
                    @foreach($project->tags as $tag)
                        <span class="px-2 py-1 rounded-md bg-white/5 text-gray-400 text-xs border border-white/10">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>
            
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                {{ $project->title }}
            </h1>
            
            <p class="text-xl text-gray-400 max-w-3xl leading-relaxed">
                {{ $project->description }}
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left Column: Content -->
                <div class="lg:col-span-8">
                    <!-- Project Image -->
                    <div class="rounded-2xl overflow-hidden shadow-2xl mb-12 bg-gray-100 aspect-video relative group">
                        
                         @if(in_array($project->image, ['portfolio-analytics', 'portfolio-automation', 'portfolio-ai']))
                             <img src="{{ asset('assets/images/portfolio/' . str_replace('portfolio-', '', $project->image) . '.png') }}" 
                                  alt="{{ $project->title }}" 
                                  class="w-full h-full object-cover"
                                  onerror="this.onerror=null; this.parentElement.style.backgroundColor='{{ $project->color === 'blue' ? '#eff6ff' : ($project->color === 'indigo' ? '#eef2ff' : '#f9fafb') }}'; this.style.display='none';"
                             >
                         @else
                            <div class="w-full h-full flex items-center justify-center bg-{{ $project->color }}-50">
                                <span class="text-{{ $project->color }}-500 font-bold opacity-20 text-6xl">{{ substr($project->title, 0, 1) }}</span>
                            </div>
                         @endif
                    </div>

                    <!-- Project Details Content -->
                    <div class="prose prose-lg prose-slate max-w-none">
                        {!! $project->long_description !!}
                    </div>
                    
                    <!-- Back Button -->
                    <div class="mt-16 pt-8 border-t border-gray-100">
                        <a href="{{ route('portfolio') }}" class="inline-flex items-center text-gray-600 hover:text-blue-600 font-medium transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Back to Portfolio
                        </a>
                    </div>
                </div>

                <!-- Right Column: Sidebar -->
                <div class="lg:col-span-4 space-y-8">
                    <!-- Call to Action -->
                    <div class="bg-slate-50 rounded-2xl p-8 border border-gray-100 sticky top-32">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Interested in a similar project?</h3>
                        <p class="text-gray-600 mb-6">Let's discuss how we can help you build something amazing.</p>
                        <a href="/contact" class="flex w-full items-center justify-center px-6 py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-500/20">
                            Start a Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Related Projects (Optional - could reuse portfolio logic) -->
</main>

<x-footer />
@endsection
