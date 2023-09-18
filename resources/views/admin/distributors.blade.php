<x-app-layout>
   
    <section class="flex">
        {{-- SIDEBAR --}}

        <aside class="z-20 flex-shrink-0 h-screen hidden w-64 overflow-y-auto bg-slate-800 md:block">
            <div class="bg-slate-900 h-20 w-64 py-2 px-5">
                <div class="flex space-x-16 bg-cyan-500 p-1 rounded-md h-12 w-12">
                    <img src="" alt="">

                    {{-- <div class="flex flex-col">
                        <h3 class="text-white font-bold uppercase text-base">Manager</h3>
                        <h3 class="text-white text-light">John Doe</h3>
                    </div> --}}
                </div>
            </div>

            <div class="flex flex-col px-4 py-4 text-gray-400 text-md space-y-3 font-medium">
                <a href="" class="flex">
                    <a href="/home" class="uppercase text-gray-600">System Dashboard</a>
                    <a href="/patient_add" class="flex hover-text-gray-200 space-x-2">Add Patient</a>
                    <a href="/patients" class="flex hover-text-gray-200 space-x-2">All Patients</a>
                    <a href="/dose1" class="flex hover-text-gray-200 space-x-2">
                        <span>Dose Batch 1</span>
                    </a>
                    <a href="/dose2" class="flex hover-text-gray-200 space-x-2">
                        <span>Dose Batch 2</span>
                    </a>
                    <a href="/dose3" class="flex hover-text-gray-200 space-x-2">
                        <span>Dose Batch 3</span>
                    </a>
                    <a href="/distributors" class="flex hover-text-gray-200 space-x-2">
                        <span>Distributors</span>
                    </a>
                </a>
            </div>

            <div class="flex flex-col px-4 py-4 text-gray-400 text-md space-y-3 font-medium">
                <a href="" class="flex">
                    <a href="" class="uppercase text-gray-600">Activities</a>
                    <a href="/calendar" class="flex hover-text-gray-200 space-x-2">Calendar</a> 
                    <a href="/reports" class="flex hover-text-gray-200 space-x-2">
                        <span>Reports</span>
                    </a>
                    <a href="/settings" class="flex hover-text-gray-200 space-x-2">
                        <span>Settings</span>
                    </a>
                </a>
            </div>
        </aside>

        {{-- CONTENT --}}
        <main class="bg-slate-200 h-screen w-full overflow-y-auto">
            <div class="p-8">

                <div class="py-5">
                    <h1 class="text-xl font-bold">Distributors Data</h1>
                    <p class="text-sm">Manage Your Distributions</p>
                </div>
                

                <div class="my-2 flex sm:flex-row flex-col">
                    <div class="flex flex-row mb-1 sm:mb-0">
                        <div class="relative">
                            <select
                                class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option>5</option>
                                <option>10</option>
                                <option>20</option>
                            </select>
                        </div>
                        <div class="relative">
                            <select
                                class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                                <option>All</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="block relative">
                        <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                <path
                                    d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                </path>
                            </svg>
                        </span>
                        <input placeholder="Search"
                            class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                    </div>
                </div>

                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-hidden">
                    <div class="inline-block min-w-full shadow rounded-lg ">
                        <table class="min-w-full leading-normal whitespace-nowrap">
                            <thead>
                                <tr>
                                    <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th> 
                                    <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID NO.</th>
                                    <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Clinic</th> 
                                    <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Dose 1 Delivery</th>
                                    <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Batch 1 Number</th>
                                    <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Dose 2 Delivery</th>
                                    <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Batch 2 Number</th>
                                    <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class=""> 
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Distributor A
                                                </p>
                                            </div>
                                        </div>
                                    </td> 
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">24568977</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Mbagathi Clinic</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Delivered</span>
                                    </span>
                                    </td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Batch_D23</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Dispatched</span>
                                    </span>
                                    </td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Batch_X12</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                        <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                </tr> 

                                
                                <tr class=""> 
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Distributor A
                                                </p>
                                            </div>
                                        </div>
                                    </td> 
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">24568977</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Mbagathi Clinic</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Dispatched</span>
                                    </span>
                                    </td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Batch_D23</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Pending</span>
                                    </span>
                                    </td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Batch_X12</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                        <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                </tr> 

                                
                                <tr class=""> 
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Distributor A
                                                </p>
                                            </div>
                                        </div>
                                    </td> 
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">24568977</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Mbagathi Clinic</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Delivered</span>
                                    </span>
                                    </td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Batch_D23</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Pending</span>
                                    </span>
                                    </td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Batch_X12</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                        <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                </tr> 

                                
                                <tr class=""> 
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Distributor A
                                                </p>
                                            </div>
                                        </div>
                                    </td> 
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">24568977</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Mbagathi Clinic</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Dispatched</span>
                                    </span>
                                    </td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Batch_D23</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Pending</span>
                                    </span>
                                    </td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Batch_X12</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                        <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                </tr> 

                                
                                <tr class=""> 
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Distributor A
                                                </p>
                                            </div>
                                        </div>
                                    </td> 
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">24568977</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Mbagathi Clinic</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Delivered</span>
                                    </span>
                                    </td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Batch_D23</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Delivered</span>
                                    </span>
                                    </td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Batch_X12</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                        <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                </tr> 

                                
                                <tr class=""> 
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Distributor A
                                                </p>
                                            </div>
                                        </div>
                                    </td> 
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">24568977</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Mbagathi Clinic</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Pending</span>
                                    </span>
                                    </td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Batch_D23</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Pending</span>
                                    </span>
                                    </td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">Batch_X12</td>
                                    <td class="px-3 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                        <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                </tr> 

                            </tbody>
                        </table>
                        
                        <div
                            class="px-3 py-5 bg-white border-t flex flex-col xs:flex-row items-start xs:justify-between">
                            <span class="text-xs xs:text-sm text-gray-900">
                                Showing 1 to 6 of 50 Entries
                            </span>
                            <div class="inline-flex mt-2 xs:mt-0">
                                <button
                                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                    Prev
                                </button>
                                <button
                                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </main>
    </section>
</x-app-layout>
