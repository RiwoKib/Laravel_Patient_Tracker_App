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
                        <span>Dose Batch 2</span>
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
            <div class="flex p-8">
                 <!-- Left Side -->
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white p-3 border-t-4 border-cyan-500">
                        <div class="image overflow-hidden">
                            <img class="h-auto w-full mx-auto"
                                src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                alt="">
                        </div>
                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Jane Doe</h1>
                        <h3 class="text-sm font-bold">Mbagathi Clinic</h3>
                        <p class="text-sm">Prescribing Dr. Jemimah Kibira</p>
                        <ul
                            class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                            <li class="flex items-center py-3">
                                <span>NHIF Status</span>
                                <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">Paid</span>
                                </span>
                            </li>
                            <li class="flex items-center py-3">
                                <span>Patient Since</span>
                                <span class="ml-auto">Nov 07, 2021</span>
                            </li>
                        </ul>
                    </div>
                    <!-- End of profile card -->
                    <div class="my-4"></div>
                    <!-- Friends card -->
                    <div class="bg-white p-3 hover:shadow">
                        <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8">
                            <span><i class="fa fa-users text-cyan-700"></i> Similar Status</span>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="text-center my-2">
                                <img class="h-16 w-16 rounded-full mx-auto"
                                    src="https://cdn.australianageingagenda.com.au/wp-content/uploads/2015/06/28085920/Phil-Beckett-2-e1435107243361.jpg"
                                    alt="">
                                <a href="#" class="text-main-color">Jaymie</a>
                            </div>
                            <div class="text-center my-2">
                                <img class="h-16 w-16 rounded-full mx-auto"
                                    src="https://avatars2.githubusercontent.com/u/24622175?s=60&amp;v=4"
                                    alt="">
                                <a href="#" class="text-main-color">Patel</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of friends card -->
                </div>

                <!-- Right Side -->
                <div class="w-full md:w-9/12 mx-2 h-64">
                    <!-- Profile tab -->
                    <!-- About Section -->
                    <div class="bg-white p-3 shadow-sm rounded-sm">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                            <span clas="text-green-500">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span class="tracking-wide">About</span>
                        </div>
                        <div class="text-gray-700">
                            <div class="grid md:grid-cols-2 text-sm">
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">First Name</div>
                                    <div class="px-4 py-2">Jane</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Last Name</div>
                                    <div class="px-4 py-2">Doe</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">ID Number</div>
                                    <div class="px-4 py-2">34985659</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Gender</div>
                                    <div class="px-4 py-2">Female</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Contact No.</div>
                                    <div class="px-4 py-2">0721-301-001</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Address</div>
                                    <div class="px-4 py-2">South B Shopping Centre, Joe Kadenge Crescent</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Email.</div>
                                    <div class="px-4 py-2">
                                        <a class="text-blue-800" href="mailto:jane@example.com">jane@example.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Show
                            Full Information</button>
                    </div>
                    <!-- End of about section -->

                    <div class="my-4"></div>

                    <!-- Treatement History -->
                    <div class="bg-white p-5 shadow-sm rounded-sm"> 
                        <span class="tracking-wide py-10 text-xl font-semibold text-gray-900 leading-8 mb-3">Treament History</span> 
                        <div class="flex">  

                            <div class="max-w-sm w-full shadow-lg">
                                <div class="md:p-8 p-5 dark:bg-gray-800 bg-white">
                                    <div class="px-4 flex items-center justify-between">
                                        <span  tabindex="0" class="focus:outline-none  text-base font-bold dark:text-gray-100 text-gray-800">October 2023</span>
                                        <div class="flex items-center">
                                            <button aria-label="calendar backward" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <polyline points="15 6 9 12 15 18" />
                                            </svg>
                                        </button>
                                        <button aria-label="calendar forward" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100"> 
                                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <polyline points="9 6 15 12 9 18" />
                                            </svg>
                                        </button>
                
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between pt-12 overflow-x-auto">
                                        <table class="w-full">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="w-full flex justify-center">
                                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Mo</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="w-full flex justify-center">
                                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Tu</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="w-full flex justify-center">
                                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">We</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="w-full flex justify-center">
                                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Th</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="w-full flex justify-center">
                                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Fr</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="w-full flex justify-center">
                                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Sa</p>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="w-full flex justify-center">
                                                            <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Su</p>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pt-6">
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                                    </td>
                                                    <td class="pt-6">
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                                    </td>
                                                    <td class="pt-6">
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">1</p>
                                                        </div>
                                                    </td>
                                                    <td class="pt-6">
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">2</p>
                                                        </div>
                                                    </td>
                                                    <td class="pt-6">
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100">3</p>
                                                        </div>
                                                    </td>
                                                    <td class="pt-6">
                                                        <div class="w-full h-full">
                                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                                <a  role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-500 hover:bg-indigo-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-cyan-500 rounded-full">4</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">5</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">6</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">7</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">7</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">9</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100">10</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100">11</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="w-full h-full">
                                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                                <a  role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-500 hover:bg-indigo-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-cyan-500 rounded-full">12</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">13</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">14</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">15</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">16</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100">17</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100">18</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">19</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">20</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">21</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">22</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">23</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100">24</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100">25</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">26</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">27</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">28</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">29</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="w-full h-full">
                                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                                <a  role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-500 hover:bg-indigo-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-cyan-500 rounded-full">30</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                            <p class="text-base text-gray-500 dark:text-gray-100 font-medium">31</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="md:py-8 py-5 md:px-16 px-5 dark:bg-gray-700 bg-gray-50 rounded-b">
                                <div class="px-4">
                                    <div class="border-b pb-4 border-gray-400 border-dashed">
                                        <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">4th 9:00 AM</p>
                                        <a tabindex="0" class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Loading Dose 1</a>
                                        <p class="text-sm pt-2 leading-4 leading-none text-gray-600 dark:text-gray-300">Round 15 Since the first dose.</p>
                                    </div>
                                    <div class="border-b pb-4 border-gray-400 border-dashed pt-5">
                                        <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">12th 10:00 AM</p>
                                        <a tabindex="0" class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Loading Dose 2</a>
                                    </div>
                                    <div class="border-b pb-4 border-gray-400 border-dashed pt-5">
                                        <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">30th 9:00 AM</p>
                                        <a tabindex="0" class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Loading Dose 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Treatement History grid -->
                    </div>
                    <!-- End of profile tab -->
                </div>
            </div>
        </main>
    </section>
</x-app-layout>