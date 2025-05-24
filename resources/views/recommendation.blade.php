<x-layouts>
    <!-- Header -->
    <x-header title="Your Personalized Recommendations" description="{{ $skill_level }} Skill Level"></x-header>

    <!-- Filters -->
    <div class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div class="mt-3 sm:mt-0 flex items-center">

                </div>
            </div>
        </div>
    </div>

    <!-- Recommendations -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl mb-4 font-bold text-neutral-900 mr-2">{{ $skill_level }} Tutorials</h1>
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Project Cards -->
            @foreach($projects as $project)
                <x-tutorial-library.tutorial-card :url="url('/project', [$project->id])" :image_url="$project->image_url" :experience="$project->skill_level_required" :title="$project->name" :description="Str::limit($project->description, 120)" :time="$project->time"></x-tutorial-library.tutorial-card>
            @endforeach
        </div>
        <div class="my-4 mx-auto max-w-7xl">
            {{ $projects->links() }}
        </div>


{{--        Pagination Here In the Future--}}
    </div>
</x-layouts>
