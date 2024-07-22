@extends('web.client.layouts.blank')

@section('title', 'Home | Your E-library')

@section('description',
    'Welcome to our E-library. Find a wide range of books, articles, and resources to enhance your
    knowledge.')

@section('keywords', 'home, E-library, books, articles, resources, knowledge')

@section('canonical', 'https://www.your-website.com/home')


@section('content')

<div class="w-full h-screen grid aos-list  text-left bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <iframe class="w-full h-[100%]" src="{{ asset('pdf.pdf') }}" frameborder="0"></iframe>

    </div>

@endsection

@section('scripts')



@endsection
