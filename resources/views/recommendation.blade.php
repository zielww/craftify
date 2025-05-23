<x-layouts>
    <!-- Header -->
    <x-header title="Your Personalized Recommendations" description="Intermediate Skill Level"></x-header>

    <!-- Filters -->
    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div class="mt-3 sm:mt-0 flex items-center">
                    <span class="text-sm font-medium text-gray-700 mr-2 w-20">Sort by:</span>
                    <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-400 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm rounded-md">
                        <option>Recommended</option>
                        <option>Newest</option>
                        <option>Most Popular</option>
                        <option>Highest Rated</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Recommendations -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Project Cards -->
            <x-tutorial-library.tutorial-card url="#" image_url="" experience="intermediate" title="Granny Square Blanket" description="Create a colorful and cozy blanket with the classic granny square pattern." time="20-25 hours"></x-tutorial-library.tutorial-card>

            <x-tutorial-library.tutorial-card url="#" image_url="" experience="intermediate" title="Market Tote Bag" description="A sturdy and stylish tote bag perfect for shopping or beach trips." time="8-10 hours"></x-tutorial-library.tutorial-card>

            <x-tutorial-library.tutorial-card url="#" image_url="" experience="intermediate" title="Fox Amigurumi" description="Create an adorable stuffed fox with intermediate amigurumi techniques." time="6-8 hours"></x-tutorial-library.tutorial-card>

            <x-tutorial-library.tutorial-card url="#" image_url="" experience="intermediate" title="Simple Cardigan" description="A comfortable and stylish cardigan perfect for layering." time="25-30 hours"></x-tutorial-library.tutorial-card>

            <x-tutorial-library.tutorial-card url="#" image_url="" experience="intermediate" title="Fox Amigurumi" description="Create an adorable stuffed fox with intermediate amigurumi techniques." time="6-8 hours"></x-tutorial-library.tutorial-card>

            <x-tutorial-library.tutorial-card url="#" image_url="" experience="intermediate" title="Fox Amigurumi" description="Create an adorable stuffed fox with intermediate amigurumi techniques." time="6-8 hours"></x-tutorial-library.tutorial-card>


        </div>


{{--        Pagination Here In the Future--}}
    </div>
</x-layouts>
