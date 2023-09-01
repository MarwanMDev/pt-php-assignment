@extends('layout')

@section('title', 'PayTabs | PHP Assignment')

@section('content')
<div class="h-screen flex flex-col items-center justify-center bg-gray-900">
  <div class="flex flex-col justify-center items-center">
    <img src="{{ asset('PayTabs-Logos_English-Light.png') }}" />
    <h5 class="text-white mb-10 text-3xl">PHP Assignment</h5>
  </div>
  <div>
    <form class="w-screen max-w-3xl" id='main_container'>
      <div class="mb-6 cat_container_1">
        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Category</label>
        <select id="category" name="category" onchange="showSubCategories(this, 1)" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected disabled>Please select category</option>
          @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->title }}</option>
          @endforeach
        </select>
      </div>
  </div>
  </form>
</div>
@endsection