<template>
    
        <td class="px-6 py-4 whitespace-nowrap">
            {{bar.bar_name}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            {{ bar.food && bar.drink ? 'Food & Drinks' : bar.food ? 'Food': bar.drink ? 'Drinks' : '' }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            {{bar.location}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            {{bar.size}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <a :href="route('bars/products',bar.bar_id)" class="text-indigo-600 hover:text-indigo-900">Product List</a>
            <a href="#" class="ml-4 text-indigo-600 hover:text-indigo-900">Edit</a>
            <a @click="delete_product()" class="ml-4 text-red-600 hover:text-red-900">Delete</a>
        </td>
    
</template>

<script>

export default {
    props: ['bar'],
    methods:
    {
        delete_product()
        {
            console.log(this);
            axios.delete('/bar/'+this.bar.bar_id).then(Response =>
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
