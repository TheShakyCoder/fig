<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
  form: Object,
  submitLabel: {
    type: String,
    default: "Save",
  },
});

defineEmits(["submit"]);
</script>

<template>
  <form @submit.prevent="$emit('submit')" class="space-y-6">
    <div class="grid gap-6 sm:grid-cols-2">
      <!-- Name -->
      <div>
        <InputLabel for="name" value="Business Name" />
        <TextInput
          id="name"
          type="text"
          class="mt-1 block w-full"
          v-model="form.name"
          required
          placeholder="Acme Ltd"
        />
        <InputError class="mt-2" :message="form.errors.name" />
      </div>

      <!-- Domain -->
      <div>
        <InputLabel for="domain" value="Domain" />
        <TextInput
          id="domain"
          type="text"
          class="mt-1 block w-full"
          v-model="form.domain"
          placeholder="acme.co.uk"
        />
        <InputError class="mt-2" :message="form.errors.domain" />
      </div>

      <!-- Email -->
      <div>
        <InputLabel for="email" value="Email" />
        <TextInput
          id="email"
          type="email"
          class="mt-1 block w-full"
          v-model="form.email"
          required
          placeholder="john@acme.co.uk"
        />
        <InputError class="mt-2" :message="form.errors.email" />
      </div>

      <!-- Phone -->
      <div>
        <InputLabel for="phone" value="Phone" />
        <TextInput
          id="phone"
          type="text"
          class="mt-1 block w-full"
          v-model="form.phone"
          placeholder="07700 900000"
        />
        <InputError class="mt-2" :message="form.errors.phone" />
      </div>

      <!-- Plan -->
      <div>
        <InputLabel for="plan" value="Plan" />
        <select
          id="plan"
          v-model="form.plan"
          class="mt-1 w-full rounded-xl border border-white/10 bg-gray-800 px-4 py-3 text-sm text-white transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50"
        >
          <option value="self_managed">Self Managed — £20/month</option>
          <option value="fig_managed">Fig Managed — £50/month</option>
          <option value="fig_developed">Fig Developed — £200/month</option>
        </select>
        <InputError class="mt-2" :message="form.errors.plan" />
      </div>

      <!-- Status -->
      <div>
        <InputLabel for="status" value="Status" />
        <select
          id="status"
          v-model="form.status"
          class="mt-1 w-full rounded-xl border border-white/10 bg-gray-800 px-4 py-3 text-sm text-white transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50"
        >
          <option value="unknown">Unknown</option>
          <option value="active">Active</option>
          <option value="suspended">Suspended</option>
          <option value="cancelled">Cancelled</option>
        </select>
        <InputError class="mt-2" :message="form.errors.status" />
      </div>
    </div>

    <!-- Notes -->
    <div>
      <InputLabel for="notes" value="Notes" />
      <textarea
        id="notes"
        v-model="form.notes"
        rows="4"
        class="mt-1 w-full rounded-xl border border-white/10 bg-gray-800 px-4 py-3 text-sm text-white placeholder-gray-500 transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50"
        placeholder="Any additional notes..."
      ></textarea>
      <InputError class="mt-2" :message="form.errors.notes" />
    </div>

    <div class="flex items-center justify-end gap-4">
      <Link
        :href="route('businesses.index')"
        class="text-sm text-gray-400 transition hover:text-white"
      >
        Cancel
      </Link>
      <PrimaryButton
        class="!w-auto"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        {{ submitLabel }}
      </PrimaryButton>
    </div>
  </form>
</template>
