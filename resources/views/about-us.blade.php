
@extends('layouts.app')

@section('content')
  <div class="container mx-auto px-6 py-10">
    <main class="bg-gray-100">
      <div class="container mx-auto px-6 py-10">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Project management tool</h1>
          <!-- About Us Section -->
          <section class="py-20 bg-gray-100">
          <div class="container mx-auto px-4">
          <div class="flex flex-wrap -mx-4">
          <div class="w-full lg:w-1/2 px-4 mb-12 lg:mb-0">
          <img src="https://picsum.photos/800/600" alt="Team photo" class="rounded-lg shadow-lg">
          <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
          </div>
            <div class="w-full lg:w-1/2 px-4">
              <h2 class="text-4xl mb-4 font-bold">About Us</h2>
                <p class="mb-6 text-gray-700 leading-relaxed">
                          The PMT (Project Management Tool) is a web-based app developed with Laravel framework, providing teams with a centralized platform for project management. With PMT, users can collaborate, assign tasks, and track progress in real-time.

                          PMT centralizes the project management process, enabling users to create projects and tasks, assign team members, and set due dates. Progress can be monitored through a dashboard that displays completion status.

                          Team members can communicate using comments on tasks and projects, keeping everyone connected and informed. Real-time updates are provided on progress and task assignments.

                          PMT is highly customizable, featuring user authentication, RESTful APIs, caching, and testing. It streamlines project management, making it a must-have tool for teams looking to optimize their workflow.
                </p>
            </div>
          </div>
          </section>
      </div>
    </main>
  </div>
@endsection
