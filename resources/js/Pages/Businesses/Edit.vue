<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import BusinessForm from './Partials/BusinessForm.vue';
import { Head, useForm } from '@inertiajs/vue3';

const props = defineProps({
    business: Object,
});

const form = useForm({
    name: props.business.name,
    domain: props.business.domain || '',
    owner_name: props.business.owner_name,
    email: props.business.email,
    phone: props.business.phone || '',
    plan: props.business.plan,
    status: props.business.status,
    notes: props.business.notes || '',
});

const submit = () => {
    form.put(route('businesses.update', props.business.id));
};
</script>

<template>
    <Head :title="`Edit ${business.name}`" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-white">
                Edit {{ business.name }}
            </h2>
        </template>

        <div class="py-8">
            <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
                <div class="rounded-2xl border border-white/5 bg-gray-900 p-6 sm:p-8">
                    <BusinessForm :form="form" submit-label="Update Business" @submit="submit" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
