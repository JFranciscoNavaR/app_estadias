<x-app-layout>
    {{-- <x-slot name="header" id="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <div class="overflow-hidden bg-white shadow rounded">
                @livewire('show-schedule')
            </div>
        </div>
    </div>
</x-app-layout>
