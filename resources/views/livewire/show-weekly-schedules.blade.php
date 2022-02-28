<div>
    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <div class="overflow-hidden bg-white shadow rounded">
                <div class="row g-0">
                    <div class="col-3">
                        <div class="p-3 border-bottom bg-white">
                            <p class="m-0 text-secundary">
                                03 de julio al 09 de julio
                            </p>
                        </div>
                    </div>
                    <div class="col-9 mb-0">
                        <nav class="navbar navbar-expand-lg navbar-light pb-0">
                            <div class="container-fluid">
                                <div
                                    class="collapse navbar-collapse d-flex flex-wrap align-items-center justify-content-center justify-content-md-between pb-2 px-2 m-0 border-bottom">
                                    <ul class="navbar-nav col-12 col-md-auto justify-content-center">
                                        <li class="nav-item">
                                            <x-jet-nav-link href="{{ route('dashboard') }}"
                                                :active="request()->routeIs('dashboard')">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                    </svg>
                                                    Diaria
                                                </div>
                                            </x-jet-nav-link>
                                        </li>
                                        <li class="nav-item">
                                            <x-jet-dropdown class="text-secondary" id="navDropdownSemanal">
                                                <x-slot name="trigger">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-layout-split"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm8.5-1v12H14a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H8.5zm-1 0H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h5.5V2z" />
                                                        </svg>
                                                        Semanal
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
                                                        Dr(a). Espinoza Marquez Juan
                                                    </x-jet-dropdown-link>
                                                    <x-jet-dropdown-link href="{{-- route('') --}}">
                                                        Dr(a). Espinoza Suazo Blanca Andrea
                                                    </x-jet-dropdown-link>
                                                    <x-jet-dropdown-link href="{{ route('showweeklyschedules') }}">
                                                        Dr(a). Fuentealba Gomez Raquel
                                                    </x-jet-dropdown-link>
                                                </x-slot>
                                            </x-jet-dropdown>
                                        </li>
                                        <li class="nav-item">
                                            <x-jet-nav-link href="{{ route('dashboard') }}"
                                                :active="request()->routeIs('dashboard')">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-people-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                                    </svg>
                                                    Diaria global
                                                </div>
                                            </x-jet-nav-link>
                                        </li>
                                    </ul>

                                    <div class="col-md-3 text-end">
                                        <div class="btn-group shadow rounded">
                                            <button type="button" class="btn btn-light border">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-calendar-week-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zM2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z">
                                                    </path>
                                                </svg>
                                                Fecha
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-12">
                        <div class="mx-2">
                            <nav class="navbar p-0 navbar-expand-lg navbar-white">
                                <div class="container-fluid">
                                    <div
                                        class="collapse navbar-collapse d-flex flex-wrap align-items-center justify-content-center justify-content-md-between p-2">
                                        <div class="navbar-nav p-0 col-12 col-md-auto justify-content-center">
                                            <div class="btn-group shadow rounded">
                                                <button type="button"
                                                    class="btn btn-primary text-white position-relative">
                                                    Sillón 1
                                                    <span
                                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                                        12
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="p-2 ms-2">
                                                <a href="" class="mb-0 text-decoration-none">
                                                    Sobre Agendamiento
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-9 text-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-people-fill me-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                <path fill-rule="evenodd"
                                                    d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                            </svg>
                                            <div class="btn-group shadow rounded">
                                                <select class="form-select">
                                                    <option></option>
                                                    <option value="">Dr(a). Espinoza Marquez Juan</option>
                                                    <option value="">Dr(a). Espinoza Suazo Blanca Andrea</option>
                                                    <option value="" selected>Dr(a). Fuentealba Gomez Raquel</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-white mx-2 mb-2">
                            <div class="table-responsive rounded">
                                <table class="table table-hover table-bordered mb-0">
                                    <thead>
                                        <tr class="text-center text-primary">
                                            <th class="text-start">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                                </svg>
                                            </th>
                                            <th>Lunes 03</th>
                                            <th>Martes 04</th>
                                            <th>Miercoles 05</th>
                                            <th>Jueves 06</th>
                                            <th>Viernes 07</th>
                                            <th>Sabado 08</th>
                                            <th>Domingo 09</th>
                                            <th class="text-end">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                </svg>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">08:00</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">08:00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">08:15</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">08:15</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">08:30</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">08:30</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">08:45</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">08:45</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">09:00</td>
                                            <td rowspan="2">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0" id="navDropdown09Lu">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    Ana Karinberg
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-chevron-down bg-secondary text-white rounded-circle p-1 m-1 fw-bold float-end"
                                                                        viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0" id="navDropdown09Ma">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td rowspan="2">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0" id="navDropdown09Mi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-circle-fill mb-1 text-warning"
                                                                        viewBox="0 0 16 16">
                                                                        <circle cx="8" cy="8" r="8" />
                                                                    </svg>
                                                                    Jonathan
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-chevron-down bg-secondary text-white rounded-circle p-1 m-1 fw-bold float-end"
                                                                        viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0" id="navDropdown09Ju">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0" id="navDropdown09Vi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0" id="navDropdown09Sa">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td></td>
                                            <td class="text-center">09:00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">09:15</td>
                                            <td rowspan="4">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0915Ma">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-circle-fill mb-1 text-danger"
                                                                        viewBox="0 0 16 16">
                                                                        <circle cx="8" cy="8" r="8" />
                                                                    </svg>
                                                                    Adriano
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-chevron-down bg-secondary text-white rounded-circle p-1 m-1 fw-bold float-end"
                                                                        viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0915Ju">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0915Vi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0915Sa">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td></td>
                                            <td class="text-center">09:15</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">09:30</td>
                                            <td rowspan="2">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0930Lu">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-circle-fill mb-1 text-success"
                                                                        viewBox="0 0 16 16">
                                                                        <circle cx="8" cy="8" r="8" />
                                                                    </svg>
                                                                    Camilo
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-chevron-down bg-secondary text-white rounded-circle p-1 m-1 fw-bold float-end"
                                                                        viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0930Mi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0930Ju">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0930Vi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0930Sa">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td></td>
                                            <td class="text-center">09:30</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">09:45</td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0945Mi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0945Ju">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0945Vi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown0945Sa">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td></td>
                                            <td class="text-center">09:45</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">10:00</td>
                                            <td rowspan="2">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0" id="navDropdown09Lu">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill mb-1 text-success" viewBox="0 0 16 16">
                                                                        <circle cx="8" cy="8" r="8"/>
                                                                    </svg>
                                                                    Yuri
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-chevron-down bg-secondary text-white rounded-circle p-1 m-1 fw-bold float-end" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown10Mi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown10Ju">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td rowspan="2">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0" id="navDropdown09Ma">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill mb-1 text-danger" viewBox="0 0 16 16">
                                                                        <circle cx="8" cy="8" r="8"/>
                                                                    </svg>
                                                                    Diana
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-chevron-down bg-secondary text-white rounded-circle p-1 m-1 fw-bold float-end" viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown10Sa">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td></td>
                                            <td class="text-center">10:00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">10:15</td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1015Ma">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1015Mi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1015Ju">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1015Sa">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td></td>
                                            <td class="text-center">10:15</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">10:30</td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1030Lu">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1030Ma">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1030Mi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1030Ju">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1030Vi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1030Sa">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td></td>
                                            <td class="text-center">10:30</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">10:45</td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1045Lu">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1045Ma">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1045Mi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1045Ju">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1045Vi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown1045Sa">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td></td>
                                            <td class="text-center">10:45</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">11:00</td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown11Lu">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown11Ma">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown11Mi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown11Ju">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown11Vi">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="bg-success bg-opacity-25 text-end">
                                                <ul class="navbar-nav justify-content-center">
                                                    <li class="nav-item">
                                                        <x-jet-dropdown class="text-secondary p-0"
                                                            id="navDropdown11Sa">
                                                            <x-slot name="trigger">
                                                                <div>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-plus-circle-fill text-success bg-white rounded-circle"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                                    </svg>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="content">
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Dar cita
                                                                </x-jet-dropdown-link>
                                                                <x-jet-dropdown-link href="{{-- route('') --}}">
                                                                    Bloquear espacio
                                                                </x-jet-dropdown-link>
                                                            </x-slot>
                                                        </x-jet-dropdown>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td></td>
                                            <td class="text-center">11:00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="9" class="border-bottom-0">
                                                <nav>
                                                    <ul class="mb-0 pagination justify-content-end">
                                                        <li class="page-item disabled">
                                                            <a class="page-link">Previous</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">1</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">3</a>
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
</div>
