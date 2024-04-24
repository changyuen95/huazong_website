@extends('layouts.app')

@section('title', '第38届全国华人文化节之大汇演/闭幕典礼 - 大马华总')


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
                    <h2>第 38 届全国华人文化节之大汇演/闭幕典礼</h2>
                </div>
                <!-- Left Content -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-one__single">
                                <div class="blog-one__image">
                                    <img src="{{ asset('assets/images/hz-bg-1.jpg') }}" alt="">
                                </div><!-- /.blog-one__image -->
                                <div class="blog-one__content">
                                    <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 0C8.68678 0 7.38642 0.258658 6.17317 0.761205C4.95991 1.26375 3.85752 2.00035 2.92893 2.92893C1.05357 4.8043 0 7.34784 0 10C0 12.6522 1.05357 15.1957 2.92893 17.0711C3.85752 17.9997 4.95991 18.7362 6.17317 19.2388C7.38642 19.7413 8.68678 20 10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C18.9464 15.1957 20 12.6522 20 10C20 8.68678 19.7413 7.38642 19.2388 6.17317C18.7362 4.95991 17.9997 3.85752 17.0711 2.92893C16.1425 2.00035 15.0401 1.26375 13.8268 0.761205C12.6136 0.258658 11.3132 0 10 0ZM14.2 14.2L9 11V5H10.5V10.2L15 12.9L14.2 14.2Z" fill="#EB1757"/>
                                            </svg>
                                            <a href="#" class="ml-2">08-10-2023 17:15</a>
                                        </li>
                                    </ul><!-- /.blog-one__meta list-unstyled -->
                                    <!-- <p style="color:black; font-size:1.2rem">
                                    华总会长丹斯里吴添泉今日宣布，华总将连同柔佛州中华总会号召和发动热心群众捐款赈灾，为柔州水灾献温情
                                    <br><br>
                                    除了本身内部及各州华堂之外，华总和柔华总将全面配合，号召热心商家、善心人士或团体捐款，为深受水深火热的柔州灾区群众加油打气，包括协助不幸的灾黎重建家园等在内
                                    <br><br>
                                    柔州这次发生的严重大水灾，多个县区被涉及，影响百业和民生，疏散灾黎人数也一度逼近5万人，尽管目前雨量和气候转佳，一些灾区情况好转，部份灾黎回返家园，但面对饱受洪水破坏的家园和满目疮痍，极需社会关怀与支援。
                                    <br><br>
                                    除了政府和官方的拨款与支援之外，身为民间团体的华总和柔华总，也毅然并再一次向过去般，投入民间赈灾行列，希望能够通过社会群众的众筹和慈爱力量，尽所能的为灾黎们献出一份力。 或附加的收入来源。零工业不仅有助于国家的多元化发展，同时还能为国人提供新的收入和就业机会。
                                    <br><br> -->

                                <table style="margin:5px;color:black" class="table table-responsive">

                                <tr><td colspan="2"> <p style="text-align:center"><b>第 38 届全国华人文化节之大汇演/闭幕典礼</b><br><b>The 38th National Chinese Cultural Festival Show Closing Ceremony</b></p></tr>

                                <tr>
                                    <td class="width:30%"><p>日期 Date：</p></td>
                                    <td class="width:70%"><p><b>08/10/2023 (Sunday)</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p>地点 Venue：</p></td>
                                    <td class="width:70%"><p><b>Sabah International Convention Centre(SICC),Level 2</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p>5:00pm</p></td>
                                    <td class="width:70%"><p> <b>Arrival of working committee<br> 筹委会及理事会成员抵步</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p>5:30pm</p></td>
                                    <td class="width:70%"><p> <b>Arrival of invited guests <br>受邀贵宾莅临</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p>6:00pm</p></td>
                                    <td class="width:70%"><p> <b>The 38th National Chinese Cultural Festival Show (Part 1)<br>《第 38 届全国华人文化节》大汇演 （Part 1）</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p>7:50pm</p></td>
                                    <td class="width:70%"><p> <b>Arrival of Special Guest : The Right Honourable Chief Minister of Sabah,
YAB Datuk Seri Panglima Haji Hajiji Bin Haji Noor<br>特别嘉宾 –沙巴州首席部长, 拿督斯里邦里玛哈芝芝·诺蒞臨</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p>7:55pm</p></td>
                                    <td class="width:70%"><p> <b>Arrival of Special Guest : Ambassador Extraordinary and Plenipotentiary of the People's Republic
