@extends('templates.index_layout')
@section('content')

<section>
    <div class="w-full mx-auto max-w-screen-xl">
        <div class="mt-28">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-6xl font-bold text-black dark:text-black">
                        Urban Farming Blog
                    </h1>
                    <p class="text-base text-gray-400 mt-5">Kumpulan artikel dan informasi seputar urban farming.</p>
                    <form action="">
                    <button type="button" class="focus:outline-none mt-10 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Jelajahi</button>
                    </form>
                </div>
                <div>
                    <img src="{{asset('assets/raffiahmad/hehe.png')}}" alt="" class="w-96">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-20">
    <div class="bg-gray-100 py-20">
        <div class="">
            <div class="">
               <h2 class="text-4xl font-bold text-black dark:text-black text-center">
                Artikel Lainnya
               </h2>
               <p class="text-base font-semibold text-gray-400 text-center mt-2">Tambah pengetahuanmu seputar urban farming dengan membaca artikel UFARMERS.</p>
            </div>
        </div>
        <div class="w-full mx-auto max-w-screen-xl pt-20">
            <div class="flex flex-wrap items-start justify-start gap-x-16 gap-y-14">
                @foreach ($article as $a)
                <div class="w-96 bg-white border border-gray-200 rounded-lg dark:bg-white shadow-[0_8px_30px_rgb(0,0,0,0.12)]">
                    <a href="#">
                        <img class="rounded-t-lg w-full max-h-60 object-cover" src="{{asset('cover_article/' . $a->cover)}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-800 line-clamp-2 truncate text-balance">{{$a->title ? $a->title : ''}}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2 truncate text-balance">{{$a->content ? $a->content : ''}}</p>
                        <a href="/detail/{{$a->id ? $a->id : ''}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-600 dark:bg-green-600 dark:hover:bg-green-600 dark:focus:ring-green-600">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection