<div class="row justify-content-center my-5">
    <div class="col-md-12">
        <div class="overflow-hidden bg-white shadow rounded">
            <div class="row g-0">
                <div class="col-12">
                    <nav class="navbar p-0 navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div
                                class="collapse navbar-collapse d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mb-2 p-2 border-bottom">
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
                    <div class="mx-2 bg-light border border-bottom-0 rounded">
                        <div class="p-3">
                            <p class="mb-0 text-center fs-4">
                                Datos Personales: Aldo
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mx-2 mb-4">
                        <div class="border border-bottom-0">
                            <div class="p-3 row">
                                <x-jet-label class="col-3 text-end col-form-label" value="Nombre" />
                                <div class="col-9">
                                    <x-jet-input class="{{ $errors->has('nombre') ? 'is-invalid' : '' }}"
                                        placeholder="Ingrese el nombre" value="Aldo Camacho Martínez" type="text"
                                        name="nombre" required autofocus autocomplete="nombre" />
                                    <x-jet-input-error for="nombre"></x-jet-input-error>
                                </div>
                            </div>
                        </div>
                        <div class="border border-bottom-0">
                            <div class="p-3 row">
                                <x-jet-label class="col-3 text-end col-form-label" value="Usuario" />
                                <div class="col-9">
                                    <x-jet-input class="{{ $errors->has('usuario') ? 'is-invalid' : '' }}"
                                        placeholder="Ingrese el usuario" value="aldo" type="text" name="usuario"
                                        required autofocus autocomplete="usuario" disabled />
                                    <x-jet-input-error for="usuario"></x-jet-input-error>
                                </div>
                            </div>
                        </div>
                        <div class="border border-bottom-0">
                            <div class="p-3 row">
                                <x-jet-label class="col-3 text-end col-form-label" value="RUT" />
                                <div class="col-9">
                                    <x-jet-input class="{{ $errors->has('rut') ? 'is-invalid' : '' }}"
                                        placeholder="Ingrese el RUT" value="" type="text" name="rut" required autofocus
                                        autocomplete="rut" />
                                    <x-jet-input-error for="rut"></x-jet-input-error>
                                </div>
                            </div>
                        </div>
                        <div class="border border-bottom-0">
                            <div class="p-3 row">
                                <x-jet-label class="col-3 text-end col-form-label" value="Email" />
                                <div class="col-9">
                                    <x-jet-input class="mb-2 {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        placeholder="Ingrese el email" value="" type="email" name="email" required
                                        autofocus autocomplete="email" disabled />
                                    <x-jet-input-error for="email"></x-jet-input-error>

                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                        </symbol>
                                    </svg>
                                    <div class="alert alert-primary d-flex mb-0 p-2 align-items-center" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                            aria-label="Info:">
                                            <use xlink:href="#info-fill" />
                                        </svg>
                                        <div>
                                            El correo solo puede ser modificado desde la sección "Configuración perfil"
                                            de cada usuario
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border border-bottom-0">
                            <div class="p-3 row">
                                <x-jet-label class="col-3 text-end col-form-label" value="Nueva clave" />
                                <div class="col-9">
                                    <x-jet-input class="{{ $errors->has('nueva_clave') ? 'is-invalid' : '' }}"
                                        placeholder="Ingrese la nueva clave" value="" type="text" name="nueva_clave"
                                        required autofocus autocomplete="nueva_clave" />
                                    <x-jet-input-error for="nueva_clave"></x-jet-input-error>
                                </div>
                            </div>
                        </div>
                        <div class="border border-bottom-0">
                            <div class="p-3 row">
                                <x-jet-label class="col-3 text-end col-form-label" value="Repetir clave" />
                                <div class="col-9">
                                    <x-jet-input class="{{ $errors->has('repetir_clave') ? 'is-invalid' : '' }}"
                                        placeholder="Ingrese de nuevo la clave" value="" type="text"
                                        name="repetir_clave" required autofocus autocomplete="repetir_clave" />
                                    <x-jet-input-error for="repetir_clave"></x-jet-input-error>
                                </div>
                            </div>
                        </div>
                        <div class="border border-bottom-0">
                            <div class="p-3 row">
                                <x-jet-label class="col-3 text-end col-form-label" value="Dentista" />
                                <div class="col-9">
                                    <x-jet-input readonly
                                        class="px-2 form-control-plaintext bg-white {{ $errors->has('dentista') ? 'is-invalid' : '' }}"
                                        placeholder="Ingrese el dentista" value="Sin Dentista" type="text"
                                        name="dentista" required autofocus autocomplete="dentista" />
                                    <x-jet-input-error for="dentista"></x-jet-input-error>
                                </div>
                            </div>
                        </div>
                        <div class="border border-bottom-0">
                            <div class="p-3 row">
                                <x-jet-label class="col-3 text-end col-form-label" value="Estado de la cuenta" />
                                <div class="col-9">
                                    <select class="form-select {{ $errors->has('estatus') ? 'is-invalid' : '' }}"
                                        name="estatus" required autofocus autocomplete="estatus">
                                        <option>Selecciona un estatus</option>
                                        <option value="1" selected>Habilitada</option>
                                    </select>
                                    <x-jet-input-error for="estatus"></x-jet-input-error>
                                </div>
                            </div>
                        </div>
                        <div class="border">
                            <div class="p-3 row">
                                <div class="col-12 text-end">
                                    <div class="btn-group shadow rounded">
                                        <button type="button" class="btn btn-success text-white border-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                            Guardar datos personales
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @livewire('show-branches')
                @livewire('show-permissions')
            </div>
        </div>
    </div>
</div>
