<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ishonch') }}</title>
    <link rel="shortcut icon" href="/favicon.png">
    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @if(file_exists(public_path('mix-manifest.json')))
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif
    {{-- <script src="https://js.stripe.com/v3/"></script> --}}



    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/catalog.css')}}">
    <link rel="stylesheet" href="{{asset('css/kartochka.css')}}">
    <link rel="stylesheet" href="{{asset('css/korzinka.css')}}">
    <link rel="stylesheet" href="{{asset('css/comporison.css')}}">
    <link rel="stylesheet" href="{{asset('css/glide.core.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/glide.theme.min.css')}}">
</head>
<body>
    <div id="app">
        <avored-layout inline-template>
            <div>
                <!-- category-->
            @include('partials.nav')
                <!-- category-->
                <div class="container">
                    <div class="categories">
                        <?php

                        $categories = \AvoRed\Framework\Database\Models\Category::where([
                            ['parent_id', null],
                            ['image','<>', null],
                            ])->get();

                        ?>
                        <ul class="categories__list">

                            @foreach($categories as $cat)
                                <li class="categories__item">
                                    <a onclick="dropDown(<?=$cat['id']?>)" href="#" class="categories__link">
                                        <div class="categories__img-wrapper">

                                            <img src="{{$cat['image']}}" width="32" height="32" alt=""
                                                 class="categories__img">
                                        </div>
                                        <p class="categories__title">{{$cat['name']}}</p>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <!-- Categories end -->

                <!-- Dropdown start -->
                <?php foreach($categories as $cat)
                {
                ?>


                <div id="dropdown<?=$cat['id']?>" class="subcategory__dropdown">
                    <div class="container">
                        <div class="subcategory__container">
                            <div class="subcategory__wrapper">

                                <h4 class="subcategory__title"><?=$cat['name']?></h4>
                                <ul class="subcategory__list">
                                    <?php

                                    $subcategories = \AvoRed\Framework\Database\Models\Category::where('parent_id','<>',null)->get();


                                    foreach ($subcategories as $sub){
                                    ?>


                                    <li class="subcategory__item">
                                        <a href="/category/<?=$sub['slug']?>" class="subcategory__link"><?=$sub['name']?></a>
                                    </li>
                                    <?php } ?>

                                </ul>
                            </div>
                            <div class="subcategory__ad">
                                <img src="{{asset('/img/8.svg')}}" alt="ad" class="subcategory__img">
                                <div class="subcategory__ad-info">
                                    <div class="subcategory__sale-box">

                                        <img src="{{asset('/img/sale.svg')}}" alt="sale"
                                             class="subcategory__sale-img">
                                        <p class="subcategory__sale-text">Хит продаж</p>
                                    </div>
                                    <p class="subcategory__ad-text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
                                    <p class="subcategory__ad-price">от 300,000 сум.</p>
                                    <p class="subcategory__ad-price-blur">3.000.000 сум.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>


                    <div class="mt-5">
                    @include('partials.breadcrumb')
                    <div class="bg-white container mx-auto">
                        <div class="flex">
                            <div class="flex-1 ml-5">

                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                
                <div  class="border-t">
                    @include('partials.footer')
                </div>
            </div>
        </avored-layout>
    </div>
   
    @if(file_exists(public_path('mix-manifest.json')))
        <script src="{{ mix('js/avored.js') }}"></script>
    @else
        <script src="{{ asset('js/avored.js') }}"></script>
    @endif
    
    @stack('scripts')
    
    @if(file_exists(public_path('mix-manifest.json')))
        <script src="{{ mix('js/app.js') }}"></script>
    @else
        <script src="{{ asset('js/app.js') }}"></script>
    @endif
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script>
        var config1= {
            type: 'carousel',
            perView: 6
        }
        new Glide('.popular', config1).mount();

        var config = {
            type: 'carousel'
        }
        new Glide('.glide', config).mount()
    </script>
</body>
</html>
