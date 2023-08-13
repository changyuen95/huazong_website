@extends('layouts.app')

@section('content')
<!-- Banner Section -->
<section class="banner-section">
    <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel" data-options='{"loop": true, "items": 1, "margin": 0, "dots": false, "nav": true, "animateOut": &quot;fadeOut&quot;, "animateIn": &quot;fadeIn&quot;, "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 6000, "autoplayHoverPause": false}'>
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer lazy-image" style="background-image: url('assets/images/slide1.jpg');"></div>

            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="content-box text-center">
                    <!-- <h3>象征华人文化火种无处不在</h3> -->
                    <h2>完成“天涯海角”创举 文化火炬9月登神山</h2>
                    <!-- <h2>随着完成了仙本那马达京岛“海底火炬礼”，以及昨午在古达灯火楼“天涯海角”火炬行创举后，第38届全国华人文化节火炬队伍将在9月把文化火炬，带上东南亚第一顶峰的沙巴神山而“再创高峰”！</h2> -->
                    <div class="btn-box"><a href="/comming_soon" class="thm-btn btn-style-one">查看更多</a></div>
                </div>
            </div>
        </div>

        <!-- Slide Item  -->
        <!-- <div class="slide-item">
            <div class="image-layer lazy-image" style="background-image: url('assets/images/main-slider/2.jpg');"></div>

            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="content-box text-center">
                    <h3></h3>
                    <h2>华总启用全新网站资讯  统称大马华总</h2>
                    <div class="btn-box"><a href="https://www.facebook.com/huazongmy" class="thm-btn btn-style-one">Learn
                            More</a></div>
                </div>
            </div>
        </div> -->

        <!-- Slide Item -->
        <!-- <div class="slide-item">
            <div class="image-layer lazy-image" style="background-image: url('assets/images/main-slider/3.jpg');"></div>

            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="content-box text-center">
                    <h3>Opening On Sat. Oct 20, 2019</h3>
                    <h2>World’s Leading Museum of History <br> Over 2.3 k Collection</h2>
                    <div class="btn-box"><a href="#" class="thm-btn btn-style-one">Learn
                            More</a></div>
                </div>
            </div>
        </div> -->

    </div>
</section>
<!--End Banner Section -->

