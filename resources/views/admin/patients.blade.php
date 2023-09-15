<x-app-layout>
   
    <section class="flex">
        {{-- SIDEBAR --}}

        <aside class="z-20 flex-shrink-0 h-screen hidden w-64 overflow-y-auto bg-slate-800 md:block">
            <div class="bg-slate-900 h-20 w-64 py-2 px-5">
                <div class="flex space-x-16 bg-green-400 p-1 rounded-md h-12 w-12">
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
        </aside>

        {{-- CONTENT --}}
        <main class="bg-slate-200 h-screen w-full overflow-y-auto">
            <div class="p-8">

                <div class="py-5">
                    <h1 class="text-xl font-bold">Patients Data</h1>
                    <p class="text-sm">Manage Your Patients</p>
                </div>
                <div class="grid grid-cols-1 md:cols-2 lg:grid-cols-4 gap-4 lg:gap-8">
                    {{-- PATIENTS TABLE SECTION --}}
                    <div class="rounded-lg shadow-sm bg-white md:col-span-2 lg:col-span-4">
                        <div class="overflow-x-auto relative sm:rounded-lg">
                            <table class="w-full whitespace-nowrap text-sm text-left text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th class="py-2"></th>
                                        <th class="py-2 px-6">Name</th>
                                        <th class="py-2 px-6">Contact</th>
                                        <th class="py-2 px-6">Age</th> 
                                        <th class="py-2 px-6">ID NO.</th>
                                        <th class="py-2 px-6">Status</th>
                                        <th class="py-2 px-6">Next of Kin</th>
                                        <th class="py-2 px-6">Kin Contact</th>
                                        <th class="py-2 px-6">Zone Team Lead</th>
                                        <th class="py-2 px-6">Prescribing Dr.</th>
                                        <th class="py-2 px-6">Clinic</th>
                                        <th class="py-2 px-6">Prescription Date</th>
                                        <th class="py-2 px-6">Distributor</th>
                                        <th class="py-2 px-6">STAT Dose Date</th>
                                        <th class="py-2 px-6">STAT Serial Number</th>
                                        <th class="py-2 px-6">FOC Issue Date</th>
                                        <th class="py-2 px-6">FOC Serial Number</th>
                                        <th class="py-2 px-6">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b">
                                        <td class="py-2 px-6">1.</td>
                                        <td class="py-2 px-6">John Doe</td>
                                        <td class="py-2 px-6">0748508685</td>
                                        <td class="py-2 px-6">30</td>
                                        <td class="py-2 px-6">24568977</td>
                                        <td class="py-2 px-6">1st loading Dose</td>
                                        <td class="py-2 px-6">Maryanne Aoko</td>
                                        <td class="py-2 px-6">0765985124</td>
                                        <td class="py-2 px-6">Jemmimah Kibira</td>
                                        <td class="py-2 px-6">Linda Monroe</td>
                                        <td class="py-2 px-6">Mbagathi Clinic</td>
                                        <td class="py-2 px-6">12-09-2023</td>
                                        <td class="py-2 px-6">Pfizer</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">STAT_A1@#!@#ODNAK</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">FOC_ASD!@#SDF</td>
                                        <td class="py-2 px-6">
                                            <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                            <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-2 px-6">2.</td>
                                        <td class="py-2 px-6">John Doe</td>
                                        <td class="py-2 px-6">0748508685</td>
                                        <td class="py-2 px-6">30</td>
                                        <td class="py-2 px-6">24568977</td>
                                        <td class="py-2 px-6">1st loading Dose</td>
                                        <td class="py-2 px-6">Maryanne Aoko</td>
                                        <td class="py-2 px-6">0765985124</td>
                                        <td class="py-2 px-6">Jemmimah Kibira</td>
                                        <td class="py-2 px-6">Linda Monroe</td>
                                        <td class="py-2 px-6">Mbagathi Clinic</td>
                                        <td class="py-2 px-6">12-09-2023</td>
                                        <td class="py-2 px-6">Pfizer</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">STAT_A1@#!@#ODNAK</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">FOC_ASD!@#SDF</td>
                                        <td class="py-2 px-6">
                                            <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                            <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-2 px-6">3.</td>
                                        <td class="py-2 px-6">John Doe</td>
                                        <td class="py-2 px-6">0748508685</td>
                                        <td class="py-2 px-6">30</td>
                                        <td class="py-2 px-6">24568977</td>
                                        <td class="py-2 px-6">1st loading Dose</td>
                                        <td class="py-2 px-6">Maryanne Aoko</td>
                                        <td class="py-2 px-6">0765985124</td>
                                        <td class="py-2 px-6">Jemmimah Kibira</td>
                                        <td class="py-2 px-6">Linda Monroe</td>
                                        <td class="py-2 px-6">Mbagathi Clinic</td>
                                        <td class="py-2 px-6">12-09-2023</td>
                                        <td class="py-2 px-6">Pfizer</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">STAT_A1@#!@#ODNAK</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">FOC_ASD!@#SDF</td>
                                        <td class="py-2 px-6">
                                            <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                            <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-2 px-6">4.</td>
                                        <td class="py-2 px-6">John Doe</td>
                                        <td class="py-2 px-6">0748508685</td>
                                        <td class="py-2 px-6">30</td>
                                        <td class="py-2 px-6">24568977</td>
                                        <td class="py-2 px-6">1st loading Dose</td>
                                        <td class="py-2 px-6">Maryanne Aoko</td>
                                        <td class="py-2 px-6">0765985124</td>
                                        <td class="py-2 px-6">Jemmimah Kibira</td>
                                        <td class="py-2 px-6">Linda Monroe</td>
                                        <td class="py-2 px-6">Mbagathi Clinic</td>
                                        <td class="py-2 px-6">12-09-2023</td>
                                        <td class="py-2 px-6">Pfizer</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">STAT_A1@#!@#ODNAK</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">FOC_ASD!@#SDF</td>
                                        <td class="py-2 px-6">
                                            <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                            <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-2 px-6">5.</td>
                                        <td class="py-2 px-6">John Doe</td>
                                        <td class="py-2 px-6">0748508685</td>
                                        <td class="py-2 px-6">30</td>
                                        <td class="py-2 px-6">24568977</td>
                                        <td class="py-2 px-6">1st loading Dose</td>
                                        <td class="py-2 px-6">Maryanne Aoko</td>
                                        <td class="py-2 px-6">0765985124</td>
                                        <td class="py-2 px-6">Jemmimah Kibira</td>
                                        <td class="py-2 px-6">Linda Monroe</td>
                                        <td class="py-2 px-6">Mbagathi Clinic</td>
                                        <td class="py-2 px-6">12-09-2023</td>
                                        <td class="py-2 px-6">Pfizer</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">STAT_A1@#!@#ODNAK</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">FOC_ASD!@#SDF</td>
                                        <td class="py-2 px-6">
                                            <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                            <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-2 px-6">6.</td>
                                        <td class="py-2 px-6">John Doe</td>
                                        <td class="py-2 px-6">0748508685</td>
                                        <td class="py-2 px-6">30</td>
                                        <td class="py-2 px-6">24568977</td>
                                        <td class="py-2 px-6">1st loading Dose</td>
                                        <td class="py-2 px-6">Maryanne Aoko</td>
                                        <td class="py-2 px-6">0765985124</td>
                                        <td class="py-2 px-6">Jemmimah Kibira</td>
                                        <td class="py-2 px-6">Linda Monroe</td>
                                        <td class="py-2 px-6">Mbagathi Clinic</td>
                                        <td class="py-2 px-6">12-09-2023</td>
                                        <td class="py-2 px-6">Pfizer</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">STAT_A1@#!@#ODNAK</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">FOC_ASD!@#SDF</td>
                                        <td class="py-2 px-6">
                                            <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                            <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-2 px-6">7.</td>
                                        <td class="py-2 px-6">John Doe</td>
                                        <td class="py-2 px-6">0748508685</td>
                                        <td class="py-2 px-6">30</td>
                                        <td class="py-2 px-6">24568977</td>
                                        <td class="py-2 px-6">1st loading Dose</td>
                                        <td class="py-2 px-6">Maryanne Aoko</td>
                                        <td class="py-2 px-6">0765985124</td>
                                        <td class="py-2 px-6">Jemmimah Kibira</td>
                                        <td class="py-2 px-6">Linda Monroe</td>
                                        <td class="py-2 px-6">Mbagathi Clinic</td>
                                        <td class="py-2 px-6">12-09-2023</td>
                                        <td class="py-2 px-6">Pfizer</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">STAT_A1@#!@#ODNAK</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">FOC_ASD!@#SDF</td>
                                        <td class="py-2 px-6">
                                            <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                            <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <td class="py-2 px-6">8.</td>
                                        <td class="py-2 px-6">John Doe</td>
                                        <td class="py-2 px-6">0748508685</td>
                                        <td class="py-2 px-6">30</td>
                                        <td class="py-2 px-6">24568977</td>
                                        <td class="py-2 px-6">1st loading Dose</td>
                                        <td class="py-2 px-6">Maryanne Aoko</td>
                                        <td class="py-2 px-6">0765985124</td>
                                        <td class="py-2 px-6">Jemmimah Kibira</td>
                                        <td class="py-2 px-6">Linda Monroe</td>
                                        <td class="py-2 px-6">Mbagathi Clinic</td>
                                        <td class="py-2 px-6">12-09-2023</td>
                                        <td class="py-2 px-6">Pfizer</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">STAT_A1@#!@#ODNAK</td>
                                        <td class="py-2 px-6">20-09-2023</td>
                                        <td class="py-2 px-6">FOC_ASD!@#SDF</td>
                                        <td class="py-2 px-6">
                                            <a href="" class="font-medium text-blue-600 hover:underline">Edit</a>
                                            <a href="" class="font-medium text-red-600 hover:underline">Delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
</x-app-layout>
