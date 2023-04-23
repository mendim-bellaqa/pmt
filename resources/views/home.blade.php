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
