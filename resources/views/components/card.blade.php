<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-md sm:rounded-lg">
            <div {{  $attributes->class(['p-6 text-gray-900 dark:text-gray-100 bg-gray-800']) }}>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
