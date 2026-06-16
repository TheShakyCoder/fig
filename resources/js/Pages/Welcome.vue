<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import { computed, ref } from "vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});

const domainGroups = [
    {
        price: 20,
        tlds: [".co.uk", ".uk", ".org.uk", ".me.uk", ".ltd.uk"],
    },
    {
        price: 40,
        tlds: [".com", ".net", ".org", ".biz", ".me", ".info"],
    },
    {
        price: 70,
        tlds: [".co", ".tv", ".eco", ".io"],
    },
];

const demos = [
    {
        title: "Sweet Retailer",
        url: "https://sweets.stupidly.uk/",
    },
    {
        title: "Candles Shop",
        url: "https://candles.stupidly.uk/",
    },
    {
        title: "Accountants",
        url: "https://accountants.stupidly.uk/",
    },
];

const domainOptions = domainGroups.flatMap((g) =>
    g.tlds.map((tld) => ({ tld, price: g.price }))
);

const form = useForm({
    name: "",
    email: "",
    postcode: "",
    message: "",
    domain: ".co.uk",
});

const selectedDomainPrice = computed(
    () => domainOptions.find((o) => o.tld === form.domain)?.price ?? 0
);

const submitted = ref(false);

const submit = () => {
    form.post("/contact", {
        preserveScroll: true,
        onSuccess: () => {
            submitted.value = true;
            form.reset();
        },
    });
};
</script>

