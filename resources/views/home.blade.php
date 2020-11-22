@extends('layouts.app')



@section('breadcrumb')
  <div class="block">
      <div>{{ __('Home') }}</div>
  </div>

@endsection


@section('content')

  <div class="container m-auto">
    {{-- {!! $page ? $page->getContent() : '' !!} --}}

    <!-- slideshow start -->
      <div class="slideshow">
        <div class="glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide slideshow__item">
                <div class="slideshow__text-wrapper">
                  <h2 class="slideshow__title">Великолепные скиди на технику Apple.</h2>
                  <p class="slideshow__text">Весь ассортимент техники Apple со скидкой до -45% *</p>
                  <a href="#" class="slideshow__btn">Узнать подробнее</a>
                </div>
                <div class="slideshow-box"></div>
              </li>
              <li class="glide__slide slideshow__item">
                <div class="slideshow__text-wrapper">
                  <h2 class="slideshow__title">Великолепные скиди на технику Apple.</h2>
                  <p class="slideshow__text">Весь ассортимент техники Apple со скидкой до -45% *</p>
                  <a href="#" class="slideshow__btn">Узнать подробнее</a>
                </div>
                <div class="slideshow-box"></div>
              </li>
              <li class="glide__slide slideshow__item">
                <div class="slideshow__text-wrapper">
                  <h2 class="slideshow__title">Великолепные скиди на технику Apple.</h2>
                  <p class="slideshow__text">Весь ассортимент техники Apple со скидкой до -45% *</p>
                  <a href="#" class="slideshow__btn">Узнать подробнее</a>
                </div>
                <div class="slideshow-box"></div>
              </li>
            </ul>
          </div>
          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
              <img src="{{asset('img/arrowright.svg')}}" alt="arrow" class="slideshow__arrow slideshow__arrow-right">
            </button>
            <button class="slide-arrow glide__arrow glide__arrow--right" data-glide-dir=">">
              <img src="{{asset('img/arrowleft.svg')}}" alt="arrow" class="slideshow__arrow slideshow__arrow-left">
            </button>
          </div>
        </div>
      </div>
      <!-- slideshow end -->


    @if ($heroProduct)


