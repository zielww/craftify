<x-layouts>
    <div class="py-12">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-8">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Log in to Craftify</h2>
                <form>
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                        <input type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-primary-500" placeholder="Enter your email">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-primary-500" placeholder="Enter your password">
                    </div>
                    <div class="mb-6">
                        <button type="button" class="w-full cursor-pointer bg-primary-600 hover:bg-primary-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            Sign In
                        </button>
                    </div>
                </form>
                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        Don't have an account yet? <a href="/register" class="text-primary-600 hover:text-primary-500 font-medium">Sign Up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layouts>
