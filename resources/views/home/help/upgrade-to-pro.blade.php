@extends('layout.layout')

@section('content')
    <div class="page__inner">
        <div class="page__container">
            <div class="page__title h3">Upgrade to Pro</div>
            <div class="packages">
                <div class="packages__group">
                    <div class="packages__item">
                        <div class="packages__top">
                            <div class="title-blue packages__title">Lite</div>
                        </div>
                        <div class="packages__content">Basic shop and tools to set up your profile</div>
                        <div class="packages__line">
                            <div class="h1 packages__percent">8%</div>
                            <div class="packages__note">of the monthly income you earn on the market</div>
                            <div class="tooltip" title="Small description Lite">
                                <svg class="icon icon-info">
                                    <use xlink:href="#icon-info"></use>
                                </svg>
                            </div>
                        </div>
                        <ul class="packages__list">
                            <li>Basic shop profile</li>
                            <li>Customer communication tools</li>
                            <li>100 promotion posts</li>
                            <li>Maximum 50 product uploads</li>
                        </ul>
                        <button class="button-stroke packages__button">Your plan</button>
                    </div>
                    <div class="packages__item">
                        <div class="packages__top">
                            <div class="title-purple packages__title">Pro</div>
                            <div class="packages__recommended">Recommended</div>
                        </div>
                        <div class="packages__content">Pro shop and tools to set up your profile 🔥</div>
                        <div class="packages__line">
                            <div class="h1 packages__percent">12%</div>
                            <div class="packages__note">of the monthly income you earn on the market</div>
                            <div class="tooltip" title="Small description Pro">
                                <svg class="icon icon-info">
                                    <use xlink:href="#icon-info"></use>
                                </svg>
                            </div>
                        </div>
                        <ul class="packages__list">
                            <li>Extended shop profile</li>
                            <li>Customer communication tools</li>
                            <li>Unlimited promotion posts</li>
                            <li>Unlimited product uploads</li>
                            <li>Special offers promo tool</li>
                            <li>Analytics and insights</li>
                            <li>Bulk message to all customers</li>
                        </ul>
                        <button class="button packages__button">Upgrade now</button>
                    </div>
                </div>
            </div>
            <div class="faq js-tabs">
                <div class="h3 faq__title">Frequently asked questions</div>
                <div class="faq__container">
                    <div class="faq__sidebar">
                        <div class="faq__menu"><a class="faq__link js-tabs-link active" href="#">Get started</a><a
                                class="faq__link js-tabs-link" href="#">Login & access</a><a
                                class="faq__link js-tabs-link" href="#">Billing & payments</a><a
                                class="faq__link js-tabs-link" href="#">My benefits</a><a
                                class="faq__link js-tabs-link" href="#">Account settings</a></div>
                        <select class="select js-tabs-select">
                            <option>Get started</option>
                            <option>Login & access</option>
                            <option>Billing & payments</option>
                            <option>My benefits</option>
                            <option>Account settings</option>
                        </select>
                    </div>
                    <div class="faq__wrapper">
                        <div class="faq__tab js-tabs-item" style="display: block">
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">I forgot my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">I can’t reset my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How do I change and reset my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                        </div>
                        <div class="faq__tab js-tabs-item">
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">I forgot my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">I can’t reset my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How do I change and reset my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">I forgot my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                        </div>
                        <div class="faq__tab js-tabs-item">
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">I forgot my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">I can’t reset my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How do I change and reset my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                        </div>
                        <div class="faq__tab js-tabs-item">
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">I can’t reset my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How do I change and reset my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                        </div>
                        <div class="faq__tab js-tabs-item">
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">I forgot my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">I can’t reset my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How do I change and reset my password</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                            <div class="faq__item">
                                <div class="faq__head">
                                    <div class="faq__subtitle">How to upgrade to Pro account?</div>
                                    <svg class="icon icon-plus-circle">
                                        <use xlink:href="#icon-plus-circle"></use>
                                    </svg>
                                </div>
                                <div class="faq__body">Enjoy instant access to our vast library of 5,121 premium products
                                    and all upcoming new releases with super-fast download speeds powered by Amazon S3. Yes,
                                    you read that right. Getting $127,035 in value means you're saving more than 99% on all
                                    products making it the sweetest deal for premium design assets around.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
