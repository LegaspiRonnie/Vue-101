<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '@/components/PlaceholderPattern.vue';
import { dashboard } from '@/routes';
import Button from '@/components/ui/button/Button.vue';

defineOptions({
    layout: {
        breadcrumbs: [
            {
                title: 'Products',
                href: '/products',
            },
            {
                title: 'Create Products',
                href: '/products/create',
            },
        ],
    },
});
</script>

<template>
    <Head title="Create Product" />

    <p> Create Product</p>

    
</template>
