@extends('layouts.app')

@section('content')
  <div class="container mx-auto px-6 py-10">
    <h1 class="text-4xl font-bold text-gray-800 mb-8">Contact Us</h1>
    <form action="{{ route('contact.submit') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="name">
          Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Your Name" required>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="email">
          Email
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Your Email" required>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="message">
          Message
        </label>
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" placeholder="Your Message" required></textarea>
      </div>
      <div class="mb-4">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Send Message
        </button>
      </div>
    </form>
  </div>
@endsection
