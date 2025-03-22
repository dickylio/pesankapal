<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kraken Boat - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen">
    <div class="flex h-full">
        <div class="mb-8">
            <img src="{{asset('images/logo.png')}}" alt="Kraken Boat Logo" class="w-20 h-20">
        </div>
        <!-- Left Side Form -->
        <div class="w-full md:w-1/2 bg-white flex flex-col md:py-14 px-5">            
            <!-- Welcome Text -->
            <h1 class="text-3xl font-semibold text-gray-800 mb-8">Welcome to Kraken Boat</h1>
            
            <!-- Sign Up Form -->
            <form class="space-y-5">
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm text-gray-600 mb-2">Email</label>
                    <input type="email" id="email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                
                <!-- Username Field -->
                <div>
                    <label for="username" class="block text-sm text-gray-600 mb-2">Username</label>
                    <input type="text" id="username" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                
                <!-- Password Field -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="block text-sm text-gray-600">Password</label>
                        <button type="button" id="togglePassword" class="text-sm text-gray-500 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7
                                    -1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span id="toggleText">Hide</span>
                        </button>
                    </div>
                    <input type="password" id="password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                <!-- Marketing Checkbox -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="marketing" type="checkbox" checked class="w-4 h-4 border border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="marketing" class="text-gray-600">I want to receive emails about the product, feature updates, events, and marketing promotions.</label>
                    </div>
                </div>
                
                <!-- Terms Agreement -->
                <div class="text-sm text-gray-600 mt-6">
                    By creating an account, you agree to the 
                    <a href="#" class="text-gray-800 font-medium">Terms of use</a> and 
                    <a href="#" class="text-gray-800 font-medium">Privacy Policy</a>.
                </div>
                
                <!-- Create Account Button -->
                <div class="pt-2">
                    <button type="submit" class="w-40 bg-gray-400 hover:bg-gray-500 text-white font-medium py-3 px-4 rounded-full transition duration-300">
                        Create Account
                    </button>
                </div>
                
                <!-- Login Link -->
                <div class="text-sm">
                    Already have an account? <a href="signin" class="text-gray-800 font-medium">Log in</a>
                </div>
            </form>
        </div>
        
        <!-- Right Side Image -->
        <div class="hidden md:block md:w-1/2 bg-teal-600 relative">
            <img src="{{asset('images/create_account.png')}}" 
                 alt="Boat on ocean" 
                 class="h-full w-full object-cover">
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("togglePassword").addEventListener("click", function () {
            var passwordField = document.getElementById("password");
            var toggleText = document.getElementById("toggleText");
    
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleText.textContent = "Show";
            } else {
                passwordField.type = "password";
                toggleText.textContent = "Hide";
            }
        });
    </script>
</body>
</html>