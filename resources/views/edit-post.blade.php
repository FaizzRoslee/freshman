<x-app-layout>
    @section('pageTitle', 'Edit Post')
    <x-slot name="header">
        <h1 class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-yellow-500 to-grey-900">
            Edit Announcement
        </h1>
    </x-slot>

    <livewire:edit-post :post_id="$post_id"/>

</x-app-layout>