of China to Malaysia，His Excellency Ambassador Ouyang Yujing<br>特别嘉宾 –中华人民共和国驻马来西亚特命全权大使，欧阳玉靖阁下蒞臨</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p>8:00pm</p></td>
                                    <td class="width:70%"><p> <b>Arrival of Guest of Honour : Prime Minister of Malaysia，YAB Dato’ Seri Anwar Bin Ibrahim<br>主礼嘉宾 – 马来西亚首相，拿督斯里安华·伊布拉欣蒞臨</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p></p></td>
                                    <td class="width:70%"><p> <b>National & State Anthem & HuaZong song <br> 奏国歌，州歌，华总会歌</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p></p></td>
                                    <td class="width:70%"><p> <b>Speech delivered by Datuk Susan Wong,
Organising Chairlady of 38th National Chinese Cultural Festival<br>第三十八届全国华人文化节筹委会主席拿督黄小娟致词</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p></p></td>
                                    <td class="width:70%"><p> <b>Speech delivered by Tan Sri Datuk Seri Panglima (Dr) T.C.Goh, JP
President of FCAS and Huazong Malaysia<br>沙巴中华大会堂兼马来西亚华总总会长丹斯里拿督斯里邦里玛吴添泉局绅博士致词</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p></p></td>
                                    <td class="width:70%"><p> <b>Speech delivered by Special Guest : Ambassador Extraordinary and Plenipotentiary of the
People's Republic of China to Malaysia，His Excellency Ambassador Ouyang Yujing<br>特别嘉宾 –中华人民共和国驻马来西亚特命全权大使，欧阳玉靖阁下致词</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p></p></td>
                                    <td class="width:70%"><p> <b>Speech delivered by Guest of Honour : Prime Minister of Malaysia，YAB Dato’ Seri Anwar <br>Ibrahim 主礼嘉宾– 马来西亚首相，拿督斯里安华·伊布拉欣致词</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p></p></td>
                                    <td class="width:70%"><p> <b>Speech delivered by Tan Sri Datuk Seri Panglima (Dr) T.C.Goh, JP
President of FCAS and Huazong Malaysia<br>沙巴中华大会堂兼马来西亚华总总会长丹斯里拿督斯里邦里玛吴添泉局绅博士致词</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p>08:40pm</p></td>
                                    <td class="width:70%"><p> <b>The 38th National Chinese Cultural Festival Show (Part 2)<br>
《第 38 届全国华人文化节》大汇演 (Part 2)</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p>10:00pm</p></td>
                                    <td class="width:70%"><p> <b>Handover flag ceremony<br> 移交会旗仪式</b></p></td>
                                </tr>

                                <tr>
                                    <td class="width:30%"><p></p></td>
                                    <td class="width:70%"><p> <b>Good night <br> 晚安！</b></p></td>
                                </tr>



                                </table>

                                </p>
                                </div><!-- /.blog-one__content -->
                            </div><!-- /.blog-one__single -->

                        </div><!-- /.col-lg-12 -->


                        <div class="col-lg-12">
                            <hr>
                            <!-- 类别 & 标签 -->
                            <!-- <div class="row mb-5">
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
                            </div> -->

                            <!-- <div class="d-flex flex-column mb-5">
                                <button class="btn-thm">分享</button>
                            </div> -->




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
                                <!-- <li><a href="#">沙巴中华大会堂</a></li>
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
                                <li><a href="#">玻璃市州华人大会堂</a></li> -->
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
                                            12-7-2023 14:23
                                        </a>
                                        <h3><a href="/event-detail/202307121423" style="font-size: 14px; line-height: 0.1px;">2023年东盟美食节将于9月19日至10月10日在中国上海国家会展中心盛大举行</a></h3>
                                    </div><!-- /.sidebar__post-content -->
                                </div><!-- /.sidebar__post-single -->

                            </div><!-- /.sidebar__post -->
                        </div><!-- /.sidebar__single -->
                        <!-- <div class="sidebar__single">
                            <h3 class="sidebar__title">热门标签</h3>
                            <div class="sidebar__tags">
                                <a href="#">中华文化</a>
                                <a href="#">图腾</a>
                                <a href="#">华总</a>
                                <a href="#">华总大厦</a>
                                <a href="#">马来西亚产业大奖</a>
                                <a href="#">风水</a>
                                <a href="#">隆雪华堂</a>
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

