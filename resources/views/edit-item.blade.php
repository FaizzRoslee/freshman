<x-app-layout>
    @section('pageTitle', 'Edit Post')
    <x-slot name="header">
        <h1 class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-yellow-500 to-grey-900">
            Edit Information
        </h1>
    </x-slot>

    <livewire:edit-item :post_id="$post_id"/>

</x-app-layout>
