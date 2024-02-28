@vite('resources/css/app.css') @extends('layouts.master')

<div
    class="h-screen w-full fixed left-0 top-0 flex justify-center text-center items-center bg-black bg-opacity-20"
>
    <div class="bg-white rounded shadow-lg w-2/3 text-center items-center">
        <form
            action="{{ route('make-reserve') }}"
            method="post"
            enctype="multipart/form-data"
            class="-p-4 pt-2 text-center justify-center flex flex-col space-y-2"
        >
            @csrf @method('POST')
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h2 class="text-3xl font-semibold text-purple-700 font-serif">
                    RESERVE EVENT
                </h2>
            </div>
            <div class="py-2 mr-6">
                <label class="font-medium pr-2" for="">Event:</label>
                <input
                    class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="text"
                    name="Name"
                    value="{{ $user->Name }}"
                    readonly
                /><br />
                <span class="text-xs text-red-300"
                    >@error('Name') {{ $message }} @enderror</span
                >
            </div>
            <div class="py-2">
                <label class="font-medium pr-6" for="">Email:</label>
                <input
                    class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="text"
                    name="Email"
                    value="{{old('Email')}}"
                /><br />
                <span class="text-xs text-red-300"
                    >@error('Email') {{ $message }} @enderror</span
                >
            </div>
            <div class="py-2">
                <label class="font-medium pr-6" for="">Name:</label>
                <input
                    class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="text"
                    name="FullName"
                    value="{{old('FullName')}}"
                /><br />
                <span class="text-xs text-red-300"
                    >@error('FullName') {{ $message }} @enderror</span
                >
            </div>

            <div class="py-2 mr-24 pb-4">
                <label class="font-medium pr-6" for="">TicketType:</label>
                <select
                    class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    id="user"
                    name="TicketType"
                    onchange="calculateTotalPrice(this.value)"
                >
                    <option value="Regular">Regular</option>
                    <option value="VIP">VIP</option></select
                ><br />
                <span class="text-xs text-red-300"
                    >@error('TicketType') {{ $message }} @enderror</span
                >
            </div>
            <div class="py-2">
                <label class="font-medium pr-8" for=""
                    >Number of tickets:</label
                >
                <input
                    class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="number"
                    name="NumberofTickets"
                    id="NumberofTickets"
                    value="{{old('NumberofTickets')}}"
                    onchange="calculateTotalPrice(document.getElementById('user').value)"
                /><br />
                <span class="text-xs text-red-300"
                    >@error('NumberofTickets') {{ $message }} @enderror</span
                >
            </div>
            <div class="py-2">
                <label class="font-medium pr-8" for="">Total price:</label>
                <input
                    class="border-2 border-zinc-500 bg-slate-200 rounded hover:border-blue-600 focus:border-2 focus:border-blue-600"
                    type="Integer"
                    name="TotalPrice"
                    id="TotalPrice"
                    value="{{old('TotalPrice')}}"
                    readonly
                /><br />
                <span class="text-xs text-red-300"
                    >@error('TotalPrice') {{ $message }} @enderror</span
                >
            </div>
            <div class="flex ml-72">
                <button
                    class="bg-blue-600 hover:bg-blue-700 px-3 py-1 w-24 rounded text-white"
                >
                    Reserve
                </button>
            </div>
        </form>
        <a href="{{ url('events') }}">
            <button
                class="bg-red-600 hover:bg-red-700 px-3 -mt-12 py-1 ml-12 w-24 rounded text-white"
            >
                Cancel
            </button>
        </a>
    </div>
</div>

<script>
    function calculateTotalPrice(ticketType) {
        // Retrieve ticket prices from the database
        let regularTicketPrice = {{ $user->Regular }};
        let vipTicketPrice = {{ $user->VIP }};
        // Get the number of tickets and calculate total price
        let numberOfTickets = parseInt(document.getElementById('NumberofTickets').value);
        let totalPrice = (ticketType === 'Regular') ? numberOfTickets * regularTicketPrice : numberOfTickets * vipTicketPrice;

        // Populate the "Total Price" input field with the calculated total price
        document.getElementById('TotalPrice').value = totalPrice;
    }
</script>
