<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>E-TICKET</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />

        <body>
            @extends('layouts.masterlayout')

            <body>
                @section('content')

                <div>
                    <div
                        class="bg-cover bg-center bg-no-repeat h-screen bg-gradient-to-r from-purple-500 to-blue-500"
                    >
                        <p class="text-center pt-48 font-bold">
                            <span class="text-6xl"
                                ><span class="text-purple-700">W</span>E<span
                                    class="text-purple-700"
                                    >L</span
                                >C<span class="text-purple-700">O</span>M<span
                                    class="text-purple-700"
                                    >E</span
                                >
                                T<span class="text-purple-700">O</span> E-<span
                                    class="text-purple-700"
                                    >T</span
                                >I<span class="text-purple-700">C</span>K<span
                                    class="text-purple-700"
                                    >E</span
                                >T</span
                            >
                            <br />
                            <span class="text-2xl font-bold"
                                >"SEIZE THE FUN,
                                <span class="text-purple-700">
                                    GRAB A TICKET</span
                                ></span
                            >
                        </p>
                        <a
                            class="bg-purple-700 rounded w-48 px-8 py-1.5 shadow-md hover:bg-blue-600 text-lg mt-8 mr-96 object-center text-center float-right"
                            href="/events "
                            >Events</a
                        >
                    </div>
                </div>

                @endsection
            </body>
        </body>
    </head>
</html>
