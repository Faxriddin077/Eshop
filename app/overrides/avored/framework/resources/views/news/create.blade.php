@extends('avored::layouts.app')
@section('content')

    <form method="post" action="{{ route('admin.news.store') }}">
        @csrf
        <div class="w-full">
            <label class="block text-sm leading-5 text-gray-500">
                Титул Новости
            </label>
            <div class="mt-1">
                <input type="text" name="header"
                       class="fpx-3 flex-1 w-full py-2 outline-none shadow-sm focus:shadow focus:border rounded border block border-gray-400">
            </div>
            <label class="block text-sm leading-5 text-gray-500">
                Текст Новости
            </label>
            <div class="mt-1">
                <textarea  rows="7" name="texts"
                          class="fpx-3 flex-1 w-full py-2 outline-none shadow-sm focus:shadow focus:border rounded border block border-gray-400">
                </textarea>
            </div>
            <label class="block text-sm leading-5 text-gray-500">
                Изображения Новости
            </label>
            <div class="mt-1">
                <input type="file" name="image_path"
                       class="fpx-3 flex-1 w-full py-2 outline-none shadow-sm focus:shadow focus:border rounded border block border-gray-400">
            </div>
        </div>
        <div class="mt-3 py-3">
            <button type="submit"
                    class="px-6 py-3 font-semibold leading-7  text-white hover:text-white bg-red-600 rounded hover:bg-red-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"
                     class="h-4 inline-flex w-4">
                    <path d="M0 2C0 .9.9 0 2 0h14l4 4v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5 0v6h10V2H5zm6 1h3v4h-3V3z"></path>
                </svg>
                <span class="ml-3">Сохранить</span></button>
            <a href="{{route('admin.news.index')}}"
               class="px-6 py-3 font-semibold inline-block text-white leading-7 hover:text-white bg-gray-500 rounded hover:bg-gray-600"><span
                        class="leading-7">
                            Отмена
                        </span></a></div>
    </form>
@endsection