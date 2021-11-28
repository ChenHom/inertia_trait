<template>
  <nav class="mt-6">
    <ul class="list-disc">
      <li><Link href="/home">Home</Link></li>
      <li><Link href="/users">Users</Link></li>
      <li><Link href="/settings">Settings</Link></li>
    </ul>
  </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: {
    Link,
  },
};
</script>

<style>
</style>
