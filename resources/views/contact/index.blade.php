@extends('layouts.app')

@section('content')
<x-header />

<main>
    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 bg-slate-900 overflow-hidden min-h-screen flex items-center">
        <!-- Subtle Grid Background -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff1a_1px,transparent_1px),linear-gradient(to_bottom,#ffffff1a_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute left-0 right-0 top-0 -z-10 m-auto h-[310px] w-[310px] rounded-full bg-blue-600 opacity-20 blur-[100px]"></div>
        <div class="absolute right-0 top-0 -z-10 h-full w-1/2 bg-gradient-to-b from-transparent to-slate-900/50"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-start">
                
                <!-- Left: Contact Info -->
                <div>
                    <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 tracking-tight leading-tight">
                        Let's start a <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400">conversation.</span>
                    </h1>
                    <p class="text-xl text-gray-400 leading-relaxed font-light mb-10 max-w-lg">
                        Ready to transform your digital presence? We're here to help you build something extraordinary.
                    </p>
                    
                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-slate-800 flex items-center justify-center shrink-0 text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold text-lg mb-1">Email Us</h3>
                                <a href="mailto:hello@sparex.com" class="text-gray-400 hover:text-white transition-colors">info@sparextech.com </a>
                                <p class="text-sm text-gray-500 mt-1">We'll get back to you within 24 hours.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-slate-800 flex items-center justify-center shrink-0 text-indigo-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold text-lg mb-1">Call Us</h3>
                                <a href="tel:+15550000000" class="text-gray-400 hover:text-white transition-colors">+234 817 018 0103</a>
                                <p class="text-sm text-gray-500 mt-1">Mon-Fri from 8am to 5pm EST.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-slate-800 flex items-center justify-center shrink-0 text-indigo-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21c-.38 0-.76-.146-1.05-.438C8.4 17.937 5 13.963 5 10.5 5 7.462 7.462 5 10.5 5s5.5 2.462 5.5 5.5c0 3.463-3.4 7.437-5.95 10.062A1.493 1.493 0 0112 21z" />
                                    <circle cx="12" cy="10.5" r="2" fill="currentColor" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold text-lg mb-1">Address</h3>
                                <a href="tel:+15550000000" class="text-gray-400 hover:text-white transition-colors">Sour Plaza 1<sup>st</sup> Avenue Gwarimpa, FCT Abuja.
                                <br>
                                No. 524 crescent 2nd avenue Gwarimpa Abuja, Nigeria</a>
                            </div>
                        </div>
                    </div>

                    <!-- Socials -->
                    <div class="mt-12 pt-12 border-t border-slate-800">
                        <h4 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-4">Follow Us</h4>
                        <div class="flex gap-4">
                            <a href="https://x.com/sparextech" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-gray-400 hover:bg-white hover:text-slate-900 transition-all duration-300" target="_blank">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                            <a href="#" target="_blank" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-gray-400 hover:bg-white hover:text-slate-900 transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.072 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.069-4.85.069-3.204 0-3.584-.012-4.849-.069-3.225-.149-4.771-1.664-4.919-4.919-.058-1.265-.071-1.644-.071-4.849 0-3.204.013-3.583.071-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href=" https://ng.linkedin.com/company/sparexltd?trk=similar-pages" target="_blank" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-gray-400 hover:bg-white hover:text-slate-900 transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Contact Form -->
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-600 rounded-2xl opacity-[0.03] blur-2xl"></div>
                    <div class="relative bg-slate-800/50 backdrop-blur-xl border border-slate-700/50 rounded-2xl p-8 lg:p-10 shadow-2xl">
                        @if(session('success'))
                            <div class="mb-6 p-4 bg-green-500/10 border border-green-500/20 rounded-xl text-green-400">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div id="contact-form-message" class="mb-6 hidden p-4 rounded-xl text-sm"></div>

                        <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="space-y-2">
                                <label for="name" class="text-sm font-medium text-gray-300">Full Name</label>
                                <input type="text" id="name" name="name" 
                                    class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all hover:bg-slate-900"
                                    placeholder="John Doe" required>
                                @error('name')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="space-y-2">
                                <label for="email" class="text-sm font-medium text-gray-300">Email Address</label>
                                <input type="email" id="email" name="email" 
                                    class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all hover:bg-slate-900"
                                    placeholder="john@company.com" required>
                                @error('email')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="space-y-2">
                                <label for="subject" class="text-sm font-medium text-gray-300">Subject</label>
                                <select id="subject" name="subject" 
                                    class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all hover:bg-slate-900" required>
                                    <option value="" disabled selected>Select a topic</option>
                                    <option value="project">Start a Project</option>
                                    <option value="partnership">Partnership Inquiry</option>
                                    <option value="career">Careers</option>
                                    <option value="other">Other</option>
                                </select>
                                @error('subject')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="space-y-2">
                                <label for="message" class="text-sm font-medium text-gray-300">Message</label>
                                <textarea id="message" name="message" rows="4" 
                                    class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all hover:bg-slate-900 resize-none"
                                    placeholder="Tell us about your project..." required></textarea>
                                @error('message')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" id="submit-btn" class="w-full inline-flex items-center justify-center gap-2 px-8 py-4 text-base font-semibold text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:scale-[1.02] transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed">
                                <span id="submit-text">Send Message</span>
                                <svg id="submit-spinner" class="hidden w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <svg id="submit-icon" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<x-footer />

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const messageEl = document.getElementById('contact-form-message');
    const submitBtn = document.getElementById('submit-btn');
    const submitText = document.getElementById('submit-text');
    const submitSpinner = document.getElementById('submit-spinner');
    const submitIcon = document.getElementById('submit-icon');

    function showMessage(text, type = 'success') {
        messageEl.textContent = text;
        messageEl.classList.remove('hidden', 'bg-green-500/10', 'border-green-500/20', 'text-green-400', 'bg-red-500/10', 'border-red-500/20', 'text-red-400');
        
        if (type === 'success') {
            messageEl.classList.add('bg-green-500/10', 'border-green-500/20', 'text-green-400');
        } else {
            messageEl.classList.add('bg-red-500/10', 'border-red-500/20', 'text-red-400');
        }
    }

    function setLoading(loading) {
        if (loading) {
            submitBtn.disabled = true;
            submitText.textContent = 'Sending...';
            submitSpinner.classList.remove('hidden');
            submitIcon.classList.add('hidden');
        } else {
            submitBtn.disabled = false;
            submitText.textContent = 'Send Message';
            submitSpinner.classList.add('hidden');
            submitIcon.classList.remove('hidden');
        }
    }

    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        setLoading(true);
        messageEl.classList.add('hidden');

        const formData = new FormData(form);
        
        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                },
            });

            const data = await response.json().catch(() => ({}));

            if (response.ok) {
                showMessage(data.message || 'Thank you for your message! We will get back to you soon.', 'success');
                form.reset();
            } else {
                let errorMessage = data.message || 'Something went wrong. Please try again.';
                
                if (data.errors) {
                    const firstError = Object.values(data.errors)[0];
                    if (Array.isArray(firstError)) {
                        errorMessage = firstError[0];
                    } else {
                        errorMessage = firstError;
                    }
                }
                
                showMessage(errorMessage, 'error');
            }
        } catch (error) {
            showMessage('Network error. Please check your connection and try again.', 'error');
        } finally {
            setLoading(false);
        }
    });
});
</script>
@endpush
@endsection
