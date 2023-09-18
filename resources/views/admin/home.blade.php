<x-app-layout>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>

    <style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    @import url(https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css);
    </style>

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
                    <a href="/messages" class="flex hover-text-gray-200 space-x-2">Messages</a>
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
                <div class="grid grid-cols-1 md:cols-2 lg:grid-cols-4 gap-4 lg:gap-8">

                    {{-- CARD-1 --}}
                    <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                        <div class="w-4/5 flex justify-start">

                            <ul>
                                <li class="font-bold text-gray-400 text-xl">Registered Patients</li>
                                <li class="font-extrabold text-slate-800 text-xl">1230</li>
                                <li><span class="text-green-400 font-bold">+10</span> <span class="text-gray-400">Since Thursday</span></li> 
                                <li></li>
                            </ul>
                        </div>

                        <div class="w-1/5 flex justify-end">
                            <div class="bg-rose-500 rounded-full p-2">
                                svg
                            </div>
                        </div>
                    </div>

                    {{-- CARD-2 --}}
                    <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                        <div class="w-4/5 flex justify-start">

                            <ul>
                                <li class="font-bold text-gray-400 text-xl">Doses Administered</li>
                                <li class="font-extrabold text-slate-800 text-xl">3002</li>
                                <li><span class="text-green-400 font-bold">+5</span> <span class="text-gray-400">Since Monday</span></li> 
                                <li></li>
                            </ul>
                        </div>

                        <div class="w-1/5 flex justify-end">
                            <div class="bg-rose-500 rounded-full p-2">
                                svg
                            </div>
                        </div>
                    </div>

                    {{-- CARD-3 --}}
                    <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                        <div class="w-4/5 flex justify-start">

                            <ul>
                                <li class="font-bold text-gray-400 text-xl">Delivered Batches</li>
                                <li class="font-extrabold text-slate-800 text-xl">4</li>
                                <li><span class="text-green-400 font-bold">+1</span> <span class="text-gray-400">Since Wednesday</span></li> 
                                <li></li>
                            </ul>
                        </div>

                        <div class="w-1/5 flex justify-end">
                            <div class="bg-rose-500 rounded-full p-2">
                                svg
                            </div>
                        </div>
                    </div>


                    <div class="lg:col-span-4 bg-slate-800 text-gray-500 rounded shadow-xl py-5 px-5 w-full lg:w-1/2" x-data="{chartData:chartData()}" x-init="chartData.fetch()">
                        <div class="flex flex-wrap items-end">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold leading-tight">Sales</h3>
                            </div>
                            <div class="relative" @click.away="chartData.showDropdown=false">
                                <button class="text-xs hover:text-gray-300 h-6 focus:outline-none" @click="chartData.showDropdown=!chartData.showDropdown">
                                    <span x-text="chartData.options[chartData.selectedOption].label"></span><i class="ml-1 mdi mdi-chevron-down"></i>
                                </button>
                                <div class="bg-gray-700 shadow-lg rounded text-sm absolute top-auto right-0 min-w-full w-32 z-30 mt-1 -mr-3" x-show="chartData.showDropdown" style="display: none;" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4">
                                    <span class="absolute top-0 right-0 w-3 h-3 bg-gray-700 transform rotate-45 -mt-1 mr-3"></span>
                                    <div class="bg-gray-700 rounded w-full relative z-10 py-1">
                                        <ul class="list-reset text-xs">
                                            <template x-for="(item,index) in chartData.options">
                                                <li class="px-4 py-2 hover:bg-gray-600 hover:text-white transition-colors duration-100 cursor-pointer" :class="{'text-white':index==chartData.selectedOption}" @click="chartData.selectOption(index);chartData.showDropdown=false">
                                                    <span x-text="item.label"></span>
                                                </li>
                                            </template>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-end mb-5">
                            <h4 class="text-2xl lg:text-3xl text-white font-semibold leading-tight inline-block mr-2" x-text="'$'+(chartData.data?chartData.data[chartData.date].total.comma_formatter():0)">0</h4>
                            <span class="inline-block" :class="chartData.data&&chartData.data[chartData.date].upDown<0?'text-red-500':'text-green-500'"><span x-text="chartData.data&&chartData.data[chartData.date].upDown<0?'▼':'▲'">0</span> <span x-text="chartData.data?chartData.data[chartData.date].upDown:0">0</span>%</span>
                        </div>
                        <div>
                            <canvas id="chart" class="w-full"></canvas>
                        </div>
                    </div> 

                    

                    {{-- <div class="rounded-lg shadow-sm bg-cover"
                    style="background-image:url('')">
                        <div class="text-white items-baseline">
                            <h3 class="flex mt-32 pl-5 font-bold uppercase">Good Health is Best!!</h3>
                            <p class="flex items-center pt-5 pl-5">We help each other to grow together.</p>
                        </div>
                    </div> --}}

                   
                </div>

                 {{-- PATIENTS TABLE SECTION --}}

                 <div class="text-xl font-bold my-5">
                    <h1>Recently Added Patients</h1>
                </div>

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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script>
        Number.prototype.comma_formatter = function() {
            return this.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
        }
        
        let chartData = function(){
            return {
                date: 'today',
                options: [
                    {
                        label: 'Today',
                        value: 'today',
                    },
                    {
                        label: 'Last 7 Days',
                        value: '7days',
                    },
                    {
                        label: 'Last 30 Days',
                        value: '30days',
                    },
                    {
                        label: 'Last 6 Months',
                        value: '6months',
                    },
                    {
                        label: 'This Year',
                        value: 'year',
                    },
                ],
                showDropdown: false,
                selectedOption: 0,
                selectOption: function(index){
                    this.selectedOption = index;
                    this.date = this.options[index].value;
                    this.renderChart();
                },
                data: null,
                fetch: function(){
                    fetch('https://cdn.jsdelivr.net/gh/swindon/fake-api@master/tailwindAlpineJsChartJsEx1.json')
                        .then(res => res.json())
                        .then(res => {
                            this.data = res.dates;
                            this.renderChart();
                        })
                },
                renderChart: function(){
                    let c = false;
        
                    Chart.helpers.each(Chart.instances, function(instance) {
                        if (instance.chart.canvas.id == 'chart') {
                            c = instance;
                        }
                    });
        
                    if(c) {
                        c.destroy();
                    }
        
                    let ctx = document.getElementById('chart').getContext('2d');
        
                    let chart = new Chart(ctx, {
                        type: "line",
                        data: {
                            labels: this.data[this.date].data.labels,
                            datasets: [
                                {
                                    label: "Sales",
                                    backgroundColor: "rgba(102, 126, 234, 0.25)",
                                    borderColor: "rgba(102, 126, 234, 1)",
                                    pointBackgroundColor: "rgba(102, 126, 234, 1)",
                                    data: this.data[this.date].data.income,
                                },
                                {
                                    label: "Doses",
                                    backgroundColor: "rgba(237, 100, 166, 0.25)",
                                    borderColor: "rgba(237, 100, 166, 1)",
                                    pointBackgroundColor: "rgba(237, 100, 166, 1)",
                                    data: this.data[this.date].data.expenses,
                                },
                            ],
                        },
                        layout: {
                            padding: {
                                right: 10
                            }
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        display: false
                                    },
                                    ticks: {
                                        callback: function(value,index,array) {
                                            return value > 1000 ? ((value < 1000000) ? value/1000 + 'K' : value/1000000 + 'M') : value;
                                        }
                                    }
                                }]
                            }
                        }
                    });
                }
            }
        }
    </script>
</x-app-layout>
