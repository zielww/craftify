@props(['experience', 'title', 'description', 'url'])

<div class="bg-white overflow-hidden shadow rounded-lg">
    <div class="relative pb-2/3">
        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1601379327928-bedfaf9da2d0?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Crochet Amigurumi">
    </div>
    <div class="px-4 py-5 sm:p-6">
                       <x-featured-project.experience-tag experience="{{ $experience }}">{{ $experience }}</x-featured-project.experience-tag>
        <h3 class="mt-2 text-lg font-medium text-gray-900">{{ $title }}</h3>
        <p class="mt-1 text-sm text-gray-500">{{ $description }}</p>
        <div class="mt-4">
            <a href="{{ $url }}" class="text-primary-600 hover:text-primary-500">View Project <i class="fas fa-arrow-right ml-1"></i></a>
        </div>
    </div>
</div>
