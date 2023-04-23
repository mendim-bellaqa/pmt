@extends('layouts.app')

@section('content')

  <div class="container mx-auto px-6 py-10">
    <main class="bg-gray-100">
      <div class="container mx-auto px-6 py-10">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Dashboard</h1>
          <!-- About Us Section -->
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
      </div>
    </main>
  </div>
@endsection