<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boat Booking - Complete Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="fixed inset-0 -z-10">
        <img src="{{asset('images/booking.png')}}" alt="Ocean Background" class="w-full h-full object-cover">
    </div>
    <!-- Navigation Bar -->
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
    <div class="container mx-auto px-4 py-10">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-xl p-6 text-black">
            <!-- Title -->
            <div class="text-center mb-8 border-b-2 border-gray-300">
                <h1 class="text-3xl font-bold mb-2">Complete Your Profil</h1>
                <p class="text-black mb-2">Lengkapi Informasi Anda Untuk Memesan Tiket</p>
            </div>
            
            <!-- Form -->
            @csrf
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Left Column -->
                <div class="space-y-4">
                    <!-- Name Field -->
                    <div>
                        <label class="block text-black mb-1">Nama Lengkap</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" class="w-full pl-10 pr-4 py-2 rounded-md border border-gray-300 rounded-md shadow-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    
                    <!-- Phone Field -->
                    <div>
                        <label class="block text-black mb-1">Nomor Telepon</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </div>
                            <input type="tel"  class="w-full pl-10 pr-4 py-2 rounded-md border border-gray-300 rounded-md shadow-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Nomor Telepon">
                        </div>
                    </div>
                </div>
                
                <!-- Right Column -->
                <div class="space-y-4">
                    <!-- Email Field -->
                    <div>
                        <label class="block text-black mb-1">Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <input type="email" class="w-full pl-10 pr-4 py-2 rounded-md border border-gray-300 rounded-md shadow-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Email">
                        </div>
                    </div>
                    
                    <!-- Address Field -->
                    <div>
                        <div class="flex items-center mb-1">
                            <label class="block text-black">Alamat Lengkap</label>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-top pl-3 mt-2 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <textarea class="w-full pl-10 pr-4 py-2 rounded-md border border-gray-300 rounded-md shadow-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600 h-24" placeholder="Alamat Lengkap"></textarea>
                        </div>
                    </div>
                </div>
            </form>
            
            <!-- Submit Button -->
            <div class="flex justify-center mt-8">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-10 rounded-md shadow-md transition duration-300 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Simpan Informasi
                </button>
            </div>
            
            <!-- Security Notice -->
            <div class="text-center mt-4 text-blue-100 text-sm">
                * Informasi Terjamin Keamanannya
            </div>
        </div>
    </div>
</body>
</html>