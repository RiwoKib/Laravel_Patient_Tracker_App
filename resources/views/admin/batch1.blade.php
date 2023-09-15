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
        <main class="bg-slate-200 h-screen w-full overflow-scroll">
            <div class="p-8">

                <div class="py-5">
                    <h1 class="text-xl font-bold">Administer Dose 1</h1>
                    <p class="text-sm text-green-400"><i class="fa fa-check"></i> Delivered</p>
                </div>
                
                {{-- ADD DOSE 1 FORM --}}
                <section class=" py-1 bg-blueGray-50">
                    <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                        <div class="rounded-t bg-white mb-0 px-6 py-6">
                            <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-xl font-bold">
                                Details
                            </h6>
                            <button class="bg-slate-700 text-white active:bg-slate-400 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="submit">
                                Administer Dose 1
                            </button>
                            </div>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form>
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                Dose Information
                            </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Dose Name
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Jonssen Jonssen">
                                    </div>
                                </div>
                                
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Batch No.
                                        </label>
                                        <select type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">-- Select --</option>
                                            <option value="1">Batch Xr-1</option>
                                            <option value="2">Batch Xr-2</option>
                                            <option value="3">Batch Xr-3</option>
                                            <option value="4">Batch DC-2</option>
                                        </select>
                                    </div>
                                </div>

                               <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Physician/Doctor
                                        </label>
                                        <select type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">-- Select --</option>
                                            <option value="1">Jemmimah Kibira</option>
                                            <option value="2">Jakes Wahome</option>
                                            <option value="3">Neil Amstrong</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Date 
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="16-09-2023">
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                        Body Temperature
                                        </label>
                                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="36.2">
                                    </div>
                                </div>
                                
                            </div>
                    
                            <hr class="mt-6 border-b-1 border-gray-300"> 
                            </form>
                        </div>
                        </div>
                    </div>
                </section>

                {{-- DOSE 1 PATIENTS TABLE SECTION --}}

                <div class="py-5">
                    <h1 class="text-xl font-bold">Pending Dose 1 Patients</h1>
                    <p class="text-sm">Ensure these patients get their dose in time.</p>
                </div>

                <div class="rounded-lg shadow-sm bg-white md:col-span-2 lg:col-span-4">
                    <div class="overflow-x-auto relative sm:rounded-lg">
                        <table class="w-full whitespace-nowrap text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th class="py-2"></th>
                                    <th class="py-2 px-6">Name</th>
                                    <th class="py-2 px-6">Contact</th> 
                                    <th class="py-2 px-6">Status</th> 
                                    <th class="py-2 px-6">Clinic</th>  
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
                                    <td class="py-2 px-6">1st loading Dose</td> 
                                    <td class="py-2 px-6">Mbagathi Clinic</td>
                                    <td class="py-2 px-6">12-09-2023</td> 
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
                                    <td class="py-2 px-6">1st loading Dose</td> 
                                    <td class="py-2 px-6">Mbagathi Clinic</td>
                                    <td class="py-2 px-6">12-09-2023</td>  
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
                                    <td class="py-2 px-6">1st loading Dose</td> 
                                    <td class="py-2 px-6">Mbagathi Clinic</td>
                                    <td class="py-2 px-6">12-09-2023</td> 
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
                                    <td class="py-2 px-6">1st loading Dose</td> 
                                    <td class="py-2 px-6">Mbagathi Clinic</td>
                                    <td class="py-2 px-6">12-09-2023</td> 
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
                                    <td class="py-2 px-6">1st loading Dose</td> 
                                    <td class="py-2 px-6">Mbagathi Clinic</td>
                                    <td class="py-2 px-6">12-09-2023</td> 
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
        </main>
    </section>
</x-app-layout>
