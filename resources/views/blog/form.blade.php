<form action="" method="post" class="mt-6">
    @csrf
    <div>
        <label for="title" class="block mb-1 text-sm text-gray-800">Titre</label>
        <input type="text" name="title" value="{{  old('title', $post->title) }}" class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40" >
        @error("title")
        <div class="inline-flex text-sm text-red-700"> {{ $message }}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
         @enderror
    </div>
    <div>
        <label for="slug" class="block mb-1 text-sm text-gray-600">Slug</label>
        <input type="text", id="slug" value="{{ old('slug', $post->slug) }}" class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
        @error("slug")
        <div class="inline-flex text-sm text-red-700"> {{ $message }}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
    </div>
     @enderror
    </div>
    <div>
        <label for="content" class="block mb-1 text-sm text-gray-600">Contenu</label>
        <textarea name="content" class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">{{ old('content', $post->content) }}</textarea>
        @error("content")
        <div class="inline-flex text-sm text-red-700"> {{ $message }}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
    </div>
     @enderror
    </div>
    <button class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-purple-700 rounded-md hover:bg-purple-600 focus:outline-none focus:bg-purple-600">
        @if ($post->id)
        Modifier
        @else
        Creer
        @endif</button>
</form>
