@extends('layouts.app')

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
                    <h2>中国全国政协港澳台侨委会莅临访问华总</h2>
                </div>
                <!-- Left Content -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-one__single">
                                <div class="blog-one__image">
                                    <img src="{{ asset('assets/images/event-detail/event-img1.png') }}" alt="">
                                </div><!-- /.blog-one__image -->
                                <div class="blog-one__content">
                                    <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 0C8.68678 0 7.38642 0.258658 6.17317 0.761205C4.95991 1.26375 3.85752 2.00035 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C3.85752 17.9997 4.95991 18.7362 6.17317 19.2388C7.38642 19.7413 8.68678 20 10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 8.68678 19.7413 7.38642 19.2388 6.17317C18.7362 4.95991 17.9997 3.85752 17.0711 2.92893C16.1425 2.00035 15.0401 1.26375 13.8268 0.761205C12.6136 0.258658 11.3132 0 10 0ZM14.2 14.2L9 11V5H10.5V10.2L15 12.9L14.2 14.2Z" fill="#EB1757"/>
                                            </svg>
                                            <a href="#" class="ml-2">10-7-2023 14:23</a>
                                        </li>
                                    </ul><!-- /.blog-one__meta list-unstyled -->
                                    <p>
                                        #华总总会长丹斯里吴添泉 在华总大厦接待中国全国政协委员、港澳台侨委员会驻会副主任王伟一行人到访，在交流会上发表谈话在此行程中中国全国政协委员、
                                        港澳台侨委员会驻会副主任王伟一行人也参观了 #大马华人博物馆 ，对此王伟表示 “尤其是马来西亚华人博物馆，我参观了之后发觉到展示的资料非常齐全，内容丰富，
                                        让我感到很震撼，很完整的记录及展现了马来西亚华人从南来到参与大马各方面建设发展的珍贵历史！”在交流会上致词时，王伟赞扬了华总大厦的和马来西亚华人博物馆的成立。
                                        对中国海外和世界华人社会来说，是非常不容易、也是值得骄傲的事
                                    </p>
                                </div><!-- /.blog-one__content -->
                            </div><!-- /.blog-one__single -->

                        </div><!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                            <div class="blog-one__single">
                                <div class="blog-one__image">
                                    <img src="{{ asset('assets/images/event-detail/event-img2.png') }}" alt="">
                                </div><!-- /.blog-one__image -->
                            </div><!-- /.blog-one__single -->
                        </div><!-- /.col-lg-12 -->

                        <div class="col-lg-12">
                            <div class="blog-one__single">
                                <div class="blog-one__image">
                                    <img src="{{ asset('assets/images/event-detail/event-img3.png') }}" alt="">
                                </div><!-- /.blog-one__image -->
                            </div><!-- /.blog-one__single -->
                        </div><!-- /.col-lg-12 -->
                        
                        <div class="col-lg-12">
                            <hr>
                            <!-- 类别 & 标签 -->
                            <div class="row mb-5">
                                <div class="col-lg-4">
                                    <div class="category-title">类别</div>
                                    <div>
                                        <button class="btn-outline-thm px-3 mr-2 mb-2" style="font-size: 15px;">马来西亚中华大会堂总会</button>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="category-title">标签</div>
                                    <div>
                                        <button class="btn-outline-thm px-3 mr-2 mb-2" style="font-size: 15px;">中华文化</button>
                                        <button class="btn-outline-thm px-3 mr-2 mb-2" style="font-size: 15px;">图腾</button>
                                        <button class="btn-outline-thm px-3 mr-2 mb-2" style="font-size: 15px;">华总</button>
                                        <button class="btn-outline-thm px-3 mr-2 mb-2" style="font-size: 15px;">华总大厦</button>
                                        <button class="btn-outline-thm px-3 mr-2 mb-2" style="font-size: 15px;">马来西亚产业大奖</button>
                                        <button class="btn-outline-thm px-3 mr-2 mb-2" style="font-size: 15px;">风水</button>
                                        <button class="btn-outline-thm px-3 mr-2 mb-2" style="font-size: 15px;">隆雪华堂</button>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-column mb-5">
                                <button class="btn-thm">分享</button>
                            </div>
                            <hr>

                            <div class="d-flex">
                                <div class="d-flex flex-fill">
                                    <div class="p-2">
                                        <a href="#">
                                            <svg width="25" height="86" viewBox="0 0 25 86" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="25" height="86" fill="url(#pattern0)"/>
                                                <defs>
                                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                        <use xlink:href="#image0_7_1041" transform="matrix(0.04 0 0 0.0125345 0 0.224242)"/>
                                                    </pattern>
                                                    <image id="image0_7_1041" width="24" height="44" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAsBAMAAACNsmVwAAAAJFBMVEUAAADl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eUr8Vo4AAAAC3RSTlMABjDtsK/qDCS8u2HozwsAAABASURBVCjPY0AARgEkjmggkkS0BZLEZgUkCaNhIcG+GkmiDCqByWGfjaSMQQRZitF7SEslIUttQ5HKQJZyREkuAAJpH0rXDOkxAAAAAElFTkSuQmCC"/>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="align-self-center">
                                        <div class="px-2 text-left">上一个活动</div>
                                        <div class="px-2 font-weight-bold" style="color: #000000;">上海市归国华侨联合会访问团莅临访问华总</div>
                                    </div>
                                </div>
                                
                                <div class="d-flex flex-fill">
                                    <div class="align-self-center">
                                        <div class="px-2 text-right">下一个活动</div>
                                        <div class="px-2 font-weight-bold" style="color: #000000;">接待张瑞海领导的中国北京百悟集团访问团</div>
                                    </div>
                                    <div class="p-2">
                                        <a href="#">
                                            <svg width="26" height="86" viewBox="0 0 26 86" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="25" height="86" transform="matrix(-1 0 0 1 25.9805 0)" fill="url(#pattern0)"/>
                                                <defs>
                                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                        <use xlink:href="#image0_7_1051" transform="matrix(0.04 0 0 0.0125345 0 0.224242)"/>
                                                    </pattern>
                                                    <image id="image0_7_1051" width="24" height="44" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAsBAMAAACNsmVwAAAAJFBMVEUAAADl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eXl5eUr8Vo4AAAAC3RSTlMABjDtsK/qDCS8u2HozwsAAABASURBVCjPY0AARgEkjmggkkS0BZLEZgUkCaNhIcG+GkmiDCqByWGfjaSMQQRZitF7SEslIUttQ5HKQJZyREkuAAJpH0rXDOkxAAAAAElFTkSuQmCC"/>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

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
                                <li><a href="#">沙巴中华大会堂</a></li>
                                <li><a href="#">砂拉越华人社团联合总会</a></li>
                                <li><a href="#">柔佛州中华总会</a></li>
                                <li><a href="#">彭亨华人社团联合会</a></li>
                                <li><a href="#">登嘉楼中华大会堂</a></li>
                                <li><a href="#">吉兰丹中华大会堂</a></li>
                                <li><a href="#">槟州华人大会堂</a></li>
                                <li><a href="#">霹雳中华大会堂</a></li>
                                <li><a href="#">吉隆坡暨雪兰莪中华大会堂</a></li>
                                <li><a href="#">森美兰中华大会堂</a></li>
                                <li><a href="#">马六甲中华大会堂</a></li>
                                <li><a href="#">吉打州华人大会堂</a></li>
                                <li><a href="#">玻璃市州华人大会堂</a></li>
                            </ul><!-- /.list-unstyled sidebar__cat-list -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h3 class="sidebar__title">最新活动</h3>
                            <div class="sidebar__post">
                                <div class="sidebar__post-single">
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('assets/images/event-detail/sub-event-img1.png') }}" alt="">
                                    </div><!-- /.sidebar__post-image -->
                                    <div class="sidebar__post-content">
                                        <a class="sidebar__post-date" style="color: #EB1757;" href="#">
                                            10-7-2023 14:23
                                        </a>
                                        <h3><a href="#" style="font-size: 14px; line-height: 0.1px;">2023年东盟美食节将于9月19日至10月10日在中国上海国家会展中心盛大举行</a></h3>
                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post-single -->
                                <div class="sidebar__post-single">
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('assets/images/event-detail/sub-event-img2.png') }}" alt="">
                                    </div><!-- /.sidebar__post-image -->
                                    <div class="sidebar__post-content">
                                        <a class="sidebar__post-date" style="color: #EB1757;" href="#">
                                            10-7-2023 14:23
                                        </a>
                                        <h3><a href="#" style="font-size: 14px; line-height: 0.1px;">2023年东盟美食节将于9月19日至10月10日在中国上海国家会展中心盛大举行</a></h3>
                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post-single -->
                                <div class="sidebar__post-single">
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('assets/images/event-detail/sub-event-img3.png') }}" alt="">
                                    </div><!-- /.sidebar__post-image -->
                                    <div class="sidebar__post-content">
                                        <a class="sidebar__post-date" style="color: #EB1757;" href="#">
                                            10-7-2023 14:23
                                        </a>
                                        <h3><a href="#" style="font-size: 14px; line-height: 0.1px;">2023年东盟美食节将于9月19日至10月10日在中国上海国家会展中心盛大举行</a></h3>
                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post-single -->
                            </div><!-- /.sidebar__post -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h3 class="sidebar__title">热门标签</h3>
                            <div class="sidebar__tags">
                                <a href="#">中华文化</a>
                                <a href="#">图腾</a>
                                <a href="#">华总</a>
                                <a href="#">华总大厦</a>
                                <a href="#">马来西亚产业大奖</a>
                                <a href="#">风水</a>
                                <a href="#">隆雪华堂</a>
                            </div><!-- /.sidebar__tags -->
                        </div><!-- /.sidebar__single -->
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

