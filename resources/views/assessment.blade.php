<x-layouts>
    <div class="py-12">
        <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-8">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Determine Your Skill Level</h2>
                <p class="text-gray-600 mb-6 text-center">Answer a few questions to help us personalize your experience</p>

                <div class="space-y-6">
                    <!-- Question 1 -->
                    <div class="bg-primary-50 p-4 rounded-lg">
                        <h3 class="font-medium text-gray-900 mb-2">1. How long have you been crocheting?</h3>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input id="q1-a" name="q1" type="radio" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                <label for="q1-a" class="ml-3 block text-sm text-gray-700">I'm just starting out</label>
                            </div>
                            <div class="flex items-center">
                                <input id="q1-b" name="q1" type="radio" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                <label for="q1-b" class="ml-3 block text-sm text-gray-700">A few months</label>
                            </div>
                            <div class="flex items-center">
                                <input id="q1-c" name="q1" type="radio" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                <label for="q1-c" class="ml-3 block text-sm text-gray-700">1-2 years</label>
                            </div>
                            <div class="flex items-center">
                                <input id="q1-d" name="q1" type="radio" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                <label for="q1-d" class="ml-3 block text-sm text-gray-700">3+ years</label>
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="bg-primary-50 p-4 rounded-lg">
                        <h3 class="font-medium text-gray-900 mb-2">2. Which stitches are you comfortable with?</h3>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input id="q2-a" name="q2" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="q2-a" class="ml-3 block text-sm text-gray-700">Chain stitch</label>
                            </div>
                            <div class="flex items-center">
                                <input id="q2-b" name="q2" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="q2-b" class="ml-3 block text-sm text-gray-700">Single crochet</label>
                            </div>
                            <div class="flex items-center">
                                <input id="q2-c" name="q2" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="q2-c" class="ml-3 block text-sm text-gray-700">Double crochet</label>
                            </div>
                            <div class="flex items-center">
                                <input id="q2-d" name="q2" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="q2-d" class="ml-3 block text-sm text-gray-700">Complex stitches (popcorn, shell, etc.)</label>
                            </div>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="bg-primary-50 p-4 rounded-lg">
                        <h3 class="font-medium text-gray-900 mb-2">3. What types of projects have you completed?</h3>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <input id="q3-a" name="q3" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="q3-a" class="ml-3 block text-sm text-gray-700">Simple scarves or dishcloths</label>
                            </div>
                            <div class="flex items-center">
                                <input id="q3-b" name="q3" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="q3-b" class="ml-3 block text-sm text-gray-700">Hats or simple amigurumi</label>
                            </div>
                            <div class="flex items-center">
                                <input id="q3-c" name="q3" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="q3-c" class="ml-3 block text-sm text-gray-700">Blankets or garments</label>
                            </div>
                            <div class="flex items-center">
                                <input id="q3-d" name="q3" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="q3-d" class="ml-3 block text-sm text-gray-700">Complex designs with multiple techniques</label>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="recommendations.html" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Complete Setup
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts>
