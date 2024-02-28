@vite('resources/css/app.css') @extends('layouts.master')
<div
    class="modal h-screen w-full fixed left-0 top-0 flex justify-center text-center items-center bg-black bg-opacity-20"
>
    <div class="bg-white rounded shadow-lg w-2/3 text-center items-center">
        <form
            action="{{url('update-data/'.$user->id)}}"
            method="post"
            enctype="multipart/form-data"
            class="-p-4 pt-2 text-center justify-center flex flex-col space-y-2"
        >
            @csrf @method('PUT')
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h2 class="text-3xl font-semibold text-purple-700 font-serif">
                    EDIT EVENT
                </h2>
            </div>
            <div class="py-2 mr-6">
                <label class="font-medium pr-2" for="">Event:</label>
                <input
                    class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="text"
                    name="Name"
                    value="{{$user->Name}}"
                />
            </div>
            <div class="py-2">
                <label class="font-medium pr-6" for="">Details:</label>
                <input
                    class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="text"
                    name="Details"
                    value="{{$user->Details}}"
                />
            </div>
            <div class="py-2">
                <label class="font-medium pr-6" for="">Venue:</label>
                <input
                    class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="text"
                    name="Venue"
                    value=" {{$user->Venue}}"
                />
            </div>
            <div class="py-2">
                <label class="font-medium pr-6" for="">Time:</label>
                <input
                    class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="time"
                    name="Time"
                    value="{{$user->Time}}"
                />
            </div>

            <div class="py-2 -mr-8">
                <label class="font-medium pr-6" for="">Date:</label>
                <input
                    class="border-2 border-zinc-500 bg-slate-200 mr-10 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="date"
                    name="Date"
                    value="{{$user->Date}}"
                />
            </div>
            <div class="py-2">
                <label class="font-medium pr-6" for="">Regular Price:</label>
                <input
                    class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="number"
                    name="Regular"
                    value="{{$user->Regular}}"
                />
            </div>
            <div class="py-2">
                <label class="font-medium pr-6" for="">VIP Price:</label>
                <input
                    class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="number"
                    name="VIP"
                    value="{{$user->VIP}}"
                />
            </div>
            <div class="py-2">
                <label class="font-medium pr-6" for="">Max Attendees:</label>
                <input
                    class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="number"
                    name="MaxAttendees"
                    value="{{$user->MaxAttendees}}"
                />
            </div>
            <div class="py-2">
                <label class="font-medium pr-8" for="">Poster:</label>
                <input
                    class="rounded -mr-20 hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="file"
                    name="Poster"
                    value="{{$user->Poster}}"
                />
            </div>
            <div class="flex ml-72">
                <button
                    class="bg-blue-600 hover:bg-blue-700 px-3 py-1 w-24 rounded text-white"
                >
                    Save
                </button>
                <a href="{{ url('dashboard') }}">
                    <button
                        class="bg-red-600 hover:bg-red-700 px-3 py-1 ml-12 w-24 rounded text-white"
                    >
                        Cancel
                    </button>
                </a>
            </div>
        </form>
    </div>
</div>
