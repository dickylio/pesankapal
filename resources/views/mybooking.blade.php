<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRAKEN BOAT</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="fixed inset-0 -z-10">
        <img src="{{asset('images/booking.png')}}" alt="Ocean Background" class="w-full h-full object-cover">
    </div>
    <!-- Navbar -->
        <nav class="bg-white shadow-md py-1 px-5 sm:px-6 mb-8">
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
    <div class="mx-auto max-w-4xl p-4">
        <div class="bg-white rounded-xl shadow-md overflow-hidden mt-4">
            <div class="p-6">
                <h1 class="text-xl font-bold mb-6">My Bookings</h1>
                
                <!-- Booking Card -->
                <div class="bg-white rounded-lg shadow overflow-hidden max-w-sm border border-gray-200">
                    <!-- Blue Header -->
                    <div class="bg-blue-600 p-3 flex justify-between items-center">
                        <div class="text-white">
                            <h3 class="font-bold text-sm">Kapal Feri</h3>
                            <p class="text-xs text-blue-100">Kelas Ekonomi</p>
                        </div>
                        <div class="bg-white text-blue-600 text-xs font-bold px-2 py-1 rounded">2 Persons</div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-4">
                        <!-- Price -->
                        <div class="mb-2">
                            <h4 class="text-yellow-500 font-bold">Rp. 150,000.00</h4>
                            <p class="text-xs text-gray-500">2 Reservation Packages</p>
                        </div>
                        
                        <!-- Date -->
                        <div class="mb-2">
                            <p class="text-xs text-gray-600">Tanggal Keberangkatan:</p>
                            <p class="text-xs font-medium">20 Maret 2023</p>
                        </div>
                        
                        <!-- Duration -->
                        <div class="flex justify-between items-center pt-2 text-xs">
                            <p class="text-gray-600">Duration:</p>
                            <p class="font-medium">12 Hours</p>
                        </div>
                    </div>
                    
                    <!-- Cancel Button -->
                    <div class="bg-red-50 p-2 text-center border-t border-gray-200">
                        <button class="text-red-500 text-xs py-1 px-3">Cancel Booking</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>