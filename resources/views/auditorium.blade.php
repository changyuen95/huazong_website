@extends('layouts.app')

@section('title', '马来西亚中华大会堂总会 - 丹斯里杨忠礼大礼堂')


@section('content')
<!-- Banner Section -->
<section class="banner-section">
    <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel" data-options='{"loop": true, "items": 1, "margin": 0, "dots": false, "nav": true, "animateOut": &quot;fadeOut&quot;, "animateIn": &quot;fadeIn&quot;, "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 6000, "autoplayHoverPause": false}'>

     <!-- Slide Item  -->
     <div class="slide-item">
            <div class="image-layer lazy-image" style="background-size:contain;background-image: url('assets/images/auditorium/auditorium.jpg');"></div>

            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="content-box text-center">
                    <h3></h3>
                    {{-- <h2>丹斯里杨忠礼大礼堂</h2> --}}
                    {{-- <div class="btn-box"><a href="/event-detail/202310081715" class="thm-btn btn-style-one">查看更多</a></div> --}}
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Banner Section -->

<div class="about-cta__wrapper" style="margin-top:100px">
    <!--  -->
    <section class="cta-two">
        <div class="container" style="padding-left:0px;padding-right:0px">
            <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                <div class="row no-gutters">
                    <div class="col-lg-4">
                        <div class="cta-two__box">
                            <div class="cta-two__icon">
                                <i class="fa fa-place-of-worship"></i>
                            </div><!-- /.cta-two__icon -->
                            <h3>容量</h3>
                            <p>280人
                               </p>
                            {{-- <a href="contact.html" class="thm-btn">All Hours</a><!-- /.thm-btn --> --}}
                        </div><!-- /.cta-two__box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="cta-two__box">
                            <div class="cta-two__icon">
                                <i class="muzex-icon-location"></i>
                            </div><!-- /.cta-two__icon -->
                            <h3>地点</h3>
                            <p><b>丹斯里古润金局绅大讲堂<b><br>Wisma Huazong, Lot 15285, Sungai Besi Expy, 43300 Seri Kembangan, Selangor</p>
                            {{-- <a href="contact.html" class="thm-btn">Getting Here</a><!-- /.thm-btn --> --}}
                        </div><!-- /.cta-two__box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="cta-two__box" style="width:22rem">
                            <div class="cta-two__icon">
                                <i class="muzex-icon-ticket"></i>
                            </div><!-- /.cta-two__icon -->
                            <h3>设备</h3>
                            <p>空调、麦克风、私人休息室、VIP沙发、茶歇休息大厅、基础音响系统以及LED屏幕</p>
                            {{-- <a href="contact.html" class="thm-btn">Buy Online</a><!-- /.thm-btn --> --}}
                        </div><!-- /.cta-two__box -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </section><!-- /.cta-two -->


    <!--  -->
    <section class="featured-collection" style="color:black;background: url(/assets/images/ts-bg.png) bottom;background-repeat:no-repeat;background-size:cover;" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="featured-collection__left">
                        <div class="featured-collection__image"></div><!-- /.featured-collection__image -->
                        <h1 style="color:#EB1757">丹斯里古润金局绅大讲堂</h1><br>
                        <ul>
                            <li>场地舒适优雅，是脱口秀的理想场所。</li>
                            <li>非常适合企业活动，如产品发布会和媒体发布活动</li>
                            <li>场地设有空调、麦克风、私人休息室、VIP沙发、茶歇休息大厅、基础音响系统以及LED屏幕。</li>
                            <li>设有免费停车场</li>
                            {{-- <li>优雅的布局和大型吊灯, 理想的婚礼、音乐会场地，</li>
                            <li>适合企业活动，如产品和媒体发布会、派对、培训和发展活动、团队建设、研讨会和大会</li>
                            <li>场地配备空调、麦克风、私人房间、VIP沙发、用于茶歇的门厅、基本音响系统以及LED屏幕。</li>
                            <li>设有免费停车场</li> --}}

                        </ul>
                        <!-- /.thm-btn featured-collection__btn -->
                    </div><!-- /.featured-collection__left -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="featured-collection__right">
                        <div class="featured-collection__image">
                            <img src="/assets/images/auditorium/auditorium.jpg" alt="">
                        </div><!-- /.featured-collection__image -->
                    </div><!-- /.featured-collection__right -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.featured-collection -->


    <section class="collection-two collection-two__collection-full-page">
        <div class="container-fluid">
            <div class="block-title-two text-center">
                <h3></h3>
            </div><!-- /.block-title-two -->
            <div class="collection-two__carousel shadowed__carousel thm__owl-carousel owl-carousel owl-theme" data-options='{
        "loop": true, "margin": 0, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": true, "items": 5, "smartSpeed": 700, "dots": false, "nav": true, "responsive": {

            "991": { "items": 3},
            "767": { "items": 2},
            "575": { "items": 2},
            "480": { "items": 2},
            "0": { "items": 1}
        }
    }'>
                <div class="item">
                    <div class="collection-two__single">
                        <div class="collection-two__image">
                            <img style="height:20rem" src="assets/images/auditorium/12.jpeg" alt="">
                        </div><!-- /.collection-two__image -->
                        <div class="">

                        </div><!-- /. -->
                    </div><!-- /.collection-two__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="collection-two__single">
                        <div class="collection-two__image">
                            <img style="height:20rem" src="assets/images/auditorium/13.jpeg" alt="">
                        </div><!-- /.collection-two__image -->
                        <div class="">

                        </div><!-- /. -->
                    </div><!-- /.collection-two__single -->
                </div><!-- /.item -->

                <div class="item">
                    <div class="collection-two__single">
                        <div class="collection-two__image">
                            <img style="height:20rem" src="assets/images/auditorium/14.jpeg" alt="">
                        </div><!-- /.collection-two__image -->
                        <div class="">

                        </div><!-- /. -->
                    </div><!-- /.collection-two__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="collection-two__single">
                        <div class="collection-two__image">
                            <img style="height:20rem" src="assets/images/auditorium/15.jpeg" alt="">
                        </div><!-- /.collection-two__image -->
                        <div class="">

                        </div><!-- /. -->
                    </div><!-- /.collection-two__single -->
                </div><!-- /.item -->


            </div><!-- /.collection-two__carousel shadowed__carousel thm__owl-carousel owl-carousel owl-theme -->
        </div><!-- /.container-fluid -->
    </section><!-- /.collection-two -->

    @include('layouts.footer')
</div><!-- /.about-cta__wrapper -->
@endsection0
