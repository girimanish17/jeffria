@extends('layout.layout')

@section('content')
    <div class="page__inner">
        <div class="page__container">
            <div class="page__title h3">Software</div>
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
                                    <div class="income__label">Total Subscribes Fee
                                        <div class="tooltip" title="Total Current Active Subscribes">
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
                                    <div class="income__label">New Subscribes This Year
                                        <div class="tooltip" title="New Subscribes This Year">
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
                                    <div class="income__label">Total Users
                                        <div class="tooltip"
                                            title="If one member bought 3 software, it consider 1 user count.">
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
                            <div class="transactions__col">Company</div>
                            <div class="transactions__col">Package Name</div>
                            <div class="transactions__col">Price/year</div>
                            <div class="transactions__col">No. of Users</div>
                            <div class="transactions__col">Monthly/User</div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">14 Oct 2024(Exp)</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">Siteground</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Name of who use it</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Amount</div>
                                <div class="transactions__amount">5</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Monthly/Web</div>
                                <div class="transactions__amount">$29.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">one-time</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">HostGator</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Name of who use it</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$380.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Amount</div>
                                <div class="transactions__amount">5</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Monthly/Web</div>
                                <div class="transactions__amount">$31.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">14 Oct 2024(Exp)</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">Bluehost</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Name of who use it</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$380.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Amount</div>
                                <div class="transactions__amount">12</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Monthly/Web</div>
                                <div class="transactions__amount">$31.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">one-time</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">A2 Hosting</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Name of who use it</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Amount</div>
                                <div class="transactions__amount">5</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Monthly/Web</div>
                                <div class="transactions__amount">$29.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">14 Oct 2024(Exp)</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">Siteground</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Name of who use it</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Amount</div>
                                <div class="transactions__amount">5</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Monthly/Web</div>
                                <div class="transactions__amount">$29.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">one-time</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">HostGator</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Name of who use it</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$380.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Amount</div>
                                <div class="transactions__amount">5</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Monthly/Web</div>
                                <div class="transactions__amount">$31.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">14 Oct 2024(Exp)</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">Bluehost</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Name of who use it</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$380.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Amount</div>
                                <div class="transactions__amount">12</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Monthly/Web</div>
                                <div class="transactions__amount">$31.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div><span style="margin-right:10px">14 Oct
                                    2021</span> <br><span style="color: #FF6A55;">one-time</span>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Name of who use it</div>
                                </div>
                                <div class="status-green-dark transactions__status">A2 Hosting</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Name of who use it</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Price</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Amount</div>
                                <div class="transactions__amount">5</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Monthly/Web</div>
                                <div class="transactions__amount">$29.00</div>
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
                                                <div class="field__label">Company
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="text" name="company">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="field__label">Website
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="text" name="website">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="settings__row">
                                            <div class="field">
                                                <div class="field__label">Package Name
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="text" name="package-name">
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
                                                <div class="field__label">Amount
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <div class="field__wrap">
                                                        <input class="field__input" type="number" name="amount">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="field__label">Renewal Amount
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="number" name="renewal-amount">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="settings__row">
                                            <div class="field">
                                                <div class="field__label">How many users allowed
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
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
                                            <div class="field">
                                                <div class="field__label">Users
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input name="tags" placeholder="Enter tags to describe your item"
                                                        value="Users">
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
