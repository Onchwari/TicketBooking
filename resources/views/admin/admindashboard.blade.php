@vite('resources/css/app.css') @extends('layouts.adminlayout')

<html>
    <body>
        @section('content')

        <div class="w-full mt-4 px-4 flex justify-center">
            <table class="table-auto rounded-md">
                <thead class="text-white bg-purple-700">
                    <tr>
                        <th class="-px-2 py-3">Id</th>
                        <th class="-px-2 py-3">Poster</th>
                        <th class="-px-2 py-3">Name</th>
                        <th class="-px-2 py-3">Details</th>
                        <th class="-px-2 py-3">Venue</th>
                        <th class="-px-2 py-3">Time</th>
                        <th class="-px-2 py-3">Date</th>
                        <th class="-px-2 py-3">Regular Price</th>
                        <th class="-px-2 py-3">VIP Price</th>
                        <th class="-px-2 py-3">Max Attendees</th>
                        <th colspan="2" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $user)
                    <tr>
                        <td class="px-4 py-3">{{$user->id}}</td>
                        <td class="px-4 py-3">{{$user->Poster}}</td>
                        <td class="px-4 py-3">{{$user->Name}}</td>
                        <td class="px-4 py-3">{{$user->Details}}</td>
                        <td class="px-4 py-3">{{$user->Venue}}</td>
                        <td class="px-4 py-3">{{$user->Time}}</td>
                        <td class="px-4 py-3">{{$user->Date}}</td>
                        <td class="px-4 py-3">{{$user->Regular}}</td>
                        <td class="px-4 py-3">{{$user->VIP}}</td>
                        <td class="px-4 py-3">{{$user->MaxAttendees}}</td>

                        <td class="py-4">
                            <a href="{{url('edit/'.$user->id)}}"
                                ><button
                                    class="bg-blue-600 hover:border-2 hover:border-purple-700 text-white py-1 px-4 rounded-md"
                                >
                                    Edit
                                </button></a
                            >
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{url('dashboard/delete/'.$user->id)}}"
                                ><button
                                    class="bg-blue-600 hover:border-2 hover:border-purple-700 text-white py-1 px-4 rounded-md"
                                >
                                    Delete
                                </button></a
                            >
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <button
                class="open-modal bg-purple-700 rounded w-48 px-8 py-1.5 mt-4 shadow-md hover:bg-blue-600 text-lg -mt-18 mr-12 object-center text-center float-right"
            >
                Add Event
            </button>
            <div
                class="another-modal h-screen w-full fixed left-0 top-0 flex justify-center text-center items-center bg-black bg-opacity-80 hidden"
            >
                <!-- modal -->
                <div
                    class="bg-white rounded shadow-lg w-2/3 text-center items-center "
                >
                
                    <form
                        action="{{route('add-event')}}"
                        method="post"
                        enctype="multipart/form-data"
                        class="-p-4 pt-2 text-center justify-center flex flex-col space-y-2"
                    >
                        @if(Session::has('success'))
                        <div class="alert text-black">
                            {{Session::get('success')}}
                        </div>
                        @endif @if(Session::has('fail'))
                        <div class="alert text-black">
                            {{Session::get('fail')}}
                        </div>
                        @endif @csrf
                        <div
                            class="border-b px-4 -py-8 flex justify-between items-center"
                        >
                            <h2
                                class="text-3xl font-semibold text-blue-700 font-serif"
                            >
                                ADD EVENT
                            </h2>
                            <button class="text-black close-page">
                                &cross;
                            </button>
                        </div>
                        <div class="-py-8 mr-6">
                            <label class="font-medium pr-2" for=""
                                >Event:</label
                            >
                            <input
                                class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                                type="text"
                                name="Name"
                                value=""
                            /><br />
                            <span class="text-xs text-red-300"
                                >@error('Name') {{$message}} @enderror</span
                            >
                        </div>
                        <div class="-py-8">
                            <label class="font-medium pr-6" for=""
                                >Details:</label
                            >
                            <input
                                class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                                type="text"
                                name="Details"
                                value=""
                            /><br />
                            <span class="text-xs text-red-300"
                                >@error('Details') {{$message}} @enderror</span
                            >
                        </div>
                        <div class="-py-8">
                            <label class="font-medium pr-6" for=""
                                >Venue:</label
                            >
                            <input
                                class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                                type="text"
                                name="Venue"
                                value=" "
                            /><br />
                            <span class="text-xs text-red-300"
                                >@error('Venue') {{$message}} @enderror</span
                            >
                        </div>
                        <div class="-py-8">
                            <label class="font-medium pr-6" for="">Time:</label>
                            <input
                                class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                                type="time"
                                name="Time"
                                value=""
                            /><br />
                            <span class="text-xs text-red-300"
                                >@error('Time') {{$message}} @enderror</span
                            >
                        </div>

                        <div class="-py-8 -mr-8">
                            <label class="font-medium pr-6" for="">Date:</label>
                            <input
                                class="border-2 border-zinc-500 bg-slate-200 mr-10 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                                type="date"
                                name="Date"
                                value=""
                            /><br />
                            <span class="text-xs text-red-300"
                                >@error('Date') {{$message}} @enderror</span
                            >
                        </div>
                        <div class="-py-8">
                            <label class="font-medium pr-6" for=""
                                >Regular Price:</label
                            >
                            <input
                                class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-blue-600 focus:border-2 focus:border-blue-600"
                                type="number"
                                name="Regular"
                                value=""
                            /><br />
                            <span class="text-xs text-red-300"
                                >@error('Regular') {{$message}} @enderror</span
                            >
                        </div>
                        <div class="-py-8">
                            <label class="font-medium pr-6" for=""
                                >VIP Price:</label
                            >
                            <input
                                class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-blue-600 focus:border-2 focus:border-blue-600"
                                type="number"
                                name="VIP"
                                value=""
                            /><br />
                            <span class="text-xs text-red-300"
                                >@error('VIP') {{$message}} @enderror</span
                            >
                        </div>
                        <div class="-py-8">
                            <label class="font-medium pr-6" for=""
                                >Max Attendees:</label
                            >
                            <input
                                class="border-2 border-zinc-500 bg-slate-200 rounded mr-10 hover:border-blue-600 focus:border-2 focus:border-blue-600"
                                type="number"
                                name="MaxAttendees"
                                value=""
                            /><br />
                            <span class="text-xs text-red-300"
                                >@error('MaxAttendees') {{$message}} @enderror</span
                            >
                        </div>
                        <div class="-py-8">
                            <label class="font-medium pr-8" for=""
                                >Poster:</label
                            >
                            <input
                                class="rounded -mr-20 hover:border-blue-600 focus:border-2 focus:border-blue-600"
                                type="file"
                                name="Poster"
                                value=""
                            /><br />
                            <span class="text-xs text-red-300"
                                >@error('Poster') {{$message}} @enderror</span
                            >
                        </div>
                        <div class="flex ml-72">
                            <button
                                class="bg-blue-600 hover:bg-blue-700 px-3 py-1 w-24 rounded text-white"
                                type="submit"
                                name="save"
                            >
                                Add
                            </button>
                            <button
                                class="bg-red-600 hover:bg-red-700 px-3 py-1 ml-12 w-24 rounded text-white close-page"
                                type="button"
                            >
                                Cancel
                            </button>

                            
                        </div>
                        
                        <script>
                            const anothermodal =
                                document.querySelector(".another-modal");
                            const showPage =
                                document.querySelector(".open-modal");
                            const closePage =
                                document.querySelectorAll(".close-page");
                            showPage.addEventListener("click", function () {
                                anothermodal.classList.remove("hidden");
                            });

                            closePage.forEach((close) => {
                                close.addEventListener("click", function () {
                                    anothermodal.classList.add("hidden");
                                });
                            });
                        </script>

                        @endsection
                    </form>
                    
                        
                </div>
                
            </div>
            
        </div>
    </body>
</html>
