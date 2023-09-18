<x-filament-panels::page>
    <form wire:submit="submit">
        <div class="px-4 py-10 sm:px-6 lg:flex-auto lg:px-2 lg:py-10">
            <div class="mx-auto max-w-2xl space-y-8 lg:mx-0 lg:max-w-none">

                {{ $this->form }}

                <x-filament::button type="submit" form="submit">
                    Atualizar dados
                </x-filament::button>
            </div>
        </div>
    </form>

</x-filament-panels::page>
