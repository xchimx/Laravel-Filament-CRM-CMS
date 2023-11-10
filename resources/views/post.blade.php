@extends('layouts.app')

@section('content')
    <!-- Post Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                @if(str_starts_with($post->thumbnail,'https'))
                    <img src="{{ $post->thumbnail }}">
                @else
                    <img src="{{ url('storage/'.$post->thumbnail) }}">
                @endif
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="/post/{{ $post->slug }}/{{ $post->id }}"
                   class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $post->category->name }}</a>
                <a href="/post/{{ $post->slug }}/{{ $post->id }}"
                   class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</a>
                <p href="/post/{{ $post->slug }}/{{ $post->id }}" class="text-sm pb-8">
                    <span class="font-semibold hover:text-gray-800">{{ $post->created_at->diffForHumans() }}</span>
                </p>
                <a href="{{ url('/') }}"
                   class="float-left text-blue-700 text-sm font-bold pb-4">@foreach($post->tags as $tag)
                        #{{ $tag }}
                    @endforeach</a>
                <p class="pb-3">{{ $post->content }}</p>
            </div>
        </article>

        <div class="w-full flex pt-6">
            <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center"><i class="inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/>
                        </svg>
                    </i>
                    Previous
                </p>
                <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
            </a>
            <a href="#" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i class="inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                        </svg>
                    </i></p>
                <p class="pt-2">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</p>
            </a>
        </div>

        <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
            <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1"
                     class="rounded-full shadow h-32 w-32">
            </div>
            <div class="flex-1 flex flex-col justify-center md:justify-start">
                <p class="font-semibold text-2xl">Author</p>
                <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non libero
                    suscipit suscipit eu eu urna.</p>
            </div>
        </div>
    </section>
@endsection
