<template>
<app-layout>
        <template #header>
            <div class="flex items-center">

                <eventHeader :event="event">
                </eventHeader>

                <div class="text-xl text-gray-800 leading-tight ml-auto">
                    Event Bars
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
                                        Bar Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Bar Type
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Location
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Size
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                                <create></create>
                                <tr v-for="(bar,index) in bars" :key="index">
                                    
                                    <barRow :bar="bar">
                                    </barRow>

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

import AppLayout from '@/Layouts/AppLayout';
import eventHeader from '@/Pages/Events/eventHeader';
import create from '@/Pages/Bars/create';
import barRow from '@/Pages/Bars/barRow';

export default {
    components: {
            AppLayout,
            eventHeader,
            create,
            barRow
    },
    props: ['event','bars'],
    methods:
    {
        
    }
}
</script>
