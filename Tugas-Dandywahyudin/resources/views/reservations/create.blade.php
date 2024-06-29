<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="max-w-xl mx-auto mt-8 p-4 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Reservation Form</h1>
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required>
        </div>
        <div>
            <label for="service_type">Service Type:</label>
            <select id="service_type" name="service_type" required>
                <option value="Haircuts and Styling">Haircuts and Styling</option>
                <option value="Manicure and Pedicure">Manicure and Pedicure</option>
                <option value="Facial Treatments">Facial Treatments</option>
            </select>
        </div>
        <div>
            <label for="appointment_date">Appointment Date:</label>
            <input type="date" id="appointment_date" name="appointment_date" required>
        </div>
        <div>
            <label for="appointment_time">Appointment Time:</label>
            <input type="time" id="appointment_time" name="appointment_time" required>
        </div>
        <button type="submit">Submit</button>
    </form>
    
</div>
</body>
</html>