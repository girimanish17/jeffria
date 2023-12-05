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
                                            <div class="products__preview"><img
                                                    srcSet="{{ asset('assets/img/content/product-pic-1@2x.jpg') }} 2x"
                                                    src="{{ asset('assets/img/content/product-pic-1.jpg') }}"
                                                    alt="Product"></div>
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
                                                    srcSet="{{ asset('assets/img/content/product-pic-2@2x.jpg') }} 2x"
                                                    src="{{ asset('assets/img/content/product-pic-2.jpg') }}"
                                                    alt="Product"></div>
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
                                                    srcSet="{{ asset('assets/img/content/product-pic-3@2x.jpg') }} 2x"
                                                    src="{{ asset('assets/img/content/product-pic-3.jpg') }}"
                                                    alt="Product"></div>
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
                                                    srcSet="{{ asset('assets/img/content/product-pic-4@2x.jpg') }} 2x"
                                                    src="{{ asset('assets/img/content/product-pic-4.jpg') }}"
                                                    alt="Product"></div>
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
                                                    srcSet="{{ asset('assets/img/content/product-pic-5@2x.jpg') }} 2x"
                                                    src="{{ asset('assets/img/content/product-pic-5.jpg') }}"
                                                    alt="Product"></div>
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
                                                    srcSet="{{ asset('assets/img/content/product-pic-6@2x.jpg') }} 2x"
                                                    src="{{ asset('assets/img/content/product-pic-6.jpg') }}"
                                                    alt="Product"></div>
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
                                                    srcSet="{{ asset('assets/img/content/product-pic-1@2x.jpg') }} 2x"
                                                    src="{{ asset('assets/img/content/product-pic-1.jpg') }}"
                                                    alt="Product"></div>
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
                                                    srcSet="{{ asset('assets/img/content/product-pic-2@2x.jpg') }} 2x"
                                                    src="{{ asset('assets/img/content/product-pic-2.jpg') }}"
                                                    alt="Product"></div>
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
                                                    srcSet="{{ asset('assets/img/content/product-pic-3@2x.jpg') }} 2x"
                                                    src="{{ asset('assets/img/content/product-pic-3.jpg') }}"
                                                    alt="Product"></div>
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
                                                    srcSet="{{ asset('assets/img/content/product-pic-4@2x.jpg') }} 2x"
                                                    src="{{ asset('assets/img/content/product-pic-4.jpg') }}"
                                                    alt="Product"></div>
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

