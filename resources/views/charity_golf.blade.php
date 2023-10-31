@extends('layouts.app')

@section('content')
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- /.preloader -->
<div class="page-wrapper"  style="background-color: #ffdcc4">

    <section>
        <div class="mt-5 row" style="background-color: #40544c; height: 450px;">
            <div class="col-8 text-center my-auto">
                <span class="text-white" style="font-size: 45px">EDUCATION FUND CHARITY GOLF</span><br/><br/><br/>
                <span style="font-size: 65px; color:#ffdcc4"><b>华总教育基金活动</b></span><br/><br/><br/>
                <span style="font-size: 85px; color:#ff8a68"><b>慈善高尔夫球</b></span>
            </div>
            <div class="col-4 "style="margin-top: -30px">
                <img src="/assets/images/charity-golf/golf.png" width="80%">
            </div>
        </div>
    </section>

    <section>
        <div class="mt-5 row">
            <div class="col-4">
                <img src="/assets/images/charity-golf/golf-guy.png" width="175%" style="margin-top: -100px;">
            </div>
            <div class="col-1">

            </div>
            <div class="col-7">
                <div class="container" style="padding-left:0px;padding:right:0px">
                    <div class="content-box text-left mb-3" style="padding-right: 150px">
                        <span class="h3" style="color: #40544c; line-height:40px"><b>与我们一起欢庆马来西亚与南非外交关系建立30周年的慈善高尔夫球赛中, 为华总教育基金贡献力量, 为慈善尽一份心意</b></h4>
                    </div>
                    <div style="background-color: rgba(255,243,234,0.5); border-radius: 30px" class="py-3">
                        <div class="text-left pl-5 py-3" style="background-color: #fff3ea; border-radius: 30px">
                            <ul style="list-style-type: none; margin:0px">
                                <li><span class="h3" style="color: #40544c; line-height:50px"><b>日期 》15 . 10 . 2023 ( 星期三 )</b></h4></li>
                                <li><span class="h3" style="color: #40544c; line-height:50px;"><b>地点 》<a href="https://maps.app.goo.gl/eVLcCjw2zgEr7zs96" style="color: #40544c;" target="_blank">Tropicana Golf & Country Resort</a></b></h4></li>
                                <li><span class="h3" style="color: #40544c; line-height:50px"><b>时间 》下午12时</b></h4></li>
                            </ul>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-7">
                            <div style="background-color: rgba(255,243,234,0.5); border-radius: 15px" class="py-2">
                                <div class="text-left pl-5 py-3" style="background-color: #fff3ea; border-radius: 15px">
                                    <ul style="list-style-type: none; margin:0px">
                                        <span class="h3" style="color: #40544c; line-height:50px"><b>报名请联系：<a style="color: #40544c;" href="tel:+60124411067">+60124411067</b></a></span>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-5 mt-3">
                            <div class="row justify-content-end mr-3">
                                <span class="h4 mb-3" style="color: black;"><b>支持单位：</b></a></span>
                            </div>
                            <div class="row justify-content-end mr-3">
                                <img src="/assets/images/charity-golf/south-africa-logo.png" width="45%">

                                <img src="/assets/images/charity-golf/malaysia-southafrica-logo.png" width="45%" height="45%">
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row justify-content-end mr-3">
                        <span class="h4 mb-3" style="color: black;"><b>感谢赞助：</b></a></span>
                    </div>
                    <div class="row justify-content-start">
                        <img src="/assets/images/charity-golf/sponsor-logos.png" width="95%">
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- 

    <section class="exhibition-one" style="background: url(/assets/images/charity-golf/decoration.png) bottom;background-repeat:no-repeat;background-size:1200px">

    </section><!-- /.exhibition-one --> --}}



</div><!-- /.page-wrapper -->
@include('layouts.footer')

<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- /.search-popup__inner -->
</div><!-- /.search-popup -->

<div class="side-content__block">
    <div class="side-content__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-content__block-overlay -->
    <div class="side-content__block-inner ">
        <a href="index.html">
            <img src="assets/images/logo-1-1.png" alt="" width="143">
        </a>
        <div class="side-content__block-about">
            <h3 class="side-content__block__title">About Us</h3><!-- /.side-content__block__title -->
            <p class="side-content__block-about__text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts off the system and </p><!-- /.side-content__block-about__text -->
            <a href="#" class="thm-btn side-content__block-about__btn">Get Consultation</a>
        </div><!-- /.side-content__block-about -->
        <hr class="side-content__block-line" />
        <div class="side-content__block-contact">
            <h3 class="side-content__block__title">Contact Us</h3><!-- /.side-content__block__title -->
            <ul class="side-content__block-contact__list">
                <li class="side-content__block-contact__list-item">
                    <i class="fa fa-map-marker"></i>
                    Rock St 12, Newyork City, USA
                </li><!-- /.side-content__block-contact__list-item -->
                <li class="side-content__block-contact__list-item">
                    <i class="fa fa-phone"></i>
                    <a href="tel:526-236-895-4732">(526) 236-895-4732</a>
                </li><!-- /.side-content__block-contact__list-item -->
                <li class="side-content__block-contact__list-item">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:example@mail.com">example@mail.com</a>
                </li><!-- /.side-content__block-contact__list-item -->
                <li class="side-content__block-contact__list-item">
                    <i class="fa fa-clock"></i>
                    Week Days: 09.00 to 18.00 Sunday: Closed
                </li><!-- /.side-content__block-contact__list-item -->
            </ul><!-- /.side-content__block-contact__list -->
        </div><!-- /.side-content__block-contact -->
        <p class="side-content__block__text site-footer__copy-text"><a href="#">Muzex</a> <i class="fa fa-copyright"></i> 2020 All Right Reserved</p>
    </div><!-- /.side-content__block-inner -->
</div><!-- /.side-content__block -->

<div class="side-menu__block">

    <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
        <!-- /.fa fa-close --></a>

    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner ">

        <a href="index.html" class="side-menu__logo"><img src="assets/images/logo-light-1-1.png" alt="" width="143"></a>
        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>
        <p class="side-menu__block__copy">(c) 2020 <a href="#">Muzex</a> - All rights reserved.</p>
        <div class="side-menu__social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-google-plus"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div><!-- /.side-menu__block-inner -->
</div><!-- /.side-menu__block -->
@endsection