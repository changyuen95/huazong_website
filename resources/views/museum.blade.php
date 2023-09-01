@extends('layouts.app')

@section('content')
<div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader -->
    <div class="page-wrapper">
        
        <!-- <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
            <div class="container" style="padding-left:0px;padding:right:0px">
                <h2>华博简介</h2>
            </div>
        </section> -->

        <section class="about-four mb-5">
            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="about-four__image wow fadeInRight" data-wow-duration="1500ms">
                    <img src="assets/images/museum/main_p.jpg" alt="">
                </div><!-- /.about-four__image -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-four__content">
                            <div class="block-title">
                                <p>华博简介</p>
                                <h3>华人博物馆</h3>
                            </div><!-- /.block-title -->
                            <div class="about-four__highlite-text">
                                <p>华总马来西亚华人博物馆（简称“华博”）从2018年5月1日开始对外开放，是我国首家全面展示马来西亚华人历史的博物馆。华博位于雪州史里肯邦安华总大厦内第一层，建筑面积达10550平方尺，设有十四个常设展区，藏品超过1000件（组）。</p>
                            </div><!-- /.about-four__highlite-text -->
                            
                        </div><!-- /.about-four__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-four -->

        <section class="history-one mt-5">
            <!-- <img src="assets/images/shapes/history-1-sculp.png" class="history-one__sculp" alt=""> -->
            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="block-title-two text-center">
                    <p>时间线</p>
                    <h3>我们的历史</h3>
                </div><!-- /.block-title-two -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig1.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>华人博物馆金漆招牌</p>
                                    <h3>马来西亚华人博物馆金漆招牌由原木雕刻制成，净重超过400公斤。</h3>
                                </div><!-- /.history-one__top block-title -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig2.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>博物馆入口</p>
                                    <h3>博物馆入口采用马六甲荷兰街华人旧屋设计</h3>
                                </div><!-- /.history-one__top block-title -->
                                <p>马来西亚华人历史悠久，在郑和下西洋和清末民初的移民潮之前，中国人抵达本土的历史可追溯到两千年前。为了让来自不同群体、不同阶层、不同国家的社会大众可以简单明了地认识马来西亚华人社会，博物馆通过三语文字和QR语音导览，结合场景重现、微雕艺术、多媒体展示等多种手法，述说华人先辈当初下南洋到后来落地生根参与国家建设的历程。</p>
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig3.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>中国人南来历史</p>
                                    <h3>中国人南来历史可追溯到两千年前的汉朝</h3>
                                </div><!-- /.history-one__top block-title -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig4.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>船舱</p>
                                    <h3>走进“船舱”，跟随郑和一起下西洋</h3>
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig5.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>栩栩如生的微雕</p>
                                    <h3>栩栩如生的微雕，在述说着我们马来西亚华人的故事</h3>
                                </div><!-- /.history-one__top block-title -->
                                <p>华人先辈们来到这片土地后，与不同族群的同胞和睦共处，将原有的习俗与传统融入本地特色，创造出马来西亚华人独有的文化遗产。无论是高桩舞狮、廿四节令鼓，还是传统的海南咖啡店或打金行，都是博物馆内引人入胜的亮点。</p>
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig6.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>高桩舞狮</p>
                                    <h3>高桩舞狮是马来西亚国家文化遗产之一</h3>
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig7.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>正月初九拜天公</p>
                                    <h3>正月初九拜天公是我国福建人社群最重要的新年习俗</h3>
                                </div><!-- /.history-one__top block-title -->
                                <!-- <p>华人先辈们来到这片土地后，与不同族群的同胞和睦共处，将原有的习俗与传统融入本地特色，创造出马来西亚华人独有的文化遗产。无论是高桩舞狮、廿四节令鼓，还是传统的海南咖啡店或打金行，都是博物馆内引人入胜的亮点。</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig8.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>我国最古老的华人庙宇</p>
                                    <h3>我国最古老的华人庙宇——青云亭和我国独有的民间信仰——拿督公</h3>
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig9.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>AR科技与“古人”</p>
                                    <h3>使用AR科技与“古人”合影</h3>
                                </div><!-- /.history-one__top block-title -->
                                <p>华博同时也是马来西亚首家使用增强现实（AR）技术的博物馆。参观者可轻松通过手机扫描二维码，呼叫出“古人”一起合影。另外，博物馆内的场景由专业学术团队和设计团队精心打造重现。参观过程中，参观者将会受到视觉、听觉和触觉三个方面的冲击，穿梭时空，沉浸式体验那个年代留下来的味道</p>
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig10.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>历史场景</p>
                                    <h3>真实比例复原历史场景</h3>
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig11.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>橡胶王国</p>
                                    <h3>我国曾经是辉煌一时的“橡胶王国”</h3>
                                </div><!-- /.history-one__top block-title -->
                                <!-- <p>华博同时也是马来西亚首家使用增强现实（AR）技术的博物馆。参观者可轻松通过手机扫描二维码，呼叫出“古人”一起合影。另外，博物馆内的场景由专业学术团队和设计团队精心打造重现。参观过程中，参观者将会受到视觉、听觉和触觉三个方面的冲击，穿梭时空，沉浸式体验那个年代留下来的味道</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig12.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>日本占领时期</p>
                                    <h3>华人受尽苦难的日本占领时期</h3>
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig13.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>拍照打卡点</p>
                                    <h3>最受欢迎的拍照打卡点</h3>
                                </div><!-- /.history-one__top block-title -->
                                <!-- <p>华博同时也是马来西亚首家使用增强现实（AR）技术的博物馆。参观者可轻松通过手机扫描二维码，呼叫出“古人”一起合影。另外，博物馆内的场景由专业学术团队和设计团队精心打造重现。参观过程中，参观者将会受到视觉、听觉和触觉三个方面的冲击，穿梭时空，沉浸式体验那个年代留下来的味道</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig14.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>甲必丹叶亚来先生</p>
                                    <!-- <h3>甲必丹叶亚来与林连玉先生</h3> -->
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig15.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>林连玉先生</p>
                                    <!-- <h3>甲必丹叶亚来与林连玉先生</h3> -->
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig16.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>吸引不少学生前来参观学习</p>
                                    <!-- <h3>甲必丹叶亚来与林连玉先生</h3> -->
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig17.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>吸引不少学生前来参观学习</p>
                                    <!-- <h3>甲必丹叶亚来与林连玉先生</h3> -->
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig18.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>本地电视剧组在博物馆内举办推介礼</p>
                                    <!-- <h3>甲必丹叶亚来与林连玉先生</h3> -->
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig19.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>打破博物馆沉闷印象，成为拍照打卡的最佳地点</p>
                                    <!-- <h3>甲必丹叶亚来与林连玉先生</h3> -->
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig20.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>打破博物馆沉闷印象，成为拍照打卡的最佳地点</p>
                                    <!-- <h3>甲必丹叶亚来与林连玉先生</h3> -->
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig21.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>是周末假日一家大小阖家欢乐的好去处</p>
                                    <!-- <h3>甲必丹叶亚来与林连玉先生</h3> -->
                                </div><!-- /.history-one__top -->
                                <!-- <p>Pommy ipsum therewith nutter well chuffed apple and pears wedding tackle balderdash toad in
                                    the whole one feels that wind up Union Jack doolally bloke.</p> -->
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInRight" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig22.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>镇馆之宝1</p>
                                    <h3>镇馆之宝：1959年版马来亚与英属北婆罗洲1元</h3>
                                </div><!-- /.history-one__top -->
                                <p>华博藏品超过1000件（套），都是收集自全国各地的华人相关文物，并在开馆后获得许多社会人士的踊跃捐赠。其中，最珍贵的是两张纸币——1959年发行的一元纸币和1961年发行的十元纸币，被视为“镇馆之宝”。1953年至1967年间，马来亚联合邦、新加坡、砂拉越、沙巴及汶莱采用“马来亚与英属婆罗洲元” (Malaya & British Borneo Dollar) 作为共同货币，由货币委员会 (Board of Commissioners of Currency) 签字发行。</p>
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
                <div class="history-one__single">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="history-one__image wow fadeInLeft" data-wow-duration="1500ms">
                                <img src="assets/images/museum/fig23.png" alt="">
                            </div><!-- /.history-one__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 d-flex">
                            <div class="history-one__content my-auto">
                                <div class="history-one__top block-title">
                                    <p>镇馆之宝2</p>
                                    <h3>镇馆之宝：1961年版马来亚与英属北婆罗洲10元</h3>
                                </div><!-- /.history-one__top -->
                                <p>独立后，货币委员会主席改由我国财政部长担任。直到 1967年，马来西亚、新加坡及汶莱三国停止共同货币协定，我国改为使用国家银行发行的令吉纸币。1959年推出新版1元纸币，签名者是我国第一任财政部长敦李孝式，为我国第一批由本国人签名发行的纸币。 1961 年首次推出的10元纸币，则是由第二任财政部长敦陈修信签发。</p>
                            </div><!-- /.history-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.history-one__single -->
            </div><!-- /.container -->
        </section><!-- /.history-one -->

        <!-- 华博资讯 -->
        <div class="contact-one">
            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="block-title-two text-center">
                    <p style="font-size: 44px;">华博资讯</p>
                </div><!-- /.block-title-two -->
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <div class="contact-one__box">
                            <h3>开馆时间</h3>
                            <p>每周星期四-星期日: 上午10时-下午5时 <br> 
                            公共假期: 上午10时-下午5时 <br> 
                            (售票时间至下午4时为止)</p>
                        </div>
                        <div class="contact-one__box mt-3">
                            <table class="table table-bordered table-sm bg-light">
                                <thead>
                                    <tr>
                                        <th>入门票</th>
                                        <th>票价</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>普通</td>
                                        <td>RM20</td>
                                    </tr>
                                    <tr>
                                        <td>*65岁及以上者 / *OKU</td>
                                        <td>RM10</td>
                                    </tr>
                                    <tr>
                                        <td>*学生 / 小孩</td>
                                        <td>RM5</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>*需出示有效证件，如：身份证 / 驾驶执照 / 护照</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="contact-one__box">
                            <h3>联络</h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="width: 10%" class="py-2"><img src="{{ asset('assets/images/museum/icon_info/WhatsApp.png') }}" alt="WhatsApp" style="width:30px;"></td>
                                        <td class="py-2">+6011-5506 5341</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2"><img src="{{ asset('assets/images/museum/icon_info/Email.png') }}" alt="Email" style="width:30px;"></td>
                                        <td class="py-2"><a href="mailto:malaysianchinesemuseum@gmail.com?subject=museum info" class="text-decoration-none" style="color: #555555">malaysianchinesemuseum@gmail.com</a></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2"><img src="{{ asset('assets/images/museum/icon_info/Global.png') }}" alt="Global" style="width:30px;"></td>
                                        <td class="py-2"><a target="_blank" href="https://malaysianchinesemuseum.wordpress.com" class="text-decoration-none" style="color: #555555">malaysianchinesemuseum.wordpress.com</a></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2"><img src="{{ asset('assets/images/museum/icon_info/Facebook.png') }}" alt="Facebook" style="width:30px;"></td>
                                        <td class="py-2"><a target="_blank" href="https://facebook.com/MalaysianChineseMuseum" class="text-decoration-none" style="color: #555555">facebook.com/MalaysianChineseMuseum</a></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2"><img src="{{ asset('assets/images/museum/icon_info/Instagram.png') }}" alt="Instagram" style="width:30px;"></td>
                                        <td class="py-2"><a target="_blank" href="https://instagram.com/malaysianchinesemuseum" class="text-decoration-none" style="color: #555555">instagram.com/malaysianchinesemuseum</a></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 align-top"><img src="{{ asset('assets/images/museum/icon_info/Location.png') }}" alt="Location" style="width:30px;"></td>
                                        <td class="py-2">Wisma Huazong, Lot 15285, 0.7KM Lebuhraya Sungai Besi, 43300 Seri Kembangan, Selangor.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-5">
                        <div class="contact-one__box">
                            <h3>参观须知</h3>
                            <ol type="1">
                                <li>所有访客需购票入馆。</li>
                                <li>请在参观的过程中，将您的手机调至为振动或静音模式，并小声说话，禁止喧闹。</li>
                                <li>禁止在博物馆内饮食。</li>
                                <li>请勿触摸任何展览物品，请勿坐在展柜或靠在墙壁上歇息。</li>
                                <li>禁止在馆内奔跑、跳跃、破坏或做其他有害的行为。请注意，若您造成任何损坏，您必须对该行为负责，赔偿损失并承担相应的法律责任。</li>
                                <li>禁止在博物馆内吸烟。</li>
                                <li>请勿在博物馆内使用闪光灯、补光器材或设置三脚架拍摄。若要进行任何商业性拍摄、课业性拍摄、电影或其他，必须事先向博物馆提出申请。</li>
                                <li>若博物馆工作人员认为您的举止可能已对他人造成危险或干扰，您将被要求离开博物馆或禁止参观博物馆。</li>
                            </ol>
                        </div>
                        
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.contact-one -->
        <!-- <section class="video-one text-center" style="background-image: url(assets/images/resources/video-parallax-1-1-.jpg);">
            <div class="container" style="padding-left:0px;padding:right:0px">
                <a href="https://www.youtube.com/watch?v=hO1tzmi1V5g" class="video-popup video-one__btn"><i class="fa fa-play"></i></a>
            </div>
        </section> -->
        <!-- <section class="team-one">
            <div class="container" style="padding-left:0px;padding:right:0px">
                <div class="block-title-two text-center">
                    <p>Our Team</p>
                    <h3>Expert Members</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="assets/images/team/team-1-1.jpg" alt="">
                                <div class="team-one__social">
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin-in"></a>
                                    <a href="#" class="fab fa-google-plus-g"></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3>Violet Jones</h3>
                                <p>Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="assets/images/team/team-1-2.jpg" alt="">
                                <div class="team-one__social">
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin-in"></a>
                                    <a href="#" class="fab fa-google-plus-g"></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3>Sarah Boyd</h3>
                                <p>Developer</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="assets/images/team/team-1-3.jpg" alt="">
                                <div class="team-one__social">
                                    <a href="#" class="fab fa-facebook-f"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin-in"></a>
                                    <a href="#" class="fab fa-google-plus-g"></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3>Marguerite Holt</h3>
                                <p>Developer</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section> -->

        
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