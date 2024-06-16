@extends('templates.index_layout')
@section('content')

<div class="pt-32 lg:mx-0 md:mx-12 sm:mx-6">
    <div class="w-full max-w-3xl mx-auto">
        <div class="">
            <h1 class="title text-[44px] leading-[55px] font-bold text-black">
                {{ $article ? html_entity_decode($article->title) : ''}}
            </h1>
            <div class="mt-8">
                <p class="font-medium text-base text-black">{{ $article ? html_entity_decode($article->writer) : ''}}</p>
                <p class="text-sm text-black">{{ $article ? date('d M Y', strtotime($article->created_at)) : ''}}</p>
            </div>
            <div class="border-t border-gray-200 mt-5"></div>
        </div>

        <div class="mt-10">
            <img src="{{ $article ? asset('cover_article/' . $article->cover) : ''}}" alt="" class="w-full h-96 rounded-lg object-cover">
        </div>

        <div class="mt-5">
            <p class="text-lg text-black mt-5">
                {!! $article ? nl2br($article->content) : '' !!}
            </p>
        </div>
    </div>
</div>

@endsection