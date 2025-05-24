@props(['experience', 'url','title', 'description', 'time', 'image_url'])

<div class="bg-white overflow-hidden shadow rounded-lg transition-all duration-300 hover:shadow-xl">
    <div class="relative">
        <img class="h-48 w-full object-cover" src="{{ $image_url }}" alt="Crochet Tutorial">
        <div class="absolute top-0 right-0 m-2">
                        <x-tutorial-library.tutorial-tag experience="{{ $experience }}">{{ $experience }}</x-tutorial-library.tutorial-tag>
        </div>
    </div>
    <div class="p-6">
        <div class="flex justify-between items-center mb-2">
            <h3 class="text-lg font-medium text-gray-900"> {{ $title }}</h3>
        </div>
        <p class="mt-1 text-sm text-gray-500">{{ $description }}</p>
        <div class="mt-4 flex justify-between items-center">
                        <span class="text-sm text-gray-500">
                            <i class="far fa-clock mr-1"></i>{{ $time }}
                        </span>
            <a href="{{ $url  }}" class="text-primary-600 hover:text-primary-500 font-medium text-sm">
                View Tutorial
            </a>
        </div>
    </div>
</div>
