@extends('layout.layout')

@section('content')
    <div class="page__inner">
        <div class="page__container">
            <div class="page__title h3">Traffic Report</div>
            <div class="card">
                <div class="card__head">
                    <div class="title-purple card__title">Overview</div>
                    <select class="select select_small">
                        <option>This week</option>
                        <option>This month</option>
                        <option>This year</option>
                    </select>
                </div>
                <div class="stock">
                    <div class="stock__list">
                        <div class="stock__item" style="background-color: #ecf9fe">
                            <div class="stock__icon">
                                <svg class="icon icon-activity">
                                    <use xlink:href="#icon-activity"></use>
                                </svg>
                            </div>
                            <div class="stock__line">
                                <div class="stock__details">
                                    <div class="stock__category">Registration<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true"
                                            title="Total Registration in Baji and Six6s Betting Site"></i></div>
                                    <div class="stock__counter">128k</div>
                                </div>
                                <div class="stock__chart">
                                    <div id="dashboard-products-earning"></div>
                                </div>
                            </div>
                            <div class="stock__indicator">
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>37.8%
                                </div><span>previous month</span>
                            </div>
                            <p style="margin-top:3px;font-size: 13px;font-weight: 600;line-height: 1.23077;color: #33383F;">
                                Prefer higher </p>

                        </div>
                        <div class="stock__item" style="background-color: #ecf9fe;">
                            <div class="stock__icon">
                                <svg class="icon icon-activity">
                                    <use xlink:href="#icon-activity"></use>
                                </svg>
                            </div>
                            <div class="stock__line">
                                <div class="stock__details">
                                    <div class="stock__category">Session<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true" title="Total Engaged Session of all projects"></i></div>
                                    <div class="stock__counter">512</div>
                                </div>
                                <div class="stock__chart">
                                    <div id="dashboard-products-customer"></div>
                                </div>
                            </div>
                            <div class="stock__indicator">
                                <div class="balance negative">
                                    <svg class="icon icon-arrow-bottom">
                                        <use xlink:href="#icon-arrow-bottom"></use>
                                    </svg>37.8%
                                </div><span>previous month</span>
                            </div>
                            <p style="margin-top:3px;font-size: 13px;font-weight: 600;line-height: 1.23077;color: #33383F;">
                                Prefer higher </p>
                        </div>
                        <div class="stock__item" style="background-color:#ecf9fe">
                            <div class="stock__icon">
                                <svg class="icon icon-activity">
                                    <use xlink:href="#icon-activity"></use>
                                </svg>
                            </div>
                            <div class="stock__line">
                                <div class="stock__details">
                                    <div class="stock__category">Single staff traffic<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true"></i></div>
                                    <div class="stock__counter">64k</div>
                                </div>
                                <div class="stock__chart">
                                    <div id="dashboard-products-payouts"></div>
                                </div>
                            </div>
                            <div class="stock__indicator">
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>37.8%
                                </div><span>previous month</span>
                            </div>
                            <p style="margin-top:3px;font-size: 13px;font-weight: 600;line-height: 1.23077;color: #33383F;">
                                Prefer higher </p>
                        </div>
                    </div>
                </div>
                <div style="margin-top:13px" class="stock">
                    <div class="stock__list">
                        <div class="stock__item" style="background-color:#f8eded">
                            <div class="stock__icon">
                                <svg class="icon icon-activity">
                                    <use xlink:href="#icon-activity"></use>
                                </svg>
                            </div>
                            <div class="stock__line">
                                <div class="stock__details">
                                    <div class="stock__category">Session for 1 Reg.<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true"
                                            title="E.Session Per Registration, how many visit can get 1 register, lower is better"></i>
                                    </div>
                                    <div class="stock__counter">128k</div>
                                </div>
                                <div class="stock__chart">
                                    <div id="dashboard-products-earning"></div>
                                </div>
                            </div>
                            <div class="stock__indicator">
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>37.8%
                                </div><span>previous month</span>
                            </div>
                            <p style="margin-top:3px;font-size: 13px;font-weight: 600;line-height: 1.23077;color: #33383F;">
                                Prefer lower</p>
                        </div>
                        <div class="stock__item" style="background-color: #f8eded;">
                            <div class="stock__icon">
                                <svg class="icon icon-activity">
                                    <use xlink:href="#icon-activity"></use>
                                </svg>
                            </div>
                            <div class="stock__line">
                                <div class="stock__details">
                                    <div class="stock__category">Cost of 1 Session<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true"></i></div>
                                    <div class="stock__counter">512</div>
                                </div>
                                <div class="stock__chart">
                                    <div id="dashboard-products-customer"></div>
                                </div>
                            </div>
                            <div class="stock__indicator">
                                <div class="balance negative">
                                    <svg class="icon icon-arrow-bottom">
                                        <use xlink:href="#icon-arrow-bottom"></use>
                                    </svg>37.8%
                                </div><span>previous month</span>
                            </div>
                            <p
                                style="margin-top:3px;font-size: 13px;font-weight: 600;line-height: 1.23077;color: #33383F;">
                                Prefer lower</p>
                        </div>
                        <div class="stock__item" style="background-color: #f8eded;">
                            <div class="stock__icon">
                                <svg class="icon icon-activity">
                                    <use xlink:href="#icon-activity"></use>
                                </svg>
                            </div>
                            <div class="stock__line">
                                <div class="stock__details">
                                    <div class="stock__category">Cost of Registration<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true"></i></div>
                                    <div class="stock__counter">64k</div>
                                </div>
                                <div class="stock__chart">
                                    <div id="dashboard-products-payouts"></div>
                                </div>
                            </div>
                            <div class="stock__indicator">
                                <div class="balance positive">
                                    <svg class="icon icon-arrow-top">
                                        <use xlink:href="#icon-arrow-top"></use>
                                    </svg>37.8%
                                </div><span>previous month</span>
                            </div>
                            <p
                                style="margin-top:3px;font-size: 13px;font-weight: 600;line-height: 1.23077;color: #33383F;">
                                Prefer lower</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="page__row">
                <div style="width:100%;flex:unset;" class="page__col">
                    <div class="card">
                        <div class="card__head">
                            <div class="title-green card__title">General Report</div>
                            <div class="card__select mobile-hide cstm">
                                <select class="select select_small">
                                    <option>All</option>
                                    <option>Project A</option>
                                    <option>Project B</option>
                                    <option>Project C</option>
                                </select>
                            </div>
                        </div>
                        <div class="activity">
                            <div class="activity__table">
                                <div class="activity__row">
                                    <div class="activity__col">Period<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true" title=""></i></div>
                                    <div class="activity__col">Projects<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true" title=""></i></div>
                                    <div class="activity__col">Reg.<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true" title=""></i></div>
                                    <div class="activity__col">Session<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true" title=""></i></div>
                                    <div class="activity__col">Staff<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true" title=""></i></div>
                                    <div class="activity__col">SPR<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true" title=""></i></div>
                                    <div class="activity__col">CPS<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true" title="Cost Per Engaged Session"></i></div>
                                    <div class="activity__col">CPR<i
                                            class="tooltip fa fa-exclamation-circle tooltip tooltipstered"
                                            aria-hidden="true" title="Cost Per Registration"></i></div>
                                </div>
                                <div class="activity__row">
                                    <div class="activity__col">
                                        <div class="activity__label">Week</div>1 Oct - 15 Oct
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">Projects</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #B5E4CA;">Project A
                                            </div>
                                            <!-- <div class="balance positive">
                            <svg class="icon icon-arrow-top">
                              <use xlink:href="#icon-arrow-top"></use>
                            </svg>37.8%
                          </div> -->
                                        </div>
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">Reg.</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #CABDFF;">24k</div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>24.3%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">Sessions</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #B1E5FC;">48</div>
                                            <div class="balance negative">
                                                <svg class="icon icon-arrow-bottom">
                                                    <use xlink:href="#icon-arrow-bottom"></use>
                                                </svg>17.8%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">Staffs</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #CABDFF;">120</div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>56%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">SPR</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #B5E4CA;">77</div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>56%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">CPS</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #FFD88D;">30</div>
                                            <div class="balance negative">
                                                <svg class="icon icon-arrow-bottom">
                                                    <use xlink:href="#icon-arrow-bottom"></use>
                                                </svg>56%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">CPR</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #FFD88D;">18</div>
                                            <div class="balance negative">
                                                <svg class="icon icon-arrow-bottom">
                                                    <use xlink:href="#icon-arrow-bottom"></use>
                                                </svg>56%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity__row">
                                    <div class="activity__col">
                                        <div class="activity__label">Week</div>16 Oct - 31 Oct
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">Projects</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #B5E4CA;">Project B
                                            </div>
                                            <!-- <div class="balance positive">
                            <svg class="icon icon-arrow-top">
                              <use xlink:href="#icon-arrow-top"></use>
                            </svg>37.8%
                          </div> -->
                                        </div>
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">Reg.</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #CABDFF;">24k</div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>24.3%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">Sessions</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #B1E5FC;">48</div>
                                            <div class="balance negative">
                                                <svg class="icon icon-arrow-bottom">
                                                    <use xlink:href="#icon-arrow-bottom"></use>
                                                </svg>17.8%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">Staffs</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #CABDFF;">120</div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>56%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">SPR</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #B5E4CA;">77</div>
                                            <div class="balance positive">
                                                <svg class="icon icon-arrow-top">
                                                    <use xlink:href="#icon-arrow-top"></use>
                                                </svg>56%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">CPS</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #FFD88D;">30</div>
                                            <div class="balance negative">
                                                <svg class="icon icon-arrow-bottom">
                                                    <use xlink:href="#icon-arrow-bottom"></use>
                                                </svg>56%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity__col">
                                        <div class="activity__label">CPR</div>
                                        <div class="activity__item">
                                            <div class="activity__counter" style="background-color: #FFD88D;">18</div>
                                            <div class="balance negative">
                                                <svg class="icon icon-arrow-bottom">
                                                    <use xlink:href="#icon-arrow-bottom"></use>
                                                </svg>56%
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="activity__nav">
                                <button class="activity__link active">Last 2 weeks</button>
                                <button class="activity__link">Last 7 days</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="products card js-tabs">
            <div class="products__head">
              <div class="title-purple products__title">Projects</div>
              <form class="form">
                <input class="form__input" type="text" name="search" placeholder="Search product" required="required" autocomplete="off"/>
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
              <div class="products__nav">
                <button class="products__link js-tabs-link active">Market</button>
                <button class="products__link js-tabs-link">Traffic sources</button>
                <button class="products__link js-tabs-link">Viewers</button>
              </div>
              <div class="products__select tablet-show">
                <select class="select select_small js-tabs-select">
                  <option>Market</option>
                  <option>Traffic sources</option>
                  <option>Viewers</option>
                </select>
              </div>
            </div>
            <div class="products__container">
              <div class="products__tab js-tabs-item" style="display: block;">
                <div class="products__wrapper">
                  <div class="products__table">
                    <div class="products__row">
                      <div class="products__col">
                        <label class="checkbox">
                          <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
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
                                              <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                            </label>
                                          </div>
                                          <div class="products__col"><a class="products__item" href="#" data-popup=".js-popup-product">
                                              <div class="products__preview"><img srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}" alt="Product"></div>
                                              <div class="products__details">
                                                <div class="products__subtitle">Bento Matte 3D Illustration</div>
                                                <div class="products__wrap">
                                                  <div class="products__price">$98
                                                  </div>
                                                  <div class="products__category">3m 23d</div>
                                                </div>
                                              </div></a></div>
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
                                              <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                            </label>
                                          </div>
                                          <div class="products__col"><a class="products__item" href="#" data-popup=".js-popup-product">
                                              <div class="products__preview"><img srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}" alt="Product"></div>
                                              <div class="products__details">
                                                <div class="products__subtitle">DSM - Geometry pattern</div>
                                                <div class="products__wrap">
                                                  <div class="products__price">$48
                                                  </div>
                                                  <div class="products__category">3m 23d</div>
                                                </div>
                                              </div></a></div>
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
                                              <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                            </label>
                                          </div>
                                          <div class="products__col"><a class="products__item" href="#" data-popup=".js-popup-product">
                                              <div class="products__preview"><img srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}" alt="Product"></div>
                                              <div class="products__details">
                                                <div class="products__subtitle">Node - Crypto iOS</div>
                                                <div class="products__wrap">
                                                  <div class="products__price">$98
                                                  </div>
                                                  <div class="products__category">3m 23d</div>
                                                </div>
                                              </div></a></div>
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
                                              <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                            </label>
                                          </div>
                                          <div class="products__col"><a class="products__item" href="#" data-popup=".js-popup-product">
                                              <div class="products__preview"><img srcSet="{{asset('assets/img/content/product-pic-4@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-4.jpg')}}" alt="Product"></div>
                                              <div class="products__details">
                                                <div class="products__subtitle">TaskEz: Productivity App iOS UI Kit</div>
                                                <div class="products__wrap">
                                                  <div class="products__price">$48
                                                  </div>
                                                  <div class="products__category">3m 23d</div>
                                                </div>
                                              </div></a></div>
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
                                              <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                            </label>
                                          </div>
                                          <div class="products__col"><a class="products__item" href="#" data-popup=".js-popup-product">
                                              <div class="products__preview"><img srcSet="{{asset('assets/img/content/product-pic-5@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-5.jpg')}}" alt="Product"></div>
                                              <div class="products__details">
                                                <div class="products__subtitle">Bento Matte 3D Illustration</div>
                                                <div class="products__wrap">
                                                  <div class="products__price">$98
                                                  </div>
                                                  <div class="products__category">3m 23d</div>
                                                </div>
                                              </div></a></div>
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
                                              <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                            </label>
                                          </div>
                                          <div class="products__col"><a class="products__item" href="#" data-popup=".js-popup-product">
                                              <div class="products__preview"><img srcSet="{{asset('assets/img/content/product-pic-6@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-6.jpg')}}" alt="Product"></div>
                                              <div class="products__details">
                                                <div class="products__subtitle">DSM - Geometry pattern</div>
                                                <div class="products__wrap">
                                                  <div class="products__price">$48
                                                  </div>
                                                  <div class="products__category">3m 23d</div>
                                                </div>
                                              </div></a></div>
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
                                              <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                            </label>
                                          </div>
                                          <div class="products__col"><a class="products__item" href="#" data-popup=".js-popup-product">
                                              <div class="products__preview"><img srcSet="img/content/product-pic-1@2x.jpg 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}" alt="Product"></div>
                                              <div class="products__details">
                                                <div class="products__subtitle">Bento Matte 3D Illustration</div>
                                                <div class="products__wrap">
                                                  <div class="products__price">$98
                                                  </div>
                                                  <div class="products__category">3m 23d</div>
                                                </div>
                                              </div></a></div>
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
                                              <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                            </label>
                                          </div>
                                          <div class="products__col"><a class="products__item" href="#" data-popup=".js-popup-product">
                                              <div class="products__preview"><img srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}" alt="Product"></div>
                                              <div class="products__details">
                                                <div class="products__subtitle">DSM - Geometry pattern</div>
                                                <div class="products__wrap">
                                                  <div class="products__price">$48
                                                  </div>
                                                  <div class="products__category">3m 23d</div>
                                                </div>
                                              </div></a></div>
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
                                              <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                            </label>
                                          </div>
                                          <div class="products__col"><a class="products__item" href="#" data-popup=".js-popup-product">
                                              <div class="products__preview"><img srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}" alt="Product"></div>
                                              <div class="products__details">
                                                <div class="products__subtitle">Node - Crypto iOS 3m 23d</div>
                                                <div class="products__wrap">
                                                  <div class="products__price">$98
                                                  </div>
                                                  <div class="products__category">3m 23d</div>
                                                </div>
                                              </div></a></div>
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
                                              <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                                            </label>
                                          </div>
                                          <div class="products__col"><a class="products__item" href="#" data-popup=".js-popup-product">
                                              <div class="products__preview"><img srcSet="{{asset('assets/img/content/product-pic-4@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-4.jpg')}}" alt="Product"></div>
                                              <div class="products__details">
                                                <div class="products__subtitle">TaskEz: Productivity App iOS UI Kit</div>
                                                <div class="products__wrap">
                                                  <div class="products__price">$48
                                                  </div>
                                                  <div class="products__category">3m 23d</div>
                                                </div>
                                              </div></a></div>
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
              <div class="products__tab js-tabs-item">
                <div class="statistics">
                  <div class="statistics__wrapper">
                    <div class="statistics__table">
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col">Product</div>
                        <div class="statistics__col">
                          <div class="statistics__control">
                            <div class="statistics__info">Traffic source</div>
                            <div class="statistics__indicators">
                              <div class="statistics__legend">
                                <div class="statistics__color" style="background-color: #FFBC99;"></div>Market
                              </div>
                              <div class="statistics__legend">
                                <div class="statistics__color" style="background-color: #CABDFF;"></div>Social media
                              </div>
                              <div class="statistics__legend">
                                <div class="statistics__color" style="background-color: #B5E4CA;"></div>Direct
                              </div>
                              <div class="statistics__legend">
                                <div class="statistics__color" style="background-color: #B1E5FC;"></div>UI8
                              </div>
                              <div class="statistics__legend">
                                <div class="statistics__color" style="background-color: #FFD88D;"></div>Others
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">Bento Matte 3D Illustration</div>
                              <div class="statistics__date">25 Sep - 4 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 40%">
                            <div class="statistics__box" style="background-color: #FFBC99; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Market</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFBC99;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B1E5FC; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">UI8</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B1E5FC;"></div>512k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #FFD88D; width: 60%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFD88D;"></div>498k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">Node - Crypto iOS 3m 23d</div>
                              <div class="statistics__date">4 Oct - 11 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 70%">
                            <div class="statistics__box" style="background-color: #FFBC99; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Market</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFBC99;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #CABDFF; width: 12%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Social media</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #CABDFF;"></div>320k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 30%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Direct</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>650k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B1E5FC; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">UI8</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B1E5FC;"></div>512k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #FFD88D; width: 18%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFD88D;"></div>498k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">TaskEz: Productivity App iOS UI Kit</div>
                              <div class="statistics__date">11 Oct - 18 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 100%">
                            <div class="statistics__box" style="background-color: #FFBC99; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Market</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFBC99;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 30%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Direct</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>650k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B1E5FC; width: 40%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">UI8</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B1E5FC;"></div>512k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #FFD88D; width: 10%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFD88D;"></div>498k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-4@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-4.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">Academe 3D Education Icons</div>
                              <div class="statistics__date">25 Sep - 4 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 50%">
                            <div class="statistics__box" style="background-color: #FFBC99; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Market</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFBC99;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B1E5FC; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">UI8</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B1E5FC;"></div>512k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #FFD88D; width: 60%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFD88D;"></div>498k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-5@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-5.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">Node - Crypto iOS 3m 23d</div>
                              <div class="statistics__date">4 Oct - 11 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 70%">
                            <div class="statistics__box" style="background-color: #FFBC99; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Market</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFBC99;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #CABDFF; width: 12%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Social media</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #CABDFF;"></div>320k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 30%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Direct</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>650k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B1E5FC; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">UI8</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B1E5FC;"></div>512k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #FFD88D; width: 18%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFD88D;"></div>498k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-6@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-6.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">TaskEz: Productivity App iOS UI Kit</div>
                              <div class="statistics__date">11 Oct - 18 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 100%">
                            <div class="statistics__box" style="background-color: #FFBC99; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Market</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFBC99;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 30%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Direct</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>650k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B1E5FC; width: 40%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">UI8</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B1E5FC;"></div>512k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #FFD88D; width: 10%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFD88D;"></div>498k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">Bento Matte 3D Illustration</div>
                              <div class="statistics__date">25 Sep - 4 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 40%">
                            <div class="statistics__box" style="background-color: #FFBC99; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Market</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFBC99;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B1E5FC; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">UI8</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B1E5FC;"></div>512k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #FFD88D; width: 60%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFD88D;"></div>498k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">Node - Crypto iOS 3m 23d</div>
                              <div class="statistics__date">4 Oct - 11 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 70%">
                            <div class="statistics__box" style="background-color: #FFBC99; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Market</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFBC99;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #CABDFF; width: 12%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Social media</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #CABDFF;"></div>320k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 30%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Direct</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>650k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #B1E5FC; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">UI8</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B1E5FC;"></div>512k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #FFD88D; width: 18%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #FFD88D;"></div>498k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                    </div>
                  </div>
                  <div class="statistics__foot">
                    <button class="button-stroke statistics__button">Load more</button>
                  </div>
                </div>
              </div>
              <div class="products__tab js-tabs-item">
                <div class="statistics">
                  <div class="statistics__wrapper">
                    <div class="statistics__table">
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col">Product</div>
                        <div class="statistics__col">
                          <div class="statistics__control">
                            <div class="statistics__info">Viewer</div>
                            <div class="statistics__indicators">
                              <div class="statistics__legend">
                                <div class="statistics__color" style="background-color: #B5E4CA;"></div>Followers
                              </div>
                              <div class="statistics__legend">
                                <div class="statistics__color" style="background-color: #CABDFF;"></div>Others
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">Bento Matte 3D Illustration</div>
                              <div class="statistics__date">25 Sep - 4 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 40%">
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 40%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Followers</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #CABDFF; width: 60%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #CABDFF;"></div>512k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-2@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-2.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">Node - Crypto iOS 3m 23d</div>
                              <div class="statistics__date">25 Sep - 4 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 100%">
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 30%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Followers</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #CABDFF; width: 70%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #CABDFF;"></div>512k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">TaskEz: Productivity App iOS UI Kit</div>
                              <div class="statistics__date">25 Sep - 4 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 60%">
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 80%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Followers</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #CABDFF; width: 20%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #CABDFF;"></div>512k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-4@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-4.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">Bento Matte 3D Illustration</div>
                              <div class="statistics__date">25 Sep - 4 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 30%">
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 50%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Followers</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #CABDFF; width: 50%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #CABDFF;"></div>512k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-5@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-5.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">TaskEz: Productivity App iOS UI Kit</div>
                              <div class="statistics__date">25 Sep - 4 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 40%">
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 40%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Followers</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #CABDFF; width: 60%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #CABDFF;"></div>512k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-6@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-6.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">Bento Matte 3D Illustration</div>
                              <div class="statistics__date">25 Sep - 4 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 100%">
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 40%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Followers</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #CABDFF; width: 60%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #CABDFF;"></div>512k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-1@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-1.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">Bento Matte 3D Illustration</div>
                              <div class="statistics__date">25 Sep - 4 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 60%">
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 70%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Followers</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #CABDFF; width: 30%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #CABDFF;"></div>512k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                      <div class="statistics__row">
                        <div class="statistics__col">
                          <label class="checkbox">
                            <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                          </label>
                        </div>
                        <div class="statistics__col"><a class="statistics__item" href="#" data-popup=".js-popup-product">
                            <div class="statistics__preview"><img srcSet="{{asset('assets/img/content/product-pic-3@2x.jpg')}} 2x" src="{{asset('assets/img/content/product-pic-3.jpg')}}" alt="Product"></div>
                            <div class="statistics__details">
                              <div class="statistics__product">Bento Matte 3D Illustration</div>
                              <div class="statistics__date">25 Sep - 4 Oct</div>
                            </div></a></div>
                        <div class="statistics__col">
                          <div class="statistics__line" style="width: 90%">
                            <div class="statistics__box" style="background-color: #B5E4CA; width: 40%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Followers</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #B5E4CA;"></div>550k
                                </div>
                              </div>
                            </div>
                            <div class="statistics__box" style="background-color: #CABDFF; width: 60%;">
                              <div class="statistics__tooltip">
                                <div class="statistics__subtitle">Others</div>
                                <div class="statistics__legend">
                                  <div class="statistics__color" style="background-color: #CABDFF;"></div>512k
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="control">
                            <button class="control__button">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>
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
                      </div>
                    </div>
                  </div>
                  <div class="statistics__foot">
                    <button class="button-stroke statistics__button">Load more</button>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
    </div>
@endsection
