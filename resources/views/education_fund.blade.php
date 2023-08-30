@extends('layouts.app')

@section('content')
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div><!-- /.preloader -->
<div class="page-wrapper">

    <section class="faq-one pt-3">
        <div class="container" style="padding-left:0px;padding:right:0px">
            <div class="faq-one__top">
                <div class="block-title">
                    <h3>华总教育基金简介</h3>
                </div><!-- /.block-title -->
                <p>教育是立国和强国之本，也是百年树人的千秋大业。马来西亚中华大会堂总会（华总）了解到教育对国家建设的重要性，毅然成立了数项教育基金，为国内清寒家庭的莘莘学子提供免利息的贷学金，协助他们完成大学的学业。</p>
                <p class="my-3">华总自1998年开始陆续设立了以下三项教育基金，为国内清寒学子提供免利息贷学金：</p>
                <ol type="1">
                    <li>华总-Carlsberg教育基金</li>
                    <li>华总-吉隆坡广东义山教育基金</li>
                    <li>华总-Astro教育基金</li>
                </ol>
                <p class="my-3">截至1.1.2023，华总教育基金总共发放了总额RM9,859,000（马币九百八十五万九千令吉）的免息贷学金，受惠学生共1,077人。</p>
                <p class="my-3">此外，华总也在2020年当国家经济受到新冠疫情的重大打击时，通过华总—Carlsberg教育基金发出总值RM1,000,000（马币一百万令吉）的免还助学金于国内的贫寒大专生，协助他们度过经济难关。共有333名大专生在这项助学金计划下受惠，每人获取RM3,000款额。</p>
            </div><!-- /.faq-one__top -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <!-- 华总贷学金优惠 -->
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>华总贷学金优惠</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        <ul>
                                            <li>免利息贷学金</li>
                                            <li>每位成功申请者每年可获得RM8,000 (马币八千令吉)，至到课程完毕为止</li>
                                        </ul>
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        
                        <!-- 申请资格 -->
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>申请资格</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        <ul>
                                            <li>年龄18或以上, 获准在大学或大专院校就读的马来西亚公民申请</li>
                                            <li>最低申请资格为STPM/高中统考文凭/大专Advance Diploma证书</li>
                                        </ul>
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        
                        <!-- 发放贷学金之标准 -->
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>发放贷学金之标准</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        <ul>
                                            <li>申请者的家庭经济状况</li>
                                            <li>申请者的学业成绩</li>
                                            <li>申请者就读的大专院校/修读的课程</li>
                                        </ul>
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="accrodion-grp" data-grp-name="faq-two-accrodion">
                        <!-- 偿还贷款 -->
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>偿还贷款</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        <ul>
                                            <li>申请者在完成课程的6个月之后必须开始偿还贷款</li>
                                            <li>摊还期最长为期5年, 每月偿还数额最低为RM300, 或根据合约中所注明的数额为准, 直至贷款额全数还完为止</li>
                                        </ul>
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <!-- 申请方式 -->
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>申请方式</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        <ul>
                                            <li>申请者可通过华总网站(http://www.dama-huazong.com)下载有关的申请表格</li>
                                            <li>填妥后的申请表格(2份)连同护照型近照一张, 所需的学业成绩单, 入学或在学证件副本(须经校方核证)呈交各州中华大会堂盖章推荐</li>
                                            <li>所有申请表格必须由各州的中华大会堂盖章推荐方为有效</li>
                                        </ul>
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <!-- 签约 -->
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>签约</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        <ul>
                                            <li>申请者必须由2名担保人做担保, 与华总教育基金签署一份贷款合约</li>
                                            <li>担保人不能包括申请者的双亲</li>
                                            <li>担保人必须有工作及每月收入证明</li>
                                        </ul>
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row" style="margin-top: 25px;">
                <div class="col-lg-12">
                    <h5 class="mb-2">咨询：《华总教育总基金委员会》</h5>
                    <table>
                        <tbody>
                            <tr>
                                <td class="align-top text-right" style="width: 10%;">地址:</td>
                                <td class="px-3">
                                    The Federation of Chinese Associations Malaysia (Huazong) <br>
                                    Wisma Huazong, 9th Floor, Lot 15285, 0.7KM Lebuhraya Sungai Besi, <br>
                                    43300 Seri Kembangan,  Selangor.
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">网址:</td>
                                <td class="px-3"><a href="#">www.dama-huazong.com</a></td>
                            </tr>
                            <tr>
                                <td class="text-right">Email:</td>
                                <td class="px-3">secretariat@dama-huazong.com</td>
                            </tr>
                            <tr>
                                <td class="text-right">电话:</td>
                                <td class="px-3">03-8939 0861, 011-1053 4110</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.faq-one -->

    
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
@endsection