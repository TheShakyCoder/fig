<script setup>
import { ref, onMounted } from 'vue';

const visible = ref(false);

onMounted(() => {
    if (typeof document !== 'undefined') {
        const consent = document.cookie
            .split('; ')
            .find((row) => row.startsWith('cookie_consent='));
        if (!consent) {
            visible.value = true;
        }
    }
});

const setCookie = (value) => {
    const expires = new Date();
    expires.setFullYear(expires.getFullYear() + 1);
    document.cookie = `cookie_consent=${value}; expires=${expires.toUTCString()}; path=/; SameSite=Lax`;
    visible.value = false;
};
</script>

<template>
    <Transition
        enter-active-class="transition duration-300 ease-out"
        enter-from-class="translate-y-full opacity-0"
        enter-to-class="translate-y-0 opacity-100"
        leave-active-class="transition duration-200 ease-in"
        leave-from-class="translate-y-0 opacity-100"
        leave-to-class="translate-y-full opacity-0"
    >
        <div
            v-if="visible"
            class="fixed bottom-0 inset-x-0 z-50 p-4 sm:p-6"
        >
            <div class="mx-auto max-w-4xl rounded-2xl border border-white/10 bg-gray-900 px-6 py-5 shadow-2xl sm:flex sm:items-center sm:justify-between sm:gap-6">
                <p class="text-sm text-gray-400">
                    We use cookies to ensure you get the best experience on our site. By continuing to browse, you agree to our use of cookies.
                    <a href="/privacy" class="text-emerald-400 underline hover:text-emerald-300 transition">Privacy Policy</a>
                </p>
                <div class="mt-4 flex shrink-0 gap-3 sm:mt-0">
                    <button
                        @click="setCookie('declined')"
                        class="rounded-xl border border-white/10 px-4 py-2 text-sm font-medium text-gray-400 transition hover:bg-white/5 hover:text-white"
                    >
                        Decline
                    </button>
                    <button
                        @click="setCookie('accepted')"
                        class="rounded-xl bg-emerald-500 px-4 py-2 text-sm font-semibold text-gray-950 transition hover:bg-emerald-400"
                    >
                        Accept
                    </button>
                </div>
            </div>
        </div>
    </Transition>
</template>
