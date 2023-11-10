@extends('layouts.app')

@section('content')
    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        @foreach ($posts as $post)
            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="post/{{ $post->slug }}/{{ $post->id }}" class="hover:opacity-75">
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
                    <p href="/post/{{ $post->slug }}/{{ $post->id }}" class="text-sm pb-3">
                        <span class="font-semibold hover:text-gray-800">{{ $post->created_at->diffForHumans() }}</span>
                    </p>
                    <a href="/post/{{ $post->slug }}/{{ $post->id }}"
                       class="pb-6">{!! Str::limit($post->content, 150, ' ...') !!}</a>
                    <a href="/post/{{ $post->slug }}/{{ $post->id }}"
                       class="float-left text-blue-700 text-sm font-bold pb-4">@foreach($post->tags as $tag)
                            #{{ $tag }}
                        @endforeach</a>
                    <a href="/post/{{ $post->slug }}/{{ $post->id }}" class="uppercase text-gray-800 hover:text-black">Continue
                        Reading <i class="-mb-2 inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                        </i></a>
                </div>
            </article>
        @endforeach

        <!-- Pagination -->
        <div class="flex items-center py-8">
            <a href="#"
               class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
            <a href="#"
               class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
            <a href="#"
               class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next
                <i class="ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </i></a>
        </div>
    </section>
@endsection
