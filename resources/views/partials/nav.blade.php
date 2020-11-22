<div class="site-header__container">
    <div class="container">
        <ul class="site-header__lang-list">
            <li class="site-header__lang-item">
                <a href="#" class="site-header__lang-link">Русский</a>
            </li> |
            <li class="site-header__lang-item">
                <a href="#" class="site-header__lang-link site-header__lang-link--blur">O'zbekcha</a>
            </li>
        </ul>
        <header class="site-header">
            <a href="{{route('home')}}" class="site-header__logo">
                <img src="{{asset('img/logo.svg')}}" alt="logo" class="site-header__logo-img" width="154" height="30">
            </a>
            <div class="site-header__location">
                <img src="{{asset('img/location.svg')}}" alt="location" class="site-header__location-icon">
                <p class="site-header__location-city">Ташкент</p>
            </div>
            <form action="" class="site-header__form" method="GET">
                <input type="search" name="search" class="site-header__search" placeholder="Введите поисковый запрос">
                <button class="site-header__form-btn" type="submit">
                    <img src="{{asset('img/Vector.svg')}}" alt="search" width="16" height="16" class="site-header__form-img">
                </button>
            </form>
            <ul class="site-header__list">
                <li class="site-header__item">
                    <a href="{{ route('compare.index') }}" class="site-header__link">
                        <img src="{{asset('img/weight.svg')}}" alt="sravnenie" class="site-header__img" width="24" height="24">
                        <p class="site-header__text">Сравнение</p>
                    </a>
                </li>
                <li class="site-header__item">
                    <a href="{{ route('wishlist.index') }}" class="site-header__link">
                        <img src="{{asset('img/love.svg')}}" alt="love" class="site-header__img" width="24" height="24">
                        <p class="site-header__text">Избранное</p>
                    </a>
                </li>
                <li class="site-header__item">
                    <a href="{{route('cart.show')}}" class="site-header__link">
                        <img src="{{asset('img/korzina.svg')}}" alt="korzina" class="site-header__img" width="24" height="24">
                        <p class="site-header__text">Корзина</p>
                    </a>
                </li>
                <li class="site-header__item">
                    <a href="{{route('account.edit')}}" class="site-header__link">
                        <img src="{{asset('img/profile.svg')}}" alt="profile" class="site-header__img" width="24" height="24">
                        <p class="site-header__text">Войти</p>
                    </a>
                </li>
            </ul>
        </header>
    </div>
</div>
<!-- Site Header end -->
{{--
<header class="text-gray-700 px-6 border-b">
  <div class="mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="{{ route('home') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img class="w-10 h-10 text-white"
        src="{{ asset('images/logo.svg') }}" />
      <span class="ml-3 text-red-700 text-xl">AvoRed</span>
    </a>

    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        @foreach ($menus as $menu)
            <a href="{{ $menu->url }}" class="mr-5 hover:text-gray-900">
                {{ $menu->name }}
            </a>
        @endforeach
    </nav>
  </div>
</header>
--}}
