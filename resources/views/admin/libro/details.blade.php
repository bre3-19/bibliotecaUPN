<x-layout> 
    <div class="grid grid-cols-10">
        <div class="col-span-1"> </div>

        <div class="col-span-9 gap-5 max-w">
            <div class="pt-0 pr-3 pb-0 pl-3 mr-auto ml-auto">
                <div class="bg-white rounded-xl sm:p-10">
                    <div class="grid lg:gap-x-10 lg:grid-cols-12 lg:gap-y-8 grid-cols-1">
                        <div class="relative hidden lg:col-span-5 lg:block">

                            <img id="preview" name="preview"
                                src="{{ url('/images/book_cover.jpeg') }}" class="rounded-2xl w-full h-full object-contain"/>
                        </div>

                        <div class="col-span-7 p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <div class="mb-6">
                                @switch($book[0]->tipo)
                                    @case("Libro")
                                        <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm 
                                            dark:bg-blue-900 dark:text-blue-300">
                                            <i class="fa-solid fa-book"></i>
                                            Libro
                                        </span>
                                        @break
                                
                                    @case("Tesis")
                                        <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm 
                                            dark:bg-gray-700 dark:text-gray-300">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            Tesis
                                        </span>
                                        @break
                                    
                                    @case("Otro")
                                        <span class="bg-pink-100 text-pink-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm 
                                            dark:bg-pink-900 dark:text-pink-300">
                                            <i class="fa-solid fa-newspaper"></i>
                                            Variado
                                        </span>
                                        @break
                                
                                    @default
                                        <span class="bg-pink-100 text-pink-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm 
                                            dark:bg-pink-900 dark:text-pink-300">
                                            <i class="fa-solid fa-newspaper"></i>
                                            Variado
                                        </span>
                                        @break
                                @endswitch
                            </div>
                            
                            <div class="flex items-center justify-between mb-4">
                                <h5 class="text-xl mb-10 text-center font-bold leading-none text-gray-900 dark:text-white">{{ $book[0]->titulo }}</h5>
                            </div>
                            <div class="flow-root">
                                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <li> </li>
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center ">
                                            <div class="flex-1 min-w-0 ms-4">
                                                <ul>
                                                    <li class="inline font-bold text-lg mb-10 font-medium text-gray-900 truncate dark:text-white">Autor: </li>
                                                    <li class="inline text-lg mb-10 text-gray-900 truncate dark:text-white">{{ $book[0]->autor }}</li>
                                                    <span class="right-0 bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm 
                                                        dark:bg-gray-700 dark:text-gray-300">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                        {{ $book[0]->anio }}
                                                    </span>
                                                </ul>  
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center">
                                            <div class="flex-1 min-w-0 ms-4">
                                                <ul class="mb-3">
                                                    <li class="inline font-bold text-base mb-10 font-medium text-gray-900 truncate dark:text-white">Existencias: </li>
                                                    <li class="inline text-base mb-10 text-gray-900 truncate dark:text-white">{{ $book[0]->cantidad }}</li>
                                                </ul>  
                                                <ul>
                                                    <li class="inline font-bold text-base mb-10 font-medium text-gray-900 truncate dark:text-white">Estado: </li>
                                                    <li class="inline text-base mb-10 text-gray-900 truncate dark:text-white">Disponible</li>
                                                </ul>  
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-3 sm:py-4 mt-2">
                                        <div class="flex items-center">
                                            <div class="flex flex-col rounded-2xl w-[500px] bg-[#ffffff] shadow-xl">
                                                <div class="flex flex-col p-8">
                                                    <div class="grid grid-cols-4 gap-4">
                                                        <div class="col-span-2">
                                                            <span class="bg-yellow-100 text-yellow-800 text-base font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">
                                                                Contenedor: {{ $book[0]->contenedor }}
                                                            </span>
                                                        </div>

                                                        <div class="col-start-3 col-span-2">
                                                            <span class="bg-indigo-100 text-indigo-800 text-base font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-indigo-900 dark:text-indigo-300">
                                                                    Nivel: {{ $book[0]->nivel }}
                                                            </span>
                                                        </div>

                                                        <div class="col-span-2 content-center">
                                                            @switch($book[0]->lado)
                                                                @case("Izquierdo")
                                                                    <span class="bg-gray-100 text-gray-800 text-base font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                                                        Lado: {{ $book[0]->lado }}
                                                                    </span>
                                                                    @break
                                                                
                                                                @case("Derecho")
                                                                    <span class="bg-blue-100 text-blue-800 text-base font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">
                                                                        Lado: {{ $book[0]->lado }}
                                                                    </span>
                                                                    @break
                                                                
                                                                @default
                                                                    <span class="bg-gray-100 text-gray-800 text-base font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                                                        Lado: {{ $book[0]->lado }}
                                                                    </span>
                                                                    @break
                                                            @endswitch
                                                        </div>

                                                        <div class="col-start-3 col-span-2 content-center">
                                                            @switch($book[0]->cara)
                                                                @case("Sur")
                                                                    <span class="bg-red-100 text-red-800 text-base font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                                                        Cara: {{ $book[0]->cara }}
                                                                    </span>
                                                                    @break
                                                            
                                                                @case("Norte")
                                                                    <span class="bg-green-100 text-green-800 text-base font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                                                        Cara: {{ $book[0]->cara }}
                                                                    </span>
                                                                    @break
                                                            
                                                                @default
                                                                    <span class="bg-gray-100 text-gray-800 text-base font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                                                        Cara: {{ $book[0]->cara }}
                                                                    </span>
                                                                    @break
                                                            @endswitch
                                                        </div>

                                                        <div class="col-span-2 content-center">
                                                            <span class="bg-purple-100 text-purple-800 text-base font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-purple-900 dark:text-purple-300">
                                                                Número: {{ $book[0]->numero }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                        </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
</x-layout>