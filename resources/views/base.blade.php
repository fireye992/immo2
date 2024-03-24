<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
</head>
<body>
    <nav class="bg-gray-800"x-data="{ open: false }">
    <!-- Conteneur du bouton hamburger -->
<div class="flex sm:hidden">
    <!-- Bouton hamburger -->
    <button @click="open = !open" class="text-white hover:text-white focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
    </button>
  </div>

  <!-- Menu déroulant -->
  <div :class="{'block': open, 'hidden': !open}" class="sm:hidden">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a href="{{ route('blog.index') }}" class="text-white block px-3 py-2 rounded-md text-base font-medium">Accueil</a>
      <a href="{{ route('blog.create') }}" class="text-white block px-3 py-2 rounded-md text-base font-medium">À propos</a>
      <a href="#" class="text-white block px-3 py-2 rounded-md text-base font-medium">Services</a>
      <a href="#" class="text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
    </div>
  </div>

        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="block lg:hidden h-8 w-auto" src="https://cdn.pixabay.com/photo/2016/11/18/23/38/child-1837375__340.png"  alt="Votre Logo">
                        <img class="hidden lg:block h-8 w-auto" src="https://cdn.pixabay.com/photo/2016/11/18/23/38/child-1837375__340.png"  alt="Votre Logo">
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <!-- Liens de navigation avec condition pour la classe active -->
                            {{-- <a href="{{ route('blog.index') }}" class="{{ Route::currentRouteName() == 'blog.index' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">Accueil</a>
                            <a href="/" class="{{ Route::currentRouteName() == 'blog.index' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">À propos</a>
                            <a href="/" class="{{ Route::currentRouteName() == 'services' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">Services</a>
                            <a href="/" class="{{ Route::currentRouteName() == 'contact' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">Contact</a> --}}
                            <a href="{{ route('blog.index') }}" @class(['bg-gray-900 text-white' => Route::currentRouteName() == 'blog.index', 'text-gray-300 hover:bg-gray-700 hover:text-white' => Route::currentRouteName() != 'blog.index']) px-3 py-2 rounded-md text-sm font-medium">Accueil</a>
                            <a href="{{ route('blog.create') }}" @class(['bg-gray-900 text-white' => Route::currentRouteName() == 'blog.create', 'text-gray-300 hover:bg-gray-700 hover:text-white' => Route::currentRouteName() != 'about']) px-3 py-2 rounded-md text-sm font-medium">À propos</a>
                            <a href="" @class(['bg-gray-900 text-white' => Route::currentRouteName() == 'services', 'text-gray-300 hover:bg-gray-700 hover:text-white' => Route::currentRouteName() != 'services']) px-3 py-2 rounded-md text-sm font-medium">Services</a>
                            <a href="" @class(['bg-gray-900 text-white' => Route::currentRouteName() == 'contact', 'text-gray-300 hover:bg-gray-700 hover:text-white' => Route::currentRouteName() != 'contact']) px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
    <div class="px-4 py-4 text-green-800 bg-green-300 rounded shadow-lg shadow-green-500/50" role="alert">
       {{ session('success') }}
    </div>
        @endif
     @yield('content')
  </div>
  @include('footer')
 </body>
</html>
