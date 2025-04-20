<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kraken Boat - Find Your Boat Today</title>
    <link rel="icon" type="images/x-icon" href="/images/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans">

    <!-- Hero Section -->
    <section class="relative">
        <img src="{{ asset('images/home1.png') }}" alt="Logo" class="object-cover">
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-start items-center pt-5">
            
            <!-- Navbar -->
            <nav class="w-full max-w-7xl flex justify-between items-center px-4">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Kraken Boat Logo" class="size-32">
                </div>

                <!-- Tombol Login/Logout -->
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @if (session('info'))
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded shadow mt-2"> {{ session('info') }} 
                        </div> 
                        @endif
                    @csrf
                    <button type="submit" class="flex items-center gap-2 font-bold text-white bg-red-400 px-4 py-2 rounded-full hover:bg-opacity-60 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-6" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M6.75 12a.75.75 0 0 1 .75-.75h7.69l-2.22-2.22a.75.75 0 1 1 1.06-1.06l3.5 3.5a.75.75 0 0 1 0 1.06l-3.5 3.5a.75.75 0 1 1-1.06-1.06l2.22-2.22H7.5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="drop-shadow-lg">LOGOUT</span>
                    </button>
                </form>
                @else
                <a href="{{ route('login') }}">
                    <button class="flex items-center gap-2 font-bold text-white bg-slate-300 px-4 py-2 rounded-full hover:bg-opacity-60 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-6" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm0 1.5a7.5 7.5 0 0 0-6.364 3.5.75.75 0 0 0 1.228.832A6 6 0 0 1 12 14.25a6 6 0 0 1 5.136 3.582.75.75 0 0 0 1.228-.832A7.5 7.5 0 0 0 12 13.5Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="drop-shadow-lg">LOGIN</span>
                    </button>
                </a>
                @endauth
            </nav>

            <!-- Hero Text -->
            <div class="text-center md:mt-10">
                <h1 class="text-4xl md:text-5xl font-bold text-white drop-shadow-md">WELCOME TO KRAKEN BOAT</h1>
                <p class="text-xl md:text-2xl text-white mt-2 drop-shadow-md">Lets Find Your Boat Today</p>
            </div>

            <!-- Tombol Pesan Sekarang -->
            @auth
            <a href="{{ route('booking') }}">
                <button class="mt-[300px] bg-white px-8 py-3 rounded-full text-black font-semibold hover:bg-gray-300 transition duration-300">
                    Pesan Sekarang
                </button>
            </a>
            @else
            <a href="{{ route('login') }}">
                <button class="mt-[300px] bg-white px-8 py-3 rounded-full text-black font-semibold hover:bg-gray-300 transition duration-300">
                    Pesan Sekarang
                </button>
            </a>
            @endauth
        </div>
    </section>

  
    <!-- Our Services Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-blue-500 text-center mb-16">Our Service</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Service 1 -->
                <div class="bg-gray-200 rounded-lg p-6 flex items-center space-x-6">
                    <div class="bg-blue-100 rounded-lg p-4">
                        <i class="fas fa-couch text-4xl text-blue-500"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold">Pilihan kelas ekonomi, bisnis, dan eksekutif.</h3>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-gray-200 rounded-lg p-6 flex items-center space-x-6">
                    <div class="bg-blue-100 rounded-lg p-4">
                        <i class="fas fa-utensils text-4xl text-blue-500"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold">Sedia makanan dan minuman.</h3>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-gray-200 rounded-lg p-6 flex items-center space-x-6">
                    <div class="bg-blue-100 rounded-lg p-4">
                        <i class="fas fa-wifi text-4xl text-blue-500"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold">Akses internet, TV, dan area bermain anak.</h3>
                    </div>
                </div>
                
                <!-- Service 4 -->
                <div class="bg-gray-200 rounded-lg p-6 flex items-center space-x-6">
                    <div class="bg-blue-100 rounded-lg p-4">
                        <i class="fas fa-life-ring text-4xl text-blue-500"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold">Jaket pelampung, Tenaga Medic Darurat.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Illustration Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto flex justify-center">
                <img src="{{ asset('images/home2.png') }}" alt="Couple on cruise" class="w-auto">
            </div>
        </div>
    </section>
    
    
    <!-- Footer -->
    <footer class="bg-blue-100 py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo and Contact -->
                <div class="col-span-1">
                    <div class="flex flex-col items-center md:items-start">
                        <img src="{{asset('images/logo.png')}}" alt="Kraken Boat Logo" class="w-36 mb-6">
                        <div class="flex items-center space-x-2 mb-3">
                            <i class="fas fa-phone-alt text-gray-600"></i>
                            <span>Call Center : (021) 231</span>
                        </div>
                        <div class="flex items-center space-x-2 mb-3">
                            <i class="fab fa-whatsapp text-gray-600"></i>
                            <span>SMS/Whatsapp: 0812 2341 2394</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-envelope text-gray-600"></i>
                            <span>krakenboat@gmail.com</span>
                        </div>
                    </div>
                </div>
                
                <!-- Information -->
                <div class="col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Informasi</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-blue-500">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-500">Syarat Persetujuan</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-500">Peta Umum</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-500">Promo</a></li>
                    </ul>
                </div>
                
                <!-- Products -->
                <div class="col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Produk Kami</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-blue-500">Jasa Kecelakakaan</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-500">Jasa Kraken Boat</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-500">Ukuran Aneka Jasa</a></li>
                    </ul>
                </div>
                
                <!-- Support -->
                <div class="col-span-1">
                    <h3 class="text-lg font-semibold mb-4">Dukungan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-blue-500">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-500">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-500">Dukungan Kendaran</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Find Us and Social Media -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Temukan Kami</h3>
                    <p class="text-gray-600">
                        Jl. M. Yunus No.6, Lubuk Lintah, Kec. Kuranji, Kota Padang, Sumatera Barat 25153
                    </p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-500 hover:text-blue-600">
                            <i class="fab fa-facebook-f text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-pink-600">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-400">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>