@include('partials/header')
    <div class="container mx-auto px-4">
        <h2 class="m-12 text-4xl font-extrabold text-gray-800 text-center">Reservation Sea Salon</h2>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="reservations" method="POST" class="max-w-lg mx-auto mt-8">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="phone_number" class="block text-gray-700 text-sm font-bold mb-2">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('phone_number') }}" required>
                @error('phone_number')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="service_type" class="block text-gray-700 text-sm font-bold mb-2">Type of service:</label>
                <select id="service_type" name="service_type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="">Select a service type</option>
                    <option value="Haircuts and styling" {{ old('service_type') == 'Haircuts and styling' ? 'selected' : '' }}>Haircuts and styling</option>
                    <option value="Manicure and pedicure" {{ old('service_type') == 'Manicure and pedicure' ? 'selected' : '' }}>Manicure and pedicure</option>
                    <option value="Facial treatments" {{ old('service_type') == 'Facial treatments' ? 'selected' : '' }}>Facial treatments</option>
                </select>
                @error('service_type')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="appointment_date" class="block text-gray-700 text-sm font-bold mb-2">Appointment Date:</label>
                <input type="date" id="appointment_date" name="appointment_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('appointment_date') }}" required>
                @error('appointment_date')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="appointment_time" class="block text-gray-700 text-sm font-bold mb-2">Appointment Time:</label>
                <input type="time" id="appointment_time" name="appointment_time" min="09:00" max="21:00" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('appointment_time') }}" required>
                @error('appointment_time')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4 flex justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Make Reservation</button>
            </div>            
        </form>
    </div>
@include('partials/footer')
