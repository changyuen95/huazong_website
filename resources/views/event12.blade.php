@extends('layouts.app')

@section('title', '华总-Carlsberg助学金')


@section('content')
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- /.preloader -->

<div class="page-wrapper">



    <!-- <section class="page-header" style="background-image: url(assets/images/event-detail/bg.png); background-repeat: no-repeat;">
        <div class="container" style="padding-left:0px;padding:right:0px">
            <h2>中国全国政协港澳台侨委会莅临访问华总</h2>
        </div>
    </section> -->

    <section class="blog-one blog-standard-page">
        <div class="container" style="padding-left:0px;padding:right:0px">
            <div class="row">
                <div class="px-3">
                    <h2>2024 华总-Carlsberg助学金 颁奖典礼</h2>
                </div>
                <!-- Left Content -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-one__single">
                                <div class="blog-one__image">
                                    <img src="{{ asset('assets/images/event/edu1.jpg') }}" alt="">
                                </div><!-- /.blog-one__image -->
                                <div class="blog-one__content">
                                    <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 0C8.68678 0 7.38642 0.258658 6.17317 0.761205C4.95991 1.26375 3.85752 2.00035 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C3.85752 17.9997 4.95991 18.7362 6.17317 19.2388C7.38642 19.7413 8.68678 20 10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 8.68678 19.7413 7.38642 19.2388 6.17317C18.7362 4.95991 17.9997 3.85752 17.0711 2.92893C16.1425 2.00035 15.0401 1.26375 13.8268 0.761205C12.6136 0.258658 11.3132 0 10 0ZM14.2 14.2L9 11V5H10.5V10.2L15 12.9L14.2 14.2Z" fill="#EB1757"/>
                                            </svg>
                                            <a href="#" class="ml-2">21-04-2024 13:31</a>
                                        </li>
                                    </ul><p style="color:black; font-size:1.2rem">
                                        华总总会长兼华总教育基金委员会主席的吴添泉披露，这项为协助贫困家庭子女深造而一次性放发的每人3000令吉助学金计划，经过严谨慎重审核后，全体受惠名单经获核准，在本月21日（星期日）举行颁发仪式。今年华总- Carlsberg 教育基金委员会共拨出100万令吉落实这项计划。
                                        <img style="margin-top:20px;height: 100%;width: 100%;" src="{{ asset('assets/images/event/edu3.jpg') }}" style="height:100%;width:100%" alt="">
                                        一次性免还的助学金计划是在2021年时首次推出，今年是第2次展开，每次各拨出100万令吉，供国内333名学生受惠，每人各获3000令吉。今年这项计划继续获得热烈反应，之前各州中华大会堂也各自召开遴选会议并选出初选人数，并提呈华总- Carlsberg 教育基金委员会供最后审核。。<br><br>
                                        <img style="margin-top:20px;height: 100%;width: 100%;" src="{{ asset('assets/images/event/edu2.jpg') }}" style="height:100%;width:100%" alt="">


                                </p>
                                </div><!-- /.blog-one__content -->
                            </div><!-- /.blog-one__single -->

                        </div><!-- /.col-lg-12 -->


                        <div class="col-lg-12">
                            <hr>





                        </div>
                    </div><!-- /.row -->
                </div><!-- /.col-lg-8 -->

                <!-- Right Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar__single">
                            <h3 class="sidebar__title">搜寻</h3>
                            <form action="{{ url('/') }}/recent-activity?" class="sidebar__search" method="GET">
                                <input type="text" name="search" placeholder="搜寻">
                                <button type="submit"><i class="muzex-icon-search"></i></button>
                            </form>
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h3 class="sidebar__title">类别</h3>
                            <ul class="list-unstyled sidebar__cat-list">
                                <li><a href="#">马来西亚中华大会堂总会</a></li>

                            </ul><!-- /.list-unstyled sidebar__cat-list -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h3 class="sidebar__title">最新活动</h3>
                            <div class="sidebar__post">
                                <div class="sidebar__post-single">
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('assets/images/event/tb10.jpg') }}" alt="">
                                    </div><!-- /.sidebar__post-image -->
                                    <div class="sidebar__post-content">
                                        <a class="sidebar__post-date" style="color: #EB1757;" href="#">
                                            19-02-2024 10:00
                                        </a>
                                        <h3><a href="/event-detail/2024华总新春大团拜" style="font-size: 14px; line-height: 0.1px;">2024华总新春大团拜</a></h3>
                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post-single -->

                            </div><!-- /.sidebar__post -->
                        </div><!-- /.sidebar__single -->

                            </div>
                        </div> -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one blog-grid-page -->

    @include('layouts.footer')
</div><!-- /.page-wrapper -->

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

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
@endsection

