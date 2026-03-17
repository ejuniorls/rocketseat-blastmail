<x-layouts.app>
    <x-slot name="header">
        <x-h2>{{ __('E-mail List') }}</x-h2>
    </x-slot>

    <x-card>
        @dd($emailLists)
        @forelse($emailLists as $list)
            <button>dsada</button>
        @empty
            {{-- Adicione items-center aqui --}}
            <div class="flex justify-center items-center h-full">
                <x-link-button :href="route('email-list.create')">
                    {{ __('Create your first e-mail list') }}
                </x-link-button>
            </div>
        @endforelse
    </x-card>
</x-layouts.app>
