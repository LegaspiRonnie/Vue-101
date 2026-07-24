<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import Button from '@/components/ui/button/Button.vue';
import { type BreadcrumbItem } from '@/types';

defineOptions({
    layout: {
        breadcrumbs: [
            {
                title: 'Products',
                href: '/products',
            },
        ],
    },
});
</script>

<template>
    <Head title="Products" />
    <Link href="/products/create">
        <Button>Create Product</Button> 
    </Link>
</template>
