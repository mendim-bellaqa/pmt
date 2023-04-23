@extends('layouts.app')

@section('content')

  <div class="container mx-auto px-6 py-10">
    <main class="bg-gray-100">
      <div class="container mx-auto px-6 py-10">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Dashboard</h1>

        <a href="/admin/dashboard">
        <button class="flex items-center justify-center px-8 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          All projects
        </button>
        </a>
          <!-- About Us Section -->
          <section class="bg-gray-100">
          <div class="container mx-auto py-6">
          <div class="max-w-md mx-auto">
          <div class="px-6 py-4">
                    <h2 class="text-lg font-semibold text-gray-700 capitalize">Create New Project</h2>
                    <form action="{{ route('projects.store') }}" method="POST" class="mt-4">
                    @csrf
                    <div>
                              <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                              <input type="text" name="name" id="name" class="border-2 border-gray-400 p-2 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}" required autofocus>
                              @error('name')
                              <span class="text-sm text-red-500">{{ $message }}</span>
                              @enderror
                    </div>
                    <div class="mt-4">
                              <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                              <textarea name="description" id="description" rows="5" class="border-2 border-gray-400 p-2 w-full rounded-lg @error('description') border-red-500 @enderror" required>{{ old('description') }}</textarea>
                              @error('description')
                              <span class="text-sm text-red-500">{{ $message }}</span>
                              @enderror
                    </div>
                    <div class="mt-4">
                              <button type="submit" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Create Project</button>
                    </div>
                    </form>
          </div>
          </div>
          </div>

          </section>
      </div>
    </main>
  </div>
@endsection