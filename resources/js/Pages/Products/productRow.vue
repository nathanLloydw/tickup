<template>
    
        <td class="px-6 py-4 whitespace-nowrap">
            {{product.product_name}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            {{product.base_price}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            {{product.cost_price}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            {{product.stock}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
            <a @click="delete_product()" class="ml-4 text-red-600 hover:text-red-900">Delete</a>
        </td>
    
</template>

<script>

export default {
    props: ['product'],
    methods:
    {
        delete_product()
        {
            console.log(this.product);
            axios.delete('../product/'+this.product.product_id).then(Response =>
            {
                console.log(Response);
                window.location = window.location;
            }).catch(errors =>
            {
                console.log(errors);
            });
        }
    }
}
</script>
