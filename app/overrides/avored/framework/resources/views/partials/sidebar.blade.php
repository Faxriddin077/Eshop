<div class="bg-white border-r min-h-screen"> 
    <div class="flex items-center">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center mt-2">
            <img class="h-12 block ml-6 w-12" src="{{ asset('vendor/avored/images/logo_only.svg') }}" />
            <div class="text-xl text-red-600" :class="sidebar ? 'hidden' : ''">AvoRed</div>
        </a>
    </div>

    <nav class="mt-10">
        @foreach ($adminMenus as $key => $adminMenu)
            <avored-menu :sidebar="sidebar" :menu="{{ json_encode($adminMenu) }}"></avored-menu>
        @endforeach
          <a href="{{route('admin.news.index')}}">
            <div class="relative menu-item"><button class="w-full menu-item flex justify-between items-center py-3 px-6 text-gray-600 cursor-pointer hover:bg-gray-100 hover:text-gray-700 focus:outline-none"><span class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" icon="cog" class="menu-icon fill-current h-4 w-4"><path d="M3.94 6.5L2.22 3.64l1.42-1.42L6.5 3.94c.52-.3 1.1-.54 1.7-.7L9 0h2l.8 3.24c.6.16 1.18.4 1.7.7l2.86-1.72 1.42 1.42-1.72 2.86c.3.52.54 1.1.7 1.7L20 9v2l-3.24.8c-.16.6-.4 1.18-.7 1.7l1.72 2.86-1.42 1.42-2.86-1.72c-.52.3-1.1.54-1.7.7L11 20H9l-.8-3.24c-.6-.16-1.18-.4-1.7-.7l-2.86 1.72-1.42-1.42 1.72-2.86c-.3-.52-.54-1.1-.7-1.7L0 11V9l3.24-.8c.16-.6.4-1.18.7-1.7zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path></svg> <span class="ml-6 menu-label font-medium">
                Новости
            </span></span> </button> <!----></div>
          </a>
    </nav>

</div>
