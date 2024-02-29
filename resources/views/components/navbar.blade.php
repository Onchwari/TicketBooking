<html>
    <body>
        <head>
            @vite('../resources/css/app.css')
            <nav class="border-blue-800 px-2 sm:px-4 py-3 dark:bg-blue-800">
                <div
                    class="container flex flex-wrap justify-between items-center mx-auto"
                >
                    <a href="/" class="flex items-center">
                        <span
                            class="self-center text-xl font-semibold ml-5 whitespace-nowrap dark:text-white"
                        >
                            <p class="w-[100px]">E-TICKET</p>
                        </span>
                    </a>

                    <div
                        class="hidden w-full md:block md:w-auto"
                        id="mobile-menu"
                    >
                        <ul
                            class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-md md:font-medium font-light"
                        >
                            <li>
                                <a
                                    href="/"
                                    class="block py-2 font-normal pr-4 pl-3 text-neutral-200 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-purple-600 md:dark:hover:font-semibold dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                    aria-current="page"
                                    >HOME</a
                                >
                            </li>
                            <li>
                                <a
                                    href="{{ url('') }}"
                                    class="block py-2 font-normal pr-4 pl-3 text-neutral-200 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-purple-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                    >ABOUT</a
                                >
                            </li>
                            <li>
                                <a
                                    href="{{ url('') }}"
                                    class="block py-2 font-normal pr-4 pl-3 text-neutral-200 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-purple-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                    >CONTACT US</a
                                >
                            </li>
                            <li>
                                <a
                                    href="{{ url('events') }}"
                                    class="block py-2 font-normal pr-4 pl-3 text-neutral-200 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:tex-white0 md:p-0 dark:text-white md:dark:hover:text-purple-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                    >EVENTS</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </head>
    </body>
</html>
