<x-layout> 
        <div class="grid grid-cols-10">
            <div class="col-span-1"> </div>

            <div class="col-span-9 gap-5 max-w">
                <div class="pt-0 pr-3 pb-0 pl-3 mr-auto ml-auto">
                    <div class="bg-white rounded-xl sm:p-10">
                        <div class="grid lg:gap-x-10 lg:grid-cols-12 lg:gap-y-8 grid-cols-1">
                            <div class="hidden lg:col-span-5 lg:block">
                                <img alt=""
                                    src="https://images.unsplash.com/photo-1517849845537-4d257902454a?ixlib=rb-1.2.1&ixid=MnwxM[…]G90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" class="rounded-2xl w-full h-full object-cover"/>
                            </div>

                            <div class="pt-8 pr-8 pb-8 pl-8 lg:col-span-7">
                                <p fontsize="2xl" class="text-gray-900 text-left font-extrabold leading-snug tracking-tight mb-4
                                    md:text-4xl">Añadir Libro</p>
                                <div>
                                    <div class="grid grid-cols-2 gap-4"></div>
                                </div>

                                <div>
                                    <div class="w-full mt-3 mr-auto mb-3 ml-auto">
                                        <label class="block text-sm font-medium text-gray-700">Titulo</label>
                                        <div class="mt-1 mr-0 mb-0 ml-0">
                                            <input type="text" placeholder="Título del Libro" class="p-2.5 focus:ring-indigo-500 focus:border-indigo-500
                                                        sm:text-sm w-full block h-10 border-gray-300 border shadow-sm rounded-md"/>
                                        </div>
                                    </div>

                                    <div class="w-full mt-3 mr-auto mb-3 ml-auto">
                                        <label class="block text-sm font-medium text-gray-700">Autor</label>
                                        <div class="mt-1 mr-0 mb-0 ml-0">
                                            <input type="text" placeholder="Autor del Libro" class="p-2.5 focus:ring-indigo-500 focus:border-indigo-500
                                                        sm:text-sm w-full block h-10 border-gray-300 border shadow-sm rounded-md"/>
                                        </div>
                                    </div>

                                    <div class="grid gap-6 md:grid-cols-2">
                                        <div class="w-full mt-0 mr-auto mb-3 ml-auto">
                                            <label class="block text-sm font-medium text-gray-700">Cantidad</label>
                                            <div class="mt-1 mr-0 mb-0 ml-0">
                                                <input type="number" placeholder="1" class="p-2.5 focus:ring-indigo-500 focus:border-indigo-500
                                                        sm:text-sm w-full block h-10 border-gray-300 border shadow-sm rounded-md"/>
                                            </div>
                                        </div>

                                        <div class="w-full mt-0 mr-auto mb-4 ml-auto">
                                            <label class="block text-sm font-medium text-gray-700">Categoría</label>
                                            <div class="mt-1 mr-0 mb-0 ml-0">
                                                <select class="p-2.5 focus:ring-indigo-500 focus:border-indigo-500
                                                    sm:text-sm w-full block h-10 border-gray-300 border shadow-sm rounded-md"/>
                                                    <option selected>Choose a country</option>
                                                    <option value="US">United States</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="FR">France</option>
                                                    <option value="DE">Germany</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid gap-6 md:grid-cols-2">
                                        <div class="w-full mt-0 mr-auto mb-3 ml-auto">
                                            <label class="block text-sm font-medium text-gray-700">Año</label>
                                            <div class="mt-1 mr-0 mb-0 ml-0">
                                                <input type="number" placeholder='{{ now()->year }}' class="p-2.5 focus:ring-indigo-500 focus:border-indigo-500
                                                        sm:text-sm w-full block h-10 border-gray-300 border shadow-sm rounded-md"/>
                                            </div>
                                        </div>

                                        <div class="w-full mt-0 mr-auto mb-4 ml-auto">
                                            <label class="block text-sm font-medium text-gray-700">Tipo</label>
                                            <div class="mt-1 mr-0 mb-0 ml-0">
                                                <select class="p-2.5 focus:ring-indigo-500 focus:border-indigo-500
                                                    sm:text-sm w-full block h-10 border-gray-300 border shadow-sm rounded-md"/>
                                                    <option selected value="Libro">Libro</option>
                                                    <option value="Tipo">Tipo</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid gap-6 md:grid-cols-2">
                                        <div class="w-full mt-0 mr-auto mb-3 ml-auto">
                                            <label class="block text-sm font-medium text-gray-700">Contenedor</label>
                                            <div class="mt-1 mr-0 mb-0 ml-0">
                                                <input type="number" placeholder='{{ now()->year }}' class="p-2.5 focus:ring-indigo-500 focus:border-indigo-500
                                                        sm:text-sm w-full block h-10 border-gray-300 border shadow-sm rounded-md"/>
                                            </div>
                                        </div>

                                        <div class="w-full mt-0 mr-auto mb-4 ml-auto">
                                            <label class="block text-sm font-medium text-gray-700">Lado</label>
                                            <div class="mt-1 mr-0 mb-0 ml-0">
                                                <select class="p-2.5 focus:ring-indigo-500 focus:border-indigo-500
                                                    sm:text-sm w-full block h-10 border-gray-300 border shadow-sm rounded-md"/>
                                                    <option selected value="Izquierdo">Izquierdo</option>
                                                    <option value="Derecho">Derecho</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid gap-6 md:grid-cols-2">
                                        <div class="w-full mt-0 mr-auto mb-3 ml-auto">
                                            <label class="block text-sm font-medium text-gray-700">Nivel</label>
                                            <div class="mt-1 mr-0 mb-0 ml-0">
                                                <input type="number" placeholder='{{ now()->year }}' class="p-2.5 focus:ring-indigo-500 focus:border-indigo-500
                                                        sm:text-sm w-full block h-10 border-gray-300 border shadow-sm rounded-md"/>
                                            </div>
                                        </div>

                                        <div class="w-full mt-0 mr-auto mb-4 ml-auto">
                                            <label class="block text-sm font-medium text-gray-700">Cara</label>
                                            <div class="mt-1 mr-0 mb-0 ml-0">
                                                <select class="p-2.5 focus:ring-indigo-500 focus:border-indigo-500
                                                    sm:text-sm w-full block h-10 border-gray-300 border shadow-sm rounded-md"/>
                                                    <option selected value="Norte">Norte</option>
                                                    <option value="Sur">Sur</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                                        <div class="w-full mt-0 mr-auto mb-3 ml-auto">
                                            <label class="block text-sm font-medium text-gray-700">Número</label>
                                            <div class="mt-1 mr-0 mb-0 ml-0">
                                                <input type="number" placeholder='{{ now()->year }}' class="p-2.5 focus:ring-indigo-500 focus:border-indigo-500
                                                        sm:text-sm w-full block h-10 border-gray-300 border shadow-sm rounded-md"/>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="hover:bg-gray-600 rounded-md text-xl pt-3 pr-3 pb-3 pl-3 bg-gray-800 font-semibold text-white
                                    w-full text-center">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
</x-layout>
