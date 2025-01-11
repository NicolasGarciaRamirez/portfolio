<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-50 dark:bg-zinc-900">

        <div class="flex min-h-screen">
            
            <!-- Sidebar -->
            <div class="fixed w-1/6 h-screen bg-[#6EB5FF] dark:bg-zinc-800 p-6">
                <div class="text-center">
                    <img class="rounded-full mx-auto w-32 mb-6" src="/nicolas.png" alt="Nicolas Garcia">
                    <nav class="space-y-4">
                        <a href="#about" class="block text-white font-bold hover:text-white/70 transition duration-300">About Me</a>
                        <a href="#skills" class="block text-white font-bold hover:text-white/70 transition duration-300">Skills</a>
                        <a href="#portfolio" class="block text-white font-bold hover:text-white/70 transition duration-300">Portfolio</a>
                        <a href="#contact" class="block text-white font-bold hover:text-white/70 transition duration-300">Contact</a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="ml-[20%] w-3/4 p-12">
                     <!-- About Section -->
                     <section id="about" class="mb-16">
                        <h2 class="text-4xl font-bold mb-8 text-[#6EB5FF] dark:text-white text-center">About Me</h2>
                        <div class="flex flex-col md:flex-row items-center gap-8">
                            <!-- Foto -->
                            <div class="w-full md:w-1/3">
                                <img src="/nicolas.png" alt="Mi foto" class="rounded-lg shadow-lg w-full h-auto object-cover">
                            </div>
                            
                            <!-- Text -->
                            <div class="w-full md:w-2/3 text-left">
                                <h3 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">¡Hola! Soy Nicolas Garcia Ramirez</h3>
                                <p class="text-gray-600 dark:text-white/70 mb-4">
                                    Soy un desarrollador web full-stack apasionado por crear soluciones digitales innovadoras. Tengo experiencia desarrollando aplicaciones web utilizando tecnologías modernas como Laravel, Vue.js y React.
                                </p>
                                <p class="text-gray-600 dark:text-white/70 mb-4">
                                    Me especializo en desarrollar aplicaciones web robustas y escalables, con un fuerte enfoque en la experiencia del usuario y las mejores prácticas de desarrollo.
                                </p>
                                <p class="text-gray-600 dark:text-white/70">
                                    Cuando no estoy programando, disfruto cantar, bailar y salir a disfrutar de un buen café. Siempre estoy buscando nuevos desafíos y oportunidades para aprender y crecer profesionalmente.
                                </p>
                            </div>
                        </div>
                    </section>

                <!-- Skills Section -->
                <section id="skills" class="mb-16">
                    <h2 class="text-4xl font-bold mb-8 text-[#6EB5FF] dark:text-white text-center">Skills</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <!-- Frontend Skills -->
                        <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md transition duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 452 520"><path fill="#e34f26" d="M41 460L0 0h451l-41 460-185 52"/><path fill="#ef652a" d="M226 472l149-41 35-394H226"/><path fill="#ecedee" d="M226 208h-75l-5-58h80V94H84l15 171h127zm0 147l-64-17-4-45h-56l7 89 117 32z"/><path fill="#fff" d="M226 265h69l-7 73-62 17v59l115-32 16-174H226zm0-171v56h136l5-56z"/></svg>
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white">HTML5/CSS3</h3>
                            </div>
                            <p class="text-gray-600 dark:text-white/70">Maquetación semántica y responsive design</p>
                        </div>

                        <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md transition duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#F7DF1E" d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873c-.736-.345-1.554-.585-1.797-1.14c-.091-.33-.105-.51-.046-.705c.15-.646.915-.84 1.515-.66c.39.12.75.42.976.9c1.034-.676 1.034-.676 1.755-1.125c-.27-.42-.404-.601-.586-.78c-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005c-1.14 1.291-.811 3.541.569 4.471c1.365 1.02 3.361 1.244 3.616 2.205c.24 1.17-.87 1.545-1.966 1.41c-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109c1.74 1.756 6.09 1.666 6.871-1.004c.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805c0 1.232.063 2.363-.138 2.711c-.33.689-1.18.601-1.566.48c-.396-.196-.597-.466-.83-.855c-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517c.855.51 2.004.675 3.207.405c.783-.226 1.458-.691 1.811-1.411c.51-.93.402-2.07.397-3.346c.012-2.054 0-4.109 0-6.179l.004-.056z"/></svg>
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white">JavaScript</h3>
                            </div>
                            <p class="text-gray-600 dark:text-white/70">ES6+, DOM manipulation, AJAX</p>
                        </div>

                        <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md transition duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#41B883" d="M24 1.61h-9.94L12 5.16L9.94 1.61H0l12 20.78ZM12 14.08L5.16 2.23h4.43L12 6.41l2.41-4.18h4.43Z"/></svg>
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white">Vue.js</h3>
                            </div>
                            <p class="text-gray-600 dark:text-white/70">Composition API, Vuex, Vue Router</p>
                        </div>

                        <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md transition duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#61DAFB" d="M12 10.11c1.03 0 1.87.84 1.87 1.89c0 1-.84 1.85-1.87 1.85c-1.03 0-1.87-.85-1.87-1.85c0-1.05.84-1.89 1.87-1.89M7.37 20c.63.38 2.01-.2 3.6-1.7c-.52-.59-1.03-1.23-1.51-1.9a22.7 22.7 0 0 1-2.4-.36c-.51 2.14-.32 3.61.31 3.96m.71-5.74l-.29-.51c-.11.29-.22.58-.29.86c.27.06.57.11.88.16l-.3-.51m6.54-.76l.81-1.5l-.81-1.5c-.3-.53-.62-1-.91-1.47C13.17 9 12.6 9 12 9c-.6 0-1.17 0-1.71.03c-.29.47-.61.94-.91 1.47L8.57 12l.81 1.5c.3.53.62 1 .91 1.47c.54.03 1.11.03 1.71.03c.6 0 1.17 0 1.71-.03c.29-.47.61-.94.91-1.47M12 6.78c-.19.22-.39.45-.59.72h1.18c-.2-.27-.4-.5-.59-.72m0 10.44c.19-.22.39-.45.59-.72h-1.18c.2.27.4.5.59.72M16.62 4c-.62-.38-2 .2-3.59 1.7c.52.59 1.03 1.23 1.51 1.9c.82.08 1.63.2 2.4.36c.51-2.14.32-3.61-.32-3.96m-.7 5.74l.29.51c.11-.29.22-.58.29-.86c-.27-.06-.57-.11-.88-.16l.3.51m1.45-7.05c1.47.84 1.63 3.05 1.01 5.63c2.54.75 4.37 1.99 4.37 3.68c0 1.69-1.83 2.93-4.37 3.68c.62 2.58.46 4.79-1.01 5.63c-1.46.84-3.45-.12-5.37-1.95c-1.92 1.83-3.91 2.79-5.38 1.95c-1.46-.84-1.62-3.05-1-5.63c-2.54-.75-4.37-1.99-4.37-3.68c0-1.69 1.83-2.93 4.37-3.68c-.62-2.58-.46-4.79 1-5.63c1.47-.84 3.46.12 5.38 1.95c1.92-1.83 3.91-2.79 5.37-1.95M17.08 12c.34.75.64 1.5.89 2.26c2.1-.63 3.28-1.53 3.28-2.26c0-.73-1.18-1.63-3.28-2.26c-.25.76-.55 1.51-.89 2.26M6.92 12c-.34-.75-.64-1.5-.89-2.26c-2.1.63-3.28 1.53-3.28 2.26c0 .73 1.18 1.63 3.28 2.26c.25-.76.55-1.51.89-2.26m9 2.26l-.3.51c.31-.05.61-.1.88-.16c-.07-.28-.18-.57-.29-.86l-.29.51m-2.89 4.04c1.59 1.5 2.97 2.08 3.59 1.7c.64-.35.83-1.82.32-3.96c-.77.16-1.58.28-2.4.36c-.48.67-.99 1.31-1.51 1.9M8.08 9.74l.3-.51c-.31.05-.61.1-.88.16c.07.28.18.57.29.86l.29-.51m2.89-4.04C9.38 4.2 8 3.62 7.37 4c-.63.35-.82 1.82-.31 3.96a22.7 22.7 0 0 1 2.4-.36c.48-.67.99-1.31 1.51-1.9Z"/></svg>
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white">React</h3>
                            </div>
                            <p class="text-gray-600 dark:text-white/70">Hooks, Redux, React Router</p>
                        </div>

                        <!-- Backend Skills -->
                        <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md transition duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#777BB4" d="M12 5.5C5.271 5.5 0 7.119 0 9.104v1.791c0 1.985 5.271 3.604 12 3.604s12-1.619 12-3.604V9.104c0-1.985-5.271-3.604-12-3.604m0 2c6.169 0 10 1.436 10 1.604c0 .168-3.831 1.604-10 1.604S2 9.272 2 9.104c0-.168 3.831-1.604 10-1.604m0 7c-4.891 0-9.067-.905-10-2.167v2.167c0 1.985 5.271 3.604 12 3.604s12-1.619 12-3.604V12.333c-.933 1.262-5.109 2.167-10 2.167m0 4c-4.891 0-9.067-.905-10-2.167v2.167c0 1.985 5.271 3.604 12 3.604s12-1.619 12-3.604V16.333c-.933 1.262-5.109 2.167-10 2.167Z"/></svg>
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white">PHP</h3>
                            </div>
                            <p class="text-gray-600 dark:text-white/70">POO, MVC, APIs RESTful</p>
                        </div>

                        <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md transition duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FF2D20" d="M23.642 14.907c-1.427-.596-2.962-.596-4.389 0l-3.39 1.195c-1.427.596-2.962.596-4.389 0l-3.389-1.195c-1.427-.596-2.962-.596-4.389 0L.358 16.103v2.516l3.338-1.196c1.428-.596 2.963-.596 4.39 0l3.39 1.196c1.427.596 2.962.596 4.389 0l3.39-1.196c1.427-.596 2.962-.596 4.389 0l.358.128v-2.516l-.358-.128z"/></svg>
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white">Laravel</h3>
                            </div>
                            <p class="text-gray-600 dark:text-white/70">Eloquent ORM, Blade, Artisan</p>
                        </div>

                        <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md transition duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#4479A1" d="M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273c.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333c-.04-.047-.046-.094-.08-.14c-.04-.067-.126-.1-.18-.153zM5.77 18.695h-.927a50.854 50.854 0 0 0-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 0 0-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008l1.347-4.064h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46c-.482.716-1.01 1.073-1.583 1.073c-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026c.268 0 .483-.075.647-.222c.197-.18.295-.382.295-.605c0-.155-.077-.47-.23-.944L6.23 14.615h.91l.727 2.36c.164.536.233.91.205 1.123c.4-1.064.678-2.227.835-3.483zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25c.433-.506.648-1.258.648-2.253c0-1.83-.718-2.746-2.155-2.746c-.704 0-1.254.232-1.65.697c-.43.508-.646 1.256-.646 2.245c0 .972.19 1.686.574 2.14c.35.41.877.615 1.583.615c.264 0 .506-.033.725-.098l1.325.772l.36-.622zM15.5 17.588c-.225.36-.57.54-1.033.54c-.608 0-.913-.37-.913-1.108c0-.728.303-1.092.91-1.092c.217 0 .425.052.625.156c.2.104.35.25.45.44c.098.18.147.41.147.69c0 .126-.015.27-.044.43zm4.014-3.467c-.46-.09-.87-.135-1.224-.135c-.77 0-1.356.15-1.76.45c-.403.3-.605.74-.605 1.32c0 .42.147.762.44 1.023c.293.262.682.393 1.17.393c.558 0 1.004-.164 1.34-.492l.013.562h.854v-2.842c0-.947-.328-1.432-.987-1.432c-.312 0-.654.096-1.025.29l-.193-.583c.438-.205.9-.308 1.384-.308c.848 0 1.264.434 1.264 1.304v2.71h.394l-.013-.562c-.335.328-.78.492-1.34.492c-.487 0-.876-.13-1.17-.393c-.293-.26-.44-.602-.44-1.023c0-.58.202-1.02.605-1.32c.404-.3.99-.45 1.76-.45c.354 0 .763.045 1.224.135v.681z"/></svg>
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white">MySQL</h3>
                            </div>
                            <p class="text-gray-600 dark:text-white/70">Diseño de BD, Optimización</p>
                        </div>

                        <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md transition duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#F05032" d="M2.6 10.59L8.38 4.8l1.69 1.7c-.24.85.15 1.78.93 2.23v5.54c-.6.34-1 .99-1 1.73a2 2 0 0 0 2 2a2 2 0 0 0 2-2c0-.74-.4-1.39-1-1.73V9.41l2.07 2.09c-.07.15-.07.32-.07.5a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2c-.18 0-.35 0-.5.07L13.93 7.5a1.98 1.98 0 0 0-1.15-2.34c-.43-.16-.88-.2-1.28-.09L9.8 3.38l.79-.78c.78-.79 2.04-.79 2.82 0l7.99 7.99c.79.78.79 2.04 0 2.82l-7.99 7.99c-.78.79-2.04.79-2.82 0L2.6 13.41c-.79-.78-.79-2.04 0-2.82Z"/></svg>
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white">Git</h3>
                            </div>
                            <p class="text-gray-600 dark:text-white/70">Control de versiones, GitHub</p>
                        </div>

                        <!-- New Skills -->
                        <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md transition duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#FF9900" d="M6.763 10.036c0 .296.032.535.088.71c.064.176.144.368.256.576c.04.063.056.127.056.183c0 .08-.048.16-.152.24l-.503.335a.383.383 0 0 1-.208.072c-.08 0-.16-.04-.239-.112a2.47 2.47 0 0 1-.287-.375a6.18 6.18 0 0 1-.248-.471c-.622.734-1.405 1.101-2.347 1.101c-.67 0-1.205-.191-1.596-.574c-.391-.384-.59-.894-.59-1.533c0-.678.239-1.23.726-1.644c.487-.415 1.133-.623 1.955-.623c.272 0 .551.024.846.064c.296.04.6.104.918.176v-.583c0-.607-.127-1.03-.375-1.277c-.255-.248-.686-.367-1.3-.367c-.279 0-.568.031-.863.103c-.295.072-.583.16-.862.272a2.287 2.287 0 0 1-.28.104a.488.488 0 0 1-.127.023c-.112 0-.168-.08-.168-.247v-.391c0-.128.016-.224.056-.28a.597.597 0 0 1 .224-.167c.279-.144.614-.264 1.005-.36a4.84 4.84 0 0 1 1.246-.151c.95 0 1.644.216 2.091.647c.439.43.662 1.085.662 1.963v2.586zm-3.24 1.214c.263 0 .534-.048.822-.144c.287-.096.543-.271.758-.51c.128-.152.224-.32.272-.512c.047-.191.08-.423.08-.694v-.335a6.66 6.66 0 0 0-.735-.136a6.02 6.02 0 0 0-.75-.048c-.535 0-.926.104-1.19.32c-.263.215-.39.518-.39.917c0 .375.095.655.295.846c.191.2.47.296.838.296zm6.41.862c-.144 0-.24-.024-.304-.08c-.064-.048-.12-.16-.168-.311L7.586 5.55a1.398 1.398 0 0 1-.072-.32c0-.128.064-.2.191-.2h.783c.151 0 .255.025.31.08c.065.048.113.16.16.312l1.342 5.284l1.245-5.284c.04-.16.088-.264.151-.312a.549.549 0 0 1 .32-.08h.638c.152 0 .256.025.32.08c.063.048.12.16.151.312l1.261 5.348l1.381-5.348c.048-.16.104-.264.16-.312a.52.52 0 0 1 .311-.08h.743c.127 0 .2.065.2.2c0 .04-.009.08-.017.128a1.137 1.137 0 0 1-.056.2l-1.923 6.17c-.048.16-.104.263-.168.311a.51.51 0 0 1-.303.08h-.687c-.151 0-.255-.024-.32-.08c-.063-.056-.119-.16-.15-.32l-1.238-5.148l-1.23 5.14c-.04.16-.087.264-.15.32c-.065.056-.177.08-.32.08zm10.256.215c-.415 0-.83-.048-1.229-.143c-.399-.096-.71-.2-.918-.32c-.128-.071-.215-.151-.247-.223a.563.563 0 0 1-.048-.224v-.407c0-.167.064-.247.183-.247c.048 0 .096.008.144.024c.048.016.12.048.2.08c.271.12.566.215.878.279c.319.064.63.096.95.096c.502 0 .894-.088 1.165-.264a.86.86 0 0 0 .415-.758a.777.777 0 0 0-.215-.559c-.144-.151-.416-.287-.807-.415l-1.157-.36c-.583-.183-1.014-.454-1.277-.813a1.902 1.902 0 0 1-.4-1.158c0-.335.073-.63.216-.886c.144-.255.335-.479.575-.654c.24-.184.51-.32.83-.415c.32-.096.655-.136 1.006-.136c.175 0 .359.008.535.032c.183.024.35.056.518.088c.16.04.312.08.455.127c.144.048.256.096.336.144a.69.69 0 0 1 .24.2c.048.054.08.152.08.288v.375c0 .167-.064.256-.184.256a.83.83 0 0 1-.303-.096a3.652 3.652 0 0 0-1.532-.311c-.455 0-.815.071-1.062.223c-.248.152-.375.383-.375.71c0 .224.08.416.24.567c.159.152.454.304.877.44l1.134.358c.574.184.99.44 1.237.767c.248.327.383.702.383 1.117c0 .343-.072.655-.207.926c-.144.272-.335.511-.575.703c-.24.2-.543.343-.894.447c-.36.111-.734.167-1.142.167zM21.698 16.207c-2.626 1.94-6.442 2.969-9.722 2.969c-4.598 0-8.74-1.7-11.87-4.526c-.247-.223-.024-.527.272-.351c3.384 1.963 7.559 3.153 11.877 3.153c2.914 0 6.114-.607 9.06-1.852c.439-.2.814.287.383.607zM22.792 14.961c-.336-.43-2.22-.207-3.074-.103c-.255.032-.295-.192-.063-.36c1.5-1.053 3.967-.75 4.254-.399c.287.36-.08 2.826-1.485 4.007c-.215.184-.423.088-.327-.151c.32-.79 1.03-2.57.695-2.994z"/></svg>
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white">AWS</h3>
                            </div>
                            <p class="text-gray-600 dark:text-white/70">EC2, S3, Lambda, RDS</p>
                        </div>

                        <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md transition duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#2496ED" d="M13.983 11.078h2.119a.186.186 0 0 0 .186-.185V9.006a.186.186 0 0 0-.186-.186h-2.119a.185.185 0 0 0-.185.185v1.888c0 .102.083.185.185.185m-2.954-5.43h2.118a.186.186 0 0 0 .186-.186V3.574a.186.186 0 0 0-.186-.185h-2.118a.185.185 0 0 0-.185.185v1.888c0 .102.082.185.185.185m0 2.716h2.118a.187.187 0 0 0 .186-.186V6.29a.186.186 0 0 0-.186-.185h-2.118a.185.185 0 0 0-.185.185v1.887c0 .102.082.185.185.186m-2.93 0h2.12a.186.186 0 0 0 .184-.186V6.29a.185.185 0 0 0-.185-.185H8.1a.185.185 0 0 0-.185.185v1.887c0 .102.083.185.185.186m-2.964 0h2.119a.186.186 0 0 0 .185-.186V6.29a.185.185 0 0 0-.185-.185H5.136a.186.186 0 0 0-.186.185v1.887c0 .102.084.185.186.186m5.893 2.715h2.118a.186.186 0 0 0 .186-.185V9.006a.186.186 0 0 0-.186-.186h-2.118a.185.185 0 0 0-.185.185v1.888c0 .102.082.185.185.185m-2.93 0h2.12a.185.185 0 0 0 .184-.185V9.006a.185.185 0 0 0-.184-.186h-2.12a.185.185 0 0 0-.184.185v1.888c0 .102.083.185.185.185m-2.964 0h2.119a.185.185 0 0 0 .185-.185V9.006a.185.185 0 0 0-.184-.186h-2.12a.186.186 0 0 0-.186.185v1.888c0 .102.084.185.186.185m-2.92 0h2.12a.185.185 0 0 0 .184-.185V9.006a.185.185 0 0 0-.184-.186h-2.12a.185.185 0 0 0-.184.185v1.888c0 .102.082.185.185.185M23.763 9.89c-.065-.051-.672-.51-1.954-.51c-.338.001-.676.03-1.01.087c-.248-1.7-1.653-2.53-1.716-2.566l-.344-.199l-.226.327c-.284.438-.49.922-.612 1.43c-.23.97-.09 1.882.403 2.661c-.595.332-1.55.413-1.744.42H.751a.751.751 0 0 0-.75.748c-.036 1.457.069 2.908.315 4.337c.407 2.245 1.507 3.578 3.063 4.009c1.86.51 3.78.497 5.638.046c1.298-.31 2.492-.94 3.463-1.838c.833-.769 1.563-1.648 2.173-2.615h.19c1.188 0 2.373-.136 3.543-.403c.771-.175 1.488-.532 2.108-1.039c.185-.15.37-.3.547-.459l.148-.15l-.074-.136c-.34-.63-.417-1.344-.267-2.021l.038-.231zm-20.198 6.205c-.415 0-.75-.336-.75-.75c0-.414.335-.75.75-.75s.75.336.75.75c0 .414-.335.75-.75.75m1.847-6.716c.3-.006.59.026.875.096c.042.012.083.028.125.04c.127.044.25.102.369.17c.11.062.216.131.315.21c.076.06.137.13.194.197c.028.032.054.064.08.097l.021.028c.035.048.066.097.095.147c.022.037.042.075.061.113c.019.038.037.077.052.117c.033.087.056.175.076.264c.01.043.017.086.023.129c.015.108.02.216.014.324c0 .025-.005.05-.007.074c-.006.055-.015.108-.027.161c-.004.019-.006.038-.011.057l-.001.003c-.04.159-.105.312-.193.453c-.069.109-.157.207-.254.295c-.087.078-.183.145-.286.199c-.08.042-.163.077-.248.105c-.032.011-.064.022-.097.031c-.052.015-.106.025-.16.034c-.111.019-.224.023-.337.013c-.016-.002-.031-.005-.047-.007c-.063-.01-.126-.024-.188-.042c-.019-.006-.038-.011-.057-.018c-.051-.017-.1-.038-.149-.06c-.074-.034-.145-.073-.214-.117c-.049-.03-.097-.064-.143-.1c-.042-.032-.082-.066-.121-.102c-.036-.034-.07-.07-.103-.107c-.03-.035-.059-.072-.086-.109c-.029-.04-.056-.082-.081-.124c-.02-.033-.038-.066-.055-.1c-.019-.037-.035-.075-.05-.113c-.02-.047-.037-.094-.052-.143c-.01-.033-.019-.065-.027-.099c-.012-.046-.021-.092-.028-.139c-.008-.051-.013-.103-.015-.155c-.001-.026-.002-.052-.001-.078c0-.107.014-.214.04-.318c.005-.019.011-.037.016-.056c.02-.062.044-.122.073-.18c.031-.062.067-.122.107-.178c.034-.047.071-.093.112-.135c.047-.049.098-.094.152-.135c.031-.023.064-.044.097-.065c.033-.021.066-.04.101-.058c.039-.021.079-.04.12-.057c.037-.015.074-.029.112-.042c.08-.027.163-.047.247-.061c.028-.005.056-.008.085-.011c.088-.01.177-.013.265-.008z"/></svg>
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white">Docker</h3>
                            </div>
                            <p class="text-gray-600 dark:text-white/70">Contenedores, Docker Compose</p>
                        </div>

                        <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md transition duration-300 hover:scale-105 hover:shadow-xl">
                            <div class="flex items-center gap-3 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#61DAFB" d="M12 18.178c-3.247 0-5.888-2.64-5.888-5.888c0-3.247 2.64-5.888 5.888-5.888c3.247 0 5.888 2.64 5.888 5.888c0 3.247-2.64 5.888-5.888 5.888M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2m0 4.333a5.67 5.67 0 0 0-5.667 5.667A5.67 5.67 0 0 0 12 17.667a5.67 5.67 0 0 0 5.667-5.667A5.67 5.67 0 0 0 12 6.333"/></svg>
                                <h3 class="text-xl font-bold text-gray-800 dark:text-white">React Native</h3>
                            </div>
                            <p class="text-gray-600 dark:text-white/70">iOS, Android, Expo</p>
                        </div>
                    </div>
                </section>

                <!-- Portfolio Section -->
                <section id="portfolio" class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-zinc-800">
                    <div class="container mx-auto px-6">
                        <h2 class="text-4xl font-bold text-center mb-8 text-[#6EB5FF] dark:text-white">Works</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <!-- NoiseSharkls Project -->
                            <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-2xl">
                                <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d" alt="NoiseSharkls" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">NoiseSharkls</h3>
                                    <p class="text-gray-600 dark:text-white/70 mb-4">
                                        Red social con enfoque musical que permite compartir contenido multimedia. Incluye sistema de perfiles personalizables, feed interactivo y visualización de audio con waveform.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Laravel</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Vue.js</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Wavesurfer.js</span>
                                    </div>
                                </div>
                            </div>

                            <!-- KlipClub Project -->
                            <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-2xl">
                                <img src="https://images.unsplash.com/photo-1516280440614-37939bbacd81" alt="KlipClub" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">KlipClub</h3>
                                    <p class="text-gray-600 dark:text-white/70 mb-4">
                                        Plataforma de streaming para eventos en vivo con sistema de pagos integrado (PayPal, EfiPay, Mercado Pago). Permite la transmisión y monetización de eventos en tiempo real.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Laravel</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">WebRTC</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Payment APIs</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Elite Rents Project -->
                            <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-2xl">
                                <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8" alt="Elite Rents" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Elite Rents</h3>
                                    <p class="text-gray-600 dark:text-white/70 mb-4">
                                        Landing page con panel administrativo para gestión de servicios turísticos, incluyendo planes, tours y renting de vehículos. Sistema completo de administración de contenidos.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Laravel</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Tailwind CSS</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Alpine.js</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Portfolio Project -->
                            <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-2xl">
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f" alt="Portfolio" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Portfolio Personal</h3>
                                    <p class="text-gray-600 dark:text-white/70 mb-4">
                                        Portfolio profesional desarrollado con Laravel y Filament, implementando un diseño moderno y responsivo con Tailwind CSS. Incluye panel administrativo para gestión de contenido.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Laravel</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Filament</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Tailwind CSS</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Task Manager Project -->
                            <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-2xl">
                                <img src="https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b" alt="Task Manager" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Task Manager</h3>
                                    <p class="text-gray-600 dark:text-white/70 mb-4">
                                        Aplicación de gestión de tareas con autenticación de usuarios, categorización de tareas, fechas límite y estados. Desarrollada como proyecto de aprendizaje con Laravel.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Laravel</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">MySQL</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Bootstrap</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Weather App Project -->
                            <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-2xl">
                                <img src="https://images.unsplash.com/photo-1504608524841-42fe6f032b4b" alt="Weather App" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Weather App</h3>
                                    <p class="text-gray-600 dark:text-white/70 mb-4">
                                        Aplicación del clima que consume la API de OpenWeatherMap para mostrar información meteorológica en tiempo real. Incluye búsqueda por ciudad y pronóstico de 5 días.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Vue.js</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">API REST</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Tailwind CSS</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Prometeo Project -->
                            <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-2xl">
                                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" alt="Prometeo" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Prometeo</h3>
                                    <p class="text-gray-600 dark:text-white/70 mb-4">
                                        Plataforma colaborativa para la generación y evaluación de ideas. Permite a los usuarios proponer ideas que son evaluadas a través de diferentes procesos guiados por distintos evaluadores, facilitando la toma de decisiones y el desarrollo de proyectos.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Laravel</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">MySQL</span>
                                        <span class="px-3 py-1 bg-gray-100 dark:bg-zinc-800 rounded-full text-sm text-gray-600 dark:text-white/70">Tailwind CSS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Sección de Contacto -->
                <section id="contacto" class="py-16 bg-gray-50 dark:bg-zinc-950">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center">
                            <h2 class="text-3xl font-extrabold text-[#6EB5FF] dark:text-white sm:text-4xl">
                                Contacto
                            </h2>
                            <p class="mt-4 text-lg text-gray-600 dark:text-white/70">
                                ¿Interesado en trabajar juntos? ¡Contáctame!
                            </p>
                        </div>
                        
                        <div class="mt-12 max-w-lg mx-auto">
                            <div class="space-y-8">
                                <div class="flex items-center space-x-4">
                                    <svg class="h-6 w-6 text-gray-600 dark:text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span class="text-gray-600 dark:text-white/70">Nicolás García Ramírez</span>
                                </div>
                                
                                <div class="flex items-center space-x-4">
                                    <svg class="h-6 w-6 text-gray-600 dark:text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <a href="mailto:nicolasgarciaramirez66@gmail.com" class="text-gray-600 dark:text-white/70 hover:text-indigo-500 dark:hover:text-indigo-400">
                                        nicolasgarciaramirez66@gmail.com
                                    </a>
                                </div>
                                
                                <div class="flex items-center space-x-4">
                                    <svg class="h-6 w-6 text-gray-600 dark:text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <a href="tel:+573205286143" class="text-gray-600 dark:text-white/70 hover:text-indigo-500 dark:hover:text-indigo-400">
                                        +57 320 528 6143
                                    </a>
                                </div>

                                <div class="flex items-center space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                                    <a href="www.linkedin.com/in/nicolas-garcia-ramirez-6029601b9" class="text-gray-600 dark:text-white/70 hover:text-indigo-500 dark:hover:text-indigo-400">
                                        nicolas-garcia-ramirez-6029601b9
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @include("modal")
            </div>
        </div>
    </body>
</html>
