<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center h-screen flex justify-center items-center" style="background-image: url('images/signin.png')">
    <div class="w-full max-w-md px-4">
        <div class="bg-white rounded-lg shadow-md p-8">
            <!-- Logo -->
            <div class="flex justify-center">
                <img src="{{asset('images/logo.png')}}" alt="Logo" class="w-20 h-20">
            </div>
            
            <!-- Form Title -->
            <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Sign in</h1>
            
            <!-- Login Form -->
            <form>
                <!-- Email/Phone Field -->
                <div class="mb-4">
                    <label class="block text-sm text-gray-600 mb-2">Email or mobile phone number</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                
                <!-- Password Field -->
                <div class="mb-6">
                    <label class="block text-sm text-gray-600 mb-2">Your password</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
                
                <!-- Login Button -->
                <button type="submit" class="w-full bg-gray-400 hover:bg-gray-500 text-white font-medium py-2 px-4 rounded-md transition duration-300 mb-4">
                    Log in
                </button>
                
                <!-- Terms Text -->
                <p class="text-xs text-center text-gray-600 mb-6">
                    By continuing, you agree to the 
                    <a href="#" class="text-gray-800 underline">Terms of use</a> and 
                    <a href="#" class="text-gray-800 underline">Privacy Policy</a>.
                </p>
                
                <!-- Forgot Password Link -->
                <div class="text-center mb-6">
                    <a href="#" class="text-sm text-gray-600 hover:underline">Forgot your password</a>
                </div>
                
                <!-- Divider -->
                <div class="border-t border-gray-300 my-6"></div>
                
                <!-- Create Account Button -->
                <a href="create">
                <button type="button" class="w-full bg-gray-300 hover:bg-gray-400 text-gray-700 font-medium py-2 px-4 rounded-md transition duration-300">
                    Create an account
                </button>
                </a>
            </form>
        </div>
        
        <!-- Footer Links -->
        <div class="flex justify-center space-x-6 mt-4 text-xs text-gray-500">
            <a href="#" class="hover:underline">Help Center</a>
            <a href="#" class="hover:underline">Terms of Service</a>
            <a href="#" class="hover:underline">Privacy Policy</a>
        </div>
    </div>
</body>
</html>