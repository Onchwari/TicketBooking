@extends('layouts.masterLayout')
<html>
    <body>
        @vite('resources/css/app.css')
        <head>
            @section('content')
        </head>
        <div class="w-full h-[450px] flex">
            <div
                class="grid grid-cols-2 gap-0 h-[390px] m-auto shadow-lg shadow-purple-700"
            >
                <div class="">
                    <img
                        class="h-[390px] w-[400px]"
                        src="{{url('/images/events.png')}}"
                    />
                </div>
                <div class="justify-items-center p-4">
                    <h1
                        class="text-center font-bold text-2xl text-purple-700 tracking-wide"
                    >
                        ADMIN LOGIN
                    </h1>
                    <form
                        action="{{route('login-admin')}}"
                        method="post"
                        enctype="multipart/form-data"
                        class="flex flex-col space-y-4"
                    >
                        @if(Session::has('success'))
                        <div class="alert text-red">
                            {{Session::get('success')}}
                        </div>
                        @endif @if(Session::has('fail'))
                        <div class="alert text-red">
                            {{Session::get('fail')}}
                        </div>
                        @endif 
                        @csrf

                        <div>
                            <label for="Email" class="text-sm font-semibold"
                                >Email Address</label
                            >
                            <input
                                type="text"
                                placeholder="Email Address"
                                name="Email"
                                value="{{old('Email')}}"
                                class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-4 py-2 outline-none hover:border-2 hover:border-blue-600 focus:ring-2 focus:ring-blue-600"
                            />
                            <span class="text-xs text-red-400"
                                >@error('Email') {{$message}} @enderror</span
                            >
                        </div>
                        <div>
                            <label for="" class="text-sm font-semibold"
                                >Password</label
                            >
                            <input
                                type="password"
                                placeholder="Password"
                                name="Password"
                                class="ring-1 ring-gray-300 mt-2 w-full rounded-md px-2 py-2 outline-none hover:border-2 hover:border-blue-600 focus:ring-2 focus:ring-blue-600"
                            />
                            <span class="text-xs text-red-400"
                                >@error('Password') {{$message}} @enderror</span
                            >
                        </div>
                        <button
                            class="justify-content-center bg-purple-600 text-white font-bold rounded-lg px-6 py-2 uppercase text-sm mt-6 hover:border-2 hover:border-blue-700"
                        >
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>
