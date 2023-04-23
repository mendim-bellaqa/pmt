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
                    <h2 class="text-lg font-semibold text-gray-700 capitalize">Create New task for project</h2>
                    <form method="POST" action="{{ route('tasks.store', $project->id) }}">
                    @csrf

                    <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                    <label for="deadline">Deadline</label>
                    <input type="datetime-local" name="deadline" id="deadline" class="form-control" required>
                    </div>

                    <input type="hidden" name="project_id" value="{{ $project->id }}">

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
          </div>
          </div>
          </div>

          </section>
      </div>
    </main>
  </div>

@if(session('success'))
  <script>
    alert('{{ session('success') }}');
    window.location = '{{ route('dashboard') }}';
  </script>
@endif

@endsection
