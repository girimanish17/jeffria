@extends('layout.layout')

@section('content')
    <div class="page__inner">
        <div class="page__container">
            <div class="page__title h3">Explore creators</div>
            <div class="creators">
                <div class="creators__head">
                    <div class="creators__nav"><a class="creators__link active" href="#">Popular</a><a
                            class="creators__link" href="#">Trending</a></div>
                    <select class="select select_small">
                        <option>Best sellers</option>
                        <option>New sellers</option>
                    </select>
                </div>
                <div class="creators__info">Viewing 5 of 5,000+ creators in the market</div>
                <div class="creators__list">
                    <div class="creators__item">
                        <div class="creators__top">
                            <div class="creators__user">
                                <div class="creators__avatar"><img src="{{asset('assets/img/content/avatar-1.jpg')}}" alt="Avatar"></div>
                                <div class="creators__details">
                                    <div class="creators__line">
                                        <div class="creators__man">Reed Parker</div>
                                        <div class="creators__number" style="background-color: #B5E4CA;">#1</div>
                                    </div>
                                    <div class="creators__parameters">
                                        <div class="creators__parameter"><span>16</span> products</div>
                                        <div class="creators__parameter"><span>3,568</span> followers</div>
                                    </div>
                                </div>
                            </div>
                            <div class="creators__btns">
                                <button class="button-stroke creators__button">Follow<span>ing</span></button>
                                <button class="button creators__button">Shop now</button>
                            </div>
                        </div>
                        <div class="creators__products"><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-4@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-4.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-5@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-5.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}"
                                    alt="Product"></a></div>
                    </div>
                    <div class="creators__item">
                        <div class="creators__top">
                            <div class="creators__user">
                                <div class="creators__avatar"><img src="{{asset('assets/img/content/avatar-2.jpg')}}" alt="Avatar"></div>
                                <div class="creators__details">
                                    <div class="creators__line">
                                        <div class="creators__man">Tristian Hermiston</div>
                                        <div class="creators__number" style="background-color: #FFD88D;">#2</div>
                                    </div>
                                    <div class="creators__parameters">
                                        <div class="creators__parameter"><span>34</span> products</div>
                                        <div class="creators__parameter"><span>2,345</span> followers</div>
                                    </div>
                                </div>
                            </div>
                            <div class="creators__btns">
                                <button class="button-stroke creators__button">Follow<span>ing</span></button>
                                <button class="button creators__button">Shop now</button>
                            </div>
                        </div>
                        <div class="creators__products"><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-5@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-5.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-4@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-4.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-5@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-5.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-4@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-4.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}"
                                    alt="Product"></a></div>
                    </div>
                    <div class="creators__item">
                        <div class="creators__top">
                            <div class="creators__user">
                                <div class="creators__avatar"><img src="{{asset('assets/img/content/avatar-3.jpg')}}" alt="Avatar"></div>
                                <div class="creators__details">
                                    <div class="creators__line">
                                        <div class="creators__man">Reed Parker</div>
                                        <div class="creators__number" style="background-color: #CABDFF;">#3</div>
                                    </div>
                                    <div class="creators__parameters">
                                        <div class="creators__parameter"><span>9</span> products</div>
                                        <div class="creators__parameter"><span>13,242</span> followers</div>
                                    </div>
                                </div>
                            </div>
                            <div class="creators__btns">
                                <button class="button-stroke creators__button">Follow<span>ing</span></button>
                                <button class="button creators__button">Shop now</button>
                            </div>
                        </div>
                        <div class="creators__products"><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-4@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-4.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-5@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-5.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-4@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-4.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}"
                                    alt="Product"></a></div>
                    </div>
                    <div class="creators__item">
                        <div class="creators__top">
                            <div class="creators__user">
                                <div class="creators__avatar"><img src="{{asset('assets/img/content/avatar-4.jpg')}}" alt="Avatar"></div>
                                <div class="creators__details">
                                    <div class="creators__line">
                                        <div class="creators__man">Nicola Gislason</div>
                                    </div>
                                    <div class="creators__parameters">
                                        <div class="creators__parameter"><span>22</span> products</div>
                                        <div class="creators__parameter"><span>1,211</span> followers</div>
                                    </div>
                                </div>
                            </div>
                            <div class="creators__btns">
                                <button class="button-stroke creators__button">Follow<span>ing</span></button>
                                <button class="button creators__button">Shop now</button>
                            </div>
                        </div>
                        <div class="creators__products"><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-4@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-4.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-5@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-5.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}"
                                    alt="Product"></a></div>
                    </div>
                    <div class="creators__item">
                        <div class="creators__top">
                            <div class="creators__user">
                                <div class="creators__avatar"><img src="{{asset('assets/img/content/avatar-5.jpg')}}" alt="Avatar"></div>
                                <div class="creators__details">
                                    <div class="creators__line">
                                        <div class="creators__man">Hester Grady</div>
                                    </div>
                                    <div class="creators__parameters">
                                        <div class="creators__parameter"><span>31</span> products</div>
                                        <div class="creators__parameter"><span>9,832</span> followers</div>
                                    </div>
                                </div>
                            </div>
                            <div class="creators__btns">
                                <button class="button-stroke creators__button">Follow<span>ing</span></button>
                                <button class="button creators__button">Shop now</button>
                            </div>
                        </div>
                        <div class="creators__products"><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{('img/content/product-pic-4@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-4.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-5@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-5.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{('img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}"
                                    alt="Product"></a><a class="creators__product" data-popup=".js-popup-product"><img
                                    srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}"
                                    alt="Product"></a></div>
                    </div>
                </div>
                <div class="creators__foot">
                    <button class="button-stroke button-small creators__button">
                        <div class="loader"></div><span>Load more</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
