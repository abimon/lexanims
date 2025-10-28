<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="bg-sky-500 p-4 rounded">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Welcome, {{ auth()->user()->name }} </h2>
            <p class="text-gray-500 dark:text-white">Your integrated management system dashboard</p>
        </div>
        <!-- Quick action navs -->

        <div class="grid auto-rows-min gap-2 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                Compliance will go here...
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                Key metrics will go here...
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                Quick Navigations and actions will go here...
            </div>

            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                Quick Navigations and actions will go here...
            </div>
        </div>

        <div class="grid auto-rows-min gap-4 md:grid-cols-2">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                Recent activities will go here...
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                <!-- calender with highlighted days where there is a task -->
                <div id="calendar">Calendar will go here...</div>
            </div>
        </div>
    </div>

</x-layouts.app>