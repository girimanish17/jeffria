@extends('layout.layout')

@section('content')
    <div class="page__inner">
        <div class="page__container">
            <div class="page__title h3">Theme</div>
            <div class="card">
                <div class="income">
                    <div class="income__list">
                        <div class="income__item">
                            <div class="income__icon" style="background-color: #B5E4CA;">
                                <svg class="icon icon-activity">
                                    <use xlink:href="#icon-activity"></use>
                                </svg>
                            </div>
                            <div class="income__line">
                                <div class="income__details">
                                    <div class="income__label">Total Paid
                                        <div class="tooltip" title="Total paid from beginning">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="income__counter">$128,789</div>
                                </div>
                            </div>
                        </div>
                        <div class="income__item">
                            <div class="income__icon" style="background-color: #CABDFF;">
                                <svg class="icon icon-pie-chart">
                                    <use xlink:href="#icon-pie-chart"></use>
                                </svg>
                            </div>
                            <div class="income__line">
                                <div class="income__details">
                                    <div class="income__label">Total Subscribe
                                        <div class="tooltip"
                                            title="Total amount of those themes which need to be subscribe yearly.">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="income__counter">$128,789</div>
                                </div>
                            </div>
                        </div>
                        <div class="income__item">
                            <div class="income__icon" style="background-color: #B1E5FC;">
                                <svg class="icon icon-donut-chart">
                                    <use xlink:href="#icon-donut-chart"></use>
                                </svg>
                            </div>
                            <div class="income__line">
                                <div class="income__details">
                                    <div class="income__label">Cost / Web
                                        <div class="tooltip" title="Many theme can be used multiple times.">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="income__counter">$338.98</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="transactions card">
                <div class="card__head cstm-select">
                    <div class="title-blue card__title">Item Listing</div>
                    <select class="select select_small">
                        <option>All time</option>
                        <option>This Year Purchases</option>
                    </select>
                    <button class="button-small card__button" data-popup=".js-popup-additem">Add Item</button>
                </div>
                <div class="transactions__wrapper">
                    <div class="transactions__table">
                        <div class="transactions__row">
                            <div class="transactions__col">Date Purchase</div>
                            <div class="transactions__col">Platform</div>
                            <div class="transactions__col">Theme Name</div>
                            <div class="transactions__col">Price</div>
                            <div class="transactions__col">No. of Web</div>
                            <div class="transactions__col">Monthly/Web</div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date Purchase</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">14 Oct 2024(Exp)</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">ThemeForest</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">BuddyBoss</div>
                                <div class="transactions__invoice">Support until:</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">No. of Web</div>
                                <div class="transactions__amount">5</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>
                                <div class="transactions__amount">$31.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date Purchase</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">one-time</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">CodeCanyon</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">MyListing</div>
                                <div class="transactions__invoice">Support until:</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">No. of Web</div>
                                <div class="transactions__amount">10</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>
                                <div class="transactions__amount">$31.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date Purchase</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">14 Oct 2024(Exp)</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">ThemeForest</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">BuddyBoss</div>
                                <div class="transactions__invoice">Support until:</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">No. of Web</div>
                                <div class="transactions__amount">5</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>
                                <div class="transactions__amount">$31.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date Purchase</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">one-time</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">CodeCanyon</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">MyListing</div>
                                <div class="transactions__invoice">Support until:</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">No. of Web</div>
                                <div class="transactions__amount">10</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>
                                <div class="transactions__amount">$31.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date Purchase</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">14 Oct 2024(Exp)</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">ThemeForest</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">BuddyBoss</div>
                                <div class="transactions__invoice">Support until:</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">No. of Web</div>
                                <div class="transactions__amount">5</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>
                                <div class="transactions__amount">$31.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date Purchase</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">one-time</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">CodeCanyon</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">MyListing</div>
                                <div class="transactions__invoice">Support until:</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">No. of Web</div>
                                <div class="transactions__amount">10</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>
                                <div class="transactions__amount">$31.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date Purchase</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">14 Oct 2024(Exp)</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">ThemeForest</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">BuddyBoss</div>
                                <div class="transactions__invoice">Support until:</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">No. of Web</div>
                                <div class="transactions__amount">5</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>
                                <div class="transactions__amount">$31.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date Purchase</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">one-time</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">CodeCanyon</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">MyListing</div>
                                <div class="transactions__invoice">Support until:</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">No. of Web</div>
                                <div class="transactions__amount">10</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>
                                <div class="transactions__amount">$31.00</div>
                            </div>
                        </div>
                    </div>

                    <div class="transactions__foot">
                        <button class="button-stroke button-small transactions__button">
                            <div class="loader"></div><span>Load more</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup popup_product js-popup js-popup-additem">
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
                            <div class="create__card card">
                                <div class="card__head">
                                    <div class="title-red card__title">Add Item</div>
                                </div>
                                <div class="settings__fieldset">
                                    <div class="field">
                                        <div class="settings__row">
                                            <div class="field">
                                                <div class="field__label">Platform Name
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="text" name="p-name">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="field__label">Platform Website
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="text" name="p-website">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="settings__row">
                                            <div class="field">
                                                <div class="field__label">Theme Name
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="text" name="theme-name">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="field__label">Price Type
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap cstm-radio">
                                                    <label id="subscribe" class="radio checkbox checkbox_reverse">
                                                        <input class="radio__input" type="radio" name="price-type"
                                                            checked=""><span class="radio__inner"><span
                                                                class="radio__text">Subscribe</span><span
                                                                class="radio__tick"></span></span>
                                                    </label>
                                                    <label id="one-time" class="radio checkbox checkbox_reverse">
                                                        <input class="radio__input" type="radio"
                                                            name="price-type"><span class="radio__inner"><span
                                                                class="radio__text">One-time</span><span
                                                                class="radio__tick"></span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="settings__row">
                                            <div class="field">
                                                <div class="field__label">Purchase Date
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <div class="field__wrap">
                                                        <input placeholder="1-60" class="field__input" type="date"
                                                            name="purchase-date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="months" class="field">
                                                <div class="field__label">Months
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input placeholder="1-60" class="field__input" type="text"
                                                        name="months">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="settings__row">
                                            <div class="field">
                                                <div class="field__label">Support Period
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <div class="field__wrap">
                                                        <input placeholder="1-60" class="field__input" type="text"
                                                            name="s-p">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="field__label">Amount
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="number" name="amount">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="settings__row">
                                            <div class="field">
                                                <div class="field__label">Renewal Amount
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="number" name="renewal-amount">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="field__label">How many Website allowed
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <div class="field__wrap cstm">
                                                        <select class="select" name="user" style="display: none;">
                                                            <option value="Select">Select</option>
                                                            <option value="Unlimited">Unlimited</option>
                                                            <option value="1-100">1-100</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="editor">
                                            <div class="editor__label">Description
                                                <div class="tooltip" title="Description">
                                                </div>
                                            </div>
                                            <textarea class="editor__textarea js-editor"></textarea>
                                        </div>
                                    </div>

                                    <button style="margin-top:30px" class="button settings__button">Save Item</button>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
