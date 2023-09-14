<x-app-layout>
    <div class="flex p-10">
        <h1 class="text-xl text-sky-500 font-bold">Ongoing Progams</h1>
    </div>

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        
        <!-- Item 1 -->
        
        @foreach ($programs as $program) 

            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex justify-between">
                    <img
                        class="hidden w-48 mr-6 md:block"
                        src="images/acme.png"
                        alt=""
                    />
                    <div>
                        <h3 class="text-2xl">
                            <a href="/programs/{{$program->id}}">{{$program->title}}</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">{{$program->physician}}</div>
                        <ul class="flex">
                            @php
                                $tags = explode(',',$program->tags);
                            @endphp

                            @foreach ($tags as $tag)
                                <li class="flex items-center justify-center bg-blue-500 text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                    <a href="#">{{$tag}}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i> {{$program->location}}
                        </div>
                    </div>

                    <div>
                        @php
                            $enrollStatus = '';
                            $programCounter = 0
                        @endphp

                        @unless (count($status) == 0)
                            @foreach ($status as $title)
                                @if ($title->title == $program->title)
                                    @php 
                                        $enrollStatus = $title->title;
                                        $programCounter += 1
                                    @endphp
                                @endif
                            @endforeach
                        @else
                            @php $enrollStatus = 'Not Enrolled' @endphp
                        @endunless

                        @if($programCounter > 0) <span class="px-2 bg-green-400 rounded-[50%]"></span>
                        @else @php echo 'Not Enrolled'; @endphp 
                        @endif
                        
                        
                        {{-- <span class="px-2 bg-red-400 rounded-[50%]"></span> --}}
                    </div>
                </div>
            </div>
        
        @endforeach
        
    </div>
</x-app-layout>
