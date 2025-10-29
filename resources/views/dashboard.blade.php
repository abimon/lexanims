<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="bg-gradient-to-r from-[#4F8BFF] to-[#7B68EE] dark:from-[#5B94FF] dark:to-[#8B7CF6] rounded-xl p-6 mb-8 text-white">
            <h1 class="text-2xl sm:text-3xl font-['Lato'] font-extrabold mb-2">Welcome, {{auth()->user()->name}}</h1>
            <p class="text-white/90 text-lg">Your integrated management system dashboard</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white dark:bg-[#1E1E1E] rounded-xl border border-[#EDF0F4] dark:border-[#333333] p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-[#07111F] dark:text-[#E5E5E5] font-medium">Compliance Score</h3>
                    <i class="fa fa-bullseye text-[#4F8BFF] dark:text-[#5B94FF]"></i>
                </div>
                <div class="text-3xl font-bold mb-2 text-[#F59E0B] dark:text-[#FCD34D]">87%</div>
                <p class="text-[#8A94A7] dark:text-[#A0A0A0] text-sm">Good standing</p>
            </div>
            <div class="bg-white dark:bg-[#1E1E1E] rounded-xl border border-[#EDF0F4] dark:border-[#333333] p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-[#07111F] dark:text-[#E5E5E5] font-medium">Open Actions</h3>
                    <i class="fa fa-triangle-exclamation text-[#F59E0B] dark:text-[#FCD34D]"></i>
                </div>
                <div class="text-3xl font-bold text-[#07111F] dark:text-[#E5E5E5] mb-2">3</div>
                <div class="flex space-x-2 text-sm"><span class="text-[#E12929] dark:text-[#FF6B6B]">3 overdue</span><span class="text-[#F59E0B] dark:text-[#FCD34D]">0 due soon</span></div>
            </div>
            <div class="bg-white dark:bg-[#1E1E1E] rounded-xl border border-[#EDF0F4] dark:border-[#333333] p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-[#07111F] dark:text-[#E5E5E5] font-medium">Document Reviews</h3>
                    <i class="fa-regular fa-file-lines text-[#8B5CF6] dark:text-[#A78BFA]"></i>
                </div>
                <div class="text-3xl font-bold text-[#07111F] dark:text-[#E5E5E5] mb-2">0</div>
                <p class="text-[#8A94A7] dark:text-[#A0A0A0] text-sm">Due next 30 days</p>
            </div>
            <div class="bg-white dark:bg-[#1E1E1E] rounded-xl border border-[#EDF0F4] dark:border-[#333333] p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-[#07111F] dark:text-[#E5E5E5] font-medium">Upcoming Audits</h3>
                    <i class="fa-regular fa-clipboard text-[#10B981] dark:text-[#34D399]"></i>
                </div>
                <div class="text-3xl font-bold text-[#07111F] dark:text-[#E5E5E5] mb-2">0</div>
                <p class="text-[#8A94A7] dark:text-[#A0A0A0] text-sm">This quarter</p>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1">
                <div class="bg-white dark:bg-[#1E1E1E] rounded-xl border border-[#EDF0F4] dark:border-[#333333] p-6 mb-6">
                    <h3 class="text-[#07111F] dark:text-[#E5E5E5] font-['Lato'] font-bold text-lg mb-4">Quick Actions</h3>
                    <div class="space-y-3"><button class="w-full flex items-center p-3 bg-[#4F8BFF] dark:bg-[#5B94FF] text-white rounded-lg hover:bg-[#3D6FE5] dark:hover:bg-[#4F8BFF] transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus mr-3">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg><span>Create New Action</span></button><button class="w-full flex items-center p-3 bg-white dark:bg-[#2A2A2A] border border-[#E1E6ED] dark:border-[#404040] rounded-lg hover:bg-[#F5F7FB] dark:hover:bg-[#333333] transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard mr-3 text-[#536081] dark:text-[#A0A0A0]">
                                <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            </svg><span class="text-[#07111F] dark:text-[#E5E5E5]">View My Assigned Tasks</span></button><button class="w-full flex items-center p-3 bg-white dark:bg-[#2A2A2A] border border-[#E1E6ED] dark:border-[#404040] rounded-lg hover:bg-[#F5F7FB] dark:hover:bg-[#333333] transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-up mr-3 text-[#536081] dark:text-[#A0A0A0]">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M12 12v6"></path>
                                <path d="m15 15-3-3-3 3"></path>
                            </svg><span class="text-[#07111F] dark:text-[#E5E5E5]">Upload New Document</span></button></div>
                </div>
                <div class="bg-white dark:bg-[#1E1E1E] rounded-xl border border-[#EDF0F4] dark:border-[#333333] p-6">
                    <h3 class="text-[#07111F] dark:text-[#E5E5E5] font-['Lato'] font-bold text-lg mb-4">Upcoming Events</h3>
                    <div class="space-y-3">
                        <p class="text-[#8A94A7] dark:text-[#A0A0A0] text-sm text-center py-4">No upcoming events</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-[#1E1E1E] rounded-xl border border-[#EDF0F4] dark:border-[#333333] p-6">
                    <h3 class="text-[#07111F] dark:text-[#E5E5E5] font-['Lato'] font-bold text-lg mb-4">Recent Activity</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3 p-3 hover:bg-[#F7F9FC] dark:hover:bg-[#262626] rounded-lg transition-colors">
                            <div class="flex-shrink-0 mt-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big text-[#0E9250] dark:text-[#4ADE80]">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg></div>
                            <div class="flex-1">
                                <p class="text-[#07111F] dark:text-[#E5E5E5] text-sm">Document Control Procedure approved by John Smith</p>
                                <p class="text-[#8A94A7] dark:text-[#A0A0A0] text-xs mt-1">5 weeks ago</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-3 hover:bg-[#F7F9FC] dark:hover:bg-[#262626] rounded-lg transition-colors">
                            <div class="flex-shrink-0 mt-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard text-[#4F8BFF] dark:text-[#5B94FF]">
                                    <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                </svg></div>
                            <div class="flex-1">
                                <p class="text-[#07111F] dark:text-[#E5E5E5] text-sm">Internal Audit for Production completed</p>
                                <p class="text-[#8A94A7] dark:text-[#A0A0A0] text-xs mt-1">5 weeks ago</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-3 hover:bg-[#F7F9FC] dark:hover:bg-[#262626] rounded-lg transition-colors">
                            <div class="flex-shrink-0 mt-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target text-[#F59E0B] dark:text-[#FCD34D]">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg></div>
                            <div class="flex-1">
                                <p class="text-[#07111F] dark:text-[#E5E5E5] text-sm">Corrective Action CAR-2024-001 was closed</p>
                                <p class="text-[#8A94A7] dark:text-[#A0A0A0] text-xs mt-1">5 weeks ago</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-3 hover:bg-[#F7F9FC] dark:hover:bg-[#262626] rounded-lg transition-colors">
                            <div class="flex-shrink-0 mt-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users text-[#8B5CF6] dark:text-[#A78BFA]">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg></div>
                            <div class="flex-1">
                                <p class="text-[#07111F] dark:text-[#E5E5E5] text-sm">Training: ISO 9001 Overview scheduled for next week</p>
                                <p class="text-[#8A94A7] dark:text-[#A0A0A0] text-xs mt-1">5 weeks ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="bg-sky-500 p-4 rounded">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Welcome, {{ auth()->user()->company->name }} </h2>
            <p class="text-gray-500 dark:text-white">Your integrated management system dashboard</p>
        </div>
        <div class="relative h-full flex-1">
            <div class="grid grid-flow-row grid-rows-3 md:grid-flow-col gap-4">
                <div class="row-span-3 rounded-xl border border-neutral-200 dark:border-neutral-700 dark:bg-neutral-800 p-4">
                    <div class="w-full h-full grid gap-4">
                        <div class="flex justify-between justify-items-center">
                            <p>Compliance Score</p>
                            <div class="text-blue-400">
                                <i class="fa fa-bullseye"></i>
                            </div>
                        </div>
                        <div class="text-3xl font-bold mb-2 text-[#F59E0B] dark:text-[#FCD34D]">
                            87%
                        </div>
                        <div class="">
                            <small>Good standing</small>
                        </div>
                    </div>
                </div>
                <div class="row-span-3 rounded-xl border border-neutral-200 dark:border-neutral-700  dark:bg-neutral-800 p-4">
                    <div class="w-full h-full">
                        <div class="flex justify-between">
                            Open Actions
                            <i class="fa fa-chart-line"></i>
                        </div>
                    </div>
                </div>
                <div class="row-span-3 rounded-xl border border-neutral-200 dark:border-neutral-700  dark:bg-neutral-800 p-4">
                    <div class="w-full h-full">
                        <div class="flex justify-between">
                            <p>Document Reviews</p>
                            <i class="fa fa-chart-line"></i>
                        </div>
                    </div>
                </div>
                <div class="row-span-3 rounded-xl border border-neutral-200 dark:border-neutral-700 dark:bg-neutral-800 p-4">
                    <div class="w-full h-full">
                        <div class="flex justify-between">
                            <p>Upcoming Audits</p>
                            <i class="fa fa-chart-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</x-layouts.app>