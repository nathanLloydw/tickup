<template>
<app-layout>
        <template #header>
            <div class="flex items-center">

                <eventHeader :event="event">
                </eventHeader>

                <div class="text-xl text-gray-800 leading-tight ml-auto">
                    Product List
                </div>
            </div>
        </template>

        <div class="flex flex-col w-10/12 m-auto mt-6">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Product Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Base Price
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Cost Price
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Stock
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                                <create></create>
                                <tr v-for="(product,index) in products" :key="index">
                                    
                                    <productRow :product="product">
                                    </productRow>

                                </tr>
                            </tbody>
                            

                        </table>
                    </div>
                </div>
            </div>
        </div>


    </app-layout>
</template>

<script>

import AppLayout from '@/Layouts/AppLayout'
import create from '@/Pages/Products/create'
import productRow from '@/Pages/Products/productRow';
import eventHeader from '@/Pages/Events/eventHeader';

export default {
    components: {
            AppLayout,
            create,
            productRow,
            eventHeader
    },
    props: ['event','products'],
    methods:
    {
        
    }
}
</script>
