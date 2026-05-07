<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <Head title="Website Creation & Hosting" />

    <div class="min-h-screen bg-gray-950 text-gray-100 selection:bg-emerald-500/30 selection:text-white">

        <!-- Nav -->
        <nav class="fixed top-0 z-50 w-full border-b border-white/5 bg-gray-950/80 backdrop-blur-xl">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
                <Link href="/" class="text-xl font-bold tracking-tight text-white">
                    fig<span class="text-emerald-400">.</span>
                </Link>
                <div class="flex items-center gap-4">
                    <template v-if="canLogin">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="text-sm text-gray-400 transition hover:text-white"
                        >
                            Dashboard
                        </Link>
                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="text-sm text-gray-400 transition hover:text-white"
                            >
                                Log in
                            </Link>
                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="rounded-lg bg-emerald-500 px-4 py-2 text-sm font-medium text-gray-950 transition hover:bg-emerald-400"
                            >
                                Get Started
                            </Link>
                        </template>
                    </template>
                </div>
            </div>
        </nav>

        <!-- Hero -->
        <section class="relative overflow-hidden pt-32 pb-20 sm:pt-40 sm:pb-28">
            <!-- Subtle glow -->
            <div class="pointer-events-none absolute top-0 left-1/2 -translate-x-1/2 h-[600px] w-[800px] rounded-full bg-emerald-500/5 blur-3xl"></div>

            <div class="relative mx-auto max-w-3xl px-6 text-center">
                <p class="mb-4 inline-block rounded-full border border-emerald-500/20 bg-emerald-500/10 px-4 py-1 text-xs font-medium uppercase tracking-widest text-emerald-400">
                    Simple. Honest. Pricing.
                </p>
                <h1 class="text-4xl font-bold leading-tight tracking-tight text-white sm:text-6xl">
                    Your website,<br />
                    <span class="text-emerald-400">sorted.</span>
                </h1>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-relaxed text-gray-400">
                    We build clean, fast websites and host them for you. No hidden fees, no nonsense. Pick the plan that fits how you work.
                </p>
                <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a
                        href="#pricing"
                        class="w-full rounded-lg bg-emerald-500 px-8 py-3.5 text-center text-sm font-semibold text-gray-950 shadow-lg shadow-emerald-500/20 transition hover:bg-emerald-400 hover:shadow-emerald-500/30 sm:w-auto"
                    >
                        See Pricing
                    </a>
                    <a
                        href="#how-it-works"
                        class="w-full rounded-lg border border-white/10 px-8 py-3.5 text-center text-sm font-medium text-gray-300 transition hover:border-white/20 hover:text-white sm:w-auto"
                    >
                        How It Works
                    </a>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section id="how-it-works" class="border-t border-white/5 bg-gray-900/50 py-20 sm:py-28">
            <div class="mx-auto max-w-6xl px-6">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-2xl font-bold text-white sm:text-3xl">Everything you need, nothing you don't</h2>
                    <p class="mt-4 text-gray-400">We keep things lean so you get a fast, reliable site without the bloat.</p>
                </div>
                <div class="mt-16 grid gap-8 sm:grid-cols-3">
                    <div class="rounded-2xl border border-white/5 bg-gray-900 p-8">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/10">
                            <svg class="h-5 w-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42" />
                            </svg>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-white">Custom Design</h3>
                        <p class="mt-2 text-sm leading-relaxed text-gray-400">
                            A bespoke site designed around your brand. No templates, no page builders — just clean code that loads fast.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-white/5 bg-gray-900 p-8">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/10">
                            <svg class="h-5 w-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
                            </svg>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-white">Reliable Hosting</h3>
                        <p class="mt-2 text-sm leading-relaxed text-gray-400">
                            Fast UK hosting with SSL, backups, and monitoring included. Your site stays online — we handle the rest.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-white/5 bg-gray-900 p-8">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/10">
                            <svg class="h-5 w-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182" />
                            </svg>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-white">Ongoing Support</h3>
                        <p class="mt-2 text-sm leading-relaxed text-gray-400">
                            Need a change? On the managed plan we handle updates for you. On self-managed, you get a simple CMS to do it yourself.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section id="pricing" class="border-t border-white/5 py-20 sm:py-28">
            <div class="mx-auto max-w-6xl px-6">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-2xl font-bold text-white sm:text-3xl">Two plans, no surprises</h2>
                    <p class="mt-4 text-gray-400">Both include design, build, hosting, and SSL. Pick how you want to manage content.</p>
                </div>

                <div class="mx-auto mt-16 grid max-w-4xl gap-8 sm:grid-cols-2">

                    <!-- Self Managed -->
                    <div class="relative rounded-2xl border-2 border-emerald-500/50 bg-gray-900 p-8 sm:p-10">
                        <div class="absolute -top-3 right-8">
                            <span class="rounded-full bg-emerald-500 px-3 py-1 text-xs font-bold uppercase tracking-wider text-gray-950">
                                Popular
                            </span>
                        </div>
                        <h3 class="text-sm font-medium uppercase tracking-wider text-emerald-400">Self Managed</h3>
                        <div class="mt-4 flex items-baseline gap-1">
                            <span class="text-5xl font-bold tracking-tight text-white">£20</span>
                            <span class="text-lg text-gray-500">/month</span>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-gray-400">
                            You manage your own content through a simple CMS. We build it, you run it.
                        </p>
                        <ul class="mt-8 space-y-3">
                            <li class="flex items-start gap-3 text-sm text-gray-300">
                                <svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Custom designed website
                            </li>
                            <li class="flex items-start gap-3 text-sm text-gray-300">
                                <svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Hosting &amp; SSL included
                            </li>
                            <li class="flex items-start gap-3 text-sm text-gray-300">
                                <svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Simple CMS dashboard
                            </li>
                            <li class="flex items-start gap-3 text-sm text-gray-300">
                                <svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Email support
                            </li>
                        </ul>
                        <a
                            href="#contact"
                            class="mt-10 block w-full rounded-lg bg-emerald-500 py-3 text-center text-sm font-semibold text-gray-950 shadow-lg shadow-emerald-500/20 transition hover:bg-emerald-400 hover:shadow-emerald-500/30"
                        >
                            Get Started
                        </a>
                    </div>

                    <!-- Fig Managed -->
                    <div class="relative rounded-2xl border border-white/5 bg-gray-900 p-8 sm:p-10">
                        <h3 class="text-sm font-medium uppercase tracking-wider text-gray-400">Fig Managed</h3>
                        <div class="mt-4 flex items-baseline gap-1">
                            <span class="text-5xl font-bold tracking-tight text-white">£200</span>
                            <span class="text-lg text-gray-500">/month</span>
                        </div>
                        <p class="mt-4 text-sm leading-relaxed text-gray-400">
                            We handle everything — content updates, tweaks, and changes. Just send us what you need.
                        </p>
                        <ul class="mt-8 space-y-3">
                            <li class="flex items-start gap-3 text-sm text-gray-300">
                                <svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Everything in Self Managed
                            </li>
                            <li class="flex items-start gap-3 text-sm text-gray-300">
                                <svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                We update your content for you
                            </li>
                            <li class="flex items-start gap-3 text-sm text-gray-300">
                                <svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Design tweaks &amp; revisions
                            </li>
                            <li class="flex items-start gap-3 text-sm text-gray-300">
                                <svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                                Priority support
                            </li>
                        </ul>
                        <a
                            href="#contact"
                            class="mt-10 block w-full rounded-lg border border-white/10 py-3 text-center text-sm font-semibold text-white transition hover:border-white/25 hover:bg-white/5"
                        >
                            Get Started
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- CTA / Contact -->
        <section id="contact" class="border-t border-white/5 bg-gray-900/50 py-20 sm:py-28">
            <div class="mx-auto max-w-2xl px-6 text-center">
                <h2 class="text-2xl font-bold text-white sm:text-3xl">Ready to get started?</h2>
                <p class="mt-4 text-gray-400">
                    Drop us a message and we'll get back to you within 24 hours. No pressure, no hard sell.
                </p>
                <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a
                        href="mailto:hello@fig.uk"
                        class="w-full rounded-lg bg-emerald-500 px-8 py-3.5 text-center text-sm font-semibold text-gray-950 shadow-lg shadow-emerald-500/20 transition hover:bg-emerald-400 hover:shadow-emerald-500/30 sm:w-auto"
                    >
                        Get In Touch
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-white/5 py-10">
            <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-6 sm:flex-row">
                <span class="text-sm font-bold tracking-tight text-white">fig<span class="text-emerald-400">.</span></span>
                <p class="text-xs text-gray-500">&copy; {{ new Date().getFullYear() }} Fig. All rights reserved.</p>
            </div>
        </footer>

    </div>
</template>
