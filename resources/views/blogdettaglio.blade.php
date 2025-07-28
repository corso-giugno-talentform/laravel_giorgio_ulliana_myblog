<!DOCTYPE html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./output.css" rel="stylesheet">
        <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->
        <title>My-BLOG</title>
        <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        /* Stili aggiuntivi per l'immagine di sfondo dell'header */
        .header-bg {
            background-image: url('/images/blog-684748_1280.jpg'); 
            /* Sostituisci con la tua immagine */
            background-size: cover;
            background-position: center;
        }
        /* Stili per l'hamburger menu solo con CSS */
        /* Nasconde il checkbox */
        #menu-toggle {
            display: none;
        }
        /* Nasconde il menu su schermi piccoli per impostazione predefinita */
        .mobile-menu {
            display: none;
        }
        /* Mostra il menu quando il checkbox è selezionato */
        #menu-toggle:checked ~ .mobile-menu {
            display: block;
        }
        /* Mostra l'icona dell'hamburger solo su schermi piccoli */
        .hamburger-icon {
            display: block; /* Default per schermi piccoli */
        }
        /* Nasconde l'hamburger e mostra il menu desktop su schermi medi e grandi */
        @media (min-width: 768px) { /* Corrisponde a Tailwind 'md' */
            .hamburger-icon {
                display: none;
            }
            .mobile-menu {
                display: flex !important; /* Forza la visualizzazione come flex per desktop */
            }
        }
/*             
        input[type="file"]::file-selector-button {
            @apply bg-blue-500 text-white py-2 px-4 rounded-md border-0 cursor-pointer hover:bg-blue-600 transition-colors duration-200 ease-in-out;
            } */
    </style>
</head>

<body class="font-sans antialiased bg-gray-100 opacity-80">

        <nav class="bg-gray-800 p-4">
            <div class="container mx-auto flex justify-between items-center text-white relative">
                <a href="#" class="font-bold text-xl">Il Tuo BLOG</a>
                <input type="checkbox" id="menu-toggle" class="absolute hidden">
                <label for="menu-toggle"
                    class="hamburger-icon cursor-pointer md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"><path
                            stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </label>

                <div
                    class="mobile-menu md:flex md:space-x-4 absolute md:relative top-full right-0 md:top-auto md:right-auto bg-gray-700 md:bg-transparent w-full md:w-auto py-2 md:py-0 rounded-lg shadow-xl md:shadow-none z-20">
                    <a href="#homepage"
                        class="block px-4 py-2 text-sm text-white hover:bg-gray-600 md:hover:bg-transparent">Homepage
                    </a>
                    <a href="#section1"
                        class="block px-4 py-2 text-sm text-white hover:bg-gray-600 md:hover:bg-transparent">Blog
                        Uno</a>
                    <a href="#section2"
                        class="block px-4 py-2 text-sm text-white hover:bg-gray-600 md:hover:bg-transparent">Blog
                        Due</a>
                    <a href="#section3"
                        class="block px-4 py-2 text-sm text-white hover:bg-gray-600 md:hover:bg-transparent">Blog
                        Tre</a>
                   <a href="#section3"
                        class="block px-4 py-2 text-sm text-white hover:bg-gray-600 md:hover:bg-transparent">Contatti</a>                          
                </div>
            </div>
        </nav>

        <header
            class="bg-[url(/images/blog-684748_1280.jpg)] overflow-hidden header-bg relative text-white flex items-center justify-center min-h-[30rem] lg:min-h-[40rem] xl:min-h-[60rem] ">

            <!-- <img src="sfondi-hd-1-1920x1080.jpg" alt="Immagine di esempio"
                class="rounded-lg shadow-md w-full h-auto object-fill absolute "> -->
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="container mx-auto px-8 text-center z-10">
                <h1 class="text-4xl lg:text-6xl font-bold mb-4">Il Tuo Blog</h1>
                <p class="text-xl lg:text-2xl">Un modo semplice e pulito per
                    gestire il Tuo Blog.</p>
            </div>
        </header>


        <main class="container mx-auto px-4 py-12">


