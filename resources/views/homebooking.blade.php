<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRAKEN BOAT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Background Image with Overlay -->
    <div class="fixed inset-0 -z-10">
        <img src="{{asset('images/booking.png')}}" alt="Ocean Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-blue-900/30"></div>
    </div>

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-3 px-4 sm:px-6 mb-8">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{asset('images/logo.png')}}" alt="Boat Logo" class="h-12 w-12 mr-2">
                <span class="font-bold text-xl text-blue-800">KRAKEN BOAT</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                <a href="booking" class="text-blue-600 font-medium border-b-2 border-blue-600">Booking</a>
                <a href="mybooking" class="text-gray-700 hover:text-blue-600 font-medium">My Booking</a>
            </div>
            <div>
                <button class="text-gray-700 hover:text-blue-600 flex items-center bg-gray-100 px-4 py-2 rounded-full">
                    <i class="fas fa-user-circle mr-2"></i>
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
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Cari Kapal</h2>
            
            <form action="{{ route('homebooking') }}" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Kapal</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-ship text-gray-500"></i>
                        </div>
                        <input type="text" name="nama_kapal" placeholder="Cari nama kapal..." value="{{ request('nama_kapal') }}" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kapasitas</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-users text-gray-500"></i>
                        </div>
                        <select name="kapasitas" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option value="" selected>Semua Kapasitas</option>
                            <option value="1-10" {{ request('kapasitas') == '1-10' ? 'selected' : '' }}>1-10 Orang</option>
                            <option value="11-20" {{ request('kapasitas') == '11-20' ? 'selected' : '' }}>11-20 Orang</option>
                            <option value="21-50" {{ request('kapasitas') == '21-50' ? 'selected' : '' }}>21-50 Orang</option>
                            <option value="50+" {{ request('kapasitas') == '50+' ? 'selected' : '' }}>50+ Orang</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Rute</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-route text-gray-500"></i>
                        </div>
                        <select name="id_rute" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option value="" selected>Semua Rute</option>
                            @foreach($rutes as $rute)
                                <option value="{{ $rute->id }}" {{ request('id_rute') == $rute->id ? 'selected' : '' }}>
                                    {{ $rute->rute }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="md:col-span-3 flex justify-end mt-2">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 flex items-center">
                        <i class="fas fa-search mr-2"></i> CARI KAPAL
                    </button>
                </div>
            </form>
        </div>
            
        <!-- Boats List Section -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-white mb-6 drop-shadow-lg">Kapal Tersedia</h2>
            
            <!-- Boats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse ($kapals as $kapal)
                    <!-- Boat Card -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <!-- Boat Image -->
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ asset('storage/' . $kapal->gambar) }}" alt="{{ $kapal->nama_kapal }}" class="w-full h-full object-cover">
                            <div class="absolute top-0 right-0 bg-{{ $kapal->status_kapal == 'tersedia' ? 'green' : 'red' }}-500 text-white px-3 py-1 m-2 rounded-full text-sm font-medium">
                                {{ $kapal->status_kapal == 'tersedia' ? 'Tersedia' : 'Tidak Tersedia' }}
                            </div>
                        </div>
                        
                        <div class="p-5">
                            <!-- Boat Name and Route -->
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800">{{ $kapal->nama_kapal }}</h3>
                                    <p class="text-sm text-gray-600">ID Rute: {{ $kapal->rute->rute }}</p>
                                </div>
                                <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                                    {{ $kapal->kapasitas }} Orang
                                </div>
                            </div>
                            
                            <!-- Divider -->
                            <hr class="my-3">
                            
                            <!-- Description -->
                            <p class="text-gray-700 mb-4 line-clamp-2">{{ $kapal->deskripsi }}</p>
                            
                            <!-- Price and Book Button -->
                            <div class="flex justify-between items-center mt-4">
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">Rp {{ number_format($kapal->harga_tiket, 0, ',', '.') }}</div>
                                    <div class="text-xs text-gray-500">per orang</div>
                                </div>
                                
                                <button class="{{ $kapal->status_kapal == 'tersedia' ? 'bg-yellow-400 hover:bg-yellow-500' : 'bg-gray-300 cursor-not-allowed' }} text-gray-800 font-medium py-2 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-300 flex items-center" {{ $kapal->status_kapal != 'tersedia' ? 'disabled' : '' }}>
                                    <i class="fas fa-ticket-alt mr-2"></i> Booking
                                </button>
                            </div>
                            
                            <!-- Details Button -->
                            <button class="w-full mt-4 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-300">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                @empty
                    <!-- Empty State -->
                    <div class="md:col-span-2 bg-white rounded-xl p-8 text-center">
                        <div class="text-6xl text-gray-300 mb-4">
                            <i class="fas fa-ship"></i>
                        </div>
                        <h3 class="text-xl font-medium text-gray-700 mb-2">Tidak Ada Kapal Yang Tersedia</h3>
                        <p class="text-gray-500 mb-4">Coba ubah filter pencarian atau pilih tanggal yang berbeda</p>
                        <a href="{{ route('homebooking') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Reset Filter
                        </a>
                    </div>
                @endforelse
            </div>
    </div>
</body>
</html>