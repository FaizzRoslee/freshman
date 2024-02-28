<x-app-layout>
    @section('pageTitle', 'Dashboard')
    <x-slot name="header">
        <h1 class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-yellow-500 to-grey-900">
            {{ __('Dashboard') }}
        </h1>
        {{-- <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>

    <div class="pt-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div class="flex items-center justify-between border-b">
                    <div class="p-3 text-2xl font-bold text-gray-700">Announcement</div>

                    <div class="flex p-3">
                        <a href="{{ route('create.post', 'announcement') }}" class="inline-flex items-center px-4 py-2 space-x-1 text-sm font-medium bg-white border rounded-l-lg text-slate-800 hover:text-yellow-600 hover:bg-slate-100 border-slate-200">
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                            </span>
                            <span>Create</span>
                        </a>
                    </div>
                </div>
                <div class="p-3 text-lg text-gray-600">
                    <livewire:announcement-table/>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div class="flex items-center justify-between border-b">
                    <div class="p-3 text-2xl font-bold text-gray-700">Information</div>

                    <div class="flex p-3">
                        <a href="{{ route('create.post', 'information') }}" class="inline-flex items-center px-4 py-2 space-x-1 text-sm font-medium bg-white border rounded-l-lg text-slate-800 hover:text-yellow-600 hover:bg-slate-100 border-slate-200">
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                            </span>
                            <span>Create</span>
                        </a>
                    </div>
                </div>
                <div class="p-3 text-lg text-gray-600">
                    <livewire:item-table/>
                </div>
            </div>
        </div>
    </div>



</div>

<script>

</script>


</x-app-layout>