<section class="mb-16"> <h2 class="text-3xl font-bold text-center mb-8">Le Nostre Offerte Speciali</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/images/rome-2653939_1280.jpg" alt="Descrizione Immagine 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Blog Tipo 1</h3>
                    <p class="text-gray-700 mb-4">Breve descrizione del contenuto del blog B1. Clicca per maggiori dettagli.</p>
                    <a href="#" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300">Dettagli</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/images/pencils-762555_1280.jpg" alt="Descrizione Immagine 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Blog Tipo 2</h3>
                    <p class="text-gray-700 mb-4">Breve descrizione del contenuto del Blog B2. Clicca per maggiori dettagli.</p>
                    <a href="#" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300">Dettagli</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/images/cake-2610754_1280.jpg" alt="Descrizione Immagine 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Blog Tipo 3</h3>
                    <p class="text-gray-700 mb-4">Breve descrizione del contenuto del Blog B3. Clicca per maggiori dettagli.</p>
                    <a href="#" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300">Dettagli</a>
                </div>
            </div>
        </div>
    </section>

    <hr class="border-t-2 border-gray-200 my-16">

    <section>
        <h2 class="text-3xl font-bold text-center mb-8">Novità e Prodotti Simili</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/images/cake-2610754_1280.jpg" alt="Descrizione Immagine 4" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">BLOG B4</h3>
                    <p class="text-gray-700 mb-4">Breve descrizione del contenuto del BLOG B4. Clicca per maggiori dettagli.</p>
                    <a href="#" class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition duration-300">Vedi Prodotto</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/images/caucasus-5302236_1280.jpg" alt="Descrizione Immagine 5" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">BLOG B5</h3>
                    <p class="text-gray-700 mb-4">Breve descrizione del contenuto del Blog B5. Clicca per maggiori dettagli.</p>
                    <a href="#" class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition duration-300">Vedi Prodotto</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="/images/the-vehicle-8534622_1280.jpg" alt="Descrizione Immagine 6" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">BLOG B6</h3>
                    <p class="text-gray-700 mb-4">Breve descrizione del contenuto del Blog B6. Clicca per maggiori dettagli.</p>
                    <a href="#" class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition duration-300">Vedi Prodotto</a>
                </div>
            </div>
        </div>
    </section>

   <hr class="border-t-2 border-gray-200 my-16">


            <section id="section1"
                class="flex flex-col md:flex-row-reverse items-center bg-white shadow-lg rounded-lg gap-4 p-8 mb-12">
                <div class="md:w-1/2 mb-6 p-5 md:mb-0 ">
                    <img src="/images/germknodel-7487131_1280.jpg" alt="Immagine di esempio"
                        class="rounded-lg shadow-md w-full h-auto object-cover">
                </div>
                <div class="md:w-1/2 px-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Servizio BLOG Uno</h2>
                    <p class="text-gray-700 leading-relaxed mb-4">Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</p>
                    <p class="text-gray-700 leading-relaxed">Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.</p>
                </div>
            </section>

            <section id="section2"
                class="flex  gap-4 flex-col md:flex-row items-center bg-white shadow-lg rounded-lg p-8 mb-12">
                <div class="md:w-1/2 mb-6 md:mb-0 ">
                    <!-- <img src="https://via.placeholder.com/600x400" alt="Immagine di esempio" class="rounded-lg shadow-md w-full h-auto object-cover"> -->
                    <img src="/images/rome-7244828_1280.jpg" alt="Immagine di esempio"
                        class="rounded-lg shadow-md w-full h-auto object-cover">

                </div>
                <div class="md:w-1/2 px-5">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Servizio BLOG Due</h2>
                    <p class="text-gray-700 leading-relaxed mb-4">Consectetur
                        adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.</p>
                    <p class="text-gray-700 leading-relaxed">Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.</p>
                </div>
            </section>

            <section id="section3"
                class="flex flex-col md:flex-row-reverse items-center bg-white shadow-lg rounded-lg gap-4 p-8 mb-12">
                <div class="md:w-1/2 mb-6 p-5 md:mb-0 ">
                    <img src="/images/cooking-2132874_1280.jpg" alt="Immagine di esempio"
                        class="rounded-lg shadow-md w-full h-auto object-cover">
                </div>
                <div class="md:w-1/2 px-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Servizio BLOG Tre</h2>
                    <p class="text-gray-700 leading-relaxed mb-4">Lorem ipsum
                        dolor sit amet, consectetur adipiscing elit. Sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</p>
                    <p class="text-gray-700 leading-relaxed">Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.</p>
                </div>
            </section>


            <section class="flex justify-center">
                <div class=" bg-white rounded-lg shadow-xl p-8 max-w-4xl w-full">
                    <img src="/images/sea-bream-426581_1280.jpg" alt="Immagine di esempio"
                        class="rounded-lg shadow-md w-full h-auto object-cover">                        
                    <h2 class="text-3xl font-bold text-gray-800 my-8 text-center">Registrazione</h2>

                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="full_name"
                                    class="block text-sm font-medium text-gray-700 mb-1">Nome
                                    Completo</label>
                                <input type="text" id="full_name"
                                    name="full_name"
                                    placeholder="Il tuo nome completo"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                            </div>

                            <div>
                                <label for="email"
                                    class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email"
                                    placeholder="La tua email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                            </div>
                            <div>
                                <label for="password"
                                    class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                                <input type="password" id="password"
                                    name="password"
                                    placeholder="Crea una password"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                            </div>

                            <div>
                                <label for="confirm_password"
                                    class="block text-sm font-medium text-gray-700 mb-1">Conferma
                                    Password</label>
                                <input type="password" id="confirm_password"
                                    name="confirm_password"
                                    placeholder="Conferma la password"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                            </div>

                            <div>
                                <label for="phone"
                                    class="block text-sm font-medium text-gray-700 mb-1">Telefono</label>
                                <input type="tel" id="phone" name="phone"
                                    placeholder="Il tuo numero di telefono"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                            </div>

                            <div>
                                <label for="address"
                                    class="block text-sm font-medium text-gray-700 mb-1">Indirizzo</label>
                                <input type="text" id="address" name="address"
                                    placeholder="Il tuo indirizzo"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                            </div>
                        </div>

                        <div class="mb-6">
                            <span
                                class="block text-sm font-medium text-gray-700 mb-2">Genere</span>
                            <div class="flex flex-wrap gap-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender"
                                        value="male"
                                        class="form-radio h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <span
                                        class="ml-2 text-gray-700">Maschio</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender"
                                        value="female"
                                        class="form-radio h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <span
                                        class="ml-2 text-gray-700">Femmina</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender"
                                        value="other"
                                        class="form-radio h-4 w-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <span
                                        class="ml-2 text-gray-700">Altro</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-6">
                            <span
                                class="block text-sm font-medium text-gray-700 mb-2">Interessi</span>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="interests"
                                        value="sports"
                                        class="form-checkbox h-4 w-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                                    <span
                                        class="ml-2 text-gray-700">Sport</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="interests"
                                        value="music"
                                        class="form-checkbox h-4 w-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                                    <span
                                        class="ml-2 text-gray-700">Musica</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="interests"
                                        value="reading"
                                        class="form-checkbox h-4 w-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                                    <span
                                        class="ml-2 text-gray-700">Lettura</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="interests"
                                        value="travel"
                                        class="form-checkbox h-4 w-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                                    <span
                                        class="ml-2 text-gray-700">Viaggi</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="interests"
                                        value="coding"
                                        class="form-checkbox h-4 w-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                                    <span
                                        class="ml-2 text-gray-700">Programmazione</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="file_upload"
                                class="block text-sm font-medium text-gray-700 mb-1">Carica
                                CV / Foto / Documenti</label>
                            <input type="file" id="file_upload"
                                name="file_upload"
                                class="w-full text-gray-700 text-sm bg-gray-50 rounded-md border border-gray-300 cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 transition duration-200">
                        </div>

                        <div class="mb-8">
                            <label for="message"
                                class="block text-sm font-medium text-gray-700 mb-1">Messaggio
                                (Opzionale)</label>
                            <textarea id="message" name="message" rows="4"
                                placeholder="Scrivi il tuo messaggio qui..."
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 resize-y"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                class="w-full sm:w-auto px-8 py-3 bg-blue-600 text-white font-semibold rounded-md shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 transition duration-300 ease-in-out">
                                Registrati
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <footer class="bg-gray-800 text-white p-6 text-center">
            <div class="container mx-auto">
                <p>&copy; 2025 Il Tuo Marchio. My-BLOG. Tutti i diritti riservati.</p>
            </div>
        </footer>

    </body>

</html>