<template>
    <tr>
        <td class="px-6 py-4 whitespace-nowrap cursor-pointer" @click="load_event()">
            <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                </div>
                <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                        {{ event.event_name }}
                    </div>
                    <div class="text-sm text-gray-500">
                        {{ event.event_description }}
                    </div>
                </div>
            </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900">{{ event.event_venue }}</div>
            <div class="text-sm text-gray-500">{{ event.event_address }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                £12
            </span>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{ event.event_date }} : {{ event.event_start_time }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
            <a @click="delete_event()" class="ml-4 text-red-600 hover:text-red-900">Delete</a>
        </td>
    </tr>
</template>

<script>

export default {
    props: ['event'],
    methods:
    {
        delete_event()
        {
            axios.delete('event/'+this.event.event_id).then(Response =>
            {
                console.log(Response);
                window.location = route('events');
            }).catch(errors =>
            {
                console.log(errors);
            });
        },
        load_event()
        {
            console.log('loading event data');
            window.location = route('event',this.event.event_id);
        }
    }
}
</script>
