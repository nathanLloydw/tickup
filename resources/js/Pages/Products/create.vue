<template>
    <tr>
        <td class="px-6 py-4 whitespace-nowrap">
            <input v-model="product.product_name" type="text" placeholder="Product Name" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <input v-model="product.base_price" type="number" placeholder="Product Sales Price" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <input v-model="product.cost_price" type="number" placeholder="Product Cost Price" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            <input v-model="product.stock" type="number" placeholder="Product Stock" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            <span @click="add_product()">Save Item</span>
        </td>
    </tr>
    
</template>

<script>

export default {
    data: function () 
    {
        return {
            product: 
            {
                product_name:"",
                base_price:"",
                cost_price:"",
                stock:"",
                bar_id:window.location.pathname.split("/")[2]
            }
        }
    },
    methods:
    {
        add_product()
        {
            if(this.product.product_name == '' ||
                this.product.base_price == '' ||
                this.product.cost_price == '' ||
                this.product.stock == '')
            { 
                return; 
            }
            
            axios.post('/product/store',
            {
                product:this.product
            }).then(Response => 
            {
                console.log(Response);
                window.location = window.location;
            }).catch(error => 
            {
                console.log(error);
            });
        }
    }
}
</script>
