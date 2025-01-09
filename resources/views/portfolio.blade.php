<body class="antialiased">
        <!-- Navigation -->
        <nav class="fixed top-0 w-full bg-white/80 backdrop-blur-sm z-50 shadow-sm dark:bg-zinc-900/80 transition-all duration-300" id="topNav">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-center">
                    <div class="flex space-x-8">
                        <a href="#about" class="text-gray-700 hover:text-[#FF2D20] dark:text-white/70 dark:hover:text-white transition duration-300">About</a>
                        <a href="#skills" class="text-gray-700 hover:text-[#FF2D20] dark:text-white/70 dark:hover:text-white transition duration-300">Skills</a>
                        <a href="#experience" class="text-gray-700 hover:text-[#FF2D20] dark:text-white/70 dark:hover:text-white transition duration-300">Experience</a>
                        <a href="#works" class="text-gray-700 hover:text-[#FF2D20] dark:text-white/70 dark:hover:text-white transition duration-300">Works</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Side Navigation -->
        <nav class="fixed left-0 top-1/2 transform -translate-y-1/2 z-50 hidden opacity-0 transition-all duration-500" id="sideNav">
            <div class="bg-white/80 dark:bg-zinc-900/80 backdrop-blur-sm p-4 rounded-r-lg shadow-lg">
                <div class="flex flex-col space-y-6">
                    <a href="#about" class="text-gray-700 hover:text-[#FF2D20] dark:text-white/70 dark:hover:text-white transition duration-300 flex items-center">
                        <span class="w-2 h-2 bg-[#FF2D20] rounded-full mr-3"></span>
                        <span class="transform hover:translate-x-2 transition-transform duration-300">About</span>
                    </a>
                    <a href="#skills" class="text-gray-700 hover:text-[#FF2D20] dark:text-white/70 dark:hover:text-white transition duration-300 flex items-center">
                        <span class="w-2 h-2 bg-[#FF2D20] rounded-full mr-3"></span>
                        <span class="transform hover:translate-x-2 transition-transform duration-300">Skills</span>
                    </a>
                    <a href="#experience" class="text-gray-700 hover:text-[#FF2D20] dark:text-white/70 dark:hover:text-white transition duration-300 flex items-center">
                        <span class="w-2 h-2 bg-[#FF2D20] rounded-full mr-3"></span>
                        <span class="transform hover:translate-x-2 transition-transform duration-300">Experience</span>
                    </a>
                    <a href="#works" class="text-gray-700 hover:text-[#FF2D20] dark:text-white/70 dark:hover:text-white transition duration-300 flex items-center">
                        <span class="w-2 h-2 bg-[#FF2D20] rounded-full mr-3"></span>
                        <span class="transform hover:translate-x-2 transition-transform duration-300">Works</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- About Section -->
        <section id="about" class="min-h-screen flex items-center justify-center pt-20">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center mb-8 text-[#FF2D20] dark:text-white">About Me</h2>
                <div class="max-w-3xl mx-auto text-center">
                    <p class="text-gray-600 dark:text-white/70">Your about content here</p>
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Foto -->
                    <div class="w-full md:w-1/3">
                        <img src="https://via.placeholder.com/400" alt="Mi foto" class="rounded-lg shadow-lg w-full h-auto object-cover">
                    </div>
                    
                    <!-- Text -->
                    <div class="w-full md:w-2/3 text-left">
                        <h3 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">¡Hola! Soy Nicolás García Ramírez</h3>
                        <p class="text-gray-600 dark:text-white/70 mb-4">
                            Soy un desarrollador web full-stack apasionado por crear soluciones digitales innovadoras. Tengo experiencia desarrollando aplicaciones web utilizando tecnologías modernas como Laravel, Vue.js y React.
                        </p>
                        <p class="text-gray-600 dark:text-white/70 mb-4">
                            Me especializo en desarrollar aplicaciones web robustas y escalables, con un fuerte enfoque en la experiencia del usuario y las mejores prácticas de desarrollo.
                        </p>
                        <p class="text-gray-600 dark:text-white/70">
                            Cuando no estoy programando, disfruto [tus hobbies o intereses]. Siempre estoy buscando nuevos desafíos y oportunidades para aprender y crecer profesionalmente.
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-zinc-800">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center mb-8 text-[#FF2D20] dark:text-white">Skills</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Frontend Skills -->
                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">HTML5/CSS3</h3>
                        <p class="text-gray-600 dark:text-white/70">Maquetación semántica y responsive design</p>
                    </div>

                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">JavaScript</h3>
                        <p class="text-gray-600 dark:text-white/70">ES6+, DOM manipulation, AJAX</p>
                    </div>

                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Vue.js</h3>
                        <p class="text-gray-600 dark:text-white/70">Composition API, Vuex, Vue Router</p>
                    </div>

                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">React</h3>
                        <p class="text-gray-600 dark:text-white/70">Hooks, Redux, React Router</p>
                    </div>

                    <!-- Backend Skills -->
                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">PHP</h3>
                        <p class="text-gray-600 dark:text-white/70">POO, MVC, APIs RESTful</p>
                    </div>

                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Laravel</h3>
                        <p class="text-gray-600 dark:text-white/70">Eloquent ORM, Blade, Artisan</p>
                    </div>

                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">MySQL</h3>
                        <p class="text-gray-600 dark:text-white/70">Diseño de BD, Optimización</p>
                    </div>

                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Git</h3>
                        <p class="text-gray-600 dark:text-white/70">Control de versiones, GitHub</p>
                    </div>

                    <!-- DevOps Skills -->
                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Docker</h3>
                        <p class="text-gray-600 dark:text-white/70">Contenedores, Docker Compose</p>
                    </div>

                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Linux</h3>
                        <p class="text-gray-600 dark:text-white/70">Comandos básicos, SSH</p>
                    </div>

                    <!-- Tools -->
                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Testing</h3>
                        <p class="text-gray-600 dark:text-white/70">PHPUnit, Jest</p>
                    </div>

                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Herramientas</h3>
                        <p class="text-gray-600 dark:text-white/70">NPM, Composer, Webpack</p>
                    </div>
                    <!-- Agile Skills -->
                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Scrum</h3>
                        <p class="text-gray-600 dark:text-white/70">Sprints, Daily Meetings, Backlog</p>
                    </div>

                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Kanban</h3>
                        <p class="text-gray-600 dark:text-white/70">Flujo de trabajo, WIP limits</p>
                    </div>

                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">XP</h3>
                        <p class="text-gray-600 dark:text-white/70">Pair Programming, TDD</p>
                    </div>

                    <div class="p-6 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Herramientas Ágiles</h3>
                        <p class="text-gray-600 dark:text-white/70">Jira, Trello, Azure DevOps</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="min-h-screen flex items-center justify-center">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center mb-8 text-[#FF2D20] dark:text-white">Experience</h2>
                <div class="max-w-4xl mx-auto">
                    <!-- Timeline container -->
                    <div class="relative">
                        <!-- Timeline line -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-0.5 h-full bg-gray-200 dark:bg-zinc-700"></div>

                        <!-- Experience Item 1 -->
                        <div class="relative mb-12">
                            <div class="flex items-center">
                                <div class="w-1/2 pr-8 text-right">
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">Desarrollador Full Stack</h3>
                                    <p class="text-gray-600 dark:text-white/70">Accedo Technologies</p>
                                    <p class="text-sm text-gray-500 dark:text-white/50">Junio 2020 - Noviembre 2024</p>
                                </div>
                                <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-[#FF2D20] rounded-full"></div>
                                <div class="w-1/2 pl-8">
                                    <div class="p-4 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                                        <p class="text-gray-600 dark:text-white/70">
                                            Desarrollo de aplicaciones web utilizando tecnologías modernas y mejores prácticas de desarrollo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Experience Item 2 -->
                        <div class="relative">
                            <div class="flex items-center">
                                <div class="w-1/2 pr-8 text-right">
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">Técnico en Mantenimiento</h3>
                                    <p class="text-gray-600 dark:text-white/70">Apostar SA</p>
                                    <p class="text-sm text-gray-500 dark:text-white/50">Junio 2017 - Diciembre 2017</p>
                                </div>
                                <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-[#FF2D20] rounded-full"></div>
                                <div class="w-1/2 pl-8">
                                    <div class="p-4 bg-white dark:bg-zinc-900 rounded-lg shadow-md">
                                        <p class="text-gray-600 dark:text-white/70">
                                            Mantenimiento preventivo y correctivo de equipos de cómputo, asegurando su óptimo funcionamiento.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Works Section -->
        <section id="works" class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-zinc-800">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold text-center mb-8 text-[#FF2D20] dark:text-white">Works</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- NoiseSharkls Project -->
                    <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/noisesharkls.jpg') }}" alt="NoiseSharkls" class="w-full h-48 object-cover">
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
                    <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/klipclub.jpg') }}" alt="KlipClub" class="w-full h-48 object-cover">
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
                    <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/eliterents.jpg') }}" alt="Elite Rents" class="w-full h-48 object-cover">
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
                    <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/portfolio.jpg') }}" alt="Portfolio" class="w-full h-48 object-cover">
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
                    <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/taskmanager.jpg') }}" alt="Task Manager" class="w-full h-48 object-cover">
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
                    <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/weatherapp.jpg') }}" alt="Weather App" class="w-full h-48 object-cover">
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
                    <div class="bg-white dark:bg-zinc-900 rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('images/prometeo.jpg') }}" alt="Prometeo" class="w-full h-48 object-cover">
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

        <!-- Smooth Scroll Script -->
        <script>
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        </script>
    </body>