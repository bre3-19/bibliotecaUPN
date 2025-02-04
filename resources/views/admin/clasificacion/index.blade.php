<x-layout> 
    <div class="relative  grid grid-cols-10 grid-rows-3">
        <div class="relative col-span-1"> </div>
        <div class="relative col-span-9 gap-5">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table id="tablaLibros" class="table-fixed text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-72">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3 w-20">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clasificaciones as $clasificacion)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 text-gray-800">
                                {{ $clasificacion->clasificacion }}
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
