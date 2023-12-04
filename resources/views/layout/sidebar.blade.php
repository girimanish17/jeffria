<div class="sidebar">
    <button class="sidebar__close">
        <svg class="icon icon-close">
            <use xlink:href="#icon-close"></use>
        </svg>
    </button><a class="sidebar__logo" href="{{ url('/') }}"><img class="some-icon"
            src="{{ asset('assets/img/logo-dark.png') }}" alt="Core"><img class="some-icon-dark"
            src="{{ asset('assets/img/logo-light.png') }}" alt="Core"></a>
    <div class="sidebar__menu"><a class="sidebar__item active" href="{{ url('/') }}">
            <svg class="icon icon-home">
                <use xlink:href="#icon-home"></use>
            </svg>Home</a>
        <div class="sidebar__item sidebar__item_dropdown wide {{ (Request::segment(1)=='projects' ) ? 'active' : '' }}">
            <div class="sidebar__top">
                <button class="sidebar__head">
                    <svg class="icon icon-diamond">
                        <use xlink:href="#icon-diamond"></use>
                    </svg>Projects
                    <svg class="icon icon-arrow-down">
                        <use xlink:href="#icon-arrow-down"></use>
                    </svg>
                </button><a class="sidebar__add" href="{{route('add_product')}}">
                    <svg class="icon icon-plus">
                        <use xlink:href="#icon-plus"></use>
                    </svg></a>
            </div>
            <div class="sidebar__body"><a class="sidebar__link {{ (Request::segment(2)=='traffic-report' ) ? 'active' : '' }}" href="{{route('traffic_report')}}">Traffic Report
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg></a><a class="sidebar__link {{ (Request::segment(2)=='under-development' ) ? 'active' : '' }}" href="{{route('under_development')}}">Under Development
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg>
                    <div class="sidebar__counter" style="background-color: #FFBC99">5</div>
                </a><a class="sidebar__link {{ (Request::segment(2)=='launched-products' ) ? 'active' : '' }}" href="{{route('launched_products')}}">Launched
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg>
                    <div class="sidebar__counter" style="background-color: #B5E4CA">10</div>
                </a></div>
        </div>
        <div class="sidebar__item sidebar__item_dropdown wide  {{ (Request::segment(1)=='staffs' ) ? 'active' : '' }}">
            <button class="sidebar__head">
                <svg class="icon icon-profile-circle">
                    <use xlink:href="#icon-profile-circle"></use>
                </svg>Staffs
                <svg class="icon icon-arrow-down">
                    <use xlink:href="#icon-arrow-down"></use>
                </svg>
            </button>
            <div class="sidebar__body"><a class="sidebar__link {{(Request::segment(1)=='staffs' ) && (Request::segment(2)=='overview' ) ? 'active' : '' }}" href="{{route('overview')}}">Overview
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg></a><a class="sidebar__link {{ (Request::segment(2)=='staffs-list' ) ? 'active' : '' }}" href="{{route('staffs_list')}}">Staffs list
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg></a>
                <a class="sidebar__link {{ (Request::segment(2)=='affiliate-traffic' ) ? 'active' : '' }}" href="{{route('affiliate_traffic')}}">Affiliate Traffic
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg></a>
                <a class="sidebar__link {{ (Request::segment(2)=='salary-claim-status' ) ? 'active' : '' }}" href="{{route('salary_claim_status')}}">Salary claim status
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg></a>
            </div>
        </div>
        <!-- <a class="sidebar__item" href="shop.html">
    <svg class="icon icon-store">
      <use xlink:href="#icon-store"></use>
    </svg>Shop</a> -->
        <div class="sidebar__item sidebar__item_dropdown wide {{ (Request::segment(1)=='expenses' ) ? 'active' : '' }}">
            <button class="sidebar__head">
                <svg class="icon icon-pie-chart">
                    <use xlink:href="#icon-pie-chart"></use>
                </svg>Expenses
                <svg class="icon icon-arrow-down">
                    <use xlink:href="#icon-arrow-down"></use>
                </svg>
            </button>
            <div class="sidebar__body">
                <a class="sidebar__link {{(Request::segment(1)=='expenses' ) && (Request::segment(2)=='overview' ) ? 'active' : '' }}" href="{{route('expenses_overview')}}">Overview
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg></a><a class="sidebar__link {{ (Request::segment(2)=='hosting-server' ) ? 'active' : '' }}"" href="{{route('expenses_hosting_server')}}">Hosting Server
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg></a>
                <a class="sidebar__link {{ (Request::segment(2)=='api' ) ? 'active' : '' }}" href="{{route('expenses_api')}}">Api
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg></a>
                <a class="sidebar__link {{ (Request::segment(2)=='ads-pay' ) ? 'active' : '' }}" href="{{route('expenses_ads_pay')}}" href="{{route('expenses_ads_pay')}}">Ads Pay
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg></a>
                <a class="sidebar__link {{ (Request::segment(2)=='theme' ) ? 'active' : '' }}" href="{{route('expenses_theme')}}" href="{{route('expenses_theme')}}">Theme
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg></a>
                <a class="sidebar__link {{ (Request::segment(2)=='plugin' ) ? 'active' : '' }}" href="{{route('expenses_plugin')}}" href="{{route('expenses_plugin')}}">Plugin
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg></a>
                <a class="sidebar__link {{ (Request::segment(2)=='software' ) ? 'active' : '' }}" href="{{route('expenses_software')}}" href="{{route('expenses_software')}}">Software
                    <svg class="icon icon-arrow-next">
                        <use xlink:href="#icon-arrow-next"></use>
                    </svg></a>
            </div>
        </div><a class="sidebar__item" href="{{route('summary')}}">
            <svg class="icon icon-promotion">
                <use xlink:href="#icon-promotion"></use>
            </svg>Summary</a>
    </div>
    <button class="sidebar__toggle">
        <svg class="icon icon-arrow-right">
            <use xlink:href="#icon-arrow-right"></use>
        </svg>
        <svg class="icon icon-close">
            <use xlink:href="#icon-close"></use>
        </svg>
    </button>
    <div class="sidebar__foot">
        <button class="sidebar__help">
            <svg class="icon icon-help">
                <use xlink:href="#icon-help"></use>
            </svg>Help & getting started
            <div class="sidebar__counter">8</div>
        </button>
        <label class="theme js-theme">
            <input class="theme__input" type="checkbox" /><span class="theme__inner"><span class="theme__box">
                    <svg class="icon icon-sun">
                        <use xlink:href="#icon-sun"></use>
                    </svg>Light</span><span class="theme__box">
                    <svg class="icon icon-moon">
                        <use xlink:href="#icon-moon"></use>
                    </svg>Dark</span></span>
        </label>
    </div>
</div>
