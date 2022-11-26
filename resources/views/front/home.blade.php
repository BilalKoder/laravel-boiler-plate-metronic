@php
use App\Functions\Helper;
@endphp

@extends('front.app')
@section('content')
    <div id="pagepiling">
        <!-- START BANNER -->
        <section class="section slide1 p-0" id="home">
            <div class="slider-area">
                <div class="particles-js" id="particles-js0"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 text-md-center text-lg-left">
                            <img src="<?= asset('above/images/logo.png') ?>" alt="logo" class="banner-logo">
                        </div>
                    </div>
                    <a href="#vision" class="down-arrow fas fa-chevron-down"></a>
                </div>
            </div>
        </section>
        <!-- END BANNER -->

        <!-- START BANNER -->
        <section class="section slide1 p-0" id="vision">
            <div class="slider-area" id="slider-area">
                <div class="particles-js" id="particles-js1"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 text-md-center text-lg-left">
                            <div class="slider-content">
                                <h1 class="main-font text-uppercase">
                                    <?= Helper::_lang('my') ?>
                                    <span
                                        class="slider-text px-2 my_vission vision str"><?= Helper::_lang('Vision') ?></span>
                                </h1>
                                <p class="pt-3 alt-font content-para"><?= Helper::_lang('my_visioin_text') ?></p>
                                <h4 class="main-font text-uppercase">
                                    <span class="text-yellow"><?= Helper::_lang('my_visioin_heading') ?></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <a href="#mygoal" class="down-arrow fas fa-chevron-down"></a>
                </div>
                <!-- Circle-One -->
                <div class="circle-one">
                    <span data-tootik="About" data-tootik-conf="right dark square shadow">
                        <a href="#mygoal">
                            <span class="animated-circle position-relative"></span>
                        </a>
                    </span>
                </div>
                <!-- Circle-Two -->
                <div class="circle-two">
                    <span data-tootik="Timeline" data-tootik-conf="left dark square shadow">
                        <a href="#mygurentees">
                            <span class="animated-circle position-relative"></span>
                        </a>
                    </span>
                </div>
                <!-- Circle-Three -->
                <div class="circle-three">
                    <span data-tootik="Portfolio" data-tootik-conf="top dark square shadow">
                        <a href="#portfolio">
                            <span class="animated-circle position-relative"></span>
                        </a>
                    </span>
                </div>
            </div>
        </section>
        <!-- END BANNER -->

        <!-- START SKILLS -->
        <section class="section slide2 skills" id="mygoal">
            <div class="particles-js" id="particles-js2"></div>
            <div class="container">
                <div class="row pb-5">
                    <div class="col-12 col-md-7 pl-md-0">
                        <h3 class="main-font text-uppercase">
                            <span class="text-yellow myGoal mygoal str"><?= Helper::_lang('mygoals') ?></span>
                        </h3>
                        <p class="py-2 alt-font"> <?= Helper::_lang('achive_it') ?> </p>
                    </div>
                    <div class="col-12 col-md-5 text-md-right pt-4 pt-md-0">
                        <h2 class="m-0 text-yellow main-font"><i class="fas fa-rocket"></i></h2>
                    </div>
                </div>
                <div class="row pt-md-5 skill-box">
                    <div class="col-12">

                        <div class="col-12 text-center text-md-left pl-md-0">
                            <p class="alt-font text-white mt-3"><?= Helper::_lang('goal_line_1') ?></p>
                            <h4 class="main-font text-yellow skill"><?= Helper::_lang('goal_line_2') ?></h4>
                            <p class="alt-font text-white mt-3"><?= Helper::_lang('goal_line_3') ?></p>
                        </div>
                    </div>
                </div>
                <a href="#mygurentees" class="down-arrow fas fa-chevron-down"></a>
            </div>
        </section>
        <!-- END SKILLS -->

        <!-- START TIMELINE -->
        <section class="section slide3 timeline-bg" id="mygurentees">
            <div class="particles-js" id="particles-js3"></div>
            <div class="container">
                <div class="row pb-5 heading-row">
                    <div class="col-12 col-md-7">
                        <h3 class="main-font text-uppercase">
                            <span
                                class="text-yellow text-uppercase myGuarantees mygurentees str"><?= Helper::_lang('my_guarantees') ?></span>
                        </h3>
                    </div>
                    <div class="col-12 col-md-5 text-md-right pt-4 pt-md-0">
                        <h2 class="m-0 text-yellow main-font"><i class="fas fa-handshake"></i></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="cd-horizontal-timeline loaded">
                            <div class="timeline">
                                <!-- Events-Wrapper -->
                                <div class="events-wrapper">
                                    <!-- Events -->
                                    <div class="event-notClickable"></div>
                                    <div class="events" style="width: 2200px;">
                                        <ol>
                                            <li><a href="#" data-date="16/01/2017"
                                                    class="older-event selected">&nbsp;</a></li>
                                            <li><a href="#" data-date="28/02/2017" style="left: 200px;">&nbsp;</a>
                                            </li>
                                            <li><a href="#" data-date="20/04/2017" style="left: 200px;">&nbsp;</a>
                                            </li>
                                            <li><a href="#" data-date="20/05/2017" style="left: 200px;">&nbsp;</a>
                                            </li>
                                            <li><a href="#" data-date="09/07/2017" style="left: 200px;">&nbsp;</a>
                                            </li>
                                            <li><a href="#" data-date="30/08/2017" style="left: 200px;">&nbsp;</a>
                                            </li>
                                            <li><a href="#" data-date="15/09/2017" style="left: 200px;">&nbsp;</a>
                                            </li>
                                            <li><a href="#" data-date="01/11/2017" style="left: 200px;">&nbsp;</a>
                                            </li>
                                            <li><a href="#" data-date="10/12/2017" style="left: 200px;">&nbsp;</a>
                                            </li>
                                            <li><a href="#" data-date="19/01/2018" style="left: 200px;">&nbsp;</a>
                                            </li>
                                            <li><a href="#" data-date="03/03/2018" style="left: 200px;">&nbsp;</a>
                                            </li>
                                        </ol>
                                        <span class="filling-line" aria-hidden="true"></span>
                                    </div>
                                    <!-- Events -->
                                </div>
                            </div>
                            <!-- Timeline -->
                            <div class="events-content">
                                <ol>
                                    <li class="selected" data-date="16/01/2017">
                                        <!-- Main Content Div -->
                                        <div class="col-12 pl-md-0">
                                            <div class="main-content text-uppercase">
                                                <p class="main-font"><?= Helper::_lang('my_guarantees_text_1') ?></p>
                                                <h4 class="text-yellow main-font font-weight-normal">
                                                    <?= Helper::_lang('my_guarantees_text_2') ?></h4>
                                                <p class="main-font"><?= Helper::_lang('my_guarantees_text_3') ?></p>
                                            </div>
                                        </div>
                                        <!-- Sub Content Div -->
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#mypromisses" class="down-arrow fas fa-chevron-down"></a>
            </div>
        </section>
        <!-- END TIMELINE -->

        <!-- START PORTFOLIO -->
        <section class="section slide4 portfolio-bg" id="mypromisses">
            <div class="particles-js" id="particles-js4"></div>
            <div class="container">
                <div class="row pb-5 heading-row">
                    <div class="col-12 col-md-7">
                        <h3 class="main-font text-uppercase">
                            <span class="text-yellow myPromise mypromisses str"><?= Helper::_lang('my_promise') ?></span>
                            <span> <?= Helper::_lang('my_promise_sub') ?> </span>
                        </h3>
                    </div>
                </div>
                <div class="item">
                    <div class="team-data-img">
                        <div class="portfolio-content">
                            <h5 class="text-yellow main-font mb-2 text-uppercase"><?= Helper::_lang('my_promise_text_1') ?>
                            </h5>
                            <p class="text-capitalize"> <?= Helper::_lang('my_promise_text_2') ?></p>
                        </div>
                    </div>
                </div>
                <a href="#invertmentoptions" class="down-arrow fas fa-chevron-down"></a>
            </div>
        </section>
        <!-- END PORTFOLIO -->

        <!-- START CONTACT -->
        <section class="section slide5 contact-bg" id="invertmentoptions">
            <div class="particles-js" id="particles-js5"></div>
            <div class="container">
                <div class="row pb-5">
                    <div class="col-12 col-md-7">
                        <h3 class="main-font text-uppercase">
                            <span
                                class="text-yellow text-uppercase investmentOptions invertmentoptions str"><?= Helper::_lang('investment_options') ?></span>
                            <span> <?= Helper::_lang('go_beyond') ?></span>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 px-md-0">
                        <div class="contact-btn pt-5 text-center">
                            <a href="{{ route('know-your-customer', 1) }}?ln=<?= $_GET['ln'] ?? 'en' ?>"
                                class="btn btn-medium btn-block btn-rounded btn-yellow text-capitalize">
                                <small style="margin-bottom: -22px;display: block;">I wish to donate<br></small> €1,000 - €10,000</a>
                        </div>
                    </div>
                    <div class="col-6 px-md-0">
                        <div class="contact-btn pt-5 text-center">
                            <a href="{{ route('know-your-customer', 2) }}?ln=<?= $_GET['ln'] ?? 'en' ?>"
                                class="btn btn-medium btn-block btn-rounded btn-yellow text-capitalize">
                                <small style="margin-bottom: -22px;display: block;">I wish to donate<br></small> €1M - €10M</a>
                            <p class="py-2 alt-font"><?= Helper::_lang('investment_line') ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Circle-One -->
            <div class="circle-one">
                <span data-tootik="About" data-tootik-conf="right dark square shadow">
                    <a href="#mygoal">
                        <span class="animated-circle position-relative"></span>
                    </a>
                </span>
            </div>
            <!-- Circle-Two -->
            <div class="circle-two">
                <span data-tootik="Timeline" data-tootik-conf="left dark square shadow">
                    <a href="#mygurentees">
                        <span class="animated-circle position-relative"></span>
                    </a>
                </span>
            </div>
            <!-- Circle-Three -->
            <div class="circle-three">
                <span data-tootik="Portfolio" data-tootik-conf="top dark square shadow">
                    <a href="#portfolio">
                        <span class="animated-circle position-relative"></span>
                    </a>
                </span>
            </div>
            <ul class="myfooter">
                <li><a href="<?= route('faqs') ?>">Faqs </a></li>
                <li><a href="<?= route('terms-and-conditions') ?>">Terms & Conditions</a></li>
                <li><a href="<?= route('privacy-policy') ?>">Privacy Policy </a></li>
            </ul>
            


        </section>
        <!-- END CONTACT -->
    </div>
@endsection
