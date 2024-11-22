<div>
    @if (Auth::guard('administrativos')->check())
        <div class="flex flex-row">
            <aside
                class="flex flex-col w-64 min-h-screen px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
                <a href="#">
                    <img class="w-auto h-7" src="https://portalinformatica.uaq.mx/asesorias/public/img/logos-fif-uaq.png"
                        alt="">

                </a>
                <h2 class="text-white mt-8 text-2xl font-bold">Admin</h2>

                <div class="flex flex-col justify-between flex-1 mt-6">
                    <nav class="-mx-3 space-y-6 ">
                        <div class="space-y-3">
                            <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Usuarios</label>

                            <div
                                class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                                </svg>

                                <button wire:click="changeSection('estudiantes')">
                                    <span class="mx-2 text-sm font-medium">Estudiantes</span>
                                </button>
                            </div>

                            <div
                                class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                                </svg>

                                <button wire:click="changeSection('docentes')">
                                    <span class="mx-2 text-sm font-medium">Docentes</span>
                                </button>
                            </div>
                        </div>

                        <div class="space-y-3 ">
                            <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Material</label>

                            <div
                                class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>

                                <button wire:click="changeSection('cursos')">
                                    <span class="mx-2 text-sm font-medium">Cursos</span>
                                </button>
                                </d>
                            </div>

                            <div class="space-y-3 ">
                                <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Opciones</label>

                                <div class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                                    </svg>
                                    <button>
                                        <span wire:click='logout' class="mx-2 text-sm font-medium">Cerrar Sesión</span>
                                    </button>
                                </div>
                            </div>
                    </nav>
                </div>
            </aside>
            <div class="content">
                @if ($currentSection === 'estudiantes')
                    @livewire('admin.create-student')
                @elseif($currentSection === 'docentes')
                    @livewire('admin.create-docente')
                @elseif($currentSection === 'cursos')
                    @livewire('admin.create-curso')
                @endif
            </div>
        </div>
    @endif
</div>
