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
                                        <x-jet-nav-link href="{{ route('showcloseouts') }}"
                                            :active="request()->routeIs('showcloseouts')">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                </svg>
                                                Liquidaciones
                                            </div>
                                        </x-jet-nav-link>
                                    </li>
                                    <li class="nav-item">
                                        <x-jet-nav-link href="{{ route('showcloseouts') }}"
                                            :active="request()->routeIs('showcloseouts')">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                </svg>
                                                Activas
                                            </div>
                                        </x-jet-nav-link>
                                    </li>
                                    <li class="nav-item">
                                        <x-jet-nav-link href="{{ route('dashboard') }}"
                                            :active="request()->routeIs('dashboard')">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <circle cx="12" cy="12" r="10" stroke="black" stroke-width="2" />
                                                    <path d="M5 19L19 5" stroke="black" stroke-width="2" />
                                                </svg>
                                                Finalizadas
                                            </div>
                                        </x-jet-nav-link>
                                    </li>
                                </ul>

                                <div class="col-md-4 text-end">
                                    <div>
                                        <p class="d-inline">Sucursal: </p>
                                        <div class="btn-group shadow rounded" style="width: 220px;">
                                            <select class="form-select">
                                                <option selected>Clinica HealthAtom</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </symbol>
                        </svg>
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                                <use xlink:href="#info-fill" />
                            </svg>
                            <div>
                                Mostrando liquidaciones activas <strong>hasta el 10 de febrero de 2022</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bg-white">
                        <div class="table-responsive m-2 rounded">
                            <table class="table table-hover table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Fecha</th>
                                        <th>Realizado</th>
                                        <th>A Pagar</th>
                                        <th>Detalle</th>
                                        <th>Finalizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   Layla
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    Garzazi
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   23/07/2016
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $441
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $0
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <a href="{{-- route('') --}}" class="text-decoration-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                    </svg>
                                                    Ver
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="btn-group shadow rounded">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-warning text-white border-warning dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Finalizar
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <x-jet-dropdown-link href="{{-- route('') --}}">
                                                            Hola
                                                        </x-jet-dropdown-link>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   Ana Karen
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    González
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    07/01/2017
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $228
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $228
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <a href="{{-- route('') --}}" class="text-decoration-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                    </svg>
                                                    Ver
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="btn-group shadow rounded">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-warning text-white border-warning dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Finalizar
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <x-jet-dropdown-link href="{{-- route('') --}}">
                                                            Hola
                                                        </x-jet-dropdown-link>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   Blanca Andrea
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    Espinoza Suazo
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    23/02/2017
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $200.718
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $200.718
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <a href="{{-- route('') --}}" class="text-decoration-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                    </svg>
                                                    Ver
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="btn-group shadow rounded">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-warning text-white border-warning dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Finalizar
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <x-jet-dropdown-link href="{{-- route('') --}}">
                                                            Hola
                                                        </x-jet-dropdown-link>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   Juan
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    Espinoza Marquez
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    06/04/2017
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $65.402
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $35.070
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <a href="{{-- route('') --}}" class="text-decoration-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                    </svg>
                                                    Ver
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="btn-group shadow rounded">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-warning text-white border-warning dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Finalizar
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <x-jet-dropdown-link href="{{-- route('') --}}">
                                                            Hola
                                                        </x-jet-dropdown-link>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   Erika Alexandra
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    Semanduras
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    18/04/2017
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $166.404
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $51.884
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <a href="{{-- route('') --}}" class="text-decoration-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                    </svg>
                                                    Ver
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="btn-group shadow rounded">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-warning text-white border-warning dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Finalizar
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <x-jet-dropdown-link href="{{-- route('') --}}">
                                                            Hola
                                                        </x-jet-dropdown-link>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   Alejandro
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    Martinez Garza
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    11/05/2017
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $2001.548
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $23.823
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <a href="{{-- route('') --}}" class="text-decoration-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                    </svg>
                                                    Ver
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="btn-group shadow rounded">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-warning text-white border-warning dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Finalizar
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <x-jet-dropdown-link href="{{-- route('') --}}">
                                                            Hola
                                                        </x-jet-dropdown-link>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   Juan
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    Gomez
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    19/05/2017
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $172.111
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $19.600
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <a href="{{-- route('') --}}" class="text-decoration-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                    </svg>
                                                    Ver
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="btn-group shadow rounded">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-warning text-white border-warning dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Finalizar
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <x-jet-dropdown-link href="{{-- route('') --}}">
                                                            Hola
                                                        </x-jet-dropdown-link>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   Raquel
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    Fuentealba Gomez
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                    04/07/2017
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $641.900
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <p class="mb-0 text-capitalize">
                                                   $0
                                                </p>
                                            </div>
                                        </td>
                                        <td class="p-0">
                                            <div class="p-3">
                                                <a href="{{-- route('') --}}" class="text-decoration-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                    </svg>
                                                    Ver
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="btn-group shadow rounded">
                                                    <button id="btnGroupDrop1" type="button"
                                                        class="btn btn-warning text-white border-warning dropdown-toggle" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Finalizar
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <x-jet-dropdown-link href="{{-- route('') --}}">
                                                            Hola
                                                        </x-jet-dropdown-link>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="7" class="border-bottom-0">
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
