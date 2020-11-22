@extends('layouts.app')

@section('breadcrumb')
<div class="flex text-sm">
    <div>
      <a class="text-gray-700" href="{{ route('home') }}" title="home">
        {{ __('Home') }} >> 
      </a>
    </div>
    <div class="text-gray-700" class="pl-2">
        {{ __('Cart') }}
    </div>
</div>
@endsection

@section('content')

    <div class="container">
        <div class="selected-products">
            <p class="selected-products__text">Выбранные товары</p>
            <div class="selected-products__info">
                <ul class="selected-products__list">

                  <?php $tovar = []; foreach (Cart::toArray() as $item) {
                    array_push($tovar ,$item);}

                      ?>
                    @foreach($tovar as $value)
                    <li class="selected-products__item">


                        <a href="{{$value["slug"]}}" class="selected-products__link">
                            <img src="{{$value["image"]}}" alt="laptop" class="selected-products__img" width="208px" height="113px">
                            <div class="selected-products__text-wrapper">
                                <p class="selected-products__title">{{$value["name"]}}</p>
                                <p class="selected-products__price">{{$value["price"]}} UZS</p>
                                <div class="selected-products__number-box">
                                    <form action="{{route('cart.update.qty')}}" method="post">
                                        @csrf
                                        <button type="submit" class="selected-products__btn selected-products__btn-minus">
                                        <input type="hidden" name="qty" value="{{$value['qty']-1}}">
                                        <input type="hidden" name="slug" value="{{$value['slug']}}">

                                        <img src="img/korzinka/minus.svg" alt="" class="selected-products__minus-icon">
                                    </button>
                                    </form>
                                    <p class="selected-products__number">{{$value["qty"]}}</p>
                                    <form action="{{route('cart.update.qty')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="qty" value="{{$value['qty']+1}}">
                                        <input type="hidden" name="slug" value="{{$value['slug']}}">
                                        <button type="submit" class="selected-products__btn">
                                        <img src="img/korzinka/plus.svg" alt="" class="selected-products__minus-icon">
                                    </button>
                                    </form>
                                </div>
                            </div>
                            <form action="{{route('cart.destroyid') }}" method="post">
                                @csrf
                                <input type="hidden" name="slug" value="{{$value['slug']}}">
                                <button type="submit" class="selected-products__exit-btn" type="submit">
                                    <img src="img/korzinka/exit.svg" alt="exit" class="selected-products__exit-icon">
                                </button>
                            </form>

                        </a>

                    </li>
                        @endforeach

                </ul>
                <div class="selected-products__price-info">
                    <p class="selected-products__overall">Итого:</p>
                    <p class="selected-products__overall-price">{{ Cart::total() }} UZS</p>
                    <a href="{{ route('checkout.show') }}" class="selected-products__price-link">Перейти к оформлению</a>
                </div>
            </div>
        </div>
    </div>




{{--    <cart-page
        :items="{{ Cart::toArray() }}"
        cart-update-url="{{ route('cart.update') }}"
        checkout-url="{{ route('checkout.show') }}"
        discount-total="{{ Cart::discount() }}"
        cart-total="{{ Cart::total() }}"
        coupon-url="/apply-promotion-code"
        :default-currency="{{ json_encode(session()->get('default_currency')) }}"
        cart-delete-url="{{ route('cart.destroy') }}">

    </cart-page>--}}
@endsection
