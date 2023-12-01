@extends('layout.layout')

@section('content')
    <div class="page__inner">
        <div class="page__container">
            <div class="page__title h3">Launched</div>
            <div class="products card js-tabs">
                <div class="products__head">
                    <div class="title-purple products__title">Projects</div>
                    <form class="form">
                        <input class="form__input" type="text" name="search" placeholder="Search product"
                            required="required" autocomplete="off" />
                        <button class="form__button">
                            <svg class="icon icon-search">
                                <use xlink:href="#icon-search"></use>
                            </svg>
                        </button>
                    </form>
                    <div class="products__indicators">
                        <button class="button-stroke button-small products__button">Deleted</button>
                        <button class="button-stroke button-small products__button">Set status</button>
                        <div class="products__counter">3 selected</div>
                    </div>
                </div>
                <div class="products__container">
                    <div class="products__tab js-tabs-item" style="display: block;">
                        <div class="products__wrapper">
                            <div class="products__table">
                                <div class="products__row">
                                    <div class="products__col">
                                        <label class="checkbox">
                                            <input class="checkbox__input" type="checkbox"><span
                                                class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                        </label>
                                    </div>
                                    <div class="products__col">Project</div>
                                    <div class="products__col">Status</div>
                                    <div class="products__col">Monthly Cost</div>
                                    <div class="products__col">Reg.</div>
                                    <div class="products__col">Total Cost</div>
                                    <div class="products__col">Total CPR</div>
                                </div>
                                <div class="products__row">
                                    <div class="products__col">
                                        <label class="checkbox">
                                            <input class="checkbox__input" type="checkbox"><span
                                                class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                        </label>
                                    </div>
                                    <div class="products__col"><a class="products__item" href="#"
                                            data-popup=".js-popup-product">
                                            <div class="products__preview"><img srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x"
                                                    src="{{asset('assets/img/content/product-pic-1.jpg')}}" alt="Product"></div>
                                            <div class="products__details">
                                                <div class="products__subtitle">Bento Matte 3D Illustration</div>
                                                <div class="products__wrap">
                                                    <div class="products__price">$98
                                                    </div>
                                                    <div class="products__category">3m 23d</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="products__col">
                                        <div class="products__label">Status</div>
                                        <div class="status-green products__status">Active</div>
                                        <div class="control">
                                            <button class="control__button">
                                                <a href="products-add.html">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </a>
                                            </button>
                                            <button class="control__button">
                                                <svg class="icon icon-message">
                                                    <use xlink:href="#icon-message"></use>
                                                </svg>
                                            </button>
                                            <div class="actions">
                                                <button class="actions__button">
                                                    <svg class="icon icon-more-horizontal">
                                                        <use xlink:href="#icon-more-horizontal"></use>
                                                    </svg>
                                                </button>
                                                <div class="actions__body">
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit product
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-message">
                                                            <use xlink:href="#icon-message"></use>
                                                        </svg>View comment
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit title & description
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-link">
                                                            <use xlink:href="#icon-link"></use>
                                                        </svg>Get shareable link
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-trash">
                                                            <use xlink:href="#icon-trash"></use>
                                                        </svg>Delete forever
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">$98
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Sales</div>
                                        <div class="products__sales">
                                            <div class="products__number">12367
                                            </div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>37.8
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Views</div>
                                        <div class="products__box">
                                            <div class="products__number">$900</div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Likes</div>
                                        <div class="products__box">
                                            <div class="products__number">111</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__col">
                                        <label class="checkbox">
                                            <input class="checkbox__input" type="checkbox"><span
                                                class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                        </label>
                                    </div>
                                    <div class="products__col"><a class="products__item" href="#"
                                            data-popup=".js-popup-product">
                                            <div class="products__preview"><img
                                                    srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x"
                                                    src="{{asset('assets/img/content/product-pic-2.jpg')}}" alt="Product"></div>
                                            <div class="products__details">
                                                <div class="products__subtitle">DSM - Geometry pattern</div>
                                                <div class="products__wrap">
                                                    <div class="products__price">$48
                                                    </div>
                                                    <div class="products__category">3m 23d</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="products__col">
                                        <div class="products__label">Status</div>
                                        <div class="status-red products__status">Deactive</div>
                                        <div class="control">
                                            <button class="control__button">
                                                <a href="products-add.html">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </a>
                                            </button>
                                            <button class="control__button">
                                                <svg class="icon icon-message">
                                                    <use xlink:href="#icon-message"></use>
                                                </svg>
                                            </button>
                                            <div class="actions">
                                                <button class="actions__button">
                                                    <svg class="icon icon-more-horizontal">
                                                        <use xlink:href="#icon-more-horizontal"></use>
                                                    </svg>
                                                </button>
                                                <div class="actions__body">
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit product
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-message">
                                                            <use xlink:href="#icon-message"></use>
                                                        </svg>View comment
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit title & description
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-link">
                                                            <use xlink:href="#icon-link"></use>
                                                        </svg>Get shareable link
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-trash">
                                                            <use xlink:href="#icon-trash"></use>
                                                        </svg>Delete forever
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">$48
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Sales</div>
                                        <div class="products__sales">
                                            <div class="products__number">12367
                                            </div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>10.8
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Views</div>
                                        <div class="products__box">
                                            <div class="products__number">$1200</div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Likes</div>
                                        <div class="products__box">
                                            <div class="products__number">17</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__col">
                                        <label class="checkbox">
                                            <input class="checkbox__input" type="checkbox"><span
                                                class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                        </label>
                                    </div>
                                    <div class="products__col"><a class="products__item" href="#"
                                            data-popup=".js-popup-product">
                                            <div class="products__preview"><img
                                                    srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x"
                                                    src="{{asset('assets/img/content/product-pic-3.jpg')}}" alt="Product"></div>
                                            <div class="products__details">
                                                <div class="products__subtitle">Node - Crypto iOS</div>
                                                <div class="products__wrap">
                                                    <div class="products__price">$98
                                                    </div>
                                                    <div class="products__category">3m 23d</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="products__col">
                                        <div class="products__label">Status</div>
                                        <div class="status-green products__status">Active</div>
                                        <div class="control">
                                            <button class="control__button">
                                                <a href="products-add.html">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </a>
                                            </button>
                                            <button class="control__button">
                                                <svg class="icon icon-message">
                                                    <use xlink:href="#icon-message"></use>
                                                </svg>
                                            </button>
                                            <div class="actions">
                                                <button class="actions__button">
                                                    <svg class="icon icon-more-horizontal">
                                                        <use xlink:href="#icon-more-horizontal"></use>
                                                    </svg>
                                                </button>
                                                <div class="actions__body">
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit product
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-message">
                                                            <use xlink:href="#icon-message"></use>
                                                        </svg>View comment
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit title & description
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-link">
                                                            <use xlink:href="#icon-link"></use>
                                                        </svg>Get shareable link
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-trash">
                                                            <use xlink:href="#icon-trash"></use>
                                                        </svg>Delete forever
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">$98
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Sales</div>
                                        <div class="products__sales">
                                            <div class="products__number">12367
                                            </div>
                                            <div class="balance negative">
                                                <svg class="icon icon-arrow-bottom">
                                                    <use xlink:href="#icon-arrow-bottom"></use>
                                                </svg>24.2
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Views</div>
                                        <div class="products__box">
                                            <div class="products__number">$900</div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Likes</div>
                                        <div class="products__box">
                                            <div class="products__number">111</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__col">
                                        <label class="checkbox">
                                            <input class="checkbox__input" type="checkbox"><span
                                                class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                        </label>
                                    </div>
                                    <div class="products__col"><a class="products__item" href="#"
                                            data-popup=".js-popup-product">
                                            <div class="products__preview"><img
                                                    srcSet="{{asset('assets/img/content/product-pic-4@2x.jpg')}} 2x"
                                                    src="{{asset('assets/img/content/product-pic-4.jpg')}}" alt="Product"></div>
                                            <div class="products__details">
                                                <div class="products__subtitle">TaskEz: Productivity App iOS UI Kit</div>
                                                <div class="products__wrap">
                                                    <div class="products__price">$48
                                                    </div>
                                                    <div class="products__category">3m 23d</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="products__col">
                                        <div class="products__label">Status</div>
                                        <div class="status-red products__status">Deactive</div>
                                        <div class="control">
                                            <button class="control__button">
                                                <a href="products-add.html">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </a>
                                            </button>
                                            <button class="control__button">
                                                <svg class="icon icon-message">
                                                    <use xlink:href="#icon-message"></use>
                                                </svg>
                                            </button>
                                            <div class="actions">
                                                <button class="actions__button">
                                                    <svg class="icon icon-more-horizontal">
                                                        <use xlink:href="#icon-more-horizontal"></use>
                                                    </svg>
                                                </button>
                                                <div class="actions__body">
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit product
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-message">
                                                            <use xlink:href="#icon-message"></use>
                                                        </svg>View comment
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit title & description
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-link">
                                                            <use xlink:href="#icon-link"></use>
                                                        </svg>Get shareable link
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-trash">
                                                            <use xlink:href="#icon-trash"></use>
                                                        </svg>Delete forever
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">$48
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Sales</div>
                                        <div class="products__sales">
                                            <div class="products__number">12367
                                            </div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>40.1
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Views</div>
                                        <div class="products__box">
                                            <div class="products__number">$550</div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Likes</div>
                                        <div class="products__box">
                                            <div class="products__number">34</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__col">
                                        <label class="checkbox">
                                            <input class="checkbox__input" type="checkbox"><span
                                                class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                        </label>
                                    </div>
                                    <div class="products__col"><a class="products__item" href="#"
                                            data-popup=".js-popup-product">
                                            <div class="products__preview"><img
                                                    srcSet="{{asset('assets/img/content/product-pic-5@2x.jpg')}} 2x"
                                                    src="{{asset('assets/img/content/product-pic-5.jpg')}}" alt="Product"></div>
                                            <div class="products__details">
                                                <div class="products__subtitle">Bento Matte 3D Illustration</div>
                                                <div class="products__wrap">
                                                    <div class="products__price">$98
                                                    </div>
                                                    <div class="products__category">3m 23d</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="products__col">
                                        <div class="products__label">Status</div>
                                        <div class="status-green products__status">Active</div>
                                        <div class="control">
                                            <button class="control__button">
                                                <a href="products-add.html">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </a>

                                            </button>
                                            <button class="control__button">
                                                <svg class="icon icon-message">
                                                    <use xlink:href="#icon-message"></use>
                                                </svg>
                                            </button>
                                            <div class="actions">
                                                <button class="actions__button">
                                                    <svg class="icon icon-more-horizontal">
                                                        <use xlink:href="#icon-more-horizontal"></use>
                                                    </svg>
                                                </button>
                                                <div class="actions__body">
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit product
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-message">
                                                            <use xlink:href="#icon-message"></use>
                                                        </svg>View comment
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit title & description
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-link">
                                                            <use xlink:href="#icon-link"></use>
                                                        </svg>Get shareable link
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-trash">
                                                            <use xlink:href="#icon-trash"></use>
                                                        </svg>Delete forever
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">$98
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Sales</div>
                                        <div class="products__sales">
                                            <div class="products__number">12367
                                            </div>
                                            <div class="balance negative">
                                                <svg class="icon icon-arrow-bottom">
                                                    <use xlink:href="#icon-arrow-bottom"></use>
                                                </svg>15.2
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Views</div>
                                        <div class="products__box">
                                            <div class="products__number">$900</div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Likes</div>
                                        <div class="products__box">
                                            <div class="products__number">111</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__col">
                                        <label class="checkbox">
                                            <input class="checkbox__input" type="checkbox"><span
                                                class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                        </label>
                                    </div>
                                    <div class="products__col"><a class="products__item" href="#"
                                            data-popup=".js-popup-product">
                                            <div class="products__preview"><img
                                                    srcSet="{{asset('assets/img/content/product-pic-6@2x.jpg')}} 2x"
                                                    src="{{asset('assets/img/content/product-pic-6.jpg')}}" alt="Product"></div>
                                            <div class="products__details">
                                                <div class="products__subtitle">DSM - Geometry pattern</div>
                                                <div class="products__wrap">
                                                    <div class="products__price">$48
                                                    </div>
                                                    <div class="products__category">3m 23d</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="products__col">
                                        <div class="products__label">Status</div>
                                        <div class="status-red products__status">Deactive</div>
                                        <div class="control">
                                            <button class="control__button">
                                                <a href="products-add.html">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </a>
                                            </button>
                                            <button class="control__button">
                                                <svg class="icon icon-message">
                                                    <use xlink:href="#icon-message"></use>
                                                </svg>
                                            </button>
                                            <div class="actions">
                                                <button class="actions__button">
                                                    <svg class="icon icon-more-horizontal">
                                                        <use xlink:href="#icon-more-horizontal"></use>
                                                    </svg>
                                                </button>
                                                <div class="actions__body">
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit product
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-message">
                                                            <use xlink:href="#icon-message"></use>
                                                        </svg>View comment
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit title & description
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-link">
                                                            <use xlink:href="#icon-link"></use>
                                                        </svg>Get shareable link
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-trash">
                                                            <use xlink:href="#icon-trash"></use>
                                                        </svg>Delete forever
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">$48
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Sales</div>
                                        <div class="products__sales">
                                            <div class="products__number">12367
                                            </div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>44.4
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Views</div>
                                        <div class="products__box">
                                            <div class="products__number">$1200</div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Likes</div>
                                        <div class="products__box">
                                            <div class="products__number">17</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__col">
                                        <label class="checkbox">
                                            <input class="checkbox__input" type="checkbox"><span
                                                class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                        </label>
                                    </div>
                                    <div class="products__col"><a class="products__item" href="#"
                                            data-popup=".js-popup-product">
                                            <div class="products__preview"><img
                                                    srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x"
                                                    src="{{asset('assets/img/content/product-pic-1.jpg')}}" alt="Product"></div>
                                            <div class="products__details">
                                                <div class="products__subtitle">Bento Matte 3D Illustration</div>
                                                <div class="products__wrap">
                                                    <div class="products__price">$98
                                                    </div>
                                                    <div class="products__category">3m 23d</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="products__col">
                                        <div class="products__label">Status</div>
                                        <div class="status-green products__status">Active</div>
                                        <div class="control">
                                            <button class="control__button">
                                                <a href="products-add.html">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </a>
                                            </button>
                                            <button class="control__button">
                                                <svg class="icon icon-message">
                                                    <use xlink:href="#icon-message"></use>
                                                </svg>
                                            </button>
                                            <div class="actions actions_up">
                                                <button class="actions__button">
                                                    <svg class="icon icon-more-horizontal">
                                                        <use xlink:href="#icon-more-horizontal"></use>
                                                    </svg>
                                                </button>
                                                <div class="actions__body">
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit product
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-message">
                                                            <use xlink:href="#icon-message"></use>
                                                        </svg>View comment
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit title & description
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-link">
                                                            <use xlink:href="#icon-link"></use>
                                                        </svg>Get shareable link
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-trash">
                                                            <use xlink:href="#icon-trash"></use>
                                                        </svg>Delete forever
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">$98
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Sales</div>
                                        <div class="products__sales">
                                            <div class="products__number">12367
                                            </div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>37.8
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Views</div>
                                        <div class="products__box">
                                            <div class="products__number">$900</div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Likes</div>
                                        <div class="products__box">
                                            <div class="products__number">80</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__col">
                                        <label class="checkbox">
                                            <input class="checkbox__input" type="checkbox"><span
                                                class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                        </label>
                                    </div>
                                    <div class="products__col"><a class="products__item" href="#"
                                            data-popup=".js-popup-product">
                                            <div class="products__preview"><img
                                                    srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x"
                                                    src="{{asset('assets/img/content/product-pic-2.jpg')}}" alt="Product"></div>
                                            <div class="products__details">
                                                <div class="products__subtitle">DSM - Geometry pattern</div>
                                                <div class="products__wrap">
                                                    <div class="products__price">$48
                                                    </div>
                                                    <div class="products__category">3m 23d</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="products__col">
                                        <div class="products__label">Status</div>
                                        <div class="status-red products__status">Deactive</div>
                                        <div class="control">
                                            <button class="control__button">
                                                <a href="products-add.html">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </a>
                                            </button>
                                            <button class="control__button">
                                                <svg class="icon icon-message">
                                                    <use xlink:href="#icon-message"></use>
                                                </svg>
                                            </button>
                                            <div class="actions actions_up">
                                                <button class="actions__button">
                                                    <svg class="icon icon-more-horizontal">
                                                        <use xlink:href="#icon-more-horizontal"></use>
                                                    </svg>
                                                </button>
                                                <div class="actions__body">
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit product
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-message">
                                                            <use xlink:href="#icon-message"></use>
                                                        </svg>View comment
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit title & description
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-link">
                                                            <use xlink:href="#icon-link"></use>
                                                        </svg>Get shareable link
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-trash">
                                                            <use xlink:href="#icon-trash"></use>
                                                        </svg>Delete forever
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">$48
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Sales</div>
                                        <div class="products__sales">
                                            <div class="products__number">12367
                                            </div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>10.8
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Views</div>
                                        <div class="products__box">
                                            <div class="products__number">$600</div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Likes</div>
                                        <div class="products__box">
                                            <div class="products__number">17</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__col">
                                        <label class="checkbox">
                                            <input class="checkbox__input" type="checkbox"><span
                                                class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                        </label>
                                    </div>
                                    <div class="products__col"><a class="products__item" href="#"
                                            data-popup=".js-popup-product">
                                            <div class="products__preview"><img
                                                    srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x"
                                                    src="{{asset('assets/img/content/product-pic-3.jpg')}}" alt="Product"></div>
                                            <div class="products__details">
                                                <div class="products__subtitle">Node - Crypto iOS 3m 23d</div>
                                                <div class="products__wrap">
                                                    <div class="products__price">$98
                                                    </div>
                                                    <div class="products__category">3m 23d</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="products__col">
                                        <div class="products__label">Status</div>
                                        <div class="status-green products__status">Active</div>
                                        <div class="control">
                                            <button class="control__button">
                                                <a href="products-add.html">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </a>
                                            </button>
                                            <button class="control__button">
                                                <svg class="icon icon-message">
                                                    <use xlink:href="#icon-message"></use>
                                                </svg>
                                            </button>
                                            <div class="actions actions_up">
                                                <button class="actions__button">
                                                    <svg class="icon icon-more-horizontal">
                                                        <use xlink:href="#icon-more-horizontal"></use>
                                                    </svg>
                                                </button>
                                                <div class="actions__body">
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit product
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-message">
                                                            <use xlink:href="#icon-message"></use>
                                                        </svg>View comment
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit title & description
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-link">
                                                            <use xlink:href="#icon-link"></use>
                                                        </svg>Get shareable link
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-trash">
                                                            <use xlink:href="#icon-trash"></use>
                                                        </svg>Delete forever
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">$98
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Sales</div>
                                        <div class="products__sales">
                                            <div class="products__number">12367
                                            </div>
                                            <div class="balance negative">
                                                <svg class="icon icon-arrow-bottom">
                                                    <use xlink:href="#icon-arrow-bottom"></use>
                                                </svg>24.2
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Views</div>
                                        <div class="products__box">
                                            <div class="products__number">$900</div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Likes</div>
                                        <div class="products__box">
                                            <div class="products__number">111</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products__row">
                                    <div class="products__col">
                                        <label class="checkbox">
                                            <input class="checkbox__input" type="checkbox"><span
                                                class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                        </label>
                                    </div>
                                    <div class="products__col"><a class="products__item" href="#"
                                            data-popup=".js-popup-product">
                                            <div class="products__preview"><img
                                                    srcSet="{{asset('assets/img/content/product-pic-4@2x.jpg')}} 2x"
                                                    src="{{asset('assets/img/content/product-pic-4.jpg')}}" alt="Product"></div>
                                            <div class="products__details">
                                                <div class="products__subtitle">TaskEz: Productivity App iOS UI Kit</div>
                                                <div class="products__wrap">
                                                    <div class="products__price">$48
                                                    </div>
                                                    <div class="products__category">3m 23d</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="products__col">
                                        <div class="products__label">Status</div>
                                        <div class="status-red products__status">Deactive</div>
                                        <div class="control">
                                            <button class="control__button">
                                                <a href="products-add.html">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </a>
                                            </button>
                                            <button class="control__button">
                                                <svg class="icon icon-message">
                                                    <use xlink:href="#icon-message"></use>
                                                </svg>
                                            </button>
                                            <div class="actions actions_up">
                                                <button class="actions__button">
                                                    <svg class="icon icon-more-horizontal">
                                                        <use xlink:href="#icon-more-horizontal"></use>
                                                    </svg>
                                                </button>
                                                <div class="actions__body">
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit product
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-message">
                                                            <use xlink:href="#icon-message"></use>
                                                        </svg>View comment
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-edit">
                                                            <use xlink:href="#icon-edit"></use>
                                                        </svg>Edit title & description
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-link">
                                                            <use xlink:href="#icon-link"></use>
                                                        </svg>Get shareable link
                                                    </button>
                                                    <button class="actions__option">
                                                        <svg class="icon icon-trash">
                                                            <use xlink:href="#icon-trash"></use>
                                                        </svg>Delete forever
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">$48
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Sales</div>
                                        <div class="products__sales">
                                            <div class="products__number">12367
                                            </div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>40.1
                                            </div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Views</div>
                                        <div class="products__box">
                                            <div class="products__number">$1200</div>
                                        </div>
                                    </div>
                                    <div class="products__col">
                                        <div class="products__label">Likes</div>
                                        <div class="products__box">
                                            <div class="products__number">17</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products__foot">
                            <button class="products__arrow">
                                <svg class="icon icon-arrow-left">
                                    <use xlink:href="#icon-arrow-left"></use>
                                </svg>
                            </button>
                            <button class="products__arrow">
                                <svg class="icon icon-arrow-right">
                                    <use xlink:href="#icon-arrow-right"></use>
                                </svg>
                            </button>
                        </div>
                    </div>


                </div>
            </div>
            <div class="panel tablet-hide">
                <div class="panel__info">
                    <svg class="icon icon-check-all">
                        <use xlink:href="#icon-check-all"></use>
                    </svg>2 products selected
                </div>
                <div class="panel__btns">
                    <button class="button-stroke-red panel__button"><span>Deleted</span>
                        <svg class="icon icon-trash">
                            <use xlink:href="#icon-trash"></use>
                        </svg>
                    </button>
                    <button class="button panel__button">Publish</button>
                </div>
            </div>
        </div>
    </div>
@endsection
