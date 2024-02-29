@vite('resources/css/app.css') @extends('layouts.masterlayout')
<body>
    @section('content')

    <div class="-ml-24">
        <div>
            <h1
                class="text-center ml-48 text-3xl font-semibold text-purple-700 mt-6"
            >
                EVENTS
            </h1>
        </div>

        <div
            class="grid grid-cols-4 gap-0 gap-y-5 grid justify-items-center mt-6 text-sm -ml-16 text-center pl-12 ml-36 font-semibold"
        >
            @foreach($user as $user)
            <div class="w-42 h-64 px-8 flex flex-col items-center">
                <img
                    class="h-32 w-36 ml-2 mt-2 scale:50 hover:scale-110 ease-in duration-500"
                    src="/assests/events/{{$user->Poster}}"
                />
                <p>{{$user->Name}}<br />{{$user->Details}}</p>
                <div class="flex justify-center mt-auto">
                    <a href=""
                        ><button
                            class="open-modal rounded-full hover:ring hover:ring-blue-700 mt-2 px-2 bg-purple-600"
                        >
                            Details
                        </button></a
                    >
                    <a href="{{url('/reserve/'.$user->id)}}"
                        ><button
                            class="rounded-full hover:ring hover:ring-blue-700 mt-2 px-2 bg-purple-600 ml-2"
                        >
                            Reserve
                        </button></a
                    >
                </div>
            </div>

            <div
                class="another-modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-80 hidden"
            >
                <!-- modal -->
                <div
                    class="bg-white rounded shadow-lg w-1/3 h-450 flex flex-col"
                >
                    <div
                        class="border-b px-4 py-2 flex justify-between items-center"
                    >
                        <h2
                            class="text-3xl font-semibold text-red-700 font-serif"
                        >
                            EVENT DETAILS
                        </h2>
                        <button class="text-black close-page">&cross;</button>
                    </div>
                    <div class="py-8 mr-6 flex-grow">
                        <img
                            class="ml-24 border-2 border-zinc-900 scale:50 hover:scale-110 ease-in duration-500"
                            src="/assests/events/{{$user->Poster}}"
                        />
                        <p class="mt-4">
                            <span class="font-bold">Event Name:</span>
                            {{$user->Name}}<br />
                            <span class="font-bold">Details:</span>
                            {{$user->Details}}<br />
                            <span class="font-bold">Date:</span>
                            {{$user->Date}}<br />
                            <span class="font-bold">Time:</span>
                            {{$user->Time}}<br />
                            <span class="font-bold">Venue:</span>
                            {{$user->Venue}}<br />
                            <span class="font-bold">Regular Price:</span>
                            {{$user->Regular}}<br />
                            <span class="font-bold">VIP Price:</span>
                            {{$user->VIP}}<br/>
                            <span class="font-bold">Attendees:</span>
                            {{$user->MaxAttendees}}
                        </p>
                    </div>

                    <div
                        class="flex justify-end items-center w-full border-b p-3"
                    >
                        <button
                            class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-4 -mt-14 close-page"
                        >
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <br /><br />
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const showModalButtons = document.querySelectorAll(".open-modal");
            const closeModalButtons = document.querySelectorAll(".close-page");
            const modals = document.querySelectorAll(".another-modal");

            showModalButtons.forEach((button, index) => {
                button.addEventListener("click", function (event) {
                    event.preventDefault();
                    if (modals[index]) {
                        modals[index].classList.remove("hidden");
                    }
                });
            });

            closeModalButtons.forEach((button, index) => {
                button.addEventListener("click", function () {
                    const parentModal = button.closest(".another-modal");
                    if (parentModal) {
                        parentModal.classList.add("hidden");
                    }
                });
            });

            document.addEventListener("keydown", function (event) {
                if (event.key === "Escape") {
                    modals.forEach((modal) => {
                        modal.classList.add("hidden");
                    });
                }
            });
        });
    </script>
</body>
@endsection
