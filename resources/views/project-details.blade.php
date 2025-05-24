<x-layouts>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <!-- Left Column - Images -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="relative pb-2/3">
                        <img class="w-full h-auto" src="{{ $project->image_url }}" alt="{{ $project->name  }}">
                    </div>
                </div>

                <!-- Project Actions -->
                <div class="mt-6 bg-white rounded-lg shadow overflow-hidden p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Project Actions</h3>
                    <div class="space-y-4">
                        <button class="cursor-pointer w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M478-240q21 0 35.5-14.5T528-290q0-21-14.5-35.5T478-340q-21 0-35.5 14.5T428-290q0 21 14.5 35.5T478-240Zm-36-154h74q0-33 7.5-52t42.5-52q26-26 41-49.5t15-56.5q0-56-41-86t-97-30q-57 0-92.5 30T342-618l66 26q5-18 22.5-39t53.5-21q32 0 48 17.5t16 38.5q0 20-12 37.5T506-526q-44 39-54 59t-10 73Zm38 314q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg> Watch Video Tutorial
                        </button>
                        <button class="cursor-pointer w-full flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#16a34a"><path d="M440-280H280q-83 0-141.5-58.5T80-480q0-83 58.5-141.5T280-680h160v80H280q-50 0-85 35t-35 85q0 50 35 85t85 35h160v80ZM320-440v-80h320v80H320Zm200 160v-80h160q50 0 85-35t35-85q0-50-35-85t-85-35H520v-80h160q83 0 141.5 58.5T880-480q0 83-58.5 141.5T680-280H520Z"/></svg> Share Project
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
                            <h1 class="text-3xl font-bold text-gray-900">{{ $project->name }}</h1>
                            <div class="mt-2 flex items-center">

                                <x-project-label :skill_level="$project->skill_level_required">{{ $project->skill_level_required }}</x-project-label>

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
                            <span class="text-sm text-gray-500 mr-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="24px" fill="#16a34a"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg> {{ $project->time }}
                            </span>
                            <span class="text-sm text-gray-500 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#16a34a"><path d="M168-240q-29.7 0-50.85-21.15Q96-282.3 96-312v-336q0-29.7 21.15-50.85Q138.3-720 168-720h624q29.7 0 50.85 21.15Q864-677.7 864-648v336q0 29.7-21.15 50.85Q821.7-240 792-240H168Zm0-72h624v-336H672v168h-72v-168h-84v168h-72v-168h-84v168h-72v-168H168v336Zm120-168h72-72Zm156 0h72-72Zm156 0h72-72Zm-120 0Z"/></svg> 48" x 60"
                            </span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h2 class="text-xl font-medium text-gray-900">Description</h2>
                        <p class="mt-2 text-gray-600">
                           {{ $project->description }}
                        </p>
                    </div>

                    <div class="mt-8">
                        <h2 class="text-xl font-medium text-gray-900">Materials</h2>
                        <ul class="mt-2 space-y-2 text-gray-600">
                            @php
                                $materials = explode(',', $project->materials);
                            @endphp

                            @foreach ($materials as $material)
                                <li class="flex items-start">
                                    <i class="fas fa-check text-primary-500 mt-1 mr-2"></i>
                                    <span>{{ trim($material) }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mt-8 ">
                        <h2 class="text-xl font-medium text-gray-900">Instructions</h2>
{{--                        <div class="mt-4 space-y-6">--}}
{{--                            <div>--}}
{{--                                <h3 class="text-lg font-medium text-gray-900">Step 1: Make the Granny Squares</h3>--}}
{{--                                <p class="mt-2 text-gray-600">--}}
{{--                                    You will need to make 80 granny squares (8 rows of 10 squares). Each square should measure approximately 6" x 6".--}}
{{--                                </p>--}}
{{--                                <ol class="mt-2 space-y-2 text-gray-600 list-decimal list-inside pl-4">--}}
{{--                                    <li>Chain 4, join with a slip stitch to form a ring.</li>--}}
{{--                                    <li>Chain 3 (counts as first double crochet), work 2 double crochet into the ring.</li>--}}
{{--                                    <li>Chain 2, work 3 double crochet into the ring.</li>--}}
{{--                                    <li>Repeat step 3 two more times.</li>--}}
{{--                                    <li>Chain 2, join with a slip stitch to the top of the beginning chain 3.</li>--}}
{{--                                    <li>For round 2, slip stitch to the first chain-2 space, chain 3, work 2 double crochet, chain 2, work 3 double crochet in the same chain-2 space.</li>--}}
{{--                                    <li>*In the next chain-2 space, work 3 double crochet, chain 2, work 3 double crochet.* Repeat from * to * 2 more times.</li>--}}
{{--                                    <li>Join with a slip stitch to the top of the beginning chain 3.</li>--}}
{{--                                    <li>Continue in this pattern for 4 rounds total, changing colors as desired.</li>--}}
{{--                                </ol>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="mt-4 space-y-6">
                            <div>
                                <p class="mt-2 text-gray-600">
                                    {{ $project->instructions }}
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    </div>
</x-layouts>
