@extends('layout.layout')

@section('content')
    <div class="page__inner">
        <div class="page__container">
            <div class="shop">
                <div class="shop__background"><img src="{{ asset('assets/img/content/bg-shop.jpg') }}" alt="Background"></div>
                <div class="shop__tabs card js-tabs">
                    <div class="shop__profile">
                        <div class="shop__details">
                            <div class="shop__avatar"><img src="{{ asset('assets/img/content/avatar.jpg') }}" alt="Avatar">
                                <button class="shop__add">
                                    <svg class="icon icon-add">
                                        <use xlink:href="#icon-add"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="shop__wrap">
                                <div class="h4 shop__man">Chelsie Haley</div>
                                <div class="shop__info">Dream big. Think different. Do great!</div>
                            </div>
                        </div>
                        <div class="shop__contacts">
                            <div class="shop__socials"><a class="shop__social" href="#" target="_blank">
                                    <img src="https://www.bjbaji.com/images/web/bj-favicon.ico"></a><a class="shop__social"
                                    href="#" target="_blank">
                                    <img src="https://www.freelancer.com/favicon.ico"></a><a class="shop__social"
                                    href="#" target="_blank">
                                    <img src="https://www.upwork.com/favicon.ico"></a>
                                <a class="shop__social" href="#" target="_blank">
                                    <img
                                        src="https://fiverr-res.cloudinary.com/npm-assets/layout-server/favicon.52df53a.ico"></a>
                            </div>
                            <button class="button shop__button">BJT Profile</button>
                        </div>
                    </div>
                    <div class="shop__control">
                        <div class="shop__nav"><a class="shop__link js-tabs-link active" href="#">Projects</a><a
                                class="shop__link js-tabs-link" href="#">Guiding</a>
                            <a class="shop__link js-tabs-link" href="#">Recruiting</a>
                        </div>
                        <div class="shop__select">
                            <!-- <select class="select select_small">
                        <option>Most recent</option>
                        <option>Most new</option>
                        <option>Most popular</option>
                      </select> -->
                        </div>
                        <!-- <div class="filters">
                      <button class="button-square-stroke button-small filters__head">
                        <svg class="icon icon-filter">
                          <use xlink:href="#icon-filter"></use>
                        </svg>
                      </button>
                      <div class="filters__body">
                        <div class="filters__top">
                          <div class="title-red filters__title">Showing 9 of 32 products</div>
                          <button class="filters__close">
                            <svg class="icon icon-close">
                              <use xlink:href="#icon-close"></use>
                            </svg>
                          </button>
                        </div>
                        <form class="form">
                          <input class="form__input" type="text" name="search" placeholder="Search for products" required="required" autocomplete="off"/>
                          <button class="form__button">
                            <svg class="icon icon-search">
                              <use xlink:href="#icon-search"></use>
                            </svg>
                          </button>
                        </form>
                        <div class="filters__group">
                          <div class="filters__item">
                            <div class="field">
                              <div class="field__label">Sort by</div>
                              <div class="field__wrap">
                                <select class="select">
                                  <option>Featured</option>
                                  <option>Last</option>
                                  <option>New</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="filters__item">
                            <div class="filters__label">Showing</div>
                            <div class="filters__list">
                              <label class="checkbox checkbox_reverse">
                                <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">All products</span></span>
                              </label>
                              <label class="checkbox checkbox_reverse">
                                <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">UI Kit</span></span>
                              </label>
                              <label class="checkbox checkbox_reverse">
                                <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Illustration</span></span>
                              </label>
                              <label class="checkbox checkbox_reverse">
                                <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Wireframe kit</span></span>
                              </label>
                              <label class="checkbox checkbox_reverse">
                                <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Icons</span></span>
                              </label>
                            </div>
                          </div>
                          <div class="filters__item">
                            <div class="filters__label">Price</div>
                            <div class="filters__range js-slider" data-min="0" data-max="100" data-start="20" data-end="50" data-step="1" data-tooltips="true" data-prefix="$"></div>
                          </div>
                          <div class="filters__item">
                            <div class="filters__box">
                              <div class="field">
                                <div class="field__label">Rating</div>
                                <div class="field__wrap">
                                  <select class="select select_up">
                                    <option>1 and up</option>
                                    <option>2 and up</option>
                                    <option>3 and up</option>
                                    <option selected>4 and up</option>
                                    <option>5</option>
                                  </select>
                                </div>
                              </div>
                              <svg class="icon icon-heart-fill">
                                <use xlink:href="#icon-heart-fill"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="filters__btns">
                          <button class="button-stroke filters__button">Reset</button>
                          <button class="button filters__button">Apply</button>
                        </div>
                      </div>
                      <div class="filters__overlay"></div>
                    </div> -->
                    </div>
                    <div class="shop__container">
                        <div class="shop__tab js-tabs-item" style="display: block;">
                            <div class="shop__products">
                                <div class="summary">
                                    <div class="summary__preview"><img
                                            srcSet="{{ asset('assets/img/content/product-pic-1@2x.jpg') }} 2x"
                                            src="{{ asset('assets/img/content/product-pic-1.jpg') }}" alt="Product" />
                                        <div class="summary__control">
                                            <button class="summary__button">
                                                <svg class="icon icon-edit">
                                                    <use xlink:href="#icon-edit"></use>
                                                </svg>
                                            </button>
                                            <button data-popup=".js-popup-product" class="summary__button">
                                                <i class="fa fa-area-chart " aria-hidden="true"></i>
                                            </button>
                                            <button class="summary__button">
                                                <svg class="icon icon-arrow-right">
                                                    <use xlink:href="#icon-arrow-right"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="summary__line">
                                        <div class="summary__title">Project Name</div>
                                        <div class="summary__price">$64
                                        </div>
                                    </div>
                                    <div class="ratin-section">
                                        <div class="position">
                                            <p>Manager</p>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="summary__counter">(87)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary">
                                    <div class="summary__preview"><img
                                            srcSet="{{ asset('assets/img/content/product-pic-2@2x.jpg') }} 2x"
                                            src="{{ asset('assets/img/content/product-pic-2.jpg') }}" alt="Product" />
                                        <div class="summary__control">
                                            <button class="summary__button">
                                                <svg class="icon icon-edit">
                                                    <use xlink:href="#icon-edit"></use>
                                                </svg>
                                            </button>
                                            <button data-popup=".js-popup-product" class="summary__button">
                                                <i class="fa fa-area-chart " aria-hidden="true"></i>
                                            </button>
                                            <button class="summary__button">
                                                <svg class="icon icon-arrow-right">
                                                    <use xlink:href="#icon-arrow-right"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="summary__line">
                                        <div class="summary__title">Project Name</div>
                                        <div class="summary__price">$123
                                        </div>
                                    </div>
                                    <div class="ratin-section">
                                        <div class="position">
                                            <p>Manager</p>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="summary__counter">(87)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary">
                                    <div class="summary__preview"><img
                                            srcSet="{{ asset('assets/img/content/product-pic-3@2x.jpg') }} 2x"
                                            src="{{ asset('assets/img/content/product-pic-3.jpg') }}" alt="Product" />
                                        <div class="summary__control">
                                            <button class="summary__button">
                                                <svg class="icon icon-edit">
                                                    <use xlink:href="#icon-edit"></use>
                                                </svg>
                                            </button>
                                            <button data-popup=".js-popup-product" class="summary__button">
                                                <i class="fa fa-area-chart " aria-hidden="true"></i>
                                            </button>
                                            <button class="summary__button">
                                                <svg class="icon icon-arrow-right">
                                                    <use xlink:href="#icon-arrow-right"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="summary__line">
                                        <div class="summary__title">Project Name </div>
                                        <div class="summary__empty">$0
                                        </div>
                                    </div>
                                    <div class="ratin-section">
                                        <div class="position">
                                            <p>Manager</p>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-stroke">
                                                <use xlink:href="#icon-star-stroke"></use>
                                            </svg>No ratings
                                        </div>
                                    </div>
                                </div>
                                <div class="summary">
                                    <div class="summary__preview"><img
                                            srcSet="{{ asset('assets/img/content/product-pic-6@2x.jpg') }} 2x"
                                            src="{{ asset('assets/img/content/product-pic-6.jpg') }}" alt="Product" />
                                        <div class="summary__control">
                                            <button class="summary__button">
                                                <svg class="icon icon-edit">
                                                    <use xlink:href="#icon-edit"></use>
                                                </svg>
                                            </button>
                                            <button data-popup=".js-popup-product" class="summary__button">
                                                <i class="fa fa-area-chart " aria-hidden="true"></i>
                                            </button>
                                            <button class="summary__button">
                                                <svg class="icon icon-arrow-right">
                                                    <use xlink:href="#icon-arrow-right"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="summary__line">
                                        <div class="summary__title">Project Name</div>
                                        <div class="summary__price">$64
                                        </div>
                                    </div>
                                    <div class="ratin-section">
                                        <div class="position">
                                            <p>Manager</p>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="summary__counter">(87)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary">
                                    <div class="summary__preview"><img
                                            srcSet="{{ asset('assets/img/content/product-pic-5@2x.jpg') }} 2x"
                                            src="{{ asset('assets/img/content/product-pic-5.jpg') }}" alt="Product" />
                                        <div class="summary__control">
                                            <button class="summary__button">
                                                <svg class="icon icon-edit">
                                                    <use xlink:href="#icon-edit"></use>
                                                </svg>
                                            </button>
                                            <button data-popup=".js-popup-product" class="summary__button">
                                                <i class="fa fa-area-chart " aria-hidden="true"></i>
                                            </button>
                                            <button class="summary__button">
                                                <svg class="icon icon-arrow-right">
                                                    <use xlink:href="#icon-arrow-right"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="summary__line">
                                        <div class="summary__title">Project Name</div>
                                        <div class="summary__price">$123
                                        </div>
                                    </div>
                                    <div class="ratin-section">
                                        <div class="position">
                                            <p>Manager</p>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="summary__counter">(87)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary">
                                    <div class="summary__preview"><img
                                            srcSet="{{ asset('assets/img/content/product-pic-4@2x.jpg') }} 2x"
                                            src="{{ asset('assets/img/content/product-pic-4.jpg') }}" alt="Product" />
                                        <div class="summary__control">
                                            <button class="summary__button">
                                                <svg class="icon icon-edit">
                                                    <use xlink:href="#icon-edit"></use>
                                                </svg>
                                            </button>
                                            <button data-popup=".js-popup-product" class="summary__button">
                                                <i class="fa fa-area-chart " aria-hidden="true"></i>
                                            </button>
                                            <button class="summary__button">
                                                <svg class="icon icon-arrow-right">
                                                    <use xlink:href="#icon-arrow-right"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="summary__line">
                                        <div class="summary__title">Project Name </div>
                                        <div class="summary__price">$45
                                        </div>
                                    </div>
                                    <div class="ratin-section">
                                        <div class="position">
                                            <p>Manager</p>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="summary__counter">(87)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary">
                                    <div class="summary__preview"><img
                                            srcSet="{{ asset('assets/img/content/product-pic-1@2x.jpg') }} 2x"
                                            src="{{ asset('assets/img/content/product-pic-1.jpg') }}" alt="Product" />
                                        <div class="summary__control">
                                            <button class="summary__button">
                                                <svg class="icon icon-edit">
                                                    <use xlink:href="#icon-edit"></use>
                                                </svg>
                                            </button>
                                            <button data-popup=".js-popup-product" class="summary__button">
                                                <i class="fa fa-area-chart " aria-hidden="true"></i>
                                            </button>
                                            <button class="summary__button">
                                                <svg class="icon icon-arrow-right">
                                                    <use xlink:href="#icon-arrow-right"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="summary__line">
                                        <div class="summary__title">Project Name</div>
                                        <div class="summary__price">$64
                                        </div>
                                    </div>
                                    <div class="ratin-section">
                                        <div class="position">
                                            <p>Manager</p>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="summary__counter">(87)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary">
                                    <div class="summary__preview"><img
                                            srcSet="{{ asset('assets/img/content/product-pic-2@2x.jpg') }} 2x"
                                            src="{{ asset('assets/img/content/product-pic-2.jpg') }}" alt="Product" />
                                        <div class="summary__control">
                                            <button class="summary__button">
                                                <svg class="icon icon-edit">
                                                    <use xlink:href="#icon-edit"></use>
                                                </svg>
                                            </button>
                                            <button data-popup=".js-popup-product" class="summary__button">
                                                <i class="fa fa-area-chart " aria-hidden="true"></i>
                                            </button>
                                            <button class="summary__button">
                                                <svg class="icon icon-arrow-right">
                                                    <use xlink:href="#icon-arrow-right"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="summary__line">
                                        <div class="summary__title">Project Name</div>
                                        <div class="summary__price">$123
                                        </div>
                                    </div>
                                    <div class="ratin-section">
                                        <div class="position">
                                            <p>Manager</p>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="summary__counter">(87)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary">
                                    <div class="summary__preview"><img
                                            srcSet="{{ asset('assets/img/content/product-pic-3@2x.jpg') }} 2x"
                                            src="{{ asset('assets/img/content/product-pic-3.jpg') }}" alt="Product" />
                                        <div class="summary__control">
                                            <button class="summary__button">
                                                <svg class="icon icon-edit">
                                                    <use xlink:href="#icon-edit"></use>
                                                </svg>
                                            </button>
                                            <button data-popup=".js-popup-product" class="summary__button">
                                                <i class="fa fa-area-chart " aria-hidden="true"></i>
                                            </button>
                                            <button class="summary__button">
                                                <svg class="icon icon-arrow-right">
                                                    <use xlink:href="#icon-arrow-right"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="summary__line">
                                        <div class="summary__title">Project Name </div>
                                        <div class="summary__price">$45
                                        </div>
                                    </div>
                                    <div class="ratin-section">
                                        <div class="position">
                                            <p>Manager</p>
                                        </div>
                                        <div class="summary__rating">
                                            <svg class="icon icon-star-fill">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="summary__counter">(87)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop__foot">
                                <button class="button-stroke button-small shop__button">Load more</button>
                            </div>
                        </div>
                        <div class="shop__tab js-tabs-item">
                            <div class="work-guide">
                                <a class="button header__button" href="#">
                                    <span>Add Guider</span></a>
                            </div>
                            <div class="shop__group">
                                <div class="follower">
                                    <div class="follower__details">
                                        <div class="follower__avatar"><img
                                                src="{{ asset('assets/img/content/avatar-1.jpg') }}" alt="Avatar" />
                                        </div>
                                        <div class="follower__wrap">
                                            <div class="follower__man">Reed Parker</div>
                                            <div class="follower__list">
                                                <div class="follower__counter"><span>16 </span>projects</div>
                                                <div class="follower__counter"><span>34 </span>C.points</div>
                                            </div>
                                            <div class="follower__btns">
                                                <button
                                                    class="button-stroke follower__button follower__button_follow">Visit
                                                    profile</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="follower__gallery">
                                        <div class="follower__preview"><img
                                                srcSet="{{ asset('assets/img/content/product-pic-1@2x.jpg') }} 2x"
                                                src="{{ asset('assets/img/content/product-pic-1.jpg') }}"
                                                alt="Core - Dashboard Builder" />
                                        </div>
                                        <div class="follower__preview"><img
                                                srcSet="{{ asset('assets/img/content/product-pic-2@2x.jpg') }} 2x"
                                                src="{{ asset('assets/img/content/product-pic-2.jpg') }}"
                                                alt="Core - Dashboard Builder" />
                                        </div>
                                        <div class="follower__preview"><img
                                                srcSet="{{ asset('assets/img/content/product-pic-3@2x.jpg') }} 2x"
                                                src="{{ asset('assets/img/content/product-pic-3.jpg') }}"
                                                alt="Core - Dashboard Builder" />
                                        </div>
                                    </div>
                                </div>
                                <div class="follower">
                                    <div class="follower__details">
                                        <div class="follower__avatar"><img
                                                src="{{ asset('assets/img/content/avatar-2.jpg') }}" alt="Avatar" />
                                        </div>
                                        <div class="follower__wrap">
                                            <div class="follower__man">Tristian Hermiston</div>
                                            <div class="follower__list">
                                                <div class="follower__counter"><span>16 </span>projects</div>
                                                <div class="follower__counter"><span>34 </span>C.points</div>
                                            </div>
                                            <div class="follower__btns">
                                                <button
                                                    class="button-stroke follower__button follower__button_follow">Visit
                                                    profile</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="follower__gallery">
                                        <div class="follower__preview"><img
                                                srcSet="{{ asset('assets/img/content/product-pic-4@2x.jpg') }} 2x"
                                                src="{{ asset('assets/img/content/product-pic-4.jpg') }}"
                                                alt="Core - Dashboard Builder" />
                                        </div>
                                        <div class="follower__preview"><img
                                                srcSet="{{ asset('assets/img/content/product-pic-5@2x.jpg') }} 2x"
                                                src="{{ asset('assets/img/content/product-pic-5.jpg') }}"
                                                alt="Core - Dashboard Builder" />
                                        </div>
                                        <div class="follower__preview"><img
                                                srcSet="{{ asset('assets/img/content/product-pic-6@2x.jpg') }} 2x"
                                                src="{{ asset('assets/img/content/product-pic-6.jpg') }}"
                                                alt="Core - Dashboard Builder" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop__foot">
                                <button class="button-stroke button-small shop__button">Load more</button>
                            </div>
                        </div>
                        <div class="shop__tab js-tabs-item">
                            <div class="work-guide">
                                <p class="who-recruite">
                                    <img src="{{ asset('assets/img/content/avatar-1.jpg') }}" style="cursor: default;">
                                    <span><strong style="color:#000">Super</strong> recuit me</span>
                                </p>
                            </div>
                            <div class="shop__group">
                                <div class="follower">
                                    <div class="follower__details">
                                        <div class="follower__avatar"><img
                                                src="{{ asset('assets/img/content/avatar-1.jpg') }}" alt="Avatar" />
                                        </div>
                                        <div class="follower__wrap">
                                            <div class="follower__man">Reed Parker</div>
                                            <div class="follower__list">
                                                <div class="follower__counter"><span>16 </span>projects</div>
                                                <div class="follower__counter"><span>34 </span>C.points</div>
                                            </div>
                                            <div class="follower__btns">
                                                <button
                                                    class="button-stroke follower__button follower__button_follow">Visit
                                                    profile</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="follower__gallery">
                                        <div class="follower__preview"><img
                                                srcSet="{{ asset('assets/img/content/product-pic-1@2x.jpg') }} 2x"
                                                src="{{ asset('assets/img/content/product-pic-1.jpg') }}"
                                                alt="Core - Dashboard Builder" />
                                        </div>
                                        <div class="follower__preview"><img
                                                srcSet="{{ asset('assets/img/content/product-pic-2@2x.jpg') }} 2x"
                                                src="{{ asset('assets/img/content/product-pic-2.jpg') }}"
                                                alt="Core - Dashboard Builder" />
                                        </div>
                                        <div class="follower__preview"><img
                                                srcSet="{{ asset('assets/img/content/product-pic-3@2x.jpg') }} 2x"
                                                src="{{ asset('assets/img/content/product-pic-3.jpg') }}"
                                                alt="Core - Dashboard Builder" />
                                        </div>
                                    </div>
                                </div>
                                <div class="follower">
                                    <div class="follower__details">
                                        <div class="follower__avatar"><img
                                                src="{{ asset('assets/img/content/avatar-2.jpg') }}" alt="Avatar" />
                                        </div>
                                        <div class="follower__wrap">
                                            <div class="follower__man">Tristian Hermiston</div>
                                            <div class="follower__list">
                                                <div class="follower__counter"><span>16 </span>projects</div>
                                                <div class="follower__counter"><span>34 </span>C.points</div>
                                            </div>
                                            <div class="follower__btns">
                                                <button
                                                    class="button-stroke follower__button follower__button_follow">Visit
                                                    profile</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="follower__gallery">
                                        <div class="follower__preview"><img
                                                srcSet="{{ asset('assets/img/content/product-pic-4@2x.jpg') }} 2x"
                                                src="{{ asset('assets/img/content/product-pic-4.jpg') }}"
                                                alt="Core - Dashboard Builder" />
                                        </div>
                                        <div class="follower__preview"><img
                                                srcSet="{{ asset('assets/img/content/product-pic-5@2x.jpg') }} 2x"
                                                src="{{ asset('assets/img/content/product-pic-5.jpg') }}"
                                                alt="Core - Dashboard Builder" />
                                        </div>
                                        <div class="follower__preview"><img
                                                srcSet="{{ asset('assets/img/content/product-pic-6@2x.jpg') }} 2x"
                                                src="{{ asset('assets/img/content/product-pic-6.jpg') }}"
                                                alt="Core - Dashboard Builder" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop__foot">
                                <button class="button-stroke button-small shop__button">Load more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('profile-footer')
    <div class="popup popup_product js-popup js-popup-product">
        <div class="popup__overlay js-popup-overlay"></div>
        <div class="popup__wrap js-popup-wrap">
            <div class="product js-product">
                <div class="product__control">
                    <button class="product__close js-popup-close">
                        <svg class="icon icon-close">
                            <use xlink:href="#icon-close"></use>
                        </svg>
                    </button>
                </div>
                <div style="width:1020px;" class="product__wrapper">
                    <div class="product__details">
                        <div class="product__overview">
                            <div class="product__head">
                                <div class="product__nav">
                                    <button class="product__link js-product-open active">Traffic</button>
                                    <button class="product__link js-product-comments">Comments</button>
                                </div>
                                <div class="product__btns">
                                    <button class="button-stroke product__favorite">
                                        <svg class="icon icon-heart-fill">
                                            <use xlink:href="#icon-heart-fill"></use>
                                        </svg><span>32</span>
                                    </button>
                                    <button class="button product__buy"><span class="product__price">$89</span><span
                                            class="product__inner">Download<span> now</span>
                                            <svg class="icon icon-download">
                                                <use xlink:href="#icon-download"></use>
                                            </svg></span></button>
                                </div>
                            </div>

                            <div class="create__card card">
                                <div class="card__head">
                                    <div class="title-red card__title">GA Submission</div>
                                </div>
                                <div class="field">
                                    <div class="field__label">Month
                                        <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="field__wrap">
                                        <select class="select">
                                            <option>Select Month</option>
                                            <option>July</option>
                                            <option>August</option>
                                            <option>September</option>
                                            <option>October</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="ga_report_grid">
                                    <div class="field">
                                        <div class="field__label">Users
                                        </div>
                                        <div class="field__wrap">
                                            <input class="field__input" type="text" name="title" required>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">New Users
                                        </div>
                                        <div class="field__wrap">
                                            <input class="field__input" type="text" name="title" required>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">Average Engagement Time
                                        </div>
                                        <div class="field__wrap">
                                            <input class="field__input" type="text" name="title" required>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="field__label">Engagement Rate
                                        </div>
                                        <div class="field__wrap">
                                            <input class="field__input" type="text" name="title" required>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="field__label">Session
                                        </div>
                                        <div class="field__wrap">
                                            <input class="field__input" type="text" name="title" required>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="field__label">Mobile User %
                                        </div>
                                        <div class="field__wrap">
                                            <input class="field__input" type="text" name="title" required>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="field__label">Desktop User %
                                        </div>
                                        <div class="field__wrap">
                                            <input class="field__input" type="text" name="title" required>
                                        </div>
                                    </div>





                                </div>
                                <div class="card__head">
                                    <div class="title-blue card__title">Country Audience</div>
                                </div>
                                <div class="ga_report_grid">

                                    <label class="checkbox">
                                        <input class="checkbox__input" type="checkbox"><span
                                            class="checkbox__inner"><span class="checkbox__tick"></span><span
                                                class="checkbox__text">
                                                <div class="field">
                                                    <div class="field__label">Indian User %
                                                    </div>

                                                </div>
                                            </span></span>
                                        <div class="field__wrap mt-10">
                                            <input class="field__input" type="text" name="title" required>
                                        </div>
                                    </label>
                                    <label class="checkbox">
                                        <input class="checkbox__input" type="checkbox"><span
                                            class="checkbox__inner"><span class="checkbox__tick"></span><span
                                                class="checkbox__text">
                                                <div class="field">
                                                    <div class="field__label">Pakistan User %
                                                    </div>

                                                </div>
                                            </span></span>
                                        <div class="field__wrap mt-10">
                                            <input class="field__input" type="text" name="title" required>
                                        </div>
                                    </label>
                                    <label class="checkbox">
                                        <input class="checkbox__input" type="checkbox"><span
                                            class="checkbox__inner"><span class="checkbox__tick"></span><span
                                                class="checkbox__text">
                                                <div class="field">
                                                    <div class="field__label">Bangladesh User %
                                                    </div>

                                                </div>
                                            </span></span>
                                        <div class="field__wrap mt-10">
                                            <input class="field__input" type="text" name="title" required>
                                        </div>
                                    </label>
                                    <label class="checkbox">
                                        <input class="checkbox__input" type="checkbox"><span
                                            class="checkbox__inner"><span class="checkbox__tick"></span><span
                                                class="checkbox__text">
                                                <div class="field">
                                                    <div class="field__label">Vietnam User %
                                                    </div>

                                                </div>
                                            </span></span>
                                        <div class="field__wrap mt-10">
                                            <input class="field__input" type="text" name="title" required>
                                        </div>
                                    </label>
                                    <label class="checkbox">
                                        <input class="checkbox__input" type="checkbox"><span
                                            class="checkbox__inner"><span class="checkbox__tick"></span><span
                                                class="checkbox__text">
                                                <div class="field">
                                                    <div class="field__label">Combodia User %
                                                    </div>

                                                </div>
                                            </span></span>
                                        <div class="field__wrap mt-10">
                                            <input class="field__input" type="text" name="title" required>
                                        </div>
                                    </label>




                                </div>

                                <div class="editor">
                                    <div class="editor__label">Message to reviewer
                                        <div class="tooltip" title="Description">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <textarea class="editor__textarea js-editor"></textarea>
                                </div>
                                <div style="display: flex; grid-gap: 20px; margin-top: 20px;" class="form_submit_btns">
                                    <button class="button-stroke panel__button">Save Draft</button>
                                    <button class="button panel__button">Publish now</button>
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
                                    <div class="comments__avatar"><img
                                            src="{{ asset('assets/img/content/avatar-1.jpg') }}" alt="Avatar"></div>
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
                                        <div class="comments__content">Purchased the pack and loaded it in Adobe xd
                                            (installed fonts as
                                            well), some text and titles are off in some screens, is that a compatibility
                                            problem with the
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
                                            <div class="answer__avatar"><img
                                                    src="{{ asset('assets/img/content/avatar.jpg') }}" alt="Avatar" />
                                            </div>
                                            <div class="answer__details">
                                                <div class="answer__message">
                                                    <textarea class="answer__textarea" name="answer"
                                                        oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;"
                                                        placeholder="Leave something to reply" required="required"></textarea>
                                                </div>
                                                <div class="answer__btns">
                                                    <button
                                                        class="button button-small answer__button disabled">Reply</button>
                                                    <button
                                                        class="button-stroke button-small answer__button">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments__answer">
                                    <div class="comments__avatar"><img src="{{ asset('assets/img/content/avatar.jpg') }}"
                                            alt="Avatar"></div>
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
                                        <div class="comments__content">Hi <strong>@ivawelch</strong>, let me check then
                                            tell you soon.
                                        </div>
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
                                            <div class="answer__avatar"><img
                                                    src="{{ asset('assets/img/content/avatar.jpg') }}" alt="Avatar" />
                                            </div>
                                            <div class="answer__details">
                                                <div class="answer__message">
                                                    <textarea class="answer__textarea" name="answer"
                                                        oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;"
                                                        placeholder="Leave something to reply" required="required"></textarea>
                                                </div>
                                                <div class="answer__btns">
                                                    <button
                                                        class="button button-small answer__button disabled">Reply</button>
                                                    <button
                                                        class="button-stroke button-small answer__button">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments__item">
                                    <div class="comments__avatar"><img
                                            src="{{ asset('assets/img/content/avatar-2.jpg') }}" alt="Avatar"></div>
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
                                            <div class="answer__avatar"><img
                                                    src="{{ asset('assets/img/content/avatar.jpg') }}" alt="Avatar" />
                                            </div>
                                            <div class="answer__details">
                                                <div class="answer__message">
                                                    <textarea class="answer__textarea" name="answer"
                                                        oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;"
                                                        placeholder="Leave something to reply" required="required"></textarea>
                                                </div>
                                                <div class="answer__btns">
                                                    <button
                                                        class="button button-small answer__button disabled">Reply</button>
                                                    <button
                                                        class="button-stroke button-small answer__button">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments__item">
                                    <div class="comments__avatar"><img
                                            src="{{ asset('assets/img/content/avatar-4.jpg') }}" alt="Avatar"></div>
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
                                        <div class="comments__content">Purchased the pack and loaded it in Adobe xd
                                            (installed fonts as
                                            well), some text and titles are off in some screens, is that a compatibility
                                            problem with the
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
                                            <div class="answer__avatar"><img
                                                    src="{{ asset('assets/img/content/avatar.jpg') }}" alt="Avatar" />
                                            </div>
                                            <div class="answer__details">
                                                <div class="answer__message">
                                                    <textarea class="answer__textarea" name="answer"
                                                        oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;"
                                                        placeholder="Leave something to reply" required="required"></textarea>
                                                </div>
                                                <div class="answer__btns">
                                                    <button
                                                        class="button button-small answer__button disabled">Reply</button>
                                                    <button
                                                        class="button-stroke button-small answer__button">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments__item">
                                    <div class="comments__avatar"><img
                                            src="{{ asset('assets/img/content/avatar-3.jpg') }}" alt="Avatar"></div>
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
                                        <div class="comments__content">Purchased the pack and loaded it in Adobe xd
                                            (installed fonts as
                                            well), some text and titles are off in some screens, is that a compatibility
                                            problem with the
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
                                            <div class="answer__avatar"><img
                                                    src="{{ asset('assets/img/content/avatar.jpg') }}" alt="Avatar" />
                                            </div>
                                            <div class="answer__details">
                                                <div class="answer__message">
                                                    <textarea class="answer__textarea" name="answer"
                                                        oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;"
                                                        placeholder="Leave something to reply" required="required"></textarea>
                                                </div>
                                                <div class="answer__btns">
                                                    <button
                                                        class="button button-small answer__button disabled">Reply</button>
                                                    <button
                                                        class="button-stroke button-small answer__button">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup popup_share js-popup js-popup-share">
            <div class="popup__overlay js-popup-overlay"></div>
            <div class="popup__wrap js-popup-wrap">
                <div class="share">
                    <div class="share__head">
                        <div class="title-red share__title">Share this product</div>
                    </div>
                    <div class="share__field">
                        <div class="share__icon">
                            <svg class="icon icon-link">
                                <use xlink:href="#icon-link"></use>
                            </svg>
                        </div>
                        <input class="share__input" type="text" name="site" value="https://ui8.net/feel-travel">
                        <button class="share__copy">Copy</button>
                    </div>
                    <div class="share__preview"><img src="{{ asset('assets/img/content/photo-1.jpg') }}" alt="Share">
                    </div>
                    <div class="share__btns"><a class="button-stroke share__button"
                            href="https://www.facebook.com/ui8.net/" target="_blank">
                            <svg class="icon icon-facebook">
                                <use xlink:href="#icon-facebook"></use>
                            </svg></a><a class="button-stroke share__button" href="https://twitter.com/ui8"
                            target="_blank">
                            <svg class="icon icon-twitter">
                                <use xlink:href="#icon-twitter"></use>
                            </svg></a><a class="button-stroke share__button" href="https://www.instagram.com/ui8net/"
                            target="_blank">
                            <svg class="icon icon-instagram">
                                <use xlink:href="#icon-instagram"></use>
                            </svg></a></div>
                </div>
                <button class="popup__close js-popup-close">
                    <svg class="icon icon-close">
                        <use xlink:href="#icon-close"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endsection
