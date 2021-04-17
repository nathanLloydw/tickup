<template>
    <app-layout>
        <template #header>
            <h2 class="inline-block font-semibold text-xl text-gray-800 leading-tight">
                New Events
            </h2>
        </template>

        <div class="py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-lg sm:p-10">
                    <div class="max-w-md mx-auto">
                        <div class="flex items-center space-x-5">
                            <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                                <h2 class="leading-relaxed">Create an Event</h2>
                            </div>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="flex flex-col">
                                    <label class="leading-loose">Title</label>
                                    <input v-model="event.event_name" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Event title">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Description</label>
                                    <input v-model="event.event_description" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Venue</label>
                                    <input v-model="event.event_venue" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Address</label>
                                    <input v-model="event.event_address" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Postcode</label>
                                    <input v-model="event.event_postcode" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Country</label>
                                    <input v-model="event.event_country" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Age Limit</label>
                                    <input v-model="event.event_agelimit" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Date</label>
                                    <input v-model="event.event_date" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Optional">
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Start</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input v-model="event.start_date" type="text" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="25/02/2020">
                                            <div class="absolute left-3 top-2">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">End</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input v-model="event.end_date" type="text" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="26/02/2020">
                                            <div class="absolute left-3 top-2">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4 flex items-center space-x-4">
                                <a class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none" 
                                :href="route('events')">
                                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
                                </a>
                                <button class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none" @click="addEvent()">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'

export default {
    data: function () 
    {
        return {
            event: 
            {
                event_name:"",
                event_description:"",
                event_venue:"",
                event_address:"",
                event_postcode:"",
                event_country:"",
                event_agelimit:"",
                event_date:"",
                start_date:"",
                end_date:""
            }
        }
    },
    components: {
        AppLayout
    },
    methods:
    {
        addEvent()
        {
            if(this.event.event_name == '' ||
                this.event.event_description == '' ||
                this.event.event_venue == '' ||
                this.event.event_address == '' ||
                this.event.event_postcode == '' ||
                this.event.event_country == '' ||
                this.event.event_agelimit == '' ||
                this.event.event_date == '' ||
                this.event.start_date == '' ||
                this.event.end_date == '')
            { 
                return; 
            }
            
            axios.post('../../event/store',
            {
                event:this.event
            }).then(Response => 
            {
                console.log(Response);
                window.location = route('events');
            }).catch(error => 
            {
                console.log(error);
            });
        }
    }
}
</script>
