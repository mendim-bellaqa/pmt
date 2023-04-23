@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Welcome to our website</title>
    <!-- Import the Tailwind CSS stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-xhLX9jz0hq8rAeZEsMwbZriCfh30Qe1M84am51V7ktbzpjYz9i2vT8FzWw7dU6n/LU6GvU8UMxWpiRyN/TdX9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">  
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
  <body class="bg-gray-100">
  

    <main class="bg-black text-white">
      <div class="container mx-auto px-6 py-10">
        <h1 class="text-4xl font-bold text-gray-200 mb-8">Project management tool</h1>
        <p class="text-gray-600 leading-7 mb-8">
        PMT is a Laravel-based web app that streamlines project management with centralized collaboration, task assignments, progress tracking, and real-time updates. It also includes user authentication, RESTful APIs, caching, testing, and other customization features.
        </p>
        <a href="/about-us">
        <button class="flex items-center justify-center px-8 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Learn More
        </button>
        </a>
      </div>

      <section class="py-20 bg-gray-100">
    <div class="container mx-auto px-6 py-10">
      <h1 class="text-4xl font-bold text-black  mb-8">All Projects</h1>

      @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">Success!</strong>
          <span class="block sm:inline">{{ session('success') }}</span>
          <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 01.708 0l4.242 4.243a.5.5 0 010 .707l-4.242 4.243a.5.5 0 01-.708-.707l3.536-3.536-3.536-3.536a.5.5 0 010-.707zM5.652 5.652a.5.5 0 00-.708 0L.702 9.895a.5.5 0 000 .707l4.242 4.243a.5.5 0 00.708-.707L1.707 10l3.536-3.536a.5.5 0 000-.707z"/></svg>
          </span>
        </div>
      @endif


        <div class="grid grid-cols-3 gap-4">
          @foreach($projects as $project)
            <div class="bg-white shadow-lg rounded-lg p-4">
              <h3 class="font-bold text-xl text-black mb-2">{{ $project->name }}</h3>
              <p class="font-serif text-gray-700">{{ $project->description }}</p>
            </div>
          @endforeach
        </div>



              </div>
              </section>
              <!-- Load Vue and other scripts -->
              <script src="{{ mix('js/app.js') }}"></script>




      <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center gap-8">
            <div class="w-1/3">
              <img src="https://picsum.photos/800/600/?random=1" alt="Team photo" class="rounded-lg shadow-lg">
            </div>
            <div class="w-1/3">
              <img src="https://picsum.photos/800/600/?random=2" alt="Team photo" class="rounded-lg shadow-lg">
            </div>
            <div class="w-1/3">
              <img src="https://picsum.photos/800/600/?random=3" alt="Team photo" class="rounded-lg shadow-lg">
            </div>
            <div class="w-1/3">
              <img src="https://picsum.photos/800/600/?random=4" alt="Team photo" class="rounded-lg shadow-lg">
            </div>
            <div class="w-1/3">
              <img src="https://picsum.photos/800/600/?random=5" alt="Team photo" class="rounded-lg shadow-lg">
            </div>
            <div class="w-1/3">
              <img src="https://picsum.photos/800/600/?random=6" alt="Team photo" class="rounded-lg shadow-lg">
            </div>
          </div>
        </div>
      </section>

    </main>

    </body>
</html>

@endsection
