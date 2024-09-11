<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Profile</title>
    @vite('resources/css/app.css') <!-- Menggunakan Tailwind CSS -->
</head>
<body class="flex justify-center items-center min-h-screen bg-gradient-to-r from-purple-400 via-pink-500 to-red-500">
    <div class="text-center bg-white p-8 rounded-[20px] shadow-xl transform transition duration-500 hover:scale-105 hover:shadow-2xl">
        <!-- Logo Profile -->
        <img src="{{ asset('assets/img/Arkanril.jpg') }}" alt="Profile Logo" class="mx-auto mb-6 rounded-full w-32 h-32 object-cover ring-4 ring-purple-500 shadow-lg">

        <!-- Tabel Data -->
        <div class="space-y-4">
            <div class="flex items-center justify-center bg-gradient-to-r from-purple-400 to-purple-600 p-3 rounded-lg shadow-md hover:from-purple-500 hover:to-purple-700 transition duration-300">
                <span class="text-white font-semibold">{{ $nama }}</span>
            </div>

            <div class="flex items-center justify-center bg-gradient-to-r from-blue-400 to-blue-600 p-3 rounded-lg shadow-md hover:from-blue-500 hover:to-blue-700 transition duration-300">
                <span class="text-white font-semibold">{{ $kelas }}</span>
            </div>

            <div class="flex items-center justify-center bg-gradient-to-r from-green-400 to-green-600 p-3 rounded-lg shadow-md hover:from-green-500 hover:to-green-700 transition duration-300">
                <span class="text-white font-semibold">{{ $npm }}</span>
            </div>
        </div>

        <!-- Animated Button -->
        <div class="mt-6">
            <button class="px-6 py-2 bg-gradient-to-r from-purple-600 to-pink-500 text-white font-bold rounded-full shadow-lg hover:from-purple-700 hover:to-pink-600 transition duration-300 transform hover:scale-110">
                Action Button
            </button>
        </div>
    </div>
</body>
</html>
