<div class="flex w-[100vw] h-full divide-x overflow-x-hidden">
    <div class="w-[20%] bg-blue-700 flex justify-center">
        <div class="flex flex-col space-y-4 items-center px-4">
            <div class="container py-4">
                <h1 class="text-4xl font-bold p-2 pb-4">
                    E-T<a class="text-purple-600">i</a>cket
                </h1>
                <h1 class="text-center text-2xl font-bold text-purple-600">
                    MENU
                </h1>
            </div>
            <div>
                <h3 class="text-lg font-bold text-white">
                    Welcome,<span class="text-purple-600">
                        {{session('name')}}</span
                    >
                </h3>
            </div>
            <div
                class="container flex flex-col space-y-4 text-lg font-medium font-base text-white"
            >
                <div
                    class="flex flex-row items-center space-x-4 hover:text-purple-600"
                >
                    <i class="fa-solid fa-message hover:text-purple-600"></i>
                    <a
                        href="{{ url('dashboard') }}"
                        class="hover:text-purple-600"
                        >View Events</a
                    >
                </div>

                <div
                    class="flex flex-row items-center space-x-4 hover:text-purple-600"
                >
                    <i class="fa-solid fa-lock hover:text-purple-600"></i>
                    <a href="/logout" class="hover:text-purple-600">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="w-[100%]">@yield('content')</div>
</div>
