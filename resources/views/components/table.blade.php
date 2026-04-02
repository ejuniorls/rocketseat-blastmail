@props([
    'headers',
    'body'
])


<div class="overflow-hidden w-full overflow-x-auto rounded-xl">
    <table class="w-full text-left text-sm text-slate-600 dark:text-violet-100">
        <thead class=" bg-violet-100 text-sm text-purple-800 dark:bg-violet-950 dark:text-white">
        <tr>
            @foreach($headers as $header)
                <th scope="col" class="p-4">{{ $header }}</th>
            @endforeach
        </tr>

        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-slate-700">
        {{ $body }}
        </tbody>
    </table>
</div>
