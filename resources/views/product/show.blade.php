@extends('layouts.app')

@section('breadcrumb')
    <div style="margin: 16px 0">
        <div>
            <a href="{{ route('home') }}" title="home">
                {{ __('Home') }}
            </a>
        </div>
        <div>
            {{ $product->name }}
        </div>
    </div>
@endsection

@section('content')
    <product-page :product="{{ $product }}" :variations="{{ $product->getVariations() }}" inline-template>
        <div class="container mx-auto">


            @if (session('type') === 'success')
                @include('components.success', ['message' => session('message')])
            @endif
            @if (session('type') === 'error')
                @include('components.error', ['message' => session('message')])
            @endif


            <div class="container">
                <p class="card-product__title">{{ $product->name }}</p>
                <div class="card-product">
                    <div class="card-product__img-wrapper">
                        <ul class="card-product__list">
                            @foreach($product->images as $image)
                                <li class="card-product__item">
                                    <img src="{{ asset("storage/{$image->path}") }}" width="50" height="50" alt="laptop"
                                         class="card-product__img">
                                </li>
                            @endforeach
                        </ul>
                        <div class="card-product__box">
                            <img class="card-product__img-big" :src="productMainImage"/>
                        </div>
                    </div>
                    <div class="product-info__list-wrapper">
                        {{ __('Properties') }}
                        <ul class="product-info__list">
                            @php
                                $properties = $product->getProperties();
                            @endphp
                            @if ($properties !== null && $properties->count() > 0)
                                @foreach ($properties as $property)
                                    <li class="product-info__item">
                                        <p class="product-info__text-blur">{{ $property->name }}:</p>
                                        <p class="product-info__text">{{ $property->getPropertyDisplayTextByProductId($product->id) }}</p>
                                    </li>
                                    <p></p>
                                @endforeach
                            @endif
                        </ul>
                        <a href="#" class="product-info__link">{{ __('Description') }}</a>
                        <p class="mt-5">{!! $product->description !!}</p>
                    </div>
                    <div class="card-product__box">
                        <div class="card-product__available">
                            <div class="card-product__available-icon"></div>
                            <p class="card-product__available-text">Есть в наличии</p>
                        </div>
                        <p class="card-product__price-text">Цена:</p>
                        <p class="card-product__price">{{$product->price}} UZS</p>
                        <ul class="card-product__box-list">
                            <li class="card-product__box-item">
                                <form action="{{ route('wishlist.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="slug" value="{{ $product->slug }}"/>
                                    <button type="submit" class="card-product__box-link">
                                        <img src="{{asset('img/card/heart.svg')}}" width="22" height="19" alt="like"
                                             class="card-product__box-img">
                                        <p class="card-product__box-text">В избранное</p>
                                    </button>
                                </form>
                            </li>
                            <li class="card-product__box-item">
                                <form action="{{ route('compare.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="slug" value="{{ $product->slug }}"/>
                                    <button type="submit" class="card-product__box-link">
                                        <img src="{{asset('img/card/sravnit.svg')}}" width="22" height="16"
                                             alt="sravnit" class="card-product__box-img">
                                        <p class="card-product__box-text">Сравнить</p>
                                    </button>
                                </form>
                            </li>
                            <li class="card-product__box-item">
                                <form method="post" class="pb-5 w-40" action="{{ route('add.to.cart') }}">
                                    @csrf
                                    <avored-input
                                        input-type="number"
                                        init-value="1"
                                        field-name="qty">
                                    </avored-input>

                                    <button class="card-product__add-link">
                                        <img src="{{asset('img/card/Vector (1).svg')}}" alt="cart"
                                             class="card-product__box-img">
                                        <p class="card-product__add-korzina">Добавить в корзину</p>
                                    </button>
                                    <input type="hidden" name="slug" value="{{ $product->slug }}"/>
                                </form>
                            </li>
                        </ul>
                        <p class="card-product__rassrochka-title">Рассрочка</p>
                        <p class="card-product__rassrochka-text">Предоплата 10%: <span
                                class="card-product__rassrochka-span">{{$product->price*0.1}} UZS</span></p>
                        <ul class="card-product__rassrochka-month-list">
                            <li class="card-product__rassrochka-month-item">
                                <a href="#" class="card-product__rassrochka-link">3 мес</a>
                            </li>
                            <li class="card-product__rassrochka-month-item">
                                <a href="#" class="card-product__rassrochka-link">6 мес</a>
                            </li>
                            <li class="card-product__rassrochka-month-item">
                                <a href="#" class="card-product__rassrochka-link">9 мес</a>
                            </li>
                            <li class="card-product__rassrochka-month-item">
                                <a href="#" class="card-product__rassrochka-link">12 мес</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            {{--
              <div class="flex pb-6">

                <div class="w-1/3">
                    <h2 class="text-semibold text-red-700 text-2xl py-6">{{ $product->name }}</h2>
                  <div class="rounded object-cover border">
                      <img class="product-main-image" :src="productMainImage" />
                  </div>
                </div>
                <div class="w-2/3 ml-5">


                </div>
              </div>
              <div class="rounded border p-6">
                <div>
                  <div class="description">
                      <div class="text-semibold text-red-700 text-2xl border-b py-6">{{ __('Description') }}</div>
                      <p class="mt-5">{!! $product->description !!}</p>
                  </div>
                </div>
                <div>
                  <div class="description">
                      <div class="text-semibold text-red-700 text-2xl py-6"></div>
                      <div class="mt-5">
                        @php
                          $properties = $product->getProperties();
                        @endphp
                        @if ($properties !== null && $properties->count() > 0)
                          @foreach ($properties as $property)
                              <p>{{ $property->name }}: {{ $property->getPropertyDisplayTextByProductId($product->id) }}</p>
                          @endforeach
                        @endif
                      </div>
                  </div>
                </div>--}}
        </div>
        </div>

    </product-page>







@endsection





