<script setup>
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    business: Object,
});
</script>

<template>
    <Head :title="`${business.name} — Coming Soon`" />

    <div class="flex min-h-screen flex-col items-center justify-center bg-gray-950 px-6 text-center">
        <!-- Glow -->
        <div class="pointer-events-none absolute top-0 left-1/2 -translate-x-1/2 h-[500px] w-[700px] rounded-full bg-emerald-500/5 blur-3xl"></div>

        <div class="relative">
            <span class="text-xl font-bold tracking-tight text-white">fig<span class="text-emerald-400">.</span></span>
        </div>

        <h1 class="relative mt-10 text-4xl font-bold tracking-tight text-white sm:text-5xl">
            {{ business.name }}
        </h1>

        <p class="relative mt-4 max-w-md text-lg text-gray-400">
            We're building something great. This website is currently under construction and will be live soon.
        </p>

        <div v-if="business.domain" class="relative mt-6 rounded-xl border border-white/10 bg-gray-900 px-6 py-3">
            <span class="text-sm text-gray-500">Future home of</span>
            <p class="text-lg font-medium text-emerald-400">{{ business.domain }}</p>
        </div>

        <div class="relative mt-12 flex items-center gap-2 text-sm text-gray-600">
            <span>Powered by</span>
            <span class="font-bold text-gray-500">fig<span class="text-emerald-500">.</span></span>
        </div>
    </div>
</template>
