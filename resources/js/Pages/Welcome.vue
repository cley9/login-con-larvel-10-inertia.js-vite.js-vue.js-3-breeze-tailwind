<script setup>
// import Layout from './Layout'
// import { Head } from '@inertiajs/vue3'
// import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
// import { router } from '@inertiajs/vue3'

defineProps({ name: String })

console.log(name);
// console.log(person);
</script>

<template>
    <p>Hello {{ name}}, welcome to your first Inertia app!</p>
  <Layout>
    <Head title="Welcome" />
    <h1>Welcome</h1>
    <!-- <p>Hello welcome to your first Inertia app!</p> -->
  </Layout>
</template>
