<x-layouts>
    <div class="space-y-6 m-20">
        <div class="text-center mb-8">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Choose your skill level:</h3>
            <p class="text-gray-600">Select the option that best describes your crochet experience</p>
        </div>

        <form action="/assessment/{{ $user->id }}" method="POST">
            @csrf
            @method('patch')
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-3">
                <label class="group relative bg-white p-6 border-2 border-gray-200 rounded-lg hover:border-primary-300 focus-within:border-primary-500 transition-all duration-200 hover:shadow-md cursor-pointer">
                    <input type="radio" name="skill_level" value="beginner" class="sr-only peer">
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-green-100 rounded-full flex items-center justify-center group-hover:bg-green-200 peer-checked:bg-green-300 transition-colors">
                            <i class="fas fa-seedling text-2xl text-green-600"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Beginner</h4>
                        <p class="text-sm text-gray-600">New to crochet or just learning basic stitches</p>
                        <ul class="mt-3 text-xs text-gray-500 space-y-1">
                            <li>• Chain stitch</li>
                            <li>• Single crochet</li>
                            <li>• Simple projects</li>
                        </ul>
                    </div>
                </label>

                <label class="group relative bg-white p-6 border-2 border-gray-200 rounded-lg hover:border-primary-300 focus-within:border-primary-500 transition-all duration-200 hover:shadow-md cursor-pointer">
                    <input type="radio" name="skill_level" value="intermediate" class="sr-only peer">
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-yellow-100 rounded-full flex items-center justify-center group-hover:bg-yellow-200 peer-checked:bg-yellow-300 transition-colors">
                            <i class="fas fa-star text-2xl text-yellow-600"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Intermediate</h4>
                        <p class="text-sm text-gray-600">Comfortable with basic stitches and ready for more</p>
                        <ul class="mt-3 text-xs text-gray-500 space-y-1">
                            <li>• Double crochet</li>
                            <li>• Color changes</li>
                            <li>• Pattern reading</li>
                        </ul>
                    </div>
                </label>

                <label class="group relative bg-white p-6 border-2 border-gray-200 rounded-lg hover:border-primary-300 focus-within:border-primary-500 transition-all duration-200 hover:shadow-md cursor-pointer">
                    <input type="radio" name="skill_level" value="advanced" class="sr-only peer">
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto mb-4 bg-red-100 rounded-full flex items-center justify-center group-hover:bg-red-200 peer-checked:bg-red-300 transition-colors">
                            <i class="fas fa-crown text-2xl text-red-600"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Advanced</h4>
                        <p class="text-sm text-gray-600">Experienced with complex techniques and patterns</p>
                        <ul class="mt-3 text-xs text-gray-500 space-y-1">
                            <li>• Complex stitches</li>
                            <li>• Garment construction</li>
                            <li>• Advanced techniques</li>
                        </ul>
                    </div>
                </label>
            </div>

            <div class="text-center mt-8">
                <p class="text-sm text-gray-500 mb-4">You can always change your skill level later in your profile settings.</p>
                <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors duration-200">
                    Continue
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z"/></svg>
                </button>
            </div>
        </form>
    </div>
</x-layouts>
