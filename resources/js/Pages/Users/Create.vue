<template>
  <Head title="Create User"></Head>

  <h1 class="text-3xl">Create New User</h1>

  <form @submit.prevent="submit" class="max-w-md mx-auto m-8">
    <div class="mb-6">
      <label
        for="name"
        class="block mb-2 uppercase font-bold text-xs text-gray-700"
        >Name</label
      >
      <input
        v-model="form.name"
        type="text"
        class="border border-gray-400 p2 w-full"
        name="name"
        id="name"
        required
      />
    </div>
    <div class="mb-6">
      <label
        for="email"
        class="block mb-2 uppercase font-bold text-xs text-gray-700"
        >Email</label
      >
      <input
        v-model="form.email"
        type="email"
        class="border border-gray-400 p2 w-full"
        name="email"
        id="email"
        required
      />
    </div>
    <div class="mb-6">
      <label
        for="password"
        class="block mb-2 uppercase font-bold text-xs text-gray-700"
        >Password</label
      >
      <input
        v-model="form.password"
        type="password"
        class="border border-gray-400 p2 w-full"
        name="password"
        id="password"
        required
      />
    </div>
    <div class="mb-6">
      <button
        type="submit"
        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
      >
        Submit
      </button>
    </div>
  </form>
</template>

<script setup>
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

let form = reactive({
  name: "",
  email: "",
  password: "",
});

let submit = () => {
  Inertia.post("/users", form);
};
</script>

<style>
</style>
