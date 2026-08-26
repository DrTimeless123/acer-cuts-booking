<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book - ACER CUTS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white min-h-screen flex items-center justify-center p-6">
    <div class="bg-zinc-900 p-8 rounded-2xl w-full max-w-md border border-zinc-800">
        <h2 class="text-3xl font-bold mb-2">Book Appointment</h2>
        <p class="text-gray-400 mb-6 text-sm">Fill form, we go call you!</p>

        <form method="POST" action="/booking" class="space-y-4">
            @csrf
            <input name="name" placeholder="Your Name" required class="w-full p-3 rounded-lg bg-zinc-800 border border-zinc-700">
            <input name="phone" placeholder="Phone Number e.g 0810..." required class="w-full p-3 rounded-lg bg-zinc-800 border border-zinc-700">
            
            <select name="service" required class="w-full p-3 rounded-lg bg-zinc-800 border border-zinc-700">
                <option value="">Select Service</option>
                <option>Classic Cut - ₦2000</option>
                <option>Beard + Cut - ₦3500</option>
                <option>VIP Treatment - ₦6000</option>
            </select>

            <input type="date" name="booking_date" required class="w-full p-3 rounded-lg bg-zinc-800 border border-zinc-700">
            <input type="time" name="booking_time" required class="w-full p-3 rounded-lg bg-zinc-800 border border-zinc-700">

            <button type="submit" class="w-full bg-yellow-500 text-black font-bold py-3 rounded-lg">Confirm Booking</button>
        </form>

        <a href="/" class="block text-center mt-4 text-gray-400 text-sm">← Back to Home</a>
    </div>
</body>
</html>