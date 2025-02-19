<x-filament-panels::page>
    {{ $this->form }}

    <div class="mt-4 flex justify-center">
        {!! QrCode::size(200)->margin(1)->generate($this->table_number) !!}
    </div>

    <x-filament::button wire:click="save" color="primary">
        Create
    </x-filament::button>
</x-filament-panels::page>
