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

                {{-- CALENDAR SECTION --}}

                <div class="container mx-auto mt-10">
                    <div class="wrapper bg-white rounded shadow w-full ">
                      <div class="header flex justify-between border-b p-2">
                        <span class="text-lg font-bold">
                          2023 September
                        </span>
                        <div class="buttons">
                          <button class="p-1">
                              <svg width="1em" fill="gray" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
                                <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z"/>
                              </svg>
                          </button>
                          <button class="p-1">
                              <svg width="1em" fill="gray" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
                                <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
                              </svg>
                          </button>
                        </div>
                      </div>
                      <table class="w-full">
                        <thead>
                          <tr>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                              <span class="xl:block lg:block md:block sm:block hidden">Sunday</span>
                              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sun</span>
                            </th>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                              <span class="xl:block lg:block md:block sm:block hidden">Monday</span>
                              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mon</span>
                            </th>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                              <span class="xl:block lg:block md:block sm:block hidden">Tuesday</span>
                              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Tue</span>
                            </th>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                              <span class="xl:block lg:block md:block sm:block hidden">Wednesday</span>
                              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Wed</span>
                            </th>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                              <span class="xl:block lg:block md:block sm:block hidden">Thursday</span>
                              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Thu</span>
                            </th>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                              <span class="xl:block lg:block md:block sm:block hidden">Friday</span>
                              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Fri</span>
                            </th>
                            <th class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
                              <span class="xl:block lg:block md:block sm:block hidden">Saturday</span>
                              <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sat</span>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-center h-20">
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300 ">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">1</span>
                                </div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">2</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">3</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">4</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">6</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">7</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                  <div
                                    class="event bg-blue-400 text-white rounded p-1 text-sm mb-1"
                                  >
                                    <span class="event-name">
                                      Dose 1: Patrick A.
                                    </span>
                                    <span class="time">
                                      12:00~14:00
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500 text-sm">8</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                          </tr>
                
                          <!--         line 1 -->
                          <tr class="text-center h-20">
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">9</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">10</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                  <div
                                    class="event bg-orange-400 text-white rounded p-1 text-sm mb-1"
                                  >
                                    <span class="event-name">
                                      Dose 2: Nicholas M.
                                    </span>
                                    <span class="time">
                                      11:00~12:00
                                    </span>
                                  </div>
                                  <div
                                    class="event bg-purple-400 text-white rounded p-1 text-sm mb-1"
                                  >
                                    <span class="event-name">
                                      Dose 3: Kathryn K.
                                    </span>
                                    <span class="time">
                                      14:00~16:00
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">12</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">13</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">14</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">15</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                  <div
                                    class="event bg-green-500 text-white rounded p-1 text-sm mb-1"
                                  >
                                    <span class="event-name">
                                      Dose 1 Delivery
                                    </span>
                                    <span class="time">
                                      11:00~14:00
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500 text-sm">16</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                          </tr>
                          <!--         line 1 -->
                
                          <!--         line 2 -->
                          <tr class="text-center h-20">
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">16</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">17</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">18</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">19</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">20</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">21</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500 text-sm">22</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                          </tr>
                          <!--         line 2 -->
                
                          <!--         line 3 -->
                          <tr class="text-center h-20">
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">23</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">24</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">25</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">26</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">27</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">28</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500 text-sm">29</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                          </tr>
                          <!--         line 3 -->
                
                          <!--         line 4 -->
                          <tr class="text-center h-20">
                            <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">30</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            {{-- <td class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">31</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td> --}}
                            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                                <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                  <div class="top h-5 w-full">
                                    <span class="text-gray-500">1</span>
                                  </div>
                                  <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                              </td>
                            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">2</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">3</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500">4</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                            <td class="border bg-gray-100 p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300">
                              <div class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden">
                                <div class="top h-5 w-full">
                                  <span class="text-gray-500 text-sm">5</span>
                                </div>
                                <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                              </div>
                            </td>
                          </tr>
                          <!--         line 4 -->
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </main>
    </section>
</x-app-layout>