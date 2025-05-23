<x-layouts>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <!-- Left Column - Images -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="relative pb-2/3">
                        <img class="w-full h-auto" src="https://images.unsplash.com/photo-1582883040775-f98dd8c04597?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Granny Square Blanket">
                    </div>
                    <div class="p-4 flex space-x-2">
                        <button class="bg-white border border-gray-300 rounded-md p-1 focus:outline-none focus:ring-2 focus:ring-primary-500">
                            <img class="h-16 w-16 object-cover" src="https://images.unsplash.com/photo-1582883040775-f98dd8c04597?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Thumbnail 1">
                        </button>
                        <button class="bg-white border border-gray-300 rounded-md p-1 focus:outline-none focus:ring-2 focus:ring-primary-500">
                            <img class="h-16 w-16 object-cover" src="https://images.unsplash.com/photo-1615655096345-41e50d3b1faa?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Thumbnail 2">
                        </button>
                        <button class="bg-white border border-gray-300 rounded-md p-1 focus:outline-none focus:ring-2 focus:ring-primary-500">
                            <img class="h-16 w-16 object-cover" src="https://images.unsplash.com/photo-1544967082-d9d25d867d66?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Thumbnail 3">
                        </button>
                    </div>
                </div>

                <!-- Project Actions -->
                <div class="mt-6 bg-white rounded-lg shadow overflow-hidden p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Project Actions</h3>
                    <div class="space-y-4">
                        <button class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            <i class="far fa-bookmark mr-2"></i> Watch Video Tutorial
                        </button>
                        <button class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            <i class="fas fa-share-alt mr-2"></i> Share Project
                        </button>
                    </div>
                </div>

                <!-- Project Status -->
                <div class="mt-6 bg-white rounded-lg shadow overflow-hidden p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Project Status</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="flex items-center">
                                <input type="radio" name="project-status" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                <span class="ml-3 text-sm text-gray-700">Interested</span>
                            </label>
                        </div>
                        <div>
                            <label class="flex items-center">
                                <input type="radio" name="project-status" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                <span class="ml-3 text-sm text-gray-700">In Progress</span>
                            </label>
                        </div>
                        <div>
                            <label class="flex items-center">
                                <input type="radio" name="project-status" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                <span class="ml-3 text-sm text-gray-700">Completed</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Details -->
            <div class="mt-12 lg:mt-0 lg:col-span-2">
                <div class="bg-white rounded-lg shadow overflow-hidden p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900">Granny Square Blanket</h1>
                            <div class="mt-2 flex items-center">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 mr-2">
                                    Intermediate
                                </span>
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star-half-alt text-yellow-400"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-500 mr-2">
                                <i class="far fa-clock mr-1"></i> 20-25 hours
                            </span>
                            <span class="text-sm text-gray-500">
                                <i class="fas fa-ruler mr-1"></i> 48" x 60"
                            </span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h2 class="text-xl font-medium text-gray-900">Description</h2>
                        <p class="mt-2 text-gray-600">
                            Create a colorful and cozy blanket with the classic granny square pattern. This project is perfect for intermediate crocheters looking to practice color changes and joining techniques. The finished blanket measures approximately 48" x 60", making it perfect for a throw or lap blanket.
                        </p>
                        <p class="mt-4 text-gray-600">
                            This pattern uses the traditional granny square motif, which is then joined to create a beautiful, textured blanket. You can customize the colors to match your home decor or use up yarn from your stash.
                        </p>
                    </div>

                    <div class="mt-8">
                        <h2 class="text-xl font-medium text-gray-900">Materials</h2>
                        <ul class="mt-2 space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check text-primary-500 mt-1 mr-2"></i>
                                <span>Worsted weight yarn (size 4) in 5-7 colors of your choice (approximately 1500-1800 yards total)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-primary-500 mt-1 mr-2"></i>
                                <span>Size H/5.0mm crochet hook</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-primary-500 mt-1 mr-2"></i>
                                <span>Yarn needle for weaving in ends</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-primary-500 mt-1 mr-2"></i>
                                <span>Scissors</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-primary-500 mt-1 mr-2"></i>
                                <span>Stitch markers (optional)</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-8 ">
                        <h2 class="text-xl font-medium text-gray-900">Instructions</h2>
                        <div class="mt-4 space-y-6">
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Step 1: Make the Granny Squares</h3>
                                <p class="mt-2 text-gray-600">
                                    You will need to make 80 granny squares (8 rows of 10 squares). Each square should measure approximately 6" x 6".
                                </p>
                                <ol class="mt-2 space-y-2 text-gray-600 list-decimal list-inside pl-4">
                                    <li>Chain 4, join with a slip stitch to form a ring.</li>
                                    <li>Chain 3 (counts as first double crochet), work 2 double crochet into the ring.</li>
                                    <li>Chain 2, work 3 double crochet into the ring.</li>
                                    <li>Repeat step 3 two more times.</li>
                                    <li>Chain 2, join with a slip stitch to the top of the beginning chain 3.</li>
                                    <li>For round 2, slip stitch to the first chain-2 space, chain 3, work 2 double crochet, chain 2, work 3 double crochet in the same chain-2 space.</li>
                                    <li>*In the next chain-2 space, work 3 double crochet, chain 2, work 3 double crochet.* Repeat from * to * 2 more times.</li>
                                    <li>Join with a slip stitch to the top of the beginning chain 3.</li>
                                    <li>Continue in this pattern for 4 rounds total, changing colors as desired.</li>
                                </ol>
                            </div>

                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Step 2: Join the Squares</h3>
                                <p class="mt-2 text-gray-600">
                                    There are several methods for joining granny squares. We recommend the slip stitch join for a neat finish.
                                </p>
                                <ol class="mt-2 space-y-2 text-gray-600 list-decimal list-inside pl-4">
                                    <li>Arrange your squares in the desired pattern (8 rows of 10 squares).</li>
                                    <li>Place two squares right sides together.</li>
                                    <li>Insert your hook through both loops of the first stitch on both squares.</li>
                                    <li>Yarn over and pull through both stitches and the loop on your hook (slip stitch).</li>
                                    <li>Continue slip stitching across the edge.</li>
                                    <li>Join all squares in rows, then join the rows together.</li>
                                </ol>
                            </div>

                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Step 3: Add a Border</h3>
                                <p class="mt-2 text-gray-600">
                                    A border gives your blanket a finished look and helps stabilize the edges.
                                </p>
                                <ol class="mt-2 space-y-2 text-gray-600 list-decimal list-inside pl-4">
                                    <li>Round 1: With your chosen border color, work 1 round of single crochet around the entire blanket, working 3 single crochet in each corner.</li>
                                    <li>Round 2: Work 1 round of double crochet, working 3 double crochet in each corner.</li>
                                    <li>Round 3: Work 1 round of single crochet.</li>
                                    <li>Round 4: Work a shell stitch border (5 double crochet in same stitch, skip 2 stitches, single crochet, skip 2 stitches, repeat).</li>
                                </ol>
                            </div>

                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Step 4: Finishing</h3>
                                <p class="mt-2 text-gray-600">
                                    Complete your blanket with these final steps.
                                </p>
                                <ol class="mt-2 space-y-2 text-gray-600 list-decimal list-inside pl-4">
                                    <li>Weave in all ends using a yarn needle.</li>
                                    <li>Block your blanket if desired for a more professional finish.</li>
                                    <li>To block: Wet the blanket, gently squeeze out excess water, and lay flat to dry, pinning to desired dimensions.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    </div>
</x-layouts>