<div class="popular-products">
  <p class="popular-products__heading">Самое популярное</p>
  <div class="popular glide--ltr glide--carousel glide--swipeable">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides products__list" style="transition: transform 0ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 3770px; transform: translate3d(-1260px, 0px, 0px);">
        <li class="glide__slide products__item glide__slide--clone" style="width: 200px; margin-right: 5px;">
          <img src="img/popular1.svg" alt="laptop" class="products__img">
          <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li><li class="glide__slide products__item glide__slide--clone" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular2.svg" alt="phone" class="products__img">
          <p class="products__text">Apple iPad Pro 11" 256GB Wi-Fi Cell Space Grey</p>
          <p class="products__price">от 500,000 сум.</p>
          <p class="products__price-blur">16.270.000 cум.</p>
        </li><li class="glide__slide products__item glide__slide--clone" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular3.svg" alt="phone" class="products__img">
          <p class="products__text">Apple iPhone 11 128GB Green (MWM62RU/A)</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li><li class="glide__slide products__item glide__slide--clone" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular4.svg" alt="phone" class="products__img">
          <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li><li class="glide__slide products__item glide__slide--clone" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/image.svg" alt="phone" class="products__img">
          <p class="products__text">Наушники Bluetooth Beats Studio3 Wireless Blue</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li><li class="glide__slide products__item glide__slide--clone" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular6.svg" alt="phone" class="products__img">
          <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li><li class="glide__slide products__item glide__slide--active" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular1.svg" alt="laptop" class="products__img">
          <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li>
        <li class="glide__slide products__item" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular2.svg" alt="phone" class="products__img">
          <p class="products__text">Apple iPad Pro 11" 256GB Wi-Fi Cell Space Grey</p>
          <p class="products__price">от 500,000 сум.</p>
          <p class="products__price-blur">16.270.000 cум.</p>
        </li>
        <li class="glide__slide products__item" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular3.svg" alt="phone" class="products__img">
          <p class="products__text">Apple iPhone 11 128GB Green (MWM62RU/A)</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li>
        <li class="glide__slide products__item" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular4.svg" alt="phone" class="products__img">
          <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li>
        <li class="glide__slide products__item" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/image.svg" alt="phone" class="products__img">
          <p class="products__text">Наушники Bluetooth Beats Studio3 Wireless Blue</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li>
        <li class="glide__slide products__item" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular6.svg" alt="phone" class="products__img">
          <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li>
        <li class="glide__slide products__item glide__slide--clone" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular1.svg" alt="laptop" class="products__img">
          <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li><li class="glide__slide products__item glide__slide--clone" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular2.svg" alt="phone" class="products__img">
          <p class="products__text">Apple iPad Pro 11" 256GB Wi-Fi Cell Space Grey</p>
          <p class="products__price">от 500,000 сум.</p>
          <p class="products__price-blur">16.270.000 cум.</p>
        </li><li class="glide__slide products__item glide__slide--clone" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular3.svg" alt="phone" class="products__img">
          <p class="products__text">Apple iPhone 11 128GB Green (MWM62RU/A)</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li><li class="glide__slide products__item glide__slide--clone" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/popular4.svg" alt="phone" class="products__img">
          <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li><li class="glide__slide products__item glide__slide--clone" style="width: 200px; margin-left: 5px; margin-right: 5px;">
          <img src="img/image.svg" alt="phone" class="products__img">
          <p class="products__text">Наушники Bluetooth Beats Studio3 Wireless Blue</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li><li class="glide__slide products__item glide__slide--clone" style="width: 200px; margin-left: 5px;">
          <img src="img/popular6.svg" alt="phone" class="products__img">
          <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
          <p class="products__price">от 300,000 сум.</p>
          <p class="products__price-blur">3.000.000 cум.</p>
        </li></ul>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow popular-glide__arrow--left" data-glide-dir="<">
          <img src="img/arrowright.svg" alt="arrow" class="slideshow__arrow slideshow__arrow-left">
        </button>
        <button class="slide-arrow glide__arrow popular-glide__arrow--right" data-glide-dir=">">
          <img src="img/arrowleft.svg" alt="arrow" class="slideshow__arrow slideshow__arrow-right">
        </button>
      </div>
    </div>
  </div>


