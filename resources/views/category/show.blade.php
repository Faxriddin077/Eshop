@extends('layouts.app')


@section('breadcrumb')






<div class="flex mb-2">
    <div>
      <a href="{{ route('home') }}" class="text-sm text-gray-700" title="home">
        {{ __('Home') }} >> 
      </a>
    </div>
    <div class="ml-1 text-sm text-gray-700">
        {{ $category->name }}
    </div>
</div>
@endsection

@section('content')
<category-page
  current-url="{{ request()->url() }}"
  :filter-prop="{{ json_encode(request()->all()) }}"
  inline-template>



    <div class="container">
        <div class="catalog__header">
            <div class="catalog__title-wrapper">
                <p class="catalog__title">{{ $category->name }}</p>
                <p class="catalog__product-quantity">{{count($categoryProducts)}} товаров</p>
            </div>
            <div class="catalog__btn-wrapper">
                <button class="catalog__square-box">
                    <div class="catalog__square"></div>
                    <div class="catalog__square"></div>
                    <div class="catalog__square"></div>
                    <div class="catalog__square"></div>
                    <div class="catalog__square"></div>
                    <div class="catalog__square"></div>
                    <div class="catalog__square"></div>
                    <div class="catalog__square"></div>
                    <div class="catalog__square"></div>
                </button>
                <button class="catalog__bar-box">
                    <div class="catalog__bar"></div>
                    <div class="catalog__bar"></div>
                    <div class="catalog__bar"></div>
                </button>
            </div>
        </div>
	
        <ul class="catalog__product-type-list">
            <li class="catalog__product-type-item">
                <a href="#" class="catalog__product-type-link pinker-link">Apple</a>
            </li>
            <li class="catalog__product-type-item">
                <a href="#" class="catalog__product-type-link blue-link">Samsung</a>
            </li>
            <li class="catalog__product-type-item">
                <a href="#" class="catalog__product-type-link yellow-link">Xiaomi</a>
            </li>
            <li class="catalog__product-type-item">
                <a href="#" class="catalog__product-type-link dirty-pink-link">Huawei</a>
            </li>
            <li class="catalog__product-type-item">
                <a href="#" class="catalog__product-type-link pinker-link">Новые</a>
            </li>
            <li class="catalog__product-type-item">
                <a href="#" class="catalog__product-type-link blue-link">Популярные</a>
            </li>
            <li class="catalog__product-type-item">
                <a href="#" class="catalog__product-type-link yellow-link">от 4000 мАч</a>
            </li>
            <li class="catalog__product-type-item">
                <a href="#" class="catalog__product-type-link purple-link">Face ID</a>
            </li>
            <li class="catalog__product-type-item">
                <a href="#" class="catalog__product-type-link dirty-pink-link">Водонепроницаемые</a>
            </li>

        </ul>
</form>

        <?php
        $pricemax = $categoryProducts->max('price');
        $pricemin = $categoryProducts->min('price');
        ?>
        <div class="catalog__main">
            <aside class="catalog__choices">
                <p class="catalog__choices-text">Цена:</p>
                <div class="catalog__price-changer">

                {{--  <form method="GET" action="{{route::get('',[\AvoRed\Framework\Catalog\Controllers\ProductController::class,'filter'])}}">
                      @csrf--}}
                        <button class="catalog__price-btn">от {{$pricemin}}</button>
                        <button class="catalog__price-btn">до {{$pricemax}}</button>
                        <div class="price-slider">
                        <input value="{{$pricemin}}" step="5000" min="{{$pricemin}}" max="{{$pricemax}}" type="range">
                        <input value="{{$pricemax}}" step="5000" min="{{$pricemin}}" max="{{$pricemax}}" type="range">
                        </div>
                  {{--</form>--}}
                </div>
                <p class="catalog__choices-text">Бренды</p>
                    @include('category.card.brands')
            </aside>

            <div class="catalog__products">
                <div class="catalog__select">
                    <select name="price" id="price" class="catalog__select-btn">
                        <option value="1" class="catalog__option-btn">По цене: сначала дешево</option>
                    </select>
                </div>
                <div class="block">
                    <div class=" flex flex-wrap">
                        @foreach ($categoryProducts as $product)
                            @include('category.card.product', ['product' => $product])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="catalog__pagination">
            <ul class="catalog__pagination-list">
                <li class="catalog__pagination-item">
                   {{-- <a href="#" class="catalog__pagination-link catalog__pagination-link--active">1</a>--}}

                </li>

            </ul>

        </div>
    </div>



</category-page>
@endsection
