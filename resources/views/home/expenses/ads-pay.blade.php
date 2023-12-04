@extends('layout.layout')

@section('content')
    <div class="page__inner">
        <div class="page__container">
            <div class="page__title h3">Ads Pay</div>
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
                                        <div class="tooltip" title="Total Paid from Beginning">
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
                                    <div class="income__label">This Year
                                        <div class="tooltip" title="New Ads Paid This Year">
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
                                    <div class="income__label">CPR
                                        <div class="tooltip" title="Cost Per Registration">
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
                            <div class="transactions__col">Month</div>
                            <div class="transactions__col">Company</div>
                            <div class="transactions__col">Promote</div>
                            <div class="transactions__col">Paid</div>
                            <div class="transactions__col">Traffic</div>
                            <div class="transactions__col">CPR</div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div>January-2023
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Short Description</div>
                                </div>
                                <div class="status-green-dark transactions__status">Siteground</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Short Description</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Paid</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Traffic</div>
                                <div class="transactions__amount">120</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">CPR</div>
                                <div class="transactions__amount">$10.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div>February-2023
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Short Description</div>
                                </div>
                                <div class="status-green-dark transactions__status">Siteground</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Short Description</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Paid</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Traffic</div>
                                <div class="transactions__amount">120</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">CPR</div>
                                <div class="transactions__amount">$10.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div>March-2023
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Short Description</div>
                                </div>
                                <div class="status-green-dark transactions__status">Siteground</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Short Description</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Paid</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Traffic</div>
                                <div class="transactions__amount">120</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">CPR</div>
                                <div class="transactions__amount">$10.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div>April-2023
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Short Description</div>
                                </div>
                                <div class="status-green-dark transactions__status">Siteground</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Short Description</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Paid</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Traffic</div>
                                <div class="transactions__amount">120</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">CPR</div>
                                <div class="transactions__amount">$10.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div>May-2023
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Short Description</div>
                                </div>
                                <div class="status-green-dark transactions__status">Siteground</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Short Description</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Paid</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Traffic</div>
                                <div class="transactions__amount">120</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">CPR</div>
                                <div class="transactions__amount">$10.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div>June-2023
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Short Description</div>
                                </div>
                                <div class="status-green-dark transactions__status">Siteground</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Short Description</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Paid</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Traffic</div>
                                <div class="transactions__amount">120</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">CPR</div>
                                <div class="transactions__amount">$10.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div>July-2023
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Short Description</div>
                                </div>
                                <div class="status-green-dark transactions__status">Siteground</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Short Description</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Paid</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Traffic</div>
                                <div class="transactions__amount">120</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">CPR</div>
                                <div class="transactions__amount">$10.00</div>
                            </div>
                        </div>
                        <div class="transactions__row">
                            <div class="transactions__col">
                                <div class="transactions__label">Date</div>August-2023
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__details">
                                    <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                    <div class="transactions__invoice">Short Description</div>
                                </div>
                                <div class="status-green-dark transactions__status">Siteground</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                                <div class="transactions__invoice">Short Description</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Paid</div>$350.00
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">Traffic</div>
                                <div class="transactions__amount">120</div>
                            </div>
                            <div class="transactions__col">
                                <div class="transactions__label">CPR</div>
                                <div class="transactions__amount">$10.00</div>
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
                                                <div class="field__label">Ads Website
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="text" name="ads-website">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="settings__row">
                                            <div class="field">
                                                <div class="field__label">Month
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="month" name="month">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="field__label">Paid of this month
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="number" name="paid-month">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="settings__row">
                                            <div class="field">
                                                <div class="field__label">Engaged Traffic
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <div class="field__wrap">
                                                        <input class="field__input" type="number" name="e-traffic">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="field__label">Our Promoted Website
                                                    <div class="tooltip tooltipstered">
                                                    </div>
                                                </div>
                                                <div class="field__wrap">
                                                    <input class="field__input" type="text" name="p-website">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="editor">
                                            <div class="editor__label">Short Description
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
