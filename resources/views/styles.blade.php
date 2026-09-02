<!DOCTYPE html>
<html><head><title>Styles - Acer Cuts</title>
<script src="https://cdn.tailwindcss.com"></script>
</head><body class="bg-black text-white p-6">
<h1 class="text-3xl font-bold text-yellow-400 mb-6 text-center">Our Styles</h1>
<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
@foreach($styles as $s)
<div class="bg-zinc-900 rounded-xl overflow-hidden">
<img src="{{$s['img']}}" class="h-48 w-full object-cover">
<div class="p-3"><p class="font-bold">{{$s['name']}}</p><p class="text-yellow-400">{{$s['price']}}</p>
<a href="/booking" class="mt-2 block text-center bg-yellow-400 text-black py-1 rounded">Book This</a></div></div>
@endforeach
</div>
<a href="/" class="block text-center mt-8 text-zinc-400">← Back to Home</a>
</body></html>