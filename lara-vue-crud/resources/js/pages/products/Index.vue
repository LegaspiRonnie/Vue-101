<script setup lang="ts">
import { Head, Link, usePage, useForm } from '@inertiajs/vue3';
import Button from '@/components/ui/button/Button.vue';
import { Rocket, Trash2, Pencil } from '@lucide/vue';
import { type BreadcrumbItem } from '@/types';
import Label from '@/components/ui/label/Label.vue';
import { route } from 'ziggy-js';
import { Alert, AlertDescription, AlertTitle } from '@/components/ui/alert'
import {
    Table,
    TableBody,
    TableCaption,
    TableCell,
    TableFooter,
    TableHead,
    TableHeader,
    TableRow,
} from '@/components/ui/table'
const page = usePage();

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
interface Product {
    id: number;
    name: string;
    price: number;
    description: string;
}
interface Props {
    products: Product[];
}
const props = defineProps<Props>();
const form = useForm();

const handleDelete = (id: number) => {
    form.delete(`/products/${id}`, {
        onSuccess: () => {
            form.reset();
        }
    });
}
</script>

<template>

    <Head title="Products" />
    <div v-if="page.props.flash?.message" class="mb-4">
        <Alert class="bg-green-100 border-green-500 text-green-700 p-4 rounded-md mb-4">
            <Rocket class="w-5 h-5 inline-block mr-2" />
            <AlertTitle>Notification!</AlertTitle>
            <AlertDescription>
                {{ page.props.flash.message }}
            </AlertDescription>

        </Alert>
    </div>
    <div v-if="page.props.flash?.error" class="mb-4">
        <Alert class="bg-red-100 border-red-500 text-red-700 p-4 rounded-md mb-4">
            <Rocket class="w-5 h-5 inline-block mr-2" />
            <AlertTitle>Notification!</AlertTitle>
            <AlertDescription>
                {{ page.props.flash.error }}
            </AlertDescription>

        </Alert>
    </div>



    <Link href="products/create">
        <Button>Create Product</Button>

    </Link>

    <Table>
        <TableCaption>A list of your recent Products.</TableCaption>
        <TableHeader>
            <TableRow>
                <TableHead class="w-[100px]">
                    ID
                </TableHead>
                <TableHead>Name</TableHead>
                <TableHead>Price</TableHead>
                <TableHead>Description</TableHead>
                <TableHead class="text-right">
                    Action
                </TableHead>
            </TableRow>
        </TableHeader>
        <TableBody>
            <TableRow v-for="product in props.products" :key="product.id">
                <TableCell class="font-medium">
                    {{ product.id }}
                </TableCell>
                <TableCell>{{ product.name }}</TableCell>
                <TableCell>{{ product.price }}</TableCell>
                <TableCell>{{ product.description }}</TableCell>
                <TableCell>
                    <div class="flex justify-end gap-2">
                        <Link :href="`/products/${product.id}/edit`"
                            class="inline-flex h-9 w-9 items-center justify-center rounded-md hover:bg-gray-100">
                            <Pencil class="h-4 w-4 text-blue-700 " />
                        </Link>

                        <form @submit.prevent="handleDelete(product.id)">
                            <Button type="submit" class="h-9 w-9 p-0 hover:bg-gray-100 bg-white-0">
                                <Trash2 class="h-4 w-4 text-red-700  " />
                            </Button>
                        </form>
                    </div>
                </TableCell>
            </TableRow>
        </TableBody>
    </Table>


</template>
