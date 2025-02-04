<x-layout> 
    <div class="relative  grid grid-cols-10 grid-rows-3">
        <div class="relative col-span-1"> </div>
        <div class="relative h-48 col-span-9 grid grid-cols-1 xl:grid-cols-3 gap-5">
            <!--Tesis-->
            <div class="p-3 h-24 relative bg-white border shadow-lg rounded-2xl">
                <div class="text-2xl text-gray-900 font-medium leading-8 mt-5">{{ $bookTesis }}</div>
                <div class="text-sm text-gray-700 text-right">Tesis almacenadas</div>
            </div>

            <!--Libros-->
            <div class="p-3 h-24 relative bg-white border shadow-lg rounded-2xl">
                <div class="text-2xl text-gray-900 font-medium leading-8 mt-5">{{ $bookBooks }}</div>
                <div class="text-sm text-gray-700 text-right">Libros almacenados</div>
            </div>

            <!--Cuentos-->
            <div class="p-3 h-24 relative bg-white border shadow-lg rounded-2xl">
                <div class="text-2xl text-gray-900 font-medium leading-8 mt-5">{{ $bookTales }}</div>
                <div class="text-sm text-gray-700 text-right">UPN, Ajusco, Revistas y Cuentos</div>
            </div>

            <!--Prestamos-->
            <div class="row-start-2 p-3 h-24 relative bg-white border shadow-lg rounded-2xl">
                <div class="text-2xl text-gray-900 font-medium leading-8 mt-5">{{ $loanTotal->count() }}</div>
                <div class="text-sm text-gray-700 text-right">Prestamos en tiempo</div>
            </div>

            <!--De hoy-->
            <div class="row-start-2 p-3 h-24 relative bg-white border shadow-lg rounded-2xl">
                <div class="text-2xl text-gray-900 font-medium leading-8 mt-5">{{ $loanToday->count() }}</div>
                <div class="text-sm text-gray-700 text-right">Prestamos de hoy</div>
            </div>

            <!--Atrasos-->
            <div class="row-start-2 p-3 h-24 relative bg-white border shadow-lg rounded-2xl">
                <div class="text-2xl text-gray-900 font-medium leading-8 mt-5">{{ $loanDated->count() }}</div>
                <div class="text-sm text-gray-700 text-right">Prestamos atrasados</div>
            </div>
        </div>
        
        <div class="absolute w-full col-start-2 row-start-2 divide-y py-12">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table id="tablaLibros" class="table-fixed text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-72">
                                Titulo
                            </th>
                            <th scope="col" class="px-6 py-3 w-20">
                                Cantidad
                            </th>
                            <th scope="col" class="px-6 py-3 w-52">
                                Autor
                            </th>
                            <th scope="col" class="px-6 py-3 w-52">
                                Categoria
                            </th>
                            <th scope="col" class="px-6 py-3 w-52">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookData as $book)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 text-gray-800">
                                <a type="button" href="{{ route('admin.libro.details', ['id'=>$book->id]) }}">
                                    {{ $book->titulo }}
                                </a>
                            </td>
                            <td class="px-6 py-4 text-gray-800">
                                {{ $book->cantidad }}
                            </td>
                            <td class="px-6 py-4 text-gray-800">
                                {{ $book->autor }}
                            </td>
                            <td class="px-6 py-4 text-gray-800">
                                {{ $book->clasificacion->clasificacion }}
                            </td>
                            <td class="px-6 py-4 text-gray-800">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tablaLibros').DataTable();
        })
    </script>
</x-layout>