<div class="about-cta__wrapper" style="margin-top:100px">
    <!--  -->
    <section class="cta-two">
        <div class="container" style="padding-left:0px;padding:right:0px">
            <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                <div class="row no-gutters">
                    <div class="col-lg-3">
                        <div class="cta-two__box">
                            <div class="cta-two__icon">
                            <img src="/assets/images/home-huazong-icon.png">
                            </div><!-- /.cta-two__icon -->
                            <h3><b>华总简介</b></h3>
                            
                            <a href="/comming_soon" class="thm-btn">了解更多</a><!-- /.thm-btn -->
                        </div><!-- /.cta-two__box -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        <div class="cta-two__box">
                            <div class="cta-two__icon">
                                <img src="/assets/images/home-huazong-icon.png">
                            </div><!-- /.cta-two__icon -->
                            <h3><b>华总妇女部</b></h3>
                            
                            <a href="/comming_soon" class="thm-btn">了解更多</a><!-- /.thm-btn -->
                        </div><!-- /.cta-two__box -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3">
                        <div class="cta-two__box">
                            <div class="cta-two__icon">
                            <img src="/assets/images/home-huazong-icon.png">
                            </div><!-- /.cta-two__icon -->
                            <h3><b>华总青</b></h3>
                            <a href="/comming_soon" class="thm-btn">了解更多</a><!-- /.thm-btn -->
                        </div><!-- /.cta-two__box -->
                    </div>
                    <div class="col-lg-3">
                        <div class="cta-two__box">
                            <div class="cta-two__icon">
                                <img src="/assets/images/huatang.png">
                            </div><!-- /.cta-two__icon -->
                            <h3><b>各州华堂</b></h3>
                            
                            <a href="/comming_soon" class="thm-btn">了解更多</a><!-- /.thm-btn -->
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </section><!-- /.cta-two -->


    <!--  簡介 -->
    <section class="about-one">
        <div class="container" style="padding-left:0px;padding:right:0px">
            <div class="block-title">
                <img src="/assets/images/horizontal-line.png">
                <h3 style="font-family: 'Microsoft YaHei', '微软雅黑', 'PingFang SC', 'Helvetica Neue', Arial, sans-serif;">华总简介</h3>
            </div><!-- /.block-title -->

            <div class="row">
                <div class="col-lg-4">
                    <p class="about-one__highlighted-text" style="font-size:16px;color:black;font-weight:30px">
                        成立于 1991 年的马来西亚中华大会堂总会(简称华总)是由马来西亚 15 华团,其中包括 13 州的中华大会堂或华团总会(即州内的最高华团领导机构)所组成的一个总机构。
                    </p><!-- /.about-one__highlighted-text -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <p>
                        华总的前身为马來西亞中华大会堂联合会(简称堂联),1997年易名华总,堂联筹组于 1982年9月, 由雪兰莪中华大会堂发起,并获得各州华团领导 机构的响应;
                        随后在1983年2月即向社团注冊局申请注册。
                        但是由于客观因素的影响,堂联的注冊历经8年的等待、争取,始于1991年10月17日 获准, 並于同年 12 月 13 日举行第一届全国代表大会,正式宣告成立
                    </p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <p>华总的成立是华人社会期盼已久的成果,是华社共同意愿的实现。 当前,马来西亚注册的华团超过一万多个,其中大部分为地缘、血缘、业缘及文教团体,这些团体也是各州华团的直属会员,也就是华总的间接会 员。换言之, 华总是马来西亚的华团领导机构, 专注于华社 的文化、教育、经济、社会及民生课题。</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <div class="row justify-content-end">
                <div class="col-lg-8">
                    <div class="about-one__feature">
                        <h3>宗旨</h3>
                        <!-- <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.
                            Override the digital divide with additiclick throughs Nanotechnology immersion.</p> -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-4">
                                <ul class="list-unstyled about-one__feature-list mt-0">
                                    <li>促进我国各民族亲善与团结。</li>
                                    <li>商讨与处理与会员有关的问题。</li>
                                    <li>针对影响会员的政策或措施提出意见。</li>
                                    <li>在符合联邦宪法的原则下，推动和参与文教、福利、社会及经济工作。</li>
                                    <li>联合与本会宗旨相同的社团，以达致上述日标。</li>
                                    <li>华总及各州中华大会堂作为综合性组织，其宗旨涵盖社、经、文教各领域，而其他华团属会则是依据主要会务宗旨分类为地缘性、血缘性、业缘性、学缘性、文化、教育、青年、 联谊、慈善、体育、宗教等组织。</li>
                                </ul><!-- /.list-unstyled -->
                            </div><!-- /.col-lg-5 -->
                        </div><!-- /.row -->
                    </div><!-- /.about-one__feature -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->


    <!--  -->
    <section class="exhibition-one" style="background: url(/assets/images/home-bottom-bg.png) bottom;background-repeat:no-repeat;background-size:1200px">
        <div class="container" style="padding-left:0px;padding:right:0px">
            <div class="block-title-two text-center">
                <span class="block-title-two__line"></span><!-- /.block-title-two__line -->
                <h3>华总大厦</h3>
            </div><!-- /.block-title-two -->
            <div class="row high-gutter">
                <div class="col-lg-4">
                    <div class="exhibition-one__single">
                        <div class="exhibition-one__image">
                            <img src="/assets/images/home-bottom1.png" alt="">
                        </div><!-- /.exhibition-one__image -->
                        <div class="exhibition-one__content">
                            <h3><a href="/comming_soon">丹斯里古润金局绅大讲堂</a></h3>
                            <p>11楼</p>
                        </div><!-- /.exhibition-one__content -->
                    </div><!-- /.exhibition-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="exhibition-one__single">
                        <div class="exhibition-one__image">
                            <img src="/assets/images/home-bottom2.png" alt="">
                        </div><!-- /.exhibition-one__image -->
                        <div class="exhibition-one__content">
                            <h3><a href="/comming_soon">丹斯里杨忠礼大礼堂</a></h3>
                            <p>G楼大厅</p>
                        </div><!-- /.exhibition-one__content -->
                    </div><!-- /.exhibition-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="exhibition-one__single">
                        <div class="exhibition-one__image">
                            <img src="/assets/images/home-bottom3.png" alt="">
                        </div><!-- /.exhibition-one__image -->
                        <div class="exhibition-one__content">
                            <h3><a href="/comming_soon">华总马来西亚华人博物馆</a></h3>
                            <p>1楼</p>
                        </div><!-- /.exhibition-one__content -->
                    </div><!-- /.exhibition-one__single -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.exhibition-one -->


    <!--  -->
    <section class="collection-one" style="background-image: url(assets/images/team-bg2.png);">
        <div class="container" style="padding-left:0px;padding:right:0px">
            <div class="collection-one__top">
                <div class="block-title">
                    <p></p>
                    <h3>全国十三州大会堂</h3>
                </div><!-- /.block-title -->
                <div class="more-post__block">
                    <a class="more-post__link" href="#">
                    查看更多
                        <span class="curved-circle">View More &nbsp;&emsp;View More &nbsp;&emsp;View More View More View More &nbsp;&emsp;View &nbsp;&emsp; </span>
                        <!-- /.curved-circle -->
                    </a>
                </div><!-- /.more-post__block -->
            </div><!-- /.collection-one__top -->
        </div><!-- /.container -->

        <div class="collection-one__carousel thm__owl-carousel owl-theme owl-carousel" data-options='{"loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": true, "smartSpeed": 700, "items": 3, "margin": 100, "dots": false, "nav": false, "responsive": { "0": { "items": 1, "margin": 0 }, "625": { "items": 2, "margin": 30 }, "767": { "items": 2, "margin": 30 }, "991": { "items": 2, "margin": 30},  "1199": { "margin": 30, "items": 3}, "1366": { "margin": 50, "items": 3 }, "1440": { "margin": 50, "items": 3 }, "1750": { "items": 3, "margin": 70 }, "1920": { "items": 3, "margin": 100 } }}'>
            <div class="item">
                <div class="collection-one__single">
                    <img class="team-img" src="/assets/images/team/perlis-logo.png"  alt="">
                    <div class="collection-one__content">
                        <h3><a href="/comming_soon">玻璃市州華人大會堂</a></h3>
                    </div><!-- /.collection-one__content -->
                </div><!-- /.collection-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="collection-one__single">
                    <img class="team-img" src="/assets/images/team/kedah-logo.png" alt="">
                    <div class="collection-one__content">
                        <h3><a href="/comming_soon">吉打州華人大會堂</a></h3>
                    </div><!-- /.collection-one__content -->
                </div><!-- /.collection-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="collection-one__single">
                    <img class="team-img" src="/assets/images/team/penang-logo.png" alt="">
                    <div class="collection-one__content">
                        <h3><a href="/comming_soon">檳州華人大會堂</a></h3>
                    </div><!-- /.collection-one__content -->
                </div><!-- /.collection-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="collection-one__single">
                    <img class="team-img" src="/assets/images/team/perak-logo.png" alt="">
                    <div class="collection-one__content">
                        <h3><a href="/comming_soon">霹靂中華大會堂</a></h3>
                    </div><!-- /.collection-one__content -->
                </div><!-- /.collection-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="collection-one__single">
                    <img class="team-img" src="/assets/images/team/pahang-logo.png" alt="">
                    <div class="collection-one__content">
                        <h3><a href="/comming_soon">彭亨华人大会堂</a></h3>
                    </div><!-- /.collection-one__content -->
                </div><!-- /.collection-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="collection-one__single">
                    <img class="team-img" src="/assets/images/team/sl-logo.png" alt="">
                    <div class="collection-one__content">
                        <h3><a href="/comming_soon">吉隆坡暨雪蘭莪中華大會堂</a></h3>
                    </div><!-- /.collection-one__content -->
                </div><!-- /.collection-one__single -->
            </div><!-- /.item -->

            <div class="item">
                <div class="collection-one__single">
                    <img class="team-img" src="/assets/images/team/ns-logo.png" alt="">
                    <div class="collection-one__content">
                        <h3><a href="/comming_soon">森美蘭中華大會堂</a></h3>
                    </div><!-- /.collection-one__content -->
                </div><!-- /.collection-one__single -->
            </div><!-- /.item -->
        
            <div class="item">
                <div class="collection-one__single">
                    <img class="team-img" src="/assets/images/team/johor-logo.png" alt="">
                    <div class="collection-one__content">
                        <h3><a href="/comming_soon">柔佛州中華總會</a></h3>
                    </div><!-- /.collection-one__content -->
                </div><!-- /.collection-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="collection-one__single">
                    <img class="team-img" src="/assets/images/team/kelantan-logo.png" alt="">
                    <div class="collection-one__content">
                        <h3><a href="/comming_soon">吉蘭丹中華大會堂</a></h3>
                    </div><!-- /.collection-one__content -->
                </div><!-- /.collection-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="collection-one__single">
                    <img class="team-img" src="/assets/images/team/terenganu-logo.png" alt="">
                    <div class="collection-one__content">
                        <h3><a href="/comming_soon">登嘉樓中華大會堂</a></h3>
                    </div><!-- /.collection-one__content -->
                </div><!-- /.collection-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="collection-one__single">
                    <img class="team-img" src="/assets/images/team/sabah-logo.png" alt="">
                    <div class="collection-one__content">
                        <h3><a href="/comming_soon">沙巴中華大會堂</a></h3>
                    </div><!-- /.collection-one__content -->
                </div><!-- /.collection-one__single -->
            </div><!-- /.item -->
            <div class="item">
                <div class="collection-one__single">
                    <img class="team-img" src="/assets/images/team/sarawak-logo.png" alt="">
                    <div class="collection-one__content">
                        <h3><a href="/comming_soon">砂拉越華人社團聯合總會</a></h3>
                    </div><!-- /.collection-one__content -->
                </div><!-- /.collection-one__single -->
            </div><!-- /.item -->
        </div><!-- /.collection-one__carousel thm__owl-carousel owl-theme -->
    </section><!-- /.collection-one -->


    <!--  -->
    <section class="featured-collection" style="color:black;background: url(/assets/images/ts-bg.png) bottom;background-repeat:no-repeat;background-size:cover;" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="featured-collection__left">
                        <div class="featured-collection__image"></div><!-- /.featured-collection__image -->
                        <h1>华总会长丹斯里吴添泉元旦献词</h1><br>
                        <p style="font-size:20px;line-weight:16px;">
                            《全民团结拼经济抗涨潮》
                            华总大厦公布的我国2022年度汉字中，“涨”以一路领先之势众“怨”所归，
                            反映了国人在饱受冠病疫情所带来的性命和经济威胁之余，
                            还要面对了另一股生活成本上的沉重挑战...
                        </p>
                        <a style="background-color:#EB1757" href="collection-grid.html" class="thm-btn featured-collection__btn">查看全部</a>
                        <!-- /.thm-btn featured-collection__btn -->
                    </div><!-- /.featured-collection__left -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="featured-collection__right">
                        <div class="featured-collection__image">
                            <img src="/assets/images/ts.png" alt="">
                        </div><!-- /.featured-collection__image -->
                    </div><!-- /.featured-collection__right -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.featured-collection -->


    <!--  -->
    <section class="event-one pb-4" style="display:none;background: url(/assets/images/event-bg.jpg);background-repeat:no-repeat;background-size:cover;">
        <!-- <img src="assets/images/shapes/event-sculpture-1-1.png" alt="" class="event-one__moc"> -->
        <div class="container" style="padding-left:0px;padding:right:0px">
            <div class="block-title-two text-center">
                <span class="block-title-two__line"></span><!-- /.block-title-two__line -->
                <p>What’s Going on</p>
                <h3>最新活动</h3>
            </div><!-- /.block-title-two -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-one__single">
                        <div class="event-one__image">
                            <div class="event-one__date">
                                <span>31</span>
                                Oct
                            </div><!-- /.event-one__date -->
                            <div class="event-one__image-box">
                                <div class="event-one__image-inner">
                                    <img src="{{ asset('assets/images/activity/activity1.png') }}" alt="" style="width: 159px; height:159px;">
                                </div><!-- /.event-one__image-inner -->
                            </div><!-- /.event-one__image-box -->
                        </div><!-- /.event-one__image -->
                        <div class="event-one__content">
                            <h3 style="font-size: 16px;"><a style="width: 500px;" href="event-details.html">2023年东盟美食节将于9月19日至10月10日在中国上海国家会展中心盛大举行</a></h3>
                            <p>漠印需指托莱俭俘完速堆资麦房珩难蚕锡。胚玄丛羊，忍仍庸反油隶摄磅译复榜场欲儒躁股比慕嘀量取兔定，</p>
                        </div><!-- /.event-one__content -->
                        <div class="event-one__btn-block">
                            <a href="event-details.html" class="thm-btn event-one__btn" style="border-radius: 10px;">阅读更多</a>
                        </div><!-- /.event-one__btn-block -->
                    </div><!-- /.event-one__single -->
                </div><!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="event-one__single">
                        <div class="event-one__image">
                            <div class="event-one__date">
                                <span>17</span>
                                Nov
                            </div><!-- /.event-one__date -->
                            <div class="event-one__image-box">
                                <div class="event-one__image-inner">
                                    <img src="assets/images/event/event-1-2.jpg" alt="">
                                </div><!-- /.event-one__image-inner -->
                            </div><!-- /.event-one__image-box -->
                        </div><!-- /.event-one__image -->
                        <div class="event-one__content">
                            <h3><a href="event-details.html">Calvert Richard Jones’s Duomo.</a></h3>
                            <p>Man face fruit divided seasons herb from herb moveth whose.</p>
                        </div><!-- /.event-one__content -->
                        <div class="event-one__btn-block">
                            <a href="event-details.html" class="thm-btn event-one__btn">Learn More</a>
                        </div><!-- /.event-one__btn-block -->
                    </div><!-- /.event-one__single -->
                </div><!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="event-one__single">
                        <div class="event-one__image">
                            <div class="event-one__date">
                                <span>04</span>
                                Dec
                            </div><!-- /.event-one__date -->
                            <div class="event-one__image-box">
                                <div class="event-one__image-inner">
                                    <img src="assets/images/event/event-1-3.jpg" alt="">
                                </div><!-- /.event-one__image-inner -->
                            </div><!-- /.event-one__image-box -->
                        </div><!-- /.event-one__image -->
                        <div class="event-one__content">
                            <h3><a href="event-details.html">Celebrating Museum Day</a></h3>
                            <p>Man face fruit divided seasons herb from herb moveth whose.</p>
                        </div><!-- /.event-one__content -->
                        <div class="event-one__btn-block">
                            <a href="event-details.html" class="thm-btn event-one__btn">Learn More</a>
                        </div><!-- /.event-one__btn-block -->
                    </div><!-- /.event-one__single -->
                </div><!-- /.col-lg-12 -->



                
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center my-3">
                        <div class="more-post__block">
                            <a class="more-post__link" href="#">
                                更多
                                <span class="curved-circle">View More &nbsp;&emsp;View More &nbsp;&emsp;View More View More View More &nbsp;&emsp;View &nbsp;&emsp; </span>
                                <!-- /.curved-circle -->
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.event-one -->

    @include('layouts.footer')
</div><!-- /.about-cta__wrapper -->
@endsection