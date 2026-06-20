<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';

const props = defineProps({
    businesses: Object,
    filters: Object,
});

const search = ref(props.filters?.search || '');

watch(search, (value) => {
    router.get(route('admin.businesses.index'), { search: value }, {
        preserveState: true,
        replace: true,
    });
});

const destroy = (id) => {
    if (confirm('Are you sure you want to delete this business?')) {
        router.delete(route('admin.businesses.destroy', id));
    }
};
</script>

<template>
    <Head title="Businesses" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold leading-tight text-white">
                    Businesses
                </h2>
                <Link
                    :href="route('admin.businesses.create')"
                    class="rounded-xl bg-emerald-500 px-4 py-2 text-sm font-semibold text-gray-950 transition hover:bg-emerald-400"
                >
                    Add Business
                </Link>
            </div>
        </template>

        <div class="py-8">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <!-- Flash message -->
                <div
                    v-if="$page.props.flash?.success"
                    class="mb-6 rounded-xl border border-emerald-500/20 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-400"
                >
                    {{ $page.props.flash.success }}
                </div>

                <!-- Search -->
                <div class="mb-6">
                    <input
                        v-model="search"
                        type="text"
                        placeholder="Search businesses..."
                        class="w-full rounded-xl border border-white/10 bg-gray-800 px-4 py-3 text-sm text-white placeholder-gray-500 transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50 sm:max-w-xs"
                    />
                </div>

                <!-- Table -->
                <div class="overflow-hidden rounded-2xl border border-white/5 bg-gray-900">
                    <table class="w-full text-left text-sm">
                        <thead class="border-b border-white/5 text-xs uppercase tracking-wider text-gray-500">
                            <tr>
                                <th class="px-6 py-4">Name</th>
                                <th class="px-6 py-4">Domain</th>
                                <th class="px-6 py-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            <tr
                                v-for="business in businesses.data"
                                :key="business.id"
                                class="transition hover:bg-white/[0.02]"
                            >
                                <td class="px-6 py-4">
                                    <Link
                                        :href="route('admin.businesses.show', business.id)"
                                        class="font-medium text-white hover:text-emerald-400 transition"
                                    >
                                        {{ business.name }}
                                    </Link>
                                </td>
                                <td class="px-6 py-4 text-gray-400">
                                    {{ business.domain || '—' }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <Link
                                        :href="route('admin.businesses.edit', business.id)"
                                        class="text-gray-400 transition hover:text-white mr-3"
                                    >
                                        Edit
                                    </Link>
                                    <button
                                        @click="destroy(business.id)"
                                        class="text-gray-400 transition hover:text-red-400"
                                    >
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            <tr v-if="businesses.data.length === 0">
                                <td colspan="3" class="px-6 py-12 text-center text-gray-500">
                                    No businesses found.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div v-if="businesses.last_page > 1" class="mt-6 flex justify-center gap-2">
                    <template v-for="link in businesses.links" :key="link.label">
                        <Link
                            v-if="link.url"
                            :href="link.url"
                            v-html="link.label"
                            class="rounded-lg px-3 py-2 text-sm transition"
                            :class="link.active
                                ? 'bg-emerald-500 text-gray-950 font-semibold'
                                : 'text-gray-400 hover:bg-white/5 hover:text-white'"
                        />
                        <span
                            v-else
                            v-html="link.label"
                            class="rounded-lg px-3 py-2 text-sm text-gray-600"
                        />
                    </template>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