</div>
        {{--
                <section class="text-gray-700 body-font">
                  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                      <h1 class="title-font text-re sm:text-4xl text-3xl mb-4 font-medium text-gray-700">
                        {{ $heroProduct->name }}
                      </h1>
                      <p class="leading-relaxed">
                        {{ $heroProduct->description }}
                      </p>
                      <div class="text-2xl text-red-700 font-semibold my-4">
                        {{ session()->get('default_currency')->symbol . number_format($heroProduct->price, 2) }}
                      </div>
                      <div class="flex justify-center">
                        <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">
                          Add To Cart
                        </button>
                        --}}{{-- <button class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg">Button</button> --}}{{--
                      </div>
                    </div>
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                      <img class="object-cover object-center rounded" alt="hero" src="/storage/{{ $heroProduct->mainImage->path }}"style="width: 250; height: 250;">

                    </div>
                  </div>
                </section>--}}


        <div class="container">
          <p class="best-suggestions__heading">Лучшие предложения</p>
          <div class="best-suggestions">
            <div class="best-suggestions__products">
              <div class="best-suggestions__big">
                <img style="width: 700px; height: auto" alt="hero" src="/storage/{{ $heroProduct->mainImage->path }}"  class="best-suggestions__big-img">
                <p class="best-suggestions__big-title"> {{ $heroProduct->name }}</p>
                <p class="best-suggestions__big-price"> {{ session()->get('default_currency')->symbol . number_format($heroProduct->price, 2) }}</p>
              </div>

              @endif
              <ul class="products__list">
                <li class="products__item">
                  <img src="img/best1.svg" alt="phone" class="products__img">
                  <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
                  <p class="products__price">от 300,000 сум.</p>
                  <p class="products__price-blur">3.000.000 cум.</p>
                </li>
                <li class="products__item">
                  <img src="img/best2.svg" alt="phone" class="products__img">
                  <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
                  <p class="products__price">от 300,000 сум.</p>
                  <p class="products__price-blur">3.000.000 cум.</p>
                </li>
                <li class="products__item">
                  <img src="img/best3.svg" alt="phone" class="products__img">
                  <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
                  <p class="products__price">от 300,000 сум.</p>
                  <p class="products__price-blur">3.000.000 cум.</p>
                </li>
                <li class="products__item">
                  <img src="img/best4.svg" alt="phone" class="products__img">
                  <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
                  <p class="products__price">от 300,000 сум.</p>
                  <p class="products__price-blur">3.000.000 cум.</p>
                </li>
                <li class="products__item">
                  <img src="img/best5.svg" alt="phone" class="products__img">
                  <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
                  <p class="products__price">от 300,000 сум.</p>
                  <p class="products__price-blur">3.000.000 cум.</p>
                </li>
                <li class="products__item">
                  <img src="img/best6.svg" alt="phone" class="products__img">
                  <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
                  <p class="products__price">от 300,000 сум.</p>
                  <p class="products__price-blur">3.000.000 cум.</p>
                </li>
                <li class="products__item">
                  <img src="img/best7.svg" alt="phone" class="products__img">
                  <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
                  <p class="products__price">от 300,000 сум.</p>
                  <p class="products__price-blur">3.000.000 cум.</p>
                </li>
                <li class="products__item">
                  <img src="img/best8.svg" alt="phone" class="products__img">
                  <p class="products__text">Apple iPhone 11 128GB Black (MWM02RU/A)</p>
                  <p class="products__price">от 300,000 сум.</p>
                  <p class="products__price-blur">3.000.000 cум.</p>
                </li>
              </ul>
            </div>

          </div>
        </div>
      <!--  -->
        <div class="sale">
          <ul class="sale__list">
            <li class="sale__item">
              <div class="sale__text-wrapper">
                <p class="sale__title">Великолепные скиди на технику Apple.</p>
                <p class="sale__text">Весь ассортимент техники Apple со скидкой до -45% *</p>
                <a href="#" class="sale__btn">Узнать подробнее</a>
              </div>
              <div class="sale__img-box-1"></div>
            </li>
            <li class="sale__item">
              <div class="sale__text-wrapper">
                <p class="sale__title">Великолепные скиди на технику Apple.</p>
                <p class="sale__text">Весь ассортимент техники Apple со скидкой до -45% *</p>
                <a href="#" class="sale__btn">Узнать подробнее</a>
              </div>
              <div class="sale__img-box-2"></div>
            </li>
          </ul>
        </div>










        <div class="popular-products">
          <p class="popular-products__heading">Это часто покупают</p>
          <div class="popular">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides products__list">
                @foreach ($products as $product)
                <li class="glide__slide products__item">
                  @include('category.card.product', ['product' => $product])
                </li>
                @endforeach
              </ul>
              <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow popular-glide__arrow--left" data-glide-dir="<">
                  <img src="img/arrowright.svg" alt="arrow" class="slideshow__arrow slideshow__arrow-left">
                </button>
                <button class="slide-arrow glide__arrow popular-glide__arrow--right" data-glide-dir=">">
                  <img src="img/arrowleft.svg" alt="arrow" class="slideshow__arrow slideshow__arrow-right">
                </button>
              </div>
            </div>
          </div>
        </div>


</div>
@endsection
