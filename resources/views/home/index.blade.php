<x-layout title="Cargatel | Fletes y Mudanzas">
    @vite(['resources/css/app.css'])

    <section id="nosotros" role="region" aria-label="Inicio" class="relative w-full h-[81vh] flex flex-col items-center">
        <article class="flex py-8">
            <div class="flex flex-col w-2/3 items-start justify-between pl-72 pr-36">
                <div class="py-4 w-2/3">
                    <h1 class="text-7xl font-bold">Dile adios al efectivo con</h1>
                    <span class="text-[#2fccfd] text-7xl font-bold">EasyPay</span>
                </div>
                <p class="text-black text-lg py-2 font-medium">
                    EasyPay es un emprendimiento enfocado en simplificar la forma en que las personas pagan en su día a
                    día. Nacimos con la idea de eliminar el efectivo, el cambio y los procesos complicados, ofreciendo
                    una alternativa rápida, segura y accesible para todos.
                </p>
                <p class="text-black text-base py-2 font-medium">
                    Creemos que pagar debe ser tan fácil como escanear un código. Por eso desarrollamos una solución que
                    permite realizar pagos desde el celular en cualquier lugar, usando tecnología QR y tarjetas
                    bancarias, sin fricciones ni complicaciones.
                </p>
                <p class="text-black text-base py-2 font-medium">
                    Nuestro objetivo es impulsar la digitalización de los pagos y facilitar tanto a usuarios como a
                    comercios una experiencia moderna y confiable.
                </p>
                <button
                    class="cursor-pointer group relative flex gap-1.5 px-8 py-4 bg-[#7375ff] bg-opacity-80 text-[#f1f1f1] rounded-3xl hover:bg-opacity-70 transition font-semibold shadow-m ">
                    Saber mas
                </button>
            </div>
            <div class="w-1/2 flex flex-col items-left justify-center">
                <img src="{{ asset('image/SobreNosotros.png') }}" alt="" width="40%">
            </div>
        </article>
    </section>
    <section id="aplicacion" class="h-screen flex flex-col items-center justify-center">
        <div class="flex flex-col items-center text-center py-16 gap-3">
            <span class="text-sky-400 tracking-widest text-sm font-semibold">NUESTRA APLICACIÓN</span>
            <h2 class="font-extrabold text-6xl text-gray-900 mt-2">Tu banco en la palma de tu mano</h2>
            <p class="text-gray-500 text-lg mt-4 max-w-2xl">
                Diseñada para simplificar tus transaciones del dia a dia con la mejor tecnologia de seguridad, facilidad
                y navegacion intuitiva
            </p>
        </div>
        <article class="flex gap-12 py-12">
            <div class="bg-[#F5F8F8] w-68 flex flex-col items-start justify-around py-8 px-8 rounded-4xl">
                <img src="{{ asset('icon/QrCodeScanner.svg') }}" alt="" class="py-2">
                <h3 class="font-bold py-2 text-xl">Escanea QR</h3>
                <p class="text-[#686C6D] text-lg py-2">
                    Paga en segundos escaneando codigos en cualquier establecimiento. Olvida el cambio y las tarjetas
                    fisicas.
                </p>
            </div>
            <div class="bg-[#F5F8F8] w-68 flex flex-col items-start justify-around py-8 px-8 rounded-4xl">
                <img src="{{ asset('icon/AccountBalanceWallet.svg') }}" alt="" class="py-2">
                <h3 class="font-bold py-2 text-xl">Mayor flexibilidad</h3>
                <p class="text-[#686C6D] text-lg py-2">
                    Disfruta de un mejor control de tus ingresos y gastos. Con un historial de todas tus compras o
                    tranferecias de dinero.
                </p>
            </div>
            <div class="bg-[#F5F8F8] w-68 flex flex-col items-start justify-around py-8 px-8 rounded-4xl">
                <img src="{{ asset('icon/MoneyOff.svg') }}" alt="" class="py-2">
                <h3 class="font-bold py-2 text-xl">Sin efectivo</h3>
                <p class="text-[#686C6D] text-lg py-2">
                    Olvida las billeteras pesadas. Gestiona tus saldos transfiere, recibe dinero al instante desde tu
                    celular.
                </p>
            </div>
        </article>
    </section>
    <div id="registro" class="min-h-screen flex items-center justify-center bg-[#f5f7f7] px-4">
        <section
            class="w-full max-w-270 rounded-[36px] bg-linear-to-b from-[#0f1416] to-[#0b0f11] px-8 py-20 text-center shadow-[0_40px_80px_rgba(0,0,0,0.45)]">
            <h1 class="mx-auto max-w-180 text-[44px] leading-[1.15] font-bold tracking-tight text-white">
                ¿Listo para digitalizar tu economía?
            </h1>
            <p class="mx-auto mt-6 max-w-130 text-[16px] leading-relaxed text-white/60">
                Regístrate en EasyPay y accede a una nueva forma de realizar pagos sin complicaciones. Solo crea tu
                cuenta, agrega tu tarjeta y comienza a usar la app en segundos.
            </p>
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="mt-10 flex flex-col items-center justify-center gap-4">
                    <div class="flex gap-2">
                        <div class="input flex flex-col w-fit static">
                            <label for="input"
                                class="text-blue-500 text-xs font-semibold relative top-2 ml-1.75 px-0.75 bg-[#0f1416] w-fit">Nombre</label>
                            <input type="text" name="name"
                                class="border-blue-500 text-white input px-2.5 py-2.75 text-xs bg-[#0f1416] border-2 rounded-[5px] w-40 focus:outline-none placeholder:text-black/25" />
                        </div>
                        <div class="input flex flex-col w-fit static">
                            <label for="input"
                                class="text-blue-500 text-xs font-semibold relative top-2 ml-1.75 px-0.75 bg-[#0f1416] w-fit">Apellidos</label>
                            <input type="text" name="lastname"
                                class="border-blue-500 text-white input px-2.5 py-2.75 text-xs bg-[#0f1416] border-2 rounded-[5px] w-40 focus:outline-none placeholder:text-black/25" />
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-4">
                        <div class="input flex flex-col w-fit static">
                            <label for="input"
                                class="text-blue-500 text-xs font-semibold relative top-2 ml-1.75 px-0.75 bg-[#0f1416] w-fit">Correo
                                electronico</label>
                            <input type="text" name="email"
                                class="border-blue-500 text-white input px-2.5 py-2.75 text-xs bg-[#0f1416] border-2 rounded-[5px] w-80 focus:outline-none placeholder:text-black/25" />
                        </div>
                        <div class="input flex flex-col w-fit static">
                            <label for="input"
                                class="text-blue-500 text-xs font-semibold relative top-2 ml-1.75 px-0.75 bg-[#0f1416] w-fit">Contrasena</label>
                            <input type="password" name="password" required
                                class="border-blue-500 text-white input px-2.5 py-2.75 text-xs bg-[#0f1416] border-2 rounded-[5px] w-80 focus:outline-none placeholder:text-black/25" />
                        </div>
                        <div class="flex items-center w-96">
                            <label class="group flex items-center cursor-pointer">
                                <input class="hidden peer" type="checkbox" />

                                <span
                                    class="relative w-8 h-8 flex justify-center items-center bg-gray-100 border-2 border-gray-400 rounded-md shadow-md transition-all duration-500 peer-checked:border-blue-500 peer-checked:bg-blue-500 peer-hover:scale-105">
                                    <span
                                        class="absolute inset-0 bg-linear-to-br from-white/30 to-white/10 opacity-0 peer-checked:opacity-100 rounded-md transition-all duration-500 peer-checked:animate-pulse"></span>

                                    <svg fill="currentColor" viewBox="0 0 20 20"
                                        class="hidden w-5 h-5 text-white peer-checked:block transition-transform duration-500 transform scale-50 peer-checked:scale-100"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                            fill-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span
                                    class="ml-3 text-gray-700 group-hover:text-blue-500 font-medium transition-colors duration-300">
                                    He leído, entiendo y acepto los Términos de servicio. de EasyPay
                                </span>
                            </label>
                        </div>
                        <button type="submit"
                            class="h-13 px-8 rounded-xl border border-white/10 bg-white/5
               text-[15px] font-medium text-white 
               backdrop-blur-md
               shadow-[inset_0_0_0_1px_rgba(255,255,255,0.04)]
               transition hover:bg-white/10 active:scale-[0.98]
               flex items-center gap-2">
                            Crear una cuenta
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</x-layout>
