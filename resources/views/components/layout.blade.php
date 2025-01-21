<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        <script src="{{ asset('js/dashboard.js') }}"> </script>
        <script src="https://kit.fontawesome.com/336c69a1a6.js" crossorigin="anonymous"> </script>
        @vite('resources/css/app.css')
    </head>

    <body>
        <!--Navbar-->
        <nav id="navbar" class="sticky shadow-lg top-0 z-40 flex w-full flex-row justify-end bg-[#115cab] px-4 sm:justify-between">
            <ul class="breadcrumb hidden flex-row items-center py-4 text-lg text-white sm:flex">
                <li class="inline">
                    <a href="{{ route('admin.index') }}">Dashboard</a>
                </li>
                <li class="inline">
                    <span>General</span>
                </li>
            </ul>
            <ul id="btnSidebarToggler" class="breadcrumb hidden flex-row items-center py-4 px-3 text-lg text-white sm:flex"> 
                <li class="inline">
                    <span>{{ $bookTotal }} Ejemplares</span>
                </li>
            </ul>
        </nav>
        <!--End-->

        <!--User-->
        <nav id="navbar" class="sticky shadow-lg top-1 z-40 flex w-full flex-row bg-[#e3e6e1] px-4 sm:justify-between">
            <ul class="breadcrumb hidden flex-row items-center py-4 text-lg text-white sm:flex">
                <li class="inline">
                </li>
            </ul>    
            <ul class="flex-row items-center py-4 px-1 text-lg text-gray-600 sm:flex">
                <li class="inline px-2">
                    <a href="#">Usuario</a>
                </li>
                <li class="inline px-2">
                    <a href="#">Imagen</a>
                </li>
                <li class="inline px-2">
                    <a onclick="document.getElementById('AdminLogoutForm').submit()" href="#">Cerrar Sesión</a>
                    <form id="AdminLogoutForm" action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!--End-->

        <!--Sidebar-->
        <div id="containerSidebar" class="z-40">
            <div class="navbar-menu relative z-40">
                <nav id="sidebar"
                    class="fixed left-0 bottom-0 flex w-3/4 flex-col overflow-y-auto bg-[#104e94] pt-6 pb-8 sm:max-w-xs lg:w-60">
                    <!--General-->
                    <div class="px-4 pb-6">
                        <h3 class="mb-2 text-xs font-medium uppercase">
                            Dashboard
                        </h3>
                        <ul class="mb-8 text-sm font-medium">
                            <li>
                                <a class="active flex items-center rounded py-3 pl-3 pr-4"
                                    href="{{ route('admin.index') }}">
                                    <span class="select-none">General</span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center rounded py-3 pl-3 pr-4"
                                    href="#link1">
                                    <span class="select-none">Libros</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--End-->

                    <!--Pretamos-->
                    <div class="px-4 pb-6">
                        <h3 class="mb-2 text-xs font-medium uppercase">
                            Prestamos
                        </h3>
                        <ul class="mb-8 text-sm font-medium">
                            <li>
                                <a class="flex items-center rounded py-3 pl-3 pr-4"
                                    href="#tc">
                                    <span class="select-none">Libros</span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center rounded py-3 pl-3 pr-4"
                                    href="#privacy">
                                    <span class="select-none">Alumnos</span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center rounded py-3 pl-3 pr-4"
                                    href="#imprint">
                                    <span class="select-none">Atrasos</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="px-4 pb-6">
                        <h3 class="mb-2 text-xs font-medium uppercase">
                            Acciones
                        </h3>
                        <ul class="mb-8 text-sm font-medium">
                            <li>
                                <a class="flex items-center rounded py-3 pl-3 pr-4"
                                    href="{{ route('admin.libro.create') }}">
                                    <span class="select-none">Agregar Libro</span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center rounded py-3 pl-3 pr-4"
                                    href="#ex2">
                                    <span class="select-none">Agregar Clasificación</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- example copies end -->
                </nav>
            </div>
            <div class="mx-auto lg:ml-80"></div>
        </div>
        <!-- Sidebar end -->

        <div class="flex flex-col w-full p-4/5 mx-auto p-8 md:p-10 2xl:p-12 3xl:p-14 bg-[#f1f7fe]">
            <div class="flex flex-col w-4/5 p-4/5 mx-auto p-8 md:p-10 2xl:p-12 3xl:p-14 bg-[#f1f7fe]">  
                <?php echo $slot ?>
            </div>
        </div>
    </body>
</html>
