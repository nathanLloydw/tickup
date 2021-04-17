<template>
    <tr>
        <td class="px-6 py-4 whitespace-nowrap">
            <input v-model="bar.bar_name" type="text" placeholder="Bar Name" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
        </td>
        <td class="px-6 py-4 whitespace-nowrap">

            <label class="inline-flex items-center mt-3">
                <input  v-model="bar.food" type="checkbox" class="form-checkbox h-5 w-5 text-green-500 rounded"><span class="ml-2 text-gray-700">Food</span>
            </label>

            <label class="inline-flex items-center mt-3 ml-3">
                <input  v-model="bar.drink" type="checkbox" class="form-checkbox h-5 w-5 text-green-500 rounded"><span class="ml-2 text-gray-700">Drinks</span>
            </label>


        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <input v-model="bar.location" type="text" placeholder="Bar Location" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            <input v-model="bar.size" type="number" placeholder="Bar Size (Staff Count)" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            <span @click="add_bar()">Save Item</span>
        </td>
    </tr>
    
</template>

<script>

export default {
    data: function () 
    {
        return {
            bar: 
            {
                bar_name:"",
                location:"",
                size:"",
                event_id:window.location.pathname.split("/")[2]
            }
        }
    },
    methods:
    {
        add_bar()
        {
            if(this.bar.bar_name == '' ||
                this.bar.location == '' ||
                this.bar.size == '')
            { 
                return; 
            }
            
            axios.post('/bar/store',
            {
                bar:this.bar
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
