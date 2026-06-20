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
    </div>

    <div class="flex items-center justify-end gap-4">
      <Link
        :href="route('admin.businesses.index')"
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
