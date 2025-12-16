@extends('layouts.app')

@section('content')
<x-header />

<main class="bg-white">
    <section class="pt-28 pb-20 bg-gradient-to-b from-slate-900 via-slate-900 to-slate-950">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-10">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">
                    Subscribe to our newsletter
                </h1>
                <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                    Get practical insights on workflow automation, digital systems, and data-driven decision making
                    straight to your inbox.
                </p>
            </div>

            <div class="bg-slate-900/70 border border-slate-700 rounded-2xl p-6 md:p-8 shadow-2xl">
                <p class="text-gray-300 text-sm mb-4">
                    Enter your email below to join our newsletter. You’ll receive an email to confirm your subscription
                    (double opt-in).
                </p>

                <form id="newsletter-page-form" class="space-y-3 md:flex md:space-y-0 md:space-x-3">
                    <div class="flex-1">
                        <input
                            id="newsletter-page-email"
                            type="email"
                            name="email"
                            placeholder="Enter your email"
                            class="w-full px-4 py-3 rounded-lg bg-slate-900 border border-slate-700 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"
                        >
                    </div>
                    <div class="md:w-auto">
                        <button
                            type="submit"
                            class="w-full px-6 py-3 rounded-lg bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-105 transition-all duration-300"
                        >
                            Subscribe
                        </button>
                    </div>
                </form>

                <p id="newsletter-page-message" class="mt-3 text-xs text-gray-400"></p>
            </div>
        </div>
    </section>

    <x-footer />
</main>
@endsection


