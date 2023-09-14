<x-app-layout>
    <h1>Welcome Home User</h1>

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        <!-- Item 1 -->
        
        @foreach ($programs as $program) 

            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img
                        class="hidden w-48 mr-6 md:block"
                        src="images/acme.png"
                        alt=""
                    />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">{{$program->title}}</a>
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
                </div>
            </div>
        
        @endforeach
        
    </div>
</x-app-layout>
