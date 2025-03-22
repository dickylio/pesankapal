<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRAKEN BOAT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Background Image -->
    <div class="fixed inset-0 -z-10">
        <img src="{{asset('images/booking.png')}}" alt="Ocean Background" class="w-full h-full object-cover">
    </div>

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-1 px-4 sm:px-6 mb-8">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{asset('images/logo.png')}}" alt="Boat Logo" class="h-12 w-12 mr-2">
                <span class="font-semibold text-lg text-gray-800">Boat</span>
            </div>
            <div class="flex space-x-8">
                <a href="homebooking" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="booking" class="text-gray-700 hover:text-blue-600">Booking</a>
                <a href="mybooking" class="text-gray-700 hover:text-blue-600">My Booking</a>
            </div>
            <div>
                <button class="text-gray-700 hover:text-blue-600 flex items-center">
                    User
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center text-white mb-8">
            <h1 class="text-4xl font-bold mb-2 drop-shadow-lg">Temukan Perahu Favoritmu</h1>
            <p class="text-xl drop-shadow-md">Pilih Tanggal Yang Kamu Inginkan dan Pilihan Kapal Kesukaanmu</p>
        </div>

        <!-- Search Box -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h2 class="text-xl font-semibold text-gray-800 mb-1">Cari Tiket Anda</h2>
            <p class="text-sm text-gray-600 mb-6">Atur Jadwal Kedatangan Anda</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Jenis Kapal -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kapal</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-ship text-gray-500"></i>
                        </div>
                        <select class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option selected disabled>Pilih Kapal</option>
                            <option>Kapal Feri</option>
                            <option>Speed Boat</option>
                            <option>Kapal Pesiar</option>
                        </select>
                    </div>
                </div>
                
                <!-- Tanggal Berangkat -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Berangkat</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="far fa-calendar text-gray-500"></i>
                        </div>
                        <input type="date" placeholder="Pilih Tanggal Berangkat" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                
                <!-- Rute Perjalanan -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Rute Perjalanan</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-route text-gray-500"></i>
                        </div>
                        <select class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option selected disabled>Pilih Rute</option>
                            <option>Padang - Aceh</option>
                            <option>Padang - Batam</option>
                            <option>Padang - Tanjung Pinang</option>
                        </select>
                    </div>
                </div>
                
                <!-- Penumpang -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Penumpang</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-user text-gray-500"></i>
                        </div>
                        <select class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option selected disabled>Pilih Penumpang</option>
                            <option>1 Orang</option>
                            <option>2 Orang</option>
                            <option>3 Orang</option>
                            <option>4+ Orang</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- Search Button -->
            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-medium py-2 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-300">
                    CARI JADWAL
                </button>
            </div>
        </div>

        <!-- Schedule Section -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Jadwal</h2>
            
            <!-- Date Selection -->
            <div class="flex space-x-2 overflow-x-auto pb-4 mb-6">
                <button class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-lg text-sm">2025-03-20</button>
                <button class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-lg text-sm">2025-03-21</button>
                <button class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-lg text-sm">2025-03-22</button>
                <button class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-lg text-sm">2025-03-23</button>
                <button class="bg-gray-200 hover:bg-gray-300 px-4 py-2 rounded-lg text-sm">2025-03-24</button>
            </div>
            
            <!-- Schedule Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Trip Card 1 -->
                <div class="border rounded-lg overflow-hidden">
                    <div class="flex justify-between items-center px-4 py-2 bg-gray-50">
                        <div class="flex items-center">
                            <span class="font-medium">KAPAL FERI</span>
                            <span class="ml-4 px-2 py-0.5 bg-gray-200 text-xs rounded">Kelas Ekonomi</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-weight text-gray-500 mr-1"></i>
                            <span class="text-sm">20 Kg (-)</span>
                        </div>
                    </div>
                    <div class="px-4 py-2 text-xs text-gray-600">PUTERA ANUGERAH MANDIRI</div>
                    <div class="px-4 py-3">
                        <div class="flex justify-between mb-2">
                            <div class="font-bold">PADANG</div>
                            <div class="font-bold">ACEH</div>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <div>PADANG <br/> (SUMATERA BARAT)</div>
                            <div class="text-gray-500">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div>ACEH <br/> (NANGGROE ACEH DARUSSALAM)</div>
                        </div>
                        <div class="text-sm text-gray-700">2025-03-20 13:45:00</div>
                    </div>
                    <div class="flex justify-between items-center px-4 py-3 border-t">
                        <div>
                            <div class="text-yellow-500 font-bold">Rp. 50.000,00</div>
                            <div class="text-xs text-gray-500">Harga Termurah</div>
                        </div>
                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-medium py-1 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-300">
                            Pilih Tiket
                        </button>
                    </div>
                </div>
                
                <!-- Trip Card 2 -->
                <div class="border rounded-lg overflow-hidden">
                    <div class="flex justify-between items-center px-4 py-2 bg-gray-50">
                        <div class="flex items-center">
                            <span class="font-medium">KAPAL FERI</span>
                            <span class="ml-4 px-2 py-0.5 bg-gray-200 text-xs rounded">Kelas Ekonomi</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-weight text-gray-500 mr-1"></i>
                            <span class="text-sm">20 Kg (-)</span>
                        </div>
                    </div>
                    <div class="px-4 py-2 text-xs text-gray-600">PUTERA ANUGERAH MANDIRI</div>
                    <div class="px-4 py-3">
                        <div class="flex justify-between mb-2">
                            <div class="font-bold">PADANG</div>
                            <div class="font-bold">Batam</div>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <div>PADANG <br/> (SUMATERA BARAT)</div>
                            <div class="text-gray-500">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div>Batam <br/> (KEPULAUAN RIAU)</div>
                        </div>
                        <div class="text-sm text-gray-700">2025-03-20 14:45:00</div>
                    </div>
                    <div class="flex justify-between items-center px-4 py-3 border-t">
                        <div>
                            <div class="text-yellow-500 font-bold">Rp. 50.000,00</div>
                            <div class="text-xs text-gray-500">Harga Termurah</div>
                        </div>
                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-medium py-1 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-300">
                            Pilih Tiket
                        </button>
                    </div>
                </div>
                
                <!-- Trip Card 3 -->
                <div class="border rounded-lg overflow-hidden">
                    <div class="flex justify-between items-center px-4 py-2 bg-gray-50">
                        <div class="flex items-center">
                            <span class="font-medium">KAPAL FERI</span>
                            <span class="ml-4 px-2 py-0.5 bg-gray-200 text-xs rounded">Kelas Ekonomi</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-weight text-gray-500 mr-1"></i>
                            <span class="text-sm">20 Kg (-)</span>
                        </div>
                    </div>
                    <div class="px-4 py-2 text-xs text-gray-600">PUTERA ANUGERAH MANDIRI</div>
                    <div class="px-4 py-3">
                        <div class="flex justify-between mb-2">
                            <div class="font-bold">PADANG</div>
                            <div class="font-bold">Tanjung Pinang</div>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <div>PADANG <br/> (SUMATERA BARAT)</div>
                            <div class="text-gray-500">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div>Tanjung Pinang <br/> (KEPULAUAN RIAU)</div>
                        </div>
                        <div class="text-sm text-gray-700">2025-03-20 10:45:00</div>
                    </div>
                    <div class="flex justify-between items-center px-4 py-3 border-t">
                        <div>
                            <div class="text-yellow-500 font-bold">Rp. 50.000,00</div>
                            <div class="text-xs text-gray-500">Harga Termurah</div>
                        </div>
                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-medium py-1 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-300">
                            Pilih Tiket
                        </button>
                    </div>
                </div>
                
                <!-- Trip Card 4 -->
                <div class="border rounded-lg overflow-hidden">
                    <div class="flex justify-between items-center px-4 py-2 bg-gray-50">
                        <div class="flex items-center">
                            <span class="font-medium">KAPAL FERI</span>
                            <span class="ml-4 px-2 py-0.5 bg-gray-200 text-xs rounded">Kelas Ekonomi</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-weight text-gray-500 mr-1"></i>
                            <span class="text-sm">20 Kg (-)</span>
                        </div>
                    </div>
                    <div class="px-4 py-2 text-xs text-gray-600">PUTERA ANUGERAH MANDIRI</div>
                    <div class="px-4 py-3">
                        <div class="flex justify-between mb-2">
                            <div class="font-bold">PADANG</div>
                            <div class="font-bold">Tanjung Pinang</div>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <div>PADANG <br/> (SUMATERA BARAT)</div>
                            <div class="text-gray-500">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div>Tanjung Pinang <br/> (KEPULAUAN RIAU)</div>
                        </div>
                        <div class="text-sm text-gray-700">2025-03-20 16:45:00</div>
                    </div>
                    <div class="flex justify-between items-center px-4 py-3 border-t">
                        <div>
                            <div class="text-yellow-500 font-bold">Rp. 50.000,00</div>
                            <div class="text-xs text-gray-500">Harga Termurah</div>
                        </div>
                        <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-medium py-1 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-300">
                            Pilih Tiket
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>