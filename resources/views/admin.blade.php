<!DOCTYPE html>
<html>
<head><title>Admin - Acer Cuts</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white p-5">
<h1 class="text-3xl font-bold text-yellow-400 mb-5">📋 All Bookings - Acer Cuts</h1>
<table class="w-full bg-gray-800 rounded">
<tr class="bg-yellow-500 text-black"><th class="p-3">Name</th><th>Phone</th><th>Service</th><th>Date</th><th>Time</th></tr>
@foreach($bookings as $b)
<tr class="border-b border-gray-700"><td class="p-3">{{$b->name}}</td><td>{{$b->phone}}</td><td>{{$b->service}}</td><td>{{ \Carbon\Carbon::parse($b->booking_date)->format('d/m/Y') }}</td><td>{{$b->booking_time}}</td></tr>
@endforeach
</table>
<p class="mt-5">Total: {{count($bookings)}} bookings</p>
</body>
</html>