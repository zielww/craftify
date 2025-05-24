@props(['projects'])

<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">Featured Projects</h2>
            <p class="mt-4 text-lg text-gray-500">Explore some of our most popular crochet projects</p>
        </div>

        <div class="mt-10 grid gap-5 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Beginner project card -->
            @foreach($projects as $project)
                <x-featured-project.project-card project_url="{{ url('/project', [$project->id]) }}" image_url="{{ $project->image_url }}" experience="{{ $project->skill_level_required }}" title="{{ $project->name }}" description="{{ Str::limit($project->description, 120) }}"></x-featured-project.project-card>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <a href="/tutorial" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700">
                View All Tutorials
            </a>
        </div>
    </div>
</div>
