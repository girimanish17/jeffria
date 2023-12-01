@extends('layout.layout')

@section('content')
    <div class="page__inner">
        <div class="page__container">
            <div class="page__title h3">New Project</div>
            <div class="create">
                <div class="create__row">
                    <div class="create__col">
                        <div class="create__card card">
                            <div class="card__head">
                                <div class="title-green card__title">Name & description</div>
                                <div class="create__line">
                                    <div class="create__info">Launched

                                    </div>
                                    <label class="switch">
                                        <input class="switch__input" type="checkbox" checked="checked" /><span
                                            class="switch__inner"><span class="switch__box"></span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="field__label">Project Title
                                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="field__wrap">
                                    <input class="field__input" type="text" name="title" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="field__label">Project Code
                                    <div class="tooltip" title="example isc, ifb">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="field__wrap">
                                    <input class="field__input" type="text" name="title" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="field__label">Category
                                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="field__wrap">
                                    <select class="select">
                                        <option>Select category</option>
                                        <option>Listing</option>
                                        <option>Forum</option>
                                        <option>News</option>
                                        <option>Live Score</option>
                                        <option>Landing Page</option>
                                    </select>
                                </div>
                            </div>

                            <div class="editor">
                                <div class="editor__label">Description
                                    <div class="tooltip" title="Description">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <textarea class="editor__textarea js-editor"></textarea>
                            </div>
                            <div class="create__group">
                                <div class="field">
                                    <div class="field__label">Key features
                                        <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="field__wrap">
                                        <input class="field__input" type="text" name="value1" placeholder="Value"
                                            required>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="field__wrap">
                                        <input class="field__input" type="text" name="value2" placeholder="Value"
                                            required>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="field__wrap">
                                        <input class="field__input" type="text" name="value2" placeholder="Value"
                                            required>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="field__wrap">
                                        <input class="field__input" type="text" name="value2" placeholder="Value"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="create__card card">
                            <div class="card__head">
                                <div class="title-blue card__title">Images</div>
                            </div>
                            <div class="file">
                                <div class="file__label">Cover images
                                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed"
                                        data-position="right">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="file__wrap">
                                    <input class="file__input" type="file" />
                                    <div class="file__box">
                                        <svg class="icon icon-upload">
                                            <use xlink:href="#icon-upload"></use>
                                        </svg>Click or drop image
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="create__card card">
                            <div class="card__head">
                                <div class="title-green card__title">Domain & Server</div>
                            </div>
                            <div class="field">
                                <div class="field__label">Hosting Server
                                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="field__wrap">
                                    <select class="select">
                                        <option>Select Server</option>
                                        <option>Siteground</option>
                                        <option>A2 hosting</option>

                                    </select>
                                </div>
                            </div>
                            <div class="create__line">
                                <div class="create__info">Domain Bought by our team
                                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <label class="switch">
                                    <input class="switch__input" type="checkbox" checked="checked" /><span
                                        class="switch__inner"><span class="switch__box"></span></span>
                                </label>
                            </div>
                            <div class="create__fieldset">
                                <div class="field field_currency">
                                    <div class="field__label">First year amount of domain</div>
                                    <div class="field__wrap">
                                        <input class="field__input" type="text" name="minimum-amount" required>
                                        <div class="field__currency">$</div>
                                    </div>
                                </div>
                                <div class="field field_currency">
                                    <div class="field__label">Recurring amount of domain</div>
                                    <div class="field__wrap">
                                        <input class="field__input" type="text" name="suggested-amount" required>
                                        <div class="field__currency">$</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="create__card card">
                            <div class="card__head">
                                <div class="title-purple card__title">Theme & Plugin</div>
                            </div>
                            <div class="field">
                                <div class="field__label">Theme Usage
                                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="field__wrap">
                                    <select class="select">
                                        <option>Select category</option>
                                        <option>Free Theme</option>
                                        <option>Buddy Boss</option>
                                        <option>Enfold</option>
                                        <option>Mylisting 27</option>
                                        <option>Gauge</option>
                                        <option>Xido</option>
                                    </select>
                                </div>
                            </div>
                            <div class="create__label">Paid Plugin
                                <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="create__list">
                                <label class="checkbox">
                                    <input class="checkbox__input" type="checkbox" checked><span
                                        class="checkbox__inner"><span class="checkbox__tick"></span><span
                                            class="checkbox__text">quform</span></span>
                                </label>
                                <label class="checkbox">
                                    <input class="checkbox__input" type="checkbox" checked><span
                                        class="checkbox__inner"><span class="checkbox__tick"></span><span
                                            class="checkbox__text">Touchy Menu</span></span>
                                </label>
                                <label class="checkbox">
                                    <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                                            class="checkbox__tick"></span><span class="checkbox__text">Wpdata
                                            Table</span></span>
                                </label>
                                <label class="checkbox">
                                    <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                                            class="checkbox__tick"></span><span
                                            class="checkbox__text">Wpbakery</span></span>
                                </label>
                            </div>




                        </div>
                        <div class="create__card card">
                            <div class="card__head">
                                <div class="title-blue card__title">Teams</div>
                            </div>

                            <div class="team_input" style="margin-top: 0;">
                                <div class="create__top">
                                    <div class="create__label">Product Manager
                                        <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                <div style="flex: 1;" class="create__tags">
                                    <input name="tags" placeholder="Enter tags to describe your item" value="John">
                                </div>
                            </div>


                            <div class="team_input">
                                <div class="create__top">
                                    <div class="create__label">Vice Manager
                                        <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                <div style="flex: 1;" class="create__tags">
                                    <input name="tags" placeholder="Enter tags to describe your item" value="Vincent">
                                </div>
                            </div>
                            <div class="team_input">
                                <div class="create__top">
                                    <div class="create__label">Backend Developer
                                        <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                <div style="flex: 1;" class="create__tags">
                                    <input name="tags" placeholder="Enter tags to describe your item"
                                        value="Captain India">
                                </div>
                            </div>
                            <div class="team_input">
                                <div class="create__top">
                                    <div class="create__label">Frontend Developer
                                        <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                <div style="flex: 1;" class="create__tags">
                                    <input name="tags" placeholder="Enter tags to describe your item"
                                        value="Captain India">
                                </div>
                            </div>
                            <div class="team_input">
                                <div class="create__top">
                                    <div class="create__label">Tester
                                        <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                <div style="flex: 1;" class="create__tags">
                                    <input name="tags" placeholder="Enter tags to describe your item"
                                        value="Muhammad Bilal">
                                </div>
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
                                    <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                                            class="checkbox__tick"></span><span class="checkbox__text">
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
                                    <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                                            class="checkbox__tick"></span><span class="checkbox__text">
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
                                    <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                                            class="checkbox__tick"></span><span class="checkbox__text">
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
                                    <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                                            class="checkbox__tick"></span><span class="checkbox__text">
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
                                    <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                                            class="checkbox__tick"></span><span class="checkbox__text">
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
                        </div>
                    </div>
                    <div class="create__col">
                        <div class="create__preview js-preview">
                            <button class="create__close js-preview-close">
                                <svg class="icon icon-close">
                                    <use xlink:href="#icon-close"></use>
                                </svg>
                            </button>
                            <div class="card">
                                <div class="card__head">
                                    <div class="title-blue card__title">Preview</div>
                                    <button class="card__full">
                                        <svg class="icon icon-expand">
                                            <use xlink:href="#icon-expand"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="create__photo"><img src="{{asset('assets/img/content/photo-1.jpg')}}" alt="Product"></div>
                                <div class="create__flex">
                                    <div class="create__subtitle">Fleet - Travel shopping UI design kit</div>
                                    <div class="create__price">$98</div>
                                </div>
                                <div class="create__user">
                                    <div class="create__avatar"><img src="{{asset('assets/img/content/avatar.jpg')}}" alt="Avatar"></div>
                                    <div class="create__text">by <span>Hortense</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel__info">
                    <svg class="icon icon-check-all">
                        <use xlink:href="#icon-check-all"></use>
                    </svg>Last saved <span>Oct 4, 2021 - 23:32</span>
                </div>
                <div class="panel__btns">
                    <button class="button-stroke panel__button">Save Draft</button>
                    <button class="button panel__button">Publish now</button>
                    <div class="actions actions_up">
                        <button class="actions__button">
                            <svg class="icon icon-more-horizontal">
                                <use xlink:href="#icon-more-horizontal"></use>
                            </svg>
                        </button>
                        <div class="actions__body">
                            <button class="actions__option js-preview-open">
                                <svg class="icon icon-expand">
                                    <use xlink:href="#icon-expand"></use>
                                </svg>Preview
                            </button>
                            <button class="actions__option" data-popup=".js-popup-schedule">
                                <svg class="icon icon-calendar">
                                    <use xlink:href="#icon-calendar"></use>
                                </svg>Schedule product
                            </button>
                            <button class="actions__option">
                                <svg class="icon icon-link">
                                    <use xlink:href="#icon-link"></use>
                                </svg>Get shareable link
                            </button>
                            <button class="actions__option">
                                <svg class="icon icon-close">
                                    <use xlink:href="#icon-close"></use>
                                </svg>Clear data
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup popup_schedule js-popup js-popup-schedule">
                <div class="popup__overlay js-popup-overlay"></div>
                <div class="popup__wrap js-popup-wrap">
                    <div class="calendar js-calendar">
                        <div class="title-red calendar__title">Reschedule product</div>
                        <div class="calendar__note">Choose a day and time in the future you want your product to be
                            published.
                        </div>
                        <div class="calendar__list">
                            <div class="calendar__item calendar__item_date js-calendar-item">
                                <div class="calendar__head js-calendar-head">
                                    <svg class="icon icon-calendar">
                                        <use xlink:href="#icon-calendar"></use>
                                    </svg>
                                    <div class="calendar__details">
                                        <div class="calendar__category">Date</div>
                                        <input class="calendar__value js-date-range" type="text"
                                            data-single-month="true" data-container=".js-date-container">
                                    </div>
                                </div>
                                <div class="calendar__body js-calendar-body">
                                    <div class="calendar__container js-date-container"></div>
                                    <div class="calendar__foot">
                                        <button
                                            class="button-stroke button-small calendar__button js-date-clear">Clear</button>
                                        <button class="button-small calendar__button js-calendar-close">Close</button>
                                    </div>
                                </div>
                            </div>
                            <div class="calendar__item calendar__item_time js-calendar-item">
                                <div class="calendar__head js-calendar-head">
                                    <svg class="icon icon-clock">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg>
                                    <div class="calendar__details">
                                        <div class="calendar__category">Time</div>
                                        <div class="calendar__value js-calendar-value"> </div>
                                    </div>
                                </div>
                                <div class="calendar__body js-calendar-body">
                                    <div class="calendar__top">
                                        <div class="calendar__subtitle js-calendar-title"></div>
                                        <button class="calendar__close js-calendar-close">
                                            <svg class="icon icon-close">
                                                <use xlink:href="#icon-close"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <ul class="calendar__time js-calendar-time">
                                        <li>12:00 AM</li>
                                        <li>12:30 AM</li>
                                        <li>1:00 AM</li>
                                        <li class="active">1:30 AM</li>
                                        <li>2:00 AM</li>
                                        <li>2:30 AM</li>
                                        <li>3:00 AM</li>
                                        <li>3:30 AM</li>
                                        <li>4:00 AM</li>
                                        <li>4:30 AM</li>
                                        <li>5:00 AM</li>
                                        <li>5:30 AM</li>
                                        <li>6:00 AM</li>
                                        <li>6:30 AM</li>
                                        <li>7:00 AM</li>
                                        <li>7:30 AM</li>
                                        <li>8:00 AM</li>
                                        <li>8:30 AM</li>
                                        <li>9:00 AM</li>
                                        <li>9:30 AM</li>
                                        <li>10:00 AM</li>
                                        <li>10:30 AM</li>
                                        <li>11:00 AM</li>
                                        <li>11:30 AM</li>
                                        <li>12:00 PM</li>
                                        <li>12:30 PM</li>
                                        <li>1:00 PM</li>
                                        <li>1:30 PM</li>
                                        <li>2:00 PM</li>
                                        <li>2:30 PM</li>
                                        <li>3:00 PM</li>
                                        <li>3:30 PM</li>
                                        <li>4:00 PM</li>
                                        <li>4:30 PM</li>
                                        <li>5:00 PM</li>
                                        <li>5:30 PM</li>
                                        <li>6:00 PM</li>
                                        <li>6:30 PM</li>
                                        <li>7:00 PM</li>
                                        <li>7:30 PM</li>
                                        <li>8:00 PM</li>
                                        <li>8:30 PM</li>
                                        <li>9:00 PM</li>
                                        <li>9:30 PM</li>
                                        <li>10:00 PM</li>
                                        <li>10:30 PM</li>
                                        <li>11:00 PM</li>
                                        <li>11:30 PM</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="calendar__btns">
                            <button class="button calendar__button">Reschedule</button>
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
