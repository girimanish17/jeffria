@extends('layout.site')

@section('content')
    <div class="page__inner">
        <div class="page__container">
            <div class="page__title h3">Dashboard</div>
            <div class="page__row">
                <div class="page__col">
                    <div class="card">
                        <div class="card__head">
                            <div class="title-red card__title">Traffic overview</div>
                            <select class="select select_small">
                                <option>All time</option>
                                <option>In a year</option>
                                <option>Per month</option>
                            </select>
                        </div>
                        <div class="overview js-tabs">
                            <div class="overview__nav"><a class="overview__link js-tabs-link active" href="#">
                                    <div class="overview__icon" style="background-color: #B1E5FC;">
                                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                                        <!-- <svg class="icon icon-shopping-bag">
                          <use xlink:href="#icon-shopping-bag"></use>
                        </svg> -->
                                    </div>
                                    <div class="overview__details">
                                        <div class="overview__subtitle">Projects
                                            <div class="tooltip" title="All the current launched projects  ">
                                                <svg class="icon icon-info">
                                                    <use xlink:href="#icon-info"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="overview__counter">1024</div>
                                    </div>
                                    <div class="balance background negative">
                                        <svg class="icon icon-arrow-bottom">
                                            <use xlink:href="#icon-arrow-bottom"></use>
                                        </svg>37.8%
                                    </div>
                                </a><a class="overview__link js-tabs-link" href="#">
                                    <div class="overview__icon" style="background-color: #CABDFF;">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <!-- <svg class="icon icon-activity">
                          <use xlink:href="#icon-activity"></use>
                        </svg> -->
                                    </div>
                                    <div class="overview__details">
                                        <div class="overview__subtitle">Visitors
                                            <div class="tooltip" title="Engaged visitors for all website of last month ">
                                                <svg class="icon icon-info">
                                                    <use xlink:href="#icon-info"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="overview__counter">256k</div>
                                    </div>
                                    <div class="balance background positive">
                                        <svg class="icon icon-arrow-top">
                                            <use xlink:href="#icon-arrow-top"></use>
                                        </svg>37.8%
                                    </div>
                                </a></div>
                            <div class="overview__container">
                                <div class="overview__item js-tabs-item" style="display: block;">
                                    <div class="users">
                                        <div class="users__head">
                                            <div class="users__info"><strong>23</strong> projects with <strong>17</strong>
                                                launched projects 😎</div><a class="button-stroke users__button"
                                                href="message-center.html">Lunched Proejcts</a>
                                        </div>
                                        <div class="users__list"><a class="users__item" href="message-center.html">
                                                <div style="width:80px;object-fit:contain;" class="users__avatar"><img
                                                        style="border-radius:8px !important" src="img/content/uxui.jpg"
                                                        alt="Avatar"></div>
                                                <div class="users__title">ifb</div>
                                            </a><a class="users__item" href="message-center.html">
                                                <div style="width:80px;object-fit:contain;" class="users__avatar"><img
                                                        style="border-radius:8px !important" src="img/content/frontend.jpg"
                                                        alt="Avatar"></div>
                                                <div class="users__title">isc</div>
                                            </a><a class="users__item" href="message-center.html">
                                                <div style="width:80px;object-fit:contain;" class="users__avatar"><img
                                                        style="border-radius:8px !important" src="img/content/backend.jpg"
                                                        alt="Avatar"></div>
                                                <div class="users__title">cvip</div>
                                            </a><a class="users__all" href="customer-list.html">
                                                <div class="users__icon">
                                                    <svg class="icon icon-arrow-right">
                                                        <use xlink:href="#icon-arrow-right"></use>
                                                    </svg>
                                                </div>
                                                <div class="users__text">View all</div>
                                            </a></div>
                                    </div>
                                </div>
                                <div class="overview__item js-tabs-item">
                                    <div class="overview__chart">
                                        <div id="oveview-income"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card__head">
                            <div class="title-red card__title">Registration</div>
                            <!-- <select class="select select_small">
                    <option>All time</option>
                    <option>In a year</option>
                    <option>Per month</option>
                  </select> -->
                        </div>
                        <div class="overview js-tabs">
                            <div class="overview__nav"><a class="overview__link js-tabs-link active" href="#">
                                    <div class="overview__icon" style="background-color: #B1E5FC;">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                        <!-- <svg class="icon icon-shopping-bag">
                          <use xlink:href="#icon-shopping-bag"></use>
                        </svg> -->
                                    </div>
                                    <div class="overview__details">
                                        <div class="overview__subtitle">Registrations
                                            <div class="tooltip"
                                                title="All project registration in our betting site of Baji and Six8s">
                                                <svg class="icon icon-info">
                                                    <use xlink:href="#icon-info"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="overview__counter">1024</div>
                                    </div>
                                    <div class="balance background negative">
                                        <svg class="icon icon-arrow-bottom">
                                            <use xlink:href="#icon-arrow-bottom"></use>
                                        </svg>37.8%
                                    </div>
                                </a><a class="overview__link js-tabs-link" href="#">
                                    <div class="overview__icon" style="background-color: #CABDFF;">
                                        <i class="fa fa-money" aria-hidden="true"></i>
                                        <!-- <svg class="icon icon-activity">
                          <use xlink:href="#icon-activity"></use>
                        </svg> -->
                                    </div>
                                    <div class="overview__details">
                                        <div class="overview__subtitle">Deposit Players
                                            <div class="tooltip" title="Deposit Player who Registration on the month">
                                                <svg class="icon icon-info">
                                                    <use xlink:href="#icon-info"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="overview__counter">256k</div>
                                    </div>
                                    <div class="balance background positive">
                                        <svg class="icon icon-arrow-top">
                                            <use xlink:href="#icon-arrow-top"></use>
                                        </svg>37.8%
                                    </div>
                                </a></div>
                            <div class="overview__container">
                                <div class="overview__item js-tabs-item" style="display: block;">
                                    <div class="overview__chart">
                                        <div id="registration"></div>
                                    </div>
                                </div>
                                <div class="overview__item js-tabs-item">
                                    <div class="overview__chart">
                                        <div id="total-customers"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card__head">
                            <div class="title-purple card__title">Daily Registraions</div>
                            <select class="select select_small">
                                <option>Last 7 days</option>
                                <option>This month</option>
                                <option>All time</option>
                            </select>
                        </div>
                        <div class="card__chart card__chart_product-views">
                            <div id="daily-registration"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__head">
                            <div class="title-purple card__title">Project Type</div>
                            <!-- <select class="select select_small">
                    <option>Last 7 days</option>
                    <option>This month</option>
                    <option>All time</option>
                  </select> -->
                        </div>
                        <div class="card__chart card__chart_traffic-channel">
                            <div id="project-type"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__head">
                            <div class="title-green card__title">Achievement</div>
                        </div>
                        <div class="tips">
                            <div class="tips__info">Top ranking of previous month</div>
                            <div class="tips__list"><a class="tips__item" data-fancybox
                                    href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" data-caption="Use guidelines">
                                    <div class="tips__icon">
                                        <!-- <svg class="icon icon-schedule">
                          <use xlink:href="#icon-schedule"></use>
                        </svg> -->
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="tips__details">
                                        <div class="tips__title">Top Visitors</div>
                                        <div class="tips__line">
                                            <div class="status-purple tips__status">ifb</div>
                                            <div class="tips__user">
                                                <div class="tips__avatar"><img src="img/content/avatar.jpg"
                                                        alt="Avatar"></div>
                                                <div class="tips__action">2342 visitors</div>
                                            </div>
                                        </div>
                                    </div>
                                </a><a class="tips__item" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                    data-caption="Use guidelines">
                                    <div class="tips__icon">
                                        <!-- <svg class="icon icon-arrow-right">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg> -->
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    </div>
                                    <div class="tips__details">
                                        <div class="tips__title">Top registrations</div>
                                        <div class="tips__line">
                                            <div class="status-green-dark tips__status">Small label</div>
                                            <div class="tips__user">
                                                <div class="tips__avatar"><img src="img/content/avatar-3.jpg"
                                                        alt="Avatar"></div>
                                                <div class="tips__action">Time</div>
                                            </div>
                                        </div>
                                    </div>
                                </a><a class="tips__item" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                    data-caption="Use guidelines">
                                    <div class="tips__icon">
                                        <!-- <svg class="icon icon-design">
                          <use xlink:href="#icon-design"></use>
                        </svg> -->
                                        <i class="fa fa-black-tie" aria-hidden="true"></i>
                                    </div>
                                    <div class="tips__details">
                                        <div class="tips__title">All time Recruitment</div>
                                        <div class="tips__line">
                                            <div class="tips__user">
                                                <div class="tips__avatar"><img src="img/content/avatar-1.jpg"
                                                        alt="Avatar"></div>
                                                <div class="tips__action">2 mins read</div>
                                            </div>
                                        </div>
                                    </div>
                                </a><a class="tips__item" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                    data-caption="Use guidelines">
                                    <div class="tips__icon">
                                        <!-- <svg class="icon icon-video-recorder">
                          <use xlink:href="#icon-video-recorder"></use>
                        </svg> -->
                                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="tips__details">
                                        <div class="tips__title">Best Contribution</div>
                                        <div class="tips__line">
                                            <div class="status-red-dark tips__status">Hot</div>
                                            <div class="tips__user">
                                                <div class="tips__avatar"><img src="img/content/avatar-2.jpg"
                                                        alt="Avatar"></div>
                                                <div class="tips__action">3 mins read</div>
                                            </div>
                                        </div>
                                    </div>
                                </a><a class="tips__item" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                    data-caption="Use guidelines">
                                    <div class="tips__icon">
                                        <!-- <svg class="icon icon-phone">
                          <use xlink:href="#icon-phone"></use>
                        </svg> -->
                                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                                    </div>
                                    <div class="tips__details">
                                        <div class="tips__title">Best Reg. Conversion</div>
                                        <div class="tips__line">
                                            <div class="status-green-dark tips__status">Popular</div>
                                            <div class="tips__user">
                                                <div class="tips__avatar"><img src="img/content/avatar.jpg"
                                                        alt="Avatar"></div>
                                                <div class="tips__action">Time</div>
                                            </div>
                                        </div>
                                    </div>
                                </a><a class="tips__item" data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                    data-caption="Use guidelines">
                                    <div class="tips__icon">
                                        <!-- <svg class="icon icon-multiselect">
                          <use xlink:href="#icon-multiselect"></use>
                        </svg> -->
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                    </div>
                                    <div class="tips__details">
                                        <div class="tips__title">Best Visitor Conversion</div>
                                        <div class="tips__line">
                                            <div class="tips__user">
                                                <div class="tips__avatar"><img src="img/content/avatar-2.jpg"
                                                        alt="Avatar"></div>
                                                <div class="tips__action">3 mins read</div>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__head">
                            <div class="title-blue card__title">Important Report</div>
                        </div>
                        <div class="media">
                            <div class="media__content">There is other important data information not found on this website
                                that you can refer to. Ask Jeff to provide login detail to view the following info.</div>
                            <div class="media__btns"><a class="button-stroke media__button" href="#"
                                    target="_blank">
                                    <span>GA Report</span></a><a class="button-stroke media__button" href="#"
                                    target="_blank">
                                    <span>Staffs Report</span></a><a class="button-stroke media__button" href="#"
                                    target="_blank">
                                    <span>Projects Report </span></a></div>
                            <!-- <div class="media__btns"><a class="button-stroke media__button" href="https://www.facebook.com/ui8.net/" target="_blank">
                      <svg class="icon icon-facebook">
                        <use xlink:href="#icon-facebook"></use>
                      </svg><span>Facebook</span></a><a class="button-stroke media__button" href="https://twitter.com/ui8" target="_blank">
                      <svg class="icon icon-twitter">
                        <use xlink:href="#icon-twitter"></use>
                      </svg><span>Twitter</span></a><a class="button-stroke media__button" href="https://www.instagram.com/ui8net/" target="_blank">
                      <svg class="icon icon-instagram">
                        <use xlink:href="#icon-instagram"></use>
                      </svg><span>Instagram</span></a></div> -->
                        </div>
                    </div>
                </div>
                <div class="page__col">
                    <div class="card">
                        <div class="card__head">
                            <div class="title-blue card__title">TOP 10 Registration</div>
                        </div>
                        <div class="popular">
                            <div class="popular__head">
                                <div class="popular__stage">Projects</div>
                                <div class="popular__stage">Monthly Reg.</div>
                            </div>
                            <div class="popular__list">
                                <a class="popular__item" href="#" data-popup=".js-popup-product">
                                    <div class="popular__preview"><img srcSet="img/content/uxui.jpg 2x"
                                            src="img/content/uxui.jpg" alt="Crypter - NFT UI kit" /></div>
                                    <div class="popular__title">ifb</div>
                                    <div class="popular__details">
                                        <div class="popular__price">237</div>
                                        <div class="tips__user">
                                            <div class="tips__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar">
                                            </div>
                                            <div class="tips__action">John</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="popular__item" href="#" data-popup=".js-popup-product">
                                    <div class="popular__preview"><img srcSet="img/content/frontend.jpg 2x"
                                            src="img/content/front-end.jpg" alt="Bento Matte 3D illustration 1.0" /></div>
                                    <div class="popular__title">isc</div>
                                    <div class="popular__details">
                                        <div class="popular__price">105</div>
                                        <div class="tips__user">
                                            <div class="tips__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar">
                                            </div>
                                            <div class="tips__action">John</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="popular__item" href="#" data-popup=".js-popup-product">
                                    <div class="popular__preview"><img srcSet="img/content/backend.jpg 2x"
                                            src="img/content/backend.jpg" alt="Excellent material 3D chair" /></div>
                                    <div class="popular__title">ibi</div>
                                    <div class="popular__details">
                                        <div class="popular__price">305</div>
                                        <div class="tips__user">
                                            <div class="tips__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar">
                                            </div>
                                            <div class="tips__action">John</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="popular__item" href="#" data-popup=".js-popup-product">
                                    <div class="popular__preview"><img srcSet="img/content/frontend.jpg 2x"
                                            src="img/content/frontend.jpg" alt="Fleet - travel shopping kit" /></div>
                                    <div class="popular__title">wcn</div>
                                    <div class="popular__details">
                                        <div class="popular__price">410</div>
                                        <div class="tips__user">
                                            <div class="tips__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar">
                                            </div>
                                            <div class="tips__action">John</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="popular__item" href="#" data-popup=".js-popup-product">
                                    <div class="popular__preview"><img srcSet="img/content/uxui.jpg 2x"
                                            src="img/content/uxui.jpg" alt="Crypter - NFT UI kit" /></div>
                                    <div class="popular__title">cvip</div>
                                    <div class="popular__details">
                                        <div class="popular__price">237</div>
                                        <div class="tips__user">
                                            <div class="tips__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar">
                                            </div>
                                            <div class="tips__action">John</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="popular__item" href="#" data-popup=".js-popup-product">
                                    <div class="popular__preview"><img srcSet="img/content/frontend.jpg 2x"
                                            src="img/content/front-end.jpg" alt="Bento Matte 3D illustration 1.0" /></div>
                                    <div class="popular__title">i2c</div>
                                    <div class="popular__details">
                                        <div class="popular__price">105</div>
                                        <div class="tips__user">
                                            <div class="tips__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar">
                                            </div>
                                            <div class="tips__action">John</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="popular__item" href="#" data-popup=".js-popup-product">
                                    <div class="popular__preview"><img srcSet="img/content/backend.jpg 2x"
                                            src="img/content/backend.jpg" alt="Excellent material 3D chair" /></div>
                                    <div class="popular__title">rb</div>
                                    <div class="popular__details">
                                        <div class="popular__price">305</div>
                                        <div class="tips__user">
                                            <div class="tips__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar">
                                            </div>
                                            <div class="tips__action">John</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="popular__item" href="#" data-popup=".js-popup-product">
                                    <div class="popular__preview"><img srcSet="img/content/frontend.jpg 2x"
                                            src="img/content/front-end.jpg" alt="Bento Matte 3D illustration 1.0" /></div>
                                    <div class="popular__title">isc</div>
                                    <div class="popular__details">
                                        <div class="popular__price">105</div>
                                        <div class="tips__user">
                                            <div class="tips__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar">
                                            </div>
                                            <div class="tips__action">John</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="popular__item" href="#" data-popup=".js-popup-product">
                                    <div class="popular__preview"><img srcSet="img/content/backend.jpg 2x"
                                            src="img/content/backend.jpg" alt="Excellent material 3D chair" /></div>
                                    <div class="popular__title">ibi</div>
                                    <div class="popular__details">
                                        <div class="popular__price">305</div>
                                        <div class="tips__user">
                                            <div class="tips__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar">
                                            </div>
                                            <div class="tips__action">John</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="popular__item" href="#" data-popup=".js-popup-product">
                                    <div class="popular__preview"><img srcSet="img/content/frontend.jpg 2x"
                                            src="img/content/frontend.jpg" alt="Fleet - travel shopping kit" /></div>
                                    <div class="popular__title">wcn</div>
                                    <div class="popular__details">
                                        <div class="popular__price">410</div>
                                        <div class="tips__user">
                                            <div class="tips__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar">
                                            </div>
                                            <div class="tips__action">John</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- <a class="button-stroke popular__button" href="products-dashboard.html">All products</a> -->
                        </div>
                    </div>
                    <!-- <div class="card">
                <div class="card__head">
                  <div class="title-yellow card__title">Comments</div>
                </div>
                <div class="review">
                  <div class="review__list">
                    <div class="review__item">
                      <div class="review__avatar"><img src="img/content/avatar.jpg" alt="Avatar"></div>
                      <div class="review__details">
                        <div class="review__line">
                          <div class="review__user"><span class="review__title">Ethel</span><span class="review__login">@ethel</span></div>
                          <div class="review__time">1h</div>
                        </div>
                        <div class="review__product">On <strong>Smiles – 3D icons</strong></div>
                        <div class="review__content">Great work 😊</div>
                        <div class="review__control"><a class="review__link" href="message-center.html">
                            <svg class="icon icon-message">
                              <use xlink:href="#icon-message"></use>
                            </svg></a>
                          <button class="favorite">
                            <svg class="icon icon-heart">
                              <use xlink:href="#icon-heart"></use>
                            </svg>
                            <svg class="icon icon-heart-fill">
                              <use xlink:href="#icon-heart-fill"></use>
                            </svg>
                          </button><a class="review__link" href="products-comments.html">
                            <svg class="icon icon-link">
                              <use xlink:href="#icon-link"></use>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                    <div class="review__item">
                      <div class="review__avatar"><img src="img/content/avatar-1.jpg" alt="Avatar"></div>
                      <div class="review__details">
                        <div class="review__line">
                          <div class="review__user"><span class="review__title">Jazmyn</span><span class="review__login">@jaz.designer</span></div>
                          <div class="review__time">8h</div>
                        </div>
                        <div class="review__product">On <strong>Fleet - Travel shopping</strong></div>
                        <div class="review__content">I need react version asap!</div>
                        <div class="review__control"><a class="review__link" href="message-center.html">
                            <svg class="icon icon-message">
                              <use xlink:href="#icon-message"></use>
                            </svg></a>
                          <button class="favorite">
                            <svg class="icon icon-heart">
                              <use xlink:href="#icon-heart"></use>
                            </svg>
                            <svg class="icon icon-heart-fill">
                              <use xlink:href="#icon-heart-fill"></use>
                            </svg>
                          </button><a class="review__link" href="products-comments.html">
                            <svg class="icon icon-link">
                              <use xlink:href="#icon-link"></use>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                    <div class="review__item">
                      <div class="review__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar"></div>
                      <div class="review__details">
                        <div class="review__line">
                          <div class="review__user"><span class="review__title">Ethel</span><span class="review__login">@ethel</span></div>
                          <div class="review__time">1h</div>
                        </div>
                        <div class="review__product">On <strong>Smiles – 3D icons</strong></div>
                        <div class="review__content">How can I buy only the design?</div>
                        <div class="review__control"><a class="review__link" href="message-center.html">
                            <svg class="icon icon-message">
                              <use xlink:href="#icon-message"></use>
                            </svg></a>
                          <button class="favorite">
                            <svg class="icon icon-heart">
                              <use xlink:href="#icon-heart"></use>
                            </svg>
                            <svg class="icon icon-heart-fill">
                              <use xlink:href="#icon-heart-fill"></use>
                            </svg>
                          </button><a class="review__link" href="products-comments.html">
                            <svg class="icon icon-link">
                              <use xlink:href="#icon-link"></use>
                            </svg></a>
                        </div>
                      </div>
                    </div>
                  </div><a class="button-stroke review__button" href="products-comments.html">View all</a>
                </div>
              </div> -->
                    <!-- <div class="card">
                <div class="card__head">
                  <div class="title-red card__title">Refund requestsd</div>
                </div>
                <div class="refund">
                  <div class="refund__list">
                    <div class="refund__item">
                      <div class="refund__icon">
                        <svg class="icon icon-basket">
                          <use xlink:href="#icon-basket"></use>
                        </svg>
                      </div>
                      <div class="refund__content">You have <strong>52 open refund requests</strong> to action. This includes <strong>8 new requests</strong>. 👀</div>
                    </div>
                  </div><a class="button-stroke refund__button" href="income-refunds.html">Review refund requests</a>
                </div>
              </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection
