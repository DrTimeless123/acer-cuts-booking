<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACER Cuts - Premium Barbing Salon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-black text-white">
    @if(session('success'))
<div class="bg-green-500 text-black p-4 text-center font-bold">
{{ session('success') }}
</div>
@endif
    <!-- Navbar -->
    <nav class="flex justify-between items-center p-6 bg-zinc-900">
        <h1 class="text-2xl font-bold text-yellow-500"><i class="fas fa-cut mr-2"></i>ACER CUTS</h1>
        <a href="/booking" class="bg-yellow-500 text-black px-6 py-2 rounded-full font-bold">Book Now</a>
    </nav>

    <!-- Hero -->
    <section class="text-center py-20 px-6 bg-gradient-to-b from-zinc-900 to-black">
        <h2 class="text-5xl font-black mb-4">Fresh Cuts, <span class="text-yellow-500">Fresh Look</span></h2>
        <p class="text-gray-400 text-lg mb-8 max-w-2xl mx-auto">Premium barbing experience for the modern gentleman. Where style meets precision.</p>
        <div class="flex justify-center gap-4">
            <a href="/booking" class="bg-yellow-500 text-black px-8 py-3 rounded-full font-bold text-lg">Book Appointment</a>
            <button class="border border-white px-8 py-3 rounded-full font-bold">View Styles</button>
        </div>
        <div class="mt-12 grid grid-cols-3 gap-4 max-w-3xl mx-auto text-center">
            <div class="bg-zinc-900 p-4 rounded-xl"><h3 class="text-3xl font-bold text-yellow-500">500+</h3><p class="text-sm text-gray-400">Happy Clients</p></div>
            <div class="bg-zinc-900 p-4 rounded-xl"><h3 class="text-3xl font-bold text-yellow-500">5★</h3><p class="text-sm text-gray-400">Rating</p></div>
            <div class="bg-zinc-900 p-4 rounded-xl"><h3 class="text-3xl font-bold text-yellow-500">3 Yrs</h3><p class="text-sm text-gray-400">Experience</p></div>
        </div>
    </section>

    <!-- Services -->
    <section class="py-16 px-6 max-w-6xl mx-auto">
        <h3 class="text-3xl font-bold text-center mb-10">Our Services</h3>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-zinc-900 p-6 rounded-2xl border border-zinc-800">
                <i class="fas fa-user text-yellow-500 text-3xl mb-4"></i>
                <h4 class="font-bold text-xl mb-2">Classic Cut</h4>
                <p class="text-gray-400 text-sm mb-4">Clean and sharp haircut with precision fading.</p>
                <p class="text-yellow-500 font-bold">₦2,000</p>
            </div>
            <div class="bg-zinc-900 p-6 rounded-2xl border border-yellow-500">
                <i class="fas fa-fire text-yellow-500 text-3xl mb-4"></i>
                <h4 class="font-bold text-xl mb-2">Beard + Cut</h4>
                <p class="text-gray-400 text-sm mb-4">Full package - haircut with beard lining & dye.</p>
                <p class="text-yellow-500 font-bold">₦3,500</p>
            </div>
            <div class="bg-zinc-900 p-6 rounded-2xl border border-zinc-800">
                <i class="fas fa-crown text-yellow-500 text-3xl mb-4"></i>
                <h4 class="font-bold text-xl mb-2">VIP Treatment</h4>
                <p class="text-gray-400 text-sm mb-4">Cut, Beard, Dye, Facial & Massage.</p>
                <p class="text-yellow-500 font-bold">₦6,000</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-8 bg-zinc-900 text-gray-500 text-sm">
        <p>📍 Ilorin, Kwara State | 📞 0811-087-3630 | 0702-607-3609 | © 2026 ACER CUTS</p>
    </footer>

</body>
</html>