<x-layouts>
    <div class="py-12">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-8">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Create Your Account</h2>
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                        <input value="{{ old('name') }}" name="name" type="text" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-primary-500" placeholder="Enter your name">
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                        <input value="{{ old('email') }}" name="email" type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-primary-500" placeholder="Enter your email">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-primary-500" placeholder="Create a password">
                    </div>
                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-primary-500" placeholder="Confirm your password">
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <input id="terms" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                            <label for="terms" class="ml-2 block text-sm text-gray-900">
                                I agree to the <a href="#" class="text-primary-600 hover:text-primary-500">Terms and Conditions</a>
                            </label>
                        </div>
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            Create Account
                        </button>
                    </div>
                </form>
                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account? <a href="/login" class="text-primary-600 hover:text-primary-500 font-medium">Log in</a>
                    </p>
                </div>
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        After registration, you'll be asked to complete a <span class="text-primary-600 font-bold">skill assessment</span> to personalize your experience.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layouts>
