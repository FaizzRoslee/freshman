
<div>
@push('stylesheets')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />
    <style>
        .trix-button-group.trix-button-group--file-tools {
            display:none;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
    {{-- <script>
        var trixEditor = document.getElementById("{{ $trixId }}")

        addEventListener("click", function(event) {
            console.log('asdasds')
            @this.set('value', trixEditor.getAttribute('value'))
        })

    </script> --}}
@endpush
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="pt-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">



        </div>
    </div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="px-6 py-3">
                        <h1 class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-yellow-500 to-grey-900">
                            Edit Post
                        </h1>
                    </div>



                    <form class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
                        <div class="px-4 py-6 sm:p-8">
                          <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <div class="sm:col-span-4">
                              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                              <div class="mt-2">
                                <input wire:model="title" name="title" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:text-sm sm:leading-6">
                              </div>
                            </div>

                            <div class="col-span-full">
                              <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                              <div class="mt-2">
                                <textarea wire:model="description" rows="2" name="description" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:text-sm sm:leading-6"></textarea>

                                {{-- <input wire:model="description" type="text" name="description" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-yellow-600 sm:text-sm sm:leading-6"> --}}
                              </div>
                            </div>


                            <div class="col-span-full">
                                <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Post</label>
                                <div class="mt-2">
                                    {{-- <input id="{{ $trixId }}" value="{{ $value }}" type="hidden" name="content"> --}}
                                    {{-- <trix-editor input="{{ $trixId }}"></trix-editor> --}}
                                    <div wire:ignore>
                                        <trix-editor
                                            class="formatted-content"
                                            x-data
                                            x-on:trix-change="$dispatch('input', event.target.value)"
                                            x-ref="trix"
                                            wire:model.debounce.60s="trixIinput"
                                            wire:key="uniqueKey"
                                        ></trix-editor>
                                    </div>
                                </div>
                            </div>

                          </div>
                        </div>
                        <div class="flex items-center justify-end px-4 py-4 border-t gap-x-6 border-gray-900/10 sm:px-8">
                          <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                          <x-button yellow label="save" wire:click='save'/>
                          {{-- <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-yellow-600 rounded-md shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Save</button> --}}
                        </div>
                      </form>





                </div>
            </div>
        </div>
    </div>
</div>
