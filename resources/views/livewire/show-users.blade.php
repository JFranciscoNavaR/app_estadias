<div class="row justify-content-center my-5">
    <div class="col-md-12">
        <div class="overflow-hidden bg-white shadow rounded">
            <div class="row g-0">
                <div class="col-12">
                    <nav class="navbar p-0 navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div
                                class="collapse navbar-collapse d-flex flex-wrap align-items-center justify-content-center justify-content-md-between p-2 border-bottom">
                                <ul class="navbar-nav col-12 col-md-auto justify-content-center">
                                    <li class="nav-item">
                                        <x-jet-nav-link href="{{ route('showusers') }}"
                                            :active="request()->routeIs('showusers')">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                </svg>
                                                Usuarios
                                            </div>
                                        </x-jet-nav-link>
                                    </li>
                                    <li class="nav-item">
                                        <x-jet-dropdown class="text-secondary" id="navDropdownSemanal">
                                            <x-slot name="trigger">
                                                <div>
                                                    Habilitados
                                                    <svg class="ms-2" width="18"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </x-slot>
                                            <x-slot name="content">
                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                    Hola
                                                </x-jet-dropdown-link>
                                            </x-slot>
                                        </x-jet-dropdown>
                                    </li>
                                    <li class="nav-item">
                                        <x-jet-nav-link href="{{ route('dashboard') }}"
                                            :active="request()->routeIs('dashboard')">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                    <path fill-rule="evenodd"
                                                        d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                                </svg>
                                                Perfiles de usuario
                                            </div>
                                        </x-jet-nav-link>
                                    </li>
                                    <li class="nav-item">
                                        <x-jet-nav-link href="{{ route('dashboard') }}"
                                            :active="request()->routeIs('dashboard')">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-calendar-x" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z" />
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                                </svg>
                                                Bloqueo por horario
                                            </div>
                                        </x-jet-nav-link>
                                    </li>
                                </ul>

                                <div class="col-md-3 text-end">
                                    <div class="btn-group shadow rounded">
                                        <button type="button" class="btn btn-success text-white border-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                            </svg>
                                            Nuevo usuario
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="bg-white">
                        <div class="table-responsive m-2 rounded">
                            <table class="table table-hover table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th># Id</th>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Habilitado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0">
                                                    1
                                                </p>
                                            </div>
                                        </td>

                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0">
                                                    Administrador
                                                </p>
                                            </div>
                                        </td>

                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0">
                                                    admin
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0">
                                                    Habilitado
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="btn-group shadow rounded">
                                                    <button type="button"
                                                        class="btn btn-warning text-white border-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-pencil-square"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="btn-group shadow rounded">
                                                    <button type="button"
                                                        class="btn btn-danger text-white border-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0">
                                                    266
                                                </p>
                                            </div>
                                        </td>

                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0">
                                                    Aldo Camacho Martínez
                                                </p>
                                            </div>
                                        </td>

                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0">
                                                    aldo
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0">
                                                    Habilitado
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="btn-group shadow rounded">
                                                    <a href="{{ route('edituser') }}">
                                                        <button type="button" href="{{ route('edituser') }}"
                                                            class="btn btn-warning text-white border-warning">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg>
                                                        </button>
                                                    </a>
                                                </div>
                                                <div class="btn-group shadow rounded">
                                                    <button type="button"
                                                        class="btn btn-danger text-white border-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="border-bottom-0">
                                            <nav>
                                                <ul class="mb-0 pagination justify-content-end">
                                                    <li class="page-item disabled">
                                                        <a class="page-link">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
