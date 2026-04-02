<x-layouts.app>
    <x-slot name="header">
        <x-h2>{{ __('E-mail List') }}</x-h2>
    </x-slot>

    <x-card>
        @unless($emailLists->isEmpty())

            <x-table :headers="['#', __('Email List'), __('# Subscribers'), __('Actions')]">
                <x-slot name="body">
                    @foreach($emailLists as $list)
                        <tr>
                            <x-td>{{ $list->id }}</x-td>
                            <x-td>{{ $list->title }}</x-td>
                            <x-td>{{ $list->subscribers()->count() }}</x-td>
                            <x-td>#</x-td>
                        </tr>
                    @endforeach
                </x-slot>
            </x-table>




            <div class="overflow-hidden w-full overflow-x-auto rounded-xl">
                <table class="w-full text-left text-sm text-slate-600 dark:text-violet-100">
                    <thead class=" bg-violet-100 text-sm text-purple-800 dark:bg-violet-950 dark:text-white">
                    <tr>
                        <th scope="col" class="p-4">#</th>
                        <th scope="col" class="p-4">{{ __('Email List') }}</th>
                        <th scope="col" class="p-4">{{ __('# Subscribers') }}</th>
                        <th scope="col" class="p-4">{{ __('Actions') }}</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-slate-700">
                    @foreach($emailLists as $list)
                        <tr>
                            <td class="p-4">{{ $list->id }}</td>
                            <td class="p-4">{{ $list->title }}</td>
                            <td class="p-4">{{ $list->subscribers()->count() }}</td>
                            <td class="p-4">#</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>



            {{-- Adicione items-center aqui --}}
            {{--                <div class="flex justify-center items-center h-full">--}}
            {{--                    <x-link-button :href="route('email-list.create')">--}}
            {{--                        {{ __('Create your first e-mail list') }}--}}
            {{--                    </x-link-button>--}}
            {{--                </div>--}}
        @endunless
    </x-card>
</x-layouts.app>
