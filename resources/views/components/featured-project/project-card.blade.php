@props(['experience', 'title', 'description', 'image_url', 'project_url'])

<div class="bg-white overflow-hidden shadow rounded-lg">
    <div class="relative pb-2/3">
        <img class="h-48 w-full object-cover" src="{{ $image_url }}" alt="{{ $title }}">
    </div>
    <div class="px-4 py-5 sm:p-6">
                       <x-featured-project.experience-tag experience="{{ $experience }}">{{ $experience }}</x-featured-project.experience-tag>
        <h3 class="mt-2 text-lg font-medium text-gray-900">{{ $title }}</h3>
        <p class="mt-1 text-sm text-gray-500">{{ $description }}</p>
        <div class="mt-4">
            <a href="{{ $project_url }}" class="text-primary-600 hover:text-primary-500">View Project <i class="fas fa-arrow-right ml-1"></i></a>
        </div>
    </div>
</div>
