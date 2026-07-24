<script setup lang="ts">
import { Head, useForm} from '@inertiajs/vue3';
import PlaceholderPattern from '@/components/PlaceholderPattern.vue';
import { dashboard } from '@/routes';
import Button from '@/components/ui/button/Button.vue';
import Input from '@/components/ui/input/Input.vue';
import { route } from 'ziggy-js';

defineOptions({
    layout: {
        breadcrumbs: [
            {
                title: 'Products',
                href: '/products',
            },
            {
                title: 'Edit Products',
                href: '/products/edit',
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
const props = defineProps<{product: Product}>();

const form = useForm({
    name: props.product?.name,
    price: props.product?.price,
    description: props.product?.description
})
const handleSubmit = () => {
    form.put(`/products/${props.product.id}`, {
        onSuccess: () => {
            form.reset();
        }
    });
}

</script>

<template>
    <Head title="Edit Product" />
    <p> Edit Product</p>
    <div class="p-4">
        <form  @submit.prevent="handleSubmit" class="w-8/12 space-y-4">
            <div class="space-y-2">
                <Label for="Product Name" >Name:</Label>
                <Input v-model="form.name" id="name" name="name" type="text" placeholder="Product Name" />
                <div class="text-sm text-red-600" v-if="form.errors.name">{{ form.errors.name   }}</div>
            </div>        
            <div class="space-y-2">         
                <Label for="Product Price" > Price:</Label>
                <Input v-model="form.price" id="price" name="price" type="number" placeholder="Product Price" />
                <div class="text-sm text-red-600" v-if="form.errors.price">{{ form.errors.price }}</div>
            </div>        
            <div class="space-y-2">
                <Label for="Product Description" > Description:</Label>
                <Input v-model="form.description" id="description" name="description" type="text" placeholder="Product Description" />
                <div class="text-sm text-red-600" v-if="form.errors.description">{{ form.errors.description }}</div>
            </div>        
            <Button  type="Submit" :disabled="form.processing"> Submit </Button>
        </form>
    </div>
    
</template>
