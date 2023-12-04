@extends('layout.layout')

@section('content')
    <div class="page__inner">
        <div class="page__container">
            <div class="page__title h3">Summary</div>
            <div class="card">
                <div class="card__head">
                    <div class="title-red card__title">Insights</div>
                    <select class="select select_small">
                        <option>October 2023</option>
                        <option>November 2023</option>
                        <option>December 2023</option>
                    </select>
                </div>
                <div class="quality">
                    <div class="quality__list">
                        <div class="quality__item">
                            <div class="quality__icon" style="background-color: #B5E4CA;">
                                <svg class="icon icon-profile-circle">
                                    <use xlink:href="#icon-profile-circle"></use>
                                </svg>
                            </div>
                            <div class="quality__details">
                                <div class="quality__label">People reached
                                    <div class="tooltip" title="Small description">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="quality__counter">256k</div>
                                <div class="quality__indicator">
                                    <div class="balance positive">
                                        <svg class="icon icon-arrow-top">
                                            <use xlink:href="#icon-arrow-top"></use>
                                        </svg>37.8%
                                    </div><span>vs Sept 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="quality__item">
                            <div class="quality__icon" style="background-color: #CABDFF;">
                                <svg class="icon icon-arrows-up-down">
                                    <use xlink:href="#icon-arrows-up-down"></use>
                                </svg>
                            </div>
                            <div class="quality__details">
                                <div class="quality__label">Engagement
                                    <div class="tooltip" title="Small description">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="quality__counter">1.2x</div>
                                <div class="quality__indicator">
                                    <div class="balance negative">
                                        <svg class="icon icon-arrow-bottom">
                                            <use xlink:href="#icon-arrow-bottom"></use>
                                        </svg>17.8%
                                    </div><span>vs Sept 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="quality__item">
                            <div class="quality__icon" style="background-color: #FFBC99;">
                                <svg class="icon icon-messages">
                                    <use xlink:href="#icon-messages"></use>
                                </svg>
                            </div>
                            <div class="quality__details">
                                <div class="quality__label">Registration
                                    <div class="tooltip" title="Small description">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="quality__counter">128</div>
                                <div class="quality__indicator">
                                    <div class="balance positive">
                                        <svg class="icon icon-arrow-top">
                                            <use xlink:href="#icon-arrow-top"></use>
                                        </svg>24.8%
                                    </div><span>vs Sept 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="quality__item">
                            <div class="quality__icon" style="background-color: #B1E5FC;">
                                <svg class="icon icon-mouse">
                                    <use xlink:href="#icon-mouse"></use>
                                </svg>
                            </div>
                            <div class="quality__details">
                                <div class="quality__label">Deposit
                                    <div class="tooltip" title="Small description">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="quality__counter">80</div>
                                <div class="quality__indicator">
                                    <div class="balance negative">
                                        <svg class="icon icon-arrow-bottom">
                                            <use xlink:href="#icon-arrow-bottom"></use>
                                        </svg>11.3%
                                    </div><span>vs Sept 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="press card">
                <div class="card__head">
                    <div class="title-blue card__title">Project Conversion Report</div>
                    <select class="select select_small">
                        <option>September 2023</option>
                        <option>October 2023</option>
                        <option>November 2023</option>
                    </select>
                    <button class="button-small card__button" data-popup=".js-popup-post">New post</button>
                </div>
                <div class="press__table">
                    <div class="press__row">
                        <div class="press__col">Project<i class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                aria-hidden="true" title="add tooltip"></i></div>
                        <div class="press__col">Engaged<i class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                aria-hidden="true" title="add tooltip"></i></div>
                        <div class="press__col">Cost/Engaged<i
                                class="tooltip fa fa-exclamation-circle tooltip tooltipstered" aria-hidden="true"
                                title="add tooltip"></i></div>
                        <div class="press__col">Cost/Reg.<i class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                aria-hidden="true" title="add tooltip"></i></div>
                        <div class="press__col">Cost/Deposit<i
                                class="tooltip fa fa-exclamation-circle tooltip tooltipstered" aria-hidden="true"
                                title="add tooltip"></i></div>
                        <div class="press__col">Total Cost/Deposit<i
                                class="tooltip fa fa-exclamation-circle tooltip tooltipstered" aria-hidden="true"
                                title="add tooltip"></i></div>
                    </div>
                    <div class="press__row">
                        <div class="press__col">
                            <div class="press__item">
                                <div class="press__preview"><img srcSet="{{asset('assets/img/content/post-pic-1@2x.jpg')}} 2x"
                                        src="{{asset('assets/img/content/post-pic-1.jpg')}}" alt="Product">
                                </div>
                                <div class="press__details">
                                    <div class="press__post">Project A </div>
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Distribution</div>
                            <div class="status-green-dark press__distribution">+1.2x</div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Link clicks</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$0.12</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_red" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>37.8
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Views</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$10</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_green" style="width: 50%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>17.8
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Engagement</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$17</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_blue" style="width: 20%"></div>
                                    </div>
                                </div>
                                <div class="balance negative">
                                    <svg class="icon icon-arrow-bottom">
                                        <use xlink:href="#icon-arrow-bottom"></use>
                                    </svg>37.8
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Views</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$23</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_green" style="width: 50%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>17.8
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="press__row">
                        <div class="press__col">
                            <div class="press__item">
                                <div class="press__preview"><img srcSet="{{asset('assets/img/content/post-pic-2@2x.jpg')}} 2x"
                                        src="{{asset('assets/img/content/post-pic-2.jpg')}}" alt="Product">
                                </div>
                                <div class="press__details">
                                    <div class="press__post">Project B</div>
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Distribution</div>
                            <div class="status-red-dark press__distribution">-1.2x</div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Link clicks</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$0.12</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_red" style="width: 70%"></div>
                                    </div>
                                </div>
                                <div class="balance negative">
                                    <svg class="icon icon-arrow-bottom">
                                        <use xlink:href="#icon-arrow-bottom"></use>
                                    </svg>37.8
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Views</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$10</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_green" style="width: 20%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>22.2
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Engagement</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$17</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_blue" style="width: 60%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>11.5
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Views</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$23</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_green" style="width: 20%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>22.2
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="press__row">
                        <div class="press__col">
                            <div class="press__item">
                                <div class="press__preview"><img srcSet="{{asset('assets/img/content/post-pic-3@2x.jpg')}} 2x"
                                        src="{{asset('assets/img/content/post-pic-3.jpg')}}" alt="Product">
                                </div>
                                <div class="press__details">
                                    <div class="press__post">Project C</div>
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Distribution</div>
                            <div class="status-green-dark press__distribution">+1.2x</div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Link clicks</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$0.12</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_red" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>37.8
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Views</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$10</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_green" style="width: 50%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>17.8
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Engagement</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$17</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_blue" style="width: 20%"></div>
                                    </div>
                                </div>
                                <div class="balance negative">
                                    <svg class="icon icon-arrow-bottom">
                                        <use xlink:href="#icon-arrow-bottom"></use>
                                    </svg>37.8
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Views</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$23</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_green" style="width: 50%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>17.8
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="press__row">
                        <div class="press__col">
                            <div class="press__item">
                                <div class="press__preview"><img srcSet="{{asset('assets/img/content/post-pic-4@2x.jpg')}} 2x"
                                        src="{{asset('assets/img/content/post-pic-4.jpg')}}" alt="Product">
                                </div>
                                <div class="press__details">
                                    <div class="press__post">Project D</div>
                                    <!-- <div class="press__socials"><a class="press__social" href="https://twitter.com/ui8" target="_blank">
                                        <svg class="icon icon-twitter">
                                          <use xlink:href="#icon-twitter"></use>
                                        </svg></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Distribution</div>
                            <div class="status-red-dark press__distribution">-1.2x</div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Link clicks</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$0.12</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_red" style="width: 70%"></div>
                                    </div>
                                </div>
                                <div class="balance negative">
                                    <svg class="icon icon-arrow-bottom">
                                        <use xlink:href="#icon-arrow-bottom"></use>
                                    </svg>37.8
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Views</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$10</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_green" style="width: 20%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>22.2
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Engagement</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$17</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_blue" style="width: 60%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>11.5
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Views</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$23</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_green" style="width: 20%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>22.2
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="press__row">
                        <div class="press__col">
                            <div class="press__item">
                                <div class="press__preview"><img srcSet="{{asset('assets/img/content/post-pic-5@2x.jpg')}} 2x"
                                        src="{{asset('assets/img/content/post-pic-5.jpg')}}" alt="Product">
                                </div>
                                <div class="press__details">
                                    <div class="press__post">Project E</div>
                                    <!-- <div class="press__socials"><a class="press__social" href="https://www.facebook.com/ui8.net/" target="_blank">
                                        <svg class="icon icon-facebook">
                                          <use xlink:href="#icon-facebook"></use>
                                        </svg></a><a class="press__social" href="https://twitter.com/ui8" target="_blank">
                                        <svg class="icon icon-twitter">
                                          <use xlink:href="#icon-twitter"></use>
                                        </svg></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Distribution</div>
                            <div class="status-green-dark press__distribution">+1.2x</div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Link clicks</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$0.12</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_red" style="width: 90%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>37.8
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Views</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$10</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_green" style="width: 50%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>17.8
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Engagement</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$17</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_blue" style="width: 20%"></div>
                                    </div>
                                </div>
                                <div class="balance negative">
                                    <svg class="icon icon-arrow-bottom">
                                        <use xlink:href="#icon-arrow-bottom"></use>
                                    </svg>37.8
                                </div>
                            </div>
                        </div>
                        <div class="press__col">
                            <div class="press__label">Views</div>
                            <div class="press__cell">
                                <div class="press__box">
                                    <div class="press__number">$23</div>
                                    <div class="press__line">
                                        <div class="press__progress press__progress_green" style="width: 50%"></div>
                                    </div>
                                </div>
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>17.8
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="press__foot">
                    <button class="button-stroke button-small press__button">
                        <div class="loader"></div><span>Load more</span>
                    </button>
                </div>
            </div>
            <div class="popup popup_post js-popup js-popup-post">
                <div class="popup__overlay js-popup-overlay"></div>
                <div class="popup__wrap js-popup-wrap">
                    <div class="post">
                        <div class="title-green post__title">New post</div>
                        <div class="post__list">
                            <div class="post__avatar"><img src="{{asset('assets/img/content/avatar.jpg')}}" alt="Avatar">
                                <div class="post__social">
                                    <svg class="icon icon-facebook-fill">
                                        <use xlink:href="#icon-facebook-fill"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="post__avatar"><img src="{{asset('assets/img/content/avatar.jpg')}}" alt="Avatar">
                                <div class="post__social">
                                    <svg class="icon icon-twitter-fill">
                                        <use xlink:href="#icon-twitter-fill"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="post__field">
                            <textarea class="post__textarea" type="post" placeholder="What you would like to share?"></textarea>
                        </div>
                        <div class="post__info">Fleet coded version has been Launched </div>
                        <div class="post__preview"><img src="{{asset('assets/img/content/bg-video.jpg')}}" alt="Video"></div>
                        <div class="post__foot">
                            <div class="post__files">
                                <div class="post__file">
                                    <input type="file">
                                    <div class="post__icon">
                                        <svg class="icon icon-image-stroke">
                                            <use xlink:href="#icon-image-stroke"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="post__file">
                                    <input type="file">
                                    <div class="post__icon">
                                        <svg class="icon icon-video-stroke">
                                            <use xlink:href="#icon-video-stroke"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button class="button post__button"><span>Post</span>
                                <svg class="icon icon-arrow-right">
                                    <use xlink:href="#icon-arrow-right"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button class="popup__close js-popup-close">
                        <svg class="icon icon-close">
                            <use xlink:href="#icon-close"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
