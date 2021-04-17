<template>
    <div @click="load_event()" class="inline-flex cursor-pointer">
        <div class="flex-shrink-0 h-10 w-10">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
        </div>
        <div class="ml-4 inline-block font-semibold text-xl text-gray-800 leading-tight">
            <div class="text-m font-medium text-gray-900">
                {{ event.event_name }}
            </div>
            <div class="text-sm text-gray-500">
                {{ event.event_description }}
            </div>
        </div>
    </div>

</template>
<script>

export default {
    props: ['event'],
    methods:
    {
        load_event()
        {
            console.log('loading event data');
            window.location = route('event',this.event.event_id);
        }
    }
}
</script>