@section('project-detail')
    <div class="popup popup_product js-popup js-popup-product">
        <div class="popup__overlay js-popup-overlay"></div>
        <div class="popup__wrap js-popup-wrap">
            <div class="product js-product">
                <div class="product__control"><a class="button-white product__button" href="products-add.html">Edit
                        project</a>
                    <button class="product__close js-popup-close">
                        <svg class="icon icon-close">
                            <use xlink:href="#icon-close"></use>
                        </svg>
                    </button>
                </div>
                <div class="product__wrapper">
                    <div class="product__details">
                        <div class="product__overview">
                            <div class="product__head">
                                <div class="product__nav">
                                    <button class="product__link js-product-open active">Project</button>
                                    <button class="product__link js-product-comments">Comments</button>
                                </div>
                                <div class="product__btns">
                                    <!-- <button class="button-stroke product__favorite">
                        <svg class="icon icon-heart-fill">
                          <use xlink:href="#icon-heart-fill"></use>
                        </svg><span>32</span>
                      </button> -->
                                    <button
                                        style="background-color: #00c759;;display: inline-flex;justify-content: center;align-items: center;height: 48px;padding: 0 20px;border-radius: 12px;font-size: 15px;font-weight: 700;line-height: 1.6;text-align: center;box-shadow:none;color: #FCFCFC;transition: all .2s;"
                                        class="button-stroke product__favorite">
                                        <span>Paid</span>
                                    </button>
                                    <button class="button product__buy"><span class="product__price">$89</span><span
                                            class="product__inner">Approved
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M20 12.194v9.806h-20v-20h18.272l-1.951 2h-14.321v16h16v-5.768l2-2.038zm.904-10.027l-9.404 9.639-4.405-4.176-3.095 3.097 7.5 7.273 12.5-12.737-3.096-3.096z">
                                                </path>
                                            </svg>
                                        </span></button>
                                </div>
                            </div>
                            <div class="product__title h4">Fleet - Travel shopping UI design kit</div>
                            <div class="product__info">Elegant product mockup for your next project</div>
                            <div class="product__line">
                                <div class="product__author">
                                    <div class="product__avatar"><img src="{{asset('assets/img/content/avatar.jpg')}}" alt="Avatar"></div>
                                    by <span>Chelsie
                                        Haley</span>
                                </div>
                                <div class="product__rating">
                                    <svg class="icon icon-star-fill">
                                        <use xlink:href="#icon-star-fill"></use>
                                    </svg>4.8<span class="product__counter">(87)</span>
                                </div>
                            </div>
                            <div class="product__gallery">
                                <div class="product__box"><a class="product__preview" href="{{asset('assets/img/content/photo-1.jpg')}}"
                                        data-fancybox="gallery" data-caption="Spectacular views of Queenstown"><img
                                            src="{{asset('assets/img/content/photo-1.jpg')}}" alt="Product"></a><a class="product__preview"
                                        href="{{asset('assets/img/content/photo-2.jpg')}}" data-fancybox="gallery"
                                        data-caption="Spectacular views of Queenstown"><img src="{{asset('assets/img/content/photo-2.jpg')}}"
                                            alt="Product"></a><a class="product__preview" href="{{asset('assets/img/content/photo-1.jpg')}}"
                                        data-fancybox="gallery" data-caption="Spectacular views of Queenstown"><img
                                            src="{{asset('assets/img/content/photo-1.jpg')}}" alt="Product"></a><a class="product__preview"
                                        href="{{asset('assets/img/content/photo-2.jpg')}}" data-fancybox="gallery"
                                        data-caption="Spectacular views of Queenstown"><img src="{{asset('assets/img/content/photo-2.jpg')}}"
                                            alt="Product"></a></div><a class="button-white product__button"
                                    href="#">Show all preview</a>
                            </div>
                            <div class="product__row">
                                <div class="product__col">
                                    <div class="title-red product__subtitle">Overview</div>
                                    <div class="product__content">
                                        <p>Meet Node - a crypto NFT marketplace iOS UI design kit for Figma, Sketch, and
                                            Adobe XD. The kit
                                            includes 126 stylish mobile screens in light and dark mode, a bunch of crypto 3D
                                            illustrations,
                                            1 SaaS landing page with full premade breakpoints, and hundreds of components to
                                            help you ship
                                            your next crypto, NFT product faster.</p>
                                        <p>Types of screens included: onboarding, connect wallet, home feed, profile,
                                            upload, menu,
                                            search, product detail, notification...</p>
                                        <p>If you have any questions or requests, please feel free to leave them all in the
                                            comments
                                            section.</p>
                                    </div>
                                </div>
                                <div class="product__col">
                                    <div class="title-purple product__subtitle">Features</div>
                                    <ul class="product__features">
                                        <li>128 prebuilt screens</li>
                                        <li>SaaS landing page ready</li>
                                        <li>Global styleguide</li>
                                        <li>Dark + light more ready</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div style="margin-top:64px;padding-top:64px;border-top:1px solid #EFEFEF;" class="earning">
                            <div class="earning__table">
                                <div class="earning__row">
                                    <div class="earning__col">Postition</div>
                                    <div class="earning__col">Name</div>
                                    <div class="earning__col">Contribution Point</div>
                                    <div class="earning__col">Date Assigned</div>
                                </div>
                                <div class="earning__row">
                                    <div class="earning__col">Product Manager</div>
                                    <div class="earning__col">John Doe</div>
                                    <div class="earning__col">10</div>
                                    <div class="earning__col">Fri, Apr 9</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Product Manager (Vice)</div>
                                    <div class="earning__col">Jane Smith</div>
                                    <div class="earning__col">5</div>
                                    <div class="earning__col">Sat, Apr 10</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">UI/UX</div>
                                    <div class="earning__col">Bob Johnson</div>
                                    <div class="earning__col">3</div>
                                    <div class="earning__col">Sun, Apr 11</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Frontend</div>
                                    <div class="earning__col">Alice Brown</div>
                                    <div class="earning__col">5</div>
                                    <div class="earning__col">Mon, Apr 12</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Backend</div>
                                    <div class="earning__col">Michael Wilson</div>
                                    <div class="earning__col">8</div>
                                    <div class="earning__col">Tue, Apr 13</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Backend Backup</div>
                                    <div class="earning__col">Emily Davis</div>
                                    <div class="earning__col">3</div>
                                    <div class="earning__col">Wed, Apr 14</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Wordpress Technical</div>
                                    <div class="earning__col">David White</div>
                                    <div class="earning__col">3</div>
                                    <div class="earning__col">Thu, Apr 15</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Graphic Designer</div>
                                    <div class="earning__col">Sarah Jones</div>
                                    <div class="earning__col">5</div>
                                    <div class="earning__col">Fri, Apr 16</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">QC &amp; Complain</div>
                                    <div class="earning__col">Tom Smith</div>
                                    <div class="earning__col">2</div>
                                    <div class="earning__col">Sat, Apr 17</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Offpage research</div>
                                    <div class="earning__col">Linda Wilson</div>
                                    <div class="earning__col">10</div>
                                    <div class="earning__col">Sun, Apr 18</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Competitor Research</div>
                                    <div class="earning__col">Robert Davis</div>
                                    <div class="earning__col">2</div>
                                    <div class="earning__col">Mon, Apr 19</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Inpage SEO</div>
                                    <div class="earning__col">Karen Wilson</div>
                                    <div class="earning__col">5</div>
                                    <div class="earning__col">Tue, Apr 20</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Content 1 (Lead)</div>
                                    <div class="earning__col">Richard Brown</div>
                                    <div class="earning__col">5</div>
                                    <div class="earning__col">Wed, Apr 21</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Content 2</div>
                                    <div class="earning__col">Emma Davis</div>
                                    <div class="earning__col">3</div>
                                    <div class="earning__col">Thu, Apr 22</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Content 3</div>
                                    <div class="earning__col">James Smith</div>
                                    <div class="earning__col">3</div>
                                    <div class="earning__col">Fri, Apr 23</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Content 4</div>
                                    <div class="earning__col">Olivia Brown</div>
                                    <div class="earning__col">3</div>
                                    <div class="earning__col">Sat, Apr 24</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Content 5</div>
                                    <div class="earning__col">William Wilson</div>
                                    <div class="earning__col">2</div>
                                    <div class="earning__col">Sun, Apr 25</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Fake Comment (Web &amp; Social)</div>
                                    <div class="earning__col">Ava Davis</div>
                                    <div class="earning__col">10</div>
                                    <div class="earning__col">Mon, Apr 26</div>
                                </div>

                                <div class="earning__row">
                                    <div class="earning__col">Social Media</div>
                                    <div class="earning__col">Lucas Smith</div>
                                    <div class="earning__col">2</div>
                                    <div class="earning__col">Tue, Apr 27</div>
                                </div>
                            </div>
                        </div>


                        <div class="hit">
                            <div class="hit__head">
                                <div class="title-green hit__title">More like this</div><a
                                    class="button-stroke button-small hit__button"
                                    href="{{route('traffic_report')}}"><span>View all</span>
                                    <svg class="icon icon-arrow-right">
                                        <use xlink:href="#icon-arrow-right"></use>
                                    </svg></a>
                            </div>
                            <div class="hit__wrapper">
                                <div class="hit__slider js-slider-hit">
                                    <div class="summary">
                                        <div class="summary__preview"><img srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x"
                                                src="{{asset('assets/img/content/product-pic-1.jpg')}}" alt="Product" />
                                            <div class="summary__control">
                                                <button class="summary__button">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </button>
                                                <button class="summary__button">
                                                    <svg class="icon icon-trash">
                                                        <use xlink:href="#icon-trash"></use>
                                                    </svg>
                                                </button>
                                                <button class="summary__button" data-popup=".js-popup-product">
                                                    <svg class="icon icon-arrow-right">
                                                        <use xlink:href="#icon-arrow-right"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="summary__line">
                                            <div class="summary__title">Bento Matte 3D Illustration</div>
                                            <div class="summary__price">$64
                                            </div>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="summary__counter">(87)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary">
                                        <div class="summary__preview"><img srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x"
                                                src="{{asset('assets/img/content/product-pic-2.jpg')}}" alt="Product" />
                                            <div class="summary__control">
                                                <button class="summary__button">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </button>
                                                <button class="summary__button">
                                                    <svg class="icon icon-trash">
                                                        <use xlink:href="#icon-trash"></use>
                                                    </svg>
                                                </button>
                                                <button class="summary__button" data-popup=".js-popup-product">
                                                    <svg class="icon icon-arrow-right">
                                                        <use xlink:href="#icon-arrow-right"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="summary__line">
                                            <div class="summary__title">Node - Crypto iOS UI design kit</div>
                                            <div class="summary__price">$123
                                            </div>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.9
                                            <div class="summary__counter">(87)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary">
                                        <div class="summary__preview"><img srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x"
                                                src="{{asset('assets/img/content/product-pic-3.jpg')}}" alt="Product" />
                                            <div class="summary__control">
                                                <button class="summary__button">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </button>
                                                <button class="summary__button">
                                                    <svg class="icon icon-trash">
                                                        <use xlink:href="#icon-trash"></use>
                                                    </svg>
                                                </button>
                                                <button class="summary__button" data-popup=".js-popup-product">
                                                    <svg class="icon icon-arrow-right">
                                                        <use xlink:href="#icon-arrow-right"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="summary__line">
                                            <div class="summary__title">TaskEz: Productivity App iOS UI Kit</div>
                                            <div class="summary__empty">$0
                                            </div>
                                        </div>
                                        <div class="summary__rating summary__rating_empty">
                                            <svg class="icon icon-star-stroke">
                                                <use xlink:href="#icon-star-stroke"></use>
                                            </svg>No ratings
                                        </div>
                                    </div>
                                    <div class="summary">
                                        <div class="summary__preview"><img srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x"
                                                src="{{asset('assets/img/content/product-pic-1.jpg')}}" alt="Product" />
                                            <div class="summary__control">
                                                <button class="summary__button">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </button>
                                                <button class="summary__button">
                                                    <svg class="icon icon-trash">
                                                        <use xlink:href="#icon-trash"></use>
                                                    </svg>
                                                </button>
                                                <button class="summary__button" data-popup=".js-popup-product">
                                                    <svg class="icon icon-arrow-right">
                                                        <use xlink:href="#icon-arrow-right"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="summary__line">
                                            <div class="summary__title">Bento Matte 3D Illustration</div>
                                            <div class="summary__price">$64
                                            </div>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="summary__counter">(87)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary">
                                        <div class="summary__preview"><img srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x"
                                                src="{{asset('assets/img/content/product-pic-2.jpg')}}" alt="Product" />
                                            <div class="summary__control">
                                                <button class="summary__button">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </button>
                                                <button class="summary__button">
                                                    <svg class="icon icon-trash">
                                                        <use xlink:href="#icon-trash"></use>
                                                    </svg>
                                                </button>
                                                <button class="summary__button" data-popup=".js-popup-product">
                                                    <svg class="icon icon-arrow-right">
                                                        <use xlink:href="#icon-arrow-right"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="summary__line">
                                            <div class="summary__title">Node - Crypto iOS UI design kit</div>
                                            <div class="summary__price">$123
                                            </div>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.9
                                            <div class="summary__counter">(87)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary">
                                        <div class="summary__preview"><img srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x"
                                                src="{{asset('assets/img/content/product-pic-3.jpg')}}" alt="Product" />
                                            <div class="summary__control">
                                                <button class="summary__button">
                                                    <svg class="icon icon-edit">
                                                        <use xlink:href="#icon-edit"></use>
                                                    </svg>
                                                </button>
                                                <button class="summary__button">
                                                    <svg class="icon icon-trash">
                                                        <use xlink:href="#icon-trash"></use>
                                                    </svg>
                                                </button>
                                                <button class="summary__button" data-popup=".js-popup-product">
                                                    <svg class="icon icon-arrow-right">
                                                        <use xlink:href="#icon-arrow-right"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="summary__line">
                                            <div class="summary__title">TaskEz: Productivity App iOS UI Kit</div>
                                            <div class="summary__empty">$0
                                            </div>
                                        </div>
                                        <div class="summary__rating summary__rating_empty">
                                            <svg class="icon icon-star-stroke">
                                                <use xlink:href="#icon-star-stroke"></use>
                                            </svg>No ratings
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__comments comments">
                        <div class="comments__head">
                            <div class="comments__title">
                                <div class="comments__counter">4</div>Comments
                            </div>
                            <button class="comments__close js-comments-close">
                                <svg class="icon icon-close">
                                    <use xlink:href="#icon-close"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="editor">
                            <div class="editor__label">Review this product?
                                <div class="tooltip" title="You’re product owner">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="editor__wrap">
                                <textarea class="editor__textarea js-editor"></textarea>
                                <button class="button-small editor__button disabled">Comment</button>
                            </div>
                        </div>
                        <div class="comments__list">
                            <div class="comments__item">
                                <div class="comments__avatar"><img src="{{asset('assets/img/content/avatar-1.jpg')}}" alt="Avatar">
                                </div>
                                <div class="comments__details">
                                    <div class="comments__line">
                                        <div class="comments__author">Stephon Schumm</div>
                                        <div class="comments__time">2h</div>
                                        <div class="comments__rating">5.0
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="comments__login">@ivawelch</div>
                                    <div class="comments__content">Purchased the pack and loaded it in Adobe xd (installed
                                        fonts as
                                        well), some text and titles are off in some screens, is that a compatibility problem
                                        with the
                                        latest version of xd?</div>
                                    <div class="comments__control">
                                        <button class="comments__favorite">
                                            <svg class="icon icon-heart">
                                                <use xlink:href="#icon-heart"></use>
                                            </svg>
                                            <svg class="icon icon-heart-fill">
                                                <use xlink:href="#icon-heart-fill"></use>
                                            </svg>Like
                                        </button>
                                        <button class="comments__reply">
                                            <svg class="icon icon-repeat">
                                                <use xlink:href="#icon-repeat"></use>
                                            </svg>Reply
                                        </button>
                                    </div>
                                    <div class="answer">
                                        <div class="answer__avatar"><img src="{{asset('assets/img/content/avatar.jpg')}}"
                                                alt="Avatar" /></div>
                                        <div class="answer__details">
                                            <div class="answer__message">
                                                <textarea class="answer__textarea" name="answer"
                                                    oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;"
                                                    placeholder="Leave something to reply" required="required"></textarea>
                                            </div>
                                            <div class="answer__btns">
                                                <button class="button button-small answer__button disabled">Reply</button>
                                                <button class="button-stroke button-small answer__button">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments__answer">
                                <div class="comments__avatar"><img src="{{asset('assets/img/content/avatar.jpg')}}" alt="Avatar"></div>
                                <div class="comments__details">
                                    <div class="comments__line">
                                        <div class="comments__author">Chelsie Haley</div>
                                        <div class="comments__time">18h</div>
                                        <div class="comments__rating">4.0
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="comments__content">Hi <strong>@ivawelch</strong>, let me check then tell
                                        you soon.</div>
                                    <div class="comments__control">
                                        <button class="comments__favorite">
                                            <svg class="icon icon-heart">
                                                <use xlink:href="#icon-heart"></use>
                                            </svg>
                                            <svg class="icon icon-heart-fill">
                                                <use xlink:href="#icon-heart-fill"></use>
                                            </svg>Like
                                        </button>
                                        <button class="comments__reply">
                                            <svg class="icon icon-repeat">
                                                <use xlink:href="#icon-repeat"></use>
                                            </svg>Reply
                                        </button>
                                    </div>
                                    <div class="answer">
                                        <div class="answer__avatar"><img src="{{asset('assets/img/content/avatar.jpg')}}"
                                                alt="Avatar" /></div>
                                        <div class="answer__details">
                                            <div class="answer__message">
                                                <textarea class="answer__textarea" name="answer"
                                                    oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;"
                                                    placeholder="Leave something to reply" required="required"></textarea>
                                            </div>
                                            <div class="answer__btns">
                                                <button class="button button-small answer__button disabled">Reply</button>
                                                <button class="button-stroke button-small answer__button">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments__item">
                                <div class="comments__avatar"><img src="{{asset('assets/img/content/avatar-2.jpg')}}" alt="Avatar">
                                </div>
                                <div class="comments__details">
                                    <div class="comments__line">
                                        <div class="comments__author">Sabryna Mills</div>
                                        <div class="comments__time">15h</div>
                                        <div class="comments__rating">5.0
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="comments__login">@ivawelch</div>
                                    <div class="comments__content">Five stars. I love this product!</div>
                                    <div class="comments__control">
                                        <button class="comments__favorite">
                                            <svg class="icon icon-heart">
                                                <use xlink:href="#icon-heart"></use>
                                            </svg>
                                            <svg class="icon icon-heart-fill">
                                                <use xlink:href="#icon-heart-fill"></use>
                                            </svg>Like
                                        </button>
                                        <button class="comments__reply">
                                            <svg class="icon icon-repeat">
                                                <use xlink:href="#icon-repeat"></use>
                                            </svg>Reply
                                        </button>
                                    </div>
                                    <div class="answer">
                                        <div class="answer__avatar"><img src="{{asset('assets/img/content/avatar.jpg')}}"
                                                alt="Avatar" /></div>
                                        <div class="answer__details">
                                            <div class="answer__message">
                                                <textarea class="answer__textarea" name="answer"
                                                    oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;"
                                                    placeholder="Leave something to reply" required="required"></textarea>
                                            </div>
                                            <div class="answer__btns">
                                                <button class="button button-small answer__button disabled">Reply</button>
                                                <button class="button-stroke button-small answer__button">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments__item">
                                <div class="comments__avatar"><img src="{{asset('assets/img/content/avatar-4.jpg')}}" alt="Avatar">
                                </div>
                                <div class="comments__details">
                                    <div class="comments__line">
                                        <div class="comments__author">Micaela Mayer</div>
                                        <div class="comments__time">1 day ago</div>
                                        <div class="comments__rating">5.0
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="comments__login">@ivawelch</div>
                                    <div class="comments__content">Purchased the pack and loaded it in Adobe xd (installed
                                        fonts as
                                        well), some text and titles are off in some screens, is that a compatibility problem
                                        with the
                                        latest version of xd?</div>
                                    <div class="comments__control">
                                        <button class="comments__favorite">
                                            <svg class="icon icon-heart">
                                                <use xlink:href="#icon-heart"></use>
                                            </svg>
                                            <svg class="icon icon-heart-fill">
                                                <use xlink:href="#icon-heart-fill"></use>
                                            </svg>Like
                                        </button>
                                        <button class="comments__reply">
                                            <svg class="icon icon-repeat">
                                                <use xlink:href="#icon-repeat"></use>
                                            </svg>Reply
                                        </button>
                                    </div>
                                    <div class="answer">
                                        <div class="answer__avatar"><img src="{{asset('assets/img/content/avatar.jpg')}}"
                                                alt="Avatar" /></div>
                                        <div class="answer__details">
                                            <div class="answer__message">
                                                <textarea class="answer__textarea" name="answer"
                                                    oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;"
                                                    placeholder="Leave something to reply" required="required"></textarea>
                                            </div>
                                            <div class="answer__btns">
                                                <button class="button button-small answer__button disabled">Reply</button>
                                                <button class="button-stroke button-small answer__button">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments__item">
                                <div class="comments__avatar"><img src="{{asset('assets/img/content/avatar-3.jpg')}}" alt="Avatar">
                                </div>
                                <div class="comments__details">
                                    <div class="comments__line">
                                        <div class="comments__author">Daphne Goodwin</div>
                                        <div class="comments__time">2 days ago</div>
                                        <div class="comments__rating">5.0
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="comments__login">@ivawelch</div>
                                    <div class="comments__content">Purchased the pack and loaded it in Adobe xd (installed
                                        fonts as
                                        well), some text and titles are off in some screens, is that a compatibility problem
                                        with the
                                        latest version of xd?</div>
                                    <div class="comments__control">
                                        <button class="comments__favorite">
                                            <svg class="icon icon-heart">
                                                <use xlink:href="#icon-heart"></use>
                                            </svg>
                                            <svg class="icon icon-heart-fill">
                                                <use xlink:href="#icon-heart-fill"></use>
                                            </svg>Like
                                        </button>
                                        <button class="comments__reply">
                                            <svg class="icon icon-repeat">
                                                <use xlink:href="#icon-repeat"></use>
                                            </svg>Reply
                                        </button>
                                    </div>
                                    <div class="answer">
                                        <div class="answer__avatar"><img src="{{asset('assets/img/content/avatar.jpg')}}"
                                                alt="Avatar" /></div>
                                        <div class="answer__details">
                                            <div class="answer__message">
                                                <textarea class="answer__textarea" name="answer"
                                                    oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;"
                                                    placeholder="Leave something to reply" required="required"></textarea>
                                            </div>
                                            <div class="answer__btns">
                                                <button class="button button-small answer__button disabled">Reply</button>
                                                <button class="button-stroke button-small answer__button">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product__panel">
                        <div class="product__avatar"><img src="{{asset('assets/img/content/avatar.jpg')}}" alt="Avatar"></div>
                        <div class="product__brand"><img src="{{asset('assets/img/content/figma.png')}}" alt="Figma">
                            <div class="product__number">3</div>
                        </div>
                        <button class="product__share" data-popup=".js-popup-share">
                            <svg class="icon icon-share">
                                <use xlink:href="#icon-share"></use>
                            </svg>
                        </button>
                    </div><a class="product__next" href="#">
                        <svg class="icon icon-arrow-right">
                            <use xlink:href="#icon-arrow-right"></use>
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
@endsection