<template>
    <Head title="Website Creation & Hosting" />

    <div
        class="min-h-screen bg-gray-950 text-gray-100 selection:bg-emerald-500/30 selection:text-white"
    >
        <!-- Nav -->
        <nav
            class="fixed top-0 z-50 w-full border-b border-white/5 bg-gray-950/80 backdrop-blur-xl"
        >
            <div
                class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4"
            >
                <Link
                    href="/"
                    class="text-xl font-bold tracking-tight text-white"
                >
                    fig<span class="text-emerald-400">.</span>
                </Link>
                <div class="flex items-center gap-4">
                    <template v-if="canLogin">
                        <Link
                            v-if="$page.props.auth.user"
                            href="/dashboard"
                            class="text-sm text-gray-400 transition hover:text-white"
                        >
                            Dashboard
                        </Link>
                        <template v-else>
                            <Link
                                href="/login"
                                class="text-sm text-gray-400 transition hover:text-white"
                            >
                                Log in
                            </Link>
                            <Link
                                v-if="canRegister"
                                href="/register"
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
            <div
                class="pointer-events-none absolute top-0 left-1/2 -translate-x-1/2 h-[600px] w-[800px] rounded-full bg-emerald-500/5 blur-3xl"
            ></div>

            <div class="relative mx-auto max-w-3xl px-6 text-center">
                <p
                    class="mb-4 inline-block rounded-full border border-emerald-500/20 bg-emerald-500/10 px-4 py-1 text-xs font-medium uppercase tracking-widest text-emerald-400"
                >
                    Simple. Honest. Pricing.
                </p>
                <h1
                    class="text-4xl font-bold leading-tight tracking-tight text-white sm:text-6xl"
                >
                    Your website,<br />
                    <span class="text-emerald-400">sorted.</span>
                </h1>
                <p
                    class="mx-auto mt-6 max-w-xl text-lg leading-relaxed text-gray-400"
                >
                    We build clean, fast websites and host them for you. No
                    hidden fees, no nonsense. Just pick a domain.
                </p>
                <div
                    class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row"
                >
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
        <section
            id="how-it-works"
            class="border-t border-white/5 bg-gray-900/50 py-20 sm:py-28"
        >
            <div class="mx-auto max-w-6xl px-6">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-2xl font-bold text-white sm:text-3xl">
                        Everything you need, nothing you don't
                    </h2>
                    <p class="mt-4 text-gray-400">
                        We keep things lean so you get a fast, reliable site
                        without the bloat.
                    </p>
                </div>
                <div class="mt-16 grid gap-8 sm:grid-cols-3">
                    <div
                        class="rounded-2xl border border-white/5 bg-gray-900 p-8"
                    >
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/10"
                        >
                            <svg
                                class="h-5 w-5 text-emerald-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42"
                                />
                            </svg>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-white">
                            Custom Design
                        </h3>
                        <p class="mt-2 text-sm leading-relaxed text-gray-400">
                            A bespoke site designed around your brand. No
                            templates, no page builders — just clean code that
                            loads fast.
                        </p>
                    </div>
                    <div
                        class="rounded-2xl border border-white/5 bg-gray-900 p-8"
                    >
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/10"
                        >
                            <svg
                                class="h-5 w-5 text-emerald-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z"
                                />
                            </svg>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-white">
                            Reliable Hosting
                        </h3>
                        <p class="mt-2 text-sm leading-relaxed text-gray-400">
                            Fast, secure hosting with a domain included. Your site stays online — we
                            handle the rest.
                        </p>
                    </div>
                    <div
                        class="rounded-2xl border border-white/5 bg-gray-900 p-8"
                    >
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-500/10"
                        >
                            <svg
                                class="h-5 w-5 text-emerald-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182"
                                />
                            </svg>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-white">
                            Ongoing Support
                        </h3>
                        <p class="mt-2 text-sm leading-relaxed text-gray-400">
                            Need a change? Let's talk about it.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Demos -->
        <section id="demos" class="border-t border-white/5 py-20 sm:py-28">
            <div class="mx-auto max-w-6xl px-6">
                <div class="mx-auto max-w-2xl text-center">
                    <p
                        class="mb-4 inline-block rounded-full border border-emerald-500/20 bg-emerald-500/10 px-4 py-1 text-xs font-medium uppercase tracking-widest text-emerald-400"
                    >
                        Demos
                    </p>
                    <h2 class="text-2xl font-bold text-white sm:text-3xl">
                        See what we can build
                    </h2>
                    <p class="mt-4 text-gray-400">
                        A few sample sites to give you a feel for our work.
                    </p>
                </div>

                <div
                    class="mx-auto mt-16 grid max-w-5xl gap-6 sm:grid-cols-2 lg:grid-cols-3"
                >
                    <a
                        v-for="demo in demos"
                        :key="demo.url"
                        :href="demo.url"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group overflow-hidden rounded-2xl border border-white/5 bg-gray-900 transition hover:border-emerald-500/30"
                    >
                        <div
                            class="relative aspect-[4/3] overflow-hidden bg-gray-950"
                        >
                            <img
                                :src="`https://image.thum.io/get/viewportWidth/1200/width/1200/crop/900/${demo.url}`"
                                :alt="demo.title"
                                loading="lazy"
                                class="absolute inset-0 h-full w-full object-cover object-top"
                            />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-gray-950/40 to-transparent"
                            ></div>
                        </div>
                        <div
                            class="flex items-center justify-between border-t border-white/5 px-5 py-4"
                        >
                            <div>
                                <p
                                    class="text-sm font-semibold text-white"
                                >
                                    {{ demo.title }}
                                </p>
                                <p class="text-xs text-gray-500">
                                    {{ demo.url.replace(/^https?:\/\//, "").replace(/\/$/, "") }}
                                </p>
                            </div>
                            <svg
                                class="h-4 w-4 text-gray-500 transition group-hover:text-emerald-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"
                                />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section id="pricing" class="border-t border-white/5 py-20 sm:py-28">
            <div class="mx-auto max-w-6xl px-6">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-2xl font-bold text-white sm:text-3xl">
                        Simple, honest pricing
                    </h2>
                    <p class="mt-4 text-gray-400">
                        No monthly fees, no surprises. Just a small one-off
                        design fee and your domain.
                    </p>
                </div>

                <div class="mx-auto mt-16 max-w-xl">
                    <div class="rounded-2xl border-2 border-emerald-500/50 bg-gray-900 p-8 sm:p-10">
                        <ul class="space-y-6">
                            <li class="flex items-baseline justify-between gap-4 border-b border-white/5 pb-6">
                                <div>
                                    <p class="text-sm font-medium uppercase tracking-wider text-emerald-400">
                                        Design &amp; Build
                                    </p>
                                    <p class="mt-1 text-sm text-gray-400">
                                        One-off fee to get your site live.
                                    </p>
                                </div>
                                <p class="whitespace-nowrap text-3xl font-bold tracking-tight text-white">
                                    £49
                                </p>
                            </li>
                            <li class="flex items-baseline justify-between gap-4 border-b border-white/5 pb-6">
                                <div>
                                    <p class="text-sm font-medium uppercase tracking-wider text-emerald-400">
                                        Hosting
                                    </p>
                                    <p class="mt-1 text-sm text-gray-400">
                                        SSL Certificate included.
                                    </p>
                                </div>
                                <p class="whitespace-nowrap text-3xl font-bold tracking-tight text-emerald-400">
                                    Free
                                </p>
                            </li>
                            <li>
                                <div class="flex items-baseline justify-between gap-4">
                                    <div>
                                        <p class="text-sm font-medium uppercase tracking-wider text-emerald-400">
                                            Domain
                                        </p>
                                        <p class="mt-1 text-sm text-gray-400">
                                            {{ form.domain }} — annual fee.
                                        </p>
                                    </div>
                                    <p class="whitespace-nowrap text-3xl font-bold tracking-tight text-gray-300">
                                        £{{ selectedDomainPrice }}
                                    </p>
                                </div>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <button
                                        v-for="opt in domainOptions"
                                        :key="opt.tld"
                                        type="button"
                                        @click="form.domain = opt.tld"
                                        class="rounded-full border px-3 py-1 text-xs transition"
                                        :class="form.domain === opt.tld
                                            ? 'border-emerald-500/50 bg-emerald-500/10 text-emerald-300'
                                            : 'border-white/10 bg-gray-800 text-gray-400 hover:border-white/25 hover:text-gray-200'"
                                    >
                                        {{ opt.tld }}
                                        <span class="ml-1 text-gray-500">£{{ opt.price }}</span>
                                    </button>
                                </div>
                            </li>
                        </ul>
                        <a
                            href="#contact"
                            class="mt-10 block w-full rounded-lg bg-emerald-500 py-3 text-center text-sm font-semibold text-gray-950 shadow-lg shadow-emerald-500/20 transition hover:bg-emerald-400 hover:shadow-emerald-500/30"
                        >
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section id="about" class="border-t border-white/5 py-20 sm:py-28">
            <div class="mx-auto max-w-6xl px-6">
                <div class="grid items-center gap-12 sm:grid-cols-2">
                    <div>
                        <p
                            class="mb-4 inline-block rounded-full border border-emerald-500/20 bg-emerald-500/10 px-4 py-1 text-xs font-medium uppercase tracking-widest text-emerald-400"
                        >
                            About Us
                        </p>
                        <h2 class="text-2xl font-bold text-white sm:text-3xl">
                            Fig Limited
                        </h2>
                        <p class="mt-4 text-sm leading-relaxed text-gray-400">
                            We're a small, UK-based web studio that believes
                            great websites shouldn't cost a fortune. Founded
                            with a simple idea — build honest, well-crafted
                            sites for businesses that just want something that
                            works.
                        </p>
                        <p class="mt-4 text-sm leading-relaxed text-gray-400">
                            No jargon, no upsells, no 47-page proposals. We sit
                            down, listen to what you need, and build it. Every
                            site we deliver is hand-coded, fast, and designed to
                            look good for years — not months.
                        </p>
                        <p class="mt-4 text-sm leading-relaxed text-gray-400">
                            Whether you're a sole trader who needs a single page
                            or a growing business that wants something more, we
                            keep things simple so you can focus on what you do
                            best.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div
                            class="rounded-2xl border border-white/5 bg-gray-900 p-6 text-center"
                        >
                            <p class="mt-1 text-xs text-gray-500">
                                Years in business
                            </p>
                            <p class="text-2xl font-bold text-emerald-400">
                                25+
                            </p>
                        </div>
                        <div
                            class="rounded-2xl border border-white/5 bg-gray-900 p-6 text-center"
                        >
                            <p class="mt-1 text-xs text-gray-500">
                                Based & Registered
                            </p>
                            <p class="text-2xl font-bold text-emerald-400">
                                Preston
                            </p>
                        </div>
                        <div
                            class="rounded-2xl border border-white/5 bg-gray-900 p-6 text-center"
                        >
                            <p class="mt-1 text-xs text-gray-500">Practicing</p>
                            <p class="text-2xl font-bold text-emerald-400">
                                People-First
                            </p>
                        </div>
                        <div
                            class="rounded-2xl border border-white/5 bg-gray-900 p-6 text-center"
                        >
                            <p class="mt-1 text-xs text-gray-500">Supporting</p>
                            <p class="text-2xl font-bold text-emerald-400">
                                Small Businesses
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA / Contact -->
        <section
            id="contact"
            class="border-t border-white/5 bg-gray-900/50 py-20 sm:py-28"
        >
            <div class="mx-auto max-w-xl px-6">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-white sm:text-3xl">
                        Ready to get started?
                    </h2>
                    <p class="mt-4 text-gray-400">
                        Drop us a message and we'll get back to you within 24
                        hours.
                    </p>
                </div>

                <!-- Chat-style contact form -->
                <div
                    class="mt-10 overflow-hidden rounded-2xl border border-white/5 bg-gray-900"
                >
                    <!-- Chat header -->
                    <div
                        class="flex items-center gap-3 border-b border-white/5 px-5 py-4"
                    >
                        <div
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500/10"
                        >
                            <span class="text-sm font-bold text-emerald-400"
                                >f.</span
                            >
                        </div>
                        <div>
                            <p class="text-sm font-medium text-white">Fig</p>
                            <p class="text-xs text-emerald-400">
                                We typically reply within a few hours
                            </p>
                        </div>
                    </div>

                    <!-- Chat body -->
                    <div class="px-5 py-6">
                        <!-- Fig's greeting bubble -->
                        <div class="mb-6 flex items-start gap-3">
                            <div
                                class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-emerald-500/10 mt-0.5"
                            >
                                <span
                                    class="text-[10px] font-bold text-emerald-400"
                                    >f.</span
                                >
                            </div>
                            <div
                                class="rounded-2xl rounded-tl-sm bg-gray-800 px-4 py-3"
                            >
                                <p class="text-sm text-gray-300">
                                    Hi there! Tell us a bit about what you need
                                    and we'll get back to you.
                                </p>
                            </div>
                        </div>

                        <Transition
                            enter-active-class="transition duration-300 ease-out"
                            enter-from-class="opacity-0 translate-y-2"
                            enter-to-class="opacity-100 translate-y-0"
                        >
                            <!-- Success state -->
                            <div
                                v-if="submitted"
                                class="rounded-2xl border border-emerald-500/20 bg-emerald-500/10 p-6 text-center"
                            >
                                <div
                                    class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-emerald-500/20"
                                >
                                    <svg
                                        class="h-6 w-6 text-emerald-400"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m4.5 12.75 6 6 9-13.5"
                                        />
                                    </svg>
                                </div>
                                <p class="text-lg font-semibold text-white">
                                    Message sent!
                                </p>
                                <p class="mt-1 text-sm text-emerald-300/70">
                                    Thanks! We've got your message and will be
                                    in touch soon.
                                </p>
                            </div>
                        </Transition>

                        <!-- Form (user's reply) -->
                        <form
                            v-if="!submitted"
                            @submit.prevent="submit"
                            class="space-y-3"
                        >
                            <div class="flex gap-3">
                                <input
                                    v-model="form.name"
                                    type="text"
                                    placeholder="Your name"
                                    required
                                    class="w-1/2 rounded-xl border border-white/10 bg-gray-800 px-4 py-3 text-sm text-white placeholder-gray-500 transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50"
                                />
                                <input
                                    v-model="form.email"
                                    type="email"
                                    placeholder="your@email.com"
                                    required
                                    class="w-1/2 rounded-xl border border-white/10 bg-gray-800 px-4 py-3 text-sm text-white placeholder-gray-500 transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50"
                                />
                            </div>
                            <input
                                v-model="form.postcode"
                                type="text"
                                placeholder="Your postcode"
                                class="w-full rounded-xl border border-white/10 bg-gray-800 px-4 py-3 text-sm text-white placeholder-gray-500 transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50"
                            />
                            <p class="text-sm text-gray-500">
                                If you're based in the Penwortham area, we'd
                                love to come and visit you.
                            </p>
                            <div class="flex items-center justify-between gap-3 rounded-xl border border-white/10 bg-gray-800 px-4 py-3">
                                <div>
                                    <p class="text-xs uppercase tracking-wider text-emerald-400">
                                        Chosen domain
                                    </p>
                                    <p class="mt-0.5 text-sm text-white">
                                        {{ form.domain }}
                                        <span class="text-gray-500">— £{{ selectedDomainPrice }}/year</span>
                                    </p>
                                </div>
                                <a
                                    href="#pricing"
                                    class="text-xs text-gray-400 underline-offset-2 transition hover:text-white hover:underline"
                                >
                                    Change
                                </a>
                            </div>
                            <div class="relative">
                                <textarea
                                    v-model="form.message"
                                    rows="3"
                                    placeholder="Tell us about your project..."
                                    class="w-full resize-none rounded-xl border border-white/10 bg-gray-800 px-4 py-3 pr-14 text-sm text-white placeholder-gray-500 transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50"
                                ></textarea>
                                <button
                                    type="submit"
                                    :disabled="form.processing"
                                    class="absolute bottom-3 right-3 flex h-8 w-8 items-center justify-center rounded-lg bg-emerald-500 text-gray-950 transition hover:bg-emerald-400 disabled:opacity-50"
                                >
                                    <svg
                                        class="h-4 w-4"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
                                        />
                                    </svg>
                                </button>
                            </div>
                            <p
                                v-if="
                                    form.errors.name ||
                                    form.errors.email ||
                                    form.errors.postcode ||
                                    form.errors.message
                                "
                                class="text-xs text-red-400"
                            >
                                {{
                                    form.errors.name ||
                                    form.errors.email ||
                                    form.errors.postcode ||
                                    form.errors.message
                                }}
                            </p>
                        </form>
                    </div>
                </div>
                <!-- Contact details -->
                <div class="mt-10 grid gap-4 sm:grid-cols-2">
                    <a
                        href="mailto:support@fig.ltd.uk"
                        class="flex items-center gap-4 rounded-2xl border border-white/5 bg-gray-900 p-5 transition hover:border-white/10"
                    >
                        <div
                            class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-lg bg-emerald-500/10"
                        >
                            <svg
                                class="h-5 w-5 text-emerald-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"
                                />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Email us</p>
                            <p class="text-sm font-medium text-white">
                                support@fig.ltd.uk
                            </p>
                        </div>
                    </a>
                    <a
                        href="https://wa.me/447515382159"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex items-center gap-4 rounded-2xl border border-white/5 bg-gray-900 p-5 transition hover:border-white/10"
                    >
                        <div
                            class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-lg bg-emerald-500/10"
                        >
                            <svg
                                class="h-5 w-5 text-emerald-400"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"
                                />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">WhatsApp</p>
                            <p class="text-sm font-medium text-white">
                                07515 382159
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-white/5 py-10">
            <div
                class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-6 sm:flex-row"
            >
                <span class="text-sm font-bold tracking-tight text-white"
                    >fig<span class="text-emerald-400">.</span></span
                >
                <div class="flex items-center gap-4">
                    <Link href="/privacy" class="text-xs text-gray-500 hover:text-gray-400">Privacy</Link>
                    <Link href="/terms" class="text-xs text-gray-500 hover:text-gray-400">Terms</Link>
                    <p class="text-xs text-gray-500">
                        &copy; {{ new Date().getFullYear() }} Fig Limited
                    </p>
                </div>
            </div>
        </footer>
    </div>
</template>
