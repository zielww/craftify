<x-layouts>
    <!-- Header -->
   <x-header title="Tutorial Library" description="Learn essential stitches and techniques with our step-by-step tutorials"></x-header>

    <!-- Search and Filters -->
    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <div class="relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
                        </div>
                        <input type="text" class="p-2 focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 sm:text-sm border-gray-300 rounded-md" placeholder="Search tutorials...">
                    </div>
                </div>
                <div class="mt-4 md:mt-0 md:ml-4 flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3">
                    <select class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm rounded-md">
                        <option>All Levels</option>
                        <option>Beginner</option>
                        <option>Intermediate</option>
                        <option>Advanced</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Tutorial Categories -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        {{-- Basic Stitches--}}
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Basic Stitches</h2>
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            {{-- Basic Tutorial Cards--}}
            <x-tutorial-library.tutorial-card url="#" image_url="" experience="beginner" title="Chain Stitch" description="The foundation of most crochet projects. Learn how to create a perfect chain stitch." time="5 min"></x-tutorial-library.tutorial-card>
            <x-tutorial-library.tutorial-card url="#" image_url="" experience="beginner" title="Single Crochet" description="The foundation of most crochet projects. Learn how to create a perfect chain stitch." time="5 min"></x-tutorial-library.tutorial-card>
            <x-tutorial-library.tutorial-card url="#" image_url="" experience="beginner" title="Double Crochet" description="Learn this taller stitch that creates a looser, more open fabric." time="10 min"></x-tutorial-library.tutorial-card>
        </div>

        {{-- Intermediate Techniques--}}
        <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-6">Intermediate Techniques</h2>
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            {{-- Intermediate Tutorial Cards--}}
            <x-tutorial-library.tutorial-card url="#" image_url="" experience="intermediate" title="Granny Square" description="Create the classic granny square pattern used in blankets and other projects." time="15 min"></x-tutorial-library.tutorial-card>
            <x-tutorial-library.tutorial-card url="#" image_url="" experience="intermediate" title="Magic Circle" description="Master the magic circle technique for starting amigurumi and other round projects." time="12 min"></x-tutorial-library.tutorial-card>
            <x-tutorial-library.tutorial-card url="#" image_url="" experience="intermediate" title="Color Change Techniques" description="Learn different methods for changing colors smoothly in your crochet projects." time="18 min"></x-tutorial-library.tutorial-card>
        </div>

        {{-- Advanced Techniques--}}
        <h2 class="text-2xl font-bold text-gray-900 mt-12 mb-6">Advanced Techniques</h2>
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            {{-- Advanced Tutorial Cards--}}
            <x-tutorial-library.tutorial-card url="#" image_url="" experience="advanced" title="Tunisian Crochet" description="Learn this unique technique that combines elements of both knitting and crochet." time="25 min"></x-tutorial-library.tutorial-card>
            <x-tutorial-library.tutorial-card url="#" image_url="" experience="advanced" title="Overlay Crochet" description="Create stunning textured designs with this advanced technique for mandala patterns." time="30 min"></x-tutorial-library.tutorial-card>
            <x-tutorial-library.tutorial-card url="#" image_url="" experience="advanced" title="Broomstick Lace" description="Master this vintage technique that creates beautiful lace-like patterns." time="22 min"></x-tutorial-library.tutorial-card>
        </div>
    </div>

</x-layouts>
