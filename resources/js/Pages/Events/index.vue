<template>
    <app-layout>
        <template #header>
            <h2 class="inline-block font-semibold text-xl text-gray-800 leading-tight">
                Events
            </h2>

            <a
            :href="route('events/create')"
            class="float-right -mt-2 inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-green-500 uppercase transition bg-transparent border-2 border-green-500 rounded ripple hover:bg-green-100 focus:outline-none"
            >
            New Event
            </a>


        </template>

        <div class="flex flex-col w-10/12 m-auto mt-6">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Event Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Location
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Revenue
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Date
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200" v-for="(event,index) in events" :key="index">
                                
                                <eventRow :event="event">
                                </eventRow>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </app-layout>
</template>

<script>
import JetAuthenticationCardLogo from '@/Components/AuthenticationCardLogo'
import AppLayout from '@/Layouts/AppLayout'
import eventRow from './eventRow';

export default {
    props: ['policy','events'],

    components: {
        JetAuthenticationCardLogo,
        AppLayout,
        eventRow
    },
}
</script>
