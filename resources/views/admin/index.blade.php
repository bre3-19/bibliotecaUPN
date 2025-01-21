<x-layout> 
    <div class="grid grid-cols-10 grid-rows-2">
        <div class="col-span-1"> </div>
        <div class="col-span-9 grid grid-cols-1 xl:grid-cols-3 gap-5">
            <!--Tesis-->
            <div class="p-3 relative bg-white border shadow-lg rounded-2xl">
                <div class="text-2xl text-gray-600 font-medium leading-8 mt-5">{{ $bookTesis }}</div>
                <div class="text-sm text-gray-500 text-right">Tesis almacenadas</div>
            </div>

            <!--Libros-->
            <div class="p-3 relative bg-white border shadow-lg rounded-2xl">
                <div class="text-2xl text-gray-600 font-medium leading-8 mt-5">{{ $bookBooks }}</div>
                <div class="text-sm text-gray-500 text-right">Libros almacenados</div>
            </div>

            <!--Cuentos-->
            <div class="p-3 relative bg-white border shadow-lg rounded-2xl">
                <div class="text-2xl text-gray-600 font-medium leading-8 mt-5">{{ $bookTales }}</div>
                <div class="text-sm text-gray-500 text-right">UPN, Ajusco, Revistas y Cuentos</div>
            </div>

            <!--Prestamos-->
            <div class="row-start-2 p-3 relative bg-white border shadow-lg rounded-2xl">
                <div class="text-2xl text-gray-600 font-medium leading-8 mt-5">{{ $loanTotal->count() }}</div>
                <div class="text-sm text-gray-500 text-right">Prestamos en tiempo</div>
            </div>

            <!--De hoy-->
            <div class="row-start-2 p-3 relative bg-white border shadow-lg rounded-2xl">
                <div class="text-2xl text-gray-600 font-medium leading-8 mt-5">{{ $loanToday->count() }}</div>
                <div class="text-sm text-gray-500 text-right">Prestamos de hoy</div>
            </div>

            <!--Atrasos-->
            <div class="row-start-2 p-3 relative bg-white border shadow-lg rounded-2xl">
                <div class="text-2xl text-gray-600 font-medium leading-8 mt-5">{{ $loanDated->count() }}</div>
                <div class="text-sm text-gray-500 text-right">Prestamos atrasados</div>
            </div>

        </div>
        <div class="col-span-1 p-5 divide-y divide-dashed"> </div>
        <div class="col-span-9 grid grid-cols-1 xl:grid-cols-3 gap-5 divide-y divide-dashed">
        </div>
    </div>
</x-layout>
