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
            Bars
        </div>


    </app-layout>
</template>

<script>

import AppLayout from '@/Layouts/AppLayout';
import eventHeader from '@/Pages/Events/eventHeader';

export default {
    components: {
            AppLayout,
            eventHeader
    },
    props: ['event'],
    methods:
    {
        
    }
}
</script>
