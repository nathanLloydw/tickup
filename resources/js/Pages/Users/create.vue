<template>
<app-layout>
        <template #header>
            <div class="flex items-center">

                <div class="text-xl text-gray-800 leading-tight ml-auto">
                    New User
                </div>
            </div>
        </template>

        <div class="flex flex-col w-10/12 m-auto mt-6">
            New User Fields
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
    methods:
    {
        
    }
}
</script>
