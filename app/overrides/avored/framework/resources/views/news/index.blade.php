@extends('avored::layouts.app')
@section('content')
    <h1 class="mx-4 px-4 my-3">
        <div class="text-gray-800 flex items-center">
            <div class="text-xl text-red-700 font-semibold">
                Новости
            </div>
            <div class="ml-auto"><a href="{{route('admin.news.create')}}"
                                    class="px-4 py-2 font-semibold leading-7 text-white hover:text-white bg-red-600 rounded hover:bg-red-700">
                    <svg fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5 inline-block text-white">
                        <path d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z"></path>
                    </svg>
                    Создать
                </a></div>
        </div>
    </h1>
    <div class="rounded p-5 mx-3 my-3 bg-white"><!---->
        <div>
            <div>
                <div>
                    <div class="flex items-center">
                        <div class="ml-auto">
                            <div class="mb-2 relative flex sm:flex-row flex-col">
                                <div class="block relative">
                                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                            <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">

                                            </path>
                                        </svg>
                                    </span>
                                    <input placeholder="Search"
                                           class="appearance-none rounded-l border-2 border-gray-400 block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none">
                                </div>
                                <div class="flex flex-row mb-1 sm:mb-0">
                                    <button type="button"
                                            class="px-2 border-none rounded-r active:outline-none flex py-2 bg-gray-400">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                             class="h-6 pt-1 w-6 text-gray-600">
                                            <path d="M12 12l8-8V0H0v4l8 8v8l4-4v-4z" fill-rule="evenodd">

                                            </path>
                                        </svg>
                                        <span class="ml-1 text-gray-700">Filter</span></button>
                                </div><!----></div>
                        </div>
                    </div>
                    <table class="mt-3 w-full">
                        <thead class="bg-gray-700 text-white">
                        <tr>
                            <th class="px-6 py-3 border-b text-left border-gray-200 text-xs font-medium uppercase">ID
                            </th>
                            <th class="px-6 py-3 border-b text-left border-gray-200 text-xs font-medium uppercase">
                                Титул
                            </th>
                            <th class="px-6 py-3 border-b text-left border-gray-200 text-xs font-medium uppercase">
                                Текст
                            </th>
                            <th class="px-6 py-3 border-b text-left border-gray-200 text-xs font-medium uppercase">
                                Изображения
                            </th>
                            <th class="px-6 py-3 border-b text-left border-gray-200 text-xs font-medium uppercase">
                                Смотрел
                            </th><!---->
                            <th class="px-6 py-3 border-b text-left border-gray-200 text-xs font-medium uppercase">
                                Лайки
                            </th>
                            <th class="px-6 py-3 border-b text-left border-gray-200 text-xs font-medium uppercase">
                                Дизлайки
                            </th>
                            <th class="px-6 py-3 border-b text-left border-gray-200 text-xs font-medium uppercase">
                                Создан
                            </th>
                            <th class="px-6 py-3 border-b text-left border-gray-200 text-xs font-medium uppercase">
                                Изменить
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white">
                        @foreach($news as $new)
                        <tr>
                            <td class="px-6 py-4 text-sm leading-5 border-b border-gray-200">{{$new['id']}}</td>
                            <td class="px-6 py-4 text-sm leading-5 border-b border-gray-200">{{$new['header']}}</td>
                            <td class="px-6 py-4 text-sm leading-5 border-b border-gray-200">{{$new['texts']}}</td>
                            <td class="px-6 py-4 text-sm leading-5 border-b border-gray-200">{{$new['image_path']}}</td>
                            <td class="px-6 py-4 text-sm leading-5 border-b border-gray-200">{{$new['watched']}}</td>
                            <td class="px-6 py-4 text-sm leading-5 border-b border-gray-200">{{$new['like']}}</td>
                            <td class="px-6 py-4 text-sm leading-5 border-b border-gray-200">{{$new['dislike']}}</td>
                            <td class="px-6 py-4 text-sm leading-5 border-b border-gray-200">{{$new['created_at']}}</td>
                            <td class="px-6 py-4 text-sm leading-5 border-b border-gray-200">
                                <div class="flex items-center"><a href="{{route('admin.news.edit',[$new['id']])}}">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                            <path d="M6.3 12.3l10-10a1 1 0 011.4 0l4 4a1 1 0 010 1.4l-10 10a1 1 0 01-.7.3H7a1 1 0 01-1-1v-4a1 1 0 01.3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 012 0v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2h6a1 1 0 010 2H4v14h14v-6z"
                                                  class="heroicon-ui"></path>
                                        </svg>
                                    </a>
                                    <button type="button">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                            <path d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 012 2v2h5a1 1 0 010 2h-1v12a2 2 0 01-2 2H6a2 2 0 01-2-2V8H3a1 1 0 110-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 011 1v6a1 1 0 01-2 0v-6a1 1 0 011-1zm4 0a1 1 0 011 1v6a1 1 0 01-2 0v-6a1 1 0 011-1z"
                                                  class="heroicon-ui"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </div>
@endsection