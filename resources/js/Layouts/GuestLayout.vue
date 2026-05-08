<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="flex min-h-screen flex-col items-center bg-gray-950 pt-6 sm:justify-center sm:pt-0">
        <!-- Subtle glow -->
        <div class="pointer-events-none absolute top-0 left-1/2 -translate-x-1/2 h-[400px] w-[600px] rounded-full bg-emerald-500/5 blur-3xl"></div>

        <div class="relative">
            <Link href="/">
                <span class="text-3xl font-bold tracking-tight text-white">fig<span class="text-emerald-400">.</span></span>
            </Link>
        </div>

        <div class="relative mt-8 w-full overflow-hidden rounded-2xl border border-white/5 bg-gray-900 px-8 py-8 shadow-xl sm:max-w-md">
            <slot />
        </div>

        <p class="mt-6 text-xs text-gray-600">
            &copy; {{ new Date().getFullYear() }} Fig Limited
        </p>
    </div>
</template>
