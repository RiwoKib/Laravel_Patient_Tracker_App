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

                <!-- Card -->
                <div class="relative h-1/3 max-w-[340px] mx-auto bg-white shadow-lg rounded-lg">
                    <!-- Card header -->
                    <header class="pt-6 pb-4 px-5 border-b border-gray-200">
                        <div class="flex justify-between items-center mb-3">
                           
                            <!-- Settings button -->
                            <div class="relative inline-flex flex-shrink-0">
                                <button class="text-gray-400 hover:text-gray-500 rounded-full focus:ring-0 outline-none focus:outline-none">
                                    <span class="sr-only">Settings</span>
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16">
                                        <path d="m15.621 7.015-1.8-.451A5.992 5.992 0 0 0 13.13 4.9l.956-1.593a.5.5 0 0 0-.075-.611l-.711-.707a.5.5 0 0 0-.611-.075L11.1 2.87a5.99 5.99 0 0 0-1.664-.69L8.985.379A.5.5 0 0 0 8.5 0h-1a.5.5 0 0 0-.485.379l-.451 1.8A5.992 5.992 0 0 0 4.9 2.87l-1.593-.956a.5.5 0 0 0-.611.075l-.707.711a.5.5 0 0 0-.075.611L2.87 4.9a5.99 5.99 0 0 0-.69 1.664l-1.8.451A.5.5 0 0 0 0 7.5v1a.5.5 0 0 0 .379.485l1.8.451c.145.586.378 1.147.691 1.664l-.956 1.593a.5.5 0 0 0 .075.611l.707.707a.5.5 0 0 0 .611.075L4.9 13.13a5.99 5.99 0 0 0 1.664.69l.451 1.8A.5.5 0 0 0 7.5 16h1a.5.5 0 0 0 .485-.379l.451-1.8a5.99 5.99 0 0 0 1.664-.69l1.593.956a.5.5 0 0 0 .611-.075l.707-.707a.5.5 0 0 0 .075-.611L13.13 11.1a5.99 5.99 0 0 0 .69-1.664l1.8-.451A.5.5 0 0 0 16 8.5v-1a.5.5 0 0 0-.379-.485ZM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </header>
                    <!-- Card body -->
                    <div class="py-3 px-5">
                        <h3 class="text-xs font-semibold uppercase text-gray-400 mb-1">Notifications</h3>
                        <!-- Chat list -->
                        <div class="divide-y divide-gray-200">
                            <!-- User -->
                            <button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
                                <div class="flex items-center">
                                    <img class="rounded-full items-start flex-shrink-0 mr-3" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-01_pfck4u.jpg" width="32" height="32" alt="Marie Zulfikar" />
                                    <div>
                                        <h4 class="text-sm font-semibold text-gray-900">Marie Zulfikar</h4>
                                        <div class="text-[13px]">2hrs</div>
                                    </div>
                                </div>
                            </button>
                            <!-- User -->
                            <button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
                                <div class="flex items-center">
                                    <img class="rounded-full items-start flex-shrink-0 mr-3" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-02_vll8uv.jpg" width="32" height="32" alt="Nhu Cassel" />
                                    <div>
                                        <h4 class="text-sm font-semibold text-gray-900">Nhu Cassel</h4>
                                        <div class="text-[13px]">14 Mar</div>
                                    </div>
                                </div>
                            </button>
                            <!-- User -->
                            <button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
                                <div class="flex items-center">
                                    <img class="rounded-full items-start flex-shrink-0 mr-3" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-03_uzwykl.jpg" width="32" height="32" alt="Patrick Friedman" />
                                    <div>
                                        <h4 class="text-sm font-semibold text-gray-900">Patrick Friedman</h4>
                                        <div class="text-[13px]">14 Mar</div>
                                    </div>
                                </div>
                            </button>
                            <!-- User -->
                            <button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
                                <div class="flex items-center">
                                    <img class="rounded-full items-start flex-shrink-0 mr-3" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-04_ttlftd.jpg" width="32" height="32" alt="Byrne McKenzie" />
                                    <div>
                                        <h4 class="text-sm font-semibold text-gray-900">Byrne McKenzie</h4>
                                        <div class="text-[13px]">14 Mar</div>
                                    </div>
                                </div>
                            </button>
                            <!-- User -->
                            <button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
                                <div class="flex items-center">
                                    <img class="rounded-full items-start flex-shrink-0 mr-3" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-05_bktgmb.jpg" width="32" height="32" alt="Scott Micheal" />
                                    <div>
                                        <h4 class="text-sm font-semibold text-gray-900">Scott Micheal</h4>
                                        <div class="text-[13px]">11 Mar</div>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                    <!-- Bottom right button -->
                    <button class="absolute bottom-5 right-5 inline-flex items-center text-sm font-medium text-white bg-cyan-500 hover:bg-cyan-600 rounded-full text-center px-3 py-2 shadow-lg focus:outline-none focus-visible:ring-2">
                        <span>New Notification</span>
                    </button>
                </div>

                <div class="flex flex-col flex-auto h-full p-6">
                    <div
                      class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4"
                    >
                      <div class="flex flex-col h-full overflow-x-auto mb-4">
                        <div class="flex flex-col h-full">
                          <div class="grid grid-cols-12 gap-y-2">
                            
                            <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                <div class="flex flex-row items-center">
                                  <div class="flex items-center">
                                      <img class="rounded-full items-start flex-shrink-0 mr-3" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-02_vll8uv.jpg" width="32" height="32" alt="Nhu Cassel" />
                                      <div>
                                          <h4 class="text-sm font-semibold text-gray-900">Nhu Cassel</h4>
                                          <div class="text-[13px]">14 Mar</div>
                                      </div>
                                  </div>
                                </div>
                                <div class="flex flex-row items-center">
                                  <div class="flex items-center">
                                      <img class="rounded-full items-start flex-shrink-0 mr-3" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-03_uzwykl.jpg" width="32" height="32" alt="Patrick Friedman" />
                                      <div>
                                          <h4 class="text-sm font-semibold text-gray-900">Patrick Friedman</h4>
                                          <div class="text-[13px]">14 Mar</div>
                                      </div>
                                  </div>
                                </div>
                                <div class="flex flex-row items-center">
                                  <div class="flex items-center">
                                      <img class="rounded-full items-start flex-shrink-0 mr-3" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-04_ttlftd.jpg" width="32" height="32" alt="Byrne McKenzie" />
                                      <div>
                                          <h4 class="text-sm font-semibold text-gray-900">Byrne McKenzie</h4>
                                          <div class="text-[13px]">14 Mar</div>
                                      </div>
                                  </div>
                                </div>
                                
                                <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                  <div>Pending Loading Dose 2, Pescription Date 20th October 2023</div>
                                </div>
                              </div>

                              <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                <div class="flex flex-row items-center">
                                  <div class="flex items-center">
                                      <img class="rounded-full items-start flex-shrink-0 mr-3" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-01_pfck4u.jpg" width="32" height="32" alt="Marie Zulfikar" />
                                      <div>
                                          <h4 class="text-sm font-semibold text-gray-900">Scott Micheal</h4>
                                          <div class="text-[13px]">11th Mar</div>
                                      </div>
                                  </div>
                                 
                                </div>
                                <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                    <div>Hello Micheal. You monthly treatment begin tommorrow</div>
                                </div>
                              </div>

                            <div class="col-start-1 col-end-8 p-3 rounded-lg">
                              <div class="flex flex-row items-center">
                                <div class="flex items-center">
                                    <img class="rounded-full items-start flex-shrink-0 mr-3" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-01_pfck4u.jpg" width="32" height="32" alt="Marie Zulfikar" />
                                    <div>
                                        <h4 class="text-sm font-semibold text-gray-900">Marie Zulfikar</h4>
                                        <div class="text-[13px]">2hrs</div>
                                    </div>
                                </div>
                                <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                  <div>Hello Marie. Welcome to Afya Reach</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4"
                      >
                        <div>
                          <button
                            class="flex items-center justify-center text-gray-400 hover:text-gray-600"
                          >
                            <svg
                              class="w-5 h-5"
                              fill="none"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"
                              ></path>
                            </svg>
                          </button>
                        </div>
                        <div class="flex-grow ml-4">
                          <div class="relative w-full">
                            <input
                              type="text"
                              class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10"
                            />
                            <button
                              class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600"
                            >
                              <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                ></path>
                              </svg>
                            </button>
                          </div>
                        </div>
                        <div class="ml-4">
                          <button
                            class="flex items-center justify-center bg-cyan-500 hover:bg-cyan-600 rounded-xl text-white px-4 py-1 flex-shrink-0"
                          >
                            <span>Send</span>
                            <span class="ml-2">
                              <svg
                                class="w-4 h-4 transform rotate-45 -mt-px"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
                                ></path>
                              </svg>
                            </span>
                          </button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
</x-app-layout>