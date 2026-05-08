<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';

const props = defineProps({
    business: Object,
});

const planLabel = (plan) => plan === 'fig_managed' ? 'Fig Managed — £200/month' : 'Self Managed — £20/month';

const statusColor = (status) => ({
    active: 'bg-emerald-500/10 text-emerald-400',
    suspended: 'bg-amber-500/10 text-amber-400',
    cancelled: 'bg-red-500/10 text-red-400',
}[status] || 'text-gray-400');

const destroy = () => {
    if (confirm('Are you sure you want to delete this business?')) {
        router.delete(route('businesses.destroy', props.business.id));
    }
};
</script>

<template>
    <Head :title="business.name" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold leading-tight text-white">
                    {{ business.name }}
                </h2>
                <div class="flex items-center gap-3">
                    <Link
                        :href="route('businesses.edit', business.id)"
                        class="rounded-xl border border-white/10 bg-gray-800 px-4 py-2 text-sm font-medium text-white transition hover:bg-gray-700"
                    >
                        Edit
                    </Link>
                    <button
                        @click="destroy"
                        class="rounded-xl border border-red-500/20 bg-red-500/10 px-4 py-2 text-sm font-medium text-red-400 transition hover:bg-red-500/20"
                    >
                        Delete
                    </button>
                </div>
            </div>
        </template>

        <div class="py-8">
            <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
                <div class="rounded-2xl border border-white/5 bg-gray-900 p-6 sm:p-8">
                    <dl class="space-y-6">
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div>
                                <dt class="text-sm text-gray-500">Business Name</dt>
                                <dd class="mt-1 text-white">{{ business.name }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm text-gray-500">Domain</dt>
                                <dd class="mt-1 text-white">
                                    <a
                                        v-if="business.domain"
                                        :href="`https://${business.domain}`"
                                        target="_blank"
                                        class="text-emerald-400 hover:text-emerald-300 transition"
                                    >
                                        {{ business.domain }}
                                    </a>
                                    <span v-else class="text-gray-600">—</span>
                                </dd>
                            </div>
                            <div>
                                <dt class="text-sm text-gray-500">Owner</dt>
                                <dd class="mt-1 text-white">{{ business.owner_name }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm text-gray-500">Email</dt>
                                <dd class="mt-1">
                                    <a :href="`mailto:${business.email}`" class="text-emerald-400 hover:text-emerald-300 transition">
                                        {{ business.email }}
                                    </a>
                                </dd>
                            </div>
                            <div>
                                <dt class="text-sm text-gray-500">Phone</dt>
                                <dd class="mt-1 text-white">{{ business.phone || '—' }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm text-gray-500">Plan</dt>
                                <dd class="mt-1 text-white">{{ planLabel(business.plan) }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm text-gray-500">Status</dt>
                                <dd class="mt-1">
                                    <span
                                        :class="statusColor(business.status)"
                                        class="inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium capitalize"
                                    >
                                        {{ business.status }}
                                    </span>
                                </dd>
                            </div>
                        </div>
                        <div v-if="business.notes">
                            <dt class="text-sm text-gray-500">Notes</dt>
                            <dd class="mt-1 whitespace-pre-line text-gray-300">{{ business.notes }}</dd>
                        </div>
                    </dl>
                </div>

                <div class="mt-6">
                    <Link
                        :href="route('businesses.index')"
                        class="text-sm text-gray-400 transition hover:text-white"
                    >
                        &larr; Back to Businesses
                    </Link>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
